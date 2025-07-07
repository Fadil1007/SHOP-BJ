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

/* components/flash_messages.html.twig */
class __TwigTemplate_c6f60d689670a514a04650b75c91749c extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["flashMessagesPublic"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 1), "attributes", [], "any", false, false, false, 1), "get", ["flashMessagesPublic", []], "method", false, false, false, 1);
        // line 2
        yield "
";
        // line 4
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["flashMessagesPublic"] ?? null)) > 0)) {
            // line 5
            yield "    <div id=\"flash-messages-container\" class=\"container-fluid mt-3\">
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["flashMessagesPublic"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 7
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["flashMessage"], "type", [], "any", false, false, false, 7), "html", null, true);
                yield " alert-dismissible fade show flash-message-closable\" 
                 role=\"alert\" 
                 data-flash-id=\"";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["flashMessage"], "id", [], "any", false, false, false, 9), "html", null, true);
                yield "\"
                 style=\"position: relative;\">
                ";
                // line 11
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["flashMessage"], "title", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 12
                    yield "                    <strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["flashMessage"], "title", [], "any", false, false, false, 12), "html", null, true);
                    yield "</strong>
                ";
                }
                // line 14
                yield "                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["flashMessage"], "message", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 15
                    yield "                    ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["flashMessage"], "title", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "<br>";
                    }
                    // line 16
                    yield "                    ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["flashMessage"], "message", [], "any", false, false, false, 16);
                    yield "
                ";
                }
                // line 18
                yield "                <button type=\"button\" class=\"btn-close\" 
                        aria-label=\"Close\" 
                        onclick=\"closeFlashMessage(";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["flashMessage"], "id", [], "any", false, false, false, 20), "html", null, true);
                yield ")\">
                </button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['flashMessage'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            yield "    </div>

    <style>
    .flash-message-closable {
        display: block !important;
        visibility: visible !important;
        opacity: 1 !important;
    }
    .flash-message-hidden {
        display: none !important;
    }
    </style>

    <script>
    // Gestion de la fermeture manuelle des messages flash
    function closeFlashMessage(messageId) {
        const messageElement = document.querySelector(`[data-flash-id=\"\${messageId}\"]`);
        if (messageElement) {
            messageElement.classList.add('flash-message-hidden');
            console.log('Message flash fermé:', messageId);
        }
    }

    // Les messages réapparaissent automatiquement à chaque actualisation
    // car ils ne sont pas supprimés définitivement, juste cachés temporairement
    console.log('Messages flash: ";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["flashMessagesPublic"] ?? null)), "html", null, true);
            yield " message(s) affiché(s)');
    </script>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/flash_messages.html.twig";
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
        return array (  130 => 49,  103 => 24,  93 => 20,  89 => 18,  83 => 16,  78 => 15,  75 => 14,  69 => 12,  67 => 11,  62 => 9,  56 => 7,  52 => 6,  49 => 5,  47 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/flash_messages.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/components/flash_messages.html.twig");
    }
}
