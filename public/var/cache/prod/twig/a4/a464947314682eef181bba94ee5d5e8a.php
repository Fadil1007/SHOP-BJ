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

/* emails/new_contact_notification.html.twig */
class __TwigTemplate_01104a7dea1d7ce5638f5741f7b74ed6 extends Template
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
    <title>Nouveau message de contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #F58C1E;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            padding: 20px;
        }
        .notification-icon {
            font-size: 48px;
            text-align: center;
            margin: 10px 0;
        }
        .message-details {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
            border-left: 4px solid #F58C1E;
        }
        .detail-row {
            margin-bottom: 10px;
        }
        .detail-label {
            font-weight: bold;
            display: inline-block;
            width: 100px;
        }
        .message-content {
            white-space: pre-wrap;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 5px;
            margin: 15px 0;
        }
        .button {
            display: inline-block;
            padding: 12px 25px;
            background-color: #F58C1E;
            color: white;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            margin-top: 15px;
            text-align: center;
        }
        .button:hover {
            background-color: #f57f00;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            color: #777;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"header\">
            <h1>Nouveau Message de Contact</h1>
        </div>
        <div class=\"content\">
            <div class=\"notification-icon\">
                💬
            </div>
            
            <p>Bonjour,</p>
            
            <p>Vous avez reçu un nouveau message de contact sur <b>SHOP BJ</b>.</p>
            
            <div class=\"message-details\">
                <div class=\"detail-row\">
                    <span class=\"detail-label\">De:</span> 
                    <span>";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nom"] ?? null), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["email"] ?? null), "html", null, true);
        yield ")</span>
                </div>
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Sujet:</span> 
                    <span>";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sujet"] ?? null), "html", null, true);
        yield "</span>
                </div>
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Date:</span> 
                    <span>";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["date"] ?? null), "d/m/Y H:i"), "html", null, true);
        yield "</span>
                </div>
            </div>
            
            <h3>Message:</h3>
            <div class=\"message-content\">
                ";
        // line 116
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["message"] ?? null), "html", null, true));
        yield "
            </div>
            
            <p>Consultez le panneau d'administration pour gérer ce message et y répondre.</p>
            
            <div style=\"text-align: center;\">
                <a href=\"";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["adminUrl"] ?? null), "html", null, true);
        yield "\" class=\"button\">Accéder à l'administration</a>
            </div>
        </div>
        
        <div class=\"footer\">
            <p>Cet email a été envoyé automatiquement par le système de notification de SHOP BJ.</p>
            <p>© ";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " SHOP BJ. Tous droits réservés.</p>
        </div>
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
        return "emails/new_contact_notification.html.twig";
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
        return array (  188 => 128,  179 => 122,  170 => 116,  161 => 110,  154 => 106,  145 => 102,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "emails/new_contact_notification.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/emails/new_contact_notification.html.twig");
    }
}
