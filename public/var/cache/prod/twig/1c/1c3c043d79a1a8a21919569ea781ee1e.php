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

/* security/register.html.twig */
class __TwigTemplate_1a7cd565c2192a26ee9773f694d866a3 extends Template
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
        yield "Inscription - SHOP BJ";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/password-toggle.js"), "html", null, true);
        yield "\"></script>
    <script>
        // Script spécifique pour cette page
        document.addEventListener('DOMContentLoaded', function() {
            // Fonction directe pour gérer les boutons de bascule sur cette page
            document.querySelectorAll('.togglePassword').forEach(function(button) {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Récupérer l'ID du champ de mot de passe cible
                    const targetId = this.getAttribute('data-target');
                    console.log(\"Toggle direct pour:\", targetId);
                    
                    // Trouver le champ de mot de passe associé
                    const passwordField = document.getElementById(targetId);
                    if (!passwordField) {
                        console.error(\"Champ de mot de passe non trouvé:\", targetId);
                        return;
                    }
                    
                    // Forcer la bascule du type
                    if (passwordField.getAttribute('type') === 'password') {
                        passwordField.setAttribute('type', 'text');
                        this.innerHTML = '<i class=\"fas fa-eye-slash\"></i>';
                        console.log(\"Mot de passe affiché\");
                    } else {
                        passwordField.setAttribute('type', 'password');
                        this.innerHTML = '<i class=\"fas fa-eye\"></i>';
                        console.log(\"Mot de passe masqué\");
                    }
                });
            });
            console.log(\"Script de bascule direct initialisé pour la page d'inscription\");
        });
    </script>
";
        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 45
        yield "<div class=\"container my-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body p-4\">
                    <h1 class=\"h3 mb-4 text-center\">Créer un compte</h1>
                    
                    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 52));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 53
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 54
                yield "                            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                                ";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "                    
                    ";
        // line 61
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_start', ["attr" => ["class" => "needs-validation"]]);
        yield "
                    
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6 mb-3 mb-md-0\">
                            <div class=\"form-floating\">
                                ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "username", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "username", [], "any", false, false, false, 66), "vars", [], "any", false, false, false, 66), "valid", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        yield "
                                ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "username", [], "any", false, false, false, 67), 'label');
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "username", [], "any", false, false, false, 69), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 75), "vars", [], "any", false, false, false, 75), "valid", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        yield "
                                ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 76), 'label');
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 78), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6 mb-3 mb-md-0\">
                            <div class=\"form-floating\">
                                ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "firstName", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "firstName", [], "any", false, false, false, 87), "vars", [], "any", false, false, false, 87), "valid", [], "any", false, false, false, 87)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        yield "
                                ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "firstName", [], "any", false, false, false, 88), 'label');
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "firstName", [], "any", false, false, false, 90), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "lastName", [], "any", false, false, false, 96), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "lastName", [], "any", false, false, false, 96), "vars", [], "any", false, false, false, 96), "valid", [], "any", false, false, false, 96)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        yield "
                                ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "lastName", [], "any", false, false, false, 97), 'label');
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "lastName", [], "any", false, false, false, 99), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6 mb-3 mb-md-0\">
                            <div>
                                ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 108), "first", [], "any", false, false, false, 108), 'label');
        yield "
                                <div class=\"input-group\">
                                    ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 110), "first", [], "any", false, false, false, 110), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 110), "first", [], "any", false, false, false, 110), "vars", [], "any", false, false, false, 110), "valid", [], "any", false, false, false, 110)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        yield "
                                    <button type=\"button\" class=\"btn btn-outline-secondary togglePassword\" data-target=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 111), "first", [], "any", false, false, false, 111), "vars", [], "any", false, false, false, 111), "id", [], "any", false, false, false, 111), "html", null, true);
        yield "\">
                                        <i class=\"fas fa-eye\"></i>
                                    </button>
                                </div>
                                <div class=\"invalid-feedback\">
                                    ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 116), "first", [], "any", false, false, false, 116), 'errors');
        yield "
                                </div>
                                ";
        // line 118
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 118), "first", [], "any", false, false, false, 118), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 119
            yield "                                    <div class=\"alert alert-danger mt-2 small\">
                                        <i class=\"fas fa-exclamation-triangle\"></i>
                                        ";
            // line 121
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 121), "first", [], "any", false, false, false, 121), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 124
        yield "                                <div class=\"form-text mt-1\">
                                    <small class=\"text-muted\">
                                        Le mot de passe doit contenir au moins 8 caractères, une lettre majuscule et un symbole spécial(@ \$ ! . ? ,).
                                        <br>Exemple: Johndoe@123 (au moins 8 caractères avec 1 majuscule, 1 chiffre et 1 symbole spécial)
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div>
                                ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 134), "second", [], "any", false, false, false, 134), 'label');
        yield "
                                <div class=\"input-group\">
                                    ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 136), "second", [], "any", false, false, false, 136), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 136), "second", [], "any", false, false, false, 136), "vars", [], "any", false, false, false, 136), "valid", [], "any", false, false, false, 136)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        yield "
                                    <button type=\"button\" class=\"btn btn-outline-secondary togglePassword\" data-target=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 137), "second", [], "any", false, false, false, 137), "vars", [], "any", false, false, false, 137), "id", [], "any", false, false, false, 137), "html", null, true);
        yield "\">
                                        <i class=\"fas fa-eye\"></i>
                                    </button>
                                </div>
                                <div class=\"invalid-feedback\">
                                    ";
        // line 142
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 142), "second", [], "any", false, false, false, 142), 'errors');
        yield "
                                </div>
                                ";
        // line 144
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 144), "second", [], "any", false, false, false, 144), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 145
            yield "                                    <div class=\"alert alert-danger mt-2 small\">
                                        <i class=\"fas fa-exclamation-triangle\"></i>
                                        ";
            // line 147
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 147), "second", [], "any", false, false, false, 147), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 150
        yield "                                <div class=\"form-text mt-1\">
                                    <small class=\"text-muted\">
                                        Exemple: Johndoe@123
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"mb-3\">
                        <div class=\"form-check\">
                            ";
        // line 161
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "agreeTerms", [], "any", false, false, false, 161), 'widget', ["attr" => ["class" => ("form-check-input" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "agreeTerms", [], "any", false, false, false, 161), "vars", [], "any", false, false, false, 161), "valid", [], "any", false, false, false, 161)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        yield "
                            <label class=\"form-check-label\" for=\"";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "agreeTerms", [], "any", false, false, false, 162), "vars", [], "any", false, false, false, 162), "id", [], "any", false, false, false, 162), "html", null, true);
        yield "\">
                                En cochant cette case, j'accepte les <a href=\"";
        // line 163
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("terms_of_service");
        yield "\" target=\"_blank\">conditions d'utilisation</a> et la <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("privacy_policy");
        yield "\" target=\"_blank\">politique de confidentialité</a> de SHOP BJ.
                            </label>
                            <div class=\"invalid-feedback\">
                                ";
        // line 166
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "agreeTerms", [], "any", false, false, false, 166), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"d-grid mb-3\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg\">S'inscrire</button>
                    </div>
                    
                    <div class=\"text-center\">
                        <p>Vous avez déjà un compte ? <a href=\"";
        // line 176
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Se connecter</a></p>
                    </div>
                    
                    ";
        // line 179
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_end');
        yield "
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
        return "security/register.html.twig";
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
        return array (  380 => 179,  374 => 176,  361 => 166,  353 => 163,  349 => 162,  345 => 161,  332 => 150,  326 => 147,  322 => 145,  320 => 144,  315 => 142,  307 => 137,  303 => 136,  298 => 134,  286 => 124,  280 => 121,  276 => 119,  274 => 118,  269 => 116,  261 => 111,  257 => 110,  252 => 108,  240 => 99,  235 => 97,  231 => 96,  222 => 90,  217 => 88,  213 => 87,  201 => 78,  196 => 76,  192 => 75,  183 => 69,  178 => 67,  174 => 66,  166 => 61,  163 => 60,  157 => 59,  147 => 55,  142 => 54,  137 => 53,  133 => 52,  124 => 45,  117 => 44,  76 => 7,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "security/register.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/security/register.html.twig");
    }
}
