<?php

namespace App\Controller\Admin;

use App\Entity\Company;
use App\Entity\Equation;
use App\Entity\Inspector;
use App\Entity\Item;
use App\Entity\Project;
use App\Entity\Unit;
use App\Utils\Admin\DataTrackingService;
use App\Utils\Admin\ProjectService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DataTrackingController extends AbstractController
{

    private $trackingService;
    private $projectService;

    public function __construct(DataTrackingService $trackingService, ProjectService $projectService)
    {
        $this->trackingService = $trackingService;
        $this->projectService = $projectService;
    }

    public function index()
    {
        $usuario = $this->getUser();
        $permiso = $this->trackingService->BuscarPermiso($usuario->getUsuarioId(), 10);
        if (count($permiso) > 0) {
            if ($permiso[0]['ver']) {

                // projects
                /*$projects = $this->trackingService->getDoctrine()->getRepository(Project::class)
                    ->ListarOrdenados();*/

                // inspectors
                $inspectors = $this->projectService->getDoctrine()->getRepository(Inspector::class)
                    ->ListarOrdenados();

                return $this->render('admin/data-tracking/index.html.twig', array(
                    'permiso' => $permiso[0],
                    // 'projects' => $projects,
                    'inspectors' => $inspectors
                ));
            }
        } else {
            return $this->redirectToRoute('denegado');
        }
    }

    /**
     * listar Acción que lista los dataTrackings
     *
     */
    public function listar(Request $request)
    {

        $sSearch = $request->get('search');
        $project_id = $request->get('project_id');
        $fecha_inicial = $request->get('fechaInicial');
        $fecha_fin = $request->get('fechaFin');

        try {


            $lista = $this->trackingService->ListarDataTrackings($sSearch, $project_id, $fecha_inicial, $fecha_fin);

            $resultadoJson['success'] = true;
            $resultadoJson['data_tracking'] = $lista;

            return $this->json($resultadoJson);

        } catch (\Exception $e) {
            $resultadoJson['success'] = false;
            $resultadoJson['error'] = $e->getMessage();

            return $this->json($resultadoJson);
        }
    }

    /**
     * salvar Acción que inserta un menu en la BD
     *
     */
    public function salvar(Request $request)
    {
        $data_tracking_id = $request->get('data_tracking_id');

        $project_id = $request->get('project_id');
        $date = $request->get('date');
        $inspector_id = $request->get('inspector_id');
        $station_number = $request->get('station_number');
        $measured_by = $request->get('measured_by');
        $conc_vendor = $request->get('conc_vendor');
        $conc_price = $request->get('conc_price');
        $crew_lead = $request->get('crew_lead');
        $notes = $request->get('notes');
        $other_materials = $request->get('other_materials');
        $total_conc_used = $request->get('total_conc_used');
        $total_labor = $request->get('total_labor');
        $labor_price = $request->get('labor_price');
        $total_stamps = $request->get('total_stamps');

        // items
        $items = $request->get('items');
        $items = json_decode($items);

        try {

            $resultado = $this->trackingService->SalvarDataTracking($data_tracking_id, $project_id, $date, $inspector_id,
                $station_number, $measured_by, $conc_vendor, $conc_price, $crew_lead, $notes, $other_materials,
                $total_conc_used, $total_labor, $labor_price, $total_stamps, $items);

            if ($resultado['success']) {

                $resultadoJson['success'] = $resultado['success'];
                $resultadoJson['message'] = "The operation was successful";

                return $this->json($resultadoJson);
            } else {
                $resultadoJson['success'] = $resultado['success'];
                $resultadoJson['error'] = $resultado['error'];

                return $this->json($resultadoJson);
            }
        } catch (\Exception $e) {
            $resultadoJson['success'] = false;
            $resultadoJson['error'] = $e->getMessage();

            return $this->json($resultadoJson);
        }
    }

    /**
     * eliminar Acción que elimina un dataTracking en la BD
     *
     */
    public function eliminar(Request $request)
    {
        $data_tracking_id = $request->get('data_tracking_id');

        try {
            $resultado = $this->trackingService->EliminarDataTracking($data_tracking_id);
            if ($resultado['success']) {
                $resultadoJson['success'] = $resultado['success'];
                $resultadoJson['message'] = "The operation was successful";
                return $this->json($resultadoJson);
            } else {
                $resultadoJson['success'] = $resultado['success'];
                $resultadoJson['error'] = $resultado['error'];
                return $this->json($resultadoJson);
            }
        } catch (\Exception $e) {
            $resultadoJson['success'] = false;
            $resultadoJson['error'] = $e->getMessage();

            return $this->json($resultadoJson);
        }
    }

    /**
     * eliminarDataTrackings Acción que elimina los dataTrackings seleccionados en la BD
     *
     */
    public function eliminarDataTrackings(Request $request)
    {
        $ids = $request->get('ids');

        try {
            $resultado = $this->trackingService->EliminarDataTrackings($ids);
            if ($resultado['success']) {
                $resultadoJson['success'] = $resultado['success'];
                $resultadoJson['message'] = "The operation was successful";
                return $this->json($resultadoJson);
            } else {
                $resultadoJson['success'] = $resultado['success'];
                $resultadoJson['error'] = $resultado['error'];
                return $this->json($resultadoJson);
            }
        } catch (\Exception $e) {
            $resultadoJson['success'] = false;
            $resultadoJson['error'] = $e->getMessage();

            return $this->json($resultadoJson);
        }


    }

    /**
     * cargarDatos Acción que carga los datos del dataTracking en la BD
     *
     */
    public function cargarDatos(Request $request)
    {
        $data_tracking_id = $request->get('data_tracking_id');

        try {
            $resultado = $this->trackingService->CargarDatosDataTracking($data_tracking_id, $this->projectService);
            if ($resultado['success']) {

                $resultadoJson['success'] = $resultado['success'];
                $resultadoJson['data_tracking'] = $resultado['data_tracking'];

                return $this->json($resultadoJson);
            } else {
                $resultadoJson['success'] = $resultado['success'];
                $resultadoJson['error'] = $resultado['error'];

                return $this->json($resultadoJson);
            }
        } catch (\Exception $e) {
            $resultadoJson['success'] = false;
            $resultadoJson['error'] = $e->getMessage();

            return $this->json($resultadoJson);
        }
    }

    /**
     * eliminarItem Acción que elimina un dataTracking en la BD
     *
     */
    public function eliminarItem(Request $request)
    {
        $data_tracking_item_id = $request->get('data_tracking_item_id');

        try {
            $resultado = $this->trackingService->EliminarItemDataTracking($data_tracking_item_id);
            if ($resultado['success']) {
                $resultadoJson['success'] = $resultado['success'];
                $resultadoJson['message'] = "The operation was successful";

            } else {
                $resultadoJson['success'] = $resultado['success'];
                $resultadoJson['error'] = $resultado['error'];
            }

            return $this->json($resultadoJson);

        } catch (\Exception $e) {
            $resultadoJson['success'] = false;
            $resultadoJson['error'] = $e->getMessage();

            return $this->json($resultadoJson);
        }
    }
}
