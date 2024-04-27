<?php

namespace App\Utils\Admin;

use App\Entity\Contractor;
use App\Entity\Inspector;
use App\Entity\Invoice;
use App\Entity\Item;
use App\Entity\Project;
use App\Entity\ProjectItemDetails;
use App\Entity\ProjectNotes;
use App\Utils\Base;

class ProjectService extends Base
{

    /**
     * EliminarNotes: Elimina un notes en la BD
     * @param int $notes_id Id
     * @author Marcel
     */
    public function EliminarNotes($notes_id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $this->getDoctrine()->getRepository(ProjectNotes::class)
            ->find($notes_id);
        /**@var ProjectNotes $entity */
        if ($entity != null) {
            $notes = $entity->getNotes();
            $project_name = $entity->getProject()->getName();

            $em->remove($entity);
            $em->flush();

            //Salvar log
            $log_operacion = "Delete";
            $log_categoria = "Project Notes";
            $log_descripcion = "The notes: $notes is delete from project: $project_name";
            $this->SalvarLog($log_operacion, $log_categoria, $log_descripcion);

            $resultado['success'] = true;
        } else {
            $resultado['success'] = false;
            $resultado['error'] = "The requested record does not exist";
        }

        return $resultado;
    }

    /**
     * CargarDatosNotes: Carga los datos de un notes
     *
     * @param int $notes_id Id
     *
     * @author Marcel
     */
    public function CargarDatosNotes($notes_id)
    {
        $resultado = array();
        $arreglo_resultado = array();

        $entity = $this->getDoctrine()->getRepository(ProjectNotes::class)
            ->find($notes_id);
        /** @var ProjectNotes $entity */
        if ($entity != null) {

            $arreglo_resultado['notes'] = $entity->getNotes();
            $arreglo_resultado['date'] = $entity->getDate()->format('m/d/Y');

            $resultado['success'] = true;
            $resultado['notes'] = $arreglo_resultado;
        }

        return $resultado;
    }

    /**
     * SalvarNotes
     * @param $notes_id
     * @param $project_id
     * @param $notes
     * @param $date
     * @return array
     */
    public function SalvarNotes($notes_id, $project_id, $notes, $date)
    {

        $em = $this->getDoctrine()->getManager();

        $project_entity = $this->getDoctrine()->getRepository(Project::class)
            ->find($project_id);
        /** @var Project $project_entity */
        if ($project_entity != null) {

            $entity = null;
            $is_new = false;

            if (is_numeric($notes_id)) {
                $entity = $this->getDoctrine()->getRepository(ProjectNotes::class)
                    ->find($notes_id);
            }

            if ($entity == null) {
                $entity = new ProjectNotes();
                $is_new = true;
            }

            $entity->setNotes($notes);

            if ($date != '') {
                $date = \DateTime::createFromFormat('m/d/Y', $date);
                $entity->setDate($date);
            }

            $entity->setProject($project_entity);

            $log_operacion = "Add";
            $log_descripcion = "The notes: $notes is add to the project: " . $project_entity->getName();

            if ($is_new) {
                $em->persist($entity);
            } else {
                $log_operacion = "Update";
                $log_descripcion = "The notes: $notes is modified to the project: " . $project_entity->getName();
            }

            $em->flush();

            //Salvar log
            $log_categoria = "Project Notes";
            $this->SalvarLog($log_operacion, $log_categoria, $log_descripcion);

            $resultado['success'] = true;

        } else {
            $resultado['success'] = false;
            $resultado['error'] = "The project not exist.";
        }

        return $resultado;

    }

    /**
     * ListarNotes: Listar los notes
     *
     * @param int $start Inicio
     * @param int $limit Limite
     * @param string $sSearch Para buscar
     *
     * @author Marcel
     */
    public function ListarNotes($start, $limit, $sSearch, $iSortCol_0, $sSortDir_0, $project_id, $fecha_inicial, $fecha_fin)
    {
        $arreglo_resultado = array();
        $cont = 0;

        $lista = $this->getDoctrine()->getRepository(ProjectNotes::class)
            ->ListarNotes($start, $limit, $sSearch, $iSortCol_0, $sSortDir_0, $project_id, $fecha_inicial, $fecha_fin);

        foreach ($lista as $value) {
            $notes_id = $value->getId();

            $acciones = $this->ListarAccionesNotes($notes_id);

            $arreglo_resultado[$cont] = array(
                "id" => $notes_id,
                "notes" => $value->getNotes(),
                "date" => $value->getDate()->format('m/d/Y'),
                "acciones" => $acciones
            );

            $cont++;
        }

        return $arreglo_resultado;
    }

