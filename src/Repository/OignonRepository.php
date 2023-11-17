<?php

namespace App\Repository;

use App\Entity\Oignon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Oignon>
 *
 * @method Oignon|null find($id, $lockMode = null, $lockVersion = null)
 * @method Oignon|null findOneBy(array $criteria, array $orderBy = null)
 * @method Oignon[]    findAll()
 * @method Oignon[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OignonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Oignon::class);
    }

//    /**
//     * @return Oignon[] Returns an array of Oignon objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('o.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Oignon
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
