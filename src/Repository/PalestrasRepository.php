<?php

namespace App\Repository;

use App\Entity\Palestras;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Palestras|null find($id, $lockMode = null, $lockVersion = null)
 * @method Palestras|null findOneBy(array $criteria, array $orderBy = null)
 * @method Palestras[]    findAll()
 * @method Palestras[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PalestrasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Palestras::class);
    }

    // /**
    //  * @return Palestras[] Returns an array of Palestras objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Palestras
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
