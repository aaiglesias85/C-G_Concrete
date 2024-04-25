<?php

namespace App\Repository;

use App\Entity\ContractorContact;
use Doctrine\ORM\EntityRepository;


class ContractorContactRepository extends EntityRepository
{

    /**
     * ListarContacts: Lista los contacts
     *
     * @return ContractorContact[]
     */
    public function ListarContacts($contractor_id)
    {
        $consulta = $this->createQueryBuilder('c_c')
            ->leftJoin('c_c.contractor', 'c');

        if ($contractor_id != '') {
            $consulta->andWhere('c.contractorId = :contractor_id')
                ->setParameter('contractor_id', $contractor_id);
        }


        $consulta->orderBy('c_c.name', "ASC");


        return $consulta->getQuery()->getResult();
    }

}