<?php

namespace App\Utils\Admin;

use App\Entity\Contractor;
use App\Entity\Invoice;
use App\Entity\InvoiceItem;
use App\Entity\Item;
use App\Entity\Project;
use App\Utils\Base;

class DefaultService extends Base
{

    /**
     * ListarItemsConMontos: lista los items ordenados por el monto
     * @return array
     */
    public function ListarItemsConMontos()
    {
        $arreglo_resultado = [];

        $items = $this->getDoctrine()->getRepository(Item::class)
            ->ListarOrdenados();
        foreach ($items as $item) {
            $item_id = $item->getItemId();

            $amount = $this->getDoctrine()->getRepository(InvoiceItem::class)
                ->TotalInvoice("", "", '', '', '', $item_id);
            if ($amount > 0) {
                $arreglo_resultado[] = [
                    'item_id' => $item_id,
                    'name' => $item->getDescription(),
                    'unit' => $item->getUnit()->getDescription(),
                    'amount' => $amount
                ];
            }
        }

        // ordenar
        $arreglo_resultado = $this->ordenarArrayDesc($arreglo_resultado, 'amount');
        // sacar los primeros 3
        $arreglo_resultado = array_slice($arreglo_resultado, 0, 3);

        return $arreglo_resultado;
    }

    /**
     * DevolverDataChart3: devuelve la data para el grafico
     * @return array
     */
    public function DevolverDataChart3()
    {
        $anno = date('Y');
        $fecha_inicial = "01/01/$anno";
        $fecha_final = "12/31/$anno";

        $meses = [];
        $data = [];

        $invoices = $this->getDoctrine()->getRepository(Invoice::class)
            ->ListarInvoicesRangoFecha('', '', $fecha_inicial, $fecha_final);
        foreach ($invoices as $invoice) {

            $fecha = $this->DevolverMes($invoice->getStartDate()->format('m'));
            $amount = $this->getDoctrine()->getRepository(InvoiceItem::class)
                ->TotalInvoice($invoice->getInvoiceId());

            $esta = false;
            foreach ($meses as $value) {
                if ($value == $fecha) {
                    $esta = true;
                }
            }
            if (!$esta) {
                array_push($meses, $fecha);
                array_push($data, $amount);
            } else {
                for ($i = 0; $i < count($meses); $i++) {
                    if ($meses[$i] == $fecha) {
                        $data[$i] += $amount;
                    }
                }
            }
        }

        return [
            'labels' => $meses,
            'data' => $data
        ];
    }

    /**
     * DevolverDataChart2: devuelve la data para el grafico
     * @return array
     */
    public function DevolverDataChart2()
    {
        // total de invoices
        $total = $this->getDoctrine()->getRepository(InvoiceItem::class)->TotalInvoice("", "", '');

        // projects
        $data = [];
        $projects = $this->getDoctrine()->getRepository(Project::class)
            ->ListarOrdenados();
        foreach ($projects as $project) {
            $project_id = $project->getProjectId();

            $amount = $this->getDoctrine()->getRepository(InvoiceItem::class)
                ->TotalInvoice("", "", $project_id);
            if ($amount > 0) {

                // porciento
                $porciento = round($amount / $total * 100);

                $data[] = [
                    'project_id' => $project_id,
                    'number' => $project->getProjectNumber(),
                    'name' => $project->getName(),
                    'contractor' => $project->getContractor()->getName(),
                    'amount' => $amount,
                    'porciento' => $porciento
                ];
            }
        }

        // ordenar
        $data = $this->ordenarArrayDesc($data, 'amount');
        // sacar los primeros 3
        $data = array_slice($data, 0, 3);

        return [
            'total' => $total,
            'data' => $data
        ];
    }

    /**
     * DevolverDataChart1: devuelve la data para el grafico
     * @return array
     */
    public function DevolverDataChart1()
    {
        // total de proyectos
        $total_proyectos = $this->getDoctrine()->getRepository(Project::class)->TotalProjects('');

        // contractors
        $data = [];
        $contractors = $this->getDoctrine()->getRepository(Contractor::class)
            ->ListarOrdenados();
        foreach ($contractors as $contractor) {
            $contractor_id = $contractor->getContractorId();
            // cantidad de proyectos
            $total = $this->getDoctrine()->getRepository(Project::class)->TotalProjects('', $contractor_id);

            if ($total > 0) {
                // porciento
                $porciento = round($total / $total_proyectos * 100);

                $data[] = [
                    'contractor_id' => $contractor_id,
                    'name' => $contractor->getName(),
                    'total' => $total,
                    'porciento' => $porciento
                ];
            }

        }

        // ordenar
        $data = $this->ordenarArrayDesc($data, 'total');
        // sacar los primeros 3
        $data = array_slice($data, 0, 3);

        return [
            'total' => $total_proyectos,
            'data' => $data
        ];
    }

    /**
     * ListarProyectosConMontos: lista los proyectos ordenados por el monto
     * @return array
     */
    public function ListarProyectosConMontos()
    {
        $arreglo_resultado = [];

        $projects = $this->getDoctrine()->getRepository(Project::class)
            ->ListarOrdenados();
        foreach ($projects as $project) {
            $project_id = $project->getProjectId();

            $amount = $this->getDoctrine()->getRepository(InvoiceItem::class)
                ->TotalInvoice("", "", $project_id);
            if ($amount > 0) {
                $arreglo_resultado[] = [
                    'project_id' => $project_id,
                    'number' => $project->getProjectNumber(),
                    'name' => $project->getName(),
                    'contractor' => $project->getContractor()->getName(),
                    'amount' => $amount
                ];
            }
        }

        // ordenar
        $arreglo_resultado = $this->ordenarArrayDesc($arreglo_resultado, 'amount');
        // sacar los primeros 3
        $arreglo_resultado = array_slice($arreglo_resultado, 0, 3);

        return $arreglo_resultado;
    }

}