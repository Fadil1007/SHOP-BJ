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

/* admin/products.html.twig */
class __TwigTemplate_8d0e137f6a25c46b8e741a0158643bbb extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/products.html.twig"));

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

        yield "Gestion des produits - Administration SHOP BJ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    .admin-menu {
        background: #f8f9fa;
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    .admin-menu a {
        display: block;
        padding: 8px 15px;
        margin-bottom: 5px;
        color: #495057;
        border-radius: 4px;
        text-decoration: none;
    }
    .admin-menu a:hover, .admin-menu a.active {
        background: #e9ecef;
        color: #007bff;
    }
    .admin-menu a i {
        width: 20px;
        text-align: center;
        margin-right: 8px;
    }
    .admin-header {
        background: linear-gradient(135deg, #0d6efd, #0dcaf0);
        color: white;
        padding: 20px;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    .admin-actions {
        margin-bottom: 20px;
    }
    .product-image {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 4px;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 51
        yield "<div class=\"container py-4\">
    <div class=\"admin-header\">
        <h1>Gestion des produits</h1>
        <p>Administration du catalogue de produits</p>
    </div>
    
    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"admin-menu\">
                <h5 class=\"mb-3\">Menu principal</h5>
                <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        yield "\"><i class=\"fa fa-home\"></i> Tableau de bord</a>
                <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products");
        yield "\" class=\"active\"><i class=\"fa fa-tshirt\"></i> Produits</a>
                <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories");
        yield "\"><i class=\"fa fa-list\"></i> Catégories</a>
                <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
        yield "\"><i class=\"fa fa-shopping-cart\"></i> Commandes</a>
                <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        yield "\"><i class=\"fa fa-users\"></i> Utilisateurs</a>
                <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"><i class=\"fa fa-arrow-left\"></i> Retour au site</a>
            </div>
        </div>
        
        <div class=\"col-md-9\">
            <div class=\"admin-actions d-flex justify-content-between\">
                <form class=\"d-flex\" method=\"get\">
                    <input class=\"form-control me-2\" type=\"search\" placeholder=\"Rechercher un produit\" name=\"search\" value=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "request", [], "any", false, false, false, 73), "query", [], "any", false, false, false, 73), "get", ["search"], "method", false, false, false, 73), "html", null, true);
        yield "\">
                    <button class=\"btn btn-outline-primary\" type=\"submit\">Rechercher</button>
                </form>
                <div>
                    <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_new");
        yield "\" class=\"btn btn-primary\">
                        <i class=\"fa fa-plus\"></i> Nouveau produit
                    </a>
                </div>
            </div>
            
            <div class=\"table-responsive\">
                <table class=\"table table-striped table-hover\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Nom</th>
                            <th>Catégorie</th>
                            <th>Prix</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 97, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 98
            yield "                            <tr>
                                <td>";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 99), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 101
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename", [], "any", false, false, false, 101)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 102
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename", [], "any", false, false, false, 102)), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 102), "html", null, true);
                yield "\" class=\"product-image\">
                                    ";
            } else {
                // line 104
                yield "                                        <div class=\"text-center\">-</div>
                                    ";
            }
            // line 106
            yield "                                </td>
                                <td>";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 107), "html", null, true);
            yield "</td>
                                <td>";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 108), "name", [], "any", false, false, false, 108), "html", null, true);
            yield "</td>
                                <td>";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 109), "XOF"), "html", null, true);
            yield "</td>
                                <td>";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 110), "html", null, true);
            yield "</td>
                                <td>
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 113)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a href=\"";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 116)]), "html", null, true);
            yield "\" class=\"btn btn-outline-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 122
        if (!$context['_iterated']) {
            // line 123
            yield "                            <tr>
                                <td colspan=\"7\" class=\"text-center\">Aucun produit trouvé</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        yield "                    </tbody>
                </table>
            </div>
            
            <div class=\"pagination d-flex justify-content-center\">
                ";
        // line 132
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 132, $this->source); })()));
        yield "
            </div>
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
        return "admin/products.html.twig";
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
        return array (  302 => 132,  295 => 127,  286 => 123,  284 => 122,  273 => 116,  267 => 113,  261 => 110,  257 => 109,  253 => 108,  249 => 107,  246 => 106,  242 => 104,  234 => 102,  232 => 101,  227 => 99,  224 => 98,  219 => 97,  196 => 77,  189 => 73,  179 => 66,  175 => 65,  171 => 64,  167 => 63,  163 => 62,  159 => 61,  147 => 51,  137 => 50,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des produits - Administration SHOP BJ{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .admin-menu {
        background: #f8f9fa;
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    .admin-menu a {
        display: block;
        padding: 8px 15px;
        margin-bottom: 5px;
        color: #495057;
        border-radius: 4px;
        text-decoration: none;
    }
    .admin-menu a:hover, .admin-menu a.active {
        background: #e9ecef;
        color: #007bff;
    }
    .admin-menu a i {
        width: 20px;
        text-align: center;
        margin-right: 8px;
    }
    .admin-header {
        background: linear-gradient(135deg, #0d6efd, #0dcaf0);
        color: white;
        padding: 20px;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    .admin-actions {
        margin-bottom: 20px;
    }
    .product-image {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 4px;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container py-4\">
    <div class=\"admin-header\">
        <h1>Gestion des produits</h1>
        <p>Administration du catalogue de produits</p>
    </div>
    
    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"admin-menu\">
                <h5 class=\"mb-3\">Menu principal</h5>
                <a href=\"{{ path('admin_index') }}\"><i class=\"fa fa-home\"></i> Tableau de bord</a>
                <a href=\"{{ path('admin_products') }}\" class=\"active\"><i class=\"fa fa-tshirt\"></i> Produits</a>
                <a href=\"{{ path('admin_categories') }}\"><i class=\"fa fa-list\"></i> Catégories</a>
                <a href=\"{{ path('admin_orders') }}\"><i class=\"fa fa-shopping-cart\"></i> Commandes</a>
                <a href=\"{{ path('admin_users') }}\"><i class=\"fa fa-users\"></i> Utilisateurs</a>
                <a href=\"{{ path('app_home') }}\"><i class=\"fa fa-arrow-left\"></i> Retour au site</a>
            </div>
        </div>
        
        <div class=\"col-md-9\">
            <div class=\"admin-actions d-flex justify-content-between\">
                <form class=\"d-flex\" method=\"get\">
                    <input class=\"form-control me-2\" type=\"search\" placeholder=\"Rechercher un produit\" name=\"search\" value=\"{{ app.request.query.get('search') }}\">
                    <button class=\"btn btn-outline-primary\" type=\"submit\">Rechercher</button>
                </form>
                <div>
                    <a href=\"{{ path('admin_product_new') }}\" class=\"btn btn-primary\">
                        <i class=\"fa fa-plus\"></i> Nouveau produit
                    </a>
                </div>
            </div>
            
            <div class=\"table-responsive\">
                <table class=\"table table-striped table-hover\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Nom</th>
                            <th>Catégorie</th>
                            <th>Prix</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for product in products %}
                            <tr>
                                <td>{{ product.id }}</td>
                                <td>
                                    {% if product.imageFilename %}
                                        <img src=\"{{ asset(product.imageFilename) }}\" alt=\"{{ product.name }}\" class=\"product-image\">
                                    {% else %}
                                        <div class=\"text-center\">-</div>
                                    {% endif %}
                                </td>
                                <td>{{ product.name }}</td>
                                <td>{{ product.category.name }}</td>
                                <td>{{ product.price|format_currency('XOF') }}</td>
                                <td>{{ product.stock }}</td>
                                <td>
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"{{ path('admin_product_edit', {'id': product.id}) }}\" class=\"btn btn-outline-primary\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a href=\"{{ path('admin_product_delete', {'id': product.id}) }}\" class=\"btn btn-outline-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"7\" class=\"text-center\">Aucun produit trouvé</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
            
            <div class=\"pagination d-flex justify-content-center\">
                {{ knp_pagination_render(products) }}
            </div>
        </div>
    </div>
</div>
{% endblock %}", "admin/products.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/admin/products.html.twig");
    }
}
