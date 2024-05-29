<?php

namespace App\Utils\Admin;

use App\Entity\Company;
use App\Entity\DataTrackingItem;
use App\Entity\Equation;
use App\Entity\Inspector;
use App\Entity\Invoice;
use App\Entity\Item;
use App\Entity\Project;
use App\Entity\DataTracking;
use App\Entity\ProjectItem;
use App\Entity\ProjectNotes;
use App\Entity\Unit;
use App\Utils\Base;

class ProjectService extends Base
{

    /**
     * AgregarItem
     * @param $item_id
     * @param $item_name
     * @param $unit_id
     * @param $quantity
     * @param $price
     * @param $yield_calculation
     * @param $equation_id
     * @return array
     */
    public function AgregarItem($project_item_id, $project_id, $item_id, $item_name, $unit_id, $quantity, $price, $yield_calculation, $equation_id)
    {
        $resultado = [];

        $em = $this->getDoctrine()->getManager();

        $project_entity = $this->getDoctrine()->getRepository(Project::class)->find($project_id);
        if ($project_entity != null) {
            $project_item_entity = null;

            if (is_numeric($project_item_id)) {
                $project_item_entity = $this->getDoctrine()->getRepository(ProjectItem::class)
                    ->find($project_item_id);
            }

            $is_new_project_item = false;
            if ($project_item_entity == null) {
                $project_item_entity = new ProjectItem();
                $is_new_project_item = true;
            }

            $project_item_entity->setYieldCalculation($yield_calculation);
            $project_item_entity->setPrice($price);
            $project_item_entity->setQuantity($quantity);

            $equation_entity = null;
            if ($equation_id != '') {
                $equation_entity = $this->getDoctrine()->getRepository(Equation::class)->find($equation_id);
                $project_item_entity->setEquation($equation_entity);
            }

            if ($item_id != '') {
                $item_entity = $this->getDoctrine()->getRepository(Item::class)->find($item_id);
            } else {
                // add new item
                $new_item_data = json_encode([
                    'item' => $item_name,
                    'price' => $price,
                    'yield_calculation' => $yield_calculation,
                    'unit_id' => $unit_id
                ]);
                $item_entity = $this->AgregarNewItem(json_decode($new_item_data), $equation_entity);
            }

            $project_item_entity->setItem($item_entity);

            if ($is_new_project_item) {
                $project_item_entity->setProject($project_entity);

                $em->persist($project_item_entity);
            }

            $em->flush();

            $resultado['success'] = true;

            // devolver item
            $resultado['item'] = [
                'project_item_id' => $project_item_entity->getId(),
                "item_id" => $project_item_entity->getItem()->getItemId(),
                "item" => $project_item_entity->getItem()->getDescription(),
                "unit" => $project_item_entity->getItem()->getUnit()->getDescription(),
                "quantity" => $project_item_entity->getQuantity(),
                "price" => $project_item_entity->getPrice(),
                "yield_calculation" => $project_item_entity->getYieldCalculation(),
                "yield_calculation_name" => $this->DevolverYieldCalculationDeItemProject($project_item_entity),
                "equation_id" => $project_item_entity->getEquation() != null ? $project_item_entity->getEquation()->getEquationId() : ''
            ];

        } else {
            $resultado['success'] = false;
            $resultado['error'] = 'The project not exist';
        }

        return $resultado;
    }

