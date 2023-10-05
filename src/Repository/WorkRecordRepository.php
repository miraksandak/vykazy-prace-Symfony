<?php

namespace App\Repository;

use App\Entity\User;
use App\Entity\WorkRecord;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method WorkRecord|null find($id, $lockMode = null, $lockVersion = null)
 * @method WorkRecord|null findOneBy(array $criteria, array $orderBy = null)
 * @method WorkRecord[]    findAll()
 * @method WorkRecord[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WorkRecordRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WorkRecord::class);
    }

    // /**
    //  * @return WorkRecord[] Returns an array of WorkRecord objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?WorkRecord
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function findRecordsInDateRange(User $user, \DateTime $startDate, \DateTime $endDate = null, ?string $department = null): array
    {
        $qb = $this->createQueryBuilder('wr');
        $qb->andWhere('wr.user = :user')
            ->andWhere('wr.startTime >= :startDate')
            ->setParameter('user', $user)
            ->setParameter('startDate', $startDate);
    
        if ($endDate) {
            $qb->andWhere('wr.startTime <= :endDate')
                ->setParameter('endDate', $endDate);
        }
    
        if ($department) {
            $qb->andWhere('wr.department = :department')
                ->setParameter('department', $department);
        }
    
        $qb->orderBy('wr.startTime', 'DESC');
    
        return $qb->getQuery()->getResult();
    }
    
    
    public function findRecordsInDateRangeAndDepartment(User $user, \DateTime $cutoffDate, ?string $department = null): array
    {
        return $this->findRecordsInDateRange($user, $cutoffDate, $department);
    }
    
}
