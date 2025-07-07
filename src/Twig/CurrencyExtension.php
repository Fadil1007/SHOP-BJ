<?php

namespace App\Twig;

use App\Service\CurrencyService;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

/**
 * Extension Twig pour les conversions de devise et formatage
 */
class CurrencyExtension extends AbstractExtension
{
    private CurrencyService $currencyService;
    
    public function __construct(CurrencyService $currencyService)
    {
        $this->currencyService = $currencyService;
    }
    
    /**
     * Définit les filtres disponibles
     */
    public function getFilters(): array
    {
        return [
            new TwigFilter('format_fcfa', [$this, 'formatFcfa']),
            new TwigFilter('euro_to_fcfa', [$this, 'euroToFcfa']),
        ];
    }
    
    /**
     * Définit les fonctions disponibles
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('currency_symbol', [$this, 'getCurrencySymbol']),
        ];
    }
    
    /**
     * Formate un prix en FCFA
     * @param ?float $amount Montant à formater (peut être null)
     */
    public function formatFcfa(?float $amount): string
    {
        if ($amount === null) {
            $amount = 0.0;
        }
        return $this->currencyService->formatFcfa($amount);
    }
    
    /**
     * Convertit un montant d'Euros en FCFA
     * @param ?float $amountInEuro Montant en euros (peut être null)
     */
    public function euroToFcfa(?float $amountInEuro): float
    {
        if ($amountInEuro === null) {
            return 0.0;
        }
        return $this->currencyService->euroToFcfa($amountInEuro);
    }
    
    /**
     * Renvoie le symbole de la devise
     */
    public function getCurrencySymbol(): string
    {
        return $this->currencyService->getCurrencySymbol();
    }
}