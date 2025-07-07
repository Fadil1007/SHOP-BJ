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

/* maintenance.html.twig */
class __TwigTemplate_65c6f46443deb092eb025a9a7bf5b2da extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maintenance.html.twig"));

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

        yield "Maintenance en cours - ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        
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
        yield "<div class=\"container text-center my-5 py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card shadow-lg border-0\">
                <div class=\"card-body p-5\">
                    <img src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/logo/logo-shop-bj.svg"), "html", null, true);
        yield "\" alt=\"SHOP BJ\" class=\"mb-4\" style=\"max-width: 200px;\">
                    
                    <h1 class=\"my-4 text-primary\">Site en maintenance</h1>
                    
                    <div class=\"my-5\">
                        <div class=\"spinner-border text-primary mb-4\" role=\"status\" style=\"width: 3rem; height: 3rem;\">
                            <span class=\"visually-hidden\">Chargement...</span>
                        </div>
                        
                        <p class=\"lead\">Notre site est actuellement en maintenance pour améliorer votre expérience.</p>
                        <p>Nous serons de retour très bientôt avec de nouvelles fonctionnalités et améliorations.</p>
                        <p class=\"text-muted\">Merci de votre compréhension.</p>
                    </div>
                    
                    <div class=\"mt-5\">
                        <p class=\"text-muted\">
                            <small>Pour toute urgence ou question, veuillez nous contacter par email</small>
                        </p>
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
        return "maintenance.html.twig";
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
        return array (  93 => 11,  86 => 6,  76 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Maintenance en cours - {{ parent() }}{% endblock %}

{% block body %}
<div class=\"container text-center my-5 py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card shadow-lg border-0\">
                <div class=\"card-body p-5\">
                    <img src=\"{{ asset('uploads/logo/logo-shop-bj.svg') }}\" alt=\"SHOP BJ\" class=\"mb-4\" style=\"max-width: 200px;\">
                    
                    <h1 class=\"my-4 text-primary\">Site en maintenance</h1>
                    
                    <div class=\"my-5\">
                        <div class=\"spinner-border text-primary mb-4\" role=\"status\" style=\"width: 3rem; height: 3rem;\">
                            <span class=\"visually-hidden\">Chargement...</span>
                        </div>
                        
                        <p class=\"lead\">Notre site est actuellement en maintenance pour améliorer votre expérience.</p>
                        <p>Nous serons de retour très bientôt avec de nouvelles fonctionnalités et améliorations.</p>
                        <p class=\"text-muted\">Merci de votre compréhension.</p>
                    </div>
                    
                    <div class=\"mt-5\">
                        <p class=\"text-muted\">
                            <small>Pour toute urgence ou question, veuillez nous contacter par email</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "maintenance.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/maintenance.html.twig");
    }
}
