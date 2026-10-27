<?php

namespace App\Repository;

use App\Entity\Baie;
use App\Entity\Utilisateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Baie>
 */
class BaieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Baie::class);
    }


    public function getBaieParUtilisateur(Utilisateur $utilisateur): array
    {
        return $this->createQueryBuilder('b')
            ->join('b.unites', 'e')
            ->addSelect('e')
            ->join('e.reservations', 'r')
            ->addSelect('r')
            ->join('r.commande', 'c')
            ->addSelect('c')
            ->join('c.client', 'cli')
            ->addSelect('cli')
            ->setParameter('utilisateur', $utilisateur)
            ->where('c.id = :utilisateur')
            ->getQuery()
            ->getResult();
    }

}
