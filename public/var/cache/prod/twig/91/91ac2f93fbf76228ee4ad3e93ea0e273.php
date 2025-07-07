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

/* emails/base_email.html.twig */
class __TwigTemplate_54919edb0b6d92bb6676a770c2e35a37 extends Template
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
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            padding: 20px 0;
            border-bottom: 1px solid #eee;
        }
        .logo {
            max-width: 180px;
            height: auto;
        }
        .content {
            padding: 20px 0;
        }
        .footer {
            font-size: 12px;
            color: #888;
            text-align: center;
            padding: 20px 0;
            border-top: 1px solid #eee;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #FF6B6B;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
        }
        .button:hover {
            background-color: #E05252;
        }
        h1, h2, h3 {
            color: #FF6B6B;
        }
        a {
            color: #FF6B6B;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"header\">
            <h1 style=\"color: #FF6B6B; font-size: 28px; margin: 10px 0; font-weight: bold; font-family: Arial, sans-serif; text-align: center; letter-spacing: 2px;\">SHOP BJ</h1>
        </div>

        <div class=\"content\">
            ";
        // line 70
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 71
        yield "        </div>

        <div class=\"footer\">
            ";
        // line 74
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 84
        yield "        </div>
    </div>
</body>
</html>";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Email de SHOP BJ";
        yield from [];
    }

    // line 70
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 74
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 75
        yield "            <p>
                © ";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " SHOP BJ. Tous droits réservés.
            </p>
            <p>
                <a href=\"https://myshopbj.com/\">Visiter le site</a> | 
                <a href=\"https://myshopbj.com/legal/terms\">Mentions légales</a> | 
                <a href=\"https://myshopbj.com/legal/privacy\">Politique de confidentialité</a>
            </p>
            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "emails/base_email.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  167 => 76,  164 => 75,  157 => 74,  147 => 70,  136 => 6,  128 => 84,  126 => 74,  121 => 71,  119 => 70,  52 => 6,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "emails/base_email.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/emails/base_email.html.twig");
    }
}
