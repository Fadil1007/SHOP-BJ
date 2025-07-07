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

/* profile/orders.html.twig */
class __TwigTemplate_72a57dc0624ec1c94ab7bfaee388111a extends Template
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
        yield "Mes commandes - SHOP BJ";
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
        yield "\" class=\"list-group-item list-group-item-action\">
                        <i class=\"fas fa-edit me-2\"></i> Mes informations
                    </a>
                    <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_orders");
        yield "\" class=\"list-group-item list-group-item-action active\">
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
                    <h4 class=\"card-title mb-0\">Historique de mes commandes</h4>
                </div>
                <div class=\"card-body\">
                    ";
        // line 50
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["orders"] ?? null)) > 0)) {
            // line 51
            yield "                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered table-hover\">
                                <thead class=\"table-light\">
                                    <tr>
                                        <th scope=\"col\">N° Commande</th>
                                        <th scope=\"col\">Date</th>
                                        <th scope=\"col\">Statut</th>
                                        <th scope=\"col\">Total</th>
                                        <th scope=\"col\">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 64
                yield "                                        <tr>
                                            <td>";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 65), "html", null, true);
                yield "</td>
                                            <td>";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 66), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                                            <td>
                                                ";
                // line 68
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 68) == "pending")) {
                    // line 69
                    yield "                                                    <span class=\"badge bg-warning\">En attente</span>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 70
$context["order"], "status", [], "any", false, false, false, 70) == "paid")) {
                    // line 71
                    yield "                                                    <span class=\"badge bg-success\">Payée</span>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 72
$context["order"], "status", [], "any", false, false, false, 72) == "shipped")) {
                    // line 73
                    yield "                                                    <span class=\"badge bg-info\">Expédiée</span>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 74
$context["order"], "status", [], "any", false, false, false, 74) == "delivered")) {
                    // line 75
                    yield "                                                    <span class=\"badge bg-primary\">Livrée</span>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 76
$context["order"], "status", [], "any", false, false, false, 76) == "cancelled")) {
                    // line 77
                    yield "                                                    <span class=\"badge bg-danger\">Annulée</span>
                                                ";
                } else {
                    // line 79
                    yield "                                                    <span class=\"badge bg-secondary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 79), "html", null, true);
                    yield "</span>
                                                ";
                }
                // line 81
                yield "                                            </td>
                                            <td>";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 82), "XOF"), "html", null, true);
                yield "</td>
                                            <td>
                                                <a href=\"";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_order_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 84)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\">
                                                    <i class=\"fas fa-eye\"></i> Détails
                                                </a>
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            yield "                                </tbody>
                            </table>
                        </div>
                    ";
        } else {
            // line 94
            yield "                        <div class=\"alert alert-info\">
                            <i class=\"fas fa-info-circle me-2\"></i> Vous n'avez pas encore passé de commande.
                            <p class=\"mt-2 mb-0\">
                                <a href=\"";
            // line 97
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
            yield "\" class=\"alert-link\">
                                    Découvrez notre catalogue de produits
                                </a>
                            </p>
                        </div>
                    ";
        }
        // line 103
        yield "                </div>
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
        return "profile/orders.html.twig";
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
        return array (  261 => 103,  252 => 97,  247 => 94,  241 => 90,  229 => 84,  224 => 82,  221 => 81,  215 => 79,  211 => 77,  209 => 76,  206 => 75,  204 => 74,  201 => 73,  199 => 72,  196 => 71,  194 => 70,  191 => 69,  189 => 68,  184 => 66,  180 => 65,  177 => 64,  173 => 63,  159 => 51,  157 => 50,  149 => 44,  143 => 43,  133 => 39,  128 => 38,  123 => 37,  119 => 36,  116 => 35,  106 => 27,  100 => 24,  94 => 21,  88 => 18,  82 => 15,  74 => 9,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profile/orders.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/profile/orders.html.twig");
    }
}
