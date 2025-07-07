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

/* profile/order_show.html.twig */
class __TwigTemplate_134b35b41a60a8542e3d2d6ad7105e55 extends Template
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
        yield "Détails de ma commande #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true);
        yield " - SHOP BJ";
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
            <div class=\"mb-4\">
                <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_orders");
        yield "\" class=\"btn btn-outline-primary\">
                    <i class=\"fas fa-arrow-left me-1\"></i> Retour à mes commandes
                </a>
            </div>
            
            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-header bg-white d-flex justify-content-between align-items-center\">
                    <h4 class=\"card-title mb-0\">Commande #";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 44), "html", null, true);
        yield "</h4>
                    <span class=\"badge ";
        // line 45
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 45) == "cancelled")) ? ("bg-danger") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 46
($context["order"] ?? null), "status", [], "any", false, false, false, 46) == "delivered")) ? ("bg-success") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 47
($context["order"] ?? null), "status", [], "any", false, false, false, 47) == "shipped")) ? ("bg-info") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 48
($context["order"] ?? null), "status", [], "any", false, false, false, 48) == "paid")) ? ("bg-primary") : ("bg-warning"))))))));
        yield " fs-6\">
                        ";
        // line 49
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 49) == "pending")) {
            // line 50
            yield "                            En attente
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 51
($context["order"] ?? null), "status", [], "any", false, false, false, 51) == "paid")) {
            // line 52
            yield "                            Payée
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 53
($context["order"] ?? null), "status", [], "any", false, false, false, 53) == "shipped")) {
            // line 54
            yield "                            Expédiée
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 55
($context["order"] ?? null), "status", [], "any", false, false, false, 55) == "delivered")) {
            // line 56
            yield "                            Livrée
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 57
($context["order"] ?? null), "status", [], "any", false, false, false, 57) == "cancelled")) {
            // line 58
            yield "                            Annulée
                        ";
        } else {
            // line 60
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 60)), "html", null, true);
            yield "
                        ";
        }
        // line 62
        yield "                    </span>
                </div>
                <div class=\"card-body\">
                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <h5 class=\"border-bottom pb-2\">Informations de commande</h5>
                            <p><strong>Date :</strong> ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "createdAt", [], "any", false, false, false, 68), "d/m/Y à H:i"), "html", null, true);
        yield "</p>
                            <p><strong>Méthode de paiement :</strong> 
                                ";
        // line 70
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentMethod", [], "any", false, false, false, 70) == "stripe")) {
            // line 71
            yield "                                    Carte bancaire (Stripe)
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 72
($context["order"] ?? null), "paymentMethod", [], "any", false, false, false, 72) == "kkiapay")) {
            // line 73
            yield "                                    Mobile Money (KKiaPay)
                                ";
        } else {
            // line 75
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentMethod", [], "any", false, false, false, 75)), "Non spécifiée"), "html", null, true);
            yield "
                                ";
        }
        // line 77
        yield "                            </p>
                            <p><strong>Total :</strong> ";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 78), "XOF"), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"col-md-6\">
                            <h5 class=\"border-bottom pb-2\">Informations de livraison</h5>
                            <address>
                                ";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 83), "firstName", [], "any", false, false, false, 83), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 83), "lastName", [], "any", false, false, false, 83), "html", null, true);
        yield "<br>
                                ";
        // line 84
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "phone", [], "any", false, false, false, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 85
            yield "                                    <strong>Téléphone :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "phone", [], "any", false, false, false, 85), "html", null, true);
            yield "<br>
                                ";
        }
        // line 87
        yield "                                ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "address", [], "any", true, true, false, 87)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "address", [], "any", false, false, false, 87), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 87), "address", [], "any", false, false, false, 87))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 87), "address", [], "any", false, false, false, 87))), "html", null, true);
        yield "<br>
                                ";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "postalCode", [], "any", true, true, false, 88)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "postalCode", [], "any", false, false, false, 88), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 88), "postalCode", [], "any", false, false, false, 88))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 88), "postalCode", [], "any", false, false, false, 88))), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "city", [], "any", true, true, false, 88)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "city", [], "any", false, false, false, 88), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 88), "city", [], "any", false, false, false, 88))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 88), "city", [], "any", false, false, false, 88))), "html", null, true);
        yield "<br>
                                ";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "country", [], "any", true, true, false, 89)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "country", [], "any", false, false, false, 89), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 89), "country", [], "any", false, false, false, 89))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 89), "country", [], "any", false, false, false, 89))), "html", null, true);
        yield "
                            </address>
                        </div>
                    </div>
                    
                    <h5 class=\"border-bottom pb-2 mb-3\">Produits commandés</h5>
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\">
                            <thead class=\"table-light\">
                                <tr>
                                    <th>Produit</th>
                                    <th class=\"text-center\">Prix unitaire</th>
                                    <th class=\"text-center\">Quantité</th>
                                    <th class=\"text-end\">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "orderItems", [], "any", false, false, false, 106));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 107
            yield "                                    <tr>
                                        <td>
                                            ";
            // line 109
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 110
                yield "                                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 110), "id", [], "any", false, false, false, 110)]), "html", null, true);
                yield "\" class=\"text-decoration-none\">
                                                    ";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 111), "name", [], "any", false, false, false, 111), "html", null, true);
                yield "
                                                </a>
                                            ";
            } else {
                // line 114
                yield "                                                Produit supprimé
                                            ";
            }
            // line 116
            yield "                                        </td>
                                        <td class=\"text-center\">";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 117)), "html", null, true);
            yield "</td>
                                        <td class=\"text-center\">";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 118), "html", null, true);
            yield "</td>
                                        <td class=\"text-end\">";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 119) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 119))), "html", null, true);
            yield "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        yield "                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan=\"3\" class=\"text-end\">Sous-total :</th>
                                    <td class=\"text-end\">";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 126)), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th colspan=\"3\" class=\"text-end\">Livraison :</th>
                                    <td class=\"text-end\">À vos charges</td>
                                </tr>
                                <tr>
                                    <th colspan=\"3\" class=\"text-end\">Total :</th>
                                    <td class=\"text-end fw-bold\">";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 134)), "html", null, true);
        yield "</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class=\"card shadow-sm\">
                <div class=\"card-header bg-white\">
                    <h5 class=\"card-title mb-0\">Suivi de commande</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"position-relative timeline py-2\">
                        <div class=\"timeline-item\">
                            <div class=\"timeline-marker bg-primary\"></div>
                            <div class=\"timeline-content\">
                                <h6 class=\"timeline-title\">Commande créée</h6>
                                <p class=\"timeline-date text-muted small\">";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "createdAt", [], "any", false, false, false, 152), "d/m/Y à H:i"), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                        
                        ";
        // line 156
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 156) != "pending") && (CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 156) != "cancelled"))) {
            // line 157
            yield "                            <div class=\"timeline-item\">
                                <div class=\"timeline-marker ";
            // line 158
            yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 158), ["paid", "shipped", "delivered"])) ? ("bg-primary") : ("bg-secondary"));
            yield "\"></div>
                                <div class=\"timeline-content\">
                                    <h6 class=\"timeline-title\">Paiement confirmé</h6>
                                    <p class=\"timeline-date text-muted small\">";
            // line 161
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "updatedAt", [], "any", false, false, false, 161)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "updatedAt", [], "any", false, false, false, 161), "d/m/Y à H:i"), "html", null, true)) : ("-"));
            yield "</p>
                                </div>
                            </div>
                        ";
        }
        // line 165
        yield "                        
                        ";
        // line 166
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 166) == "shipped") || (CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 166) == "delivered"))) {
            // line 167
            yield "                            <div class=\"timeline-item\">
                                <div class=\"timeline-marker ";
            // line 168
            yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 168), ["shipped", "delivered"])) ? ("bg-primary") : ("bg-secondary"));
            yield "\"></div>
                                <div class=\"timeline-content\">
                                    <h6 class=\"timeline-title\">Commande expédiée</h6>
                                    <p class=\"timeline-date text-muted small\">";
            // line 171
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "updatedAt", [], "any", false, false, false, 171)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "updatedAt", [], "any", false, false, false, 171), "d/m/Y à H:i"), "html", null, true)) : ("-"));
            yield "</p>
                                </div>
                            </div>
                        ";
        }
        // line 175
        yield "                        
                        ";
        // line 176
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 176) == "delivered")) {
            // line 177
            yield "                            <div class=\"timeline-item\">
                                <div class=\"timeline-marker bg-primary\"></div>
                                <div class=\"timeline-content\">
                                    <h6 class=\"timeline-title\">Commande livrée</h6>
                                    <p class=\"timeline-date text-muted small\">";
            // line 181
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "updatedAt", [], "any", false, false, false, 181)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "updatedAt", [], "any", false, false, false, 181), "d/m/Y à H:i"), "html", null, true)) : ("-"));
            yield "</p>
                                </div>
                            </div>
                        ";
        }
        // line 185
        yield "                        
                        ";
        // line 186
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 186) == "cancelled")) {
            // line 187
            yield "                            <div class=\"timeline-item\">
                                <div class=\"timeline-marker bg-danger\"></div>
                                <div class=\"timeline-content\">
                                    <h6 class=\"timeline-title\">Commande annulée</h6>
                                    <p class=\"timeline-date text-muted small\">";
            // line 191
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "updatedAt", [], "any", false, false, false, 191)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "updatedAt", [], "any", false, false, false, 191), "d/m/Y à H:i"), "html", null, true)) : ("-"));
            yield "</p>
                                </div>
                            </div>
                        ";
        }
        // line 195
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .timeline {
        border-left: 2px solid #dee2e6;
        padding-left: 20px;
        margin-left: 10px;
    }
    .timeline-item {
        margin-bottom: 20px;
        position: relative;
    }
    .timeline-marker {
        width: 14px;
        height: 14px;
        border-radius: 50%;
        position: absolute;
        left: -27px;
        top: 6px;
    }
    .timeline-content {
        padding-bottom: 10px;
    }
    .timeline-title {
        margin-bottom: 5px;
    }
    .timeline-date {
        margin-bottom: 0;
    }
