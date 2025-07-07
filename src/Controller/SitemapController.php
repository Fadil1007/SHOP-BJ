<?php

namespace App\Controller;

use Presta\SitemapBundle\Service\SitemapGeneratorInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SitemapController
{
    #[Route('/sitemap.xml', name: 'sitemap', defaults: ['_format' => 'xml'])]
    public function index(SitemapGeneratorInterface $sitemapGenerator): Response
    {
        $sitemap = $sitemapGenerator->generate();
        return new Response($sitemap->toXml(), 200, ['Content-Type' => 'application/xml']);
    }
}
