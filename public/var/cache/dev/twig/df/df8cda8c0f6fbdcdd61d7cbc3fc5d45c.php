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

/* product/search.html.twig */
class __TwigTemplate_115f22a9768f81b921fd092ef3a275d9 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/search.html.twig"));

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

        yield "Résultats de recherche pour \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 3, $this->source); })()), "html", null, true);
        yield "\" - SHOP BJ";
        
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
        yield "    <nav aria-label=\"breadcrumb\" class=\"mb-4\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Recherche</li>
        </ol>
    </nav>

    ";
        // line 16
        yield "    <div class=\"search-header mb-5\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-8\">
                <h1 class=\"mb-3\">Résultats de recherche</h1>
                ";
        // line 20
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 20, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            yield "                    <p class=\"lead\">Vous avez recherché : <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 21, $this->source); })()), "html", null, true);
            yield "</strong></p>
                ";
        }
        // line 23
        yield "            </div>
            <div class=\"col-md-4\">
                <form action=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_search");
        yield "\" method=\"get\" class=\"search-form\">
                    <div class=\"input-group mb-3\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\" 
                               name=\"q\" value=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "\" required minlength=\"2\">
                        <button class=\"btn btn-primary\" type=\"submit\">
                            <i class=\"fas fa-search\"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    ";
        // line 39
        yield "    <div class=\"search-results mb-5\">
        ";
        // line 40
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 40, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "            <p class=\"mb-3\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 41, $this->source); })())), "html", null, true);
            yield " produit(s) trouvé(s)</p>
            <div class=\"row\">
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 43, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 44
                yield "                    <div class=\"col-md-3 mb-4\">
                        ";
                // line 45
                $context["firstImage"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename", [], "any", false, false, false, 45)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename", [], "any", false, false, false, 45)) : (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename2", [], "any", false, false, false, 45)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename2", [], "any", false, false, false, 45)) : (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename3", [], "any", false, false, false, 45)))));
                // line 46
                yield "                    ";
                if ((($tmp = (isset($context["firstImage"]) || array_key_exists("firstImage", $context) ? $context["firstImage"] : (function () { throw new RuntimeError('Variable "firstImage" does not exist.', 46, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 47
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                    yield "\">
                            <img src=\"";
                    // line 48
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["firstImage"]) || array_key_exists("firstImage", $context) ? $context["firstImage"] : (function () { throw new RuntimeError('Variable "firstImage" does not exist.', 48, $this->source); })())), "html", null, true);
                    yield "\" class=\"card-img-top\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 48), "html", null, true);
                    yield "\" style=\"height: 200px; object-fit: cover;\">
                        </a>
                    ";
                } else {
                    // line 51
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                    yield "\">
                            <div class=\"card-img-top product-placeholder d-flex align-items-center justify-content-center bg-light\" style=\"height: 200px;\">
                                <i class=\"fas fa-image fa-3x text-secondary\"></i>
                            </div>
                        </a>
                    ";
                }
                // line 57
                yield "                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            yield "            </div>
        ";
        } elseif ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(        // line 60
(isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 60, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 61
            yield "            <div class=\"alert alert-info\">
                <p class=\"mb-0\">Aucun produit ne correspond à votre recherche \"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 62, $this->source); })()), "html", null, true);
            yield "\".</p>
                <hr>
                <div class=\"mt-3\">
                    <h5>Suggestions :</h5>
                    <ul>
                        <li>Vérifiez l'orthographe des mots-clés saisis</li>
                        <li>Essayez des mots-clés plus généraux</li>
                        <li>Essayez des mots-clés différents</li>
                        <li>Parcourez nos <a href=\"";
            // line 70
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_list");
            yield "\">catégories</a> pour trouver votre produit</li>
                    </ul>
                </div>
            </div>

            ";
            // line 76
            yield "            <div class=\"discover-products mt-5\">
                <h3 class=\"mb-4\">Produits à découvrir</h3>
                <div class=\"row\">
                    ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("featuredProducts", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["featuredProducts"]) || array_key_exists("featuredProducts", $context) ? $context["featuredProducts"] : (function () { throw new RuntimeError('Variable "featuredProducts" does not exist.', 79, $this->source); })()), [])) : ([])));
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
                // line 80
                yield "                        <div class=\"col-md-3 mb-4\">
                            ";
                // line 81
                yield from $this->load("components/product_card.html.twig", 81)->unwrap()->yield(CoreExtension::merge($context, ["product" => $context["product"]]));
                // line 82
                yield "                        </div>
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
            // line 83
            if (!$context['_iterated']) {
                // line 84
                yield "                        <div class=\"col-12\">
                            <div class=\"alert alert-info\">
                                <p class=\"mb-0\">Pas de produits disponibles actuellement.</p>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            yield "                </div>
            </div>
        ";
        } else {
            // line 93
            yield "            <div class=\"search-hint\">
                <p>Entrez un mot-clé ci-dessus pour rechercher des produits.</p>
                <p>Vous pouvez rechercher par nom de produit, description, ou marque.</p>
            </div>
        ";
        }
        // line 98
        yield "    </div>
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
        return "product/search.html.twig";
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
        return array (  285 => 98,  278 => 93,  273 => 90,  262 => 84,  260 => 83,  247 => 82,  245 => 81,  242 => 80,  224 => 79,  219 => 76,  211 => 70,  200 => 62,  197 => 61,  195 => 60,  192 => 59,  185 => 57,  175 => 51,  167 => 48,  162 => 47,  159 => 46,  157 => 45,  154 => 44,  150 => 43,  144 => 41,  142 => 40,  139 => 39,  126 => 28,  120 => 25,  116 => 23,  110 => 21,  108 => 20,  102 => 16,  94 => 10,  90 => 8,  87 => 6,  77 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Résultats de recherche pour \"{{ query }}\" - SHOP BJ{% endblock %}

{% block body %}
<div class=\"container my-5\">
    {# Fil d'Ariane #}
    <nav aria-label=\"breadcrumb\" class=\"mb-4\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Recherche</li>
        </ol>
    </nav>

    {# En-tête #}
    <div class=\"search-header mb-5\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-8\">
                <h1 class=\"mb-3\">Résultats de recherche</h1>
                {% if query is not empty %}
                    <p class=\"lead\">Vous avez recherché : <strong>{{ query }}</strong></p>
                {% endif %}
            </div>
            <div class=\"col-md-4\">
                <form action=\"{{ path('product_search') }}\" method=\"get\" class=\"search-form\">
                    <div class=\"input-group mb-3\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\" 
                               name=\"q\" value=\"{{ query }}\" required minlength=\"2\">
                        <button class=\"btn btn-primary\" type=\"submit\">
                            <i class=\"fas fa-search\"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {# Résultats de recherche #}
    <div class=\"search-results mb-5\">
        {% if products is not empty %}
            <p class=\"mb-3\">{{ products|length }} produit(s) trouvé(s)</p>
            <div class=\"row\">
                {% for product in products %}
                    <div class=\"col-md-3 mb-4\">
                        {% set firstImage = product.imageFilename ?: product.imageFilename2 ?: product.imageFilename3 %}
                    {% if firstImage %}
                        <a href=\"{{ path('product_show', {'id': product.id}) }}\">
                            <img src=\"{{ asset(firstImage) }}\" class=\"card-img-top\" alt=\"{{ product.name }}\" style=\"height: 200px; object-fit: cover;\">
                        </a>
                    {% else %}
                        <a href=\"{{ path('product_show', {'id': product.id}) }}\">
                            <div class=\"card-img-top product-placeholder d-flex align-items-center justify-content-center bg-light\" style=\"height: 200px;\">
                                <i class=\"fas fa-image fa-3x text-secondary\"></i>
                            </div>
                        </a>
                    {% endif %}
                    </div>
                {% endfor %}
            </div>
        {% elseif query is not empty %}
            <div class=\"alert alert-info\">
                <p class=\"mb-0\">Aucun produit ne correspond à votre recherche \"{{ query }}\".</p>
                <hr>
                <div class=\"mt-3\">
                    <h5>Suggestions :</h5>
                    <ul>
                        <li>Vérifiez l'orthographe des mots-clés saisis</li>
                        <li>Essayez des mots-clés plus généraux</li>
                        <li>Essayez des mots-clés différents</li>
                        <li>Parcourez nos <a href=\"{{ path('category_list') }}\">catégories</a> pour trouver votre produit</li>
                    </ul>
                </div>
            </div>

            {# Produits à découvrir #}
            <div class=\"discover-products mt-5\">
                <h3 class=\"mb-4\">Produits à découvrir</h3>
                <div class=\"row\">
                    {% for product in featuredProducts|default([]) %}
                        <div class=\"col-md-3 mb-4\">
                            {% include 'components/product_card.html.twig' with {'product': product} %}
                        </div>
                    {% else %}
                        <div class=\"col-12\">
                            <div class=\"alert alert-info\">
                                <p class=\"mb-0\">Pas de produits disponibles actuellement.</p>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        {% else %}
            <div class=\"search-hint\">
                <p>Entrez un mot-clé ci-dessus pour rechercher des produits.</p>
                <p>Vous pouvez rechercher par nom de produit, description, ou marque.</p>
            </div>
        {% endif %}
    </div>
</div>
{% endblock %}", "product/search.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/product/search.html.twig");
    }
}