</style>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profile/order_show.html.twig";
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
        return array (  426 => 195,  419 => 191,  413 => 187,  411 => 186,  408 => 185,  401 => 181,  395 => 177,  393 => 176,  390 => 175,  383 => 171,  377 => 168,  374 => 167,  372 => 166,  369 => 165,  362 => 161,  356 => 158,  353 => 157,  351 => 156,  344 => 152,  323 => 134,  312 => 126,  306 => 122,  297 => 119,  293 => 118,  289 => 117,  286 => 116,  282 => 114,  276 => 111,  271 => 110,  269 => 109,  265 => 107,  261 => 106,  241 => 89,  235 => 88,  230 => 87,  224 => 85,  222 => 84,  216 => 83,  208 => 78,  205 => 77,  199 => 75,  195 => 73,  193 => 72,  190 => 71,  188 => 70,  183 => 68,  175 => 62,  169 => 60,  165 => 58,  163 => 57,  160 => 56,  158 => 55,  155 => 54,  153 => 53,  150 => 52,  148 => 51,  145 => 50,  143 => 49,  139 => 48,  138 => 47,  137 => 46,  136 => 45,  132 => 44,  122 => 37,  118 => 35,  108 => 27,  102 => 24,  96 => 21,  90 => 18,  84 => 15,  76 => 9,  72 => 6,  65 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profile/order_show.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/profile/order_show.html.twig");
    }
}
