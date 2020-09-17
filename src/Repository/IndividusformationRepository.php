<?php

namespace App\Repository;

use App\Entity\Individusformation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Individusformation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Individusformation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Individusformation[]    findAll()
 * @method Individusformation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IndividusformationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Individusformation::class);
    }

    // /**
    //  * @return Individusformation[] Returns an array of Individusformation objects
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
    public function findOneBySomeField($value): ?Individusformation
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
