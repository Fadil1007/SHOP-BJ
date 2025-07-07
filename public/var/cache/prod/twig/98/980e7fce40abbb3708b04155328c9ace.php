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

/* emails/payment_confirmation.html.twig */
class __TwigTemplate_f559164227043ef55b8f7eb86d6ba049 extends Template
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
    <title>Confirmation de paiement - SHOP BJ</title>
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
        .payment-success {
            background-color: #e6f7e6;
            border: 1px solid #c3e6c3;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }
        .payment-success .icon {
            color: #5cb85c;
            font-size: 48px;
            margin-bottom: 10px;
        }
        .order-details {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .order-total {
            text-align: right;
            font-weight: bold;
            font-size: 18px;
            margin-top: 20px;
        }
        .next-steps {
            background-color: #f0f7fd;
            border: 1px solid #d0e3f0;
            padding: 20px;
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
    </style>
</head>
<body>
    <div class=\"header\">
        <img src=\"https://myshopbj.com/uploads/logo/logo-shop-bj.svg\" alt=\"SHOP BJ Logo\" class=\"logo\" />
        <h1>Confirmation de paiement</h1>
    </div>
    
    <div class=\"payment-success\">
        <div class=\"icon\">✓</div>
        <h2>Paiement réussi !</h2>
        <p>Nous avons bien reçu votre paiement pour la commande #";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 80), "html", null, true);
        yield "</p>
    </div>
    
    <p>Cher(e) ";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "fullName", [], "any", false, false, false, 83), "html", null, true);
        yield ",</p>
    
    <p>Nous vous confirmons que votre paiement de <strong>";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 85), 0, ",", " "), "html", null, true);
        yield " FCFA</strong> a été traité avec succès.</p>
    
    <div class=\"order-details\">
        <p><strong>Numéro de commande :</strong> #";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 88), "html", null, true);
        yield "</p>
        <p><strong>Date :</strong> ";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "createdAt", [], "any", false, false, false, 89), "d/m/Y H:i"), "html", null, true);
        yield "</p>
        <p><strong>Mode de paiement :</strong> ";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentMethod", [], "any", false, false, false, 90), "html", null, true);
        yield "</p>
        ";
        // line 91
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "transactionId", [], "any", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 92
            yield "        <p><strong>Numéro de transaction :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "transactionId", [], "any", false, false, false, 92), "html", null, true);
            yield "</p>
        ";
        }
        // line 94
        yield "        <p><strong>Total payé :</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 94), 0, ",", " "), "html", null, true);
        yield " FCFA</p>
    </div>
    
    <div class=\"next-steps\">
        <h3>Prochaines étapes</h3>
        <ol>
            <li>Votre commande est en cours de préparation.</li>
            <li>Vous recevrez une notification lorsque votre commande sera prête à être expédiée.</li>
            <li>Nous vous informerons par e-mail dès que votre commande sera en cours de livraison.</li>
        </ol>
    </div>
    
    <p>Pour toute question concernant votre commande, vous pouvez consulter votre historique de commandes sur votre compte ou nous contacter à <a href=\"mailto:shopbj04@gmail.com\">shopbj04@gmail.com</a>.</p>
    
    <p>Merci pour votre achat et votre confiance,<br>
    L'équipe SHOP BJ</p>
    
    <div class=\"footer\">
        <p>&copy; ";
        // line 112
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
        return "emails/payment_confirmation.html.twig";
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
        return array (  182 => 112,  160 => 94,  154 => 92,  152 => 91,  148 => 90,  144 => 89,  140 => 88,  134 => 85,  129 => 83,  123 => 80,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "emails/payment_confirmation.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/emails/payment_confirmation.html.twig");
    }
}
