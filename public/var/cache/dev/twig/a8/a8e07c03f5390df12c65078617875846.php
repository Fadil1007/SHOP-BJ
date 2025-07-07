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

/* admin/dashboard.html.twig */
class __TwigTemplate_5d69e3d9bb74b7a5d1ff707b14f96092 extends Template
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
        yield "Tableau de bord - Administration SHOP BJ";
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
    .admin-dashboard {
        padding: 2rem 0;
    }
    .admin-card {
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-bottom: 1.5rem;
        transition: transform 0.3s;
    }
    .admin-card:hover {
        transform: translateY(-5px);
    }
    .admin-card-icon {
        font-size: 3rem;
        margin-bottom: 1rem;
    }
    .admin-section {
        margin-bottom: 3rem;
    }
    .admin-header {
        background: linear-gradient(135deg, #0d6efd, #0dcaf0);
        color: white;
        padding: 2rem;
        border-radius: 10px;
        margin-bottom: 2rem;
    }
</style>
";
        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "<div class=\"container admin-dashboard\">
    <div class=\"admin-header\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-8\">
                <h1>Tableau de bord administrateur</h1>
                <p class=\"lead mb-0\">Bienvenue sur le tableau de bord d'administration SHOP BJ</p>
            </div>
            <div class=\"col-md-4 text-md-end\">
                <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-light\">
                    <i class=\"fa fa-arrow-left\"></i> Retour au site
                </a>
            </div>
        </div>
    </div>

    <div class=\"admin-section\">
        <h2 class=\"mb-4\">Gestion du catalogue</h2>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"card admin-card h-100 bg-primary text-white\">
                    <div class=\"card-body text-center\">
                        <div class=\"admin-card-icon\">
                            <i class=\"fa fa-tshirt\"></i>
                        </div>
                        <h3 class=\"card-title\">Produits</h3>
                        <p class=\"card-text\">Gérer les produits du catalogue</p>
                        <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products");
        yield "\" class=\"btn btn-light\">Accéder</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"card admin-card h-100 bg-success text-white\">
                    <div class=\"card-body text-center\">
                        <div class=\"admin-card-icon\">
                            <i class=\"fa fa-list\"></i>
                        </div>
                        <h3 class=\"card-title\">Catégories</h3>
                        <p class=\"card-text\">Gérer les catégories de produits</p>
                        <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories");
        yield "\" class=\"btn btn-light\">Accéder</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"admin-section\">
        <h2 class=\"mb-4\">Gestion commerciale</h2>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"card admin-card h-100 bg-info text-white\">
                    <div class=\"card-body text-center\">
                        <div class=\"admin-card-icon\">
                            <i class=\"fa fa-shopping-cart\"></i>
                        </div>
                        <h3 class=\"card-title\">Commandes</h3>
                        <p class=\"card-text\">Gérer les commandes et le suivi</p>
                        <a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
        yield "\" class=\"btn btn-light\">Accéder</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"card admin-card h-100 bg-warning text-dark\">
                    <div class=\"card-body text-center\">
                        <div class=\"admin-card-icon\">
                            <i class=\"fa fa-users\"></i>
                        </div>
                        <h3 class=\"card-title\">Utilisateurs</h3>
                        <p class=\"card-text\">Gérer les comptes utilisateurs</p>
                        <a href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        yield "\" class=\"btn btn-dark\">Accéder</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"admin-section\">
        <h2 class=\"mb-4\">Communication</h2>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"card admin-card h-100 bg-danger text-white\">
                    <div class=\"card-body text-center\">
                        <div class=\"admin-card-icon\">
                            <i class=\"fa fa-envelope\"></i>
                        </div>
                        <h3 class=\"card-title\">Messages de contact</h3>
                        <p class=\"card-text\">Gérer les messages reçus via le formulaire de contact</p>
                        <a href=\"";
        // line 124
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contact_index");
        yield "\" class=\"btn btn-light\">
                            Accéder
                            ";
        // line 126
        $context["contact_count"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 126), "get", ["unread_contact_count", 0], "method", false, false, false, 126);
        // line 127
        yield "                            ";
        if ((($context["contact_count"] ?? null) > 0)) {
            // line 128
            yield "                                <span class=\"badge bg-warning text-dark\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["contact_count"] ?? null), "html", null, true);
            yield "</span>
                            ";
        }
        // line 130
        yield "                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 138
        yield "
    <div class=\"admin-section\">
        <div class=\"card\">
            <div class=\"card-header bg-light\">
                <h3 class=\"mb-0\">Liens rapides</h3>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-4 mb-3\">
                        <a href=\"";
        // line 147
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products");
        yield "\" class=\"btn btn-outline-primary w-100\">
                            <i class=\"fa fa-plus\"></i> Ajouter un produit
                        </a>
                    </div>
                    <div class=\"col-md-4 mb-3\">
                        <a href=\"";
        // line 152
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories");
        yield "\" class=\"btn btn-outline-success w-100\">
                            <i class=\"fa fa-plus\"></i> Ajouter une catégorie
                        </a>
                    </div>
                    <div class=\"col-md-4 mb-3\">
                        <a href=\"";
        // line 157
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        yield "\" class=\"btn btn-outline-warning w-100\">
                            <i class=\"fa fa-user-plus\"></i> Ajouter un utilisateur
                        </a>
                    </div>
                    <div class=\"col-md-4 mb-3\">
                        <a href=\"";
        // line 162
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contact_index");
        yield "\" class=\"btn btn-outline-danger w-100\">
                            <i class=\"fa fa-envelope\"></i> Messages de contact
                        </a>
                    </div>
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
        return "admin/dashboard.html.twig";
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
        return array (  276 => 162,  268 => 157,  260 => 152,  252 => 147,  241 => 138,  232 => 130,  226 => 128,  223 => 127,  221 => 126,  216 => 124,  195 => 106,  180 => 94,  159 => 76,  144 => 64,  123 => 46,  113 => 38,  106 => 37,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/dashboard.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/admin/dashboard.html.twig");
    }
}
