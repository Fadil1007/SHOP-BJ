<?php

namespace App\Repository;

use App\Entity\CartItem;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CartItem>
 *
 * @method CartItem|null find($id, $lockMode = null, $lockVersion = null)
 * @method CartItem|null findOneBy(array $criteria, array $orderBy = null)
 * @method CartItem[]    findAll()
 * @method CartItem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CartItemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CartItem::class);
    }

    public function save(CartItem $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CartItem $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @return CartItem[] Returns an array of CartItem objects for a specific user
     */
    public function findByUser(User $user): array
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.user = :user')
            ->setParameter('user', $user)
            ->orderBy('c.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Calculates the total number of items in a user's cart
     */
    public function countItemsInCart(User $user): int
    {
        return (int) $this->createQueryBuilder('c')
            ->select('SUM(c.quantity)')
            ->andWhere('c.user = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getSingleScalarResult() ?: 0;
    }

    /**
     * Calculates the total price of all items in a user's cart
     */
    public function calculateCartTotal(User $user): float
    {
        return (float) $this->createQueryBuilder('c')
            ->select('SUM(c.quantity * p.price)')
            ->join('c.product', 'p')
            ->andWhere('c.user = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getSingleScalarResult() ?: 0;
    }

    /**
     * Finds a cart item by product and user
     */
    public function findOneByProductAndUser($product, $user): ?CartItem
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.product = :product')
            ->andWhere('c.user = :user')
            ->setParameter('product', $product)
            ->setParameter('user', $user)
            ->getQuery()
            ->getOneOrNullResult();
    }
}