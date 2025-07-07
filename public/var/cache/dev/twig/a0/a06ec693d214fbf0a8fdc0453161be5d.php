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

/* contact/index.html.twig */
class __TwigTemplate_792edb6fd38c220c60a1ad847d89533d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

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

        yield "Contact - ";
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
        yield "<div class=\"container py-5\">
    <div class=\"row\">
        <div class=\"col-lg-8 mx-auto\">
            <h1 class=\"mb-4 text-center\">Contactez-nous</h1>
            
            <div class=\"card shadow-sm mb-5\">
                <div class=\"card-body p-lg-5\">
                    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 14
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 15
                yield "                            <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                                ";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fermer\"></button>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "                    
                    ";
        // line 22
        if ((($tmp = (isset($context["messageSent"]) || array_key_exists("messageSent", $context) ? $context["messageSent"] : (function () { throw new RuntimeError('Variable "messageSent" does not exist.', 22, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "                        <div class=\"text-center py-5\">
                            <div class=\"mb-4\">
                                <i class=\"fas fa-check-circle text-success fa-4x\"></i>
                            </div>
                            <h3 class=\"mb-3\">Message envoyé avec succès!</h3>
                            <p class=\"text-muted mb-4\">Merci de nous avoir contactés. Notre équipe vous répondra dans les plus brefs délais.</p>
                            <a href=\"";
            // line 29
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            yield "\" class=\"btn btn-primary\">Retour à l'accueil</a>
                        </div>
                    ";
        } else {
            // line 32
            yield "                        <p class=\"text-muted mb-4\">Nous sommes là pour répondre à toutes vos questions. Remplissez le formulaire ci-dessous et nous vous répondrons dans les plus brefs délais à l'adresse email que vous indiquez.</p>
                        <p class=\"small text-info mb-4\"><i class=\"fas fa-info-circle me-1\"></i> Votre message sera envoyé directement à notre équipe à <strong>shopbj04@gmail.com</strong>.</p>
                        
                        ";
            // line 35
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 35, $this->source); })()), 'form_start');
            yield "
                            <div class=\"mb-3\">
                                ";
            // line 37
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 37, $this->source); })()), "nom", [], "any", false, false, false, 37), 'label');
            yield "
                                ";
            // line 38
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 38, $this->source); })()), "nom", [], "any", false, false, false, 38), 'widget');
            yield "
                                <div class=\"form-error\">
                                    ";
            // line 40
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 40, $this->source); })()), "nom", [], "any", false, false, false, 40), 'errors');
            yield "
                                </div>
                            </div>
                            
                            <div class=\"mb-3\">
                                ";
            // line 45
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 45, $this->source); })()), "email", [], "any", false, false, false, 45), 'label');
            yield "
                                ";
            // line 46
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 46, $this->source); })()), "email", [], "any", false, false, false, 46), 'widget');
            yield "
                                <div class=\"form-error\">
                                    ";
            // line 48
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 48, $this->source); })()), "email", [], "any", false, false, false, 48), 'errors');
            yield "
                                </div>
                            </div>
                            
                            <div class=\"mb-3\">
                                ";
            // line 53
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 53, $this->source); })()), "sujet", [], "any", false, false, false, 53), 'label');
            yield "
                                ";
            // line 54
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 54, $this->source); })()), "sujet", [], "any", false, false, false, 54), 'widget');
            yield "
                                <div class=\"form-error\">
                                    ";
            // line 56
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 56, $this->source); })()), "sujet", [], "any", false, false, false, 56), 'errors');
            yield "
                                </div>
                            </div>
                            
                            <div class=\"mb-4\">
                                ";
            // line 61
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 61, $this->source); })()), "message", [], "any", false, false, false, 61), 'label');
            yield "
                                ";
            // line 62
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 62, $this->source); })()), "message", [], "any", false, false, false, 62), 'widget');
            yield "
                                <div class=\"form-error\">
                                    ";
            // line 64
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 64, $this->source); })()), "message", [], "any", false, false, false, 64), 'errors');
            yield "
                                </div>
                            </div>
                            
                            <div class=\"d-grid\">
                                <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                                    <i class=\"fas fa-paper-plane me-2\"></i>Envoyer le message
                                </button>
                            </div>
                        ";
            // line 73
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 73, $this->source); })()), 'form_end');
            yield "
                    ";
        }
        // line 75
        yield "                </div>
            </div>
        </div>
    </div>
    
    <div class=\"row mt-5\">
        <div class=\"col-md-6 mb-4\">
            <div class=\"card shadow-sm h-100\">
                <div class=\"card-body text-center py-5\">
                    <i class=\"fas fa-phone-alt text-primary fa-3x mb-3\"></i>
                    <h5 class=\"card-title\">Téléphone</h5>
                    <p class=\"card-text text-muted\">
                        +229 01 62 97 68 12<br>
                        Du lundi au samedi, 9h-18h
                    </p>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-6 mb-4\">
            <div class=\"card shadow-sm h-100\">
                <div class=\"card-body text-center py-5\">
                    <i class=\"fas fa-envelope text-primary fa-3x mb-3\"></i>
                    <h5 class=\"card-title\">Email</h5>
                    <p class=\"card-text text-muted\">
                        shopbj04@gmail.com<br>
                        <span class=\"small\">(Nous répondons sous 24-48h)</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"row mt-5\">
        <div class=\"col-12\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body p-0\">
                    <div class=\"ratio ratio-21x9\">
                        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63690.86500254911!2d2.345504379101567!3d6.368578899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023550db4c84b9b%3A0x8b01cb0d5085fab8!2sStade%20de%20l&#39;Amiti%C3%A9%20G%C3%A9n%C3%A9ral%20Mathieu%20K%C3%A9r%C3%A9kou!5e0!3m2!1sfr!2sbj!4v1712033992214!5m2!1sfr!2sbj\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "contact/index.html.twig";
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
        return array (  231 => 75,  226 => 73,  214 => 64,  209 => 62,  205 => 61,  197 => 56,  192 => 54,  188 => 53,  180 => 48,  175 => 46,  171 => 45,  163 => 40,  158 => 38,  154 => 37,  149 => 35,  144 => 32,  138 => 29,  130 => 23,  128 => 22,  125 => 21,  119 => 20,  109 => 16,  104 => 15,  99 => 14,  95 => 13,  86 => 6,  76 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contact - {{ site_name }}{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"row\">
        <div class=\"col-lg-8 mx-auto\">
            <h1 class=\"mb-4 text-center\">Contactez-nous</h1>
            
            <div class=\"card shadow-sm mb-5\">
                <div class=\"card-body p-lg-5\">
                    {% for label, messages in app.flashes %}
                        {% for message in messages %}
                            <div class=\"alert alert-{{ label == 'error' ? 'danger' : label }} alert-dismissible fade show\" role=\"alert\">
                                {{ message }}
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fermer\"></button>
                            </div>
                        {% endfor %}
                    {% endfor %}
                    
                    {% if messageSent %}
                        <div class=\"text-center py-5\">
                            <div class=\"mb-4\">
                                <i class=\"fas fa-check-circle text-success fa-4x\"></i>
                            </div>
                            <h3 class=\"mb-3\">Message envoyé avec succès!</h3>
                            <p class=\"text-muted mb-4\">Merci de nous avoir contactés. Notre équipe vous répondra dans les plus brefs délais.</p>
                            <a href=\"{{ path('app_home') }}\" class=\"btn btn-primary\">Retour à l'accueil</a>
                        </div>
                    {% else %}
                        <p class=\"text-muted mb-4\">Nous sommes là pour répondre à toutes vos questions. Remplissez le formulaire ci-dessous et nous vous répondrons dans les plus brefs délais à l'adresse email que vous indiquez.</p>
                        <p class=\"small text-info mb-4\"><i class=\"fas fa-info-circle me-1\"></i> Votre message sera envoyé directement à notre équipe à <strong>shopbj04@gmail.com</strong>.</p>
                        
                        {{ form_start(contactForm) }}
                            <div class=\"mb-3\">
                                {{ form_label(contactForm.nom) }}
                                {{ form_widget(contactForm.nom) }}
                                <div class=\"form-error\">
                                    {{ form_errors(contactForm.nom) }}
                                </div>
                            </div>
                            
                            <div class=\"mb-3\">
                                {{ form_label(contactForm.email) }}
                                {{ form_widget(contactForm.email) }}
                                <div class=\"form-error\">
                                    {{ form_errors(contactForm.email) }}
                                </div>
                            </div>
                            
                            <div class=\"mb-3\">
                                {{ form_label(contactForm.sujet) }}
                                {{ form_widget(contactForm.sujet) }}
                                <div class=\"form-error\">
                                    {{ form_errors(contactForm.sujet) }}
                                </div>
                            </div>
                            
                            <div class=\"mb-4\">
                                {{ form_label(contactForm.message) }}
                                {{ form_widget(contactForm.message) }}
                                <div class=\"form-error\">
                                    {{ form_errors(contactForm.message) }}
                                </div>
                            </div>
                            
                            <div class=\"d-grid\">
                                <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                                    <i class=\"fas fa-paper-plane me-2\"></i>Envoyer le message
                                </button>
                            </div>
                        {{ form_end(contactForm) }}
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"row mt-5\">
        <div class=\"col-md-6 mb-4\">
            <div class=\"card shadow-sm h-100\">
                <div class=\"card-body text-center py-5\">
                    <i class=\"fas fa-phone-alt text-primary fa-3x mb-3\"></i>
                    <h5 class=\"card-title\">Téléphone</h5>
                    <p class=\"card-text text-muted\">
                        +229 01 62 97 68 12<br>
                        Du lundi au samedi, 9h-18h
                    </p>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-6 mb-4\">
            <div class=\"card shadow-sm h-100\">
                <div class=\"card-body text-center py-5\">
                    <i class=\"fas fa-envelope text-primary fa-3x mb-3\"></i>
                    <h5 class=\"card-title\">Email</h5>
                    <p class=\"card-text text-muted\">
                        shopbj04@gmail.com<br>
                        <span class=\"small\">(Nous répondons sous 24-48h)</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"row mt-5\">
        <div class=\"col-12\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body p-0\">
                    <div class=\"ratio ratio-21x9\">
                        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63690.86500254911!2d2.345504379101567!3d6.368578899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023550db4c84b9b%3A0x8b01cb0d5085fab8!2sStade%20de%20l&#39;Amiti%C3%A9%20G%C3%A9n%C3%A9ral%20Mathieu%20K%C3%A9r%C3%A9kou!5e0!3m2!1sfr!2sbj!4v1712033992214!5m2!1sfr!2sbj\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "contact/index.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/contact/index.html.twig");
    }
}
