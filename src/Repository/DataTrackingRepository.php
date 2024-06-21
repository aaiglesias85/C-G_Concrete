<?php

namespace App\Repository;

use App\Entity\DataTracking;
use Doctrine\ORM\EntityRepository;


class DataTrackingRepository extends EntityRepository
{

    /**
     * ListarDataTracking: Lista el data tracking
     *
     * @return DataTracking[]
     */
    public function ListarDataTracking($project_id, $fecha_inicial = '', $fecha_fin = '')
    {
        $consulta = $this->createQueryBuilder('d_t')
            ->leftJoin('d_t.project', 'p');

        if ($project_id != '') {
            $consulta->andWhere('p.projectId = :project_id')
                ->setParameter('project_id', $project_id);
        }

        if ($fecha_inicial != "") {

            $fecha_inicial = \DateTime::createFromFormat("m/d/Y", $fecha_inicial);
            $fecha_inicial = $fecha_inicial->format("Y-m-d");

            $consulta->andWhere('d_t.date >= :fecha_inicial')
                ->setParameter('fecha_inicial', $fecha_inicial);
        }
        if ($fecha_fin != "") {

            $fecha_fin = \DateTime::createFromFormat("m/d/Y", $fecha_fin);
            $fecha_fin = $fecha_fin->format("Y-m-d");

            $consulta->andWhere('d_t.date <= :fecha_final')
                ->setParameter('fecha_final', $fecha_fin);
        }


        $consulta->orderBy('d_t.date', "ASC");


        return $consulta->getQuery()->getResult();
    }

    /**
     * ListarDataTrackingsDeInspector: Lista el data tracking de un inspector
     *
     * @return DataTracking[]
     */
    public function ListarDataTrackingsDeInspector($inspector_id)
    {
        $consulta = $this->createQueryBuilder('d_t')
            ->leftJoin('d_t.inspector', 'i');

        if ($inspector_id != '') {
            $consulta->andWhere('i.inspectorId = :inspector_id')
                ->setParameter('inspector_id', $inspector_id);
        }


        $consulta->orderBy('d_t.date', "ASC");


        return $consulta->getQuery()->getResult();
    }

    /**
     * ListarDataTrackingsParaCalendario: Lista el data tracking
     *
     * @return DataTracking[]
     */
    public function ListarDataTrackingsParaCalendario($sSearch = '', $project_id = '', $fecha_inicial = '', $fecha_fin = '')
    {
        $consulta = $this->createQueryBuilder('d_t')
            ->leftJoin('d_t.project', 'p')
            ->leftJoin('p.company', 'c')
            ->leftJoin('d_t.inspector', 'ins');

        if ($sSearch != "") {
            $consulta->andWhere('d_t.crewLead LIKE :crewLead OR d_t.measuredBy LIKE :measuredBy OR d_t.stationNumber LIKE :stationNumber OR d_t.notes LIKE :notes OR d_t.otherMaterials LIKE :otherMaterials')
                ->setParameter('crewLead', "%${sSearch}%")
                ->setParameter('stationNumber', "%${sSearch}%")
                ->setParameter('measuredBy', "%${sSearch}%")
                ->setParameter('notes', "%${sSearch}%")
                ->setParameter('otherMaterials', "%${sSearch}%");
        }

        if ($project_id != '') {
            $consulta->andWhere('p.projectId = :project_id')
                ->setParameter('project_id', $project_id);
        }

        if ($fecha_inicial != "") {

            $fecha_inicial = \DateTime::createFromFormat("m/d/Y", $fecha_inicial);
            $fecha_inicial = $fecha_inicial->format("Y-m-d");

            $consulta->andWhere('d_t.date >= :fecha_inicial')
                ->setParameter('fecha_inicial', $fecha_inicial);
        }
        if ($fecha_fin != "") {

            $fecha_fin = \DateTime::createFromFormat("m/d/Y", $fecha_fin);
            $fecha_fin = $fecha_fin->format("Y-m-d");

            $consulta->andWhere('d_t.date <= :fecha_final')
                ->setParameter('fecha_final', $fecha_fin);
        }

        $consulta->orderBy("d_t.date", 'ASC');

        return $consulta->getQuery()->getResult();
    }


