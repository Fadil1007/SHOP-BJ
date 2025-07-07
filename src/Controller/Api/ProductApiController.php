<?php

namespace App\Controller\Api;

use App\Repository\ProductRepository;
use App\Service\CurrencyService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/products", name="api_products_")
 */
class ProductApiController extends AbstractController
{
    private $productRepository;
    private $currencyService;

    public function __construct(ProductRepository $productRepository, CurrencyService $currencyService)
    {
        $this->productRepository = $productRepository;
        $this->currencyService = $currencyService;
    }

    /**
     * @Route("/{id}", name="get_by_id", methods={"GET"})
     */
    public function getProduct(Request $request, int $id): JsonResponse
    {
        // Vérifier si la requête est une requête AJAX
        if (!$request->isXmlHttpRequest()) {
            return $this->json(['success' => false, 'message' => 'Méthode non autorisée'], 403);
        }

        $product = $this->productRepository->find($id);

        if (!$product) {
            return $this->json(['success' => false, 'message' => 'Produit non trouvé'], 404);
        }

        // Les prix sont maintenant stockés directement en FCFA
        $priceInFCFA = $product->getPrice();
        $formattedPrice = $this->currencyService->formatFcfa($priceInFCFA);

        // Construire la réponse avec les détails du produit
        $productData = [
            'id' => $product->getId(),
            'name' => $product->getName(),
            'price' => $product->getPrice(),
            'price_fcfa' => $priceInFCFA,
            'formatted_price' => $formattedPrice,
            'stock' => $product->getStock(),
            'sizes' => $product->getSizes(),
            'colors' => $product->getColors(),
            'image_url' => $product->getImageFilename() ? $request->getUriForPath($product->getImageFilename()) : null,
            'description' => $product->getDescription(),
            'category' => [
                'id' => $product->getCategory()->getId(),
                'name' => $product->getCategory()->getName()
            ]
        ];

        return $this->json([
            'success' => true,
            'product' => $productData
        ]);
    }
}