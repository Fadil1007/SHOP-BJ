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
class __TwigTemplate_ced339c831acbfe75960b331189828a7 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base.html.twig"));

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((array_key_exists("site_logo", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["site_logo"]) || array_key_exists("site_logo", $context) ? $context["site_logo"] : (function () { throw new RuntimeError('Variable "site_logo" does not exist.', 87, $this->source); })()), "uploads/logo/logo-geometric.svg")) : ("uploads/logo/logo-geometric.svg"))), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102), "email", [], "any", false, false, false, 102), "html", null, true);
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
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "request", [], "any", false, false, false, 123), "get", ["_route"], "method", false, false, false, 123) == "admin_simple") || (is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "request", [], "any", false, false, false, 123), "get", ["_route"], "method", false, false, false, 123)) && is_string($_v1 = "admin_dashboard") && str_starts_with($_v0, $_v1)))) {
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
        if ((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "request", [], "any", false, false, false, 128), "get", ["_route"], "method", false, false, false, 128)) && is_string($_v3 = "admin_carousel_") && str_starts_with($_v2, $_v3))) {
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
        if ((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "request", [], "any", false, false, false, 133), "get", ["_route"], "method", false, false, false, 133)) && is_string($_v5 = "admin_settings") && str_starts_with($_v4, $_v5))) {
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
        if ((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 138, $this->source); })()), "request", [], "any", false, false, false, 138), "get", ["_route"], "method", false, false, false, 138)) && is_string($_v7 = "app_admin_contact_") && str_starts_with($_v6, $_v7))) {
            yield "active";
        }
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contact_index");
        yield "\">
                                    <i class=\"fas fa-envelope\"></i> Messages de contact
                                    ";
        // line 140
        $context["unreadCount"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "session", [], "any", false, false, false, 140), "get", ["unread_contact_count", 0], "method", false, false, false, 140);
        // line 141
        yield "                                    ";
        if (((isset($context["unreadCount"]) || array_key_exists("unreadCount", $context) ? $context["unreadCount"] : (function () { throw new RuntimeError('Variable "unreadCount" does not exist.', 141, $this->source); })()) > 0)) {
            // line 142
            yield "                                        <span class=\"badge bg-danger rounded-pill ms-2\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unreadCount"]) || array_key_exists("unreadCount", $context) ? $context["unreadCount"] : (function () { throw new RuntimeError('Variable "unreadCount" does not exist.', 142, $this->source); })()), "html", null, true);
            yield "</span>
                                    ";
        }
        // line 144
        yield "                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link admin-nav-link ";
        // line 147
        if ((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "request", [], "any", false, false, false, 147), "get", ["_route"], "method", false, false, false, 147)) && is_string($_v9 = "admin_review_") && str_starts_with($_v8, $_v9))) {
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
        if ((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 152, $this->source); })()), "request", [], "any", false, false, false, 152), "get", ["_route"], "method", false, false, false, 152)) && is_string($_v11 = "admin_flash_messages") && str_starts_with($_v10, $_v11))) {
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 166, $this->source); })()), "flashes", [], "any", false, false, false, 166));
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Administration | SHOP BJ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 79
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 175
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 191
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  415 => 191,  399 => 175,  383 => 79,  366 => 6,  357 => 192,  355 => 191,  350 => 189,  335 => 176,  333 => 175,  330 => 174,  324 => 173,  314 => 169,  309 => 168,  304 => 167,  300 => 166,  288 => 157,  276 => 152,  264 => 147,  259 => 144,  253 => 142,  250 => 141,  248 => 140,  239 => 138,  227 => 133,  215 => 128,  203 => 123,  184 => 107,  179 => 105,  173 => 102,  164 => 96,  152 => 87,  148 => 86,  140 => 80,  138 => 79,  64 => 8,  60 => 7,  56 => 6,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}Administration | SHOP BJ{% endblock %}</title>
        <link rel=\"icon\" href=\"{{ asset('favicon.ico') }}\" type=\"image/x-icon\">
        <link rel=\"icon\" href=\"{{ asset('favicon.svg') }}\" type=\"image/svg+xml\">

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

        {% block stylesheets %}{% endblock %}
    </head>
    
    <body>
        <header>
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary fixed-top\">
                <div class=\"container-fluid\">
                    <a class=\"navbar-brand\" href=\"{{ path('admin_simple') }}\">
                        <img src=\"{{ asset(site_logo|default('uploads/logo/logo-geometric.svg')) }}\" alt=\"SHOP BJ\" height=\"30\" class=\"d-inline-block align-top bg-white rounded p-1\">
                        <span class=\"ms-2\">Administration</span>
                    </a>
                    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarAdmin\" aria-controls=\"navbarAdmin\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarAdmin\">
                        <ul class=\"navbar-nav ms-auto\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('app_home') }}\">
                                    <i class=\"fas fa-home me-1\"></i> Retour au site
                                </a>
                            </li>
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <i class=\"fas fa-user-circle me-1\"></i> {{ app.user.email }}
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"userDropdown\">
                                    <li><a class=\"dropdown-item\" href=\"{{ path('app_profile') }}\">Mon profil</a></li>
                                    <li><hr class=\"dropdown-divider\"></li>
                                    <li><a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Déconnexion</a></li>
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
                                <a class=\"nav-link admin-nav-link {% if app.request.get('_route') == 'admin_simple' or app.request.get('_route') starts with 'admin_dashboard' %}active{% endif %}\" href=\"{{ path('admin_simple') }}\">
                                    <i class=\"fas fa-tachometer-alt\"></i> Tableau de bord
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link admin-nav-link {% if app.request.get('_route') starts with 'admin_carousel_' %}active{% endif %}\" href=\"{{ path('admin_carousel_index') }}\">
                                    <i class=\"fas fa-images\"></i> Gestion du carousel
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link admin-nav-link {% if app.request.get('_route') starts with 'admin_settings' %}active{% endif %}\" href=\"{{ path('admin_settings') }}\">
                                    <i class=\"fas fa-cog\"></i> Paramètres
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link admin-nav-link {% if app.request.get('_route') starts with 'app_admin_contact_' %}active{% endif %}\" href=\"{{ path('app_admin_contact_index') }}\">
                                    <i class=\"fas fa-envelope\"></i> Messages de contact
                                    {% set unreadCount = app.session.get('unread_contact_count', 0) %}
                                    {% if unreadCount > 0 %}
                                        <span class=\"badge bg-danger rounded-pill ms-2\">{{ unreadCount }}</span>
                                    {% endif %}
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link admin-nav-link {% if app.request.get('_route') starts with 'admin_review_' %}active{% endif %}\" href=\"{{ path('admin_review_index') }}\">
                                    <i class=\"fas fa-star\"></i> Avis clients
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link admin-nav-link {% if app.request.get('_route') starts with 'admin_flash_messages' %}active{% endif %}\" href=\"{{ path('admin_flash_messages') }}\">
                                    <i class=\"fas fa-envelope\"></i> Messages Flash
                                </a>
                            </li>
                            <li class=\"nav-item mt-3\">
                                <a class=\"nav-link admin-nav-link text-danger\" href=\"{{ path('app_home') }}\">
                                    <i class=\"fas fa-sign-out-alt\"></i> Quitter l'administration
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4\">
                    {% for type, messages in app.flashes %}
                        {% for message in messages %}
                            <div class=\"alert alert-{{ type }} alert-dismissible fade show mb-4\" role=\"alert\">
                                {{ message }}
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        {% endfor %}
                    {% endfor %}

                    {% block body %}{% endblock %}
                </main>
            </div>
        </div>

        <!-- jQuery first, then Bootstrap JS Bundle with Popper -->
        <script src=\"https://code.jquery.com/jquery-3.7.1.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>

        <!-- DataTables -->
        <script src=\"https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js\"></script>
        <script src=\"https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js\"></script>

        <!-- Admin Notifications -->
        <script src=\"{{ asset('js/admin-notifications.js') }}\"></script>

        {% block javascripts %}{% endblock %}
    </body>
</html>", "admin/base.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/admin/base.html.twig");
    }
}
