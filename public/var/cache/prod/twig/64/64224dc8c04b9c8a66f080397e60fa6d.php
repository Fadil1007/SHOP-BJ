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

/* admin/order_view.html.twig */
class __TwigTemplate_d338df7364f9782fe7db4b82b7a7985f extends Template
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
        yield "Détails commande #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true);
        yield " - Administration SHOP BJ";
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
    .admin-menu {
        background: #f8f9fa;
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    .admin-menu a {
        display: block;
        padding: 8px 15px;
        margin-bottom: 5px;
        color: #495057;
        border-radius: 4px;
        text-decoration: none;
    }
    .admin-menu a:hover, .admin-menu a.active {
        background: #e9ecef;
        color: #007bff;
    }
    .admin-menu a i {
        width: 20px;
        text-align: center;
        margin-right: 8px;
    }
    .admin-header {
        background: linear-gradient(135deg, #0d6efd, #0dcaf0);
        color: white;
        padding: 20px;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    .order-status {
        padding: 4px 8px;
        border-radius: 4px;
        font-size: 12px;
        font-weight: bold;
    }
    .status-new {
        background-color: #0dcaf0;
        color: white;
    }
    .status-processing {
        background-color: #6c757d;
        color: white;
    }
    .status-shipped {
        background-color: #198754;
        color: white;
    }
    .status-delivered {
        background-color: #0d6efd;
        color: white;
    }
    .status-cancelled {
        background-color: #dc3545;
        color: white;
    }
    .order-timeline {
        position: relative;
        padding-left: 30px;
        margin-bottom: 20px;
    }
    .order-timeline::before {
        content: '';
        position: absolute;
        left: 5px;
        top: 0;
        bottom: 0;
        width: 2px;
        background-color: #ced4da;
    }
    .timeline-item {
        position: relative;
        padding-bottom: 15px;
    }
    .timeline-item::before {
        content: '';
        position: absolute;
        left: -30px;
        top: 5px;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background-color: #6c757d;
    }
    .timeline-date {
        color: #6c757d;
        font-size: 0.85rem;
    }
</style>
";
        yield from [];
    }

    // line 99
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 100
        yield "<div class=\"container py-4\">
    <div class=\"admin-header\">
        <h1>Détails de la commande #";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 102), "html", null, true);
        yield "</h1>
        <p>Gestion des détails et du statut</p>
    </div>
    
    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"admin-menu\">
                <h5 class=\"mb-3\">Menu principal</h5>
                <a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        yield "\"><i class=\"fa fa-home\"></i> Tableau de bord</a>
                <a href=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products");
        yield "\"><i class=\"fa fa-tshirt\"></i> Produits</a>
                <a href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories");
        yield "\"><i class=\"fa fa-list\"></i> Catégories</a>
                <a href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
        yield "\" class=\"active\"><i class=\"fa fa-shopping-cart\"></i> Commandes</a>
                <a href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        yield "\"><i class=\"fa fa-users\"></i> Utilisateurs</a>
                <a href=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"><i class=\"fa fa-arrow-left\"></i> Retour au site</a>
            </div>
        </div>
        
        <div class=\"col-md-9\">
            <div class=\"mb-4\">
                <a href=\"";
        // line 121
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
        yield "\" class=\"btn btn-outline-primary\">
                    <i class=\"fa fa-arrow-left\"></i> Retour aux commandes
                </a>
                <a href=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 124)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                    <i class=\"fa fa-edit\"></i> Modifier
                </a>
                <a href=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_invoice", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 127)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"fa fa-file-pdf\"></i> Facture
                </a>
                <button type=\"button\" class=\"btn btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteOrderModal\">
                    <i class=\"fa fa-trash\"></i> Supprimer
                </button>
            </div>
            
            <div class=\"row mb-4\">
                <div class=\"col-md-6\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5 class=\"card-title mb-0\">Informations commande</h5>
                        </div>
                        <div class=\"card-body\">
                            <table class=\"table table-borderless\">
                                <tr>
                                    <th>Référence :</th>
                                    <td>";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 145), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Date :</th>
                                    <td>";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "createdAt", [], "any", false, false, false, 149), "d/m/Y H:i"), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Statut :</th>
                                    <td>
                                        <span class=\"order-status status-";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 154), "html", null, true);
        yield "\">
                                            ";
        // line 155
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 155) == "new")) {
            // line 156
            yield "                                                Nouvelle
                                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 157
($context["order"] ?? null), "status", [], "any", false, false, false, 157) == "processing")) {
            // line 158
            yield "                                                En traitement
                                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 159
($context["order"] ?? null), "status", [], "any", false, false, false, 159) == "shipped")) {
            // line 160
            yield "                                                Expédiée
                                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 161
($context["order"] ?? null), "status", [], "any", false, false, false, 161) == "delivered")) {
            // line 162
            yield "                                                Livrée
                                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 163
($context["order"] ?? null), "status", [], "any", false, false, false, 163) == "cancelled")) {
            // line 164
            yield "                                                Annulée
                                            ";
        }
        // line 166
        yield "                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Paiement :</th>
                                    <td>
                                        ";
        // line 172
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentMethod", [], "any", false, false, false, 172) == "stripe")) {
            // line 173
            yield "                                            Carte bancaire (Stripe)
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 174
($context["order"] ?? null), "paymentMethod", [], "any", false, false, false, 174) == "kkiapay")) {
            // line 175
            yield "                                            Mobile Money (KKiaPay)
                                        ";
        } else {
            // line 177
            yield "                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentMethod", [], "any", true, true, false, 177)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentMethod", [], "any", false, false, false, 177), "Non spécifié")) : ("Non spécifié")), "html", null, true);
            yield "
                                        ";
        }
        // line 179
        yield "                                    </td>
                                </tr>
                                <tr>
                                    <th>Total :</th>
                                    <td>";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 183), "XOF"), "html", null, true);
        yield "</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class=\"col-md-6\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5 class=\"card-title mb-0\">Informations client</h5>
                        </div>
                        <div class=\"card-body\">
                            <table class=\"table table-borderless\">
                                <tr>
                                    <th>Nom :</th>
                                    <td>";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 199), "firstName", [], "any", false, false, false, 199), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 199), "lastName", [], "any", false, false, false, 199), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Email :</th>
                                    <td>";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 203), "email", [], "any", false, false, false, 203), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Téléphone :</th>
                                    <td>
                                        ";
        // line 208
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "phone", [], "any", false, false, false, 208)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 209
            yield "                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "phone", [], "any", false, false, false, 209), "html", null, true);
            yield "
                                        ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 210
