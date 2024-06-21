<?php

namespace App\Utils\Admin;

use App\Entity\Company;
use App\Entity\DataTracking;
use App\Entity\DataTrackingItem;
use App\Entity\Invoice;
use App\Entity\InvoiceItem;
use App\Entity\Item;
use App\Entity\Project;
use App\Utils\Base;

class DefaultService extends Base
{

    /*
     * FiltrarDashboard
     */
    public function FiltrarDashboard($project_id, $fecha_inicial, $fecha_fin)
    {
        $chart_profit = $this->DevolverDataChartProfit($project_id, $fecha_inicial, $fecha_fin);

        return [
            'chart_profit' => $chart_profit
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
            ->TotalDaily('', '', $fecha_inicial, $fecha_fin);

        $total = $total_concrete + $total_labor - $total_daily;


        // projects
        $data = [];

        // daily
        $amount_daily = $this->getDoctrine()->getRepository(DataTrackingItem::class)
            ->TotalDaily('', $project_id, $fecha_inicial, $fecha_fin);
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
     * DevolverDataChart1: devuelve la data para el grafico
     * @return array
     */
    public function DevolverDataChart1()
    {
        // total de proyectos
        $total_proyectos = $this->getDoctrine()->getRepository(Project::class)->TotalProjects('');

        // companies
        $data = [];
        $companies = $this->getDoctrine()->getRepository(Company::class)
            ->ListarOrdenados();
        foreach ($companies as $company) {
            $company_id = $company->getCompanyId();
            // cantidad de proyectos
            $total = $this->getDoctrine()->getRepository(Project::class)->TotalProjects('', $company_id);

            if ($total > 0) {
                // porciento
                $porciento = round($total / $total_proyectos * 100);

                $data[] = [
                    'company_id' => $company_id,
                    'name' => $company->getName(),
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