<?php

namespace App\Controller\Admin;

use App\Entity\Equation;
use App\Entity\Item;
use App\Entity\Unit;
use App\Utils\Admin\DefaultService;
use App\Utils\Admin\LogService;
use App\Utils\Admin\NotificationService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    private $defaultService;
    private $logService;
    private $notificationService;

    public function __construct(DefaultService $defaultService, LogService $logService, NotificationService $notificationService)
    {
        $this->defaultService = $defaultService;
        $this->logService = $logService;
        $this->notificationService = $notificationService;
    }

    public function index()
    {
        $usuario = $this->getUser();
        $permiso = $this->defaultService->BuscarPermiso($usuario->getUsuarioId(), 1);
        if (count($permiso) > 0) {
            if ($permiso[0]['ver']) {

                // stats
                $stats = $this->defaultService->ListarStats();
                // chart 1
                $chart1 = $this->defaultService->DevolverDataChart1();
                // chart 2
                $chart2 = $this->defaultService->DevolverDataChart2();
                // chart 3
                $chart3 = $this->defaultService->DevolverDataChart3();
                // items
                $items = $this->defaultService->ListarItemsConMontos();
                // projects
                $projects = $this->defaultService->ListarProjectsParaDashboard();

                return $this->render('admin/default/index.html.twig', array(
                    'usuario' => $usuario,
                    'stats' => $stats,
                    'chart1' => $chart1,
                    'chart2' => $chart2,
                    'chart3' => $chart3,
                    'items' => $items,
                    'projects' => $projects
                ));
            }
        } else {
            return $this->redirectToRoute('denegado');
        }
    }

    public function renderHeader()
    {
        $usuario = $this->getUser();

        $logs = [];
        $notificaciones = [];
        if ($usuario != null) {
            $logs = $this->logService->ListarLogsUltimosDias($usuario);

            $notificaciones = $this->notificationService->ListarNotificationsUltimosDias($usuario);

            // contar sin leer
            $sin_leer = 0;
            foreach ($notificaciones as $value) {
                if (!$value['leida']) {
                    $sin_leer++;
                }
            }
        }


        return $this->render('admin/layout/header.html.twig', array(
            'usuario' => $usuario,
            'logs' => $logs,
            'notificaciones' => $notificaciones,
            'notificaciones_sin_leer' => $sin_leer,
        ));
    }

    public function renderMenu()
    {
        $usuario = $this->getUser();

        $menu = $this->defaultService->DevolverMenuIcan($usuario->getUsuarioId());

        return $this->render('admin/layout/menu.html.twig', array(
            'usuario' => $usuario,
            'menu' => $menu
        ));
    }

    public function renderModalItemProject()
    {

        // items
        $items = $this->defaultService->getDoctrine()->getRepository(Item::class)
            ->ListarOrdenados();

        $equations = $this->defaultService->getDoctrine()->getRepository(Equation::class)
            ->ListarOrdenados();

        $units = $this->defaultService->getDoctrine()->getRepository(Unit::class)
            ->ListarOrdenados();

        $yields_calculation = $this->defaultService->ListarYieldsCalculation();

        return $this->render('admin/block/modal-item-project.html.twig', array(
            'items' => $items,
            'equations' => $equations,
            'yields_calculation' => $yields_calculation,
            'units' => $units
        ));
    }

    public function renderModalInspector()
    {
        return $this->render('admin/block/modal-inspector.html.twig', array(

        ));
    }

    public function renderModalEquation()
    {
        return $this->render('admin/block/modal-equation.html.twig', array(

        ));
    }

    public function renderModalUnit()
    {
        return $this->render('admin/block/modal-unit.html.twig', array(

        ));
    }
}