($context["order"] ?? null), "user", [], "any", false, false, false, 210), "phoneNumber", [], "any", false, false, false, 210)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 211
            yield "                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 211), "phoneNumber", [], "any", false, false, false, 211), "html", null, true);
            yield "
                                        ";
        } else {
            // line 213
            yield "                                            <span class=\"text-muted\">Non disponible</span>
                                            <a href=\"";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_admin_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 214), "id", [], "any", false, false, false, 214)]), "html", null, true);
            yield "\" class=\"ms-2 btn btn-sm btn-outline-primary\">
                                                <i class=\"fa fa-edit\"></i> Modifier le profil
                                            </a>
                                        ";
        }
        // line 218
        yield "                                    </td>
                                </tr>
                                <tr>
                                    <th>Adresse :</th>
                                    <td>
                                        ";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "address", [], "any", true, true, false, 223)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "address", [], "any", false, false, false, 223), "")) : ("")), "html", null, true);
        yield "<br>
                                        ";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "postalCode", [], "any", true, true, false, 224)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "postalCode", [], "any", false, false, false, 224), "")) : ("")), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "city", [], "any", true, true, false, 224)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "city", [], "any", false, false, false, 224), "")) : ("")), "html", null, true);
        yield "<br>
                                        ";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "country", [], "any", true, true, false, 225)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "country", [], "any", false, false, false, 225), "")) : ("")), "html", null, true);
        yield "
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"card mb-4\">
                <div class=\"card-header\">
                    <h5 class=\"card-title mb-0\">Articles commandés</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>Produit</th>
                                    <th>Prix unitaire</th>
                                    <th>Quantité</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "orderItems", [], "any", false, false, false, 250));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 251
            yield "                                    <tr>
                                        <td>
                                            ";
            // line 253
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 253)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 254
                yield "                                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 254), "id", [], "any", false, false, false, 254)]), "html", null, true);
                yield "\" target=\"_blank\">
                                                    ";
                // line 255
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 255), "name", [], "any", false, false, false, 255), "html", null, true);
                yield "
                                                </a>
                                            ";
            } else {
                // line 258
                yield "                                                Produit supprimé
                                            ";
            }
            // line 260
            yield "                                        </td>
                                        <td>";
            // line 261
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 261)), "html", null, true);
            yield "</td>
                                        <td>";
            // line 262
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 262), "html", null, true);
            yield "</td>
                                        <td>";
            // line 263
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 263) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 263))), "html", null, true);
            yield "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        yield "                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan=\"3\" class=\"text-end\">Sous-total:</th>
                                    <td>";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 270)), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th colspan=\"3\" class=\"text-end\">Livraison:</th>
                                    <td>À vos charges</td>
                                </tr>
                                <tr>
                                    <th colspan=\"3\" class=\"text-end\">Total:</th>
                                    <td><strong>";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 278), "XOF"), "html", null, true);
        yield "</strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class=\"card\">
                <div class=\"card-header\">
                    <h5 class=\"card-title mb-0\">Historique de la commande</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"order-timeline\">
                        <div class=\"timeline-item\">
                            <p class=\"mb-0 fw-bold\">Commande créée</p>
                            <p class=\"timeline-date\">";
        // line 294
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "createdAt", [], "any", false, false, false, 294), "d/m/Y H:i"), "html", null, true);
        yield "</p>
                        </div>
                        
                        ";
        // line 297
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 297) != "new")) {
            // line 298
            yield "                            <div class=\"timeline-item\">
                                <p class=\"mb-0 fw-bold\">Commande en traitement</p>
                                <p class=\"timeline-date\">";
            // line 300
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "updatedAt", [], "any", false, false, false, 300), "d/m/Y H:i"), "html", null, true);
            yield "</p>
                            </div>
                        ";
        }
        // line 303
        yield "                        
                        ";
        // line 304
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 304) == "shipped") || (CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 304) == "delivered"))) {
            // line 305
            yield "                            <div class=\"timeline-item\">
                                <p class=\"mb-0 fw-bold\">Commande expédiée</p>
                                <p class=\"timeline-date\">";
            // line 307
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "updatedAt", [], "any", false, false, false, 307), "d/m/Y H:i"), "html", null, true);
            yield "</p>
                            </div>
                        ";
        }
        // line 310
        yield "                        
                        ";
        // line 311
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 311) == "delivered")) {
            // line 312
            yield "                            <div class=\"timeline-item\">
                                <p class=\"mb-0 fw-bold\">Commande livrée</p>
                                <p class=\"timeline-date\">";
            // line 314
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "updatedAt", [], "any", false, false, false, 314), "d/m/Y H:i"), "html", null, true);
            yield "</p>
                            </div>
                        ";
        }
        // line 317
        yield "                        
                        ";
        // line 318
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 318) == "cancelled")) {
            // line 319
            yield "                            <div class=\"timeline-item\">
                                <p class=\"mb-0 fw-bold\">Commande annulée</p>
                                <p class=\"timeline-date\">";
            // line 321
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "updatedAt", [], "any", false, false, false, 321), "d/m/Y H:i"), "html", null, true);
            yield "</p>
                            </div>
                        ";
        }
        // line 324
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de confirmation de suppression -->
<div class=\"modal fade\" id=\"deleteOrderModal\" tabindex=\"-1\" aria-labelledby=\"deleteOrderModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\" id=\"deleteOrderModalLabel\">Confirmation de suppression</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Êtes-vous sûr de vouloir supprimer définitivement la commande #";
        // line 340
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 340), "html", null, true);
        yield " ?</p>
                <p class=\"text-danger\"><strong>Attention :</strong> Cette action est irréversible et toutes les données associées à cette commande seront perdues.</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form method=\"post\" action=\"";
        // line 345
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 345)]), "html", null, true);
        yield "\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 346
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 346))), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"btn btn-danger\">Confirmer la suppression</button>
                </form>
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
        return "admin/order_view.html.twig";
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
        return array (  610 => 346,  606 => 345,  598 => 340,  580 => 324,  574 => 321,  570 => 319,  568 => 318,  565 => 317,  559 => 314,  555 => 312,  553 => 311,  550 => 310,  544 => 307,  540 => 305,  538 => 304,  535 => 303,  529 => 300,  525 => 298,  523 => 297,  517 => 294,  498 => 278,  487 => 270,  481 => 266,  472 => 263,  468 => 262,  464 => 261,  461 => 260,  457 => 258,  451 => 255,  446 => 254,  444 => 253,  440 => 251,  436 => 250,  408 => 225,  402 => 224,  398 => 223,  391 => 218,  384 => 214,  381 => 213,  375 => 211,  373 => 210,  368 => 209,  366 => 208,  358 => 203,  349 => 199,  330 => 183,  324 => 179,  318 => 177,  314 => 175,  312 => 174,  309 => 173,  307 => 172,  299 => 166,  295 => 164,  293 => 163,  290 => 162,  288 => 161,  285 => 160,  283 => 159,  280 => 158,  278 => 157,  275 => 156,  273 => 155,  269 => 154,  261 => 149,  254 => 145,  233 => 127,  227 => 124,  221 => 121,  212 => 115,  208 => 114,  204 => 113,  200 => 112,  196 => 111,  192 => 110,  181 => 102,  177 => 100,  170 => 99,  73 => 6,  66 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/order_view.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/admin/order_view.html.twig");
    }
}
