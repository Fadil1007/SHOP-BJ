<?php

namespace App\Repository;

use App\Entity\User;
use App\Entity\Product;
use App\Entity\Wishlist;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Wishlist>
 *
 * @method Wishlist|null find($id, $lockMode = null, $lockVersion = null)
 * @method Wishlist|null findOneBy(array $criteria, array $orderBy = null)
 * @method Wishlist[]    findAll()
 * @method Wishlist[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WishlistRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Wishlist::class);
    }

    /**
     * Trouve tous les éléments de la liste de souhaits d'un utilisateur
     * @param User $user
     * @return array
     */
    public function findByUser(User $user): array
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.user = :user')
            ->setParameter('user', $user)
            ->orderBy('w.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Vérifie si un produit est dans la liste de souhaits d'un utilisateur
     * @param User $user
     * @param Product $product
     * @return bool
     */
    public function isInWishlist(User $user, Product $product): bool
    {
        $result = $this->createQueryBuilder('w')
            ->andWhere('w.user = :user')
            ->andWhere('w.product = :product')
            ->setParameter('user', $user)
            ->setParameter('product', $product)
            ->getQuery()
            ->getOneOrNullResult();

        return $result !== null;
    }

    /**
     * Trouve un élément de liste de souhaits par utilisateur et produit
     * @param User $user
     * @param Product $product
     * @return Wishlist|null
     */
    public function findOneByUserAndProduct(User $user, Product $product): ?Wishlist
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.user = :user')
            ->andWhere('w.product = :product')
            ->setParameter('user', $user)
            ->setParameter('product', $product)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Compte le nombre d'éléments dans la liste de souhaits d'un utilisateur
     * @param User $user
     * @return int
     */
    public function countByUser(User $user): int
    {
        return $this->createQueryBuilder('w')
            ->select('COUNT(w.id)')
            ->andWhere('w.user = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getSingleScalarResult();
    }
    
    /**
     * Vérifie si un produit est dans la liste de souhaits de l'utilisateur en utilisant les identifiants
     * @param int $userId
     * @param int $productId
     * @return bool
     */
    public function isProductInWishlist(int $userId, int $productId): bool
    {
        $result = $this->createQueryBuilder('w')
            ->andWhere('w.user = :userId')
            ->andWhere('w.product = :productId')
            ->setParameter('userId', $userId)
            ->setParameter('productId', $productId)
            ->getQuery()
            ->getOneOrNullResult();
            
        return $result !== null;
    }
}