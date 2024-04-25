<?php

namespace App\Utils\Admin;

use App\Entity\Item;
use App\Entity\Project;
use App\Entity\Invoice;
use App\Entity\InvoiceItem;

use App\Utils\Base;
use PhpOffice\PhpSpreadsheet\Cell\AdvancedValueBinder;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Style\Border;

class InvoiceService extends Base
{

    /**
     * ExportarExcel: Exporta a excel el invoice
     *
     *
     * @author Marcel
     */
    public function ExportarExcel($invoice_id)
    {
        //Configurar excel
        Cell::setValueBinder(new AdvancedValueBinder());

        $styleArray = array(
            'borders' => array(
                'outline' => array(
                    'borderStyle' => Border::BORDER_THIN
                ),
            ),
        );

        // reader
        $reader = IOFactory::createReader('Xlsx');
        $objPHPExcel = $reader->load("bundles/ican/excel" . DIRECTORY_SEPARATOR . 'invoice.xlsx');
        $objWorksheet = $objPHPExcel->setActiveSheetIndex(0);

        // datos generales del invoice
        $invoice_entity = $this->getDoctrine()->getRepository(Invoice::class)->find($invoice_id);
        /** @var Invoice $invoice_entity */

        // fecha actual
        $fecha_actual = date('d/m/Y');
        $objWorksheet->setCellValueExplicit("H5", $fecha_actual, DataType::TYPE_STRING);

        $number = $invoice_entity->getNumber();
        $objWorksheet->setCellValue("I5", $number);

        $start_date = $invoice_entity->getStartDate()->format('d/m/Y');
        $objWorksheet->setCellValueExplicit("H10", $start_date, DataType::TYPE_STRING);

        $end_date = $invoice_entity->getEndDate()->format('d/m/Y');
        $objWorksheet->setCellValueExplicit("I10", $end_date, DataType::TYPE_STRING);

        // contractor
        $contractor_entity = $invoice_entity->getProject()->getContractor();
        $objWorksheet->setCellValue("B11", $contractor_entity->getName());
        $objWorksheet->setCellValue("B13", $contractor_entity->getPhone());
        $objWorksheet->setCellValue("C14", $contractor_entity->getContactName());
        $objWorksheet->setCellValue("C15", $contractor_entity->getContactEmail());

        // inspector
        $inspector_entity = $invoice_entity->getProject()->getInspector();
        if($inspector_entity != null){
            $objWorksheet->setCellValue("D11", $inspector_entity->getName());
            $objWorksheet->setCellValue("D13", $inspector_entity->getPhone());
            $objWorksheet->setCellValue("D15", $inspector_entity->getEmail());
        }

        // project
        $project_entity = $invoice_entity->getProject();
        $objWorksheet->setCellValue("C17", $project_entity->getLocation());
        $objWorksheet->setCellValue("C18", $project_entity->getName());
        $objWorksheet->setCellValue("G17", $project_entity->getProjectNumber());
        $objWorksheet->setCellValue("G18", $project_entity->getPoNumber());
        $objWorksheet->setCellValue("G19", $project_entity->getPoCG());

        // notes
        $objWorksheet->setCellValue("B20", $invoice_entity->getNotes());

        // items
        $total = 0;
        $fila = 24;
        $items = $this->getDoctrine()->getRepository(InvoiceItem::class)
            ->ListarItems($invoice_id);
        foreach ($items as $key => $item){

            $quantity = $item->getQuantity();
            $price = $item->getPrice();
            $subtotal = $quantity * $price;
            $total += $subtotal;

            $objWorksheet
                ->setCellValue('A' . $fila, ($key + 1))
                ->setCellValue('B' . $fila, $item->getItem()->getDescription())
                ->setCellValue('E' . $fila, $item->getItem()->getUnit()->getDescription())
                ->setCellValue('F' . $fila, $quantity)
                ->setCellValue('G' . $fila, $price)
                ->setCellValue('H' . $fila, $subtotal);

            $objWorksheet->getStyle('A' . $fila . ':A' . $fila)->applyFromArray($styleArray);
            $objWorksheet->getStyle('B' . $fila . ':D' . $fila)->applyFromArray($styleArray);
            $objWorksheet->getStyle('E' . $fila . ':E' . $fila)->applyFromArray($styleArray);
            $objWorksheet->getStyle('F' . $fila . ':F' . $fila)->applyFromArray($styleArray);
            $objWorksheet->getStyle('G' . $fila . ':G' . $fila)->applyFromArray($styleArray);
            $objWorksheet->getStyle('H' . $fila . ':I' . $fila)->applyFromArray($styleArray);

            $fila++;

        }

        // total
        $objWorksheet->setCellValue("G$fila", "TOTAL");
        $objWorksheet->getStyle('G' . $fila . ':G' . $fila)->applyFromArray($styleArray);
        $objWorksheet->getStyle("G$fila")->getFont()->setBold(true);

        $objWorksheet->setCellValue("H$fila", $total);
        $objWorksheet->getStyle('H' . $fila . ':I' . $fila)->applyFromArray($styleArray);

        //Salvar excel
        $fichero = "invoice-$number.xlsx";

        $objWriter = IOFactory::createWriter($objPHPExcel, 'Xlsx');
        $objWriter->save("uploads" . DIRECTORY_SEPARATOR . "invoice" . DIRECTORY_SEPARATOR . $fichero);
        $objPHPExcel->disconnectWorksheets();
        unset($objPHPExcel);

        $ruta = $this->ObtenerURL();
        $dir = 'uploads/invoice/' . $fichero;
        $url = $ruta . $dir;

        return $url;
    }

