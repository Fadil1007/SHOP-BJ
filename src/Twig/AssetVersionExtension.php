<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AssetVersionExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('versioned_asset', [$this, 'getVersionedAsset']),
            new TwigFunction('normalize_asset_path', [$this, 'normalizeAssetPath']),
            new TwigFunction('category_image', [$this, 'getCategoryImage']),
        ];
    }

    public function getVersionedAsset(string $path): string
    {
        // Ajoute un paramètre de version (timestamp actuel) à l'URL pour éviter les problèmes de cache
        return $path . '?v=' . time();
    }
    
    public function normalizeAssetPath(?string $path): string
    {
        if (!$path) {
            return 'images/placeholder-category.jpg';
        }
        
        // Si le chemin commence par un slash, on le supprime pour asset()
        if (strpos($path, '/') === 0) {
            return substr($path, 1);
        }
        
        return $path;
    }
    
    /**
     * Convertit un chemin d'image pour le rendre toujours accessible
     * Utilise le chemin d'image stocké en base de données
     */
    public function getCategoryImage(?string $categoryName, ?string $imagePath): string
    {
        // Chemin par défaut
        $defaultPath = 'images/placeholder-category.jpg';
        
        if (!$imagePath) {
            return $defaultPath;
        }
        
        // Normaliser le chemin
        if (strpos($imagePath, '/') === 0) {
            return substr($imagePath, 1);
        }
        
        return $imagePath;
    }
}