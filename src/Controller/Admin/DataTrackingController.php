<?php

namespace App\Controller\Admin;

use App\Entity\Company;
use App\Entity\Item;
use App\Utils\Admin\DataTrackingService;
use App\Utils\Admin\ProjectService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DataTrackingController extends AbstractController
{

    private $dataTrackingService;
    private $projectService;
    public function __construct(DataTrackingService $dataTrackingService, ProjectService $projectService)
    {
        $this->dataTrackingService = $dataTrackingService;
        $this->projectService = $projectService;
    }

    public function index()
    {
        $usuario = $this->getUser();
        $permiso = $this->dataTrackingService->BuscarPermiso($usuario->getUsuarioId(), 10);
        if (count($permiso) > 0) {
            if ($permiso[0]['ver']) {

                // companies
                $companies = $this->dataTrackingService->getDoctrine()->getRepository(Company::class)
                    ->ListarOrdenados();

                // items
                $items = $this->dataTrackingService->getDoctrine()->getRepository(Item::class)
                    ->ListarOrdenados();

                return $this->render('admin/data-tracking/index.html.twig', array(
                    'permiso' => $permiso[0],
                    'companies' => $companies,
                    'items' => $items
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

        // search filter by keywords
        $query = !empty($request->get('query')) ? $request->get('query') : array();
        $sSearch = isset($query['generalSearch']) && is_string($query['generalSearch']) ? $query['generalSearch'] : '';
        $company_id = isset($query['company_id']) && is_string($query['company_id']) ? $query['company_id'] : '';
        $project_id = isset($query['project_id']) && is_string($query['project_id']) ? $query['project_id'] : '';
        $item_id = isset($query['item_id']) && is_string($query['item_id']) ? $query['item_id'] : '';
        $fecha_inicial = isset($query['fechaInicial']) && is_string($query['fechaInicial']) ? $query['fechaInicial'] : '';
        $fecha_fin = isset($query['fechaFin']) && is_string($query['fechaFin']) ? $query['fechaFin'] : '';

        //Sort
        $sort = !empty($request->get('sort')) ? $request->get('sort') : array();
        $sSortDir_0 = !empty($sort['sort']) ? $sort['sort'] : 'desc';
        $iSortCol_0 = !empty($sort['field']) ? $sort['field'] : 'date';
        //$start and $limit
        $pagination = !empty($request->get('pagination')) ? $request->get('pagination') : array();
        $page = !empty($pagination['page']) ? (int)$pagination['page'] : 1;
        $limit = !empty($pagination['perpage']) ? (int)$pagination['perpage'] : -1;
        $start = 0;

        try {
            $pages = 1;
            $total = $this->dataTrackingService->TotalDataTrackings($sSearch, $company_id, $project_id, $item_id, $fecha_inicial, $fecha_fin);
            if ($limit > 0) {
                $pages = ceil($total / $limit); // calculate total pages
                $page = max($page, 1); // get 1 page when $_REQUEST['page'] <= 0
                $page = min($page, $pages); // get last page when $_REQUEST['page'] > $totalPages
                $start = ($page - 1) * $limit;
                if ($start < 0) {
                    $start = 0;
                }
            }

            $meta = array(
                'page' => $page,
                'pages' => $pages,
                'perpage' => $limit,
                'total' => $total,
                'field' => $iSortCol_0,
                'sort' => $sSortDir_0
            );

            $data = $this->dataTrackingService->ListarDataTrackings($start, $limit, $sSearch, $iSortCol_0, $sSortDir_0, $company_id, $project_id, $item_id, $fecha_inicial, $fecha_fin);

            $resultadoJson = array(
                'meta' => $meta,
                'data' => $data
            );

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
        $item_id = $request->get('item_id');
        $quantity = $request->get('quantity');
        $price = $request->get('price');
        $date = $request->get('date');

        try {

            $resultado = $this->projectService->SalvarDataTracking($data_tracking_id, $project_id, $item_id, $quantity, $price, $date);

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
            $resultado = $this->projectService->EliminarDataTracking($data_tracking_id);
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
            $resultado = $this->dataTrackingService->EliminarDataTrackings($ids);
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
            $resultado = $this->projectService->CargarDatosDataTracking($data_tracking_id);
            if ($resultado['success']) {

                $resultadoJson['success'] = $resultado['success'];
                $resultadoJson['item'] = $resultado['item'];

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
}
