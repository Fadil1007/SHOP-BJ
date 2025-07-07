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

/* admin/category_delete.html.twig */
class __TwigTemplate_e3c59429ba7e7a463349f7eb08d53f94 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category_delete.html.twig"));

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

        yield "Supprimer une catégorie - Administration SHOP BJ";
        
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
        background: linear-gradient(135deg, #dc3545, #ff6b6b);
        color: white;
        padding: 20px;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    .category-image {
        max-width: 150px;
        max-height: 150px;
        object-fit: contain;
        border-radius: 5px;
        margin-bottom: 15px;
    }
    .delete-warning {
        color: #dc3545;
        font-weight: bold;
        margin-bottom: 20px;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 54
        yield "<div class=\"container py-4\">
    <div class=\"admin-header\">
        <h1>Supprimer une catégorie</h1>
        <p>Attention : cette action est irréversible</p>
    </div>
    
    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"admin-menu\">
                <h5 class=\"mb-3\">Menu principal</h5>
                <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        yield "\"><i class=\"fa fa-home\"></i> Tableau de bord</a>
                <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products");
        yield "\"><i class=\"fa fa-tshirt\"></i> Produits</a>
                <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories");
        yield "\" class=\"active\"><i class=\"fa fa-list\"></i> Catégories</a>
                <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
        yield "\"><i class=\"fa fa-shopping-cart\"></i> Commandes</a>
                <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        yield "\"><i class=\"fa fa-users\"></i> Utilisateurs</a>
                <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"><i class=\"fa fa-arrow-left\"></i> Retour au site</a>
            </div>
        </div>
        
        <div class=\"col-md-9\">
            <div class=\"card\">
                <div class=\"card-body text-center\">
                    <h4 class=\"card-title mb-4\">Êtes-vous sûr de vouloir supprimer la catégorie suivante ?</h4>
                    
                    ";
        // line 78
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 78, $this->source); })()), "imageFilename", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 79
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['App\Twig\AssetVersionExtension']->normalizeAssetPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 79, $this->source); })()), "imageFilename", [], "any", false, false, false, 79))), "html", null, true);
            yield "?v=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 79, $this->source); })()), "name", [], "any", false, false, false, 79), "html", null, true);
            yield "\" class=\"category-image\">
                        <div class=\"mt-2 text-muted small\">
                            <em>";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 81, $this->source); })()), "imageFilename", [], "any", false, false, false, 81), "html", null, true);
            yield "</em>
                        </div>
                    ";
        }
        // line 84
        yield "                    
                    <h5>";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 85, $this->source); })()), "name", [], "any", false, false, false, 85), "html", null, true);
        yield "</h5>
                    ";
        // line 86
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 86, $this->source); })()), "products", [], "any", false, false, false, 86)) > 0)) {
            // line 87
            yield "                        <p class=\"text-danger\">Cette catégorie contient ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 87, $this->source); })()), "products", [], "any", false, false, false, 87)), "html", null, true);
            yield " produits.</p>
                    ";
        }
        // line 89
        yield "                    
                    <div class=\"delete-warning mt-4\">
                        <p>
                            Cette action supprimera définitivement cette catégorie de la base de données.
                            ";
        // line 93
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 93, $this->source); })()), "products", [], "any", false, false, false, 93)) > 0)) {
            // line 94
            yield "                                <strong>ATTENTION : Tous les produits associés à cette catégorie seront supprimés également.</strong>
                            ";
        }
        // line 96
        yield "                        </p>
                    </div>
                    
                    <form method=\"post\" class=\"d-inline\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 100, $this->source); })()), "id", [], "any", false, false, false, 100))), "html", null, true);
        yield "\">
                        <div class=\"d-flex justify-content-center mt-4\">
                            <a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories");
        yield "\" class=\"btn btn-secondary me-2\">
                                <i class=\"fa fa-times\"></i> Annuler
                            </a>
                            <button type=\"submit\" class=\"btn btn-danger\">
                                <i class=\"fa fa-trash\"></i> Confirmer la suppression
                            </button>
                        </div>
                    </form>
                </div>
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
        return "admin/category_delete.html.twig";
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
        return array (  250 => 102,  245 => 100,  239 => 96,  235 => 94,  233 => 93,  227 => 89,  221 => 87,  219 => 86,  215 => 85,  212 => 84,  206 => 81,  196 => 79,  194 => 78,  182 => 69,  178 => 68,  174 => 67,  170 => 66,  166 => 65,  162 => 64,  150 => 54,  140 => 53,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Supprimer une catégorie - Administration SHOP BJ{% endblock %}

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
        background: linear-gradient(135deg, #dc3545, #ff6b6b);
        color: white;
        padding: 20px;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    .category-image {
        max-width: 150px;
        max-height: 150px;
        object-fit: contain;
        border-radius: 5px;
        margin-bottom: 15px;
    }
    .delete-warning {
        color: #dc3545;
        font-weight: bold;
        margin-bottom: 20px;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container py-4\">
    <div class=\"admin-header\">
        <h1>Supprimer une catégorie</h1>
        <p>Attention : cette action est irréversible</p>
    </div>
    
    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"admin-menu\">
                <h5 class=\"mb-3\">Menu principal</h5>
                <a href=\"{{ path('admin_index') }}\"><i class=\"fa fa-home\"></i> Tableau de bord</a>
                <a href=\"{{ path('admin_products') }}\"><i class=\"fa fa-tshirt\"></i> Produits</a>
                <a href=\"{{ path('admin_categories') }}\" class=\"active\"><i class=\"fa fa-list\"></i> Catégories</a>
                <a href=\"{{ path('admin_orders') }}\"><i class=\"fa fa-shopping-cart\"></i> Commandes</a>
                <a href=\"{{ path('admin_users') }}\"><i class=\"fa fa-users\"></i> Utilisateurs</a>
                <a href=\"{{ path('app_home') }}\"><i class=\"fa fa-arrow-left\"></i> Retour au site</a>
            </div>
        </div>
        
        <div class=\"col-md-9\">
            <div class=\"card\">
                <div class=\"card-body text-center\">
                    <h4 class=\"card-title mb-4\">Êtes-vous sûr de vouloir supprimer la catégorie suivante ?</h4>
                    
                    {% if category.imageFilename %}
                        <img src=\"{{ asset(normalize_asset_path(category.imageFilename)) }}?v={{ random() }}\" alt=\"{{ category.name }}\" class=\"category-image\">
                        <div class=\"mt-2 text-muted small\">
                            <em>{{ category.imageFilename }}</em>
                        </div>
                    {% endif %}
                    
                    <h5>{{ category.name }}</h5>
                    {% if category.products|length > 0 %}
                        <p class=\"text-danger\">Cette catégorie contient {{ category.products|length }} produits.</p>
                    {% endif %}
                    
                    <div class=\"delete-warning mt-4\">
                        <p>
                            Cette action supprimera définitivement cette catégorie de la base de données.
                            {% if category.products|length > 0 %}
                                <strong>ATTENTION : Tous les produits associés à cette catégorie seront supprimés également.</strong>
                            {% endif %}
                        </p>
                    </div>
                    
                    <form method=\"post\" class=\"d-inline\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ category.id) }}\">
                        <div class=\"d-flex justify-content-center mt-4\">
                            <a href=\"{{ path('admin_categories') }}\" class=\"btn btn-secondary me-2\">
                                <i class=\"fa fa-times\"></i> Annuler
                            </a>
                            <button type=\"submit\" class=\"btn btn-danger\">
                                <i class=\"fa fa-trash\"></i> Confirmer la suppression
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "admin/category_delete.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/admin/category_delete.html.twig");
    }
}
