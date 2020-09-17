<?php

namespace App\Repository;

use App\Entity\Individusentreprise;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Individusentreprise|null find($id, $lockMode = null, $lockVersion = null)
 * @method Individusentreprise|null findOneBy(array $criteria, array $orderBy = null)
 * @method Individusentreprise[]    findAll()
 * @method Individusentreprise[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IndividusentrepriseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Individusentreprise::class);
    }

    // /**
    //  * @return Individusentreprise[] Returns an array of Individusentreprise objects
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
    public function findOneBySomeField($value): ?Individusentreprise
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
