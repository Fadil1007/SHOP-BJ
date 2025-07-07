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

/* admin/contact/show.html.twig */
class __TwigTemplate_99d32670edd3f3ce2f00b469ff3f8aa4 extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/contact/show.html.twig"));

        $this->parent = $this->load("admin/base.html.twig", 1);
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

        yield "Détail du Message de Contact | ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["site_name"]) || array_key_exists("site_name", $context) ? $context["site_name"] : (function () { throw new RuntimeError('Variable "site_name" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container-fluid py-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3 mb-0 text-gray-800\">Détail du Message</h1>
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contact_index");
        yield "\" class=\"btn btn-sm btn-outline-secondary\">
            <i class=\"fas fa-arrow-left me-1\"></i>Retour à la liste
        </a>
    </div>
    
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 15
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 16
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                ";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "    
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3 d-flex justify-content-between align-items-center\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Message</h6>
                    <span class=\"badge ";
        // line 28
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 28, $this->source); })()), "read", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-secondary") : ("bg-warning text-dark"));
        yield " p-2\">
                        <i class=\"fas ";
        // line 29
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 29, $this->source); })()), "read", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-check") : ("fa-envelope"));
        yield " me-1\"></i>
                        ";
        // line 30
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 30, $this->source); })()), "read", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Lu") : ("Non lu"));
        yield "
                    </span>
                </div>
                <div class=\"card-body\">
                    <div class=\"mb-4\">
                        <h5 class=\"border-bottom pb-2\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 35, $this->source); })()), "subject", [], "any", false, false, false, 35), "html", null, true);
        yield "</h5>
                        <div class=\"d-flex justify-content-between text-muted small mb-3\">
                            <div>
                                De: <strong>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, false, 38), "html", null, true);
        yield "</strong> &lt;";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 38, $this->source); })()), "email", [], "any", false, false, false, 38), "html", null, true);
        yield "&gt;
                            </div>
                            <div>
                                ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 41, $this->source); })()), "createdAt", [], "any", false, false, false, 41), "d/m/Y à H:i"), "html", null, true);
        yield "
                            </div>
                        </div>
                        <div class=\"bg-light p-3 rounded border mt-3\">
                            <p class=\"mb-0 message-content\">";
        // line 45
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 45, $this->source); })()), "message", [], "any", false, false, false, 45), "html", null, true));
        yield "</p>
                        </div>
                    </div>
                    
                    <div class=\"d-flex justify-content-between mt-4\">
                        <div>
                            <a href=\"mailto:";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 51, $this->source); })()), "email", [], "any", false, false, false, 51), "html", null, true);
        yield "?subject=Re: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 51, $this->source); })()), "subject", [], "any", false, false, false, 51), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                                <i class=\"fas fa-reply me-1\"></i>Répondre par email
                            </a>
                        </div>
                        
                        <div>
                            ";
        // line 57
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 57, $this->source); })()), "isRead", [], "any", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 58
            yield "                                <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contact_mark_unread", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58)]), "html", null, true);
            yield "\" class=\"d-inline\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("mark_unread" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59))), "html", null, true);
            yield "\">
                                    <button class=\"btn btn-warning\" type=\"submit\">
                                        <i class=\"fas fa-envelope me-1\"></i>Marquer comme non lu
                                    </button>
                                </form>
                            ";
        } else {
            // line 65
            yield "                                <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contact_mark_read", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65)]), "html", null, true);
            yield "\" class=\"d-inline\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("mark_read" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 66, $this->source); })()), "id", [], "any", false, false, false, 66))), "html", null, true);
            yield "\">
                                    <button class=\"btn btn-secondary\" type=\"submit\">
                                        <i class=\"fas fa-check me-1\"></i>Marquer comme lu
                                    </button>
                                </form>
                            ";
        }
        // line 72
        yield "                            
                            <form method=\"post\" action=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contact_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73)]), "html", null, true);
        yield "\" class=\"d-inline ms-2 delete-form\" data-confirmation=\"Êtes-vous sûr de vouloir supprimer ce message ?\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 74, $this->source); })()), "id", [], "any", false, false, false, 74))), "html", null, true);
        yield "\">
                                <button class=\"btn btn-danger\" type=\"submit\">
                                    <i class=\"fas fa-trash me-1\"></i>Supprimer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-4\">
            <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Informations</h6>
                </div>
                <div class=\"card-body\">
                    <div class=\"mb-3\">
                        <p class=\"mb-1 small text-muted\">Expéditeur</p>
                        <p class=\"mb-0\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 93, $this->source); })()), "name", [], "any", false, false, false, 93), "html", null, true);
        yield "</p>
                    </div>
                    
                    <div class=\"mb-3\">
                        <p class=\"mb-1 small text-muted\">Email</p>
                        <p class=\"mb-0\">
                            <a href=\"mailto:";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 99, $this->source); })()), "email", [], "any", false, false, false, 99), "html", null, true);
        yield "\" class=\"text-decoration-none\">
                                ";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 100, $this->source); })()), "email", [], "any", false, false, false, 100), "html", null, true);
        yield "
                            </a>
                        </p>
                    </div>
                    
                    <div class=\"mb-3\">
                        <p class=\"mb-1 small text-muted\">Date d'envoi</p>
                        <p class=\"mb-0\">";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 107, $this->source); })()), "createdAt", [], "any", false, false, false, 107), "d/m/Y à H:i:s"), "html", null, true);
        yield "</p>
                    </div>
                    
                    <div class=\"mb-0\">
                        <p class=\"mb-1 small text-muted\">Sujet</p>
                        <p class=\"mb-0\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 112, $this->source); })()), "subject", [], "any", false, false, false, 112), "html", null, true);
        yield "</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 121
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 122
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Ajout d'une confirmation pour les formulaires de suppression
        document.querySelectorAll('.delete-form').forEach(function(form) {
            form.addEventListener('submit', function(e) {
                if (!confirm(this.dataset.confirmation)) {
                    e.preventDefault();
                    return false;
                }
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
        return "admin/contact/show.html.twig";
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
        return array (  311 => 122,  301 => 121,  285 => 112,  277 => 107,  267 => 100,  263 => 99,  254 => 93,  232 => 74,  228 => 73,  225 => 72,  216 => 66,  211 => 65,  202 => 59,  197 => 58,  195 => 57,  184 => 51,  175 => 45,  168 => 41,  160 => 38,  154 => 35,  146 => 30,  142 => 29,  138 => 28,  130 => 22,  124 => 21,  114 => 17,  109 => 16,  104 => 15,  100 => 14,  92 => 9,  87 => 6,  77 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Détail du Message de Contact | {{ site_name }}{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3 mb-0 text-gray-800\">Détail du Message</h1>
        <a href=\"{{ path('app_admin_contact_index') }}\" class=\"btn btn-sm btn-outline-secondary\">
            <i class=\"fas fa-arrow-left me-1\"></i>Retour à la liste
        </a>
    </div>
    
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endfor %}
    {% endfor %}
    
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3 d-flex justify-content-between align-items-center\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Message</h6>
                    <span class=\"badge {{ contact.read ? 'bg-secondary' : 'bg-warning text-dark' }} p-2\">
                        <i class=\"fas {{ contact.read ? 'fa-check' : 'fa-envelope' }} me-1\"></i>
                        {{ contact.read ? 'Lu' : 'Non lu' }}
                    </span>
                </div>
                <div class=\"card-body\">
                    <div class=\"mb-4\">
                        <h5 class=\"border-bottom pb-2\">{{ contact.subject }}</h5>
                        <div class=\"d-flex justify-content-between text-muted small mb-3\">
                            <div>
                                De: <strong>{{ contact.name }}</strong> &lt;{{ contact.email }}&gt;
                            </div>
                            <div>
                                {{ contact.createdAt|date('d/m/Y à H:i') }}
                            </div>
                        </div>
                        <div class=\"bg-light p-3 rounded border mt-3\">
                            <p class=\"mb-0 message-content\">{{ contact.message|nl2br }}</p>
                        </div>
                    </div>
                    
                    <div class=\"d-flex justify-content-between mt-4\">
                        <div>
                            <a href=\"mailto:{{ contact.email }}?subject=Re: {{ contact.subject }}\" class=\"btn btn-primary\">
                                <i class=\"fas fa-reply me-1\"></i>Répondre par email
                            </a>
                        </div>
                        
                        <div>
                            {% if contact.isRead %}
                                <form method=\"post\" action=\"{{ path('app_admin_contact_mark_unread', {'id': contact.id}) }}\" class=\"d-inline\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('mark_unread' ~ contact.id) }}\">
                                    <button class=\"btn btn-warning\" type=\"submit\">
                                        <i class=\"fas fa-envelope me-1\"></i>Marquer comme non lu
                                    </button>
                                </form>
                            {% else %}
                                <form method=\"post\" action=\"{{ path('app_admin_contact_mark_read', {'id': contact.id}) }}\" class=\"d-inline\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('mark_read' ~ contact.id) }}\">
                                    <button class=\"btn btn-secondary\" type=\"submit\">
                                        <i class=\"fas fa-check me-1\"></i>Marquer comme lu
                                    </button>
                                </form>
                            {% endif %}
                            
                            <form method=\"post\" action=\"{{ path('app_admin_contact_delete', {'id': contact.id}) }}\" class=\"d-inline ms-2 delete-form\" data-confirmation=\"Êtes-vous sûr de vouloir supprimer ce message ?\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ contact.id) }}\">
                                <button class=\"btn btn-danger\" type=\"submit\">
                                    <i class=\"fas fa-trash me-1\"></i>Supprimer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-4\">
            <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Informations</h6>
                </div>
                <div class=\"card-body\">
                    <div class=\"mb-3\">
                        <p class=\"mb-1 small text-muted\">Expéditeur</p>
                        <p class=\"mb-0\">{{ contact.name }}</p>
                    </div>
                    
                    <div class=\"mb-3\">
                        <p class=\"mb-1 small text-muted\">Email</p>
                        <p class=\"mb-0\">
                            <a href=\"mailto:{{ contact.email }}\" class=\"text-decoration-none\">
                                {{ contact.email }}
                            </a>
                        </p>
                    </div>
                    
                    <div class=\"mb-3\">
                        <p class=\"mb-1 small text-muted\">Date d'envoi</p>
                        <p class=\"mb-0\">{{ contact.createdAt|date('d/m/Y à H:i:s') }}</p>
                    </div>
                    
                    <div class=\"mb-0\">
                        <p class=\"mb-1 small text-muted\">Sujet</p>
                        <p class=\"mb-0\">{{ contact.subject }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Ajout d'une confirmation pour les formulaires de suppression
        document.querySelectorAll('.delete-form').forEach(function(form) {
            form.addEventListener('submit', function(e) {
                if (!confirm(this.dataset.confirmation)) {
                    e.preventDefault();
                    return false;
                }
            });
        });
    });
</script>
{% endblock %}", "admin/contact/show.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/admin/contact/show.html.twig");
    }
}
