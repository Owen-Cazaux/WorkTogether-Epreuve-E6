<?php

namespace App\Repository;

use App\Entity\Unite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Unite>
 */
class UniteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Unite::class);
    }

    public function getUnitesParUtilisateur($utilisateur) {
        return $this->createQueryBuilder('u')
            ->join('u.reservations', 'r')
            ->addSelect('r')
            ->join('r.commande', 'c')
            ->addSelect('c')
            ->join('c.client', 'cli')
            ->addSelect('cli')
            ->setParameter('utilisateur', $utilisateur)
            ->where('cli.id = :utilisateur')
            ->orderBy('u.nom', 'ASC')
            ->getQuery()
            ->getResult();
    }

}
