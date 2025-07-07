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

/* components/product_card.html.twig */
class __TwigTemplate_e04846e4efe30be33ff0c7ca62a8d9bb extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/product_card.html.twig"));

        // line 1
        yield "<div class=\"card product-card h-100\">
    ";
        // line 2
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 2, $this->source); })()), "onSale", [], "any", false, false, false, 2) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 2, $this->source); })()), "discountPercentage", [], "any", false, false, false, 2))) {
            // line 3
            yield "        <div class=\"sale-badge\">-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()), "discountPercentage", [], "any", false, false, false, 3), "html", null, true);
            yield "%</div>
    ";
        }
        // line 5
        yield "
    <div class=\"product-image\">
        ";
        // line 7
        $context["firstImage"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 7, $this->source); })()), "imageFilename", [], "any", false, false, false, 7)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 7, $this->source); })()), "imageFilename", [], "any", false, false, false, 7)) : (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 7, $this->source); })()), "imageFilename2", [], "any", false, false, false, 7)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 7, $this->source); })()), "imageFilename2", [], "any", false, false, false, 7)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 7, $this->source); })()), "imageFilename3", [], "any", false, false, false, 7)))));
        // line 8
        yield "    ";
        if ((($tmp = (isset($context["firstImage"]) || array_key_exists("firstImage", $context) ? $context["firstImage"] : (function () { throw new RuntimeError('Variable "firstImage" does not exist.', 8, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "html", null, true);
            yield "\">
            <img src=\"";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["firstImage"]) || array_key_exists("firstImage", $context) ? $context["firstImage"] : (function () { throw new RuntimeError('Variable "firstImage" does not exist.', 10, $this->source); })())), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
            yield "\" style=\"height: 200px; object-fit: contain; background-color: #f8f9fa; padding: 10px;\">
        </a>
    ";
        } else {
            // line 13
            yield "        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
            yield "\">
            <div class=\"card-img-top product-placeholder d-flex align-items-center justify-content-center bg-light\" style=\"height: 200px;\">
                <i class=\"fas fa-image fa-3x text-secondary\"></i>
            </div>
        </a>
    ";
        }
        // line 19
        yield "
        <div class=\"product-actions\">
            <button class=\"btn btn-sm action-btn quick-add-to-cart\" data-product-id=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
        yield "\" title=\"Ajouter au panier\">
                <i class=\"fas fa-shopping-cart\"></i>
            </button>
            <button class=\"btn btn-sm action-btn add-to-wishlist\" data-product-id=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "html", null, true);
        yield "\" title=\"Ajouter aux favoris\">
                <i class=\"far fa-heart\"></i>
            </button>
            <button class=\"btn btn-sm action-btn quick-view\" data-product-id=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27), "html", null, true);
        yield "\" title=\"Aperçu rapide\">
                <i class=\"fas fa-eye\"></i>
            </button>
        </div>
    </div>

    <div class=\"card-body text-center p-3\">
        <h5 class=\"card-title product-title\">
            <a href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        yield "\" class=\"text-dark text-decoration-none\">
                ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 36, $this->source); })()), "name", [], "any", false, false, false, 36), "html", null, true);
        yield "
            </a>
        </h5>

        <div class=\"product-category text-muted small mb-2\">
            ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 41, $this->source); })()), "category", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true);
        yield "
        </div>

        <div class=\"product-price\">
            ";
        // line 45
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 45, $this->source); })()), "onSale", [], "any", false, false, false, 45) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 45, $this->source); })()), "oldPrice", [], "any", false, false, false, 45))) {
            // line 46
            yield "                <span class=\"old-price me-2\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 46, $this->source); })()), "oldPrice", [], "any", false, false, false, 46)), "html", null, true);
            yield "</span>
                <span class=\"price text-primary\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 47, $this->source); })()), "price", [], "any", false, false, false, 47)), "html", null, true);
            yield "</span>
            ";
        } else {
            // line 49
            yield "                <span class=\"price text-primary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 49, $this->source); })()), "price", [], "any", false, false, false, 49)), "html", null, true);
            yield "</span>
            ";
        }
        // line 51
        yield "        </div>

        ";
        // line 53
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 53, $this->source); })()), "colors", [], "any", false, false, false, 53)) > 0)) {
            // line 54
            yield "            <div class=\"product-colors mt-2\">
                ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 55, $this->source); })()), "colors", [], "any", false, false, false, 55), 0, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
                // line 56
                yield "                    <span class=\"color-swatch color-swatch-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["color"], "html", null, true);
                yield " me-1\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["color"]), "html", null, true);
                yield "\"></span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['color'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            yield "                ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 58, $this->source); })()), "colors", [], "any", false, false, false, 58)) > 4)) {
                // line 59
                yield "                    <span class=\"more-colors\">+";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 59, $this->source); })()), "colors", [], "any", false, false, false, 59)) - 4), "html", null, true);
                yield "</span>
                ";
            }
            // line 61
            yield "            </div>
        ";
        }
        // line 63
        yield "    </div>
