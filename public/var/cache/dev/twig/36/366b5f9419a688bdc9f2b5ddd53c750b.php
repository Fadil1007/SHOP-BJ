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

/* search_bar.html.twig */
class __TwigTemplate_f763f0d73e14573c482e18b9e4819f96 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search_bar.html.twig"));

        // line 2
        yield "<div class=\"global-search-bar\">
    <div class=\"container\">
        <form action=\"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_search");
        yield "\" method=\"get\" class=\"d-flex justify-content-center\">
            <div class=\"input-group search-input-container\">
                <input type=\"text\" name=\"q\" class=\"form-control form-control-lg search-input\" placeholder=\"Rechercher un produit...\" required minlength=\"2\">
                <button class=\"btn btn-primary btn-lg search-button\" type=\"submit\">
                    <i class=\"fas fa-search\"></i> <span class=\"d-none d-md-inline\">Rechercher</span>
                </button>
            </div>
        </form>
    </div>
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
        return "search_bar.html.twig";
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
        return array (  49 => 4,  45 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Barre de recherche globale avec fond transparent #}
<div class=\"global-search-bar\">
    <div class=\"container\">
        <form action=\"{{ path('product_search') }}\" method=\"get\" class=\"d-flex justify-content-center\">
            <div class=\"input-group search-input-container\">
                <input type=\"text\" name=\"q\" class=\"form-control form-control-lg search-input\" placeholder=\"Rechercher un produit...\" required minlength=\"2\">
                <button class=\"btn btn-primary btn-lg search-button\" type=\"submit\">
                    <i class=\"fas fa-search\"></i> <span class=\"d-none d-md-inline\">Rechercher</span>
                </button>
            </div>
        </form>
    </div>
</div>
", "search_bar.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/search_bar.html.twig");
    }
}