    /**
     * EliminarItem: Elimina un item en la BD
     * @param int $invoice_item_id Id
     * @author Marcel
     */
    public function EliminarItem($invoice_item_id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $this->getDoctrine()->getRepository(InvoiceItem::class)
            ->find($invoice_item_id);
        /**@var InvoiceItem $entity */
        if ($entity != null) {

            $item_name = $entity->getItem()->getDescription();

            $em->remove($entity);
            $em->flush();

            //Salvar log
            $log_operacion = "Delete";
            $log_categoria = "Item Invoice";
            $log_descripcion = "The item details invoice is deleted: $item_name";
            $this->SalvarLog($log_operacion, $log_categoria, $log_descripcion);

            $resultado['success'] = true;
        } else {
            $resultado['success'] = false;
            $resultado['error'] = "The requested record does not exist";
        }

        return $resultado;
    }

    /**
     * CargarDatosInvoice: Carga los datos de un invoice
     *
     * @param int $invoice_id Id
     *
     * @author Marcel
     */
    public function CargarDatosInvoice($invoice_id)
    {
        $resultado = array();
        $arreglo_resultado = array();

        $entity = $this->getDoctrine()->getRepository(Invoice::class)
            ->find($invoice_id);
        /** @var Invoice $entity */
        if ($entity != null) {

            $arreglo_resultado['project_id'] = $entity->getProject()->getProjectId();

            $contractor_id = $entity->getProject()->getContractor()->getContractorId();
            $arreglo_resultado['contractor_id'] = $contractor_id;

            $arreglo_resultado['number'] = $entity->getNumber();
            $arreglo_resultado['start_date'] = $entity->getStartDate()->format('m/d/Y');
            $arreglo_resultado['end_date'] = $entity->getEndDate()->format('m/d/Y');
            $arreglo_resultado['notes'] = $entity->getNotes();

            // projects
            $projects = $this->ListarProjectsDeContractor($contractor_id);
            $arreglo_resultado['projects'] = $projects;

            // items
            $items = $this->ListarItemsDeInvoice($invoice_id);
            $arreglo_resultado['items'] = $items;

            $resultado['success'] = true;
            $resultado['invoice'] = $arreglo_resultado;
        }

        return $resultado;
    }

    /**
     * ListarItemsDeInvoice
     * @param $invoice_id
     * @return array
     */
    public function ListarItemsDeInvoice($invoice_id)
    {
        $items = [];

        $lista = $this->getDoctrine()->getRepository(InvoiceItem::class)
            ->ListarItems($invoice_id);
        foreach ($lista as $key => $value) {

            $quantity = $value->getQuantity();
            $price = $value->getPrice();
            $total = $quantity * $price;

            $items[] = [
                'invoice_item_id' => $value->getId(),
                "item_id" => $value->getItem()->getItemId(),
                "item" => $value->getItem()->getDescription(),
                "unit" => $value->getItem()->getUnit()->getDescription(),
                "quantity" => $quantity,
                "price" => $price,
                "total" => $total,
                "posicion" => $key
            ];
        }

        return $items;
    }

