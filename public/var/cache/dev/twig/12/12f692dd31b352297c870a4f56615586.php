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
class __TwigTemplate_a257f09f509f7cb7d71eafabb0562d63 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        yield " - SHOP BJ";
        
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
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_list");
        yield "\">Catégories</a></li>
            ";
        // line 12
        if ((($tmp = (isset($context["parentCategory"]) || array_key_exists("parentCategory", $context) ? $context["parentCategory"] : (function () { throw new RuntimeError('Variable "parentCategory" does not exist.', 12, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "                <li class=\"breadcrumb-item\"><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["parentCategory"]) || array_key_exists("parentCategory", $context) ? $context["parentCategory"] : (function () { throw new RuntimeError('Variable "parentCategory" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parentCategory"]) || array_key_exists("parentCategory", $context) ? $context["parentCategory"] : (function () { throw new RuntimeError('Variable "parentCategory" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
            yield "</a></li>
            ";
        }
        // line 15
        yield "            <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), "html", null, true);
        yield "</h1>
                ";
        // line 24
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "                    <p class=\"lead\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), "html", null, true);
            yield "</p>
                ";
        }
        // line 27
        yield "            </div>
            <div class=\"col-md-6\">
                ";
        // line 29
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 29, $this->source); })()), "headerImageFilename", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 30, $this->source); })()), "headerImageFilename", [], "any", false, false, false, 30)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30), "html", null, true);
            yield "\" class=\"img-fluid rounded shadow\" style=\"height: 250px; width: 100%; object-fit: cover;\">
                ";
        } elseif (((        // line 31
array_key_exists("productWithImage", $context) && (isset($context["productWithImage"]) || array_key_exists("productWithImage", $context) ? $context["productWithImage"] : (function () { throw new RuntimeError('Variable "productWithImage" does not exist.', 31, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["productWithImage"]) || array_key_exists("productWithImage", $context) ? $context["productWithImage"] : (function () { throw new RuntimeError('Variable "productWithImage" does not exist.', 31, $this->source); })()), "imageFilename", [], "any", false, false, false, 31))) {
            // line 32
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["productWithImage"]) || array_key_exists("productWithImage", $context) ? $context["productWithImage"] : (function () { throw new RuntimeError('Variable "productWithImage" does not exist.', 32, $this->source); })()), "imageFilename", [], "any", false, false, false, 32)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32), "html", null, true);
            yield "\" class=\"img-fluid rounded shadow\" style=\"height: 250px; width: 100%; object-fit: cover;\">
                ";
        } else {
            // line 34
            yield "                    <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"height: 250px;\">
                        <span class=\"h3 text-center p-4\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 35, $this->source); })()), "name", [], "any", false, false, false, 35), "html", null, true);
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 43, $this->source); })()), "children", [], "any", false, false, false, 43)) > 0)) {
            // line 44
            yield "    <div class=\"subcategories-section mb-5\">
        <h3 class=\"mb-4\">Sous-catégories de ";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45), "html", null, true);
            yield "</h3>
        <div class=\"row\">
            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 47, $this->source); })()), "children", [], "any", false, false, false, 47));
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["productCount"]) || array_key_exists("productCount", $context) ? $context["productCount"] : (function () { throw new RuntimeError('Variable "productCount" does not exist.', 64, $this->source); })()), "html", null, true);
                yield " produit";
                if (((isset($context["productCount"]) || array_key_exists("productCount", $context) ? $context["productCount"] : (function () { throw new RuntimeError('Variable "productCount" does not exist.', 64, $this->source); })()) != 1)) {
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 79, $this->source); })())), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 109, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 110
            yield "            <div class=\"col-md-3 mb-4\">
                ";
            // line 111
            $context["firstImage"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename", [], "any", false, false, false, 111)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename", [], "any", false, false, false, 111)) : (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename2", [], "any", false, false, false, 111)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename2", [], "any", false, false, false, 111)) : (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename3", [], "any", false, false, false, 111)))));
            // line 112
            yield "                        ";
            if ((($tmp = (isset($context["firstImage"]) || array_key_exists("firstImage", $context) ? $context["firstImage"] : (function () { throw new RuntimeError('Variable "firstImage" does not exist.', 112, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 113
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 113)]), "html", null, true);
                yield "\">
                                <img src=\"";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["firstImage"]) || array_key_exists("firstImage", $context) ? $context["firstImage"] : (function () { throw new RuntimeError('Variable "firstImage" does not exist.', 114, $this->source); })())), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 135, $this->source); })()));
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 194
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  525 => 195,  515 => 194,  486 => 219,  484 => 194,  479 => 191,  463 => 181,  459 => 180,  455 => 178,  451 => 176,  447 => 174,  445 => 173,  437 => 168,  431 => 164,  425 => 162,  420 => 160,  416 => 159,  411 => 158,  409 => 157,  403 => 154,  399 => 153,  391 => 147,  385 => 144,  382 => 143,  374 => 141,  372 => 140,  366 => 136,  362 => 135,  359 => 134,  355 => 131,  344 => 125,  342 => 124,  337 => 123,  327 => 117,  319 => 114,  314 => 113,  311 => 112,  309 => 111,  306 => 110,  301 => 109,  298 => 108,  267 => 79,  262 => 76,  259 => 74,  254 => 71,  243 => 65,  236 => 64,  234 => 63,  229 => 61,  226 => 60,  220 => 57,  217 => 56,  209 => 54,  207 => 53,  200 => 52,  198 => 51,  193 => 49,  190 => 48,  186 => 47,  181 => 45,  178 => 44,  175 => 43,  169 => 38,  163 => 35,  160 => 34,  152 => 32,  150 => 31,  143 => 30,  141 => 29,  137 => 27,  131 => 25,  129 => 24,  125 => 23,  120 => 20,  112 => 15,  104 => 13,  102 => 12,  98 => 11,  94 => 10,  90 => 8,  87 => 6,  77 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ category.name }} - SHOP BJ{% endblock %}

