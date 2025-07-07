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

/* category/show.html.twig */
class __TwigTemplate_ebd001dedfe1ac10bf8c3b9b3f7fde2e extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
        yield " - SHOP BJ";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_list");
        yield "\">Catégories</a></li>
            ";
        // line 12
        if ((($tmp = ($context["parentCategory"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "                <li class=\"breadcrumb-item\"><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["parentCategory"] ?? null), "id", [], "any", false, false, false, 13)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["parentCategory"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
            yield "</a></li>
            ";
        }
        // line 15
        yield "            <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 15), "html", null, true);
        yield "</li>
        </ol>
    </nav>

    ";
        // line 20
        yield "    <div class=\"category-header mb-5\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-6\">
                <h1 class=\"mb-3\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 23), "html", null, true);
        yield "</h1>
                ";
        // line 24
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "                    <p class=\"lead\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 25), "html", null, true);
            yield "</p>
                ";
        }
        // line 27
        yield "            </div>
            <div class=\"col-md-6\">
                ";
        // line 29
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "headerImageFilename", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "headerImageFilename", [], "any", false, false, false, 30)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 30), "html", null, true);
            yield "\" class=\"img-fluid rounded shadow\" style=\"height: 250px; width: 100%; object-fit: cover;\">
                ";
        } elseif (((        // line 31
array_key_exists("productWithImage", $context) && ($context["productWithImage"] ?? null)) && CoreExtension::getAttribute($this->env, $this->source, ($context["productWithImage"] ?? null), "imageFilename", [], "any", false, false, false, 31))) {
            // line 32
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, ($context["productWithImage"] ?? null), "imageFilename", [], "any", false, false, false, 32)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 32), "html", null, true);
            yield "\" class=\"img-fluid rounded shadow\" style=\"height: 250px; width: 100%; object-fit: cover;\">
                ";
        } else {
            // line 34
            yield "                    <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"height: 250px;\">
                        <span class=\"h3 text-center p-4\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 35), "html", null, true);
            yield "</span>
                    </div>
                ";
        }
        // line 38
        yield "            </div>
        </div>
    </div>

    ";
        // line 43
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "children", [], "any", false, false, false, 43)) > 0)) {
            // line 44
            yield "    <div class=\"subcategories-section mb-5\">
        <h3 class=\"mb-4\">Sous-catégories de ";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 45), "html", null, true);
            yield "</h3>
        <div class=\"row\">
            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "children", [], "any", false, false, false, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["subcategory"]) {
                // line 48
                yield "                <div class=\"col-6 col-md-3 mb-4\">
                    <a href=\"";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_category_by_slug", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["subcategory"], "slug", [], "any", false, false, false, 49)]), "html", null, true);
                yield "\" class=\"text-decoration-none\">
                        <div class=\"subcategory-card card h-100 border-0 shadow-sm\">
                            ";
                // line 51
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subcategory"], "imageFilename", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 52
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["subcategory"], "imageFilename", [], "any", false, false, false, 52)), "html", null, true);
                    yield "\" class=\"card-img-top\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subcategory"], "name", [], "any", false, false, false, 52), "html", null, true);
                    yield "\" style=\"height: 160px; object-fit: cover;\">
                            ";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 53
