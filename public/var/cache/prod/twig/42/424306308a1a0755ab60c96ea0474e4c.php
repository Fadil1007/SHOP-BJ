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
class __TwigTemplate_b3b87350658138728cf15659f00b625e extends Template
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
        yield "<div class=\"card product-card h-100\">
    ";
        // line 2
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "onSale", [], "any", false, false, false, 2) && CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "discountPercentage", [], "any", false, false, false, 2))) {
            // line 3
            yield "        <div class=\"sale-badge\">-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "discountPercentage", [], "any", false, false, false, 3), "html", null, true);
            yield "%</div>
    ";
        }
        // line 5
        yield "
    <div class=\"product-image\">
        ";
        // line 7
        $context["firstImage"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename", [], "any", false, false, false, 7)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename", [], "any", false, false, false, 7)) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename2", [], "any", false, false, false, 7)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename2", [], "any", false, false, false, 7)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename3", [], "any", false, false, false, 7)))));
        // line 8
        yield "    ";
        if ((($tmp = ($context["firstImage"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 9)]), "html", null, true);
            yield "\">
            <img src=\"";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["firstImage"] ?? null)), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 10), "html", null, true);
            yield "\" style=\"height: 200px; object-fit: cover;\">
        </a>
    ";
        } else {
            // line 13
            yield "        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 13)]), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 21), "html", null, true);
        yield "\" title=\"Ajouter au panier\">
                <i class=\"fas fa-shopping-cart\"></i>
            </button>
            <button class=\"btn btn-sm action-btn add-to-wishlist\" data-product-id=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 24), "html", null, true);
        yield "\" title=\"Ajouter aux favoris\">
                <i class=\"far fa-heart\"></i>
            </button>
            <button class=\"btn btn-sm action-btn quick-view\" data-product-id=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 27), "html", null, true);
        yield "\" title=\"Aperçu rapide\">
                <i class=\"fas fa-eye\"></i>
            </button>
        </div>
    </div>

    <div class=\"card-body text-center p-3\">
        <h5 class=\"card-title product-title\">
            <a href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 35)]), "html", null, true);
        yield "\" class=\"text-dark text-decoration-none\">
                ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 36), "html", null, true);
        yield "
            </a>
        </h5>

        <div class=\"product-category text-muted small mb-2\">
            ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true);
        yield "
        </div>

        <div class=\"product-price\">
            ";
        // line 45
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "onSale", [], "any", false, false, false, 45) && CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "oldPrice", [], "any", false, false, false, 45))) {
            // line 46
            yield "                <span class=\"old-price me-2\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "oldPrice", [], "any", false, false, false, 46)), "html", null, true);
            yield "</span>
                <span class=\"price text-primary\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 47)), "html", null, true);
            yield "</span>
            ";
        } else {
            // line 49
            yield "                <span class=\"price text-primary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 49)), "html", null, true);
            yield "</span>
            ";
        }
        // line 51
        yield "        </div>

        ";
        // line 53
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "colors", [], "any", false, false, false, 53)) > 0)) {
            // line 54
            yield "            <div class=\"product-colors mt-2\">
                ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "colors", [], "any", false, false, false, 55), 0, 4));
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
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "colors", [], "any", false, false, false, 58)) > 4)) {
                // line 59
                yield "                    <span class=\"more-colors\">+";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "colors", [], "any", false, false, false, 59)) - 4), "html", null, true);
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
        object-fit: cover;
        height: 280px;
    }

    .no-image {
        height: 280px;
    }

    /* Responsive pour mobile */
    @media (max-width: 767px) {
        .product-img {
            height: 180px;
        }

        .no-image {
            height: 180px;
        }
    }
</style>";
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
        return array (  186 => 63,  182 => 61,  176 => 59,  173 => 58,  162 => 56,  158 => 55,  155 => 54,  153 => 53,  149 => 51,  143 => 49,  138 => 47,  133 => 46,  131 => 45,  124 => 41,  116 => 36,  112 => 35,  101 => 27,  95 => 24,  89 => 21,  85 => 19,  75 => 13,  67 => 10,  62 => 9,  59 => 8,  57 => 7,  53 => 5,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/product_card.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/components/product_card.html.twig");
    }
}
