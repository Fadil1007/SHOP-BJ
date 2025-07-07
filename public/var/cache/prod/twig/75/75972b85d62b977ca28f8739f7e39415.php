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

/* admin/base.html.twig */
class __TwigTemplate_e45479917c039c2441f0a5215d042be3 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        yield "\" type=\"image/x-icon\">
        <link rel=\"icon\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.svg"), "html", null, true);
        yield "\" type=\"image/svg+xml\">

        <!-- Bootstrap 5 CSS -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

        <!-- Font Awesome -->
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css\" rel=\"stylesheet\">

        <!-- DataTables -->
        <link href=\"https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        <style>
            :root {
                --primary-color: #4A6FA5; /* Bleu-gris neutre */
                --primary-dark: #344E7A; /* Bleu-gris foncé */
                --secondary-color: #F2F5F9; /* Gris très clair avec nuance bleutée */
                --accent-color: #6A8CBF; /* Bleu-gris moyen */
                --accent-light: #9DB4D6; /* Bleu-gris clair */
                --text-color: #333333;
                --light-gray: #F5F5F5;
                --border-color: #E0E0E0;

                /* Couleurs secondaires pour plus de diversité */
                --neutral-pop: #D4AF37; /* Or neutre pour accents */
                --neutral-soft: #D8C8B8; /* Beige neutre */
            }

            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                color: var(--text-color);
                background-color: #F8F9FA;
                padding-top: 56px; /* Hauteur de la navbar */
            }

            .admin-sidebar {
                background-color: #fff;
                border-right: 1px solid var(--border-color);
                min-height: calc(100vh - 56px);
            }

            .admin-nav-link {
                color: var(--text-color);
                padding: 0.75rem 1rem;
                border-radius: 0;
                transition: all 0.2s ease;
            }

            .admin-nav-link:hover, .admin-nav-link.active {
                color: var(--primary-dark);
                background-color: rgba(74, 111, 165, 0.1);
                border-left: 3px solid var(--primary-color);
            }

            .admin-nav-link i {
                width: 24px;
            }

            .card {
                border: none;
                border-radius: 0.5rem;
                box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            }

            .card-header {
                background-color: #fff;
                border-bottom: 1px solid rgba(0, 0, 0, 0.05);
                font-weight: 600;
            }
        </style>

        ";
        // line 79
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 80
        yield "    </head>
    
    <body>
        <header>
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary fixed-top\">
                <div class=\"container-fluid\">
                    <a class=\"navbar-brand\" href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_simple");
        yield "\">
                        <img src=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((array_key_exists("site_logo", $context)) ? (Twig\Extension\CoreExtension::default(($context["site_logo"] ?? null), "uploads/logo/logo-geometric.svg")) : ("uploads/logo/logo-geometric.svg"))), "html", null, true);
        yield "\" alt=\"SHOP BJ\" height=\"30\" class=\"d-inline-block align-top bg-white rounded p-1\">
                        <span class=\"ms-2\">Administration</span>
                    </a>
                    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarAdmin\" aria-controls=\"navbarAdmin\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarAdmin\">
                        <ul class=\"navbar-nav ms-auto\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                                    <i class=\"fas fa-home me-1\"></i> Retour au site
                                </a>
                            </li>
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <i class=\"fas fa-user-circle me-1\"></i> ";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 102), "email", [], "any", false, false, false, 102), "html", null, true);
        yield "
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"userDropdown\">
                                    <li><a class=\"dropdown-item\" href=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\">Mon profil</a></li>
                                    <li><hr class=\"dropdown-divider\"></li>
                                    <li><a class=\"dropdown-item\" href=\"";
        // line 107
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Déconnexion</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </header>

        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-3 col-lg-2 d-md-block sidebar admin-sidebar show\">
                    <div class=\"position-sticky pt-3\">
                        <ul class=\"nav flex-column\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link admin-nav-link ";
        // line 123
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 123), "get", ["_route"], "method", false, false, false, 123) == "admin_simple") || (is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 123), "get", ["_route"], "method", false, false, false, 123)) && is_string($_v1 = "admin_dashboard") && str_starts_with($_v0, $_v1)))) {
            yield "active";
        }
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_simple");
        yield "\">
                                    <i class=\"fas fa-tachometer-alt\"></i> Tableau de bord
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link admin-nav-link ";
        // line 128
        if ((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 128), "get", ["_route"], "method", false, false, false, 128)) && is_string($_v3 = "admin_carousel_") && str_starts_with($_v2, $_v3))) {
            yield "active";
        }
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carousel_index");
        yield "\">
                                    <i class=\"fas fa-images\"></i> Gestion du carousel
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link admin-nav-link ";
        // line 133
        if ((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 133), "get", ["_route"], "method", false, false, false, 133)) && is_string($_v5 = "admin_settings") && str_starts_with($_v4, $_v5))) {
            yield "active";
        }
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_settings");
        yield "\">
                                    <i class=\"fas fa-cog\"></i> Paramètres
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link admin-nav-link ";
        // line 138
        if ((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 138), "get", ["_route"], "method", false, false, false, 138)) && is_string($_v7 = "app_admin_contact_") && str_starts_with($_v6, $_v7))) {
            yield "active";
        }
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contact_index");
        yield "\">
                                    <i class=\"fas fa-envelope\"></i> Messages de contact
                                    ";
        // line 140
        $context["unreadCount"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 140), "get", ["unread_contact_count", 0], "method", false, false, false, 140);
        // line 141
        yield "                                    ";
        if ((($context["unreadCount"] ?? null) > 0)) {
            // line 142
            yield "                                        <span class=\"badge bg-danger rounded-pill ms-2\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unreadCount"] ?? null), "html", null, true);
            yield "</span>
                                    ";
        }
        // line 144
        yield "                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link admin-nav-link ";
        // line 147
        if ((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 147), "get", ["_route"], "method", false, false, false, 147)) && is_string($_v9 = "admin_review_") && str_starts_with($_v8, $_v9))) {
            yield "active";
        }
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_review_index");
        yield "\">
                                    <i class=\"fas fa-star\"></i> Avis clients
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link admin-nav-link ";
        // line 152
        if ((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 152), "get", ["_route"], "method", false, false, false, 152)) && is_string($_v11 = "admin_flash_messages") && str_starts_with($_v10, $_v11))) {
            yield "active";
        }
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_flash_messages");
        yield "\">
                                    <i class=\"fas fa-envelope\"></i> Messages Flash
                                </a>
                            </li>
                            <li class=\"nav-item mt-3\">
                                <a class=\"nav-link admin-nav-link text-danger\" href=\"";
        // line 157
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                                    <i class=\"fas fa-sign-out-alt\"></i> Quitter l'administration
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4\">
                    ";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 166));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 167
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 168
                yield "                            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                yield " alert-dismissible fade show mb-4\" role=\"alert\">
                                ";
                // line 169
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        yield "
                    ";
        // line 175
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 176
        yield "                </main>
            </div>
        </div>

        <!-- jQuery first, then Bootstrap JS Bundle with Popper -->
        <script src=\"https://code.jquery.com/jquery-3.7.1.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>

        <!-- DataTables -->
        <script src=\"https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js\"></script>
        <script src=\"https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js\"></script>

        <!-- Admin Notifications -->
        <script src=\"";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/admin-notifications.js"), "html", null, true);
        yield "\"></script>

        ";
        // line 191
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 192
        yield "    </body>
</html>";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Administration | SHOP BJ";
        yield from [];
    }

    // line 79
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 175
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 191
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/base.html.twig";
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
        return array (  391 => 191,  381 => 175,  371 => 79,  360 => 6,  354 => 192,  352 => 191,  347 => 189,  332 => 176,  330 => 175,  327 => 174,  321 => 173,  311 => 169,  306 => 168,  301 => 167,  297 => 166,  285 => 157,  273 => 152,  261 => 147,  256 => 144,  250 => 142,  247 => 141,  245 => 140,  236 => 138,  224 => 133,  212 => 128,  200 => 123,  181 => 107,  176 => 105,  170 => 102,  161 => 96,  149 => 87,  145 => 86,  137 => 80,  135 => 79,  61 => 8,  57 => 7,  53 => 6,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/base.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/admin/base.html.twig");
    }
}
