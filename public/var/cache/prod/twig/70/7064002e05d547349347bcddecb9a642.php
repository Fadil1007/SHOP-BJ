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

/* admin/order_invoice.html.twig */
class __TwigTemplate_408c039275766ce72a2b3c555a512ab3 extends Template
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
        yield "Facture commande #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true);
        yield " - SHOP BJ";
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
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    .invoice {
        background: white;
        border: 1px solid #f0f0f0;
        padding: 2rem;
        margin-bottom: 2rem;
    }
    .invoice-header {
        border-bottom: 1px solid #f0f0f0;
        padding-bottom: 1rem;
        margin-bottom: 2rem;
    }
    .invoice-title {
        font-size: 1.5rem;
        color: #333;
    }
    .invoice-details {
        display: flex;
        justify-content: space-between;
        margin-bottom: 2rem;
    }
    .invoice-details-col {
        flex: 0 0 48%;
    }
    .invoice-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 2rem;
    }
    .invoice-table th, .invoice-table td {
        padding: 0.75rem;
        border-bottom: 1px solid #f0f0f0;
    }
    .invoice-table thead th {
        background-color: #f8f9fa;
        border-bottom: 2px solid #e9ecef;
        text-align: left;
    }
    .invoice-totals {
        width: 100%;
        max-width: 400px;
        margin-left: auto;
    }
    .invoice-totals td {
        padding: 0.5rem;
    }
    .invoice-totals td:last-child {
        text-align: right;
        font-weight: 500;
    }
    .invoice-footer {
        margin-top: 2rem;
        padding-top: 1rem;
        border-top: 1px solid #f0f0f0;
        text-align: center;
        color: #6c757d;
        font-size: 0.875rem;
    }
    @media print {
        body {
            font-size: 12pt;
        }
        .no-print {
            display: none;
        }
        .container {
            width: 100%;
            max-width: 100%;
            padding: 0;
            margin: 0;
        }
        .invoice {
            border: none;
            padding: 0;
        }
    }
</style>
";
        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 87
        yield "<div class=\"container py-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4 no-print\">
        <h1>Facture</h1>
        <div>
            <a href=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_view", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 91)]), "html", null, true);
        yield "\" class=\"btn btn-outline-primary me-2\">
                <i class=\"fa fa-arrow-left\"></i> Retour
            </a>
            <button onclick=\"window.print()\" class=\"btn btn-primary\">
                <i class=\"fa fa-print\"></i> Imprimer
            </button>
        </div>
    </div>
    
    <div class=\"invoice\">
        <div class=\"invoice-header d-flex justify-content-between align-items-center\">
            <div>
                <img src=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/logo/logo-shop-bj.svg"), "html", null, true);
        yield "\" alt=\"SHOP BJ\" height=\"50\" class=\"mb-2\">
                <h1 class=\"invoice-title\">FACTURE</h1>
            </div>
            <div class=\"text-end\">
                <p class=\"mb-0\">Commande #";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 107), "html", null, true);
        yield "</p>
                <p class=\"mb-0\">Date : ";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "createdAt", [], "any", false, false, false, 108), "d/m/Y"), "html", null, true);
        yield "</p>
            </div>
        </div>
        
        <div class=\"invoice-details\">
            <div class=\"invoice-details-col\">
                <h5>Client</h5>
                <p class=\"mb-0\">";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "firstName", [], "any", false, false, false, 115), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "lastName", [], "any", false, false, false, 115), "html", null, true);
        yield "</p>
                <p class=\"mb-0\">";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 116), "html", null, true);
        yield "</p>
                ";
        // line 117
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "phone", [], "any", false, false, false, 117)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 118
            yield "                    <p class=\"mb-0\">Téléphone : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "phone", [], "any", false, false, false, 118), "html", null, true);
            yield "</p>
                ";
        }
        // line 120
        yield "                <p class=\"mb-0\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "address", [], "any", true, true, false, 120)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "address", [], "any", false, false, false, 120), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "address", [], "any", false, false, false, 120))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "address", [], "any", false, false, false, 120))), ""), "html", null, true);
        yield "</p>
                <p class=\"mb-0\">";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "city", [], "any", true, true, false, 121)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "city", [], "any", false, false, false, 121), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "city", [], "any", false, false, false, 121))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "city", [], "any", false, false, false, 121))), ""), "html", null, true);
        yield "</p>
                <p class=\"mb-0\">";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "country", [], "any", true, true, false, 122)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "country", [], "any", false, false, false, 122), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "country", [], "any", false, false, false, 122))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "country", [], "any", false, false, false, 122))), "Bénin"), "html", null, true);
        yield "</p>
            </div>
            <div class=\"invoice-details-col text-end\">
                <h5>SHOP BJ</h5>
                <p class=\"mb-0\">Service Client</p>
                <p class=\"mb-0\">contact@shopbj.bj</p>
                <p class=\"mb-0\">Tel: +229 xx xx xx xx</p>
                <p class=\"mb-0\">Cotonou, Bénin</p>
            </div>
        </div>
        
        <table class=\"invoice-table\">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th class=\"text-center\">Prix unitaire</th>
                    <th class=\"text-center\">Quantité</th>
                    <th class=\"text-end\">Total</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "orderItems", [], "any", false, false, false, 143));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 144
            yield "                    <tr>
                        <td>
                            ";
            // line 146
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 146)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 146), "name", [], "any", false, false, false, 146), "html", null, true);
            } else {
                yield "Produit supprimé";
            }
            // line 147
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 147) || CoreExtension::getAttribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 147))) {
                // line 148
                yield "                                <small class=\"text-muted d-block\">
                                    ";
                // line 149
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 149)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "Taille: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 149), "html", null, true);
                }
                // line 150
                yield "                                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 150)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 150)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " / ";
                    }
                    yield "Couleur: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 150), "html", null, true);
                }
                // line 151
                yield "                                </small>
                            ";
            }
            // line 153
            yield "                        </td>
                        <td class=\"text-center\">";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 154), "XOF"), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 155), "html", null, true);
            yield "</td>
                        <td class=\"text-end\">";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 156) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 156)), "XOF"), "html", null, true);
            yield "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        yield "            </tbody>
        </table>
        
        <div class=\"invoice-totals ms-auto\">
            <table class=\"table table-borderless\">
                <tr>
                    <td>Sous-total:</td>
                    <td>";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 166), "XOF"), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <td>Livraison:</td>
                    <td>À vos charges</td>
                </tr>
                <tr class=\"fw-bold\">
                    <td>Total:</td>
                    <td>";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 174), "XOF"), "html", null, true);
        yield "</td>
                </tr>
            </table>
        </div>
        
        <div class=\"invoice-footer\">
            <p class=\"mb-0\">Merci pour votre achat chez SHOP BJ!</p>
            <p class=\"mb-0\">Pour toute question concernant cette facture, veuillez contacter notre service client.</p>
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
        return "admin/order_invoice.html.twig";
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
        return array (  335 => 174,  324 => 166,  315 => 159,  306 => 156,  302 => 155,  298 => 154,  295 => 153,  291 => 151,  282 => 150,  277 => 149,  274 => 148,  271 => 147,  265 => 146,  261 => 144,  257 => 143,  233 => 122,  229 => 121,  224 => 120,  218 => 118,  216 => 117,  212 => 116,  206 => 115,  196 => 108,  192 => 107,  185 => 103,  170 => 91,  164 => 87,  157 => 86,  73 => 6,  66 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/order_invoice.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/admin/order_invoice.html.twig");
    }
}