    /**
     * TotalNotes: Total de notes
     * @param string $sSearch Para buscar
     * @author Marcel
     */
    public function TotalNotes($sSearch, $project_id, $fecha_inicial, $fecha_fin)
    {
        $total = $this->getDoctrine()->getRepository(ProjectNotes::class)
            ->TotalNotes($sSearch, $project_id, $fecha_inicial, $fecha_fin);

        return $total;
    }

    /**
     * ListarAccionesNotes: Lista las acciones
     *
     * @author Marcel
     */
    public function ListarAccionesNotes($id)
    {
        $usuario = $this->getUser();
        $permiso = $this->BuscarPermiso($usuario->getUsuarioId(), 9);

        $acciones = "";

        if (count($permiso) > 0) {
            if ($permiso[0]['editar']) {
                $acciones .= '<a href="javascript:;" class="edit m-portlet__nav-link btn m-btn m-btn--hover-success m-btn--icon m-btn--icon-only m-btn--pill" title="Edit record" data-id="' . $id . '"> <i class="la la-edit"></i> </a> ';
                $acciones .= ' <a href="javascript:;" class="delete m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete record" data-id="' . $id . '"><i class="la la-trash"></i></a>';
            } else {
                $acciones .= '<a href="javascript:;" class="edit m-portlet__nav-link btn m-btn m-btn--hover-success m-btn--icon m-btn--icon-only m-btn--pill" title="View record" data-id="' . $id . '"> <i class="la la-eye"></i> </a> ';
            }
        }

        return $acciones;
    }

    /**
     * ListarOrdenados
     * @param $search
     * @param $contractor_id
     * @param $inspector_id
     * @return array
     */
    public function ListarOrdenados($search, $contractor_id, $inspector_id)
    {
        $projects = [];

        $lista = $this->getDoctrine()->getRepository(Project::class)
            ->ListarOrdenados($search, $contractor_id, $inspector_id);
        foreach ($lista as $value) {
            $projects[] = [
                'project_id' => $value->getProjectId(),
                'number' => $value->getProjectNumber(),
                'name' => $value->getName()
            ];
        }

        return $projects;
    }

    /**
     * ListarItemDetailsParaInvoice
     * @param $project_id
     * @param $fecha_inicial
     * @param $fecha_fin
     * @return array
     */
    public function ListarItemDetailsParaInvoice($project_id, $fecha_inicial, $fecha_fin)
    {
        $items = [];

        $project_items = $this->getDoctrine()->getRepository(ProjectItemDetails::class)
            ->ListarItemDetails($project_id, $fecha_inicial, $fecha_fin);
        foreach ($project_items as $value) {

            $item_details_id = $value->getId();

            $quantity = $value->getQuantity();
            $price = $value->getPrice();
            $total = $quantity * $price;

            $items[] = [
                "id" => $item_details_id,
                "item_id" => $value->getItem()->getItemId(),
                "item" => $value->getItem()->getDescription(),
                "unit" => $value->getItem()->getUnit()->getDescription(),
                "quantity" => $quantity,
                "price" => $price,
                "total" => $total,
                "date" => $value->getDate()->format('m/d/Y'),
            ];
        }

        return $items;
    }

    /**
     * CargarDatosItemDetails: Carga los datos de un item project
     *
     * @param int $item_details_id Id
     *
     * @author Marcel
     */
    public function CargarDatosItemDetails($item_details_id)
    {
        $resultado = array();
        $arreglo_resultado = array();

        $entity = $this->getDoctrine()->getRepository(ProjectItemDetails::class)
            ->find($item_details_id);
        /** @var ProjectItemDetails $entity */
        if ($entity != null) {

            $arreglo_resultado['item_id'] = $entity->getItem()->getItemId();
            $arreglo_resultado['quantity'] = $entity->getQuantity();
            $arreglo_resultado['price'] = $entity->getPrice();
            $arreglo_resultado['date'] = $entity->getDate()->format('m/d/Y');

            $resultado['success'] = true;
            $resultado['item'] = $arreglo_resultado;
        }

        return $resultado;
    }

