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

/* cart/index.html.twig */
class __TwigTemplate_7cf95e74e475fdd77564bc1f65e53479 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Mon Panier - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["site_name"] ?? null), "html", null, true);
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/cart.js"), "html", null, true);
        yield "\"></script>
";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "<div class=\"container my-5\">
    <div class=\"row\">
        <div class=\"col-12\">
            <h1 class=\"mb-4 border-bottom pb-2\">Mon Panier</h1>
            
            <div class=\"notification-container\"></div>
            
            <div id=\"cart-container\">
                ";
        // line 19
        if (Twig\Extension\CoreExtension::testEmpty(($context["cart_items"] ?? null))) {
            // line 20
            yield "                    <div class=\"text-center my-5\">
                        <i class=\"fas fa-shopping-cart fa-4x text-muted mb-3\"></i>
                        <h3>Votre panier est vide</h3>
                        <p class=\"text-muted\">Parcourez notre catalogue pour trouver des produits à ajouter à votre panier.</p>
                        <a href=\"";
            // line 24
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
            yield "\" class=\"btn btn-primary mt-3\">
                            <i class=\"fas fa-shopping-bag me-2\"></i> Continuer mes achats
                        </a>
                    </div>
                ";
        } else {
            // line 29
            yield "                    <div class=\"cart-table\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover\">
                                <thead>
                                    <tr>
                                        <th style=\"width: 100px;\">Image</th>
                                        <th>Produit</th>
                                        <th style=\"width: 120px;\">Prix</th>
                                        <th style=\"width: 150px;\">Quantité</th>
                                        <th style=\"width: 120px;\">Sous-total</th>
                                        <th style=\"width: 50px;\"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["cart_items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 44
                yield "                                        <tr class=\"cart-item\">
                                            <td>
                                                ";
                // line 46
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 46), "imageFilename", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 47
                    yield "                                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 47), "imageFilename", [], "any", false, false, false, 47)), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47), "html", null, true);
                    yield "\" class=\"img-thumbnail\" style=\"max-width: 80px;\">
                                                ";
                } else {
                    // line 49
                    yield "                                                    <div class=\"img-thumbnail d-flex align-items-center justify-content-center bg-light\" style=\"width: 80px; height: 80px;\">
                                                        <i class=\"fas fa-image text-secondary\"></i>
                                                    </div>
                                                ";
                }
                // line 53
                yield "                                            </td>
                                            <td>
                                                <h6 class=\"mb-1\">";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 55), "name", [], "any", false, false, false, 55), "html", null, true);
                yield "</h6>
                                                ";
                // line 56
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 56), "description", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 57
                    yield "                                                    <p class=\"small text-muted mb-0\">
                                                        ";
                    // line 58
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 58), "description", [], "any", false, false, false, 58)) > 50)) {
                        // line 59
                        yield "                                                            ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 59), "description", [], "any", false, false, false, 59), 0, 50) . "..."), "html", null, true);
                        yield "
                                                        ";
                    } else {
                        // line 61
                        yield "                                                            ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 61), "description", [], "any", false, false, false, 61), "html", null, true);
                        yield "
                                                        ";
                    }
                    // line 63
                    yield "                                                    </p>
                                                ";
                }
                // line 65
                yield "                                                <div class=\"mt-1\">
                                                    <a href=\"";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66)]), "html", null, true);
                yield "\" class=\"small text-primary\">Voir le produit</a>
                                                </div>
                                                ";
                // line 68
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 68) || CoreExtension::getAttribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 68))) {
                    // line 69
                    yield "                                                    <div class=\"small text-muted\">
                                                        ";
                    // line 70
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "Taille: ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 70), "html", null, true);
                    }
                    // line 71
                    yield "                                                        ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield " - ";
                        }
                        yield "Couleur: ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 71), "html", null, true);
                    }
                    // line 72
                    yield "                                                    </div>
                                                ";
                }
                // line 74
                yield "                                            </td>
                                            <td>
                                                ";
                // line 76
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 76), "isOnSale", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 77
                    yield "                                                    <span class=\"old-price text-muted d-block\"><del>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 77), "oldPrice", [], "any", false, false, false, 77)), "html", null, true);
                    yield "</del></span>
                                                    <span class=\"sale-price text-danger fw-bold\">";
                    // line 78
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 78), "price", [], "any", false, false, false, 78)), "html", null, true);
                    yield "</span>
                                                ";
                } else {
                    // line 80
                    yield "                                                    <span class=\"fw-bold\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 80), "price", [], "any", false, false, false, 80)), "html", null, true);
                    yield "</span>
                                                ";
                }
                // line 82
                yield "                                            </td>
                                            <td>
                                                <div class=\"input-group\">
                                                    <button type=\"button\" class=\"input-group-text btn btn-outline-secondary decrement\" data-item-id=\"";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 85), "html", null, true);
                yield "\">
                                                        <i class=\"fas fa-minus\"></i>
                                                    </button>
                                                    <input type=\"number\" class=\"form-control text-center cart-quantity-input\" 
                                                           min=\"1\" max=\"";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, true, false, 89), "stock", [], "any", true, true, false, 89)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 89), "stock", [], "any", false, false, false, 89), 10)) : (10)), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 89), "html", null, true);
                yield "\"
                                                           data-item-id=\"";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 90), "html", null, true);
                yield "\"
                                                           data-product-id=\"";
                // line 91
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 91), "id", [], "any", false, false, false, 91), "html", null, true);
                yield "\"
                                                           data-size=\"";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 92), "html", null, true);
                yield "\"
                                                           data-color=\"";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 93), "html", null, true);
                yield "\">
                                                    <button type=\"button\" class=\"input-group-text btn btn-outline-secondary increment\" data-item-id=\"";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 94), "html", null, true);
                yield "\">
                                                        <i class=\"fas fa-plus\"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td>
                                                <span class=\"fw-bold\" id=\"item-total-";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 100), "id", [], "any", false, false, false, 100), "html", null, true);
                yield "\" data-value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 100), "price", [], "any", false, false, false, 100) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 100)), "html", null, true);
                yield "\">
                                                    ";
                // line 101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 101), "price", [], "any", false, false, false, 101) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 101))), "html", null, true);
                yield "
                                                </span>
                                            </td>
                                            <td>
                                                <button class=\"btn btn-sm btn-outline-danger cart-remove-item\" 
                                                        data-item-id=\"";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 106), "html", null, true);
                yield "\"
                                                        data-product-id=\"";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 107), "id", [], "any", false, false, false, 107), "html", null, true);
                yield "\"
                                                        data-size=\"";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 108), "html", null, true);
                yield "\"
                                                        data-color=\"";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 109), "html", null, true);
                yield "\">
                                                    <i class=\"fas fa-trash\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            yield "                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan=\"4\" class=\"text-end fw-bold\">Total :</td>
                                        <td class=\"fw-bold fs-5 text-primary\" id=\"cart-total\">";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa(($context["total"] ?? null)), "html", null, true);
            yield "</td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    
                    <div class=\"cart-actions d-flex justify-content-between mt-4\">
                        <div>
                            <a href=\"";
            // line 129
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
            yield "\" class=\"btn btn-outline-secondary\">
                                <i class=\"fas fa-arrow-left me-2\"></i> Continuer mes achats
                            </a>
                            <button id=\"clear-cart-btn\" class=\"btn btn-outline-danger ms-2\">
                                <i class=\"fas fa-trash me-2\"></i> Vider le panier
                            </button>
                        </div>
                        <div>
                            ";
            // line 137
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 137)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 138
                yield "                                <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout_index");
                yield "\" class=\"btn btn-primary\">
                                    <i class=\"fas fa-check-circle me-2\"></i> Passer la commande
                                </a>
                            ";
            } else {
                // line 142
                yield "                                <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_login");
                yield "\" class=\"btn btn-primary\">
                                    <i class=\"fas fa-sign-in-alt me-2\"></i> Connectez-vous pour commander
                                </a>
                            ";
            }
            // line 146
            yield "                        </div>
                    </div>
                ";
        }
        // line 149
        yield "            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "cart/index.html.twig";
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
        return array (  375 => 149,  370 => 146,  362 => 142,  354 => 138,  352 => 137,  341 => 129,  328 => 119,  322 => 115,  310 => 109,  306 => 108,  302 => 107,  298 => 106,  290 => 101,  284 => 100,  275 => 94,  271 => 93,  267 => 92,  263 => 91,  259 => 90,  253 => 89,  246 => 85,  241 => 82,  235 => 80,  230 => 78,  225 => 77,  223 => 76,  219 => 74,  215 => 72,  206 => 71,  201 => 70,  198 => 69,  196 => 68,  191 => 66,  188 => 65,  184 => 63,  178 => 61,  172 => 59,  170 => 58,  167 => 57,  165 => 56,  161 => 55,  157 => 53,  151 => 49,  143 => 47,  141 => 46,  137 => 44,  133 => 43,  117 => 29,  109 => 24,  103 => 20,  101 => 19,  91 => 11,  84 => 10,  77 => 7,  72 => 6,  65 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "cart/index.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/cart/index.html.twig");
    }
}
