<?php

namespace App\Repository;

use App\Entity\Project;
use App\Entity\ProjectItemDetails;
use Doctrine\ORM\EntityRepository;


class ProjectItemDetailsRepository extends EntityRepository
{

    /**
     * ListarItemDetails: Lista los items
     *
     * @return ProjectItemDetails[]
     */
    public function ListarItemDetails($project_id, $fecha_inicial = '', $fecha_fin = '')
    {
        $consulta = $this->createQueryBuilder('p_i_d')
            ->leftJoin('p_i_d.project', 'p');

        if ($project_id != '') {
            $consulta->andWhere('p.projectId = :project_id')
                ->setParameter('project_id', $project_id);
        }

        if ($fecha_inicial != "") {

            $fecha_inicial = \DateTime::createFromFormat("m/d/Y", $fecha_inicial);
            $fecha_inicial = $fecha_inicial->format("Y-m-d");

            $consulta->andWhere('p_i_d.date >= :fecha_inicial')
                ->setParameter('fecha_inicial', $fecha_inicial);
        }
        if ($fecha_fin != "") {

            $fecha_fin = \DateTime::createFromFormat("m/d/Y", $fecha_fin);
            $fecha_fin = $fecha_fin->format("Y-m-d");

            $consulta->andWhere('p_i_d.date <= :fecha_final')
                ->setParameter('fecha_final', $fecha_fin);
        }


        $consulta->orderBy('p_i_d.date', "ASC");


        return $consulta->getQuery()->getResult();
    }


    /**
     * ListarProjectsDeItem: Lista los projects de item
     *
     * @return ProjectItemDetails[]
     */
    public function ListarProjectsDeItem($item_id)
    {
        $consulta = $this->createQueryBuilder('p_i_d')
            ->leftJoin('p_i_d.item', 'i');

        if ($item_id != '') {
            $consulta->andWhere('i.itemId = :item_id')
                ->setParameter('item_id', $item_id);
        }


        $consulta->orderBy('p_i_d.date', "ASC");


        return $consulta->getQuery()->getResult();
    }

    /**
     * ListarItems: Lista los items
     * @param int $start Inicio
     * @param int $limit Limite
     * @param string $sSearch Para buscar
     *
     * @return ProjectItemDetails[]
     */
    public function ListarItems($start, $limit, $sSearch, $iSortCol_0, $sSortDir_0,
                                $project_id = '', $item_id = '', $fecha_inicial = '', $fecha_fin = '')
    {
        $consulta = $this->createQueryBuilder('p_i_d')
            ->leftJoin('p_i_d.project', 'p')
            ->leftJoin('p_i_d.item', 'i')
            ->leftJoin('i.unit', 'u');

        if ($sSearch != "") {
            $consulta->andWhere('p_i_d.quantity LIKE :quantity OR p_i_d.price LIKE :price')
                ->setParameter('quantity', "%${sSearch}%")
                ->setParameter('price', "%${sSearch}%");
        }

        if ($project_id != '') {
            $consulta->andWhere('p.projectId = :project_id')
                ->setParameter('project_id', $project_id);
        }

        if ($item_id != '') {
            $consulta->andWhere('i.itemId = :item_id')
                ->setParameter('item_id', $item_id);
        }

        if ($fecha_inicial != "") {

            $fecha_inicial = \DateTime::createFromFormat("m/d/Y", $fecha_inicial);
            $fecha_inicial = $fecha_inicial->format("Y-m-d");

            $consulta->andWhere('p_i_d.date >= :fecha_inicial')
                ->setParameter('fecha_inicial', $fecha_inicial);
        }
        if ($fecha_fin != "") {

            $fecha_fin = \DateTime::createFromFormat("m/d/Y", $fecha_fin);
            $fecha_fin = $fecha_fin->format("Y-m-d");

            $consulta->andWhere('p_i_d.date <= :fecha_final')
                ->setParameter('fecha_final', $fecha_fin);
        }

        switch ($iSortCol_0) {
            case "item":
                $consulta->orderBy("i.description", $sSortDir_0);
                break;
            case "unit":
                $consulta->orderBy("u.description", $sSortDir_0);
                break;
            case "total":
                $consulta->orderBy("p_i_d.price", $sSortDir_0);
                break;
            default:
                $consulta->orderBy("p_i_d.$iSortCol_0", $sSortDir_0);
                break;
        }

        if ($limit > 0) {
            $consulta->setMaxResults($limit);
        }

        $lista = $consulta->setFirstResult($start)
            ->getQuery()->getResult();
        return $lista;
    }