    /**
     * ListarItemDetails: Listar los items details
     *
     * @param int $start Inicio
     * @param int $limit Limite
     * @param string $sSearch Para buscar
     *
     * @author Marcel
     */
    public function ListarItemDetails($start, $limit, $sSearch, $iSortCol_0, $sSortDir_0, $project_id, $item_id, $fecha_inicial, $fecha_fin)
    {
        $arreglo_resultado = array();
        $cont = 0;

        $lista = $this->getDoctrine()->getRepository(ProjectItemDetails::class)
            ->ListarItems($start, $limit, $sSearch, $iSortCol_0, $sSortDir_0, $project_id, $item_id, $fecha_inicial, $fecha_fin);

        foreach ($lista as $value) {
            $item_details_id = $value->getId();

            $acciones = $this->ListarAccionesItemDetails($item_details_id);

            $quantity = $value->getQuantity();
            $price = $value->getPrice();
            $total = $quantity * $price;

            $arreglo_resultado[$cont] = array(
                "id" => $item_details_id,
                "item" => $value->getItem()->getDescription(),
                "unit" => $value->getItem()->getUnit()->getDescription(),
                "quantity" => $quantity,
                "price" => number_format($price, 2, '.', ','),
                "total" => number_format($total, 2, '.', ','),
                "date" => $value->getDate()->format('m/d/Y'),
                "acciones" => $acciones
            );

            $cont++;
        }

        return $arreglo_resultado;
    }

    /**
     * TotalItemDetails: Total de items
     * @param string $sSearch Para buscar
     * @author Marcel
     */
    public function TotalItemDetails($sSearch, $project_id, $item_id, $fecha_inicial, $fecha_fin)
    {
        $total = $this->getDoctrine()->getRepository(ProjectItemDetails::class)
            ->TotalItems($sSearch, $project_id, $item_id, $fecha_inicial, $fecha_fin);

        return $total;
    }

    /**
     * ListarAcciones: Lista los permisos de un usuario de la BD
     *
     * @author Marcel
     */
    public function ListarAccionesItemDetails($id)
    {
        $usuario = $this->getUser();
        $permiso = $this->BuscarPermiso($usuario->getUsuarioId(), 9);

        $acciones = "";

        if (count($permiso) > 0) {
            if ($permiso[0]['editar']) {
                $acciones .= '<a href="javascript:;" class="edit m-portlet__nav-link btn m-btn m-btn--hover-success m-btn--icon m-btn--icon-only m-btn--pill" title="Edit record" data-id="' . $id . '"> <i class="la la-edit"></i> </a> ';
                $acciones .= ' <a href="javascript:;" class="delete m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete record" data-id="' . $id . '"><i class="la la-trash"></i></a>';
            } else {
                $acciones .= '<a href="javascript:;" class="edit m-portlet__nav-link btn m-btn m-btn--hover-success m-btn--icon m-btn--icon-only m-btn--pill" title="View record" data-id="' . $id . '"> <i class="la la-eye"></i> </a> ';
            }
        }

        return $acciones;
    }

    /**
     * SalvarItemDetails
     * @param $item_details_id
     * @param $project_id
     * @param $item_id
     * @param $quantity
     * @param $price
     * @param $date
     * @return array
     */
    public function SalvarItemDetails($item_details_id, $project_id, $item_id, $quantity, $price, $date)
    {

        $em = $this->getDoctrine()->getManager();

        $project_entity = $this->getDoctrine()->getRepository(Project::class)
            ->find($project_id);
        $item_entity = $this->getDoctrine()->getRepository(Item::class)
            ->find($item_id);
        /** @var Project $project_entity */
        if ($project_entity != null && $item_entity != null) {

            $entity = null;
            $is_new = false;

            if (is_numeric($item_details_id)) {
                $entity = $this->getDoctrine()->getRepository(ProjectItemDetails::class)
                    ->find($item_details_id);
            }

            if ($entity == null) {
                $entity = new ProjectItemDetails();
                $is_new = true;
            }

            $entity->setQuantity($quantity);
            $entity->setPrice($price);

            if ($date != '') {
                $date = \DateTime::createFromFormat('m/d/Y', $date);
                $entity->setDate($date);
            }

            $entity->setProject($project_entity);
            $entity->setItem($item_entity);

            $log_operacion = "Add";
            $log_descripcion = "The item is add: " . $item_entity->getDescription();

            if ($is_new) {
                $em->persist($entity);
            } else {
                $log_operacion = "Update";
                $log_descripcion = "The item is modified: " . $item_entity->getDescription();
            }

            $em->flush();

            //Salvar log
            $log_categoria = "Project Item Details";
            $this->SalvarLog($log_operacion, $log_categoria, $log_descripcion);

            $resultado['success'] = true;

        } else {
            $resultado['success'] = false;
            $resultado['error'] = "The project or item not exist.";
        }

        return $resultado;

    }