</div>

<style>
    .product-card {
        transition: all 0.3s;
        border-radius: 5px;
        overflow: hidden;
        position: relative;
    }

    .product-card:hover {
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transform: translateY(-3px);
    }

    .product-image {
        position: relative;
        overflow: hidden;
    }

    .product-actions {
        position: absolute;
        bottom: -40px;
        left: 0;
        right: 0;
        display: flex;
        justify-content: center;
        transition: all 0.3s;
        background: rgba(255,255,255,0.8);
        padding: 8px 0;
    }

    .product-card:hover .product-actions {
        bottom: 0;
    }

    .action-btn {
        margin: 0 5px;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: white;
        color: #333;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #ddd;
        padding: 0;
    }

    .action-btn:hover {
        background: #007bff;
        color: white;
        border-color: #007bff;
    }

    .sale-badge {
        position: absolute;
        top: 10px;
        left: 10px;
        background: #f44336;
        color: white;
        padding: 2px 8px;
        border-radius: 3px;
        font-size: 0.8rem;
        z-index: 1;
    }

    .product-title {
        font-size: 0.95rem;
        height: 3em;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    .old-price {
        text-decoration: line-through;
        color: #777;
        font-size: 0.9rem;
    }

    .price {
        font-weight: bold;
    }

    .color-dot {
        display: inline-block;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background-color: #ccc;
    }

    .more-colors {
        font-size: 0.7rem;
        color: #777;
    }

    /* Style responsive pour les images de produits */
    .product-img {
        object-fit: contain;
        height: 280px;
        background-color: #f8f9fa;
        padding: 10px;
    }

    .no-image {
        height: 280px;
    }

    /* Responsive pour mobile */
    @media (max-width: 767px) {
        .product-img {
            height: 180px;
            padding: 8px;
        }

        .no-image {
            height: 180px;
        }
    }
</style>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/product_card.html.twig";
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
        return array (  189 => 63,  185 => 61,  179 => 59,  176 => 58,  165 => 56,  161 => 55,  158 => 54,  156 => 53,  152 => 51,  146 => 49,  141 => 47,  136 => 46,  134 => 45,  127 => 41,  119 => 36,  115 => 35,  104 => 27,  98 => 24,  92 => 21,  88 => 19,  78 => 13,  70 => 10,  65 => 9,  62 => 8,  60 => 7,  56 => 5,  50 => 3,  48 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"card product-card h-100\">
    {% if product.onSale and product.discountPercentage %}
        <div class=\"sale-badge\">-{{ product.discountPercentage }}%</div>
    {% endif %}

    <div class=\"product-image\">
        {% set firstImage = product.imageFilename ?: product.imageFilename2 ?: product.imageFilename3 %}
    {% if firstImage %}
        <a href=\"{{ path('product_show', {'id': product.id}) }}\">
            <img src=\"{{ asset(firstImage) }}\" class=\"card-img-top\" alt=\"{{ product.name }}\" style=\"height: 200px; object-fit: contain; background-color: #f8f9fa; padding: 10px;\">
        </a>
    {% else %}
        <a href=\"{{ path('product_show', {'id': product.id}) }}\">
            <div class=\"card-img-top product-placeholder d-flex align-items-center justify-content-center bg-light\" style=\"height: 200px;\">
                <i class=\"fas fa-image fa-3x text-secondary\"></i>
            </div>
        </a>
    {% endif %}

        <div class=\"product-actions\">
            <button class=\"btn btn-sm action-btn quick-add-to-cart\" data-product-id=\"{{ product.id }}\" title=\"Ajouter au panier\">
                <i class=\"fas fa-shopping-cart\"></i>
            </button>
            <button class=\"btn btn-sm action-btn add-to-wishlist\" data-product-id=\"{{ product.id }}\" title=\"Ajouter aux favoris\">
                <i class=\"far fa-heart\"></i>
            </button>
            <button class=\"btn btn-sm action-btn quick-view\" data-product-id=\"{{ product.id }}\" title=\"Aperçu rapide\">
                <i class=\"fas fa-eye\"></i>
            </button>
        </div>
    </div>

    <div class=\"card-body text-center p-3\">
        <h5 class=\"card-title product-title\">
            <a href=\"{{ path('product_show', {'id': product.id}) }}\" class=\"text-dark text-decoration-none\">
                {{ product.name }}
            </a>
        </h5>

        <div class=\"product-category text-muted small mb-2\">
            {{ product.category.name }}
        </div>

        <div class=\"product-price\">
            {% if product.onSale and product.oldPrice %}
                <span class=\"old-price me-2\">{{ product.oldPrice|format_fcfa }}</span>
                <span class=\"price text-primary\">{{ product.price|format_fcfa }}</span>
            {% else %}
                <span class=\"price text-primary\">{{ product.price|format_fcfa }}</span>
            {% endif %}
        </div>

        {% if product.colors|length > 0 %}
            <div class=\"product-colors mt-2\">
                {% for color in product.colors|slice(0, 4) %}
                    <span class=\"color-swatch color-swatch-{{ color }} me-1\" title=\"{{ color|capitalize }}\"></span>
                {% endfor %}
                {% if product.colors|length > 4 %}
                    <span class=\"more-colors\">+{{ product.colors|length - 4 }}</span>
                {% endif %}
            </div>
        {% endif %}
    </div>
</div>

<style>
    .product-card {
        transition: all 0.3s;
        border-radius: 5px;
        overflow: hidden;
        position: relative;
    }

    .product-card:hover {
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transform: translateY(-3px);
    }

    .product-image {
        position: relative;
        overflow: hidden;
    }

    .product-actions {
        position: absolute;
        bottom: -40px;
        left: 0;
        right: 0;
        display: flex;
        justify-content: center;
        transition: all 0.3s;
        background: rgba(255,255,255,0.8);
        padding: 8px 0;
    }

    .product-card:hover .product-actions {
        bottom: 0;
    }

    .action-btn {
        margin: 0 5px;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: white;
        color: #333;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #ddd;
        padding: 0;
    }

    .action-btn:hover {
        background: #007bff;
        color: white;
        border-color: #007bff;
    }

    .sale-badge {
        position: absolute;
        top: 10px;
        left: 10px;
        background: #f44336;
        color: white;
        padding: 2px 8px;
        border-radius: 3px;
        font-size: 0.8rem;
        z-index: 1;
    }

    .product-title {
        font-size: 0.95rem;
        height: 3em;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    .old-price {
        text-decoration: line-through;
        color: #777;
        font-size: 0.9rem;
    }

    .price {
        font-weight: bold;
    }

    .color-dot {
        display: inline-block;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background-color: #ccc;
    }

    .more-colors {
        font-size: 0.7rem;
        color: #777;
    }

    /* Style responsive pour les images de produits */
    .product-img {
        object-fit: contain;
        height: 280px;
        background-color: #f8f9fa;
        padding: 10px;
    }

    .no-image {
        height: 280px;
    }

    /* Responsive pour mobile */
    @media (max-width: 767px) {
        .product-img {
            height: 180px;
            padding: 8px;
        }

        .no-image {
            height: 180px;
        }
    }
</style>", "components/product_card.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/components/product_card.html.twig");
    }
}
