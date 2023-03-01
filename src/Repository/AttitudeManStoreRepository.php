<?php

namespace App\Repository;

use App\Entity\AttitudeManStore;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AttitudeManStore>
 *
 * @method AttitudeManStore|null find($id, $lockMode = null, $lockVersion = null)
 * @method AttitudeManStore|null findOneBy(array $criteria, array $orderBy = null)
 * @method AttitudeManStore[]    findAll()
 * @method AttitudeManStore[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AttitudeManStoreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AttitudeManStore::class);
    }

    public function add(AttitudeManStore $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(AttitudeManStore $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return AttitudeManStore[] Returns an array of AttitudeManStore objects
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

//    public function findOneBySomeField($value): ?AttitudeManStore
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
