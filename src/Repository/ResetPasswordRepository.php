<?php

namespace App\Repository;

use App\Entity\ResetPassword;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ResetPassword>
 *
 * @method ResetPassword|null find($id, $lockMode = null, $lockVersion = null)
 * @method ResetPassword|null findOneBy(array $criteria, array $orderBy = null)
 * @method ResetPassword[]    findAll()
 * @method ResetPassword[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResetPasswordRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ResetPassword::class);
    }

    public function save(ResetPassword $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ResetPassword $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Recherche un token valide pour l'email donné
     */
    public function findValidToken(string $token): ?ResetPassword
    {
        $now = new \DateTimeImmutable();
        
        return $this->createQueryBuilder('r')
            ->where('r.token = :token')
            ->andWhere('r.expires_at > :now')
            ->andWhere('r.used_at IS NULL')
            ->setParameter('token', $token)
            ->setParameter('now', $now->format('Y-m-d H:i:s'))
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Invalide tous les tokens précédents pour un email
     */
    public function invalidateTokens(string $email): void
    {
        $this->createQueryBuilder('r')
            ->update()
            ->set('r.used_at', ':now')
            ->where('r.email = :email')
            ->andWhere('r.used_at IS NULL')
            ->setParameter('now', (new \DateTimeImmutable())->format('Y-m-d H:i:s'))
            ->setParameter('email', $email)
            ->getQuery()
            ->execute();
    }

    /**
     * Supprime les tokens expirés depuis plus de 1 jour
     */
    public function deleteExpiredTokens(): void
    {
        $expiryDate = new \DateTimeImmutable('-1 day');
        
        $this->createQueryBuilder('r')
            ->delete()
            ->where('r.expires_at < :expiry')
            ->setParameter('expiry', $expiryDate->format('Y-m-d H:i:s'))
            ->getQuery()
            ->execute();
    }
    
    /**
     * Trouve le token de réinitialisation le plus récent pour un email donné
     */
    public function findLatestTokenByEmail(string $email): ?ResetPassword
    {
        $now = new \DateTimeImmutable();
        
        return $this->createQueryBuilder('r')
            ->where('r.email = :email')
            ->andWhere('r.expires_at > :now')
            ->andWhere('r.used_at IS NULL')
            ->setParameter('email', $email)
            ->setParameter('now', $now->format('Y-m-d H:i:s'))
            ->orderBy('r.created_at', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }
}