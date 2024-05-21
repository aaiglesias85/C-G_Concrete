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

}