    /**
     * TotalItems: Total de items de la BD
     * @param string $sSearch Para buscar
     *
     * @author Marcel
     */
    public function TotalItems($sSearch, $project_id = '', $item_id = '', $fecha_inicial = '', $fecha_fin = '')
    {
        $em = $this->getEntityManager();
        $consulta = 'SELECT COUNT(p_i_d.id) FROM App\Entity\ProjectItemDetails p_i_d ';
        $join = ' LEFT JOIN p_i_d.project p LEFT JOIN p_i_d.item i ';
        $where = '';

        if ($sSearch != "") {
            $esta_query = explode("WHERE", $where);
            if (count($esta_query) == 1)
                $where .= 'WHERE (p_i_d.quantity LIKE :quantity OR p_i_d.price LIKE :price) ';
            else
                $where .= 'AND (p_i_d.quantity LIKE :quantity OR p_i_d.price LIKE :price) ';
        }

        if ($project_id != '') {
            $esta_query = explode("WHERE", $where);
            if (count($esta_query) == 1)
                $where .= 'WHERE (p.projectId = :project_id) ';
            else
                $where .= 'AND (p.projectId = :project_id) ';
        }

        if ($item_id != '') {
            $esta_query = explode("WHERE", $where);
            if (count($esta_query) == 1)
                $where .= 'WHERE (i.itemId = :item_id) ';
            else
                $where .= 'AND (i.itemId = :item_id) ';
        }

        if ($fecha_inicial != "") {

            $fecha_inicial = \DateTime::createFromFormat("m/d/Y", $fecha_inicial);
            $fecha_inicial = $fecha_inicial->format("Y-m-d");

            $esta_query = explode("WHERE", $where);
            if (count($esta_query) == 1) {
                $where .= 'WHERE (p_i_d.date >= :inicio) ';
            } else {
                $where .= ' AND (p_i_d.date >= :inicio) ';
            }
        }

        if ($fecha_fin != "") {

            $fecha_fin = \DateTime::createFromFormat("m/d/Y", $fecha_fin);
            $fecha_fin = $fecha_fin->format("Y-m-d");

            $esta_query = explode("WHERE", $where);
            if (count($esta_query) == 1) {
                $where .= 'WHERE (p_i_d.date <= :fin) ';
            } else {
                $where .= ' AND (p_i_d.date <= :fin) ';
            }
        }

        $consulta .= $join;
        $consulta .= $where;
        $query = $em->createQuery($consulta);
        //Adicionar parametros
        //$sSearch
        $esta_query_quantity = substr_count($consulta, ':quantity');
        if ($esta_query_quantity == 1)
            $query->setParameter(':quantity', "%${sSearch}%");

        $esta_query_price = substr_count($consulta, ':price');
        if ($esta_query_price == 1)
            $query->setParameter(':price', "%${sSearch}%");

        $esta_query_project_id = substr_count($consulta, ':project_id');
        if ($esta_query_project_id == 1) {
            $query->setParameter('project_id', $project_id);
        }

        $esta_query_item_id = substr_count($consulta, ':item_id');
        if ($esta_query_item_id == 1) {
            $query->setParameter('item_id', $item_id);
        }

        $esta_query_inicio = substr_count($consulta, ':inicio');
        if ($esta_query_inicio == 1) {
            $query->setParameter('inicio', $fecha_inicial);
        }

        $esta_query_fin = substr_count($consulta, ':fin');
        if ($esta_query_fin == 1) {
            $query->setParameter('fin', $fecha_fin);
        }

        $total = $query->getSingleScalarResult();
        return $total;
    }

}