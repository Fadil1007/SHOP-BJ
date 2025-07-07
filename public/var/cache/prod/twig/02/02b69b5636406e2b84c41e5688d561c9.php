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

/* reset_password/request.html.twig */
class __TwigTemplate_71ed7e5b2d1a1c4be875d976fb8cba84 extends Template
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
        yield "Réinitialiser votre mot de passe - SHOP BJ";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<section class=\"container my-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
            <div class=\"card shadow\">
                <div class=\"card-header bg-primary text-white\">
                    <h1 class=\"h4 mb-0\">Réinitialisation du mot de passe</h1>
                </div>
                <div class=\"card-body\">
                    <p class=\"text-muted mb-4\">
                        Entrez votre adresse email pour recevoir un lien de réinitialisation de votre mot de passe.
                    </p>

                    ";
        // line 18
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["requestForm"] ?? null), 'form_start');
        yield "
                        ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["requestForm"] ?? null), "email", [], "any", false, false, false, 19), 'row');
        yield "

                        <div class=\"d-grid gap-2\">
                            <button class=\"btn btn-primary\" type=\"submit\">
                                Envoyer le lien de réinitialisation
                            </button>
                        </div>
                    ";
        // line 26
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["requestForm"] ?? null), 'form_end');
        yield "

                    <hr class=\"my-4\">
                    <div class=\"text-center\">
                        <p>
                            <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-decoration-none\">
                                <i class=\"fas fa-arrow-left me-2\"></i>Retour à la connexion
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reset_password/request.html.twig";
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
        return array (  106 => 31,  98 => 26,  88 => 19,  84 => 18,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "reset_password/request.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/reset_password/request.html.twig");
    }
}