    /**
     * ListarProjectsDeContractor
     * @param $contractor_id
     * @return array
     */
    public function ListarProjectsDeContractor($contractor_id)
    {
        $projects = [];

        $lista = $this->getDoctrine()->getRepository(Project::class)
            ->ListarOrdenados('', $contractor_id, '');
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
     * EliminarInvoice: Elimina un rol en la BD
     * @param int $invoice_id Id
     * @author Marcel
     */
    public function EliminarInvoice($invoice_id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $this->getDoctrine()->getRepository(Invoice::class)
            ->find($invoice_id);
        /**@var Invoice $entity */
        if ($entity != null) {

            // items
            $items = $this->getDoctrine()->getRepository(InvoiceItem::class)
                ->ListarItems($invoice_id);
            foreach ($items as $item) {
                $em->remove($item);
            }

            $number = $entity->getNumber();

            $em->remove($entity);
            $em->flush();

            //Salvar log
            $log_operacion = "Delete";
            $log_categoria = "Invoice";
            $log_descripcion = "The invoice #$number is deleted";
            $this->SalvarLog($log_operacion, $log_categoria, $log_descripcion);

            $resultado['success'] = true;
        } else {
            $resultado['success'] = false;
            $resultado['error'] = "The requested record does not exist";
        }

        return $resultado;
    }

    /**
     * EliminarInvoices: Elimina los invoices seleccionados en la BD
     * @param int $ids Ids
     * @author Marcel
     */
    public function EliminarInvoices($ids)
    {
        $em = $this->getDoctrine()->getManager();

        if ($ids != "") {
            $ids = explode(',', $ids);
            $cant_eliminada = 0;
            $cant_total = 0;
            foreach ($ids as $invoice_id) {
                if ($invoice_id != "") {
                    $cant_total++;
                    $entity = $this->getDoctrine()->getRepository(Invoice::class)
                        ->find($invoice_id);
                    /**@var Invoice $entity */
                    if ($entity != null) {

                        // items
                        $items = $this->getDoctrine()->getRepository(InvoiceItem::class)
                            ->ListarItems($invoice_id);
                        foreach ($items as $item) {
                            $em->remove($item);
                        }

                        $number = $entity->getNumber();

                        $em->remove($entity);
                        $cant_eliminada++;

                        //Salvar log
                        $log_operacion = "Delete";
                        $log_categoria = "Invoice";
                        $log_descripcion = "The invoice #$number is deleted";
                        $this->SalvarLog($log_operacion, $log_categoria, $log_descripcion);

                    }
                }
            }
        }
        $em->flush();

        if ($cant_eliminada == 0) {
            $resultado['success'] = false;
            $resultado['error'] = "The invoices could not be deleted, because they are associated with a invoice";
        } else {
            $resultado['success'] = true;

            $mensaje = ($cant_eliminada == $cant_total) ? "The operation was successful" : "The operation was successful. But attention, it was not possible to delete all the selected invoices because they are associated with a invoice";
            $resultado['message'] = $mensaje;
        }

        return $resultado;
    }

    /**
     * ActualizarInvoice: Actuializa los datos del rol en la BD
     * @param int $invoice_id Id
     * @author Marcel
     */
    public function ActualizarInvoice($invoice_id, $project_id, $start_date, $end_date, $notes, $items, $exportar)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $this->getDoctrine()->getRepository(Invoice::class)
            ->find($invoice_id);
        /** @var Invoice $entity */
        if ($entity != null) {


            if ($start_date != '') {
                $start_date = \DateTime::createFromFormat('m/d/Y', $start_date);
                $entity->setStartDate($start_date);
            }

            if ($end_date != '') {
                $end_date = \DateTime::createFromFormat('m/d/Y', $end_date);
                $entity->setEndDate($end_date);
            }

            $entity->setNotes($notes);

            if ($project_id != '') {
                $project = $this->getDoctrine()->getRepository(Project::class)
                    ->find($project_id);
                $entity->setProject($project);
            }

            $entity->setUpdatedAt(new \DateTime());

            // items
            $this->SalvarItems($entity, $items);

            $em->flush();

            //Salvar log
            $log_operacion = "Update";
            $log_categoria = "Invoice";

            $number = $entity->getNumber();
            $log_descripcion = "The invoice #$number is modified";

            $this->SalvarLog($log_operacion, $log_categoria, $log_descripcion);

            $resultado['success'] = true;

            // exportar
            $url = '';
            if($exportar == 1){
                $url = $this->ExportarExcel($invoice_id);
            }
            $resultado['url'] = $url;

            return $resultado;
        }
    }

