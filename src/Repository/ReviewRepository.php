<?php

namespace App\Repository;

use App\Entity\Product;
use App\Entity\Review;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Review>
 *
 * @method Review|null find($id, $lockMode = null, $lockVersion = null)
 * @method Review|null findOneBy(array $criteria, array $orderBy = null)
 * @method Review[]    findAll()
 * @method Review[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReviewRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Review::class);
    }

    public function save(Review $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Review $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @return Review[] Returns an array of approved Review objects for a specific product
     */
    public function findApprovedByProduct(Product $product): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.product = :product')
            ->andWhere('r.isApproved = :approved')
            ->setParameter('product', $product)
            ->setParameter('approved', true)
            ->orderBy('r.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Calculates the average rating for a product
     */
    public function calculateAverageRating(Product $product): float
    {
        $result = $this->createQueryBuilder('r')
            ->select('AVG(r.rating)')
            ->andWhere('r.product = :product')
            ->andWhere('r.isApproved = :approved')
            ->setParameter('product', $product)
            ->setParameter('approved', true)
            ->getQuery()
            ->getSingleScalarResult();
        
        return $result ? (float) $result : 0;
    }

    /**
     * Counts the number of reviews for a product
     */
    public function countReviews(Product $product): int
    {
        return (int) $this->createQueryBuilder('r')
            ->select('COUNT(r.id)')
            ->andWhere('r.product = :product')
            ->andWhere('r.isApproved = :approved')
            ->setParameter('product', $product)
            ->setParameter('approved', true)
            ->getQuery()
            ->getSingleScalarResult();
    }
    
    /**
     * Creates a query builder with search functionality for admin review list
     */
    public function createQueryBuilderWithSearch(?string $searchTerm = null)
    {
        $queryBuilder = $this->createQueryBuilder('r')
            ->leftJoin('r.product', 'p')
            ->leftJoin('r.user', 'u')
            ->orderBy('r.createdAt', 'DESC');
            
        if ($searchTerm) {
            $queryBuilder
                ->andWhere('p.name LIKE :search OR r.comment LIKE :search OR r.title LIKE :search OR u.email LIKE :search')
                ->setParameter('search', '%' . $searchTerm . '%');
        }
        
        return $queryBuilder;
    }
}