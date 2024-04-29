<?php

namespace App\Repository;

use App\Entity\ProjectItem;
use Doctrine\ORM\EntityRepository;


class ProjectItemRepository extends EntityRepository
{

    /**
     * ListarItemsDeProject: Lista los items
     *
     * @return ProjectItem[]
     */
    public function ListarItemsDeProject($project_id)
    {
        $consulta = $this->createQueryBuilder('p_i')
            ->leftJoin('p_i.project', 'p');

        if ($project_id != '') {
            $consulta->andWhere('p.projectId = :project_id')
                ->setParameter('project_id', $project_id);
        }

        $consulta->orderBy('p_i.id', "ASC");


        return $consulta->getQuery()->getResult();
    }


    /**
     * ListarProjectsDeItem: Lista los projects de item
     *
     * @return ProjectItem[]
     */
    public function ListarProjectsDeItem($item_id)
    {
        $consulta = $this->createQueryBuilder('p_i')
            ->leftJoin('p_i.item', 'i');

        if ($item_id != '') {
            $consulta->andWhere('i.itemId = :item_id')
                ->setParameter('item_id', $item_id);
        }


        $consulta->orderBy('p_i.date', "ASC");


        return $consulta->getQuery()->getResult();
    }

    /**
     * ListarItems: Lista los items
     * @param int $start Inicio
     * @param int $limit Limite
     * @param string $sSearch Para buscar
     *
     * @return ProjectItem[]
     */
    public function ListarItems($start, $limit, $sSearch, $iSortCol_0, $sSortDir_0, $project_id = '', $item_id = '')
    {
        $consulta = $this->createQueryBuilder('p_i')
            ->leftJoin('p_i.project', 'p')
            ->leftJoin('p_i.item', 'i')
            ->leftJoin('i.unit', 'u');

        if ($sSearch != "") {
            $consulta->andWhere('p_i.quantity LIKE :quantity OR p_i.price LIKE :price')
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

        switch ($iSortCol_0) {
            case "item":
                $consulta->orderBy("i.description", $sSortDir_0);
                break;
            case "unit":
                $consulta->orderBy("u.description", $sSortDir_0);
                break;
            case "total":
                $consulta->orderBy("p_i.price", $sSortDir_0);
                break;
            default:
                $consulta->orderBy("p_i.$iSortCol_0", $sSortDir_0);
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
    public function TotalItems($sSearch, $project_id = '', $item_id = '')
    {
        $em = $this->getEntityManager();
        $consulta = 'SELECT COUNT(p_i.id) FROM App\Entity\ProjectItem p_i ';
        $join = ' LEFT JOIN p_i.project p LEFT JOIN p_i.item i ';
        $where = '';

        if ($sSearch != "") {
            $esta_query = explode("WHERE", $where);
            if (count($esta_query) == 1)
                $where .= 'WHERE (p_i.quantity LIKE :quantity OR p_i.price LIKE :price) ';
            else
                $where .= 'AND (p_i.quantity LIKE :quantity OR p_i.price LIKE :price) ';
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

        $total = $query->getSingleScalarResult();
        return $total;
    }

}