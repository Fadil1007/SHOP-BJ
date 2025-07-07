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

/* emails/contact.html.twig */
class __TwigTemplate_24c2f7c022898a65025ef038611e946d extends Template
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
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #FF6B6B;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 0 0 5px 5px;
            border: 1px solid #ddd;
            border-top: none;
        }
        .info-label {
            font-weight: bold;
            color: #555;
        }
        .message-content {
            background-color: #fff;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #eee;
            margin-top: 15px;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #777;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>Nouveau message de contact</h1>
    </div>
    
    <div class=\"content\">
        <p>Un nouveau message a été envoyé depuis le formulaire de contact du site SHOP BJ.</p>
        
        <p><span class=\"info-label\">Date :</span> ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["date"] ?? null), "d/m/Y à H:i"), "html", null, true);
        yield "</p>
        <p><span class=\"info-label\">De :</span> ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nom"] ?? null), "html", null, true);
        yield "</p>
        <p><span class=\"info-label\">Email :</span> ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["email"] ?? null), "html", null, true);
        yield "</p>
        <p><span class=\"info-label\">Sujet :</span> ";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sujet"] ?? null), "html", null, true);
        yield "</p>
        
        <div class=\"message-content\">
            <p><span class=\"info-label\">Message :</span></p>
            <p>";
        // line 64
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["message"] ?? null), "html", null, true));
        yield "</p>
        </div>
        
        <p>Vous pouvez répondre directement à cet email pour contacter l'expéditeur.</p>
    </div>
    
    <div class=\"footer\">
        <p>Cet email a été envoyé automatiquement depuis le site SHOP BJ.</p>
        <p><strong>Astuce :</strong> Vous pouvez répondre directement à cet email, votre réponse sera envoyée à l'expéditeur du message.</p>
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
        return "emails/contact.html.twig";
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
        return array (  119 => 64,  112 => 60,  108 => 59,  104 => 58,  100 => 57,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "emails/contact.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/emails/contact.html.twig");
    }
}
