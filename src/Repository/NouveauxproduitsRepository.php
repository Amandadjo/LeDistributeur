<?php

namespace App\Repository;

use App\Entity\Nouveauxproduits;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Nouveauxproduits>
 *
 * @method Nouveauxproduits|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nouveauxproduits|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nouveauxproduits[]    findAll()
 * @method Nouveauxproduits[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NouveauxproduitsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Nouveauxproduits::class);
    }

    public function add(Nouveauxproduits $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Nouveauxproduits $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Nouveauxproduits[] Returns an array of Nouveauxproduits objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('n.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Nouveauxproduits
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
