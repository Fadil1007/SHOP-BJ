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

/* emails/order_confirmation.html.twig */
class __TwigTemplate_4eb3ae9fbce63e4eadedef08b7835989 extends Template
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
    <title>Confirmation de commande - SHOP BJ</title>
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
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #f48120;
            padding-bottom: 20px;
        }
        .logo {
            max-width: 150px;
        }
        h1 {
            color: #f48120;
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
        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 14px;
            color: #777;
            border-top: 1px solid #ddd;
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <img src=\"https://myshopbj.com/uploads/logo/logo-shop-bj.svg\" alt=\"SHOP BJ Logo\" class=\"logo\" />
        <h1>";
        // line 68
        if ((array_key_exists("paymentValidated", $context) && ($context["paymentValidated"] ?? null))) {
            yield "Détails de votre commande (Paiement validé)";
        } else {
            yield "Confirmation de commande";
        }
        yield "</h1>
    </div>
    
    <p>Bonjour ";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "fullName", [], "any", false, false, false, 71), "html", null, true);
        yield ",</p>
    
    ";
        // line 73
        if ((array_key_exists("paymentValidated", $context) && ($context["paymentValidated"] ?? null))) {
            // line 74
            yield "    <p>Nous vous remercions pour votre commande sur SHOP BJ dont le paiement a été validé. Voici les détails complets de votre commande :</p>
    ";
        } else {
            // line 76
            yield "    <p>Nous vous remercions pour votre commande sur SHOP BJ. Voici le récapitulatif de votre commande :</p>
    ";
        }
        // line 78
        yield "    
    <div class=\"order-details\">
        <p><strong>Numéro de commande :</strong> #";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 80), "html", null, true);
        yield "</p>
        <p><strong>Date :</strong> ";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "createdAt", [], "any", false, false, false, 81), "d/m/Y H:i"), "html", null, true);
        yield "</p>
        <p><strong>Statut :</strong> ";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 82), "html", null, true);
        yield "</p>
        <p><strong>Mode de paiement :</strong> ";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentMethod", [], "any", false, false, false, 83), "html", null, true);
        yield "</p>
        ";
        // line 84
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "transactionId", [], "any", false, false, false, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 85
            yield "        <p><strong>Numéro de transaction :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "transactionId", [], "any", false, false, false, 85), "html", null, true);
            yield "</p>
        ";
        }
        // line 87
        yield "    </div>
    
    <h2>Articles commandés</h2>
    
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
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "orderItems", [], "any", false, false, false, 101));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 102
            yield "            <tr>
                <td>
                    ";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 104), "name", [], "any", false, false, false, 104), "html", null, true);
            yield "
                    ";
            // line 105
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 105)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 106
                yield "                    <br><small>Taille: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 106), "html", null, true);
                yield "</small>
                    ";
            }
            // line 108
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 109
                yield "                    <br><small>Couleur: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 109), "html", null, true);
                yield "</small>
                    ";
            }
            // line 111
            yield "                </td>
                <td>";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 112), "html", null, true);
            yield "</td>
                <td>";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 113), 0, ",", " "), "html", null, true);
            yield " FCFA</td>
                <td>";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 114) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 114)), 0, ",", " "), "html", null, true);
            yield " FCFA</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        yield "        </tbody>
    </table>
    
    <div class=\"order-total\">
        Total : ";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 121), 0, ",", " "), "html", null, true);
        yield " FCFA
    </div>
    
    <p>Nous vous contacterons prochainement pour vous informer sur la préparation et l'expédition de votre commande.</p>
    
    <p>Pour suivre l'état de votre commande, vous pouvez vous connecter à votre compte sur <a href=\"https://myshopbj.com\">myshopbj.com</a>.</p>
    
    <p>Si vous avez des questions concernant votre commande, n'hésitez pas à nous contacter à <a href=\"mailto:shopbj04@gmail.com\">shopbj04@gmail.com</a>.</p>
    
    <p>Merci de votre confiance,<br>
    L'équipe SHOP BJ</p>
    
    <div class=\"footer\">
        <p>&copy; ";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " SHOP BJ. Tous droits réservés.</p>
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
        return "emails/order_confirmation.html.twig";
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
        return array (  251 => 134,  235 => 121,  229 => 117,  220 => 114,  216 => 113,  212 => 112,  209 => 111,  203 => 109,  200 => 108,  194 => 106,  192 => 105,  188 => 104,  184 => 102,  180 => 101,  164 => 87,  158 => 85,  156 => 84,  152 => 83,  148 => 82,  144 => 81,  140 => 80,  136 => 78,  132 => 76,  128 => 74,  126 => 73,  121 => 71,  111 => 68,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "emails/order_confirmation.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/emails/order_confirmation.html.twig");
    }
}