$context["subcategory"], "headerImageFilename", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 54
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["subcategory"], "headerImageFilename", [], "any", false, false, false, 54)), "html", null, true);
                    yield "\" class=\"card-img-top\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subcategory"], "name", [], "any", false, false, false, 54), "html", null, true);
                    yield "\" style=\"height: 160px; object-fit: cover;\">
                            ";
                } else {
                    // line 56
                    yield "                                <div class=\"card-img-top bg-light d-flex align-items-center justify-content-center\" style=\"height: 160px;\">
                                    <span class=\"text-center p-3\">";
                    // line 57
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subcategory"], "name", [], "any", false, false, false, 57), "html", null, true);
                    yield "</span>
                                </div>
                            ";
                }
                // line 60
                yield "                            <div class=\"card-body text-center\">
                                <h5 class=\"card-title\">";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subcategory"], "name", [], "any", false, false, false, 61), "html", null, true);
                yield "</h5>
                                <p class=\"card-text small text-muted\">
                                    ";
                // line 63
                $context["productCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["subcategory"], "products", [], "any", false, false, false, 63));
                // line 64
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["productCount"] ?? null), "html", null, true);
                yield " produit";
                if ((($context["productCount"] ?? null) != 1)) {
                    yield "s";
                }
                // line 65
                yield "                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['subcategory'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            yield "        </div>
    </div>
    ";
        }
        // line 74
        yield "
    ";
        // line 76
        yield "    <div class=\"product-filters mb-4\">
        <div class=\"row g-3 align-items-center\">
            <div class=\"col-md-6\">
                <p class=\"mb-0\"><strong>";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null)), "html", null, true);
        yield "</strong> produits trouvés</p>
            </div>
            <div class=\"col-md-6\">
                <div class=\"d-flex justify-content-end\">
                    <div class=\"dropdown me-3\">
                        <button class=\"btn btn-outline-secondary dropdown-toggle\" type=\"button\" id=\"sortDropdown\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Trier par
                        </button>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"sortDropdown\">
                            <li><a class=\"dropdown-item\" href=\"#\">Nouveautés</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\">Prix: croissant</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\">Prix: décroissant</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\">Popularité</a></li>
                        </ul>
                    </div>
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Layout Toggle\">
                        <button type=\"button\" class=\"btn btn-outline-secondary active\" id=\"gridViewBtn\">
                            <i class=\"fas fa-th\"></i>
                        </button>
                        <button type=\"button\" class=\"btn btn-outline-secondary\" id=\"listViewBtn\">
                            <i class=\"fas fa-list\"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 108
        yield "    <div class=\"row\" id=\"products-grid\">
        ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 110
            yield "            <div class=\"col-md-3 mb-4\">
                ";
            // line 111
            $context["firstImage"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename", [], "any", false, false, false, 111)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename", [], "any", false, false, false, 111)) : (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename2", [], "any", false, false, false, 111)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename2", [], "any", false, false, false, 111)) : (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename3", [], "any", false, false, false, 111)))));
            // line 112
            yield "                        ";
            if ((($tmp = ($context["firstImage"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 113
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 113)]), "html", null, true);
                yield "\">
                                <img src=\"";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["firstImage"] ?? null)), "html", null, true);
                yield "\" class=\"card-img-top\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 114), "html", null, true);
                yield "\" style=\"height: 200px; object-fit: cover;\">
                            </a>
                        ";
            } else {
                // line 117
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 117)]), "html", null, true);
                yield "\">
                                <div class=\"card-img-top product-placeholder d-flex align-items-center justify-content-center bg-light\" style=\"height: 200px;\">
                                    <i class=\"fas fa-image fa-3x text-secondary\"></i>
                                </div>
                            </a>
                        ";
            }
            // line 123
            yield "            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 124
        if (!$context['_iterated']) {
            // line 125
            yield "            <div class=\"col-12\">
                <div class=\"alert alert-info text-center\">
                    <p class=\"mb-0\">Aucun produit trouvé dans cette catégorie.</p>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        yield "    </div>

    ";
        // line 134
        yield "    <div class=\"d-none\" id=\"products-list\">
        ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 136
            yield "            <div class=\"card mb-3 product-list-card\">
                <div class=\"row g-0\">
                    <div class=\"col-md-3\">
                        <div class=\"h-100\">
                            ";
            // line 140
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename", [], "any", false, false, false, 140)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 141
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename", [], "any", false, false, false, 141)), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 141), "html", null, true);
                yield "\" class=\"img-fluid rounded-start h-100\" style=\"object-fit: cover;\">
                            ";
            } else {
                // line 143
                yield "                                <div class=\"h-100 d-flex align-items-center justify-content-center bg-light rounded-start\">
                                    <span class=\"text-center p-3\">";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 144), "html", null, true);
                yield "</span>
                                </div>
                            ";
            }
            // line 147
            yield "                        </div>
                    </div>
                    <div class=\"col-md-9\">
                        <div class=\"card-body\">
                            <div class=\"d-flex justify-content-between align-items-start\">
                                <div>
                                    <h5 class=\"card-title\">";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 153), "html", null, true);
            yield "</h5>
                                    <p class=\"card-text text-muted small\">";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 154), "name", [], "any", false, false, false, 154), "html", null, true);
            yield "</p>
                                </div>
                                <div class=\"product-price text-end\">
                                    ";
            // line 157
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "onSale", [], "any", false, false, false, 157) && CoreExtension::getAttribute($this->env, $this->source, $context["product"], "oldPrice", [], "any", false, false, false, 157))) {
                // line 158
                yield "                                        <div class=\"old-price text-muted text-decoration-line-through\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "oldPrice", [], "any", false, false, false, 158), 2, ",", " "), "html", null, true);
                yield " €</div>
                                        <div class=\"price text-primary fw-bold\">";
                // line 159
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 159), 2, ",", " "), "html", null, true);
                yield " €</div>
                                        <span class=\"badge bg-danger\">-";
                // line 160
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "discountPercentage", [], "any", false, false, false, 160), "html", null, true);
                yield "%</span>
                                    ";
            } else {
                // line 162
                yield "                                        <div class=\"price text-primary fw-bold\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 162), 2, ",", " "), "html", null, true);
                yield " €</div>
                                    ";
            }
            // line 164
            yield "                                </div>
                            </div>

                            <p class=\"card-text mt-2\">
                                ";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "shortDescription", [], "any", false, false, false, 168), 0, 150) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "shortDescription", [], "any", false, false, false, 168)) > 150)) ? ("...") : (""))), "html", null, true);
            yield "
                            </p>

                            <div class=\"d-flex justify-content-between align-items-center mt-3\">
                                <div>
                                    ";
            // line 173
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 173) > 0)) {
                // line 174
                yield "                                        <span class=\"text-success\"><i class=\"fas fa-check-circle me-1\"></i>En stock</span>
                                    ";
            } else {
                // line 176
                yield "                                        <span class=\"text-danger\"><i class=\"fas fa-times-circle me-1\"></i>Rupture de stock</span>
                                    ";
            }
            // line 178
            yield "                                </div>
                                <div>
                                    <a href=\"";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 180)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary btn-sm me-2\">Détails</a>
                                    <button class=\"btn btn-primary btn-sm add-to-cart\" data-product-id=\"";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 181), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-shopping-cart me-1\"></i>Ajouter
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        yield "    </div>
</div>

