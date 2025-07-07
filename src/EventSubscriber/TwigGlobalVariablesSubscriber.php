<?php

namespace App\EventSubscriber;

use App\Form\ProductSearchType;
use App\Repository\CategoryRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Twig\Environment;

class TwigGlobalVariablesSubscriber implements EventSubscriberInterface
{
    private $twig;
    private $categoryRepository;
    private $formFactory;

    public function __construct(
        Environment $twig,
        CategoryRepository $categoryRepository,
        FormFactoryInterface $formFactory
    ) {
        $this->twig = $twig;
        $this->categoryRepository = $categoryRepository;
        $this->formFactory = $formFactory;
    }

    public function onKernelController(ControllerEvent $event): void
    {
        if (!$event->isMainRequest()) {
            return;
        }

        try {
            // Add site name to Twig globals
            $siteName = $_ENV['SITE_NAME'] ?? 'SHOP BJ';
            $this->twig->addGlobal('site_name', $siteName);
            
            // Add categories to Twig globals
            $categories = $this->categoryRepository->findAll();
            $this->twig->addGlobal('categories', $categories);
            
            // Ajoute les catégories principales et secondaires
            $featuredCategories = $this->categoryRepository->findBy(['featured' => true]);
            $otherCategories = $this->categoryRepository->findBy(['featured' => false]);
            $this->twig->addGlobal('featuredCategories', $featuredCategories);
            $this->twig->addGlobal('otherCategories', $otherCategories);

            // Create and add search form to Twig globals
            $searchForm = $this->formFactory->create(ProductSearchType::class);
            $this->twig->addGlobal('search_form', $searchForm->createView());
        } catch (\Exception $e) {
            // Log or handle the exception silently - don't want to break the page if 
            // one of these fails
        }
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::CONTROLLER => 'onKernelController',
        ];
    }
}