{% block body %}
<div class=\"container my-5\">
    {# Fil d'Ariane #}
    <nav aria-label=\"breadcrumb\" class=\"mb-4\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
            <li class=\"breadcrumb-item\"><a href=\"{{ path('category_list') }}\">Catégories</a></li>
            {% if parentCategory %}
                <li class=\"breadcrumb-item\"><a href=\"{{ path('category_show', {'id': parentCategory.id}) }}\">{{ parentCategory.name }}</a></li>
            {% endif %}
            <li class=\"breadcrumb-item active\" aria-current=\"page\">{{ category.name }}</li>
        </ol>
    </nav>

    {# En-tête de la catégorie #}
    <div class=\"category-header mb-5\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-6\">
                <h1 class=\"mb-3\">{{ category.name }}</h1>
                {% if category.description %}
                    <p class=\"lead\">{{ category.description }}</p>
                {% endif %}
            </div>
            <div class=\"col-md-6\">
                {% if category.headerImageFilename %}
                    <img src=\"{{ asset(category.headerImageFilename) }}\" alt=\"{{ category.name }}\" class=\"img-fluid rounded shadow\" style=\"height: 250px; width: 100%; object-fit: cover;\">
                {% elseif productWithImage is defined and productWithImage and productWithImage.imageFilename %}
                    <img src=\"{{ asset(productWithImage.imageFilename) }}\" alt=\"{{ category.name }}\" class=\"img-fluid rounded shadow\" style=\"height: 250px; width: 100%; object-fit: cover;\">
                {% else %}
                    <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"height: 250px;\">
                        <span class=\"h3 text-center p-4\">{{ category.name }}</span>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>

    {# Affichage des sous-catégories si la catégorie courante a des enfants #}
    {% if category.children|length > 0 %}
    <div class=\"subcategories-section mb-5\">
        <h3 class=\"mb-4\">Sous-catégories de {{ category.name }}</h3>
        <div class=\"row\">
            {% for subcategory in category.children %}
                <div class=\"col-6 col-md-3 mb-4\">
                    <a href=\"{{ path('product_category_by_slug', {'slug': subcategory.slug}) }}\" class=\"text-decoration-none\">
                        <div class=\"subcategory-card card h-100 border-0 shadow-sm\">
                            {% if subcategory.imageFilename %}
                                <img src=\"{{ asset(subcategory.imageFilename) }}\" class=\"card-img-top\" alt=\"{{ subcategory.name }}\" style=\"height: 160px; object-fit: cover;\">
                            {% elseif subcategory.headerImageFilename %}
                                <img src=\"{{ asset(subcategory.headerImageFilename) }}\" class=\"card-img-top\" alt=\"{{ subcategory.name }}\" style=\"height: 160px; object-fit: cover;\">
                            {% else %}
                                <div class=\"card-img-top bg-light d-flex align-items-center justify-content-center\" style=\"height: 160px;\">
                                    <span class=\"text-center p-3\">{{ subcategory.name }}</span>
                                </div>
                            {% endif %}
                            <div class=\"card-body text-center\">
                                <h5 class=\"card-title\">{{ subcategory.name }}</h5>
                                <p class=\"card-text small text-muted\">
                                    {% set productCount = subcategory.products|length %}
                                    {{ productCount }} produit{% if productCount != 1 %}s{% endif %}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            {% endfor %}
        </div>
    </div>
    {% endif %}

    {# Filtres et Tri #}
    <div class=\"product-filters mb-4\">
        <div class=\"row g-3 align-items-center\">
            <div class=\"col-md-6\">
                <p class=\"mb-0\"><strong>{{ products|length }}</strong> produits trouvés</p>
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

    {# Liste des produits #}
    <div class=\"row\" id=\"products-grid\">
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
        {% else %}
            <div class=\"col-12\">
                <div class=\"alert alert-info text-center\">
                    <p class=\"mb-0\">Aucun produit trouvé dans cette catégorie.</p>
                </div>
            </div>
        {% endfor %}
    </div>

    {# Vue liste des produits (masquée par défaut) #}
    <div class=\"d-none\" id=\"products-list\">
        {% for product in products %}
            <div class=\"card mb-3 product-list-card\">
                <div class=\"row g-0\">
                    <div class=\"col-md-3\">
                        <div class=\"h-100\">
                            {% if product.imageFilename %}
                                <img src=\"{{ asset(product.imageFilename) }}\" alt=\"{{ product.name }}\" class=\"img-fluid rounded-start h-100\" style=\"object-fit: cover;\">
                            {% else %}
                                <div class=\"h-100 d-flex align-items-center justify-content-center bg-light rounded-start\">
                                    <span class=\"text-center p-3\">{{ product.name }}</span>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"col-md-9\">
                        <div class=\"card-body\">
                            <div class=\"d-flex justify-content-between align-items-start\">
                                <div>
                                    <h5 class=\"card-title\">{{ product.name }}</h5>
                                    <p class=\"card-text text-muted small\">{{ product.category.name }}</p>
                                </div>
                                <div class=\"product-price text-end\">
                                    {% if product.onSale and product.oldPrice %}
                                        <div class=\"old-price text-muted text-decoration-line-through\">{{ product.oldPrice|number_format(2, ',', ' ') }} €</div>
                                        <div class=\"price text-primary fw-bold\">{{ product.price|number_format(2, ',', ' ') }} €</div>
                                        <span class=\"badge bg-danger\">-{{ product.discountPercentage }}%</span>
                                    {% else %}
                                        <div class=\"price text-primary fw-bold\">{{ product.price|number_format(2, ',', ' ') }} €</div>
                                    {% endif %}
                                </div>
                            </div>

                            <p class=\"card-text mt-2\">
                                {{ product.shortDescription|slice(0, 150) ~ (product.shortDescription|length > 150 ? '...' : '') }}
                            </p>

                            <div class=\"d-flex justify-content-between align-items-center mt-3\">
                                <div>
                                    {% if product.stock > 0 %}
                                        <span class=\"text-success\"><i class=\"fas fa-check-circle me-1\"></i>En stock</span>
                                    {% else %}
                                        <span class=\"text-danger\"><i class=\"fas fa-times-circle me-1\"></i>Rupture de stock</span>
                                    {% endif %}
                                </div>
                                <div>
                                    <a href=\"{{ path('product_show', {'id': product.id}) }}\" class=\"btn btn-outline-primary btn-sm me-2\">Détails</a>
                                    <button class=\"btn btn-primary btn-sm add-to-cart\" data-product-id=\"{{ product.id }}\">
                                        <i class=\"fas fa-shopping-cart me-1\"></i>Ajouter
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
</div>

{% block javascripts %}
<script>
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
{% endblock %}

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
{% endblock %}", "category/show.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/category/show.html.twig");
    }
}
