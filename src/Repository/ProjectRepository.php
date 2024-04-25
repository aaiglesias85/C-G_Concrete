<?php

namespace App\Repository;

use App\Entity\Project;
use Doctrine\ORM\EntityRepository;


class ProjectRepository extends EntityRepository
{

    /**
     * ListarOrdenados: Lista los projects
     *
     * @return Project[]
     */
    public function ListarOrdenados($sSearch = '', $contractor_id = '', $inspector_id = '')
    {
        $consulta = $this->createQueryBuilder('p')
            ->leftJoin('p.contractor', 'c')
            ->leftJoin('p.inspector', 'i');

        if ($sSearch != "") {
            $consulta->andWhere('p.projectNumber LIKE :number OR p.name LIKE :name OR p.poNumber LIKE :po OR p.poCG LIKE :cg')
                ->setParameter('number', "%${sSearch}%")
                ->setParameter('name', "%${sSearch}%")
                ->setParameter('po', "%${sSearch}%")
                ->setParameter('cg', "%${sSearch}%");
        }

        if ($contractor_id != '') {
            $consulta->andWhere('c.contractorId = :contractor_id')
                ->setParameter('contractor_id', $contractor_id);
        }

        if ($inspector_id != '') {
            $consulta->andWhere('i.inspectorId = :inspector_id')
                ->setParameter('inspector_id', $inspector_id);
        }


        $consulta->orderBy('p.name', "ASC");

        return $consulta->getQuery()->getResult();
    }

    /**
     * ListarProjectsDeContractor: Lista los projects de un contractor
     *
     * @return Project[]
     */
    public function ListarProjectsDeContractor($contractor_id)
    {
        $consulta = $this->createQueryBuilder('p')
            ->leftJoin('p.contractor', 'c')
            ->andWhere('c.contractorId = :contractor_id')
            ->setParameter('contractor_id', $contractor_id);

        $consulta->orderBy('p.name', "ASC");

        return $consulta->getQuery()->getResult();
    }


    /**
     * ListarProjectsDeInspector: Lista los projects de un inspector
     *
     * @return Project[]
     */
    public function ListarProjectsDeInspector($inspector_id)
    {
        $consulta = $this->createQueryBuilder('p')
            ->leftJoin('p.inspector', 'i')
            ->andWhere('i.inspectorId = :inspector_id')
            ->setParameter('inspector_id', $inspector_id);

        $consulta->orderBy('p.name', "ASC");

        return $consulta->getQuery()->getResult();
    }

    /**
     * ListarProjects: Lista los projects
     * @param int $start Inicio
     * @param int $limit Limite
     * @param string $sSearch Para buscar
     *
     * @return Project[]
     */
    public function ListarProjects($start, $limit, $sSearch, $iSortCol_0, $sSortDir_0, $contractor_id = '', $inspector_id = '')
    {
        $consulta = $this->createQueryBuilder('p')
            ->leftJoin('p.contractor', 'c')
            ->leftJoin('p.inspector', 'i');

        if ($sSearch != "") {
            $consulta->andWhere('p.projectNumber LIKE :number OR p.name LIKE :name OR p.poNumber LIKE :po OR p.poCG LIKE :cg')
                ->setParameter('number', "%${sSearch}%")
                ->setParameter('name', "%${sSearch}%")
                ->setParameter('po', "%${sSearch}%")
                ->setParameter('cg', "%${sSearch}%");
        }

        if ($contractor_id != '') {
            $consulta->andWhere('c.contractorId = :contractor_id')
                ->setParameter('contractor_id', $contractor_id);
        }

        if ($inspector_id != '') {
            $consulta->andWhere('i.inspectorId = :inspector_id')
                ->setParameter('inspector_id', $inspector_id);
        }

        switch ($iSortCol_0) {
            case "contractor":
                $consulta->orderBy("c.name", $sSortDir_0);
                break;
            case "inspector":
                $consulta->orderBy("i.name", $sSortDir_0);
                break;
            default:
                $consulta->orderBy("p.$iSortCol_0", $sSortDir_0);
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
     * TotalProjects: Total de projects de la BD
     * @param string $sSearch Para buscar
     *
     * @author Marcel
     */
    public function TotalProjects($sSearch, $contractor_id = '', $inspector_id = '')
    {
        $em = $this->getEntityManager();
        $consulta = 'SELECT COUNT(p.projectId) FROM App\Entity\Project p ';
        $join = ' LEFT JOIN p.contractor c LEFT JOIN p.inspector i ';
        $where = '';

        if ($sSearch != "") {
            $esta_query = explode("WHERE", $where);
            if (count($esta_query) == 1)
                $where .= 'WHERE (p.projectNumber LIKE :number OR p.name LIKE :name OR p.poNumber LIKE :po OR p.poCG LIKE :cg) ';
            else
                $where .= 'AND (p.projectNumber LIKE :number OR p.name LIKE :name OR p.poNumber LIKE :po OR p.poCG LIKE :cg) ';
        }

        if ($contractor_id != '') {
            $esta_query = explode("WHERE", $where);
            if (count($esta_query) == 1)
                $where .= 'WHERE (c.contractorId = :contractor_id) ';
            else
                $where .= 'AND (c.contractorId = :contractor_id) ';
        }

        if ($inspector_id != '') {
            $esta_query = explode("WHERE", $where);
            if (count($esta_query) == 1)
                $where .= 'WHERE (i.inspectorId = :inspector_id) ';
            else
                $where .= 'AND (i.inspectorId = :inspector_id) ';
        }

        $consulta .= $join;
        $consulta .= $where;
        $query = $em->createQuery($consulta);
        //Adicionar parametros        
        //$sSearch
        $esta_query_name = substr_count($consulta, ':name');
        if ($esta_query_name == 1)
            $query->setParameter(':name', "%${sSearch}%");

        $esta_query_number = substr_count($consulta, ':number');
        if ($esta_query_number == 1)
            $query->setParameter(':number', "%${sSearch}%");

        $esta_query_po = substr_count($consulta, ':po');
        if ($esta_query_po == 1)
            $query->setParameter(':po', "%${sSearch}%");

        $esta_query_cg = substr_count($consulta, ':cg');
        if ($esta_query_cg == 1)
            $query->setParameter(':cg', "%${sSearch}%");

        $esta_query_contractor_id = substr_count($consulta, ':contractor_id');
        if ($esta_query_contractor_id == 1) {
            $query->setParameter('contractor_id', $contractor_id);
        }

        $esta_query_inspector_id = substr_count($consulta, ':inspector_id');
        if ($esta_query_inspector_id == 1) {
            $query->setParameter('inspector_id', $inspector_id);
        }

        $total = $query->getSingleScalarResult();
        return $total;
    }
}