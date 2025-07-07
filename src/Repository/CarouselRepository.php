<?php

namespace App\Repository;

use App\Entity\Carousel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Carousel>
 *
 * @method Carousel|null find($id, $lockMode = null, $lockVersion = null)
 * @method Carousel|null findOneBy(array $criteria, array $orderBy = null)
 * @method Carousel[]    findAll()
 * @method Carousel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarouselRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Carousel::class);
    }

    /**
     * Trouve tous les slides, triés par position (ascendant)
     *
     * @return Carousel[]
     */
    public function findAllSortedByPosition(): array
    {
        return $this->createQueryBuilder('c')
            ->orderBy('c.position', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve tous les slides actifs, triés par position (ascendant)
     *
     * @return Carousel[]
     */
    public function findActiveSortedByPosition(): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.active = :active')
            ->setParameter('active', true)
            ->orderBy('c.position', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve la position maximale parmi les slides
     *
     * @return int La position maximale, ou 0 s'il n'y a pas encore de slides
     */
    public function findMaxPosition(): int
    {
        $result = $this->createQueryBuilder('c')
            ->select('MAX(c.position) as maxPosition')
            ->getQuery()
            ->getOneOrNullResult();
        
        return isset($result['maxPosition']) ? (int)$result['maxPosition'] : 0;
    }
}