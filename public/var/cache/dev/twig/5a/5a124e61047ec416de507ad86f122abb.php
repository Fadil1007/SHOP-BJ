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

/* admin/categories.html.twig */
class __TwigTemplate_7f7d23879e510b57ee7f334a4ad45b01 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categories.html.twig"));

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

        yield "Gestion des catégories - Administration SHOP BJ";
        
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
    .category-icon {
        width: 30px;
        height: 30px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #e9ecef;
        border-radius: 50%;
        margin-right: 8px;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 55
        yield "<div class=\"container py-4\">
    <div class=\"admin-header\">
        <h1>Gestion des catégories</h1>
        <p>Administration des catégories de produits</p>
    </div>
    
    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"admin-menu\">
                <h5 class=\"mb-3\">Menu principal</h5>
                <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        yield "\"><i class=\"fa fa-home\"></i> Tableau de bord</a>
                <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products");
        yield "\"><i class=\"fa fa-tshirt\"></i> Produits</a>
                <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories");
        yield "\" class=\"active\"><i class=\"fa fa-list\"></i> Catégories</a>
                <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
        yield "\"><i class=\"fa fa-shopping-cart\"></i> Commandes</a>
                <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        yield "\"><i class=\"fa fa-users\"></i> Utilisateurs</a>
                <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"><i class=\"fa fa-arrow-left\"></i> Retour au site</a>
            </div>
        </div>
        
        <div class=\"col-md-9\">
            <div class=\"admin-actions d-flex justify-content-between\">
                <form class=\"d-flex\" method=\"get\">
                    <input class=\"form-control me-2\" type=\"search\" placeholder=\"Rechercher une catégorie\" name=\"search\" value=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "request", [], "any", false, false, false, 77), "query", [], "any", false, false, false, 77), "get", ["search"], "method", false, false, false, 77), "html", null, true);
        yield "\">
                    <button class=\"btn btn-outline-primary\" type=\"submit\">Rechercher</button>
                </form>
                <div>
                    <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_new");
        yield "\" class=\"btn btn-primary\">
                        <i class=\"fa fa-plus\"></i> Nouvelle catégorie
                    </a>
                </div>
            </div>
            
            <div class=\"table-responsive\">
                <table class=\"table table-striped table-hover\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Miniature</th>
                            <th>Image d'en-tête</th>
                            <th>Nom</th>
                            <th>Slug</th>
                            <th>Mis en avant</th>
                            <th>Produits</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 102, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 103
            yield "                            <tr>
                                <td>";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 104), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 106
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "imageFilename", [], "any", false, false, false, 106)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 107
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['App\Twig\AssetVersionExtension']->normalizeAssetPath(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "imageFilename", [], "any", false, false, false, 107))), "html", null, true);
                yield "?v=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 107), "html", null, true);
                yield "\" style=\"width: 50px; height: 50px; object-fit: cover; border-radius: 4px;\" title=\"Miniature de la catégorie\" />
                                    ";
            } else {
                // line 109
                yield "                                        <div style=\"width: 50px; height: 50px; background-color: #f5f5f5; border-radius: 4px; display: flex; align-items: center; justify-content: center;\" title=\"Aucune miniature\">
                                            <i class=\"fa fa-image text-muted\"></i>
                                        </div>
                                    ";
            }
            // line 113
            yield "                                </td>
                                <td>
                                    ";
            // line 115
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "headerImageFilename", [], "any", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 116
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['App\Twig\AssetVersionExtension']->normalizeAssetPath(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "headerImageFilename", [], "any", false, false, false, 116))), "html", null, true);
                yield "?v=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 116), "html", null, true);
                yield " - En-tête\" style=\"width: 80px; height: 40px; object-fit: cover; border-radius: 4px;\" title=\"Image d'en-tête\" />
                                    ";
            } else {
                // line 118
                yield "                                        <div style=\"width: 80px; height: 40px; background-color: #f5f5f5; border-radius: 4px; display: flex; align-items: center; justify-content: center;\" title=\"Aucune image d'en-tête\">
                                            <i class=\"fa fa-image text-muted\"></i>
                                        </div>
                                    ";
            }
            // line 122
            yield "                                </td>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        <span class=\"category-icon\">
                                            <i class=\"fa fa-";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "icon", [], "any", true, true, false, 126)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "icon", [], "any", false, false, false, 126), "folder")) : ("folder")), "html", null, true);
            yield "\"></i>
                                        </span>
                                        ";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 128), "html", null, true);
            yield "
                                    </div>
                                </td>
                                <td>";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 131), "html", null, true);
            yield "</td>
                                <td class=\"text-center\">
                                    ";
            // line 133
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "featured", [], "any", false, false, false, 133)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 134
                yield "                                        <span class=\"badge bg-success\"><i class=\"fa fa-check\"></i> Oui</span>
                                    ";
            } else {
                // line 136
                yield "                                        <span class=\"badge bg-secondary\"><i class=\"fa fa-times\"></i> Non</span>
                                    ";
            }
            // line 138
            yield "                                </td>
                                <td>";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 139)), "html", null, true);
            yield "</td>
                                <td>
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 142)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary\" title=\"Modifier la catégorie\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a href=\"";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 145)]), "html", null, true);
            yield "\" class=\"btn btn-outline-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?')\" title=\"Supprimer la catégorie\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 151
        if (!$context['_iterated']) {
            // line 152
            yield "                            <tr>
                                <td colspan=\"8\" class=\"text-center\">Aucune catégorie trouvée</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        yield "                    </tbody>
                </table>
            </div>
            
            <div class=\"pagination d-flex justify-content-center\">
                ";
        // line 161
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 161, $this->source); })()));
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
        return "admin/categories.html.twig";
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
        return array (  353 => 161,  346 => 156,  337 => 152,  335 => 151,  324 => 145,  318 => 142,  312 => 139,  309 => 138,  305 => 136,  301 => 134,  299 => 133,  294 => 131,  288 => 128,  283 => 126,  277 => 122,  271 => 118,  261 => 116,  259 => 115,  255 => 113,  249 => 109,  239 => 107,  237 => 106,  232 => 104,  229 => 103,  224 => 102,  200 => 81,  193 => 77,  183 => 70,  179 => 69,  175 => 68,  171 => 67,  167 => 66,  163 => 65,  151 => 55,  141 => 54,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des catégories - Administration SHOP BJ{% endblock %}

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
    .category-icon {
        width: 30px;
        height: 30px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #e9ecef;
        border-radius: 50%;
        margin-right: 8px;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container py-4\">
    <div class=\"admin-header\">
        <h1>Gestion des catégories</h1>
        <p>Administration des catégories de produits</p>
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
            <div class=\"admin-actions d-flex justify-content-between\">
                <form class=\"d-flex\" method=\"get\">
                    <input class=\"form-control me-2\" type=\"search\" placeholder=\"Rechercher une catégorie\" name=\"search\" value=\"{{ app.request.query.get('search') }}\">
                    <button class=\"btn btn-outline-primary\" type=\"submit\">Rechercher</button>
                </form>
                <div>
                    <a href=\"{{ path('admin_category_new') }}\" class=\"btn btn-primary\">
                        <i class=\"fa fa-plus\"></i> Nouvelle catégorie
                    </a>
                </div>
            </div>
            
            <div class=\"table-responsive\">
                <table class=\"table table-striped table-hover\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Miniature</th>
                            <th>Image d'en-tête</th>
                            <th>Nom</th>
                            <th>Slug</th>
                            <th>Mis en avant</th>
                            <th>Produits</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for category in categories %}
                            <tr>
                                <td>{{ category.id }}</td>
                                <td>
                                    {% if category.imageFilename %}
                                        <img src=\"{{ asset(normalize_asset_path(category.imageFilename)) }}?v={{ random() }}\" alt=\"{{ category.name }}\" style=\"width: 50px; height: 50px; object-fit: cover; border-radius: 4px;\" title=\"Miniature de la catégorie\" />
                                    {% else %}
                                        <div style=\"width: 50px; height: 50px; background-color: #f5f5f5; border-radius: 4px; display: flex; align-items: center; justify-content: center;\" title=\"Aucune miniature\">
                                            <i class=\"fa fa-image text-muted\"></i>
                                        </div>
                                    {% endif %}
                                </td>
                                <td>
                                    {% if category.headerImageFilename %}
                                        <img src=\"{{ asset(normalize_asset_path(category.headerImageFilename)) }}?v={{ random() }}\" alt=\"{{ category.name }} - En-tête\" style=\"width: 80px; height: 40px; object-fit: cover; border-radius: 4px;\" title=\"Image d'en-tête\" />
                                    {% else %}
                                        <div style=\"width: 80px; height: 40px; background-color: #f5f5f5; border-radius: 4px; display: flex; align-items: center; justify-content: center;\" title=\"Aucune image d'en-tête\">
                                            <i class=\"fa fa-image text-muted\"></i>
                                        </div>
                                    {% endif %}
                                </td>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        <span class=\"category-icon\">
                                            <i class=\"fa fa-{{ category.icon|default('folder') }}\"></i>
                                        </span>
                                        {{ category.name }}
                                    </div>
                                </td>
                                <td>{{ category.slug }}</td>
                                <td class=\"text-center\">
                                    {% if category.featured %}
                                        <span class=\"badge bg-success\"><i class=\"fa fa-check\"></i> Oui</span>
                                    {% else %}
                                        <span class=\"badge bg-secondary\"><i class=\"fa fa-times\"></i> Non</span>
                                    {% endif %}
                                </td>
                                <td>{{ category.products|length }}</td>
                                <td>
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"{{ path('admin_category_edit', {'id': category.id}) }}\" class=\"btn btn-outline-primary\" title=\"Modifier la catégorie\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a href=\"{{ path('admin_category_delete', {'id': category.id}) }}\" class=\"btn btn-outline-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?')\" title=\"Supprimer la catégorie\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"8\" class=\"text-center\">Aucune catégorie trouvée</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
            
            <div class=\"pagination d-flex justify-content-center\">
                {{ knp_pagination_render(categories) }}
            </div>
        </div>
    </div>
</div>
{% endblock %}", "admin/categories.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/admin/categories.html.twig");
    }
}
