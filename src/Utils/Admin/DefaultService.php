<?php

namespace App\Utils\Admin;

use App\Entity\Company;
use App\Entity\DataTracking;
use App\Entity\DataTrackingItem;
use App\Entity\Invoice;
use App\Entity\InvoiceItem;
use App\Entity\Item;
use App\Entity\Project;
use App\Entity\ProjectItem;
use App\Utils\Base;

class DefaultService extends Base
{

    /*
     * FiltrarDashboard
     */
    public function FiltrarDashboard($project_id, $fecha_inicial, $fecha_fin)
    {
        $chart_costs = $this->DevolverDataChartCosts($project_id, $fecha_inicial, $fecha_fin);
        $chart_profit = $this->DevolverDataChartProfit($project_id, $fecha_inicial, $fecha_fin);

        $items = $this->ListarItemsConMontos($project_id, $fecha_inicial, $fecha_fin);

        return [
            'chart_costs' => $chart_costs,
            'chart_profit' => $chart_profit,
            'items' => $items,
        ];
    }

    /**
     * ListarProjectsParaDashboard: lista los projects ordenados por el due date
     * @return array
     */
    public function ListarProjectsParaDashboard()
    {
        $arreglo_resultado = [];

        $lista = $this->getDoctrine()->getRepository(Project::class)
            ->ListarProjectsParaDashboard('', '');
        foreach ($lista as $value) {
            $arreglo_resultado[] = [
                'project_id' => $value->getProjectId(),
                'number' => $value->getProjectNumber(),
                'name' => $value->getName(),
                'dueDate' => $value->getDueDate() != '' ? $value->getDueDate()->format('m/d/Y') : ''
            ];
        }

        return $arreglo_resultado;
    }

    /**
     * ListarStats: listar stats
     * @return array
     */
    public function ListarStats()
    {
        $arreglo_resultado = [];

        // total de proyectos activos
        $total_proyectos_activos = $this->getDoctrine()->getRepository(Project::class)
            ->TotalProjects('', '', '', 1);

        // total de proyectos inactivos
        $total_proyectos_inactivos = $this->getDoctrine()->getRepository(Project::class)
            ->TotalProjects('', '', '', 0);

        return [
            'total_proyectos_activos' => $total_proyectos_activos,
            'total_proyectos_inactivos' => $total_proyectos_inactivos
        ];
    }

    /**
     * ListarItemsConMontos: lista los items ordenados por el monto
     * @return array
     */
    public function ListarItemsConMontos($project_id = '', $fecha_inicial = '', $fecha_fin = '')
    {
        $arreglo_resultado = [];

        $project_items = $this->getDoctrine()->getRepository(ProjectItem::class)
            ->ListarItemsDeProject($project_id);
        foreach ($project_items as $project_item) {
            $project_item_id = $project_item->getId();

            $quantity = $this->getDoctrine()->getRepository(DataTrackingItem::class)
                ->TotalQuantity('', $project_item_id, $fecha_inicial, $fecha_fin);

            $amount = $this->getDoctrine()->getRepository(DataTrackingItem::class)
                ->TotalDaily('', $project_item_id, '', $fecha_inicial, $fecha_fin);

            if ($quantity > 0) {
                $arreglo_resultado[] = [
                    'item_id' => $project_item_id,
                    'name' => $project_item->getItem()->getDescription(),
                    'unit' => $project_item->getItem()->getUnit()->getDescription(),
                    'quantity' => $quantity,
                    'amount' => $amount
                ];
            }
        }

        // ordenar
        $arreglo_resultado = $this->ordenarArrayDesc($arreglo_resultado, 'amount');

        // sacar los primeros 3
        if($project_id == '') {
            $arreglo_resultado = array_slice($arreglo_resultado, 0, 6);
        }


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
     * DevolverDataChartProfit: devuelve la data para el grafico
     * @return array
     */
    public function DevolverDataChartProfit($project_id = '', $fecha_inicial = '', $fecha_fin = '')
    {
        // profit total
        $total_concrete = $this->getDoctrine()->getRepository(DataTracking::class)
            ->TotalConcrete('', $fecha_inicial, $fecha_fin);

        $total_labor = $this->getDoctrine()->getRepository(DataTracking::class)
            ->TotalLabor('', $fecha_inicial, $fecha_fin);

        $total_daily = $this->getDoctrine()->getRepository(DataTrackingItem::class)
            ->TotalDaily('', '', '', $fecha_inicial, $fecha_fin);

        $total = $total_concrete + $total_labor - $total_daily;


        // projects
        $data = [];

        // daily
        $amount_daily = $this->getDoctrine()->getRepository(DataTrackingItem::class)
            ->TotalDaily('', '', $project_id, $fecha_inicial, $fecha_fin);
        $porciento_daily = $total > 0 ? round($amount_daily / $total * 100) : 0;

        $data[] = [
            'name' => 'Invoiced',
            'amount' => $amount_daily,
            'porciento' => $porciento_daily
        ];

        // profit
        $profit_concrete = $this->getDoctrine()->getRepository(DataTracking::class)
            ->TotalConcrete($project_id, $fecha_inicial, $fecha_fin);

        $profit_labor = $this->getDoctrine()->getRepository(DataTracking::class)
            ->TotalLabor($project_id, $fecha_inicial, $fecha_fin);

        $amount_profit = $profit_concrete + $profit_labor - $amount_daily;

        $porciento_profit = $total > 0 ? round($amount_profit / $total * 100) : 0;

        $data[] = [
            'name' => 'Profit',
            'amount' => $amount_profit,
            'porciento' => $porciento_profit
        ];

        return [
            'total' => $total,
            'data' => $data
        ];
    }

    /**
     * DevolverDataChartCosts: devuelve la data para el grafico
     * @return array
     */
    public function DevolverDataChartCosts($project_id = '', $fecha_inicial = '', $fecha_fin = '')
    {
        // total
        $total_concrete = $this->getDoctrine()->getRepository(DataTracking::class)
            ->TotalConcrete($project_id, $fecha_inicial, $fecha_fin);

        $total_labor = $this->getDoctrine()->getRepository(DataTracking::class)
            ->TotalLabor($project_id, $fecha_inicial, $fecha_fin);

        $total = $total_concrete + $total_labor;


        // projects
        $data = [];

        // concrete
        $porciento_concrete = $total > 0 ? round($total_concrete / $total * 100) : 0;

        $data[] = [
            'name' => 'Concrete',
            'amount' => $total_concrete,
            'porciento' => $porciento_concrete
        ];

        // labor
        $porciento_labor = $total > 0 ? round($total_labor / $total * 100) : 0;

        $data[] = [
            'name' => 'Labor',
            'amount' => $total_labor,
            'porciento' => $porciento_labor
        ];

        return [
            'total' => $total,
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
                    'company' => $project->getCompany()->getName(),
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