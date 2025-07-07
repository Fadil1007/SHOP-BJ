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

/* @KnpPaginator/Pagination/sliding.html.twig */
class __TwigTemplate_59ccefb32d521de184141bb3bcf7de4e extends Template
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
        // line 2
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 3
            yield "    <div class=\"pagination\">
        ";
            // line 4
            if ((array_key_exists("first", $context) && (($context["current"] ?? null) != ($context["first"] ?? null)))) {
                // line 5
                yield "            <span class=\"first\">
                <a href=\"";
                // line 6
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["query"] ?? null), [ (string)($context["pageParameterName"] ?? null) => ($context["first"] ?? null)])), "html", null, true);
                yield "\">&lt;&lt;</a>
            </span>
        ";
            }
            // line 9
            yield "
        ";
            // line 10
            if (array_key_exists("previous", $context)) {
                // line 11
                yield "            <span class=\"previous\">
                <a rel=\"prev\" href=\"";
                // line 12
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["query"] ?? null), [ (string)($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                yield "\">&lt;</a>
            </span>
        ";
            }
            // line 15
            yield "
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 17
                yield "            ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 18
                    yield "                <span class=\"page\">
                    <a href=\"";
                    // line 19
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["query"] ?? null), [ (string)($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</a>
                </span>
            ";
                } else {
                    // line 22
                    yield "                <span class=\"current\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</span>
            ";
                }
                // line 24
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            yield "
        ";
            // line 26
            if (array_key_exists("next", $context)) {
                // line 27
                yield "            <span class=\"next\">
                <a rel=\"next\" href=\"";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["query"] ?? null), [ (string)($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                yield "\">&gt;</a>
            </span>
        ";
            }
            // line 31
            yield "
        ";
            // line 32
            if ((array_key_exists("last", $context) && (($context["current"] ?? null) != ($context["last"] ?? null)))) {
                // line 33
                yield "            <span class=\"last\">
                <a href=\"";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["query"] ?? null), [ (string)($context["pageParameterName"] ?? null) => ($context["last"] ?? null)])), "html", null, true);
                yield "\">&gt;&gt;</a>
            </span>
        ";
            }
            // line 37
            yield "    </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@KnpPaginator/Pagination/sliding.html.twig";
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
        return array (  133 => 37,  127 => 34,  124 => 33,  122 => 32,  119 => 31,  113 => 28,  110 => 27,  108 => 26,  105 => 25,  99 => 24,  93 => 22,  85 => 19,  82 => 18,  79 => 17,  75 => 16,  72 => 15,  66 => 12,  63 => 11,  61 => 10,  58 => 9,  52 => 6,  49 => 5,  47 => 4,  44 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@KnpPaginator/Pagination/sliding.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/vendor/knplabs/knp-paginator-bundle/templates/Pagination/sliding.html.twig");
    }
}
