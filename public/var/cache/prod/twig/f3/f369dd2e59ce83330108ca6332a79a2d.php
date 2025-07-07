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

/* admin/order_edit.html.twig */
class __TwigTemplate_ecc98fd2e6b00e992c176ba939b3981f extends Template
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
        yield "Modifier commande #";
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
</style>
";
        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 68
        yield "<div class=\"container py-4\">
    <div class=\"admin-header\">
        <h1>Modifier la commande #";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 70), "html", null, true);
        yield "</h1>
        <p>Mise à jour du statut et des informations</p>
    </div>
    
    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"admin-menu\">
                <h5 class=\"mb-3\">Menu principal</h5>
                <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        yield "\"><i class=\"fa fa-home\"></i> Tableau de bord</a>
                <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products");
        yield "\"><i class=\"fa fa-tshirt\"></i> Produits</a>
                <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories");
        yield "\"><i class=\"fa fa-list\"></i> Catégories</a>
                <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
        yield "\" class=\"active\"><i class=\"fa fa-shopping-cart\"></i> Commandes</a>
                <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        yield "\"><i class=\"fa fa-users\"></i> Utilisateurs</a>
                <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"><i class=\"fa fa-arrow-left\"></i> Retour au site</a>
            </div>
        </div>
        
        <div class=\"col-md-9\">
            <div class=\"mb-4\">
                <a href=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_view", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 89)]), "html", null, true);
        yield "\" class=\"btn btn-outline-primary\">
                    <i class=\"fa fa-arrow-left\"></i> Retour aux détails
                </a>
            </div>
            
            <div class=\"card mb-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">Modifier le statut de la commande</h5>
                </div>
                <div class=\"card-body\">
                    <form method=\"post\" action=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 99)]), "html", null, true);
        yield "\">
                        <div class=\"mb-3\">
                            <label for=\"status\" class=\"form-label\">Statut de la commande</label>
                            <select name=\"status\" id=\"status\" class=\"form-select\">
                                <option value=\"new\" ";
        // line 103
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 103) == "new")) {
            yield "selected";
        }
        yield ">Nouvelle</option>
                                <option value=\"processing\" ";
        // line 104
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 104) == "processing")) {
            yield "selected";
        }
        yield ">En traitement</option>
                                <option value=\"shipped\" ";
        // line 105
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 105) == "shipped")) {
            yield "selected";
        }
        yield ">Expédiée</option>
                                <option value=\"delivered\" ";
        // line 106
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 106) == "delivered")) {
            yield "selected";
        }
        yield ">Livrée</option>
                                <option value=\"cancelled\" ";
        // line 107
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 107) == "cancelled")) {
            yield "selected";
        }
        yield ">Annulée</option>
                            </select>
                        </div>
                        
                        <div class=\"d-grid gap-2\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fa fa-save\"></i> Enregistrer les modifications
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class=\"card mb-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">Informations de la commande</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-borderless\">
                            <tr>
                                <th style=\"width: 200px;\">Référence :</th>
                                <td>";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 129), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Date :</th>
                                <td>";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "createdAt", [], "any", false, false, false, 133), "d/m/Y H:i"), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Client :</th>
                                <td>";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 137), "firstName", [], "any", false, false, false, 137), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 137), "lastName", [], "any", false, false, false, 137), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Email :</th>
                                <td>";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 141), "email", [], "any", false, false, false, 141), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Total :</th>
                                <td>";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 145), "XOF"), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Méthode de paiement :</th>
                                <td>
                                    ";
        // line 150
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentMethod", [], "any", false, false, false, 150) == "stripe")) {
            // line 151
            yield "                                        Carte bancaire (Stripe)
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 152
($context["order"] ?? null), "paymentMethod", [], "any", false, false, false, 152) == "kkiapay")) {
            // line 153
            yield "                                        Mobile Money (KKiaPay)
                                    ";
        } else {
            // line 155
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentMethod", [], "any", true, true, false, 155)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentMethod", [], "any", false, false, false, 155), "Non spécifié")) : ("Non spécifié")), "html", null, true);
            yield "
                                    ";
        }
        // line 157
        yield "                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class=\"card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">Articles de la commande</h5>
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
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "orderItems", [], "any", false, false, false, 180));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 181
            yield "                                    <tr>
                                        <td>";
            // line 182
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 182)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 182), "name", [], "any", false, false, false, 182), "html", null, true);
            } else {
                yield "Produit supprimé";
            }
            yield "</td>
                                        <td>";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 183), "XOF"), "html", null, true);
            yield "</td>
                                        <td>";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 184), "html", null, true);
            yield "</td>
                                        <td>";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 185) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 185)), "XOF"), "html", null, true);
            yield "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        yield "                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan=\"3\" class=\"text-end\">Total:</th>
                                    <td><strong>";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 192), "XOF"), "html", null, true);
        yield "</strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
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
        return "admin/order_edit.html.twig";
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
        return array (  378 => 192,  372 => 188,  363 => 185,  359 => 184,  355 => 183,  347 => 182,  344 => 181,  340 => 180,  315 => 157,  309 => 155,  305 => 153,  303 => 152,  300 => 151,  298 => 150,  290 => 145,  283 => 141,  274 => 137,  267 => 133,  260 => 129,  233 => 107,  227 => 106,  221 => 105,  215 => 104,  209 => 103,  202 => 99,  189 => 89,  180 => 83,  176 => 82,  172 => 81,  168 => 80,  164 => 79,  160 => 78,  149 => 70,  145 => 68,  138 => 67,  73 => 6,  66 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/order_edit.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/admin/order_edit.html.twig");
    }
}
