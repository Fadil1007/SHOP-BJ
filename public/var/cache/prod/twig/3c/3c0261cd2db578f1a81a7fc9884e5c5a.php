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

/* profile/edit.html.twig */
class __TwigTemplate_dfc1b3eacac2f0875cfe05c74ad23bb9 extends Template
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
        yield "Modifier mon profil - SHOP BJ";
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
        yield "<div class=\"container my-5\">
    <div class=\"row\">
        ";
        // line 9
        yield "        <div class=\"col-md-3\">
            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-header bg-primary text-white\">
                    <h5 class=\"card-title mb-0\">Mon compte</h5>
                </div>
                <div class=\"list-group list-group-flush\">
                    <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"list-group-item list-group-item-action\">
                        <i class=\"fas fa-user me-2\"></i> Tableau de bord
                    </a>
                    <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
        yield "\" class=\"list-group-item list-group-item-action active\">
                        <i class=\"fas fa-edit me-2\"></i> Mes informations
                    </a>
                    <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_orders");
        yield "\" class=\"list-group-item list-group-item-action\">
                        <i class=\"fas fa-shopping-bag me-2\"></i> Mes commandes
                    </a>
                    <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_change_password");
        yield "\" class=\"list-group-item list-group-item-action\">
                        <i class=\"fas fa-lock me-2\"></i> Changer de mot de passe
                    </a>
                    <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"list-group-item list-group-item-action text-danger\">
                        <i class=\"fas fa-sign-out-alt me-2\"></i> Déconnexion
                    </a>
                </div>
            </div>
        </div>
        
        ";
        // line 35
        yield "        <div class=\"col-md-9\">
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 37
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 38
                yield "                    <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                        ";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "            
            <div class=\"card shadow-sm\">
                <div class=\"card-header bg-white\">
                    <h4 class=\"card-title mb-0\">Modifier mes informations</h4>
                </div>
                <div class=\"card-body\">
                    ";
        // line 50
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["profileForm"] ?? null), 'form_start', ["attr" => ["class" => "needs-validation"]]);
        yield "
                    ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "_token", [], "any", false, false, false, 51), 'row');
        yield "
                    
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6 mb-3 mb-md-0\">
                            <div class=\"form-floating\">
                                ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "username", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "username", [], "any", false, false, false, 56), "vars", [], "any", false, false, false, 56), "valid", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        yield "
                                ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "username", [], "any", false, false, false, 57), 'label');
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "username", [], "any", false, false, false, 59), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "email", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "email", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "valid", [], "any", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        yield "
                                ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "email", [], "any", false, false, false, 66), 'label');
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "email", [], "any", false, false, false, 68), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6 mb-3 mb-md-0\">
                            <div class=\"form-floating\">
                                ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "firstName", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "firstName", [], "any", false, false, false, 77), "vars", [], "any", false, false, false, 77), "valid", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        yield "
                                ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "firstName", [], "any", false, false, false, 78), 'label');
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "firstName", [], "any", false, false, false, 80), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "lastName", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "lastName", [], "any", false, false, false, 86), "vars", [], "any", false, false, false, 86), "valid", [], "any", false, false, false, 86)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        yield "
                                ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "lastName", [], "any", false, false, false, 87), 'label');
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "lastName", [], "any", false, false, false, 89), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"mb-3\">
                        <div class=\"form-floating\">
                            ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "phoneNumber", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "phoneNumber", [], "any", false, false, false, 97), "vars", [], "any", false, false, false, 97), "valid", [], "any", false, false, false, 97)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid"))), "maxlength" => "14", "pattern" => "\\+229[0-9]*", "inputmode" => "numeric", "onkeypress" => "return (event.charCode >= 48 && event.charCode <= 57) || event.charCode === 43"]]);
        yield "
                            ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "phoneNumber", [], "any", false, false, false, 98), 'label');
        yield "
                            <div class=\"invalid-feedback\">
                                ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "phoneNumber", [], "any", false, false, false, 100), 'errors');
        yield "
                            </div>
                            <small class=\"text-muted\">Format requis: +229 suivi de 10 chiffres</small>
                        </div>
                    </div>
                    
                    <h5 class=\"mt-4 mb-3\">Adresse de livraison</h5>
                    
                    <div class=\"mb-3\">
                        <div class=\"form-floating\">
                            ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "address", [], "any", false, false, false, 110), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "address", [], "any", false, false, false, 110), "vars", [], "any", false, false, false, 110), "valid", [], "any", false, false, false, 110)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        yield "
                            ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "address", [], "any", false, false, false, 111), 'label');
        yield "
                            <div class=\"invalid-feedback\">
                                ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "address", [], "any", false, false, false, 113), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6 mb-3 mb-md-0\">
                            <div class=\"form-floating\">
                                ";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "city", [], "any", false, false, false, 121), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "city", [], "any", false, false, false, 121), "vars", [], "any", false, false, false, 121), "valid", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        yield "
                                ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "city", [], "any", false, false, false, 122), 'label');
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "city", [], "any", false, false, false, 124), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 130
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "postalCode", [], "any", false, false, false, 130), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "postalCode", [], "any", false, false, false, 130), "vars", [], "any", false, false, false, 130), "valid", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        yield "
                                ";
        // line 131
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "postalCode", [], "any", false, false, false, 131), 'label');
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "postalCode", [], "any", false, false, false, 133), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"mb-4\">
                        <div class=\"form-floating\">
                            ";
        // line 141
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "country", [], "any", false, false, false, 141), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "country", [], "any", false, false, false, 141), "vars", [], "any", false, false, false, 141), "valid", [], "any", false, false, false, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        yield "
                            ";
        // line 142
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "country", [], "any", false, false, false, 142), 'label');
        yield "
                            <div class=\"invalid-feedback\">
                                ";
        // line 144
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["profileForm"] ?? null), "country", [], "any", false, false, false, 144), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"d-grid gap-2 d-md-flex justify-content-md-end\">
                        <a href=\"";
        // line 150
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"btn btn-outline-secondary\">Annuler</a>
                        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer les modifications</button>
                    </div>
                    
                    ";
        // line 154
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["profileForm"] ?? null), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 162
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 163
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Format le numéro de téléphone avec le préfixe +229
    const phoneInput = document.getElementById('profile_form_phoneNumber');
    
    if (phoneInput) {
        // Assurez-vous que la valeur commence par +229 si elle n'est pas vide
        phoneInput.addEventListener('blur', function(e) {
            let value = this.value.trim();
            
            // Supprimer le préfixe +229 s'il existe déjà
            if (value.startsWith('+229')) {
                value = value.substring(4);
            }
            
            // Si le champ n'est pas vide, ajouter le préfixe
            if (value) {
                // Suppression de tous les caractères non numériques
                value = value.replace(/\\D/g, '');
                
                // Limitation à 10 chiffres
                if (value.length > 10) {
                    value = value.substring(0, 10);
                }
                
                // Reconstruire le numéro avec préfixe
                this.value = '+229' + value;
            }
        });
        
        // N'autoriser que les chiffres lors de la saisie et limiter à 10 chiffres
        phoneInput.addEventListener('input', function(e) {
            let value = this.value;
            
            // Si la valeur commence par +229, on le préserve et on traite le reste
            if (value.startsWith('+229')) {
                const prefix = '+229';
                const numberPart = value.substring(4).replace(/\\D/g, '');
                
                // Limiter la partie numérique à 10 chiffres
                const truncated = numberPart.substring(0, 10);
                
                // Reconstruire avec le préfixe
                this.value = prefix + truncated;
            } else {
                // Si pas de préfixe, traiter directement
                const numberPart = value.replace(/\\D/g, '');
                
                // Limiter à 10 chiffres
                const truncated = numberPart.substring(0, 10);
                
                // Ajouter le préfixe
                this.value = '+229' + truncated;
            }
        });
    }
});
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profile/edit.html.twig";
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
        return array (  371 => 163,  364 => 162,  352 => 154,  345 => 150,  336 => 144,  331 => 142,  327 => 141,  316 => 133,  311 => 131,  307 => 130,  298 => 124,  293 => 122,  289 => 121,  278 => 113,  273 => 111,  269 => 110,  256 => 100,  251 => 98,  247 => 97,  236 => 89,  231 => 87,  227 => 86,  218 => 80,  213 => 78,  209 => 77,  197 => 68,  192 => 66,  188 => 65,  179 => 59,  174 => 57,  170 => 56,  162 => 51,  158 => 50,  150 => 44,  144 => 43,  134 => 39,  129 => 38,  124 => 37,  120 => 36,  117 => 35,  107 => 27,  101 => 24,  95 => 21,  89 => 18,  83 => 15,  75 => 9,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profile/edit.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/profile/edit.html.twig");
    }
}
