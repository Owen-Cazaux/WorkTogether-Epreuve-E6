<?php

namespace App\Repository;
use App\Entity\Intervention;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Intervention>
 */
class InterventionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Intervention::class);
    }
    public function findInterventionsByUnit($unite): array
    {
       return $this->createQueryBuilder('i')
           ->join('i.technicien', 't')
           ->addSelect('t')
           ->join('i.unite', 'u')
           ->addSelect('u')
           ->setParameter('unite', $unite)
           ->where('unite.id = :unite')
           ->getQuery()
           ->getResult();
    }
}
