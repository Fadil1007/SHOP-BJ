<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* emails/admin_order_notification.html.twig */
class __TwigTemplate_8a96f63a73dc9ceaf2cbb3636ad285cf extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Notification admin - Nouvelle commande</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #f48120;
            color: white;
            padding: 15px;
            text-align: center;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .logo {
            max-width: 120px;
            margin-bottom: 10px;
        }
        h1 {
            margin: 0;
            font-size: 24px;
        }
        .alert {
            background-color: #f5f5f5;
            border-left: 4px solid #f48120;
            padding: 15px;
            margin-bottom: 20px;
        }
        .order-details {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .order-items {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .order-items th, .order-items td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        .order-items th {
            background-color: #f48120;
            color: white;
        }
        .order-total {
            text-align: right;
            font-weight: bold;
            font-size: 18px;
            margin-top: 20px;
        }
        .customer-info {
            background-color: #f0f7fd;
            border: 1px solid #d0e3f0;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 14px;
            color: #777;
            border-top: 1px solid #ddd;
            padding-top: 20px;
        }
        .action-button {
            display: inline-block;
            background-color: #f48120;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <img src=\"https://myshopbj.com/uploads/logo/logo-shop-bj.svg\" alt=\"SHOP BJ Logo\" class=\"logo\" />
        <h1>Notification Administrateur</h1>
    </div>
    
    <div class=\"alert\">
        ";
        // line 99
        if ((array_key_exists("paymentValidated", $context) && ($context["paymentValidated"] ?? null))) {
            // line 100
            yield "        <strong>Détails d'une commande payée</strong>
        <p>Voici les détails complets d'une commande dont le paiement a été validé sur SHOP BJ.</p>
        ";
        } else {
            // line 103
            yield "        <strong>Nouvelle commande reçue</strong>
        <p>Une nouvelle commande a été créée sur SHOP BJ.</p>
        ";
        }
        // line 106
        yield "    </div>
    
    <div class=\"order-details\">
        <h2>Détails de la commande #";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 109), "html", null, true);
        yield "</h2>
        <p><strong>Date de création :</strong> ";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "createdAt", [], "any", false, false, false, 110), "d/m/Y H:i"), "html", null, true);
        yield "</p>
        <p><strong>Statut :</strong> ";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 111), "html", null, true);
        yield "</p>
        <p><strong>Méthode de paiement :</strong> ";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentMethod", [], "any", false, false, false, 112), "html", null, true);
        yield "</p>
        <p><strong>Statut du paiement :</strong> ";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentStatus", [], "any", false, false, false, 113), "html", null, true);
        yield "</p>
        ";
        // line 114
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "transactionId", [], "any", false, false, false, 114)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 115
            yield "        <p><strong>Numéro de transaction :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "transactionId", [], "any", false, false, false, 115), "html", null, true);
            yield "</p>
        ";
        }
        // line 117
        yield "    </div>
    
    <div class=\"customer-info\">
        <h3>Informations client</h3>
        <p><strong>Nom :</strong> ";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "fullName", [], "any", false, false, false, 121), "html", null, true);
        yield "</p>
        <p><strong>Email :</strong> ";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "email", [], "any", false, false, false, 122), "html", null, true);
        yield "</p>
        <p><strong>Téléphone :</strong> ";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "phone", [], "any", false, false, false, 123), "html", null, true);
        yield "</p>
        <p><strong>Ville :</strong> ";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "city", [], "any", false, false, false, 124), "html", null, true);
        yield "</p>
        <p><strong>Pays :</strong> ";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "country", [], "any", false, false, false, 125), "html", null, true);
        yield "</p>
    </div>
    
    <h3>Articles commandés</h3>
    
    <table class=\"order-items\">
        <thead>
            <tr>
                <th>Produit</th>
                <th>Quantité</th>
                <th>Prix unitaire</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "orderItems", [], "any", false, false, false, 140));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 141
            yield "            <tr>
                <td>
                    ";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 143), "name", [], "any", false, false, false, 143), "html", null, true);
            yield "
                    ";
            // line 144
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 144)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 145
                yield "                    <br><small>Taille: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 145), "html", null, true);
                yield "</small>
                    ";
            }
            // line 147
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 147)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 148
                yield "                    <br><small>Couleur: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 148), "html", null, true);
                yield "</small>
                    ";
            }
            // line 150
            yield "                </td>
                <td>";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 151), "html", null, true);
            yield "</td>
                <td>";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 152), 0, ",", " "), "html", null, true);
            yield " FCFA</td>
                <td>";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 153) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 153)), 0, ",", " "), "html", null, true);
            yield " FCFA</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        yield "        </tbody>
    </table>
    
    <div class=\"order-total\">
        Total : ";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 160), 0, ",", " "), "html", null, true);
        yield " FCFA
    </div>
    
    <center>
        <a href=\"https://myshopbj.com/admin/orders/";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 164), "html", null, true);
        yield "\" class=\"action-button\">Voir la commande dans le tableau de bord</a>
    </center>
    
    <div class=\"footer\">
        <p>Cet email est généré automatiquement, merci de ne pas y répondre.</p>
        <p>&copy; ";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " SHOP BJ Admin. Tous droits réservés.</p>
    </div>
</body>
</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "emails/admin_order_notification.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  297 => 169,  289 => 164,  282 => 160,  276 => 156,  267 => 153,  263 => 152,  259 => 151,  256 => 150,  250 => 148,  247 => 147,  241 => 145,  239 => 144,  235 => 143,  231 => 141,  227 => 140,  209 => 125,  205 => 124,  201 => 123,  197 => 122,  193 => 121,  187 => 117,  181 => 115,  179 => 114,  175 => 113,  171 => 112,  167 => 111,  163 => 110,  159 => 109,  154 => 106,  149 => 103,  144 => 100,  142 => 99,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "emails/admin_order_notification.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/emails/admin_order_notification.html.twig");
    }
}
