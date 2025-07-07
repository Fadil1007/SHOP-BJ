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

/* admin/flash_message_delete.html.twig */
class __TwigTemplate_f50b9bfb7abb20c10d1697869b3aef59 extends Template
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
        yield "Supprimer le Message Flash";
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
        yield "<div class=\"container-fluid mt-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card border-danger\">
                <div class=\"card-header bg-danger text-white\">
                    <h4 class=\"mb-0\">
                        <i class=\"fas fa-exclamation-triangle\"></i>
                        Confirmer la suppression
                    </h4>
                </div>
                <div class=\"card-body\">
                    <div class=\"alert alert-warning mb-4\">
                        <i class=\"fas fa-warning\"></i>
                        Êtes-vous sûr de vouloir supprimer ce message flash ?
                    </div>

                    <div class=\"mb-4\">
                        <h5>Détails du message :</h5>
                        <ul class=\"list-unstyled\">
                            <li><strong>Titre :</strong> ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["flash_message"] ?? null), "title", [], "any", false, false, false, 25), "html", null, true);
        yield "</li>
                            <li><strong>Type :</strong> 
                                <span class=\"badge bg-";
        // line 27
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["flash_message"] ?? null), "type", [], "any", false, false, false, 27) == "success")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["flash_message"] ?? null), "type", [], "any", false, false, false, 27) == "warning")) ? ("warning") : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["flash_message"] ?? null), "type", [], "any", false, false, false, 27) == "danger")) ? ("danger") : ("info"))))));
        yield "\">
                                    ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["flash_message"] ?? null), "type", [], "any", false, false, false, 28)), "html", null, true);
        yield "
                                </span>
                            </li>
                            <li><strong>Statut :</strong> ";
        // line 31
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["flash_message"] ?? null), "isActive", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
        yield "</li>
                            <li><strong>Message :</strong></li>
                        </ul>
                        <div class=\"border p-3 bg-light\">
                            ";
        // line 35
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["flash_message"] ?? null), "message", [], "any", false, false, false, 35);
        yield "
                        </div>
                    </div>

                    <div class=\"alert alert-danger mb-4\">
                        <i class=\"fas fa-exclamation-circle\"></i>
                        <strong>Attention :</strong> Cette action est <u>irréversible</u> !
                    </div>

                    <div class=\"d-flex gap-3\">
                        <form 
                            method=\"POST\" 
                            action=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_flash_message_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["flash_message"] ?? null), "id", [], "any", false, false, false, 47)]), "html", null, true);
        yield "\"
                            onsubmit=\"return confirm('Confirmer la suppression de ce message flash ?');\"
                        >
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, ($context["flash_message"] ?? null), "id", [], "any", false, false, false, 50))), "html", null, true);
        yield "\">
                            <button type=\"submit\" class=\"btn btn-danger\">
                                <i class=\"fas fa-trash\"></i> Confirmer la suppression
                            </button>
                        </form>

                        <a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_flash_messages");
        yield "\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-arrow-left\"></i> Annuler
                        </a>
                    </div>
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
        return "admin/flash_message_delete.html.twig";
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
        return array (  143 => 56,  134 => 50,  128 => 47,  113 => 35,  106 => 31,  100 => 28,  96 => 27,  91 => 25,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/flash_message_delete.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/admin/flash_message_delete.html.twig");
    }
}
