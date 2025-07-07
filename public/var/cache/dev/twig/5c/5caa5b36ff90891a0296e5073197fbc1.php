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

/* form/color_choice_type.html.twig */
class __TwigTemplate_5ca454d69459ebc1b4c1991d1e07c8cf extends Template
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
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('choice_widget_expanded', $context, $blocks);
        // line 20
        yield "
";
        // line 21
        yield from $this->unwrap()->yieldBlock('checkbox_widget', $context, $blocks);
        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_expanded(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "    <div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 4
            yield "            <div class=\"form-check\">";
            // line 5
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 6
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 6), "")) : ("")), "translation_domain" =>             // line 7
($context["choice_translation_domain"] ?? null), "valid" =>             // line 8
($context["valid"] ?? null)]);
            // line 11
            $context["color_value"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 11), "value", [], "any", false, false, false, 11);
            // line 12
            yield "                <label class=\"form-check-label\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12), "html", null, true);
            yield "\">
                    <span class=\"admin-color-swatch color-swatch-";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["color_value"] ?? null), "html", null, true);
            yield "\"></span>
                    ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 14), "label", [], "any", false, false, false, 14), [], ($context["choice_translation_domain"] ?? null)), "html", null, true);
            yield "
                </label>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "    </div>
";
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "    <input type=\"checkbox\" ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            yield " value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\"";
        }
        if ((($tmp = ($context["checked"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " checked=\"checked\"";
        }
        yield " />
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "form/color_choice_type.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  111 => 22,  104 => 21,  98 => 18,  88 => 14,  84 => 13,  79 => 12,  77 => 11,  75 => 8,  74 => 7,  73 => 6,  72 => 5,  70 => 4,  66 => 3,  61 => 2,  54 => 1,  49 => 21,  46 => 20,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "form/color_choice_type.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/form/color_choice_type.html.twig");
    }
}
