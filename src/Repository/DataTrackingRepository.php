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
     * ListarDataTrackings: Lista los items
     * @param int $start Inicio
     * @param int $limit Limite
     * @param string $sSearch Para buscar
     *
     * @return DataTracking[]
     */
    public function ListarDataTrackings($start, $limit, $sSearch, $iSortCol_0, $sSortDir_0,
                                $project_id = '', $fecha_inicial = '', $fecha_fin = '')
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

        switch ($iSortCol_0) {
            case "lostConcrete":
                $consulta->orderBy("d_t.totalConcUsed", $sSortDir_0);
                break;
            case "inspector":
                $consulta->orderBy("ins.name", $sSortDir_0);
                break;
            case "inspectorNumber":
                $consulta->orderBy("ins.phone", $sSortDir_0);
                break;
            default:
                $consulta->orderBy("d_t.$iSortCol_0", $sSortDir_0);
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
     * TotalDataTrackings: Total de items de la BD
     * @param string $sSearch Para buscar
     *
     * @author Marcel
     */
    public function TotalDataTrackings($sSearch, $project_id = '', $fecha_inicial = '', $fecha_fin = '')
    {
        $em = $this->getEntityManager();
        $consulta = 'SELECT COUNT(d_t.id) FROM App\Entity\DataTracking d_t ';
        $join = ' LEFT JOIN d_t.project p LEFT JOIN p.company c ';
        $where = '';

        if ($sSearch != "") {
            $esta_query = explode("WHERE", $where);
            if (count($esta_query) == 1)
                $where .= 'WHERE (d_t.crewLead LIKE :crewLead OR d_t.measuredBy LIKE :measuredBy OR d_t.stationNumber LIKE :stationNumber OR d_t.notes LIKE :notes OR d_t.otherMaterials LIKE :otherMaterials) ';
            else
                $where .= 'AND (d_t.crewLead LIKE :crewLead OR d_t.measuredBy LIKE :measuredBy OR d_t.stationNumber LIKE :stationNumber OR d_t.notes LIKE :notes OR d_t.otherMaterials LIKE :otherMaterials) ';
        }

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
            if (count($esta_query) == 1) {
                $where .= 'WHERE (d_t.date >= :inicio) ';
            } else {
                $where .= ' AND (d_t.date >= :inicio) ';
            }
        }

        if ($fecha_fin != "") {

            $fecha_fin = \DateTime::createFromFormat("m/d/Y", $fecha_fin);
            $fecha_fin = $fecha_fin->format("Y-m-d");

            $esta_query = explode("WHERE", $where);
            if (count($esta_query) == 1) {
                $where .= 'WHERE (d_t.date <= :fin) ';
            } else {
                $where .= ' AND (d_t.date <= :fin) ';
            }
        }

        $consulta .= $join;
        $consulta .= $where;
        $query = $em->createQuery($consulta);
        //Adicionar parametros
        //$sSearch
        $esta_query_crewLead = substr_count($consulta, ':crewLead');
        if ($esta_query_crewLead == 1)
            $query->setParameter(':crewLead', "%${sSearch}%");

        $esta_query_measuredBy = substr_count($consulta, ':measuredBy');
        if ($esta_query_measuredBy == 1)
            $query->setParameter(':measuredBy', "%${sSearch}%");

        $esta_query_stationNumber = substr_count($consulta, ':stationNumber');
        if ($esta_query_stationNumber == 1)
            $query->setParameter(':stationNumber', "%${sSearch}%");

        $esta_query_notes = substr_count($consulta, ':notes');
        if ($esta_query_notes == 1)
            $query->setParameter(':notes', "%${sSearch}%");

        $esta_query_otherMaterials = substr_count($consulta, ':otherMaterials');
        if ($esta_query_otherMaterials == 1)
            $query->setParameter(':otherMaterials', "%${sSearch}%");

        $esta_query_project_id = substr_count($consulta, ':project_id');
        if ($esta_query_project_id == 1) {
            $query->setParameter('project_id', $project_id);
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

}