";
        // line 194
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 219
        yield "
<style>
    .subcategory-card {
        transition: all 0.3s;
        border-radius: 8px;
        overflow: hidden;
    }

    .subcategory-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .product-list-card {
        transition: all 0.3s;
    }

    .product-list-card:hover {
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
</style>
";
        yield from [];
    }

    // line 194
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 195
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
    // Changer de vue (grille/liste)
    const gridViewBtn = document.getElementById('gridViewBtn');
    const listViewBtn = document.getElementById('listViewBtn');
    const productsGrid = document.getElementById('products-grid');
    const productsList = document.getElementById('products-list');

    gridViewBtn.addEventListener('click', function() {
        productsGrid.classList.remove('d-none');
        productsList.classList.add('d-none');
        gridViewBtn.classList.add('active');
        listViewBtn.classList.remove('active');
    });

    listViewBtn.addEventListener('click', function() {
        productsGrid.classList.add('d-none');
        productsList.classList.remove('d-none');
        gridViewBtn.classList.remove('active');
        listViewBtn.classList.add('active');
    });
});
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "category/show.html.twig";
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
        return array (  504 => 195,  497 => 194,  471 => 219,  469 => 194,  464 => 191,  448 => 181,  444 => 180,  440 => 178,  436 => 176,  432 => 174,  430 => 173,  422 => 168,  416 => 164,  410 => 162,  405 => 160,  401 => 159,  396 => 158,  394 => 157,  388 => 154,  384 => 153,  376 => 147,  370 => 144,  367 => 143,  359 => 141,  357 => 140,  351 => 136,  347 => 135,  344 => 134,  340 => 131,  329 => 125,  327 => 124,  322 => 123,  312 => 117,  304 => 114,  299 => 113,  296 => 112,  294 => 111,  291 => 110,  286 => 109,  283 => 108,  252 => 79,  247 => 76,  244 => 74,  239 => 71,  228 => 65,  221 => 64,  219 => 63,  214 => 61,  211 => 60,  205 => 57,  202 => 56,  194 => 54,  192 => 53,  185 => 52,  183 => 51,  178 => 49,  175 => 48,  171 => 47,  166 => 45,  163 => 44,  160 => 43,  154 => 38,  148 => 35,  145 => 34,  137 => 32,  135 => 31,  128 => 30,  126 => 29,  122 => 27,  116 => 25,  114 => 24,  110 => 23,  105 => 20,  97 => 15,  89 => 13,  87 => 12,  83 => 11,  79 => 10,  75 => 8,  72 => 6,  65 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "category/show.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/category/show.html.twig");
    }
}
