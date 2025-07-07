<?php

namespace App\Repository;

use App\Entity\SiteConfig;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SiteConfig>
 */
class SiteConfigRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SiteConfig::class);
    }

    /**
     * Get a configuration value by its name
     */
    public function getConfigValue(string $name): ?string
    {
        $config = $this->findOneBy(['name' => $name]);
        
        return $config ? $config->getValue() : null;
    }

    /**
     * Set a configuration value
     */
    public function setConfigValue(string $name, ?string $value): void
    {
        $entityManager = $this->getEntityManager();
        $config = $this->findOneBy(['name' => $name]);
        
        if (!$config) {
            $config = new SiteConfig();
            $config->setName($name);
        }
        
        $config->setValue($value);
        $entityManager->persist($config);
        $entityManager->flush();
    }

    /**
     * Check if maintenance mode is enabled
     */
    public function isMaintenanceMode(): bool
    {
        return $this->getConfigValue('maintenance_mode') === 'true';
    }
}