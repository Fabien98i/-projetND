<?php

namespace App\Repository;

use App\Entity\Individus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Individus|null find($id, $lockMode = null, $lockVersion = null)
 * @method Individus|null findOneBy(array $criteria, array $orderBy = null)
 * @method Individus[]    findAll()
 * @method Individus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IndividusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Individus::class);
    }

    // /**
    //  * @return Individus[] Returns an array of Individus objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Individus
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
