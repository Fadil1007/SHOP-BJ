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
class __TwigTemplate_337b6d4f955ea9b9b28695b0370e2e00 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

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

        yield "Mon Panier - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["site_name"]) || array_key_exists("site_name", $context) ? $context["site_name"] : (function () { throw new RuntimeError('Variable "site_name" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/cart.js"), "html", null, true);
        yield "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        yield "<div class=\"container my-5\">
    <div class=\"row\">
        <div class=\"col-12\">
            <h1 class=\"mb-4 border-bottom pb-2\">Mon Panier</h1>
            
            <div class=\"notification-container\"></div>
            
            <div id=\"cart-container\">
                ";
        // line 19
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["cart_items"]) || array_key_exists("cart_items", $context) ? $context["cart_items"] : (function () { throw new RuntimeError('Variable "cart_items" does not exist.', 19, $this->source); })()))) {
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
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cart_items"]) || array_key_exists("cart_items", $context) ? $context["cart_items"] : (function () { throw new RuntimeError('Variable "cart_items" does not exist.', 43, $this->source); })()));
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 119, $this->source); })())), "html", null, true);
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
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "user", [], "any", false, false, false, 137)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  396 => 149,  391 => 146,  383 => 142,  375 => 138,  373 => 137,  362 => 129,  349 => 119,  343 => 115,  331 => 109,  327 => 108,  323 => 107,  319 => 106,  311 => 101,  305 => 100,  296 => 94,  292 => 93,  288 => 92,  284 => 91,  280 => 90,  274 => 89,  267 => 85,  262 => 82,  256 => 80,  251 => 78,  246 => 77,  244 => 76,  240 => 74,  236 => 72,  227 => 71,  222 => 70,  219 => 69,  217 => 68,  212 => 66,  209 => 65,  205 => 63,  199 => 61,  193 => 59,  191 => 58,  188 => 57,  186 => 56,  182 => 55,  178 => 53,  172 => 49,  164 => 47,  162 => 46,  158 => 44,  154 => 43,  138 => 29,  130 => 24,  124 => 20,  122 => 19,  112 => 11,  102 => 10,  92 => 7,  87 => 6,  77 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon Panier - {{ site_name }}{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('js/cart.js') }}\"></script>
{% endblock %}

