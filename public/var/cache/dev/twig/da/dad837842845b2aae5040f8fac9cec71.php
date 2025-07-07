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

/* product/index.html.twig */
class __TwigTemplate_5b45dc2d6fb59e4edbe8715bdbfa5e9c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Découvrez notre collection de mode - SHOP BJ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container my-5\">
    ";
        // line 8
        yield "    <section class=\"mb-5\">
        <h2 class=\"text-center mb-4\">PRODUITS EN VEDETTE</h2>
        <div class=\"row\">
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["featuredProducts"]) || array_key_exists("featuredProducts", $context) ? $context["featuredProducts"] : (function () { throw new RuntimeError('Variable "featuredProducts" does not exist.', 11, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 12
            yield "                <div class=\"col-md-3 mb-4\">
                    ";
            // line 13
            yield from $this->load("components/product_card.html.twig", 13)->unwrap()->yield(CoreExtension::merge($context, ["product" => $context["product"]]));
            // line 14
            yield "                </div>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 15
        if (!$context['_iterated']) {
            // line 16
            yield "                <div class=\"col-12 text-center\">
                    <p>Aucun produit en vedette disponible.</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "        </div>
    </section>

    ";
        // line 24
        yield "    <section class=\"mb-5\">
        <h2 class=\"text-center mb-4\">SOLDES</h2>
        <div class=\"row\">
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["saleProducts"]) || array_key_exists("saleProducts", $context) ? $context["saleProducts"] : (function () { throw new RuntimeError('Variable "saleProducts" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 28
            yield "                <div class=\"col-md-3 mb-4\">
                    ";
            // line 29
            yield from $this->load("components/product_card.html.twig", 29)->unwrap()->yield(CoreExtension::merge($context, ["product" => $context["product"]]));
            // line 30
            yield "                </div>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 31
        if (!$context['_iterated']) {
            // line 32
            yield "                <div class=\"col-12 text-center\">
                    <p>Aucun produit en solde disponible.</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "        </div>
    </section>

    ";
        // line 40
        yield "    <section class=\"mb-5\">
        <h2 class=\"text-center mb-4\">NOUVEAUTÉS</h2>
        <div class=\"row\">
            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["newProducts"]) || array_key_exists("newProducts", $context) ? $context["newProducts"] : (function () { throw new RuntimeError('Variable "newProducts" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 44
            yield "                <div class=\"col-md-3 mb-4\">
                    ";
            // line 45
            yield from $this->load("components/product_card.html.twig", 45)->unwrap()->yield(CoreExtension::merge($context, ["product" => $context["product"]]));
            // line 46
            yield "                </div>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 47
        if (!$context['_iterated']) {
            // line 48
            yield "                <div class=\"col-12 text-center\">
                    <p>Aucun nouveau produit disponible.</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "        </div>
    </section>

    ";
        // line 56
        yield "    <section class=\"mb-5\">
        <h2 class=\"text-center mb-4\">DÉCOUVREZ NOS CATÉGORIES</h2>
        <div class=\"row\">
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["featuredCategories"]) || array_key_exists("featuredCategories", $context) ? $context["featuredCategories"] : (function () { throw new RuntimeError('Variable "featuredCategories" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 60
            yield "                <div class=\"col-md-4 mb-4\">
                    <div class=\"card category-card h-100\">
                        ";
            // line 63
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            yield "\">
                            <img src=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['App\Twig\AssetVersionExtension']->normalizeAssetPath(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "imageFilename", [], "any", false, false, false, 64))), "html", null, true);
            yield "?v=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 64), "html", null, true);
            yield "\" style=\"cursor: pointer;\">
                        </a>
                        <div class=\"card-body text-center\">
                            <h5 class=\"card-title\">";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 67), "html", null, true);
            yield "</h5>
                            <p class=\"card-text\">";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 68), 0, 60) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 68)) > 60)) ? ("...") : (""))), "html", null, true);
            yield "</p>
                            <a href=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary\">Découvrir</a>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "        </div>
    </section>
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
        return "product/index.html.twig";
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
        return array (  306 => 74,  295 => 69,  291 => 68,  287 => 67,  277 => 64,  272 => 63,  268 => 60,  264 => 59,  259 => 56,  254 => 52,  245 => 48,  243 => 47,  230 => 46,  228 => 45,  225 => 44,  207 => 43,  202 => 40,  197 => 36,  188 => 32,  186 => 31,  173 => 30,  171 => 29,  168 => 28,  150 => 27,  145 => 24,  140 => 20,  131 => 16,  129 => 15,  116 => 14,  114 => 13,  111 => 12,  93 => 11,  88 => 8,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Découvrez notre collection de mode - SHOP BJ{% endblock %}

{% block body %}
<div class=\"container my-5\">
    {# Section Produits en Vedette #}
    <section class=\"mb-5\">
        <h2 class=\"text-center mb-4\">PRODUITS EN VEDETTE</h2>
        <div class=\"row\">
            {% for product in featuredProducts %}
                <div class=\"col-md-3 mb-4\">
                    {% include 'components/product_card.html.twig' with {'product': product} %}
                </div>
            {% else %}
                <div class=\"col-12 text-center\">
                    <p>Aucun produit en vedette disponible.</p>
                </div>
            {% endfor %}
        </div>
    </section>

    {# Section Soldes #}
    <section class=\"mb-5\">
        <h2 class=\"text-center mb-4\">SOLDES</h2>
        <div class=\"row\">
            {% for product in saleProducts %}
                <div class=\"col-md-3 mb-4\">
                    {% include 'components/product_card.html.twig' with {'product': product} %}
                </div>
            {% else %}
                <div class=\"col-12 text-center\">
                    <p>Aucun produit en solde disponible.</p>
                </div>
            {% endfor %}
        </div>
    </section>

    {# Section Nouveautés #}
    <section class=\"mb-5\">
        <h2 class=\"text-center mb-4\">NOUVEAUTÉS</h2>
        <div class=\"row\">
            {% for product in newProducts %}
                <div class=\"col-md-3 mb-4\">
                    {% include 'components/product_card.html.twig' with {'product': product} %}
                </div>
            {% else %}
                <div class=\"col-12 text-center\">
                    <p>Aucun nouveau produit disponible.</p>
                </div>
            {% endfor %}
        </div>
    </section>

    {# Section Découvrez nos Catégories #}
    <section class=\"mb-5\">
        <h2 class=\"text-center mb-4\">DÉCOUVREZ NOS CATÉGORIES</h2>
        <div class=\"row\">
            {% for category in featuredCategories %}
                <div class=\"col-md-4 mb-4\">
                    <div class=\"card category-card h-100\">
                        {# Utilisation de la fonction normalize_asset_path pour normaliser les chemins d'images #}
                        <a href=\"{{ path('category_show', {'id': category.id}) }}\">
                            <img src=\"{{ asset(normalize_asset_path(category.imageFilename)) }}?v={{ random() }}\" class=\"card-img-top\" alt=\"{{ category.name }}\" style=\"cursor: pointer;\">
                        </a>
                        <div class=\"card-body text-center\">
                            <h5 class=\"card-title\">{{ category.name }}</h5>
                            <p class=\"card-text\">{{ category.description|slice(0, 60) ~ (category.description|length > 60 ? '...' : '') }}</p>
                            <a href=\"{{ path('category_show', {'id': category.id}) }}\" class=\"btn btn-outline-primary\">Découvrir</a>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </section>
</div>
{% endblock %}", "product/index.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/product/index.html.twig");
    }
}
