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

/* admin/user_form.html.twig */
class __TwigTemplate_6d61067ecab87e634749a101e9955739 extends Template
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
        if ((($tmp = ($context["is_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Modifier l'utilisateur";
        } else {
            yield "Nouvel utilisateur";
        }
        yield " - Administration SHOP BJ";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
</style>
";
        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 42
        yield "<div class=\"container py-4\">
    <div class=\"admin-header\">
        <h1>";
        // line 44
        if ((($tmp = ($context["is_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Modifier l'utilisateur";
        } else {
            yield "Nouvel utilisateur";
        }
        yield "</h1>
        <p>";
        // line 45
        if ((($tmp = ($context["is_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Modifier les informations d'un utilisateur existant";
        } else {
            yield "Ajouter un nouvel utilisateur à la plateforme";
        }
        yield "</p>
    </div>
    
    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"admin-menu\">
                <h5 class=\"mb-3\">Menu principal</h5>
                <a href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        yield "\"><i class=\"fa fa-home\"></i> Tableau de bord</a>
                <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products");
        yield "\"><i class=\"fa fa-tshirt\"></i> Produits</a>
                <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories");
        yield "\"><i class=\"fa fa-list\"></i> Catégories</a>
                <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
        yield "\"><i class=\"fa fa-shopping-cart\"></i> Commandes</a>
                <a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        yield "\" class=\"active\"><i class=\"fa fa-users\"></i> Utilisateurs</a>
                <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"><i class=\"fa fa-arrow-left\"></i> Retour au site</a>
            </div>
        </div>
        
        <div class=\"col-md-9\">
            <div class=\"card\">
                <div class=\"card-header\">
                    ";
        // line 64
        if ((($tmp = ($context["is_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 65
            yield "                        <h5 class=\"card-title mb-0\">Modifier l'utilisateur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "firstName", [], "any", false, false, false, 65), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "lastName", [], "any", false, false, false, 65), "html", null, true);
            yield "</h5>
                    ";
        } else {
            // line 67
            yield "                        <h5 class=\"card-title mb-0\">Informations du nouvel utilisateur</h5>
                    ";
        }
        // line 69
        yield "                </div>
                <div class=\"card-body\">
                    ";
        // line 71
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield "
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "firstName", [], "any", false, false, false, 74), 'row');
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lastName", [], "any", false, false, false, 77), 'row');
        yield "
                        </div>
                    </div>
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 82), 'row');
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "username", [], "any", false, false, false, 85), 'row');
        yield "
                        </div>
                    </div>
                    <div class=\"mb-3\">
                        ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phoneNumber", [], "any", false, false, false, 89), 'row');
        yield "
                    </div>
                    ";
        // line 91
        if ((($tmp = ($context["is_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 92
            yield "                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "newPassword", [], "any", false, false, false, 92), 'row');
            yield "
                    ";
        } else {
            // line 94
            yield "                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 94), 'row');
            yield "
                    ";
        }
        // line 96
        yield "                    
                    <div class=\"mb-3\">
                        ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "roles", [], "any", false, false, false, 98), 'row');
        yield "
                    </div>
                    
                    <div class=\"d-flex justify-content-between\">
                        <a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        yield "\" class=\"btn btn-secondary\">Annuler</a>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            ";
        // line 104
        if ((($tmp = ($context["is_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 105
            yield "                                <i class=\"fa fa-save\"></i> Enregistrer les modifications
                            ";
        } else {
            // line 107
            yield "                                <i class=\"fa fa-plus\"></i> Créer l'utilisateur
                            ";
        }
        // line 109
        yield "                        </button>
                    </div>
                    ";
        // line 111
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
                </div>
            </div>
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
        return "admin/user_form.html.twig";
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
        return array (  278 => 111,  274 => 109,  270 => 107,  266 => 105,  264 => 104,  259 => 102,  252 => 98,  248 => 96,  242 => 94,  236 => 92,  234 => 91,  229 => 89,  222 => 85,  216 => 82,  208 => 77,  202 => 74,  196 => 71,  192 => 69,  188 => 67,  180 => 65,  178 => 64,  168 => 57,  164 => 56,  160 => 55,  156 => 54,  152 => 53,  148 => 52,  134 => 45,  126 => 44,  122 => 42,  115 => 41,  76 => 6,  69 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/user_form.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/admin/user_form.html.twig");
    }
}
