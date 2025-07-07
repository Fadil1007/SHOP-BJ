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

/* emails/admin_payment_notification.html.twig */
class __TwigTemplate_5bbdb714bd37c0f1146cce6bc9934939 extends Template
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
    <title>Notification admin - Paiement confirmé</title>
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
            background-color: #4CAF50;
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
            background-color: #e6f7e6;
            border-left: 4px solid #4CAF50;
            padding: 15px;
            margin-bottom: 20px;
        }
        .payment-details {
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
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 15px;
            font-weight: bold;
        }
        .payment-success-icon {
            font-size: 48px;
            color: #4CAF50;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <img src=\"https://myshopbj.com/uploads/logo/logo-shop-bj.svg\" alt=\"SHOP BJ Logo\" class=\"logo\" />
        <h1>Notification Administrateur</h1>
    </div>
    
    <div class=\"alert\">
        <div class=\"payment-success-icon\">✓</div>
        <strong>Paiement confirmé</strong>
        <p>Un paiement a été reçu pour la commande #";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 107), "html", null, true);
        yield "</p>
    </div>
    
    <div class=\"payment-details\">
        <h2>Détails du paiement</h2>
        <p><strong>Commande ID :</strong> #";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 112), "html", null, true);
        yield "</p>
        <p><strong>Date de création :</strong> ";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "createdAt", [], "any", false, false, false, 113), "d/m/Y H:i"), "html", null, true);
        yield "</p>
        <p><strong>Méthode de paiement :</strong> ";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentMethod", [], "any", false, false, false, 114), "html", null, true);
        yield "</p>
        <p><strong>Statut du paiement :</strong> ";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentStatus", [], "any", false, false, false, 115), "html", null, true);
        yield "</p>
        <p><strong>Montant payé :</strong> ";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 116), 0, ",", " "), "html", null, true);
        yield " FCFA</p>
        ";
        // line 117
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "transactionId", [], "any", false, false, false, 117)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 118
            yield "        <p><strong>Numéro de transaction :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "transactionId", [], "any", false, false, false, 118), "html", null, true);
            yield "</p>
        ";
        }
        // line 120
        yield "    </div>
    
    <div class=\"customer-info\">
        <h3>Informations client</h3>
        <p><strong>Nom :</strong> ";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "fullName", [], "any", false, false, false, 124), "html", null, true);
        yield "</p>
        <p><strong>Email :</strong> ";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "email", [], "any", false, false, false, 125), "html", null, true);
        yield "</p>
        <p><strong>Téléphone :</strong> ";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "phone", [], "any", false, false, false, 126), "html", null, true);
        yield "</p>
        <p><strong>Ville :</strong> ";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "city", [], "any", false, false, false, 127), "html", null, true);
        yield "</p>
        <p><strong>Pays :</strong> ";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "country", [], "any", false, false, false, 128), "html", null, true);
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
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "orderItems", [], "any", false, false, false, 143));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 144
            yield "            <tr>
                <td>
                    ";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 146), "name", [], "any", false, false, false, 146), "html", null, true);
            yield "
                    ";
            // line 147
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 147)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 148
                yield "                    <br><small>Taille: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 148), "html", null, true);
                yield "</small>
                    ";
            }
            // line 150
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 150)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 151
                yield "                    <br><small>Couleur: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 151), "html", null, true);
                yield "</small>
                    ";
            }
            // line 153
            yield "                </td>
                <td>";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 154), "html", null, true);
            yield "</td>
                <td>";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 155), 0, ",", " "), "html", null, true);
            yield " FCFA</td>
                <td>";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 156) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 156)), 0, ",", " "), "html", null, true);
            yield " FCFA</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        yield "        </tbody>
    </table>
    
    <div class=\"order-total\">
        Total : ";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 163), 0, ",", " "), "html", null, true);
        yield " FCFA
    </div>
    
    <center>
        <a href=\"https://myshopbj.com/admin/orders/";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 167), "html", null, true);
        yield "\" class=\"action-button\">Traiter la commande</a>
    </center>
    
    <div class=\"footer\">
        <p>Cet email est généré automatiquement, merci de ne pas y répondre.</p>
        <p>&copy; ";
        // line 172
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
        return "emails/admin_payment_notification.html.twig";
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
        return array (  296 => 172,  288 => 167,  281 => 163,  275 => 159,  266 => 156,  262 => 155,  258 => 154,  255 => 153,  249 => 151,  246 => 150,  240 => 148,  238 => 147,  234 => 146,  230 => 144,  226 => 143,  208 => 128,  204 => 127,  200 => 126,  196 => 125,  192 => 124,  186 => 120,  180 => 118,  178 => 117,  174 => 116,  170 => 115,  166 => 114,  162 => 113,  158 => 112,  150 => 107,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "emails/admin_payment_notification.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/emails/admin_payment_notification.html.twig");
    }
}