    /**
     * EliminarItem: Elimina un item en la BD
     * @param int $project_item_id Id
     * @author Marcel
     */
    public function EliminarItem($project_item_id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $this->getDoctrine()->getRepository(ProjectItem::class)
            ->find($project_item_id);
        /**@var ProjectItem $entity */
        if ($entity != null) {

            // data tracking
            $data_tracking = $this->getDoctrine()->getRepository(DataTrackingItem::class)
                ->ListarDataTrackingsDeItem($project_item_id);
            if (count($data_tracking) > 0) {
                $resultado['success'] = false;
                $resultado['error'] = "The item could not be deleted, because it is related to a data tracking";
                return $resultado;
            }

            $item_name = $entity->getItem()->getDescription();

            $em->remove($entity);
            $em->flush();

            //Salvar log
            $log_operacion = "Delete";
            $log_categoria = "Project Item";
            $log_descripcion = "The item: $item_name of the project is deleted";
            $this->SalvarLog($log_operacion, $log_categoria, $log_descripcion);

            $resultado['success'] = true;
        } else {
            $resultado['success'] = false;
            $resultado['error'] = "The requested record does not exist";
        }

        return $resultado;
    }

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
     * @param $company_id
     * @param $inspector_id
     * @return array
     */
    public function ListarOrdenados($search, $company_id, $inspector_id, $from, $to, $status = '')
    {
        $projects = [];

        $lista = $this->getDoctrine()->getRepository(Project::class)
            ->ListarOrdenados($search, $company_id, $inspector_id, $from, $to);
        foreach ($lista as $value) {
            $project_id = $value->getProjectId();

            $is_valid_status = $this->FiltrarProjectPorStatus($project_id, $status);
            if ($is_valid_status) {
                $projects[] = [
                    'project_id' => $project_id,
                    'number' => $value->getProjectNumber(),
                    'name' => $value->getName()
                ];
            }

        }

        return $projects;
    }

    /**
     * FiltrarProjectPorStatus
     * @param $status
     * @return boolean
     */
    private function FiltrarProjectPorStatus($project_id, $status){
        $is_valid = true;

        if($status != ''){

            $is_valid = false;

            $data_tracking = $this->getDoctrine()->getRepository(DataTracking::class)
                ->ListarDataTracking($project_id);

            if($status == 'working' && !empty($data_tracking)){
                $is_valid = true;
            }
            if($status == 'notworking' && empty($data_tracking)){
                $is_valid = true;
            }
        }


        return  $is_valid;
    }

