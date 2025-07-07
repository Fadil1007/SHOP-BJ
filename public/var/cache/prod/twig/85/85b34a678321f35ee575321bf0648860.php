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

/* security/login.html.twig */
class __TwigTemplate_393cfc33dade7462150709fd05ed5026 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        yield "Connexion - SHOP BJ";
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
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .flash-error {
            font-weight: bold;
            font-size: 1.1em;
            background-color: #f8d7da;
            color: #721c24;
            border: 2px solid #dc3545;
            border-left: 5px solid #dc3545;
            padding: 12px;
            margin-bottom: 20px;
            animation: flashShake 0.6s ease-in-out;
        }

        @keyframes flashShake {
            0% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            50% { transform: translateX(5px); }
            75% { transform: translateX(-5px); }
            100% { transform: translateX(0); }
        }
    </style>
";
        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 31
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/password-toggle.js"), "html", null, true);
        yield "\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.togglePassword').forEach(function(button) {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('data-target');
                    const passwordField = document.getElementById(targetId);
                    if (!passwordField) return;
                    if (passwordField.getAttribute('type') === 'password') {
                        passwordField.setAttribute('type', 'text');
                        this.innerHTML = '<i class=\"fas fa-eye-slash\"></i>';
                    } else {
                        passwordField.setAttribute('type', 'password');
                        this.innerHTML = '<i class=\"fas fa-eye\"></i>';
                    }
                });
            });
        });
    </script>
";
        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 55
        yield "<div class=\"container my-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body p-4\">
                    <h1 class=\"h3 mb-4 text-center\">Connexion</h1>

                    ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 62));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 63
            yield "                        <div class=\"flash-error alert alert-danger text-center\" role=\"alert\">
                            <i class=\"fas fa-exclamation-circle me-2\"></i>
                            ";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "
                    <form method=\"post\">
                        <div class=\"form-floating mb-3\">
                            <input type=\"email\" value=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["last_username"] ?? null), "html", null, true);
        yield "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"email@exemple.com\" autocomplete=\"email\" required autofocus>
                            <label for=\"inputEmail\">Email</label>
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"inputPassword\">Mot de passe</label>
                            <div class=\"input-group\">
                                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Mot de passe\" autocomplete=\"current-password\" required>
                                <button type=\"button\" class=\"btn btn-outline-secondary togglePassword\" data-target=\"inputPassword\">
                                    <i class=\"fas fa-eye\"></i>
                                </button>
                            </div>
                        </div>

                        <div class=\"form-check mb-3\">
                            <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\" id=\"rememberMe\">
                            <label class=\"form-check-label\" for=\"rememberMe\">
                                Se souvenir de moi
                            </label>
                        </div>

                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                        <div class=\"d-grid mb-3\">
                            <button class=\"btn btn-primary btn-lg\" type=\"submit\">
                                Se connecter
                            </button>
                        </div>

                        <div class=\"text-center\">
                            <p>Vous n'avez pas de compte ? <a href=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">Créer un compte</a></p>
                            <p><a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\">Mot de passe oublié ?</a></p>
                        </div>
                    </form>
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
        return "security/login.html.twig";
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
        return array (  217 => 102,  213 => 101,  201 => 92,  177 => 71,  172 => 68,  163 => 65,  159 => 63,  155 => 62,  146 => 55,  139 => 54,  113 => 32,  108 => 31,  101 => 30,  72 => 6,  65 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "security/login.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/security/login.html.twig");
    }
}
