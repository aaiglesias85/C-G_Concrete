<?php

namespace App\Repository;

use App\Entity\Invoice;
use Doctrine\ORM\EntityRepository;


class InvoiceRepository extends EntityRepository
{

    /**
     * ListarInvoicesDeProject: Lista los invoices de un project
     *
     * @return Invoice[]
     */
    public function ListarInvoicesDeProject($project_id)
    {
        $consulta = $this->createQueryBuilder('i')
            ->leftJoin('i.project', 'p')
            ->andWhere('p.projectId = :project_id')
            ->setParameter('project_id', $project_id);

        $consulta->orderBy('i.createdAt', "ASC");

        return $consulta->getQuery()->getResult();
    }

    /**
     * ListarInvoices: Lista los invoices
     * @param int $start Inicio
     * @param int $limit Limite
     * @param string $sSearch Para buscar
     *
     * @return Invoice[]
     */
    public function ListarInvoices($start, $limit, $sSearch, $iSortCol_0, $sSortDir_0, $contractor_id = '', $project_id = '', $fecha_inicial = '', $fecha_fin = '')
    {
        $consulta = $this->createQueryBuilder('i')
            ->leftJoin('i.project', 'p')
            ->leftJoin('p.contractor', 'c');

        if ($sSearch != "") {
            $consulta->andWhere('i.number LIKE :number OR i.notes LIKE :notes')
                ->setParameter('number', "%${sSearch}%")
                ->setParameter('notes', "%${sSearch}%");
        }

        if ($contractor_id != '') {
            $consulta->andWhere('c.contractorId = :contractor_id')
                ->setParameter('contractor_id', $contractor_id);
        }

        if ($project_id != '') {
            $consulta->andWhere('p.projectId = :project_id')
                ->setParameter('project_id', $project_id);
        }

        if ($fecha_inicial != "") {

            $fecha_inicial = \DateTime::createFromFormat("m/d/Y", $fecha_inicial);
            $fecha_inicial = $fecha_inicial->format("Y-m-d");

            $consulta->andWhere('i.startDate >= :fecha_inicial')
                ->setParameter('fecha_inicial', $fecha_inicial);
        }
        if ($fecha_fin != "") {

            $fecha_fin = \DateTime::createFromFormat("m/d/Y", $fecha_fin);
            $fecha_fin = $fecha_fin->format("Y-m-d");

            $consulta->andWhere('i.endDate <= :fecha_final')
                ->setParameter('fecha_final', $fecha_fin);
        }

        switch ($iSortCol_0) {
            case "project":
                $consulta->orderBy("p.name", $sSortDir_0);
                break;
            case "contractor":
                $consulta->orderBy("c.name", $sSortDir_0);
                break;
            case "total":
                break;
            default:
                $consulta->orderBy("i.$iSortCol_0", $sSortDir_0);
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
     * TotalInvoices: Total de invoices de la BD
     * @param string $sSearch Para buscar
     *
     * @author Marcel
     */
    public function TotalInvoices($sSearch = '', $contractor_id = '', $project_id = '', $fecha_inicial = '', $fecha_fin = '')
    {
        $em = $this->getEntityManager();
        $consulta = 'SELECT COUNT(i.invoiceId) FROM App\Entity\Invoice i ';
        $join = ' LEFT JOIN i.project p LEFT JOIN p.contractor c ';
        $where = '';

        if ($sSearch != "") {
            $esta_query = explode("WHERE", $where);
            if (count($esta_query) == 1)
                $where .= 'WHERE (i.number LIKE :number OR i.notes LIKE :notes) ';
            else
                $where .= 'AND (i.number LIKE :number OR i.notes LIKE :notes) ';
        }

        if ($project_id != '') {
            $esta_query = explode("WHERE", $where);
            if (count($esta_query) == 1)
                $where .= 'WHERE (p.projectId = :project_id) ';
            else
                $where .= 'AND (p.projectId = :project_id) ';
        }

        if ($contractor_id != '') {
            $esta_query = explode("WHERE", $where);
            if (count($esta_query) == 1)
                $where .= 'WHERE (c.contractorId = :contractor_id) ';
            else
                $where .= 'AND (c.contractorId = :contractor_id) ';
        }

        if ($fecha_inicial != "") {

            $fecha_inicial = \DateTime::createFromFormat("m/d/Y", $fecha_inicial);
            $fecha_inicial = $fecha_inicial->format("Y-m-d");

            $esta_query = explode("WHERE", $where);
            if (count($esta_query) == 1) {
                $where .= 'WHERE (i.startDate >= :inicio) ';
            } else {
                $where .= ' AND (i.startDate >= :inicio) ';
            }
        }

        if ($fecha_fin != "") {

            $fecha_fin = \DateTime::createFromFormat("m/d/Y", $fecha_fin);
            $fecha_fin = $fecha_fin->format("Y-m-d");

            $esta_query = explode("WHERE", $where);
            if (count($esta_query) == 1) {
                $where .= 'WHERE (i.endDate <= :fin) ';
            } else {
                $where .= ' AND (i.endDate <= :fin) ';
            }
        }

        $consulta .= $join;
        $consulta .= $where;
        $query = $em->createQuery($consulta);
        //Adicionar parametros        
        //$sSearch
        $esta_query_number = substr_count($consulta, ':number');
        if ($esta_query_number == 1)
            $query->setParameter(':number', "%${sSearch}%");

        $esta_query_notes = substr_count($consulta, ':notes');
        if ($esta_query_notes == 1)
            $query->setParameter(':notes', "%${sSearch}%");

        $esta_query_project_id = substr_count($consulta, ':project_id');
        if ($esta_query_project_id == 1) {
            $query->setParameter('project_id', $project_id);
        }

        $esta_query_contractor_id = substr_count($consulta, ':contractor_id');
        if ($esta_query_contractor_id == 1) {
            $query->setParameter('contractor_id', $contractor_id);
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
     * ListarInvoicesRangoFecha: Lista los invoices
     * @param int $start Inicio
     * @param int $limit Limite
     * @param string $sSearch Para buscar
     *
     * @return Invoice[]
     */
    public function ListarInvoicesRangoFecha($contractor_id = '', $project_id = '', $fecha_inicial = '', $fecha_fin = '')
    {
        $consulta = $this->createQueryBuilder('i')
            ->leftJoin('i.project', 'p')
            ->leftJoin('p.contractor', 'c');

        if ($contractor_id != '') {
            $consulta->andWhere('c.contractorId = :contractor_id')
                ->setParameter('contractor_id', $contractor_id);
        }

        if ($project_id != '') {
            $consulta->andWhere('p.projectId = :project_id')
                ->setParameter('project_id', $project_id);
        }

        if ($fecha_inicial != "") {

            $fecha_inicial = \DateTime::createFromFormat("m/d/Y", $fecha_inicial);
            $fecha_inicial = $fecha_inicial->format("Y-m-d");

            $consulta->andWhere('i.startDate >= :fecha_inicial')
                ->setParameter('fecha_inicial', $fecha_inicial);
        }
        if ($fecha_fin != "") {

            $fecha_fin = \DateTime::createFromFormat("m/d/Y", $fecha_fin);
            $fecha_fin = $fecha_fin->format("Y-m-d");

            $consulta->andWhere('i.endDate <= :fecha_final')
                ->setParameter('fecha_final', $fecha_fin);
        }

        $consulta->orderBy("i.startDate", 'ASC');

        return $consulta->getQuery()->getResult();
    }
}