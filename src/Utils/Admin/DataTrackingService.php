<?php

namespace App\Utils\Admin;

use App\Entity\DataTracking;
use App\Utils\Base;

class DataTrackingService extends Base
{

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