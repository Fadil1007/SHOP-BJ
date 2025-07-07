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

/* admin/category_form.html.twig */
class __TwigTemplate_bc04babeacfba543b348ded98c7cd848 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category_form.html.twig"));

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

        yield (((($tmp = (isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 3, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Ajouter"));
        yield " une catégorie - Administration SHOP BJ";
        
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
    .help-text {
        font-size: 0.8rem;
        color: #6c757d;
        margin-top: 5px;
    }
    .category-preview-img {
        max-width: 200px;
        max-height: 200px;
        object-fit: contain;
        margin-top: 10px;
        border: 1px solid #dee2e6;
        border-radius: 5px;
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
        <h1>";
        // line 57
        yield (((($tmp = (isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 57, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Ajouter"));
        yield " une catégorie</h1>
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
            <div class=\"card\">
                <div class=\"card-body\">
                    ";
        // line 77
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate", "enctype" => "multipart/form-data"]]);
        yield "
                    ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'errors');
        yield "
                    
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "name", [], "any", false, false, false, 82), 'row');
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "slug", [], "any", false, false, false, 85), 'row');
        yield "
                        </div>
                    </div>
                    
                    <div class=\"row mb-3\">
                        <div class=\"col-md-12\">
                            ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "description", [], "any", false, false, false, 91), 'row');
        yield "
                        </div>
                    </div>
                    
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "parent", [], "any", false, false, false, 97), 'row');
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"card\">
                                <div class=\"card-header bg-primary text-white\">
                                    <h6 class=\"mb-0\"><i class=\"fa fa-image\"></i> Image de la catégorie</h6>
                                </div>
                                <div class=\"card-body\">
                                    ";
        // line 105
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 105, $this->source); })()), "imageFilename", [], "any", false, false, false, 105)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 106
            yield "                                        <div class=\"text-center mb-3\">
                                            <img src=\"";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['App\Twig\AssetVersionExtension']->normalizeAssetPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 107, $this->source); })()), "imageFilename", [], "any", false, false, false, 107))), "html", null, true);
            yield "?v=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 107, $this->source); })()), "name", [], "any", false, false, false, 107), "html", null, true);
            yield "\" class=\"category-preview-img img-fluid rounded\" style=\"max-height: 200px;\">
                                            <div class=\"mt-2 text-muted small\">
                                                <strong>Image actuelle :</strong> ";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 109, $this->source); })()), "imageFilename", [], "any", false, false, false, 109), "html", null, true);
            yield "
                                            </div>
                                        </div>
                                        <hr>
                                    ";
        }
        // line 114
        yield "                                    
                                    <div class=\"form-group\">
                                        <div class=\"mb-2\">
                                            <label class=\"form-label fw-bold\">";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "imageFile", [], "any", false, false, false, 117), 'label');
        yield "</label>
                                            ";
        // line 118
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 118, $this->source); })()), "imageFilename", [], "any", false, false, false, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 119
            yield "                                                <div class=\"text-muted small mb-2\">
                                                    <i class=\"fa fa-info-circle\"></i> Laissez ce champ vide pour conserver l'image actuelle
                                                </div>
                                            ";
        }
        // line 123
        yield "                                        </div>
                                        
                                        ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "imageFile", [], "any", false, false, false, 125), 'widget', ["attr" => ["class" => "form-control file-input"]]);
        yield "
                                        ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "imageFile", [], "any", false, false, false, 126), 'errors');
        yield "
                                        
                                        <div class=\"help-text text-muted mt-2 small\">
                                            <ul class=\"mb-0 ps-3\">
                                                <li>Formats acceptés : JPG, PNG, WEBP</li>
                                                <li>Taille maximale : 2 Mo</li>
                                                <li>Dimensions recommandées : 800x600 pixels</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"row mb-4\">
                        <div class=\"col-md-12\">
                            <div class=\"card mb-4\">
                                <div class=\"card-header bg-primary text-white\">
                                    <h6 class=\"mb-0\"><i class=\"fa fa-image\"></i> Image d'en-tête de la catégorie</h6>
                                </div>
                                <div class=\"card-body\">
                                    ";
        // line 148
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 148, $this->source); })()), "headerImageFilename", [], "any", false, false, false, 148)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 149
            yield "                                        <div class=\"text-center mb-3\">
                                            <img src=\"";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['App\Twig\AssetVersionExtension']->normalizeAssetPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 150, $this->source); })()), "headerImageFilename", [], "any", false, false, false, 150))), "html", null, true);
            yield "?v=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 150, $this->source); })()), "name", [], "any", false, false, false, 150), "html", null, true);
            yield " - En-tête\" class=\"category-preview-img img-fluid rounded\" style=\"max-height: 200px; max-width: 100%;\">
                                            <div class=\"mt-2 text-muted small\">
                                                <strong>Image d'en-tête actuelle :</strong> ";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 152, $this->source); })()), "headerImageFilename", [], "any", false, false, false, 152), "html", null, true);
            yield "
                                            </div>
                                        </div>
                                        <hr>
                                    ";
        }
        // line 157
        yield "                                    
                                    <div class=\"form-group\">
                                        <div class=\"mb-2\">
                                            ";
        // line 160
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "headerImageFile", [], "any", true, true, false, 160)) {
            // line 161
            yield "                                                <label class=\"form-label fw-bold\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "headerImageFile", [], "any", false, false, false, 161), 'label');
            yield "</label>
                                                ";
            // line 162
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 162, $this->source); })()), "headerImageFilename", [], "any", false, false, false, 162)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 163
                yield "                                                    <div class=\"text-muted small mb-2\">
                                                        <i class=\"fa fa-info-circle\"></i> Laissez ce champ vide pour conserver l'image actuelle
                                                    </div>
                                                ";
            }
            // line 167
            yield "                                            ";
        }
        // line 168
        yield "                                        </div>
                                        
                                        ";
        // line 170
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "headerImageFile", [], "any", true, true, false, 170)) {
            // line 171
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "headerImageFile", [], "any", false, false, false, 171), 'widget', ["attr" => ["class" => "form-control header-file-input"]]);
            yield "
                                            ";
            // line 172
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "headerImageFile", [], "any", false, false, false, 172), 'errors');
            yield "
                                        ";
        }
        // line 174
        yield "                                        
                                        <div class=\"help-text text-muted mt-2 small\">
                                            <ul class=\"mb-0 ps-3\">
                                                <li>Formats acceptés : JPG, PNG, WEBP</li>
                                                <li>Taille maximale : 2 Mo</li>
                                                <li>Dimensions recommandées : 1200x400 pixels (bannière horizontale)</li>
                                                <li>Cette image sera affichée en haut de la page de catégorie</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"card\">
                                <div class=\"card-header bg-primary text-white\">
                                    <h6 class=\"mb-0\"><i class=\"fa fa-star\"></i> Options d'affichage</h6>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"form-check form-switch\">
                                        ";
        // line 193
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "featured", [], "any", false, false, false, 193), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
                                        <label class=\"form-check-label\" for=\"";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "featured", [], "any", false, false, false, 194), "vars", [], "any", false, false, false, 194), "id", [], "any", false, false, false, 194), "html", null, true);
        yield "\">
                                            ";
        // line 195
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "featured", [], "any", false, false, false, 195), 'label');
        yield "
                                        </label>
                                        <div class=\"text-muted small mt-1\">
                                            <i class=\"fa fa-info-circle\"></i> Les catégories mises en avant apparaissent sur la page d'accueil dans la section \"Découvrez nos catégories\"
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"d-flex justify-content-between\">
                        <a href=\"";
        // line 207
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories");
        yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fa fa-arrow-left\"></i> Retour à la liste
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fa ";
        // line 211
        yield (((($tmp = (isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 211, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-save") : ("fa-plus"));
        yield "\"></i> 
                            ";
        // line 212
        yield (((($tmp = (isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 212, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Enregistrer les modifications") : ("Ajouter la catégorie"));
        yield "
                        </button>
                    </div>
                    
                    ";
        // line 216
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), 'rest');
        yield "
                    ";
        // line 217
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 225
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 226
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    // Fonction générique pour la prévisualisation d'images
    function setupImagePreview(inputSelector, previewContainerClass) {
        const imageFileInput = document.querySelector(inputSelector);
        if (imageFileInput) {
            imageFileInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    // Créer un conteneur de prévisualisation s'il n'existe pas
                    let previewContainer = imageFileInput.closest('.card-body').querySelector('.' + previewContainerClass);
                    
                    if (!previewContainer) {
                        // Si l'image actuelle existe, ajouter la prévisualisation après celle-ci
                        const existingHr = imageFileInput.closest('.card-body').querySelector('hr');
                        let insertAfterElement;
                        
                        if (existingHr) {
                            // Insérer après le hr
                            insertAfterElement = existingHr;
                        } else {
                            // Insérer après le titre du formulaire
                            insertAfterElement = imageFileInput.closest('.form-group').querySelector('.form-label.fw-bold');
                        }
                        
                        previewContainer = document.createElement('div');
                        previewContainer.className = previewContainerClass + ' mt-3';
                        
                        if (insertAfterElement) {
                            insertAfterElement.after(previewContainer);
                        } else {
                            // Fallback: insérer après l'input
                            imageFileInput.parentNode.appendChild(previewContainer);
                        }
                        
                        // Créer la structure
                        previewContainer.innerHTML = `
                            <div class=\"alert alert-info\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fa fa-eye me-2\"></i>
                                    <strong>Aperçu de la nouvelle image</strong>
                                </div>
                                <div class=\"text-center p-2 bg-light rounded\">
                                    <img src=\"\" class=\"preview-image img-fluid rounded\" alt=\"Aperçu\" style=\"max-height: 200px;\">
                                    <div class=\"mt-2 text-muted small\">
                                        <span class=\"file-info\"></span>
                                    </div>
                                </div>
                                <div class=\"mt-2 small text-muted\">
                                    <i class=\"fa fa-info-circle\"></i> Cette image remplacera l'image actuelle après l'enregistrement
                                </div>
                            </div>
                        `;
                    }
                    
                    // Mise à jour de l'aperçu
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        const previewImg = previewContainer.querySelector('.preview-image');
                        const fileInfo = previewContainer.querySelector('.file-info');
                        
                        previewImg.src = event.target.result;
                        fileInfo.textContent = `\${file.name} - \${(file.size / 1024).toFixed(2)} Ko`;
                    };
                    reader.readAsDataURL(file);
                } else {
                    // Si aucun fichier n'est sélectionné, supprimer la prévisualisation
                    const previewContainer = imageFileInput.closest('.card-body').querySelector('.' + previewContainerClass);
                    if (previewContainer) {
                        previewContainer.remove();
                    }
                }
            });
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Prévisualisation de l'image principale
        setupImagePreview('.file-input', 'image-preview-container');
        
        // Prévisualisation de l'image d'en-tête
        setupImagePreview('.header-file-input', 'header-image-preview-container');
        
        // Génération automatique du slug
        const nameInput = document.querySelector('input[name\$=\"[name]\"]');
        const slugInput = document.querySelector('input[name\$=\"[slug]\"]');
        
        if (nameInput && slugInput) {
            nameInput.addEventListener('input', function() {
                // Si le champ slug est vide, générer automatiquement à partir du nom
                if (!slugInput.value) {
                    // Convertir le nom en slug (minuscules, remplacer les espaces par des tirets, supprimer les caractères spéciaux)
                    let slug = nameInput.value.toLowerCase()
                        .replace(/[^\\w\\s-]/g, '') // Supprimer les caractères spéciaux
                        .replace(/\\s+/g, '-')     // Remplacer les espaces par des tirets
                        .replace(/--+/g, '-');    // Remplacer les multiples tirets par un seul
                    
                    slugInput.value = slug;
                }
            });
        }
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
        return "admin/category_form.html.twig";
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
        return array (  468 => 226,  458 => 225,  443 => 217,  439 => 216,  432 => 212,  428 => 211,  421 => 207,  406 => 195,  402 => 194,  398 => 193,  377 => 174,  372 => 172,  367 => 171,  365 => 170,  361 => 168,  358 => 167,  352 => 163,  350 => 162,  345 => 161,  343 => 160,  338 => 157,  330 => 152,  321 => 150,  318 => 149,  316 => 148,  291 => 126,  287 => 125,  283 => 123,  277 => 119,  275 => 118,  271 => 117,  266 => 114,  258 => 109,  249 => 107,  246 => 106,  244 => 105,  233 => 97,  224 => 91,  215 => 85,  209 => 82,  202 => 78,  198 => 77,  188 => 70,  184 => 69,  180 => 68,  176 => 67,  172 => 66,  168 => 65,  157 => 57,  153 => 55,  143 => 54,  88 => 6,  78 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ editMode ? 'Modifier' : 'Ajouter' }} une catégorie - Administration SHOP BJ{% endblock %}

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
    .help-text {
        font-size: 0.8rem;
        color: #6c757d;
        margin-top: 5px;
    }
    .category-preview-img {
        max-width: 200px;
        max-height: 200px;
        object-fit: contain;
        margin-top: 10px;
        border: 1px solid #dee2e6;
        border-radius: 5px;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container py-4\">
    <div class=\"admin-header\">
        <h1>{{ editMode ? 'Modifier' : 'Ajouter' }} une catégorie</h1>
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
            <div class=\"card\">
                <div class=\"card-body\">
                    {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate', 'enctype': 'multipart/form-data'}}) }}
                    {{ form_errors(form) }}
                    
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            {{ form_row(form.name) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.slug) }}
                        </div>
                    </div>
                    
                    <div class=\"row mb-3\">
                        <div class=\"col-md-12\">
                            {{ form_row(form.description) }}
                        </div>
                    </div>
                    
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            {{ form_row(form.parent) }}
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"card\">
                                <div class=\"card-header bg-primary text-white\">
                                    <h6 class=\"mb-0\"><i class=\"fa fa-image\"></i> Image de la catégorie</h6>
                                </div>
                                <div class=\"card-body\">
                                    {% if category.imageFilename %}
                                        <div class=\"text-center mb-3\">
                                            <img src=\"{{ asset(normalize_asset_path(category.imageFilename)) }}?v={{ random() }}\" alt=\"{{ category.name }}\" class=\"category-preview-img img-fluid rounded\" style=\"max-height: 200px;\">
                                            <div class=\"mt-2 text-muted small\">
                                                <strong>Image actuelle :</strong> {{ category.imageFilename }}
                                            </div>
                                        </div>
                                        <hr>
                                    {% endif %}
                                    
                                    <div class=\"form-group\">
                                        <div class=\"mb-2\">
                                            <label class=\"form-label fw-bold\">{{ form_label(form.imageFile) }}</label>
                                            {% if category.imageFilename %}
                                                <div class=\"text-muted small mb-2\">
                                                    <i class=\"fa fa-info-circle\"></i> Laissez ce champ vide pour conserver l'image actuelle
                                                </div>
                                            {% endif %}
                                        </div>
                                        
                                        {{ form_widget(form.imageFile, {'attr': {'class': 'form-control file-input'}}) }}
                                        {{ form_errors(form.imageFile) }}
                                        
                                        <div class=\"help-text text-muted mt-2 small\">
                                            <ul class=\"mb-0 ps-3\">
                                                <li>Formats acceptés : JPG, PNG, WEBP</li>
                                                <li>Taille maximale : 2 Mo</li>
                                                <li>Dimensions recommandées : 800x600 pixels</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"row mb-4\">
                        <div class=\"col-md-12\">
                            <div class=\"card mb-4\">
                                <div class=\"card-header bg-primary text-white\">
                                    <h6 class=\"mb-0\"><i class=\"fa fa-image\"></i> Image d'en-tête de la catégorie</h6>
                                </div>
                                <div class=\"card-body\">
                                    {% if category.headerImageFilename %}
                                        <div class=\"text-center mb-3\">
                                            <img src=\"{{ asset(normalize_asset_path(category.headerImageFilename)) }}?v={{ random() }}\" alt=\"{{ category.name }} - En-tête\" class=\"category-preview-img img-fluid rounded\" style=\"max-height: 200px; max-width: 100%;\">
                                            <div class=\"mt-2 text-muted small\">
                                                <strong>Image d'en-tête actuelle :</strong> {{ category.headerImageFilename }}
                                            </div>
                                        </div>
                                        <hr>
                                    {% endif %}
                                    
                                    <div class=\"form-group\">
                                        <div class=\"mb-2\">
                                            {% if form.headerImageFile is defined %}
                                                <label class=\"form-label fw-bold\">{{ form_label(form.headerImageFile) }}</label>
                                                {% if category.headerImageFilename %}
                                                    <div class=\"text-muted small mb-2\">
                                                        <i class=\"fa fa-info-circle\"></i> Laissez ce champ vide pour conserver l'image actuelle
                                                    </div>
                                                {% endif %}
                                            {% endif %}
                                        </div>
                                        
                                        {% if form.headerImageFile is defined %}
                                            {{ form_widget(form.headerImageFile, {'attr': {'class': 'form-control header-file-input'}}) }}
                                            {{ form_errors(form.headerImageFile) }}
                                        {% endif %}
                                        
                                        <div class=\"help-text text-muted mt-2 small\">
                                            <ul class=\"mb-0 ps-3\">
                                                <li>Formats acceptés : JPG, PNG, WEBP</li>
                                                <li>Taille maximale : 2 Mo</li>
                                                <li>Dimensions recommandées : 1200x400 pixels (bannière horizontale)</li>
                                                <li>Cette image sera affichée en haut de la page de catégorie</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"card\">
                                <div class=\"card-header bg-primary text-white\">
                                    <h6 class=\"mb-0\"><i class=\"fa fa-star\"></i> Options d'affichage</h6>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"form-check form-switch\">
                                        {{ form_widget(form.featured, {'attr': {'class': 'form-check-input'}}) }}
                                        <label class=\"form-check-label\" for=\"{{ form.featured.vars.id }}\">
                                            {{ form_label(form.featured) }}
                                        </label>
                                        <div class=\"text-muted small mt-1\">
                                            <i class=\"fa fa-info-circle\"></i> Les catégories mises en avant apparaissent sur la page d'accueil dans la section \"Découvrez nos catégories\"
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"d-flex justify-content-between\">
                        <a href=\"{{ path('admin_categories') }}\" class=\"btn btn-outline-secondary\">
                            <i class=\"fa fa-arrow-left\"></i> Retour à la liste
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fa {{ editMode ? 'fa-save' : 'fa-plus' }}\"></i> 
                            {{ editMode ? 'Enregistrer les modifications' : 'Ajouter la catégorie' }}
                        </button>
                    </div>
                    
                    {{ form_rest(form) }}
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
    // Fonction générique pour la prévisualisation d'images
    function setupImagePreview(inputSelector, previewContainerClass) {
        const imageFileInput = document.querySelector(inputSelector);
        if (imageFileInput) {
            imageFileInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    // Créer un conteneur de prévisualisation s'il n'existe pas
                    let previewContainer = imageFileInput.closest('.card-body').querySelector('.' + previewContainerClass);
                    
                    if (!previewContainer) {
                        // Si l'image actuelle existe, ajouter la prévisualisation après celle-ci
                        const existingHr = imageFileInput.closest('.card-body').querySelector('hr');
                        let insertAfterElement;
                        
                        if (existingHr) {
                            // Insérer après le hr
                            insertAfterElement = existingHr;
                        } else {
                            // Insérer après le titre du formulaire
                            insertAfterElement = imageFileInput.closest('.form-group').querySelector('.form-label.fw-bold');
                        }
                        
                        previewContainer = document.createElement('div');
                        previewContainer.className = previewContainerClass + ' mt-3';
                        
                        if (insertAfterElement) {
                            insertAfterElement.after(previewContainer);
                        } else {
                            // Fallback: insérer après l'input
                            imageFileInput.parentNode.appendChild(previewContainer);
                        }
                        
                        // Créer la structure
                        previewContainer.innerHTML = `
                            <div class=\"alert alert-info\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fa fa-eye me-2\"></i>
                                    <strong>Aperçu de la nouvelle image</strong>
                                </div>
                                <div class=\"text-center p-2 bg-light rounded\">
                                    <img src=\"\" class=\"preview-image img-fluid rounded\" alt=\"Aperçu\" style=\"max-height: 200px;\">
                                    <div class=\"mt-2 text-muted small\">
                                        <span class=\"file-info\"></span>
                                    </div>
                                </div>
                                <div class=\"mt-2 small text-muted\">
                                    <i class=\"fa fa-info-circle\"></i> Cette image remplacera l'image actuelle après l'enregistrement
                                </div>
                            </div>
                        `;
                    }
                    
                    // Mise à jour de l'aperçu
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        const previewImg = previewContainer.querySelector('.preview-image');
                        const fileInfo = previewContainer.querySelector('.file-info');
                        
                        previewImg.src = event.target.result;
                        fileInfo.textContent = `\${file.name} - \${(file.size / 1024).toFixed(2)} Ko`;
                    };
                    reader.readAsDataURL(file);
                } else {
                    // Si aucun fichier n'est sélectionné, supprimer la prévisualisation
                    const previewContainer = imageFileInput.closest('.card-body').querySelector('.' + previewContainerClass);
                    if (previewContainer) {
                        previewContainer.remove();
                    }
                }
            });
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Prévisualisation de l'image principale
        setupImagePreview('.file-input', 'image-preview-container');
        
        // Prévisualisation de l'image d'en-tête
        setupImagePreview('.header-file-input', 'header-image-preview-container');
        
        // Génération automatique du slug
        const nameInput = document.querySelector('input[name\$=\"[name]\"]');
        const slugInput = document.querySelector('input[name\$=\"[slug]\"]');
        
        if (nameInput && slugInput) {
            nameInput.addEventListener('input', function() {
                // Si le champ slug est vide, générer automatiquement à partir du nom
                if (!slugInput.value) {
                    // Convertir le nom en slug (minuscules, remplacer les espaces par des tirets, supprimer les caractères spéciaux)
                    let slug = nameInput.value.toLowerCase()
                        .replace(/[^\\w\\s-]/g, '') // Supprimer les caractères spéciaux
                        .replace(/\\s+/g, '-')     // Remplacer les espaces par des tirets
                        .replace(/--+/g, '-');    // Remplacer les multiples tirets par un seul
                    
                    slugInput.value = slug;
                }
            });
        }
    });
</script>
{% endblock %}", "admin/category_form.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/admin/category_form.html.twig");
    }
}
