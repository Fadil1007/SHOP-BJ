<?php

namespace App\Service;

/**
 * Service de gestion des devises et conversions
 */
class CurrencyService
{
    // Taux de conversion fixe entre Euro et FCFA (1 Euro = 655.957 FCFA)
    const EURO_TO_FCFA_RATE = 655.957;
    
    /**
     * Convertit un montant d'Euros en FCFA
     * @param ?float $amountInEuro Montant en euros (peut être null)
     */
    public function euroToFcfa(?float $amountInEuro): float
    {
        if ($amountInEuro === null) {
            return 0.0;
        }
        return round($amountInEuro * self::EURO_TO_FCFA_RATE);
    }
    
    /**
     * Convertit un montant de FCFA en Euros
     * @param ?float $amountInFcfa Montant en FCFA (peut être null)
     */
    public function fcfaToEuro(?float $amountInFcfa): float
    {
        if ($amountInFcfa === null) {
            return 0.0;
        }
        return round($amountInFcfa / self::EURO_TO_FCFA_RATE, 2);
    }
    
    /**
     * Formate un prix en FCFA pour l'affichage
     * @param ?float $amount Montant à formater (peut être null)
     */
    public function formatFcfa(?float $amount): string
    {
        if ($amount === null) {
            $amount = 0.0;
        }
        return number_format($amount, 0, ',', ' ') . ' FCFA';
    }
    
    /**
     * Détermine si un montant en FCFA est à convertir ou non pour Stripe
     * (Stripe utilise les devises principales comme EUR, USD, etc.)
     */
    public function shouldConvertForStripe(): bool
    {
        // Stripe n'accepte pas directement le FCFA, donc on doit convertir
        return true;
    }
    
    /**
     * Obtient le symbole de la devise
     */
    public function getCurrencySymbol(): string
    {
        return 'FCFA';
    }
}