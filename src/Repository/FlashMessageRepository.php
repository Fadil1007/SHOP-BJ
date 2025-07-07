<?php

namespace App\Repository;

use App\Entity\FlashMessage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FlashMessage>
 */
class FlashMessageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FlashMessage::class);
    }

    public function save(FlashMessage $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(FlashMessage $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Récupère les messages flash actifs pour une page donnée
     *
     * @param string|null $targetPage
     * @return FlashMessage[]
     */
    public function findActiveMessages(?string $targetPage = null): array
    {
        $qb = $this->createQueryBuilder('f')
            ->where('f.isActive = :active')
            ->setParameter('active', true)
            ->orderBy('f.createdAt', 'DESC');

        if ($targetPage && $targetPage !== 'all') {
            $qb->andWhere('f.targetPages = :targetPage OR f.targetPages = :all')
               ->setParameter('targetPage', $targetPage)
               ->setParameter('all', 'all');
        } else {
            $qb->andWhere('f.targetPages = :all')
               ->setParameter('all', 'all');
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Trouve tous les messages flash actifs (admin)
     *
     * @return FlashMessage[]
     */
    public function findAllActive(): array
    {
        return $this->createQueryBuilder('f')
            ->where('f.isActive = :active')
            ->setParameter('active', true)
            ->orderBy('f.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }
}
