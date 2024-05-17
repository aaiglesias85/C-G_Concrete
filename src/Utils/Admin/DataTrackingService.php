<?php

namespace App\Utils\Admin;

use App\Entity\DataTracking;
use App\Entity\Inspector;
use App\Entity\Item;
use App\Entity\Project;
use App\Utils\Base;

class DataTrackingService extends Base
{

    /**
     * CargarDatosDataTracking: Carga los datos de un item project
     *
     * @param int $data_tracking_id Id
     *
     * @author Marcel
     */
    public function CargarDatosDataTracking($data_tracking_id)
    {
        $resultado = array();
        $arreglo_resultado = array();

        $entity = $this->getDoctrine()->getRepository(DataTracking::class)
            ->find($data_tracking_id);
        /** @var DataTracking $entity */
        if ($entity != null) {

            $arreglo_resultado['item_id'] = $entity->getItem()->getItemId();
            $arreglo_resultado['quantity'] = $entity->getQuantity();
            $arreglo_resultado['price'] = $entity->getPrice();
            $arreglo_resultado['date'] = $entity->getDate()->format('m/d/Y');
            $arreglo_resultado['inspector_id'] = $entity->getInspector() != null ? $entity->getInspector()->getInspectorId() : '';
            $arreglo_resultado['station_number'] = $entity->getStationNumber();
            $arreglo_resultado['measured_by'] = $entity->getMeasuredBy();
            $arreglo_resultado['conc_vendor'] = $entity->getConcVendor();
            $arreglo_resultado['crew_lead'] = $entity->getCrewLead();
            $arreglo_resultado['notes'] = $entity->getNotes();
            $arreglo_resultado['other_materials'] = $entity->getOtherMaterials();
            $arreglo_resultado['total_conc_used'] = $entity->getTotalConcUsed();
            $arreglo_resultado['total_labor'] = $entity->getTotalLabor();
            $arreglo_resultado['total_stamps'] = $entity->getTotalStamps();

            $resultado['success'] = true;
            $resultado['data_tracking'] = $arreglo_resultado;
        }

        return $resultado;
    }

