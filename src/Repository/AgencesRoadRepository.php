<?php

namespace App\Repository;

use App\Entity\AgencesRoad;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AgencesRoad>
 *
 * @method AgencesRoad|null find($id, $lockMode = null, $lockVersion = null)
 * @method AgencesRoad|null findOneBy(array $criteria, array $orderBy = null)
 * @method AgencesRoad[]    findAll()
 * @method AgencesRoad[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AgencesRoadRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AgencesRoad::class);
    }

    //    /**
    //     * @return AgencesRoad[] Returns an array of AgencesRoad objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('a.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?AgencesRoad
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
