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

/* components/floating_cart.html.twig */
class __TwigTemplate_cd30b94fc5350cfdff266288f0d691d5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/floating_cart.html.twig"));

        // line 1
        yield "<!-- Panier flottant style Shein à droite de l'écran -->
<div id=\"floating-cart\" class=\"floating-cart-icon\">
    <a href=\"";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        yield "\" class=\"cart-icon-link\">
        <div class=\"floating-cart-summary\">
            <span class=\"cart-count-float ";
        // line 5
        if ((array_key_exists("cart_count", $context) && ((isset($context["cart_count"]) || array_key_exists("cart_count", $context) ? $context["cart_count"] : (function () { throw new RuntimeError('Variable "cart_count" does not exist.', 5, $this->source); })()) > 0))) {
        } else {
            yield "d-none";
        }
        yield "\">
                ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("cart_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["cart_count"]) || array_key_exists("cart_count", $context) ? $context["cart_count"] : (function () { throw new RuntimeError('Variable "cart_count" does not exist.', 6, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "
            </span>
            <i class=\"fas fa-shopping-cart\"></i>
        </div>
        ";
        // line 11
        yield "        ";
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "            ";
            $context["total"] = 0;
            // line 13
            yield "            ";
            if ((array_key_exists("cartItems", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["cartItems"]) || array_key_exists("cartItems", $context) ? $context["cartItems"] : (function () { throw new RuntimeError('Variable "cartItems" does not exist.', 13, $this->source); })())))) {
                // line 14
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cartItems"]) || array_key_exists("cartItems", $context) ? $context["cartItems"] : (function () { throw new RuntimeError('Variable "cartItems" does not exist.', 14, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["cartItem"]) {
                    // line 15
                    yield "                    ";
                    $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 15, $this->source); })()) + (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cartItem"], "product", [], "any", false, false, false, 15), "price", [], "any", false, false, false, 15) * CoreExtension::getAttribute($this->env, $this->source, $context["cartItem"], "quantity", [], "any", false, false, false, 15)));
                    // line 16
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['cartItem'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                yield "                <div class=\"cart-tooltip\">
                    <span id=\"floating-cart-total\">";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 18, $this->source); })()), "EUR", ["fraction_digit" => 2]), "html", null, true);
                yield "</span>
                </div>
            ";
            }
            // line 21
            yield "        ";
        }
        // line 22
        yield "    </a>
</div>

<style>
    .floating-cart-icon {
        position: fixed;
        right: 20px;
        bottom: 120px;
        z-index: 1000;
        transition: transform 0.3s ease;
    }
    
    .floating-cart-icon:hover {
        transform: scale(1.1);
    }
    
    .cart-icon-link {
        display: block;
        text-decoration: none;
    }
    
    .floating-cart-summary {
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        width: 50px;
        height: 50px;
        background-color: var(--primary-color);
        color: white;
        border-radius: 50%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    
    .floating-cart-summary i {
        font-size: 1.4rem;
        color: white;
    }
    
    .cart-count-float {
        position: absolute;
        top: -5px;
        right: -5px;
        background: var(--neutral-pop); /* Couleur or neutre */
        color: white;
        border-radius: 50%;
        width: 22px;
        height: 22px;
        font-size: 0.8rem;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }
    
    .cart-tooltip {
        position: absolute;
        right: 60px;
        bottom: 15px;
        background-color: white;
        padding: 5px 10px;
        border-radius: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        font-size: 0.9rem;
        color: var(--primary-color);
        font-weight: bold;
        opacity: 0;
        transition: opacity 0.3s ease;
        pointer-events: none;
        white-space: nowrap;
    }
    
    .floating-cart-icon:hover .cart-tooltip {
        opacity: 1;
    }
</style>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/floating_cart.html.twig";
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
        return array (  103 => 22,  100 => 21,  94 => 18,  91 => 17,  85 => 16,  82 => 15,  77 => 14,  74 => 13,  71 => 12,  68 => 11,  61 => 6,  54 => 5,  49 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Panier flottant style Shein à droite de l'écran -->
<div id=\"floating-cart\" class=\"floating-cart-icon\">
    <a href=\"{{ path('cart_index') }}\" class=\"cart-icon-link\">
        <div class=\"floating-cart-summary\">
            <span class=\"cart-count-float {% if cart_count is defined and cart_count > 0 %}{% else %}d-none{% endif %}\">
                {{ cart_count|default(0) }}
            </span>
            <i class=\"fas fa-shopping-cart\"></i>
        </div>
        {# On n'affiche plus le panier flottant pour les utilisateurs non connectés #}
        {% if is_granted('ROLE_USER') %}
            {% set total = 0 %}
            {% if cartItems is defined and cartItems is not empty %}
                {% for cartItem in cartItems %}
                    {% set total = total + (cartItem.product.price * cartItem.quantity) %}
                {% endfor %}
                <div class=\"cart-tooltip\">
                    <span id=\"floating-cart-total\">{{ total|format_currency('EUR', {fraction_digit: 2}) }}</span>
                </div>
            {% endif %}
        {% endif %}
    </a>
</div>

<style>
    .floating-cart-icon {
        position: fixed;
        right: 20px;
        bottom: 120px;
        z-index: 1000;
        transition: transform 0.3s ease;
    }
    
    .floating-cart-icon:hover {
        transform: scale(1.1);
    }
    
    .cart-icon-link {
        display: block;
        text-decoration: none;
    }
    
    .floating-cart-summary {
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        width: 50px;
        height: 50px;
        background-color: var(--primary-color);
        color: white;
        border-radius: 50%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    
    .floating-cart-summary i {
        font-size: 1.4rem;
        color: white;
    }
    
    .cart-count-float {
        position: absolute;
        top: -5px;
        right: -5px;
        background: var(--neutral-pop); /* Couleur or neutre */
        color: white;
        border-radius: 50%;
        width: 22px;
        height: 22px;
        font-size: 0.8rem;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }
    
    .cart-tooltip {
        position: absolute;
        right: 60px;
        bottom: 15px;
        background-color: white;
        padding: 5px 10px;
        border-radius: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        font-size: 0.9rem;
        color: var(--primary-color);
        font-weight: bold;
        opacity: 0;
        transition: opacity 0.3s ease;
        pointer-events: none;
        white-space: nowrap;
    }
    
    .floating-cart-icon:hover .cart-tooltip {
        opacity: 1;
    }
</style>", "components/floating_cart.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/components/floating_cart.html.twig");
    }
}
