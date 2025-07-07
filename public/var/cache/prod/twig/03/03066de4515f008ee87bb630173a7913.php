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

/* admin/users.html.twig */
class __TwigTemplate_f21a522ef52891ff2af6e8917544f0af extends Template
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
        yield "Gestion des utilisateurs - Administration SHOP BJ";
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
    .admin-actions {
        margin-bottom: 20px;
    }
    .user-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: #e9ecef;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        color: #495057;
    }
    .role-admin {
        background-color: #dc3545;
        color: white;
        padding: 4px 8px;
        border-radius: 4px;
        font-size: 12px;
    }
    .role-user {
        background-color: #6c757d;
        color: white;
        padding: 4px 8px;
        border-radius: 4px;
        font-size: 12px;
    }
</style>
";
        yield from [];
    }

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 70
        yield "<div class=\"container py-4\">
    <div class=\"admin-header\">
        <h1>Gestion des utilisateurs</h1>
        <p>Administration des comptes utilisateurs</p>
    </div>

    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"admin-menu\">
                <h5 class=\"mb-3\">Menu principal</h5>
                <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        yield "\"><i class=\"fa fa-home\"></i> Tableau de bord</a>
                <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products");
        yield "\"><i class=\"fa fa-tshirt\"></i> Produits</a>
                <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories");
        yield "\"><i class=\"fa fa-list\"></i> Catégories</a>
                <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
        yield "\"><i class=\"fa fa-shopping-cart\"></i> Commandes</a>
                <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        yield "\"><i class=\"fa fa-users\"></i> Utilisateurs</a>
                <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contact_index");
        yield "\"><i class=\"fa fa-envelope\"></i> Contact</a>
                <a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"><i class=\"fa fa-arrow-left\"></i> Retour au site</a>
            </div>
        </div>

        <div class=\"col-md-9\">
            <div class=\"admin-actions d-flex justify-content-between\">
                <form class=\"d-flex\" method=\"get\">
                    <input class=\"form-control me-2\" type=\"search\" placeholder=\"Rechercher un utilisateur\" name=\"search\" value=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 93), "query", [], "any", false, false, false, 93), "get", ["search"], "method", false, false, false, 93), "html", null, true);
        yield "\">
                    <button class=\"btn btn-outline-primary\" type=\"submit\">Rechercher</button>
                </form>
                <div>
                    <a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_admin_user_new");
        yield "\" class=\"btn btn-primary\">
                        <i class=\"fa fa-plus\"></i> Nouvel utilisateur
                    </a>
                </div>
            </div>

            <div class=\"table-responsive\">
                <table class=\"table table-striped table-hover\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Utilisateur</th>
                            <th>Email</th>
                            <th>Rôle</th>
                            <th>Date inscription</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["users"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 117
            yield "                            <tr>
                                <td>";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 118), "html", null, true);
            yield "</td>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"user-avatar me-2\">
                                            ";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "firstName", [], "any", true, true, false, 122)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 122))) : ("")), 0, 1)), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastName", [], "any", true, true, false, 122)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 122))) : ("")), 0, 1)), "html", null, true);
            yield "
                                        </div>
                                        ";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 124), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 124), "html", null, true);
            yield "
                                    </div>
                                </td>
                                <td>";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 127), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 129
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 129))) {
                // line 130
                yield "                                        <span class=\"role-admin\">Admin</span>
                                    ";
            } else {
                // line 132
                yield "                                        <span class=\"role-user\">Utilisateur</span>
                                    ";
            }
            // line 134
            yield "                                </td>
                                <td>";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 135), "d/m/Y"), "html", null, true);
            yield "</td>
                                <td>
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_admin_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 138)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a href=\"";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_admin_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 141)]), "html", null, true);
            yield "\" class=\"btn btn-outline-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 147
        if (!$context['_iterated']) {
            // line 148
            yield "                            <tr>
                                <td colspan=\"6\" class=\"text-center\">Aucun utilisateur trouvé</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        yield "                    </tbody>
                </table>

            </div>

            <div class=\"pagination d-flex justify-content-center\">
                ";
        // line 158
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, ($context["users"] ?? null));
        yield "
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
        return "admin/users.html.twig";
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
        return array (  309 => 158,  301 => 152,  292 => 148,  290 => 147,  279 => 141,  273 => 138,  267 => 135,  264 => 134,  260 => 132,  256 => 130,  254 => 129,  249 => 127,  241 => 124,  235 => 122,  228 => 118,  225 => 117,  220 => 116,  198 => 97,  191 => 93,  181 => 86,  177 => 85,  173 => 84,  169 => 83,  165 => 82,  161 => 81,  157 => 80,  145 => 70,  138 => 69,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/users.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/admin/users.html.twig");
    }
}
