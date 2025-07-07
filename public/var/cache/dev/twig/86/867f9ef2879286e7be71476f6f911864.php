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

/* admin/product_form.html.twig */
class __TwigTemplate_ed4372a52a8e6368eb586445a98aed3a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product_form.html.twig"));

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
        yield " un produit - Administration SHOP BJ";
        
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
    .sizes-checkboxes, .colors-checkboxes {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }
    .sizes-checkboxes div, .colors-checkboxes div {
        margin-right: 15px;
        margin-bottom: 10px;
    }
    .colors-checkboxes .form-check {
        display: flex;
        align-items: center;
    }
    .colors-checkboxes .form-check-label {
        display: flex;
        align-items: center;
        margin-left: 5px;
    }
    .help-text {
        font-size: 0.8rem;
        color: #6c757d;
        margin-top: 5px;
    }
    .product-preview-img {
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

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 73
        yield "<div class=\"container py-4\">
    <div class=\"admin-header\">
        <h1>";
        // line 75
        yield (((($tmp = (isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 75, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Ajouter"));
        yield " un produit</h1>
        <p>Administration du catalogue de produits</p>
    </div>

    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"admin-menu\">
                <h5 class=\"mb-3\">Menu principal</h5>
                <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        yield "\"><i class=\"fa fa-home\"></i> Tableau de bord</a>
                <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products");
        yield "\" class=\"active\"><i class=\"fa fa-tshirt\"></i> Produits</a>
                <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories");
        yield "\"><i class=\"fa fa-list\"></i> Catégories</a>
                <a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
        yield "\"><i class=\"fa fa-shopping-cart\"></i> Commandes</a>
                <a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        yield "\"><i class=\"fa fa-users\"></i> Utilisateurs</a>
                <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"><i class=\"fa fa-arrow-left\"></i> Retour au site</a>
            </div>
        </div>

        <div class=\"col-md-9\">
            <div class=\"card\">
                <div class=\"card-body\">
                    ";
        // line 95
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate", "enctype" => "multipart/form-data"]]);
        yield "

                    <div class=\"row mb-3\">
                        <div class=\"col-md-8\">
                            ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "name", [], "any", false, false, false, 99), 'row');
        yield "
                        </div>
                        <div class=\"col-md-4\">
                            ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "sku", [], "any", false, false, false, 102), 'row');
        yield "
                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <div class=\"col-md-4\">
                            ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "price", [], "any", false, false, false, 108), 'row');
        yield "
                        </div>
                        <div class=\"col-md-4\">
                            ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "oldPrice", [], "any", false, false, false, 111), 'row');
        yield "
                            <div class=\"help-text\">Si un ancien prix est spécifié et supérieur au prix actuel, le produit sera affiché comme en promotion.</div>
                        </div>
                        <div class=\"col-md-4\">
                            ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "stock", [], "any", false, false, false, 115), 'row');
        yield "
                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <div class=\"col-md-12\">
                            ";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "shortDescription", [], "any", false, false, false, 121), 'row');
        yield "
                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <div class=\"col-md-12\">
                            ";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "description", [], "any", false, false, false, 127), 'row');
        yield "
                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "category", [], "any", false, false, false, 133), 'row');
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "imageFile", [], "any", false, false, false, 136), 'row');
        yield "
                            <div class=\"help-text\">Formats acceptés : JPG, PNG, WEBP (max 2 Mo) - Au moins une image obligatoire</div>

                            ";
        // line 139
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 139, $this->source); })()), "imageFilename", [], "any", false, false, false, 139)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 140
            yield "                                <div class=\"mt-2\">
                                    <p>Image principale actuelle :</p>
                                    <img src=\"";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 142, $this->source); })()), "imageFilename", [], "any", false, false, false, 142)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 142, $this->source); })()), "name", [], "any", false, false, false, 142), "html", null, true);
            yield "\" class=\"product-preview-img\">
                                    <div class=\"mt-2\">
                                        <button type=\"button\" class=\"btn btn-danger btn-sm delete-image-btn\" data-image=\"1\">
                                            <i class=\"fa fa-trash\"></i> Supprimer cette image
                                        </button>
                                    </div>
                                </div>
                            ";
        }
        // line 150
        yield "                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            ";
        // line 155
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "imageFile2", [], "any", false, false, false, 155), 'row');
        yield "
                            <div class=\"help-text\">Image secondaire (optionnelle)</div>

                            ";
        // line 158
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 158, $this->source); })()), "imageFilename2", [], "any", false, false, false, 158)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 159
            yield "                                <div class=\"mt-2\">
                                    <p>Image secondaire actuelle :</p>
                                    <img src=\"";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 161, $this->source); })()), "imageFilename2", [], "any", false, false, false, 161)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 161, $this->source); })()), "name", [], "any", false, false, false, 161), "html", null, true);
            yield "\" class=\"product-preview-img\">
                                    <div class=\"mt-2\">
                                        <button type=\"button\" class=\"btn btn-danger btn-sm delete-image-btn\" data-image=\"2\">
                                            <i class=\"fa fa-trash\"></i> Supprimer cette image
                                        </button>
                                    </div>
                                </div>
                            ";
        }
        // line 169
        yield "                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 171
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "imageFile3", [], "any", false, false, false, 171), 'row');
        yield "
                            <div class=\"help-text\">Image tertiaire (optionnelle)</div>

                            ";
        // line 174
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 174, $this->source); })()), "imageFilename3", [], "any", false, false, false, 174)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 175
            yield "                                <div class=\"mt-2\">
                                    <p>Image tertiaire actuelle :</p>
                                    <img src=\"";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 177, $this->source); })()), "imageFilename3", [], "any", false, false, false, 177)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 177, $this->source); })()), "name", [], "any", false, false, false, 177), "html", null, true);
            yield "\" class=\"product-preview-img\">
                                    <div class=\"mt-2\">
                                        <button type=\"button\" class=\"btn btn-danger btn-sm delete-image-btn\" data-image=\"3\">
                                            <i class=\"fa fa-trash\"></i> Supprimer cette image
                                        </button>
                                    </div>
                                </div>
                            ";
        }
        // line 185
        yield "                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            ";
        // line 190
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "imageFile4", [], "any", false, false, false, 190), 'row');
        yield "
                            <div class=\"help-text\">Image quaternaire (optionnelle)</div>

                            ";
        // line 193
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 193, $this->source); })()), "imageFilename4", [], "any", false, false, false, 193)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 194
            yield "                                <div class=\"mt-2\">
                                    <p>Image quaternaire actuelle :</p>
                                    <img src=\"";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 196, $this->source); })()), "imageFilename4", [], "any", false, false, false, 196)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 196, $this->source); })()), "name", [], "any", false, false, false, 196), "html", null, true);
            yield "\" class=\"product-preview-img\">
                                    <div class=\"mt-2\">
                                        <button type=\"button\" class=\"btn btn-danger btn-sm delete-image-btn\" data-image=\"4\">
                                            <i class=\"fa fa-trash\"></i> Supprimer cette image
                                        </button>
                                    </div>
                                </div>
                            ";
        }
        // line 204
        yield "                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            <label class=\"form-label\">";
        // line 209
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "sizes", [], "any", false, false, false, 209), 'label');
        yield "</label>
                            <div class=\"sizes-checkboxes\">
                                ";
        // line 211
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 211, $this->source); })()), "sizes", [], "any", false, false, false, 211), 'widget');
        yield "
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <label class=\"form-label\">";
        // line 215
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })()), "colors", [], "any", false, false, false, 215), 'label');
        yield "</label>
                            <div class=\"colors-checkboxes\">
                                ";
        // line 217
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "colors", [], "any", false, false, false, 217), 'widget');
        yield "
                            </div>
                        </div>
                    </div>

                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"form-check\">
                                ";
        // line 225
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 225, $this->source); })()), "featured", [], "any", false, false, false, 225), 'widget');
        yield "
                                ";
        // line 226
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 226, $this->source); })()), "featured", [], "any", false, false, false, 226), 'label');
        yield "
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-check\">
                                ";
        // line 231
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 231, $this->source); })()), "isActive", [], "any", false, false, false, 231), 'widget');
        yield "
                                ";
        // line 232
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 232, $this->source); })()), "isActive", [], "any", false, false, false, 232), 'label');
        yield "
                            </div>
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-between\">
                        <a href=\"";
        // line 238
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products");
        yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fa fa-arrow-left\"></i> Retour à la liste
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fa ";
        // line 242
        yield (((($tmp = (isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 242, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-save") : ("fa-plus"));
        yield "\"></i> 
                            ";
        // line 243
        yield (((($tmp = (isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 243, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Enregistrer les modifications") : ("Ajouter le produit"));
        yield "
                        </button>
                    </div>

                    ";
        // line 247
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 247, $this->source); })()), 'form_end');
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

    // line 255
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 256
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    // Preview des images lorsqu'un fichier est sélectionné
    document.addEventListener('DOMContentLoaded', function() {
        // Gestion de l'aperçu d'images lors du téléchargement
        const imageFileInputs = document.querySelectorAll('input[type=\"file\"]');

        imageFileInputs.forEach(function(input, index) {
            input.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        // Identifier quel input et créer l'ID approprié pour l'aperçu
                        const inputId = input.getAttribute('id');
                        let previewId = 'preview-' + inputId;

                        // Créer ou mettre à jour l'aperçu
                        let previewImg = document.getElementById(previewId);
                        if (!previewImg) {
                            previewImg = document.createElement('img');
                            previewImg.id = previewId;
                            previewImg.className = 'product-preview-img mt-2';
                            previewImg.style.maxWidth = '200px';
                            previewImg.style.maxHeight = '200px';
                            previewImg.style.objectFit = 'contain';
                            previewImg.style.border = '1px solid #dee2e6';
                            previewImg.style.borderRadius = '5px';

                            // Ajouter l'aperçu après le champ de fichier
                            const container = input.closest('.col-md-6') || input.parentNode;
                            container.appendChild(previewImg);
                        }
                        previewImg.src = event.target.result;
                    };
                    reader.readAsDataURL(file);
                }
            });
        });

        // Ajouter des pastilles de couleur aux options de couleur dans le formulaire
        const colorCheckboxes = document.querySelectorAll('.colors-checkboxes .form-check-input');

        colorCheckboxes.forEach(checkbox => {
            const label = document.querySelector(`label[for=\"\${checkbox.id}\"]`);

            if (label) {
                const colorValue = checkbox.value;
                // Vérifier si une pastille de couleur existe déjà
                let colorSwatch = label.querySelector('.admin-color-swatch');

                if (!colorSwatch) {
                    // Créer et ajouter une pastille de couleur
                    colorSwatch = document.createElement('span');
                    colorSwatch.className = `admin-color-swatch color-swatch-\${colorValue}`;

                    // Insérer la pastille au début du label
                    label.insertBefore(colorSwatch, label.firstChild);

                    // Ajouter un petit espace après la pastille
                    const space = document.createTextNode(' ');
                    label.insertBefore(space, colorSwatch.nextSibling);
                }
            }
        });
    });

    // Gestion de la suppression d'images directe
    const deleteButtons = document.querySelectorAll('.delete-image-btn');
    
    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const imageNumber = this.dataset.image;
            const productId = '";
        // line 329
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 329, $this->source); })()), "id", [], "any", false, false, false, 329), "html", null, true);
        yield "';
            
            // Faire une requête AJAX pour supprimer l'image
            fetch(`/admin/product/\${productId}/delete-image/\${imageNumber}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Masquer l'image et le bouton
                    const imageContainer = this.closest('.mt-2');
                    if (imageContainer) {
                        imageContainer.style.display = 'none';
                    }
                    
                    // Afficher un message de succès
                    const alertDiv = document.createElement('div');
                    alertDiv.className = 'alert alert-success mt-2';
                    alertDiv.innerHTML = `<i class=\"fa fa-check\"></i> Image \${imageNumber} supprimée avec succès`;
                    this.parentNode.appendChild(alertDiv);
                    
                    // Supprimer l'alerte après 3 secondes
                    setTimeout(() => {
                        alertDiv.remove();
                    }, 3000);
                } else {
                    // Afficher un message d'erreur
                    const alertDiv = document.createElement('div');
                    alertDiv.className = 'alert alert-danger mt-2';
                    alertDiv.innerHTML = `<i class=\"fa fa-exclamation-triangle\"></i> Erreur lors de la suppression: \${data.error}`;
                    this.parentNode.appendChild(alertDiv);
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                const alertDiv = document.createElement('div');
                alertDiv.className = 'alert alert-danger mt-2';
                alertDiv.innerHTML = '<i class=\"fa fa-exclamation-triangle\"></i> Erreur de connexion';
                this.parentNode.appendChild(alertDiv);
            });
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
        return "admin/product_form.html.twig";
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
        return array (  581 => 329,  505 => 256,  495 => 255,  480 => 247,  473 => 243,  469 => 242,  462 => 238,  453 => 232,  449 => 231,  441 => 226,  437 => 225,  426 => 217,  421 => 215,  414 => 211,  409 => 209,  402 => 204,  389 => 196,  385 => 194,  383 => 193,  377 => 190,  370 => 185,  357 => 177,  353 => 175,  351 => 174,  345 => 171,  341 => 169,  328 => 161,  324 => 159,  322 => 158,  316 => 155,  309 => 150,  296 => 142,  292 => 140,  290 => 139,  284 => 136,  278 => 133,  269 => 127,  260 => 121,  251 => 115,  244 => 111,  238 => 108,  229 => 102,  223 => 99,  216 => 95,  206 => 88,  202 => 87,  198 => 86,  194 => 85,  190 => 84,  186 => 83,  175 => 75,  171 => 73,  161 => 72,  88 => 6,  78 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ editMode ? 'Modifier' : 'Ajouter' }} un produit - Administration SHOP BJ{% endblock %}

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
    .sizes-checkboxes, .colors-checkboxes {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }
    .sizes-checkboxes div, .colors-checkboxes div {
        margin-right: 15px;
        margin-bottom: 10px;
    }
    .colors-checkboxes .form-check {
        display: flex;
        align-items: center;
    }
    .colors-checkboxes .form-check-label {
        display: flex;
        align-items: center;
        margin-left: 5px;
    }
    .help-text {
        font-size: 0.8rem;
        color: #6c757d;
        margin-top: 5px;
    }
    .product-preview-img {
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
        <h1>{{ editMode ? 'Modifier' : 'Ajouter' }} un produit</h1>
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
            <div class=\"card\">
                <div class=\"card-body\">
                    {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate', 'enctype': 'multipart/form-data'}}) }}

                    <div class=\"row mb-3\">
                        <div class=\"col-md-8\">
                            {{ form_row(form.name) }}
                        </div>
                        <div class=\"col-md-4\">
                            {{ form_row(form.sku) }}
                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <div class=\"col-md-4\">
                            {{ form_row(form.price) }}
                        </div>
                        <div class=\"col-md-4\">
                            {{ form_row(form.oldPrice) }}
                            <div class=\"help-text\">Si un ancien prix est spécifié et supérieur au prix actuel, le produit sera affiché comme en promotion.</div>
                        </div>
                        <div class=\"col-md-4\">
                            {{ form_row(form.stock) }}
                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <div class=\"col-md-12\">
                            {{ form_row(form.shortDescription) }}
                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <div class=\"col-md-12\">
                            {{ form_row(form.description) }}
                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            {{ form_row(form.category) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.imageFile) }}
                            <div class=\"help-text\">Formats acceptés : JPG, PNG, WEBP (max 2 Mo) - Au moins une image obligatoire</div>

                            {% if product.imageFilename %}
                                <div class=\"mt-2\">
                                    <p>Image principale actuelle :</p>
                                    <img src=\"{{ asset(product.imageFilename) }}\" alt=\"{{ product.name }}\" class=\"product-preview-img\">
                                    <div class=\"mt-2\">
                                        <button type=\"button\" class=\"btn btn-danger btn-sm delete-image-btn\" data-image=\"1\">
                                            <i class=\"fa fa-trash\"></i> Supprimer cette image
                                        </button>
                                    </div>
                                </div>
                            {% endif %}
                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            {{ form_row(form.imageFile2) }}
                            <div class=\"help-text\">Image secondaire (optionnelle)</div>

                            {% if product.imageFilename2 %}
                                <div class=\"mt-2\">
                                    <p>Image secondaire actuelle :</p>
                                    <img src=\"{{ asset(product.imageFilename2) }}\" alt=\"{{ product.name }}\" class=\"product-preview-img\">
                                    <div class=\"mt-2\">
                                        <button type=\"button\" class=\"btn btn-danger btn-sm delete-image-btn\" data-image=\"2\">
                                            <i class=\"fa fa-trash\"></i> Supprimer cette image
                                        </button>
                                    </div>
                                </div>
                            {% endif %}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.imageFile3) }}
                            <div class=\"help-text\">Image tertiaire (optionnelle)</div>

                            {% if product.imageFilename3 %}
                                <div class=\"mt-2\">
                                    <p>Image tertiaire actuelle :</p>
                                    <img src=\"{{ asset(product.imageFilename3) }}\" alt=\"{{ product.name }}\" class=\"product-preview-img\">
                                    <div class=\"mt-2\">
                                        <button type=\"button\" class=\"btn btn-danger btn-sm delete-image-btn\" data-image=\"3\">
                                            <i class=\"fa fa-trash\"></i> Supprimer cette image
                                        </button>
                                    </div>
                                </div>
                            {% endif %}
                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            {{ form_row(form.imageFile4) }}
                            <div class=\"help-text\">Image quaternaire (optionnelle)</div>

                            {% if product.imageFilename4 %}
                                <div class=\"mt-2\">
                                    <p>Image quaternaire actuelle :</p>
                                    <img src=\"{{ asset(product.imageFilename4) }}\" alt=\"{{ product.name }}\" class=\"product-preview-img\">
                                    <div class=\"mt-2\">
                                        <button type=\"button\" class=\"btn btn-danger btn-sm delete-image-btn\" data-image=\"4\">
                                            <i class=\"fa fa-trash\"></i> Supprimer cette image
                                        </button>
                                    </div>
                                </div>
                            {% endif %}
                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            <label class=\"form-label\">{{ form_label(form.sizes) }}</label>
                            <div class=\"sizes-checkboxes\">
                                {{ form_widget(form.sizes) }}
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <label class=\"form-label\">{{ form_label(form.colors) }}</label>
                            <div class=\"colors-checkboxes\">
                                {{ form_widget(form.colors) }}
                            </div>
                        </div>
                    </div>

                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"form-check\">
                                {{ form_widget(form.featured) }}
                                {{ form_label(form.featured) }}
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-check\">
                                {{ form_widget(form.isActive) }}
                                {{ form_label(form.isActive) }}
                            </div>
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-between\">
                        <a href=\"{{ path('admin_products') }}\" class=\"btn btn-outline-secondary\">
                            <i class=\"fa fa-arrow-left\"></i> Retour à la liste
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fa {{ editMode ? 'fa-save' : 'fa-plus' }}\"></i> 
                            {{ editMode ? 'Enregistrer les modifications' : 'Ajouter le produit' }}
                        </button>
                    </div>

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
    // Preview des images lorsqu'un fichier est sélectionné
    document.addEventListener('DOMContentLoaded', function() {
        // Gestion de l'aperçu d'images lors du téléchargement
        const imageFileInputs = document.querySelectorAll('input[type=\"file\"]');

        imageFileInputs.forEach(function(input, index) {
            input.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        // Identifier quel input et créer l'ID approprié pour l'aperçu
                        const inputId = input.getAttribute('id');
                        let previewId = 'preview-' + inputId;

                        // Créer ou mettre à jour l'aperçu
                        let previewImg = document.getElementById(previewId);
                        if (!previewImg) {
                            previewImg = document.createElement('img');
                            previewImg.id = previewId;
                            previewImg.className = 'product-preview-img mt-2';
                            previewImg.style.maxWidth = '200px';
                            previewImg.style.maxHeight = '200px';
                            previewImg.style.objectFit = 'contain';
                            previewImg.style.border = '1px solid #dee2e6';
                            previewImg.style.borderRadius = '5px';

                            // Ajouter l'aperçu après le champ de fichier
                            const container = input.closest('.col-md-6') || input.parentNode;
                            container.appendChild(previewImg);
                        }
                        previewImg.src = event.target.result;
                    };
                    reader.readAsDataURL(file);
                }
            });
        });

        // Ajouter des pastilles de couleur aux options de couleur dans le formulaire
        const colorCheckboxes = document.querySelectorAll('.colors-checkboxes .form-check-input');

        colorCheckboxes.forEach(checkbox => {
            const label = document.querySelector(`label[for=\"\${checkbox.id}\"]`);

            if (label) {
                const colorValue = checkbox.value;
                // Vérifier si une pastille de couleur existe déjà
                let colorSwatch = label.querySelector('.admin-color-swatch');

                if (!colorSwatch) {
                    // Créer et ajouter une pastille de couleur
                    colorSwatch = document.createElement('span');
                    colorSwatch.className = `admin-color-swatch color-swatch-\${colorValue}`;

                    // Insérer la pastille au début du label
                    label.insertBefore(colorSwatch, label.firstChild);

                    // Ajouter un petit espace après la pastille
                    const space = document.createTextNode(' ');
                    label.insertBefore(space, colorSwatch.nextSibling);
                }
            }
        });
    });

    // Gestion de la suppression d'images directe
    const deleteButtons = document.querySelectorAll('.delete-image-btn');
    
    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const imageNumber = this.dataset.image;
            const productId = '{{ product.id }}';
            
            // Faire une requête AJAX pour supprimer l'image
            fetch(`/admin/product/\${productId}/delete-image/\${imageNumber}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Masquer l'image et le bouton
                    const imageContainer = this.closest('.mt-2');
                    if (imageContainer) {
                        imageContainer.style.display = 'none';
                    }
                    
                    // Afficher un message de succès
                    const alertDiv = document.createElement('div');
                    alertDiv.className = 'alert alert-success mt-2';
                    alertDiv.innerHTML = `<i class=\"fa fa-check\"></i> Image \${imageNumber} supprimée avec succès`;
                    this.parentNode.appendChild(alertDiv);
                    
                    // Supprimer l'alerte après 3 secondes
                    setTimeout(() => {
                        alertDiv.remove();
                    }, 3000);
                } else {
                    // Afficher un message d'erreur
                    const alertDiv = document.createElement('div');
                    alertDiv.className = 'alert alert-danger mt-2';
                    alertDiv.innerHTML = `<i class=\"fa fa-exclamation-triangle\"></i> Erreur lors de la suppression: \${data.error}`;
                    this.parentNode.appendChild(alertDiv);
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                const alertDiv = document.createElement('div');
                alertDiv.className = 'alert alert-danger mt-2';
                alertDiv.innerHTML = '<i class=\"fa fa-exclamation-triangle\"></i> Erreur de connexion';
                this.parentNode.appendChild(alertDiv);
            });
        });
    });
</script>
{% endblock %}", "admin/product_form.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/admin/product_form.html.twig");
    }
}
