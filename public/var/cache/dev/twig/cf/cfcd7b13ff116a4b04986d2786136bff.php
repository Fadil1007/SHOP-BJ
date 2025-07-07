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

/* admin/layout_custom.html.twig */
class __TwigTemplate_b0fe5e12e3ad3da65c0c7b1d38d64c9f extends Template
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
            'body' => [$this, 'block_body'],
            'admin_content' => [$this, 'block_admin_content'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layout_custom.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "<div class=\"container-fluid\">
    <div class=\"row\">
        <!-- Sidebar -->
        <div class=\"col-md-3 col-lg-2 d-md-block bg-light sidebar collapse\" style=\"min-height: calc(100vh - 56px);\">
            <div class=\"position-sticky pt-3\">
                <h6 class=\"sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted\">
                    <span>Administration</span>
                </h6>
                <ul class=\"nav flex-column\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 14
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "get", ["_route"], "method", false, false, false, 14) == "admin_index")) {
            yield "active";
        }
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        yield "\">
                            <i class=\"fas fa-tachometer-alt me-2\"></i>
                            Tableau de bord
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 20
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", [], "any", false, false, false, 20), "get", ["_route"], "method", false, false, false, 20) == "admin_products")) {
            yield "active";
        }
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products");
        yield "\">
                            <i class=\"fas fa-box-open me-2\"></i>
                            Produits
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 26
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26), "get", ["_route"], "method", false, false, false, 26) == "admin_users")) {
            yield "active";
        }
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        yield "\">
                            <i class=\"fas fa-users me-2\"></i>
                            Utilisateurs
                        </a>
                    </li>
                </ul>
                
                <h6 class=\"sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted\">
                    <span>Configuration</span>
                </h6>
                <ul class=\"nav flex-column mb-2\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link";
        // line 38
        yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "get", ["_route"], "method", false, false, false, 38)) && is_string($_v1 = "admin_config_") && str_starts_with($_v0, $_v1))) ? (" active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_config_index");
        yield "\">
                            <i class=\"fas fa-cog me-2\"></i>
                            Paramètres
                        </a>
                    </li>
                </ul>
                
                <div class=\"border-top my-3\"></div>
                
                <ul class=\"nav flex-column\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                            <i class=\"fas fa-home me-2\"></i>
                            Retour au site
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                            <i class=\"fas fa-sign-out-alt me-2\"></i>
                            Déconnexion
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main content -->
        <main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4\">
            ";
        // line 66
        yield from $this->unwrap()->yieldBlock('admin_content', $context, $blocks);
        // line 67
        yield "        </main>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_admin_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/layout_custom.html.twig";
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
        return array (  177 => 66,  166 => 67,  164 => 66,  150 => 55,  141 => 49,  125 => 38,  106 => 26,  93 => 20,  80 => 14,  68 => 4,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"row\">
        <!-- Sidebar -->
        <div class=\"col-md-3 col-lg-2 d-md-block bg-light sidebar collapse\" style=\"min-height: calc(100vh - 56px);\">
            <div class=\"position-sticky pt-3\">
                <h6 class=\"sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted\">
                    <span>Administration</span>
                </h6>
                <ul class=\"nav flex-column\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if app.request.get('_route') == 'admin_index' %}active{% endif %}\" href=\"{{ path('admin_index') }}\">
                            <i class=\"fas fa-tachometer-alt me-2\"></i>
                            Tableau de bord
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if app.request.get('_route') == 'admin_products' %}active{% endif %}\" href=\"{{ path('admin_products') }}\">
                            <i class=\"fas fa-box-open me-2\"></i>
                            Produits
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if app.request.get('_route') == 'admin_users' %}active{% endif %}\" href=\"{{ path('admin_users') }}\">
                            <i class=\"fas fa-users me-2\"></i>
                            Utilisateurs
                        </a>
                    </li>
                </ul>
                
                <h6 class=\"sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted\">
                    <span>Configuration</span>
                </h6>
                <ul class=\"nav flex-column mb-2\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link{{ app.request.get('_route') starts with 'admin_config_' ? ' active' : '' }}\" href=\"{{ path('admin_config_index') }}\">
                            <i class=\"fas fa-cog me-2\"></i>
                            Paramètres
                        </a>
                    </li>
                </ul>
                
                <div class=\"border-top my-3\"></div>
                
                <ul class=\"nav flex-column\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_home') }}\">
                            <i class=\"fas fa-home me-2\"></i>
                            Retour au site
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">
                            <i class=\"fas fa-sign-out-alt me-2\"></i>
                            Déconnexion
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main content -->
        <main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4\">
            {% block admin_content %}{% endblock %}
        </main>
    </div>
</div>
{% endblock %}", "admin/layout_custom.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/admin/layout_custom.html.twig");
    }
}
