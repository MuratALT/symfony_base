<?php

namespace App\Repository;

use App\Entity\Pain;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Pain>
 *
 * @method Pain|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pain|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pain[]    findAll()
 * @method Pain[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PainRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pain::class);
    }

//    /**
//     * @return Pain[] Returns an array of Pain objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Pain
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
