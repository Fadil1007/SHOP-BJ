<?php

namespace App\Repository;

use App\Entity\Contact;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Contact>
 *
 * @method Contact|null find($id, $lockMode = null, $lockVersion = null)
 * @method Contact|null findOneBy(array $criteria, array $orderBy = null)
 * @method Contact[]    findAll()
 * @method Contact[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContactRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Contact::class);
    }

    /**
     * Enregistre un nouveau message de contact dans la base de données
     */
    public function save(Contact $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Supprime un message de contact
     */
    public function remove(Contact $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Trouve tous les messages triés par date (récents d'abord)
     */
    public function findAllSorted(int $limit = null): array
    {
        try {
            $qb = $this->createQueryBuilder('c')
                ->orderBy('c.createdAt', 'DESC');
                
            if ($limit) {
                $qb->setMaxResults($limit);
            }
            
            return $qb->getQuery()->getResult();
        } catch (\Exception $e) {
            // En cas d'erreur, on retourne un tableau vide
            return [];
        }
    }

    /**
     * Compte le nombre de messages non lus
     */
    public function countUnread(): int
    {
        try {
            return $this->createQueryBuilder('c')
                ->select('COUNT(c.id)')
                ->where('c.read = :read')
                ->setParameter('read', false)
                ->getQuery()
                ->getSingleScalarResult();
        } catch (\Exception $e) {
            // En cas d'erreur, on retourne 0
            return 0;
        }
    }
}