<?php

namespace App\Command;

use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:generate-category-slugs',
    description: 'Génère des slugs pour toutes les catégories qui n\'en ont pas.',
)]
class GenerateCategorySlugsCommand extends Command
{
    private CategoryRepository $categoryRepository;
    private EntityManagerInterface $entityManager;

    public function __construct(CategoryRepository $categoryRepository, EntityManagerInterface $entityManager)
    {
        $this->categoryRepository = $categoryRepository;
        $this->entityManager = $entityManager;

        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        
        $categories = $this->categoryRepository->findAll();
        $updatedCount = 0;
        
        foreach ($categories as $category) {
            if (!$category->getSlug()) {
                $category->setSlugFromName();
                $updatedCount++;
                $io->text(sprintf('Ajout du slug "%s" pour la catégorie "%s"', $category->getSlug(), $category->getName()));
            }
        }
        
        if ($updatedCount > 0) {
            $this->entityManager->flush();
            $io->success(sprintf('%d catégorie(s) mise(s) à jour avec des slugs.', $updatedCount));
        } else {
            $io->info('Toutes les catégories ont déjà des slugs.');
        }
        
        return Command::SUCCESS;
    }
}