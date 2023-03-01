<?php

namespace App\Repository;

use App\Entity\IdeesCadeaux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<IdeesCadeaux>
 *
 * @method IdeesCadeaux|null find($id, $lockMode = null, $lockVersion = null)
 * @method IdeesCadeaux|null findOneBy(array $criteria, array $orderBy = null)
 * @method IdeesCadeaux[]    findAll()
 * @method IdeesCadeaux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IdeesCadeauxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IdeesCadeaux::class);
    }

    public function add(IdeesCadeaux $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(IdeesCadeaux $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return IdeesCadeaux[] Returns an array of IdeesCadeaux objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?IdeesCadeaux
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
