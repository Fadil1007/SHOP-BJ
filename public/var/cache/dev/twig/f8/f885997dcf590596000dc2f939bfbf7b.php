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
class __TwigTemplate_a9edb30416c916003f46eee9b4d4064c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/color_choice_type.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('choice_widget_expanded', $context, $blocks);
        // line 20
        yield "
";
        // line 21
        yield from $this->unwrap()->yieldBlock('checkbox_widget', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_expanded(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 2
        yield "    <div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 4
            yield "            <div class=\"form-check\">";
            // line 5
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 6
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 6, $this->source); })()), "class", [], "any", false, false, false, 6), "")) : ("")), "translation_domain" =>             // line 7
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 7, $this->source); })()), "valid" =>             // line 8
(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 8, $this->source); })())]);
            // line 11
            $context["color_value"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 11), "value", [], "any", false, false, false, 11);
            // line 12
            yield "                <label class=\"form-check-label\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12), "html", null, true);
            yield "\">
                    <span class=\"admin-color-swatch color-swatch-";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color_value"]) || array_key_exists("color_value", $context) ? $context["color_value"] : (function () { throw new RuntimeError('Variable "color_value" does not exist.', 13, $this->source); })()), "html", null, true);
            yield "\"></span>
                    ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 14), "label", [], "any", false, false, false, 14), [], (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 14, $this->source); })())), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 22
        yield "    <input type=\"checkbox\" ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            yield " value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 22, $this->source); })()), "html", null, true);
            yield "\"";
        }
        if ((($tmp = (isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 22, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " checked=\"checked\"";
        }
        yield " />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  126 => 22,  116 => 21,  107 => 18,  97 => 14,  93 => 13,  88 => 12,  86 => 11,  84 => 8,  83 => 7,  82 => 6,  81 => 5,  79 => 4,  75 => 3,  70 => 2,  60 => 1,  52 => 21,  49 => 20,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block choice_widget_expanded %}
    <div {{ block('widget_container_attributes') }}>
        {% for child in form %}
            <div class=\"form-check\">
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                    valid: valid,
                }) -}}
                
                {% set color_value = child.vars.value %}
                <label class=\"form-check-label\" for=\"{{ child.vars.id }}\">
                    <span class=\"admin-color-swatch color-swatch-{{ color_value }}\"></span>
                    {{ child.vars.label|trans({}, choice_translation_domain) }}
                </label>
            </div>
        {% endfor %}
    </div>
{% endblock %}

{% block checkbox_widget %}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{% endblock %}", "form/color_choice_type.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/form/color_choice_type.html.twig");
    }
}