    /**
     * ListarDataTracking: Listar los items details
     *
     * @param int $start Inicio
     * @param int $limit Limite
     * @param string $sSearch Para buscar
     *
     * @author Marcel
     */
    public function ListarDataTracking($start, $limit, $sSearch, $iSortCol_0, $sSortDir_0, $project_id, $item_id, $fecha_inicial, $fecha_fin)
    {
        $arreglo_resultado = array();
        $cont = 0;

        $lista = $this->getDoctrine()->getRepository(DataTracking::class)
            ->ListarDataTrackings($start, $limit, $sSearch, $iSortCol_0, $sSortDir_0, '', $project_id, $item_id, $fecha_inicial, $fecha_fin);

        foreach ($lista as $value) {
            $data_tracking_id = $value->getId();

            $acciones = $this->ListarAccionesDataTracking($data_tracking_id);

            $quantity = $value->getQuantity();
            $price = $value->getPrice();
            $total = $quantity * $price;

            $arreglo_resultado[$cont] = array(
                "id" => $data_tracking_id,
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
     * TotalDataTracking: Total de items
     * @param string $sSearch Para buscar
     * @author Marcel
     */
    public function TotalDataTracking($sSearch, $project_id, $item_id, $fecha_inicial, $fecha_fin)
    {
        $total = $this->getDoctrine()->getRepository(DataTracking::class)
            ->TotalDataTrackings($sSearch, '', $project_id, $item_id, $fecha_inicial, $fecha_fin);

        return $total;
    }

    /**
     * ListarAcciones: Lista los permisos de un usuario de la BD
     *
     * @author Marcel
     */
    public function ListarAccionesDataTracking($id)
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
     * EliminarDataTracking: Elimina un item details en la BD
     * @param int $data_tracking_id Id
     * @author Marcel
     */
    public function EliminarDataTracking($data_tracking_id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $this->getDoctrine()->getRepository(DataTracking::class)
            ->find($data_tracking_id);
        /**@var DataTracking $entity */
        if ($entity != null) {

            $item_name = $entity->getItem()->getDescription();

            $em->remove($entity);
            $em->flush();

            //Salvar log
            $log_operacion = "Delete";
            $log_categoria = "Data Tracking";
            $log_descripcion = "The data tracking is deleted: $item_name";
            $this->SalvarLog($log_operacion, $log_categoria, $log_descripcion);

            $resultado['success'] = true;
        } else {
            $resultado['success'] = false;
            $resultado['error'] = "The requested record does not exist";
        }

        return $resultado;
    }

    /**
     * EliminarDataTrackings: Elimina los data trackings
     * @param int $ids Ids
     * @author Marcel
     */
    public function EliminarDataTrackings($ids)
    {
        $em = $this->getDoctrine()->getManager();

        if ($ids != "") {
            $ids = explode(',', $ids);
            $cant_eliminada = 0;
            $cant_total = 0;
            foreach ($ids as $data_tracking_id) {
                if ($data_tracking_id != "") {
                    $cant_total++;
                    $entity = $this->getDoctrine()->getRepository(DataTracking::class)
                        ->find($data_tracking_id);
                    /**@var DataTracking $entity */
                    if ($entity != null) {

                        $item_name = $entity->getItem()->getDescription();

                        $em->remove($entity);
                        $cant_eliminada++;

                        //Salvar log
                        $log_operacion = "Delete";
                        $log_categoria = "Item Project";
                        $log_descripcion = "The item details project is deleted: $item_name";
                        $this->SalvarLog($log_operacion, $log_categoria, $log_descripcion);

                    }
                }
            }
        }
        $em->flush();

        if ($cant_eliminada == 0) {
            $resultado['success'] = false;
            $resultado['error'] = "The projects could not be deleted, because they are associated with a project";
        } else {
            $resultado['success'] = true;

            $mensaje = ($cant_eliminada == $cant_total) ? "The operation was successful" : "The operation was successful. But attention, it was not possible to delete all the selected projects because they are associated with a project";
            $resultado['message'] = $mensaje;
        }

        return $resultado;
    }

    /**
     * SalvarDataTracking
     * @param $data_tracking_id
     * @param $project_id
     * @param $item_id
     * @return array
     */
    public function SalvarDataTracking($data_tracking_id, $project_id, $item_id, $quantity, $price, $date, $inspector_id,
                                       $station_number, $measured_by, $conc_vendor, $crew_lead, $notes, $other_materials,
                                       $total_conc_used, $total_labor, $total_stamps)
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

            if (is_numeric($data_tracking_id)) {
                $entity = $this->getDoctrine()->getRepository(DataTracking::class)
                    ->find($data_tracking_id);
            }

            if ($entity == null) {
                $entity = new DataTracking();
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

            if ($inspector_id != '') {
                $inspector_entity = $this->getDoctrine()->getRepository(Inspector::class)
                    ->find($inspector_id);
                $entity->setInspector($inspector_entity);
            }

            $entity->setStationNumber($station_number);
            $entity->setMeasuredBy($measured_by);
            $entity->setConcVendor($conc_vendor);
            $entity->setCrewLead($crew_lead);
            $entity->setNotes($notes);
            $entity->setOtherMaterials($other_materials);
            $entity->setTotalConcUsed($total_conc_used);
            $entity->setTotalLabor($total_labor);
            $entity->setTotalStamps($total_stamps);

            $log_operacion = "Add";
            $log_descripcion = "The data tracking is add: " . $item_entity->getDescription();

            if ($is_new) {

                $entity->setCreatedAt(new \DateTime());

                $em->persist($entity);
            } else {

                $entity->setUpdatedAt(new \DateTime());

                $log_operacion = "Update";
                $log_descripcion = "The data tracking is modified: " . $item_entity->getDescription();
            }

            $em->flush();

            //Salvar log
            $log_categoria = "Data Tracking";
            $this->SalvarLog($log_operacion, $log_categoria, $log_descripcion);

            $resultado['success'] = true;

        } else {
            $resultado['success'] = false;
            $resultado['error'] = "The project or item not exist.";
        }

        return $resultado;

    }


    /**
     * ListarDataTrackings: Listar los items details
     *
     * @param int $start Inicio
     * @param int $limit Limite
     * @param string $sSearch Para buscar
     *
     * @author Marcel
     */
    public function ListarDataTrackings($start, $limit, $sSearch, $iSortCol_0, $sSortDir_0, $company_id,
                                        $project_id, $item_id, $fecha_inicial, $fecha_fin)
    {
        $arreglo_resultado = array();
        $cont = 0;

        $lista = $this->getDoctrine()->getRepository(DataTracking::class)
            ->ListarDataTrackings($start, $limit, $sSearch, $iSortCol_0, $sSortDir_0, $company_id, $project_id, $item_id, $fecha_inicial, $fecha_fin);

        foreach ($lista as $value) {
            $data_tracking_id = $value->getId();

            $acciones = $this->ListarAcciones($data_tracking_id);

            $quantity = $value->getQuantity();
            $price = $value->getPrice();
            $total = $quantity * $price;

            $arreglo_resultado[$cont] = array(
                "id" => $data_tracking_id,
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
     * TotalDataTrackings: Total de items
     * @param string $sSearch Para buscar
     * @author Marcel
     */
    public function TotalDataTrackings($sSearch, $company_id, $project_id, $item_id, $fecha_inicial, $fecha_fin)
    {
        $total = $this->getDoctrine()->getRepository(DataTracking::class)
            ->TotalDataTrackings($sSearch, $company_id, $project_id, $item_id, $fecha_inicial, $fecha_fin);

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
        $permiso = $this->BuscarPermiso($usuario->getUsuarioId(), 10);

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