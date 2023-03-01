<?php

namespace App\Repository;

use App\Entity\MarcheArtisanal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MarcheArtisanal>
 *
 * @method MarcheArtisanal|null find($id, $lockMode = null, $lockVersion = null)
 * @method MarcheArtisanal|null findOneBy(array $criteria, array $orderBy = null)
 * @method MarcheArtisanal[]    findAll()
 * @method MarcheArtisanal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MarcheArtisanalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MarcheArtisanal::class);
    }

    public function add(MarcheArtisanal $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(MarcheArtisanal $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return MarcheArtisanal[] Returns an array of MarcheArtisanal objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?MarcheArtisanal
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