    /**
     * SalvarInvoice: Guarda los datos de invoice en la BD
     * @param string $description Nombre
     * @author Marcel
     */
    public function SalvarInvoice($project_id, $start_date, $end_date, $notes, $items, $exportar)
    {
        $em = $this->getDoctrine()->getManager();


        $entity = new Invoice();

        // number
        $number = $this->getDoctrine()->getRepository(Invoice::class)->TotalInvoices() + 1;
        $entity->setNumber($number);

        if ($start_date != '') {
            $start_date = \DateTime::createFromFormat('m/d/Y', $start_date);
            $entity->setStartDate($start_date);
        }

        if ($end_date != '') {
            $end_date = \DateTime::createFromFormat('m/d/Y', $end_date);
            $entity->setEndDate($end_date);
        }

        $entity->setNotes($notes);

        if ($project_id != '') {
            $project = $this->getDoctrine()->getRepository(Project::class)
                ->find($project_id);
            $entity->setProject($project);
        }

        $entity->setCreatedAt(new \DateTime());

        $em->persist($entity);

        // items
        $this->SalvarItems($entity, $items);

        $em->flush();

        //Salvar log
        $log_operacion = "Add";
        $log_categoria = "Invoice";
        $log_descripcion = "The invoice #$number is added";
        $this->SalvarLog($log_operacion, $log_categoria, $log_descripcion);

        $resultado['success'] = true;

        // exportar
        $url = '';
        if($exportar == 1){
            $invoice_id = $entity->getInvoiceId();
            $url = $this->ExportarExcel($invoice_id);
        }
        $resultado['url'] = $url;

        return $resultado;
    }

    /**
     * SalvarItems
     * @param array $items
     * @param Invoice $entity
     * @return void
     */
    public function SalvarItems($entity, $items)
    {
        $em = $this->getDoctrine()->getManager();

        //Senderos
        foreach ($items as $value) {

            $invoice_item_entity = null;

            if (is_numeric($value->invoice_item_id)) {
                $invoice_item_entity = $this->getDoctrine()->getRepository(InvoiceItem::class)
                    ->find($value->invoice_item_id);
            }

            $is_new_item = false;
            if ($invoice_item_entity == null) {
                $invoice_item_entity = new InvoiceItem();
                $is_new_item = true;
            }

            $invoice_item_entity->setQuantity($value->quantity);
            $invoice_item_entity->setPrice($value->price);

            if ($value->item_id != '') {
                $item_entity = $this->getDoctrine()->getRepository(Item::class)->find($value->item_id);
                $invoice_item_entity->setItem($item_entity);
            }


            if ($is_new_item) {
                $invoice_item_entity->setInvoice($entity);

                $em->persist($invoice_item_entity);
            }
        }
    }

    /**
     * ListarInvoices: Listar los invoices
     *
     * @param int $start Inicio
     * @param int $limit Limite
     * @param string $sSearch Para buscar
     *
     * @author Marcel
     */
    public function ListarInvoices($start, $limit, $sSearch, $iSortCol_0, $sSortDir_0, $contractor_id, $project_id, $fecha_inicial, $fecha_fin)
    {
        $arreglo_resultado = array();
        $cont = 0;

        $lista = $this->getDoctrine()->getRepository(Invoice::class)
            ->ListarInvoices($start, $limit, $sSearch, $iSortCol_0, $sSortDir_0, $contractor_id, $project_id, $fecha_inicial, $fecha_fin);

        foreach ($lista as $value) {
            $invoice_id = $value->getInvoiceId();

            $acciones = $this->ListarAcciones($invoice_id);

            $total = $this->getDoctrine()->getRepository(InvoiceItem::class)
                ->TotalInvoice($invoice_id);

            $arreglo_resultado[$cont] = array(
                "id" => $invoice_id,
                "number" => $value->getNumber(),
                "contractor" => $value->getProject()->getContractor()->getName(),
                "project" => $value->getProject()->getName(),
                "startDate" => $value->getStartDate()->format('m/d/Y'),
                "endDate" => $value->getEndDate()->format('m/d/Y'),
                "notes" => $value->getNotes(),
                "total" => number_format($total, 2, '.', ','),
                "createdAt" => $value->getCreatedAt()->format('m/d/Y'),
                "acciones" => $acciones
            );

            $cont++;
        }

        return $arreglo_resultado;
    }

    /**
     * TotalInvoices: Total de invoices
     * @param string $sSearch Para buscar
     * @author Marcel
     */
    public function TotalInvoices($sSearch, $contractor_id, $project_id, $fecha_inicial, $fecha_fin)
    {
        $total = $this->getDoctrine()->getRepository(Invoice::class)
            ->TotalInvoices($sSearch, $contractor_id, $project_id, $fecha_inicial, $fecha_fin);

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
        $permiso = $this->BuscarPermiso($usuario->getUsuarioId(), 11);

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

        $acciones .= ' <a href="javascript:;" class="excel m-portlet__nav-link btn m-btn m-btn--hover-warning m-btn--icon m-btn--icon-only m-btn--pill" title="Export excel" data-id="' . $id . '"><i class="la la-file-excel-o"></i></a>';

        return $acciones;
    }
}