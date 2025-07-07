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

/* profile/index.html.twig */
class __TwigTemplate_20f83b41ee9263b3054dde0dc2335ec2 extends Template
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
        yield "Mon compte - SHOP BJ";
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
        yield "\" class=\"list-group-item list-group-item-action active\">
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
                    <h4 class=\"card-title mb-0\">Tableau de bord</h4>
                </div>
                <div class=\"card-body\">
                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"card h-100\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Bonjour, ";
        // line 54
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 54), "firstName", [], "any", false, false, false, 54)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 54), "firstName", [], "any", false, false, false, 54), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 54), "username", [], "any", false, false, false, 54), "html", null, true)));
        yield "</h5>
                                    <p class=\"card-text\">
                                        À partir de votre tableau de bord, vous pouvez consulter vos commandes récentes, gérer vos informations personnelles et modifier votre mot de passe.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"card h-100\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Informations du compte</h5>
                                    <ul class=\"list-unstyled\">
                                        <li><strong>Email :</strong> ";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 66), "email", [], "any", false, false, false, 66), "html", null, true);
        yield "</li>
                                        <li><strong>Nom :</strong> 
                                            ";
        // line 68
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 68), "firstName", [], "any", false, false, false, 68) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 68), "lastName", [], "any", false, false, false, 68))) {
            // line 69
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 69), "firstName", [], "any", false, false, false, 69), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 69), "lastName", [], "any", false, false, false, 69), "html", null, true);
            yield "
                                            ";
        } else {
            // line 71
            yield "                                                Non renseigné
                                            ";
        }
        // line 73
        yield "                                        </li>
                                        <li><strong>Membre depuis :</strong> ";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 74), "createdAt", [], "any", false, false, false, 74), "d/m/Y"), "html", null, true);
        yield "</li>
                                    </ul>
                                    <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
        yield "\" class=\"btn btn-sm btn-outline-primary\">
                                        <i class=\"fas fa-edit me-1\"></i> Modifier
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h5 class=\"mb-3\">Commandes récentes</h5>
                    ";
        // line 85
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 85), "orders", [], "any", false, false, false, 85)) > 0)) {
            // line 86
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
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 98), "orders", [], "any", false, false, false, 98), 0, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 99
                yield "                                        <tr>
                                            <td>CMD-";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 100), "html", null, true);
                yield "</td>
                                            <td>";
                // line 101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 101), "d/m/Y"), "html", null, true);
                yield "</td>
                                            <td>
                                                ";
                // line 103
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 103) == "pending")) {
                    // line 104
                    yield "                                                    <span class=\"badge bg-warning\">En attente</span>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 105
$context["order"], "status", [], "any", false, false, false, 105) == "paid")) {
                    // line 106
                    yield "                                                    <span class=\"badge bg-success\">Payée</span>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 107
$context["order"], "status", [], "any", false, false, false, 107) == "shipped")) {
                    // line 108
                    yield "                                                    <span class=\"badge bg-info\">Expédiée</span>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 109
$context["order"], "status", [], "any", false, false, false, 109) == "delivered")) {
                    // line 110
                    yield "                                                    <span class=\"badge bg-primary\">Livrée</span>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 111
$context["order"], "status", [], "any", false, false, false, 111) == "cancelled")) {
                    // line 112
                    yield "                                                    <span class=\"badge bg-danger\">Annulée</span>
                                                ";
                } else {
                    // line 114
                    yield "                                                    <span class=\"badge bg-secondary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 114), "html", null, true);
                    yield "</span>
                                                ";
                }
                // line 116
                yield "                                            </td>
                                            <td>";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 117), "XOF"), "html", null, true);
                yield "</td>
                                            <td>
                                                <a href=\"";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_order_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 119)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\">
                                                    <i class=\"fas fa-eye\"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            yield "                                </tbody>
                            </table>
                        </div>
                        ";
            // line 128
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 128), "orders", [], "any", false, false, false, 128)) > 5)) {
                // line 129
                yield "                            <div class=\"text-center mt-3\">
                                <a href=\"";
                // line 130
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_orders");
                yield "\" class=\"btn btn-outline-primary\">
                                    Voir toutes mes commandes
                                </a>
                            </div>
                        ";
            }
            // line 135
            yield "                    ";
        } else {
            // line 136
            yield "                        <div class=\"alert alert-info\">
                            <i class=\"fas fa-info-circle me-2\"></i> Vous n'avez pas encore passé de commande.
                        </div>
                    ";
        }
        // line 140
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
        return "profile/index.html.twig";
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
        return array (  326 => 140,  320 => 136,  317 => 135,  309 => 130,  306 => 129,  304 => 128,  299 => 125,  287 => 119,  282 => 117,  279 => 116,  273 => 114,  269 => 112,  267 => 111,  264 => 110,  262 => 109,  259 => 108,  257 => 107,  254 => 106,  252 => 105,  249 => 104,  247 => 103,  242 => 101,  238 => 100,  235 => 99,  231 => 98,  217 => 86,  215 => 85,  203 => 76,  198 => 74,  195 => 73,  191 => 71,  183 => 69,  181 => 68,  176 => 66,  161 => 54,  149 => 44,  143 => 43,  133 => 39,  128 => 38,  123 => 37,  119 => 36,  116 => 35,  106 => 27,  100 => 24,  94 => 21,  88 => 18,  82 => 15,  74 => 9,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profile/index.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/profile/index.html.twig");
    }
}