    /**
     * EliminarItemDetails: Elimina un item details en la BD
     * @param int $item_details_id Id
     * @author Marcel
     */
    public function EliminarItemDetails($item_details_id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $this->getDoctrine()->getRepository(ProjectItemDetails::class)
            ->find($item_details_id);
        /**@var ProjectItemDetails $entity */
        if ($entity != null) {

            $item_name = $entity->getItem()->getDescription();

            $em->remove($entity);
            $em->flush();

            //Salvar log
            $log_operacion = "Delete";
            $log_categoria = "Item Project";
            $log_descripcion = "The item details project is deleted: $item_name";
            $this->SalvarLog($log_operacion, $log_categoria, $log_descripcion);

            $resultado['success'] = true;
        } else {
            $resultado['success'] = false;
            $resultado['error'] = "The requested record does not exist";
        }

        return $resultado;
    }

    /**
     * CargarDatosProject: Carga los datos de un project
     *
     * @param int $project_id Id
     *
     * @author Marcel
     */
    public function CargarDatosProject($project_id)
    {
        $resultado = array();
        $arreglo_resultado = array();

        $entity = $this->getDoctrine()->getRepository(Project::class)
            ->find($project_id);
        /** @var Project $entity */
        if ($entity != null) {

            $arreglo_resultado['contractor_id'] = $entity->getContractor()->getContractorId();
            $arreglo_resultado['inspector_id'] = $entity->getInspector() != null ? $entity->getInspector()->getInspectorId() : '';

            $arreglo_resultado['number'] = $entity->getProjectNumber();
            $arreglo_resultado['name'] = $entity->getName();
            $arreglo_resultado['location'] = $entity->getLocation();
            $arreglo_resultado['po_number'] = $entity->getPoNumber();
            $arreglo_resultado['po_cg'] = $entity->getPoCG();
            $arreglo_resultado['manager'] = $entity->getManager();
            $arreglo_resultado['status'] = $entity->getStatus();

            $resultado['success'] = true;
            $resultado['project'] = $arreglo_resultado;
        }

        return $resultado;
    }

    /**
     * EliminarProject: Elimina un rol en la BD
     * @param int $project_id Id
     * @author Marcel
     */
    public function EliminarProject($project_id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $this->getDoctrine()->getRepository(Project::class)
            ->find($project_id);
        /**@var Project $entity */
        if ($entity != null) {

            // invoices
            $invoices = $this->getDoctrine()->getRepository(Invoice::class)
                ->ListarInvoicesDeProject($project_id);
            if (count($invoices) > 0) {
                $resultado['success'] = false;
                $resultado['error'] = "The project could not be deleted, because it is related to a invoice";
                return $resultado;
            }

            // details
            $items = $this->getDoctrine()->getRepository(ProjectItemDetails::class)
                ->ListarItemDetails($project_id);
            foreach ($items as $item) {
                $em->remove($item);
            }

            // notes
            $notes = $this->getDoctrine()->getRepository(ProjectNotes::class)
                ->ListarNotesDeProject($project_id);
            foreach ($notes as $note) {
                $em->remove($note);
            }

            $project_descripcion = $entity->getName();


            $em->remove($entity);
            $em->flush();

            //Salvar log
            $log_operacion = "Delete";
            $log_categoria = "Project";
            $log_descripcion = "The project is deleted: $project_descripcion";
            $this->SalvarLog($log_operacion, $log_categoria, $log_descripcion);

            $resultado['success'] = true;
        } else {
            $resultado['success'] = false;
            $resultado['error'] = "The requested record does not exist";
        }

        return $resultado;
    }

