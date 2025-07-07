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
class __TwigTemplate_2fecb07e9a6a0610647a13ebdf618ce2 extends Template
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
        $this->parent = $this->load("admin/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Détail du Message de Contact | ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["site_name"] ?? null), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 14));
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
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "read", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-secondary") : ("bg-warning text-dark"));
        yield " p-2\">
                        <i class=\"fas ";
        // line 29
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "read", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-check") : ("fa-envelope"));
        yield " me-1\"></i>
                        ";
        // line 30
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "read", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Lu") : ("Non lu"));
        yield "
                    </span>
                </div>
                <div class=\"card-body\">
                    <div class=\"mb-4\">
                        <h5 class=\"border-bottom pb-2\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "subject", [], "any", false, false, false, 35), "html", null, true);
        yield "</h5>
                        <div class=\"d-flex justify-content-between text-muted small mb-3\">
                            <div>
                                De: <strong>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "name", [], "any", false, false, false, 38), "html", null, true);
        yield "</strong> &lt;";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "email", [], "any", false, false, false, 38), "html", null, true);
        yield "&gt;
                            </div>
                            <div>
                                ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "createdAt", [], "any", false, false, false, 41), "d/m/Y à H:i"), "html", null, true);
        yield "
                            </div>
                        </div>
                        <div class=\"bg-light p-3 rounded border mt-3\">
                            <p class=\"mb-0 message-content\">";
        // line 45
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "message", [], "any", false, false, false, 45), "html", null, true));
        yield "</p>
                        </div>
                    </div>
                    
                    <div class=\"d-flex justify-content-between mt-4\">
                        <div>
                            <a href=\"mailto:";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "email", [], "any", false, false, false, 51), "html", null, true);
        yield "?subject=Re: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "subject", [], "any", false, false, false, 51), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                                <i class=\"fas fa-reply me-1\"></i>Répondre par email
                            </a>
                        </div>
                        
                        <div>
                            ";
        // line 57
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "isRead", [], "any", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 58
            yield "                                <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contact_mark_unread", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "id", [], "any", false, false, false, 58)]), "html", null, true);
            yield "\" class=\"d-inline\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("mark_unread" . CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "id", [], "any", false, false, false, 59))), "html", null, true);
            yield "\">
                                    <button class=\"btn btn-warning\" type=\"submit\">
                                        <i class=\"fas fa-envelope me-1\"></i>Marquer comme non lu
                                    </button>
                                </form>
                            ";
        } else {
            // line 65
            yield "                                <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contact_mark_read", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "id", [], "any", false, false, false, 65)]), "html", null, true);
            yield "\" class=\"d-inline\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("mark_read" . CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "id", [], "any", false, false, false, 66))), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contact_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "id", [], "any", false, false, false, 73)]), "html", null, true);
        yield "\" class=\"d-inline ms-2 delete-form\" data-confirmation=\"Êtes-vous sûr de vouloir supprimer ce message ?\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "id", [], "any", false, false, false, 74))), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "name", [], "any", false, false, false, 93), "html", null, true);
        yield "</p>
                    </div>
                    
                    <div class=\"mb-3\">
                        <p class=\"mb-1 small text-muted\">Email</p>
                        <p class=\"mb-0\">
                            <a href=\"mailto:";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "email", [], "any", false, false, false, 99), "html", null, true);
        yield "\" class=\"text-decoration-none\">
                                ";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "email", [], "any", false, false, false, 100), "html", null, true);
        yield "
                            </a>
                        </p>
                    </div>
                    
                    <div class=\"mb-3\">
                        <p class=\"mb-1 small text-muted\">Date d'envoi</p>
                        <p class=\"mb-0\">";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "createdAt", [], "any", false, false, false, 107), "d/m/Y à H:i:s"), "html", null, true);
        yield "</p>
                    </div>
                    
                    <div class=\"mb-0\">
                        <p class=\"mb-1 small text-muted\">Sujet</p>
                        <p class=\"mb-0\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "subject", [], "any", false, false, false, 112), "html", null, true);
        yield "</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 121
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        return array (  290 => 122,  283 => 121,  270 => 112,  262 => 107,  252 => 100,  248 => 99,  239 => 93,  217 => 74,  213 => 73,  210 => 72,  201 => 66,  196 => 65,  187 => 59,  182 => 58,  180 => 57,  169 => 51,  160 => 45,  153 => 41,  145 => 38,  139 => 35,  131 => 30,  127 => 29,  123 => 28,  115 => 22,  109 => 21,  99 => 17,  94 => 16,  89 => 15,  85 => 14,  77 => 9,  72 => 6,  65 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/contact/show.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/admin/contact/show.html.twig");
    }
}
