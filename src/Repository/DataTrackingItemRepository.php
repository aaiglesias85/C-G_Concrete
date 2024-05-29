<?php

namespace App\Repository;

use App\Entity\DataTrackingItem;
use Doctrine\ORM\EntityRepository;


class DataTrackingItemRepository extends EntityRepository
{

    /**
     * ListarItems: Lista los items del data tracking
     *
     * @return DataTrackingItem[]
     */
    public function ListarItems($data_tracking_id)
    {
        $consulta = $this->createQueryBuilder('d_t_i')
            ->leftJoin('d_t_i.dataTracking', 'd_t');

        if ($data_tracking_id != '') {
            $consulta->andWhere('d_t.id = :data_tracking_id')
                ->setParameter('data_tracking_id', $data_tracking_id);
        }


        $consulta->orderBy('d_t_i.id', "ASC");


        return $consulta->getQuery()->getResult();
    }


    /**
     * ListarDataTrackingsDeItem: Lista el data tracking de item
     *
     * @return DataTrackingItem[]
     */
    public function ListarDataTrackingsDeItem($project_item_id)
    {
        $consulta = $this->createQueryBuilder('d_t')
            ->leftJoin('d_t.projectItem', 'p_i');

        if ($project_item_id != '') {
            $consulta->andWhere('p_i.id = :project_item_id')
                ->setParameter('project_item_id', $project_item_id);
        }


        $consulta->orderBy('d_t.date', "ASC");


        return $consulta->getQuery()->getResult();
    }


    /**
     * TotalQuantity: Total de quantity items de la BD
     * @param string $data_tracking_id
     *
     * @return float
     */
    public function TotalQuantity($data_tracking_id)
    {
        $em = $this->getEntityManager();
        $consulta = 'SELECT SUM(d_t_i.quantity) FROM App\Entity\DataTrackingItem d_t_i ';
        $join = ' LEFT JOIN d_t_i.dataTracking d_t ';
        $where = '';

        if ($data_tracking_id != '') {
            $esta_query = explode("WHERE", $where);
            if (count($esta_query) == 1)
                $where .= 'WHERE (d_t.id = :data_tracking_id) ';
            else
                $where .= 'AND (d_t.id = :data_tracking_id) ';
        }

        $consulta .= $join;
        $consulta .= $where;
        $query = $em->createQuery($consulta);
        //Adicionar parametros
        //$sSearch
        $esta_query_data_tracking_id = substr_count($consulta, ':data_tracking_id');
        if ($esta_query_data_tracking_id == 1) {
            $query->setParameter('data_tracking_id', $data_tracking_id);
        }

        return $query->getSingleScalarResult();
    }

    /**
     * TotalDaily: Total de quantity * price items de la BD
     * @param string $data_tracking_id
     *
     * @return float
     */
    public function TotalDaily($data_tracking_id)
    {
        $em = $this->getEntityManager();
        $consulta = 'SELECT SUM(d_t_i.quantity * d_t_i.price) FROM App\Entity\DataTrackingItem d_t_i ';
        $join = ' LEFT JOIN d_t_i.dataTracking d_t ';
        $where = '';

        if ($data_tracking_id != '') {
            $esta_query = explode("WHERE", $where);
            if (count($esta_query) == 1)
                $where .= 'WHERE (d_t.id = :data_tracking_id) ';
            else
                $where .= 'AND (d_t.id = :data_tracking_id) ';
        }

        $consulta .= $join;
        $consulta .= $where;
        $query = $em->createQuery($consulta);
        //Adicionar parametros
        //$sSearch
        $esta_query_data_tracking_id = substr_count($consulta, ':data_tracking_id');
        if ($esta_query_data_tracking_id == 1) {
            $query->setParameter('data_tracking_id', $data_tracking_id);
        }

        return $query->getSingleScalarResult();
    }

}