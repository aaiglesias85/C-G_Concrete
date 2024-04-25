<?php

namespace App\Controller\Admin;

use App\Entity\Contractor;
use App\Entity\Inspector;
use App\Entity\Item;
use App\Utils\Admin\ProjectService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProjectController extends AbstractController
{

    private $projectService;

    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }

    public function index()
    {
        $usuario = $this->getUser();
        $permiso = $this->projectService->BuscarPermiso($usuario->getUsuarioId(), 9);
        if (count($permiso) > 0) {
            if ($permiso[0]['ver']) {

                // contractors
                $contractors = $this->projectService->getDoctrine()->getRepository(Contractor::class)
                    ->ListarOrdenados();

                // inspectors
                $inspectors = $this->projectService->getDoctrine()->getRepository(Inspector::class)
                    ->ListarOrdenados();

                // items
                $items = $this->projectService->getDoctrine()->getRepository(Item::class)
                    ->ListarOrdenados();

                return $this->render('admin/project/index.html.twig', array(
                    'permiso' => $permiso[0],
                    'contractors' => $contractors,
                    'inspectors' => $inspectors,
                    'items' => $items
                ));
            }
        } else {
            return $this->redirectToRoute('denegado');
        }
    }

    /**
     * listar Acción que lista los projects
     *
     */
    public function listar(Request $request)
    {

        // search filter by keywords
        $query = !empty($request->get('query')) ? $request->get('query') : array();
        $sSearch = isset($query['generalSearch']) && is_string($query['generalSearch']) ? $query['generalSearch'] : '';
        $contractor_id = isset($query['contractor_id']) && is_string($query['contractor_id']) ? $query['contractor_id'] : '';
        $inspector_id = isset($query['inspector_id']) && is_string($query['inspector_id']) ? $query['inspector_id'] : '';
        //Sort
        $sort = !empty($request->get('sort')) ? $request->get('sort') : array();
        $sSortDir_0 = !empty($sort['sort']) ? $sort['sort'] : 'desc';
        $iSortCol_0 = !empty($sort['field']) ? $sort['field'] : 'createdAt';
        //$start and $limit
        $pagination = !empty($request->get('pagination')) ? $request->get('pagination') : array();
        $page = !empty($pagination['page']) ? (int)$pagination['page'] : 1;
        $limit = !empty($pagination['perpage']) ? (int)$pagination['perpage'] : -1;
        $start = 0;

        try {
            $pages = 1;
            $total = $this->projectService->TotalProjects($sSearch, $contractor_id, $inspector_id);
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

            $data = $this->projectService->ListarProjects($start, $limit, $sSearch, $iSortCol_0, $sSortDir_0, $contractor_id, $inspector_id);

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
        $project_id = $request->get('project_id');

        $contractor_id = $request->get('contractor_id');
        $inspector_id = $request->get('inspector_id');
        $number = $request->get('number');
        $name = $request->get('name');
        $location = $request->get('location');
        $po_number = $request->get('po_number');
        $po_cg = $request->get('po_cg');

        try {

            if ($project_id == "") {
                $resultado = $this->projectService->SalvarProject($contractor_id, $inspector_id, $number, $name, $location, $po_number, $po_cg);
            } else {
                $resultado = $this->projectService->ActualizarProject($project_id, $contractor_id, $inspector_id, $number, $name, $location, $po_number, $po_cg);
            }

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
     * eliminar Acción que elimina un project en la BD
     *
     */
    public function eliminar(Request $request)
    {
        $project_id = $request->get('project_id');

        try {
            $resultado = $this->projectService->EliminarProject($project_id);
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
     * eliminarProjects Acción que elimina los projects seleccionados en la BD
     *
     */
    public function eliminarProjects(Request $request)
    {
        $ids = $request->get('ids');

        try {
            $resultado = $this->projectService->EliminarProjects($ids);
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
     * cargarDatos Acción que carga los datos del project en la BD
     *
     */
    public function cargarDatos(Request $request)
    {
        $project_id = $request->get('project_id');

        try {
            $resultado = $this->projectService->CargarDatosProject($project_id);
            if ($resultado['success']) {

                $resultadoJson['success'] = $resultado['success'];
                $resultadoJson['project'] = $resultado['project'];

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
     * listarOrdenados Acción para listar los projects ordenados
     *
     */
    public function listarOrdenados(Request $request)
    {
        $contractor_id = $request->get('contractor_id');
        $inspector_id = $request->get('inspector_id');
        $search = $request->get('search');

        try {
            $projects = $this->projectService->ListarOrdenados($search, $contractor_id, $inspector_id);

            $resultadoJson['success'] = true;
            $resultadoJson['projects'] = $projects;

            return $this->json($resultadoJson);
        } catch (\Exception $e) {
            $resultadoJson['success'] = false;
            $resultadoJson['error'] = $e->getMessage();

            return $this->json($resultadoJson);
        }

    }

    /**
     * listarItemDetails Acción que lista los items details projects
     *
     */
    public function listarItemDetails(Request $request)
    {

        // search filter by keywords
        $query = !empty($request->get('query')) ? $request->get('query') : array();
        $sSearch = isset($query['generalSearch']) && is_string($query['generalSearch']) ? $query['generalSearch'] : '';
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
            $total = $project_id != '' ? $this->projectService->TotalItemDetails($sSearch, $project_id, $item_id, $fecha_inicial, $fecha_fin) : 0;
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

            $data = $project_id != '' ? $this->projectService->ListarItemDetails($start, $limit, $sSearch, $iSortCol_0, $sSortDir_0, $project_id, $item_id, $fecha_inicial, $fecha_fin) : [];

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
     * salvarItemDetails Acción que salvar un item details en la BD
     *
     */
    public function salvarItemDetails(Request $request)
    {
        $item_details_id = $request->get('item_details_id');

        $project_id = $request->get('project_id');
        $item_id = $request->get('item_id');

        $quantity = $request->get('quantity');
        $price = $request->get('price');
        $date = $request->get('date');

        try {

            $resultado = $this->projectService->SalvarItemDetails($item_details_id, $project_id, $item_id, $quantity, $price, $date);

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
     * cargarDatosItemDetails Acción que carga los datos del item detail project en la BD
     *
     */
    public function cargarDatosItemDetails(Request $request)
    {
        $item_details_id = $request->get('item_details_id');

        try {
            $resultado = $this->projectService->CargarDatosItemDetails($item_details_id);
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

    /**
     * eliminarItemDetails Acción que elimina un item details en la BD
     *
     */
    public function eliminarItemDetails(Request $request)
    {
        $item_details_id = $request->get('item_details_id');

        try {
            $resultado = $this->projectService->EliminarItemDetails($item_details_id);
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
     * listarItemDetailsParaInvoice Acción para listar los items para el invoice
     *
     */
    public function listarItemDetailsParaInvoice(Request $request)
    {
        $project_id = $request->get('project_id');
        $fecha_inicial = $request->get('fechaInicial');
        $fecha_fin = $request->get('fechaFin');

        try {
            $items = $this->projectService->ListarItemDetailsParaInvoice($project_id, $fecha_inicial, $fecha_fin);

            $resultadoJson['success'] = true;
            $resultadoJson['items'] = $items;

            return $this->json($resultadoJson);
        } catch (\Exception $e) {
            $resultadoJson['success'] = false;
            $resultadoJson['error'] = $e->getMessage();

            return $this->json($resultadoJson);
        }

    }
}