{% block body %}
<div class=\"container my-5\">
    <div class=\"row\">
        <div class=\"col-12\">
            <h1 class=\"mb-4 border-bottom pb-2\">Mon Panier</h1>
            
            <div class=\"notification-container\"></div>
            
            <div id=\"cart-container\">
                {% if cart_items is empty %}
                    <div class=\"text-center my-5\">
                        <i class=\"fas fa-shopping-cart fa-4x text-muted mb-3\"></i>
                        <h3>Votre panier est vide</h3>
                        <p class=\"text-muted\">Parcourez notre catalogue pour trouver des produits à ajouter à votre panier.</p>
                        <a href=\"{{ path('product_index') }}\" class=\"btn btn-primary mt-3\">
                            <i class=\"fas fa-shopping-bag me-2\"></i> Continuer mes achats
                        </a>
                    </div>
                {% else %}
                    <div class=\"cart-table\">
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
                                    {% for item in cart_items %}
                                        <tr class=\"cart-item\">
                                            <td>
                                                {% if item.product.imageFilename %}
                                                    <img src=\"{{ asset(item.product.imageFilename) }}\" alt=\"{{ item.product.name }}\" class=\"img-thumbnail\" style=\"max-width: 80px;\">
                                                {% else %}
                                                    <div class=\"img-thumbnail d-flex align-items-center justify-content-center bg-light\" style=\"width: 80px; height: 80px;\">
                                                        <i class=\"fas fa-image text-secondary\"></i>
                                                    </div>
                                                {% endif %}
                                            </td>
                                            <td>
                                                <h6 class=\"mb-1\">{{ item.product.name }}</h6>
                                                {% if item.product.description %}
                                                    <p class=\"small text-muted mb-0\">
                                                        {% if item.product.description|length > 50 %}
                                                            {{ item.product.description|slice(0, 50) ~ '...' }}
                                                        {% else %}
                                                            {{ item.product.description }}
                                                        {% endif %}
                                                    </p>
                                                {% endif %}
                                                <div class=\"mt-1\">
                                                    <a href=\"{{ path('product_show', {'id': item.product.id}) }}\" class=\"small text-primary\">Voir le produit</a>
                                                </div>
                                                {% if item.size or item.color %}
                                                    <div class=\"small text-muted\">
                                                        {% if item.size %}Taille: {{ item.size }}{% endif %}
                                                        {% if item.color %}{% if item.size %} - {% endif %}Couleur: {{ item.color }}{% endif %}
                                                    </div>
                                                {% endif %}
                                            </td>
                                            <td>
                                                {% if item.product.isOnSale %}
                                                    <span class=\"old-price text-muted d-block\"><del>{{ item.product.oldPrice|format_fcfa }}</del></span>
                                                    <span class=\"sale-price text-danger fw-bold\">{{ item.product.price|format_fcfa }}</span>
                                                {% else %}
                                                    <span class=\"fw-bold\">{{ item.product.price|format_fcfa }}</span>
                                                {% endif %}
                                            </td>
                                            <td>
                                                <div class=\"input-group\">
                                                    <button type=\"button\" class=\"input-group-text btn btn-outline-secondary decrement\" data-item-id=\"{{ item.id }}\">
                                                        <i class=\"fas fa-minus\"></i>
                                                    </button>
                                                    <input type=\"number\" class=\"form-control text-center cart-quantity-input\" 
                                                           min=\"1\" max=\"{{ item.product.stock|default(10) }}\" value=\"{{ item.quantity }}\"
                                                           data-item-id=\"{{ item.id }}\"
                                                           data-product-id=\"{{ item.product.id }}\"
                                                           data-size=\"{{ item.size }}\"
                                                           data-color=\"{{ item.color }}\">
                                                    <button type=\"button\" class=\"input-group-text btn btn-outline-secondary increment\" data-item-id=\"{{ item.id }}\">
                                                        <i class=\"fas fa-plus\"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td>
                                                <span class=\"fw-bold\" id=\"item-total-{{ item.product.id }}\" data-value=\"{{ (item.product.price * item.quantity) }}\">
                                                    {{ (item.product.price * item.quantity)|format_fcfa }}
                                                </span>
                                            </td>
                                            <td>
                                                <button class=\"btn btn-sm btn-outline-danger cart-remove-item\" 
                                                        data-item-id=\"{{ item.id }}\"
                                                        data-product-id=\"{{ item.product.id }}\"
                                                        data-size=\"{{ item.size }}\"
                                                        data-color=\"{{ item.color }}\">
                                                    <i class=\"fas fa-trash\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan=\"4\" class=\"text-end fw-bold\">Total :</td>
                                        <td class=\"fw-bold fs-5 text-primary\" id=\"cart-total\">{{ total|format_fcfa }}</td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    
                    <div class=\"cart-actions d-flex justify-content-between mt-4\">
                        <div>
                            <a href=\"{{ path('product_index') }}\" class=\"btn btn-outline-secondary\">
                                <i class=\"fas fa-arrow-left me-2\"></i> Continuer mes achats
                            </a>
                            <button id=\"clear-cart-btn\" class=\"btn btn-outline-danger ms-2\">
                                <i class=\"fas fa-trash me-2\"></i> Vider le panier
                            </button>
                        </div>
                        <div>
                            {% if app.user %}
                                <a href=\"{{ path('checkout_index') }}\" class=\"btn btn-primary\">
                                    <i class=\"fas fa-check-circle me-2\"></i> Passer la commande
                                </a>
                            {% else %}
                                <a href=\"{{ path('user_login') }}\" class=\"btn btn-primary\">
                                    <i class=\"fas fa-sign-in-alt me-2\"></i> Connectez-vous pour commander
                                </a>
                            {% endif %}
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
</div>
{% endblock %}", "cart/index.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/cart/index.html.twig");
    }
}
