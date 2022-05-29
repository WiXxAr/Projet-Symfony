<?php

namespace App\Repository;

use App\Entity\AppartientA;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AppartientA|null find($id, $lockMode = null, $lockVersion = null)
 * @method AppartientA|null findOneBy(array $criteria, array $orderBy = null)
 * @method AppartientA[]    findAll()
 * @method AppartientA[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AppartientARepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AppartientA::class);
    }

    // /**
    //  * @return AppartientA[] Returns an array of AppartientA objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AppartientA
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
