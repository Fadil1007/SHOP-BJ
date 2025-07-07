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

/* category/list.html.twig */
class __TwigTemplate_fa921e99541ae83a6d1b65cda595977c extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/list.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Nos Catégories - SHOP BJ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "<div class=\"container my-5\">
    ";
        // line 9
        yield "    <nav aria-label=\"breadcrumb\" class=\"mb-4\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Catégories</li>
        </ol>
    </nav>
    
    <h1 class=\"text-center mb-5\">Toutes nos catégories</h1>
    
    <div class=\"row\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 20
            yield "            <div class=\"col-md-4 mb-4\">
                <div class=\"card category-card h-100\">
                    ";
            // line 22
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "imageFilename", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 23
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                yield "\">
                            <div class=\"category-image-container\">
                                <img src=\"";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "imageFilename", [], "any", false, false, false, 25), "html", null, true);
                yield "\" class=\"card-img-top\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 25), "html", null, true);
                yield "\" style=\"cursor: pointer;\">
                            </div>
                        </a>
                    ";
            } else {
                // line 29
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                yield "\">
                            <div class=\"card-img-top d-flex align-items-center justify-content-center bg-light\" style=\"height: 200px; cursor: pointer;\">
                                <span class=\"text-center p-3 h4\">";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 31), "html", null, true);
                yield "</span>
                            </div>
                        </a>
                    ";
            }
            // line 35
            yield "                    <div class=\"card-body text-center\">
                        <h3 class=\"card-title\">";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 36), "html", null, true);
            yield "</h3>
                        ";
            // line 37
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 38
                yield "                            <p class=\"card-text\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 38), 0, 100) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 38)) > 100)) ? ("...") : (""))), "html", null, true);
                yield "</p>
                        ";
            }
            // line 40
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            yield "\" class=\"btn btn-primary mt-2\">Explorer</a>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 44
        if (!$context['_iterated']) {
            // line 45
            yield "            <div class=\"col-12 text-center\">
                <p>Aucune catégorie trouvée.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "    </div>
</div>

<style>
    .category-card {
        transition: all 0.3s;
        border-radius: 8px;
        overflow: hidden;
    }
    
    .category-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .category-image-container {
        height: 200px;
        overflow: hidden;
    }
    
    .category-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .category-card:hover img {
        transform: scale(1.05);
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "category/list.html.twig";
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
        return array (  178 => 49,  169 => 45,  167 => 44,  157 => 40,  151 => 38,  149 => 37,  145 => 36,  142 => 35,  135 => 31,  129 => 29,  120 => 25,  114 => 23,  112 => 22,  108 => 20,  103 => 19,  92 => 11,  88 => 9,  85 => 7,  75 => 6,  58 => 4,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}Nos Catégories - SHOP BJ{% endblock %}

{% block body %}
<div class=\"container my-5\">
    {# Fil d'Ariane #}
    <nav aria-label=\"breadcrumb\" class=\"mb-4\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Catégories</li>
        </ol>
    </nav>
    
    <h1 class=\"text-center mb-5\">Toutes nos catégories</h1>
    
    <div class=\"row\">
        {% for category in categories %}
            <div class=\"col-md-4 mb-4\">
                <div class=\"card category-card h-100\">
                    {% if category.imageFilename %}
                        <a href=\"{{ path('category_show', {'id': category.id}) }}\">
                            <div class=\"category-image-container\">
                                <img src=\"{{ category.imageFilename }}\" class=\"card-img-top\" alt=\"{{ category.name }}\" style=\"cursor: pointer;\">
                            </div>
                        </a>
                    {% else %}
                        <a href=\"{{ path('category_show', {'id': category.id}) }}\">
                            <div class=\"card-img-top d-flex align-items-center justify-content-center bg-light\" style=\"height: 200px; cursor: pointer;\">
                                <span class=\"text-center p-3 h4\">{{ category.name }}</span>
                            </div>
                        </a>
                    {% endif %}
                    <div class=\"card-body text-center\">
                        <h3 class=\"card-title\">{{ category.name }}</h3>
                        {% if category.description %}
                            <p class=\"card-text\">{{ category.description|slice(0, 100) ~ (category.description|length > 100 ? '...' : '') }}</p>
                        {% endif %}
                        <a href=\"{{ path('category_show', {'id': category.id}) }}\" class=\"btn btn-primary mt-2\">Explorer</a>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12 text-center\">
                <p>Aucune catégorie trouvée.</p>
            </div>
        {% endfor %}
    </div>
</div>

<style>
    .category-card {
        transition: all 0.3s;
        border-radius: 8px;
        overflow: hidden;
    }
    
    .category-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .category-image-container {
        height: 200px;
        overflow: hidden;
    }
    
    .category-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .category-card:hover img {
        transform: scale(1.05);
    }
</style>
{% endblock %}", "category/list.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/category/list.html.twig");
    }
}