    /**
     * EliminarProjects: Elimina los projects seleccionados en la BD
     * @param int $ids Ids
     * @author Marcel
     */
    public function EliminarProjects($ids)
    {
        $em = $this->getDoctrine()->getManager();

        if ($ids != "") {
            $ids = explode(',', $ids);
            $cant_eliminada = 0;
            $cant_total = 0;
            foreach ($ids as $project_id) {
                if ($project_id != "") {
                    $cant_total++;
                    $entity = $this->getDoctrine()->getRepository(Project::class)
                        ->find($project_id);
                    /**@var Project $entity */
                    if ($entity != null) {

                        // invoices
                        $invoices = $this->getDoctrine()->getRepository(Invoice::class)
                            ->ListarInvoicesDeProject($project_id);
                        if (count($invoices) == 0) {
                            // details
                            $items = $this->getDoctrine()->getRepository(ProjectItemDetails::class)
                                ->ListarItemDetails($project_id);
                            foreach ($items as $item) {
                                $em->remove($item);
                            }

                            // notes
                            $notes = $this->getDoctrine()->getRepository(ProjectNotes::class)
                                ->ListarNotesDeProject($project_id);
                            foreach ($notes as $note) {
                                $em->remove($note);
                            }

                            $project_descripcion = $entity->getName();

                            $em->remove($entity);
                            $cant_eliminada++;

                            //Salvar log
                            $log_operacion = "Delete";
                            $log_categoria = "Project";
                            $log_descripcion = "The project is deleted: $project_descripcion";
                            $this->SalvarLog($log_operacion, $log_categoria, $log_descripcion);
                        }

                    }
                }
            }
        }
        $em->flush();

        if ($cant_eliminada == 0) {
            $resultado['success'] = false;
            $resultado['error'] = "The projects could not be deleted, because they are associated with a invoice";
        } else {
            $resultado['success'] = true;

            $mensaje = ($cant_eliminada == $cant_total) ? "The operation was successful" : "The operation was successful. But attention, it was not possible to delete all the selected projects because they are associated with a invoice";
            $resultado['message'] = $mensaje;
        }

        return $resultado;
    }