    /**
     * ListarDataTrackingParaInvoice
     * @param $project_id
     * @param $fecha_inicial
     * @param $fecha_fin
     * @return array
     */
    public function ListarDataTrackingParaInvoice($project_id, $fecha_inicial, $fecha_fin)
    {
        $items = [];

        $project_items = $this->getDoctrine()->getRepository(DataTracking::class)
            ->ListarDataTracking($project_id, $fecha_inicial, $fecha_fin);
        foreach ($project_items as $value) {

            $data_tracking_id = $value->getId();

            $quantity = $value->getQuantity();
            $price = $value->getPrice();
            $total = $quantity * $price;

            $items[] = [
                "id" => $data_tracking_id,
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

            $arreglo_resultado['company_id'] = $entity->getCompany()->getCompanyId();
            $arreglo_resultado['inspector_id'] = $entity->getInspector() != null ? $entity->getInspector()->getInspectorId() : '';

            $arreglo_resultado['number'] = $entity->getProjectNumber();
            $arreglo_resultado['name'] = $entity->getName();
            $arreglo_resultado['location'] = $entity->getLocation();
            $arreglo_resultado['po_number'] = $entity->getPoNumber();
            $arreglo_resultado['po_cg'] = $entity->getPoCG();
            $arreglo_resultado['manager'] = $entity->getManager();
            $arreglo_resultado['status'] = $entity->getStatus();
            $arreglo_resultado['owner'] = $entity->getOwner();
            $arreglo_resultado['subcontract'] = $entity->getSubcontract();
            $arreglo_resultado['federal_funding'] = $entity->getFederalFunding();
            $arreglo_resultado['county'] = $entity->getCounty();
            $arreglo_resultado['resurfacing'] = $entity->getResurfacing();
            $arreglo_resultado['invoice_contact'] = $entity->getInvoiceContact();
            $arreglo_resultado['certified_payrolls'] = $entity->getCertifiedPayrolls();
            $arreglo_resultado['start_date'] = $entity->getStartDate() != '' ? $entity->getStartDate()->format('m/d/Y') : '';
            $arreglo_resultado['end_date'] = $entity->getEndDate() != '' ? $entity->getEndDate()->format('m/d/Y') : '';
            $arreglo_resultado['due_date'] = $entity->getDueDate() != '' ? $entity->getDueDate()->format('m/d/Y') : '';

            // items
            $items = $this->ListarItemsDeProject($project_id);
            $arreglo_resultado['items'] = $items;

            $resultado['success'] = true;
            $resultado['project'] = $arreglo_resultado;
        }

        return $resultado;
    }

    /**
     * ListarItemsDeProject
     * @param $project_id
     * @return array
     */
    public function ListarItemsDeProject($project_id)
    {
        $items = [];

        $lista = $this->getDoctrine()->getRepository(ProjectItem::class)
            ->ListarItemsDeProject($project_id);
        foreach ($lista as $key => $value) {


            $yield_calculation_name = $this->DevolverYieldCalculationDeItemProject($value);

            $quantity = $value->getQuantity();
            $price = $value->getPrice();
            $total = $quantity * $price;

            $items[] = [
                'project_item_id' => $value->getId(),
                "item_id" => $value->getItem()->getItemId(),
                "item" => $value->getItem()->getDescription(),
                "unit" => $value->getItem()->getUnit()->getDescription(),
                "quantity" => $quantity,
                "price" => $price,
                "total" => $total,
                "yield_calculation" => $value->getYieldCalculation(),
                "yield_calculation_name" => $yield_calculation_name,
                "equation_id" => $value->getEquation() != null ? $value->getEquation()->getEquationId() : '',
                "posicion" => $key
            ];
        }

        return $items;
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

            // items
            $items = $this->getDoctrine()->getRepository(ProjectItem::class)
                ->ListarItemsDeProject($project_id);
            foreach ($items as $item) {
                $em->remove($item);
            }

            // data tracking
            $data_tracking = $this->getDoctrine()->getRepository(DataTracking::class)
                ->ListarDataTracking($project_id);
            foreach ($data_tracking as $data) {

                $items = $this->getDoctrine()->getRepository(DataTrackingItem::class)
                    ->ListarItems($data->getId());
                foreach ($items as $item) {
                    $em->remove($item);
                }

                $em->remove($data);
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

                            // items
                            $items = $this->getDoctrine()->getRepository(ProjectItem::class)
                                ->ListarItemsDeProject($project_id);
                            foreach ($items as $item) {
                                $em->remove($item);
                            }

                            // data tracking
                            $data_tracking = $this->getDoctrine()->getRepository(DataTracking::class)
                                ->ListarDataTracking($project_id);
                            foreach ($data_tracking as $data) {

                                $items = $this->getDoctrine()->getRepository(DataTrackingItem::class)
                                    ->ListarItems($data->getId());
                                foreach ($items as $item) {
                                    $em->remove($item);
                                }

                                $em->remove($data);
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
    public function ActualizarProject($project_id, $company_id, $inspector_id, $number, $name, $location,
                                      $po_number, $po_cg, $manager, $status, $owner, $subcontract,
                                      $federal_funding, $county, $resurfacing, $invoice_contact,
                                      $certified_payrolls, $start_date, $end_date, $due_date, $items)
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

            if ($company_id != '') {
                $company = $this->getDoctrine()->getRepository(Company::class)
                    ->find($company_id);
                $entity->setCompany($company);
            }
            if ($inspector_id != '') {
                $inspector = $this->getDoctrine()->getRepository(Inspector::class)
                    ->find($inspector_id);
                $entity->setInspector($inspector);
            }

            $entity->setOwner($owner);
            $entity->setSubcontract($subcontract);
            $entity->setFederalFunding($federal_funding);
            $entity->setCounty($county);
            $entity->setResurfacing($resurfacing);
            $entity->setInvoiceContact($invoice_contact);
            $entity->setCertifiedPayrolls($certified_payrolls);

            if ($start_date != '') {
                $start_date = \DateTime::createFromFormat('m/d/Y', $start_date);
                $entity->setStartDate($start_date);
            }

            if ($end_date != '') {
                $end_date = \DateTime::createFromFormat('m/d/Y', $end_date);
                $entity->setEndDate($end_date);
            }

            if ($due_date != '') {
                $due_date = \DateTime::createFromFormat('m/d/Y', $due_date);
                $entity->setDueDate($due_date);
            }

            $entity->setUpdatedAt(new \DateTime());

            // items
            $items_new = $this->SalvarItems($entity, $items);

            $em->flush();

            //Salvar log
            $log_operacion = "Update";
            $log_categoria = "Project";
            $log_descripcion = "The project is modified: $name";
            $this->SalvarLog($log_operacion, $log_categoria, $log_descripcion);

            $resultado['success'] = true;
            $resultado['items'] = $items_new;

            return $resultado;
        }
    }

    /**
     * SalvarProject: Guarda los datos de project en la BD
     * @param string $description Nombre
     * @author Marcel
     */
    public function SalvarProject($company_id, $inspector_id, $number, $name, $location,
                                  $po_number, $po_cg, $manager, $status, $owner, $subcontract,
                                  $federal_funding, $county, $resurfacing, $invoice_contact,
                                  $certified_payrolls, $start_date, $end_date, $due_date, $items)
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

        if ($company_id != '') {
            $company = $this->getDoctrine()->getRepository(Company::class)
                ->find($company_id);
            $entity->setCompany($company);
        }
        if ($inspector_id != '') {
            $inspector = $this->getDoctrine()->getRepository(Inspector::class)
                ->find($inspector_id);
            $entity->setInspector($inspector);
        }

        $entity->setOwner($owner);
        $entity->setSubcontract($subcontract);
        $entity->setFederalFunding($federal_funding);
        $entity->setCounty($county);
        $entity->setResurfacing($resurfacing);
        $entity->setInvoiceContact($invoice_contact);
        $entity->setCertifiedPayrolls($certified_payrolls);

        if ($start_date != '') {
            $start_date = \DateTime::createFromFormat('m/d/Y', $start_date);
            $entity->setStartDate($start_date);
        }

        if ($end_date != '') {
            $end_date = \DateTime::createFromFormat('m/d/Y', $end_date);
            $entity->setEndDate($end_date);
        }

        if ($due_date != '') {
            $due_date = \DateTime::createFromFormat('m/d/Y', $due_date);
            $entity->setDueDate($due_date);
        }

        $entity->setCreatedAt(new \DateTime());

        $em->persist($entity);

        // items
        $items_new = $this->SalvarItems($entity, $items);

        $em->flush();

        //Salvar log
        $log_operacion = "Add";
        $log_categoria = "Project";
        $log_descripcion = "The project is added: $name";
        $this->SalvarLog($log_operacion, $log_categoria, $log_descripcion);

        $resultado['success'] = true;
        $resultado['items'] = $items_new;

        return $resultado;
    }

    /**
     * SalvarItems
     * @param array $items
     * @param Project $entity
     * @return array
     */
    public function SalvarItems($entity, $items)
    {
        $em = $this->getDoctrine()->getManager();

        // para devolver los items nuevos que se creen
        $items_news = [];

        //Senderos
        foreach ($items as $value) {

            $project_item_entity = null;

            if (is_numeric($value->project_item_id)) {
                $project_item_entity = $this->getDoctrine()->getRepository(ProjectItem::class)
                    ->find($value->project_item_id);
            }

            $is_new_project_item = false;
            if ($project_item_entity == null) {
                $project_item_entity = new ProjectItem();
                $is_new_project_item = true;
            }

            $project_item_entity->setYieldCalculation($value->yield_calculation);
            $project_item_entity->setPrice($value->price);
            $project_item_entity->setQuantity($value->quantity);

            $equation_entity = null;
            if ($value->equation_id != '') {
                $equation_entity = $this->getDoctrine()->getRepository(Equation::class)->find($value->equation_id);
                $project_item_entity->setEquation($equation_entity);
            }

            $item_entity = null;
            if ($value->item_id != '') {
                $item_entity = $this->getDoctrine()->getRepository(Item::class)->find($value->item_id);
            } else {
                // add new item
                $item_entity = $this->AgregarNewItem($value, $equation_entity);
                $items_news[] = [
                    'item_id' => $item_entity->getItemId(),
                    'description' => $value->item,
                    'price' => $value->price,
                    'unit' => $value->unit,
                    'equation' => $value->equation_id,
                    'yield' => $value->yield_calculation
                ];
            }

            $project_item_entity->setItem($item_entity);

            if ($is_new_project_item) {
                $project_item_entity->setProject($entity);

                $em->persist($project_item_entity);
            }
        }

        return $items_news;
    }

    /**
     * AgregarNewItem
     * @param $value
     * @return Item
     */
    private function AgregarNewItem($value, $equation_entity)
    {
        $em = $this->getDoctrine()->getManager();

        $item_entity = new Item();

        $item_entity->setDescription($value->item);
        $item_entity->setPrice($value->price);
        $item_entity->setStatus(1);
        $item_entity->setYieldCalculation($value->yield_calculation);

        if ($value->unit_id != '') {
            $unit = $this->getDoctrine()->getRepository(Unit::class)->find($value->unit_id);
            $item_entity->setUnit($unit);
        }

        $item_entity->setEquation($equation_entity);

        $item_entity->setCreatedAt(new \DateTime());

        $em->persist($item_entity);

        $em->flush();

        return $item_entity;
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
    public function ListarProjects($start, $limit, $sSearch, $iSortCol_0, $sSortDir_0,
                                   $company_id, $status, $fecha_inicial, $fecha_fin)
    {
        $arreglo_resultado = array();
        $cont = 0;

        $lista = $this->getDoctrine()->getRepository(Project::class)
            ->ListarProjects($start, $limit, $sSearch, $iSortCol_0, $sSortDir_0,
                $company_id, '', $status, $fecha_inicial, $fecha_fin);

        foreach ($lista as $value) {
            $project_id = $value->getProjectId();

            $acciones = $this->ListarAcciones($project_id);

            // listar ultima nota del proyecto
            $nota = $this->ListarUltimaNotaDeProject($project_id);

            $arreglo_resultado[$cont] = array(
                "id" => $project_id,
                "projectNumber" => $value->getProjectNumber(),
                "name" => $value->getName(),
                "company" => $value->getCompany()->getName(),
                "county" => $value->getCounty(),
                "status" => $value->getStatus() ? 1 : 0,
                "startDate" => $value->getStartDate() != '' ? $value->getStartDate()->format('m/d/Y') : '',
                "endDate" => $value->getEndDate() != '' ? $value->getEndDate()->format('m/d/Y') : '',
                "dueDate" => $value->getDueDate() != '' ? $value->getDueDate()->format('m/d/Y') : '',
                'nota' => $nota,
                "acciones" => $acciones
            );

            $cont++;
        }

        return $arreglo_resultado;
    }

    /**
     * ListarUltimaNotaDeProject
     * @param $project_id
     * @return array
     */
    private function ListarUltimaNotaDeProject($project_id)
    {
        $nota = null;

        $lista = $this->getDoctrine()->getRepository(ProjectNotes::class)
            ->ListarNotesDeProject($project_id);
        if (!empty($lista)) {
            $nota = [
                'id' => $lista[0]->getId(),
                'nota' => $this->truncate($lista[0]->getNotes(), 50),
                'date' => $lista[0]->getDate()->format('m/d/Y')
            ];
        }

        return $nota;
    }

    /**
     * TotalProjects: Total de projects
     * @param string $sSearch Para buscar
     * @author Marcel
     */
    public function TotalProjects($sSearch, $company_id, $status, $fecha_inicial, $fecha_fin)
    {
        $total = $this->getDoctrine()->getRepository(Project::class)
            ->TotalProjects($sSearch, $company_id, '', $status, $fecha_inicial, $fecha_fin);

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