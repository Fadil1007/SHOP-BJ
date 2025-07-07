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

/* components/search_mobile.html.twig */
class __TwigTemplate_41c5db50afe396289ec468ac58aa592f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/search_mobile.html.twig"));

        // line 2
        yield "<div class=\"d-block d-md-none mb-3\">
    <form action=\"";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_search");
        yield "\" method=\"get\" class=\"d-flex justify-content-center\">
        <div class=\"input-group w-100\">
            <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Rechercher un produit...\" required minlength=\"2\">
            <button class=\"btn btn-dark\" type=\"submit\">
                <i class=\"fas fa-search\"></i>
            </button>
        </div>
    </form>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/search_mobile.html.twig";
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
        return array (  48 => 3,  45 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Barre de recherche spécifique pour mobile #}
<div class=\"d-block d-md-none mb-3\">
    <form action=\"{{ path('product_search') }}\" method=\"get\" class=\"d-flex justify-content-center\">
        <div class=\"input-group w-100\">
            <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Rechercher un produit...\" required minlength=\"2\">
            <button class=\"btn btn-dark\" type=\"submit\">
                <i class=\"fas fa-search\"></i>
            </button>
        </div>
    </form>
</div>
", "components/search_mobile.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/components/search_mobile.html.twig");
    }
}