    /**
     * ActualizarProject: Actuializa los datos del rol en la BD
     * @param int $project_id Id
     * @author Marcel
     */
    public function ActualizarProject($project_id, $contractor_id, $inspector_id, $number, $name, $location, $po_number, $po_cg, $manager, $status)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $this->getDoctrine()->getRepository(Project::class)
            ->find($project_id);
        /** @var Project $entity */
        if ($entity != null) {
            //Verificar description
            $project = $this->getDoctrine()->getRepository(Project::class)
                ->findOneBy(['projectNumber' => $number]);
            if ($project != null && $entity->getProjectId() != $project->getProjectId()) {
                $resultado['success'] = false;
                $resultado['error'] = "The project number is in use, please try entering another one.";
                return $resultado;
            }

            $entity->setProjectNumber($number);
            $entity->setName($name);
            $entity->setLocation($location);
            $entity->setPoNumber($po_number);
            $entity->setPoCG($po_cg);
            $entity->setManager($manager);
            $entity->setStatus($status);

            if ($contractor_id != '') {
                $contractor = $this->getDoctrine()->getRepository(Contractor::class)
                    ->find($contractor_id);
                $entity->setContractor($contractor);
            }
            if ($inspector_id != '') {
                $inspector = $this->getDoctrine()->getRepository(Inspector::class)
                    ->find($inspector_id);
                $entity->setInspector($inspector);
            }

            $entity->setUpdatedAt(new \DateTime());

            $em->flush();

            //Salvar log
            $log_operacion = "Update";
            $log_categoria = "Project";
            $log_descripcion = "The project is modified: $name";
            $this->SalvarLog($log_operacion, $log_categoria, $log_descripcion);

            $resultado['success'] = true;

            return $resultado;
        }
    }

    /**
     * SalvarProject: Guarda los datos de project en la BD
     * @param string $description Nombre
     * @author Marcel
     */
    public function SalvarProject($contractor_id, $inspector_id, $number, $name, $location, $po_number, $po_cg, $manager, $status)
    {
        $em = $this->getDoctrine()->getManager();

        //Verificar number
        $project = $this->getDoctrine()->getRepository(Project::class)
            ->findOneBy(['projectNumber' => $number]);
        if ($project != null) {
            $resultado['success'] = false;
            $resultado['error'] = "The project number is in use, please try entering another one.";
            return $resultado;
        }

        $entity = new Project();

        $entity->setProjectNumber($number);
        $entity->setName($name);
        $entity->setLocation($location);
        $entity->setPoNumber($po_number);
        $entity->setPoCG($po_cg);
        $entity->setManager($manager);
        $entity->setStatus($status);

        if ($contractor_id != '') {
            $contractor = $this->getDoctrine()->getRepository(Contractor::class)
                ->find($contractor_id);
            $entity->setContractor($contractor);
        }
        if ($inspector_id != '') {
            $inspector = $this->getDoctrine()->getRepository(Inspector::class)
                ->find($inspector_id);
            $entity->setInspector($inspector);
        }

        $entity->setCreatedAt(new \DateTime());

        $em->persist($entity);

        $em->flush();

        //Salvar log
        $log_operacion = "Add";
        $log_categoria = "Project";
        $log_descripcion = "The project is added: $name";
        $this->SalvarLog($log_operacion, $log_categoria, $log_descripcion);

        $resultado['success'] = true;

        return $resultado;
    }

    /**
     * ListarProjects: Listar los projects
     *
     * @param int $start Inicio
     * @param int $limit Limite
     * @param string $sSearch Para buscar
     *
     * @author Marcel
     */
    public function ListarProjects($start, $limit, $sSearch, $iSortCol_0, $sSortDir_0, $contractor_id, $inspector_id, $status)
    {
        $arreglo_resultado = array();
        $cont = 0;

        $lista = $this->getDoctrine()->getRepository(Project::class)
            ->ListarProjects($start, $limit, $sSearch, $iSortCol_0, $sSortDir_0, $contractor_id, $inspector_id, $status);

        foreach ($lista as $value) {
            $project_id = $value->getProjectId();

            $acciones = $this->ListarAcciones($project_id);

            $arreglo_resultado[$cont] = array(
                "id" => $project_id,
                "projectNumber" => $value->getProjectNumber(),
                "name" => $value->getName(),
                "location" => $value->getLocation(),
                "contractor" => $value->getContractor()->getName(),
                "inspector" => $value->getInspector() != null ? $value->getInspector()->getName() : '',
                "manager" => $value->getManager(),
                "status" => $value->getStatus() ? 1 : 0,
                "acciones" => $acciones
            );

            $cont++;
        }

        return $arreglo_resultado;
    }

    /**
     * TotalProjects: Total de projects
     * @param string $sSearch Para buscar
     * @author Marcel
     */
    public function TotalProjects($sSearch, $contractor_id, $inspector_id, $status)
    {
        $total = $this->getDoctrine()->getRepository(Project::class)
            ->TotalProjects($sSearch, $contractor_id, $inspector_id, $status);

        return $total;
    }

    /**
     * ListarAcciones: Lista los permisos de un usuario de la BD
     *
     * @author Marcel
     */
    public function ListarAcciones($id)
    {
        $usuario = $this->getUser();
        $permiso = $this->BuscarPermiso($usuario->getUsuarioId(), 9);

        $acciones = "";

        if (count($permiso) > 0) {
            if ($permiso[0]['editar']) {
                $acciones .= '<a href="javascript:;" class="edit m-portlet__nav-link btn m-btn m-btn--hover-success m-btn--icon m-btn--icon-only m-btn--pill" title="Edit record" data-id="' . $id . '"> <i class="la la-edit"></i> </a> ';
            } else {
                $acciones .= '<a href="javascript:;" class="edit m-portlet__nav-link btn m-btn m-btn--hover-success m-btn--icon m-btn--icon-only m-btn--pill" title="View record" data-id="' . $id . '"> <i class="la la-eye"></i> </a> ';
            }
            if ($permiso[0]['eliminar']) {
                $acciones .= ' <a href="javascript:;" class="delete m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete record" data-id="' . $id . '"><i class="la la-trash"></i></a>';
            }
        }

        return $acciones;
    }
}