    /**
     * TotalConcrete: Total de quantity * price items de la BD
     * @param string $project_id
     *
     * @return float
     */
    public function TotalConcrete($project_id = '', $fecha_inicial = '', $fecha_fin = '')
    {
        $em = $this->getEntityManager();
        $consulta = 'SELECT SUM(d_t.totalConcUsed * d_t.concPrice) FROM App\Entity\DataTracking d_t ';
        $join = ' LEFT JOIN d_t.project p ';
        $where = '';

        if ($project_id != '') {
            $esta_query = explode("WHERE", $where);
            if (count($esta_query) == 1)
                $where .= 'WHERE (p.projectId = :project_id) ';
            else
                $where .= 'AND (p.projectId = :project_id) ';
        }

        if ($fecha_inicial != "") {

            $fecha_inicial = \DateTime::createFromFormat("m/d/Y", $fecha_inicial);
            $fecha_inicial = $fecha_inicial->format("Y-m-d");

            $esta_query = explode("WHERE", $where);
            if (count($esta_query) == 1)
                $where .= 'WHERE (d_t.date >= :start) ';
            else
                $where .= 'AND (d_t.date >= :start) ';
        }
        if ($fecha_fin != "") {

            $fecha_fin = \DateTime::createFromFormat("m/d/Y", $fecha_fin);
            $fecha_fin = $fecha_fin->format("Y-m-d");

            $esta_query = explode("WHERE", $where);
            if (count($esta_query) == 1)
                $where .= 'WHERE (d_t.date <= :end) ';
            else
                $where .= 'AND (d_t.date <= :end) ';
        }

        $consulta .= $join;
        $consulta .= $where;
        $query = $em->createQuery($consulta);
        //Adicionar parametros

        $esta_query_project_id = substr_count($consulta, ':project_id');
        if ($esta_query_project_id == 1) {
            $query->setParameter('project_id', $project_id);
        }

        $esta_query_start = substr_count($consulta, ':start');
        if ($esta_query_start == 1) {
            $query->setParameter('start', $fecha_inicial);
        }

        $esta_query_end = substr_count($consulta, ':end');
        if ($esta_query_end == 1) {
            $query->setParameter('end', $fecha_fin);
        }

        return $query->getSingleScalarResult();
    }

    /**
     * TotalLabor: Total de quantity * price items de la BD
     * @param string $project_id
     *
     * @return float
     */
    public function TotalLabor($project_id = '', $fecha_inicial = '', $fecha_fin = '')
    {
        $em = $this->getEntityManager();
        $consulta = 'SELECT SUM(d_t.totalLabor * d_t.laborPrice) FROM App\Entity\DataTracking d_t ';
        $join = ' LEFT JOIN d_t.project p ';
        $where = '';

        if ($project_id != '') {
            $esta_query = explode("WHERE", $where);
            if (count($esta_query) == 1)
                $where .= 'WHERE (p.projectId = :project_id) ';
            else
                $where .= 'AND (p.projectId = :project_id) ';
        }

        if ($fecha_inicial != "") {

            $fecha_inicial = \DateTime::createFromFormat("m/d/Y", $fecha_inicial);
            $fecha_inicial = $fecha_inicial->format("Y-m-d");

            $esta_query = explode("WHERE", $where);
            if (count($esta_query) == 1)
                $where .= 'WHERE (d_t.date >= :start) ';
            else
                $where .= 'AND (d_t.date >= :start) ';
        }
        if ($fecha_fin != "") {

            $fecha_fin = \DateTime::createFromFormat("m/d/Y", $fecha_fin);
            $fecha_fin = $fecha_fin->format("Y-m-d");

            $esta_query = explode("WHERE", $where);
            if (count($esta_query) == 1)
                $where .= 'WHERE (d_t.date <= :end) ';
            else
                $where .= 'AND (d_t.date <= :end) ';
        }

        $consulta .= $join;
        $consulta .= $where;
        $query = $em->createQuery($consulta);
        //Adicionar parametros

        $esta_query_project_id = substr_count($consulta, ':project_id');
        if ($esta_query_project_id == 1) {
            $query->setParameter('project_id', $project_id);
        }

        $esta_query_start = substr_count($consulta, ':start');
        if ($esta_query_start == 1) {
            $query->setParameter('start', $fecha_inicial);
        }

        $esta_query_end = substr_count($consulta, ':end');
        if ($esta_query_end == 1) {
            $query->setParameter('end', $fecha_fin);
        }

        return $query->getSingleScalarResult();
    }

}