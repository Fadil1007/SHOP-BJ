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

/* admin/orders.html.twig */
class __TwigTemplate_0ac49e528b63336743ed7abc4a32c8d7 extends Template
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
        yield "Gestion des commandes - Administration SHOP BJ";
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
    .admin-actions {
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

    // line 70
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 71
        yield "<div class=\"container py-4\">
    <div class=\"admin-header\">
        <h1>Gestion des commandes</h1>
        <p>Administration des commandes clients</p>
    </div>

    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"admin-menu\">
                <h5 class=\"mb-3\">Menu principal</h5>
                <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        yield "\"><i class=\"fa fa-home\"></i> Tableau de bord</a>
                <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products");
        yield "\"><i class=\"fa fa-tshirt\"></i> Produits</a>
                <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories");
        yield "\"><i class=\"fa fa-list\"></i> Catégories</a>
                <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
        yield "\" class=\"active\"><i class=\"fa fa-shopping-cart\"></i> Commandes</a>
                <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        yield "\"><i class=\"fa fa-users\"></i> Utilisateurs</a>
                <a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"><i class=\"fa fa-arrow-left\"></i> Retour au site</a>
            </div>

            <div class=\"card mb-4\">
                <div class=\"card-header\">Filtrer par statut</div>
                <div class=\"card-body\">
                    <div class=\"list-group\">
                        <a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
        yield "\" class=\"list-group-item list-group-item-action ";
        if ((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 93), "query", [], "any", false, false, false, 93), "get", ["status"], "method", false, false, false, 93))) {
            yield "active";
        }
        yield "\">
                            Tous les statuts
                        </a>
                        <a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders", ["status" => "new"]);
        yield "\" class=\"list-group-item list-group-item-action ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 96), "query", [], "any", false, false, false, 96), "get", ["status"], "method", false, false, false, 96) == "new")) {
            yield "active";
        }
        yield "\">
                            <span class=\"order-status status-new\">Nouvelle</span>
                        </a>
                        <a href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders", ["status" => "processing"]);
        yield "\" class=\"list-group-item list-group-item-action ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 99), "query", [], "any", false, false, false, 99), "get", ["status"], "method", false, false, false, 99) == "processing")) {
            yield "active";
        }
        yield "\">
                            <span class=\"order-status status-processing\">En traitement</span>
                        </a>
                        <a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders", ["status" => "shipped"]);
        yield "\" class=\"list-group-item list-group-item-action ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 102), "query", [], "any", false, false, false, 102), "get", ["status"], "method", false, false, false, 102) == "shipped")) {
            yield "active";
        }
        yield "\">
                            <span class=\"order-status status-shipped\">Expédiée</span>
                        </a>
                        <a href=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders", ["status" => "delivered"]);
        yield "\" class=\"list-group-item list-group-item-action ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 105), "query", [], "any", false, false, false, 105), "get", ["status"], "method", false, false, false, 105) == "delivered")) {
            yield "active";
        }
        yield "\">
                            <span class=\"order-status status-delivered\">Livrée</span>
                        </a>
                        <a href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders", ["status" => "cancelled"]);
        yield "\" class=\"list-group-item list-group-item-action ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 108), "query", [], "any", false, false, false, 108), "get", ["status"], "method", false, false, false, 108) == "cancelled")) {
            yield "active";
        }
        yield "\">
                            <span class=\"order-status status-cancelled\">Annulée</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-md-9\">
            <div class=\"admin-actions d-flex justify-content-between\">
                <form class=\"d-flex\" method=\"get\">
                    <input class=\"form-control me-2\" type=\"search\" placeholder=\"Rechercher une commande\" name=\"search\" value=\"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 119), "query", [], "any", false, false, false, 119), "get", ["search"], "method", false, false, false, 119), "html", null, true);
        yield "\">
                    <button class=\"btn btn-outline-primary\" type=\"submit\">Rechercher</button>
                </form>
                <div>
                    <a href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_export");
        yield "\" class=\"btn btn-success\">
                        <i class=\"fa fa-file-excel\"></i> Exporter
                    </a>
                </div>
            </div>

            <div class=\"table-responsive\">
                <table class=\"table table-striped table-hover\">
                    <thead>
                        <tr>
                            <th>N° Commande</th>
                            <th>Client</th>
                            <th>Date</th>
                            <th>Total</th>
                            <th>Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["orders"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 143
            yield "                            <tr>
                                <td>";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 144), "html", null, true);
            yield "</td>
                                <td>";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 145), "firstName", [], "any", false, false, false, 145), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 145), "lastName", [], "any", false, false, false, 145), "html", null, true);
            yield "</td>
                                <td>";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 146), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                                <td>";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 147), "XOF"), "html", null, true);
            yield "</td>
                                <td>
                                    <span class=\"order-status status-";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 149), "html", null, true);
            yield "\">
                                        ";
            // line 150
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 150) == "new")) {
                // line 151
                yield "                                            Nouvelle
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 152
$context["order"], "status", [], "any", false, false, false, 152) == "processing")) {
                // line 153
                yield "                                            En traitement
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 154
$context["order"], "status", [], "any", false, false, false, 154) == "shipped")) {
                // line 155
                yield "                                            Expédiée
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 156
$context["order"], "status", [], "any", false, false, false, 156) == "delivered")) {
                // line 157
                yield "                                            Livrée
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 158
$context["order"], "status", [], "any", false, false, false, 158) == "cancelled")) {
                // line 159
                yield "                                            Annulée
                                        ";
            }
            // line 161
            yield "                                    </span>
                                </td>
                                <td>
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_view", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 165)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary\">
                                            <i class=\"fa fa-eye\"></i>
                                        </a>
                                        <a href=\"";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 168)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a href=\"";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_invoice", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 171)]), "html", null, true);
            yield "\" class=\"btn btn-outline-secondary\">
                                            <i class=\"fa fa-file-pdf\"></i>
                                        </a>
                                        <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteOrderModal";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 174), "html", null, true);
            yield "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </button>
                                    </div>

                                    <!-- Modal de confirmation de suppression -->
                                    <div class=\"modal fade\" id=\"deleteOrderModal";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 180), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"deleteOrderModalLabel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 180), "html", null, true);
            yield "\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header bg-danger text-white\">
                                                    <h5 class=\"modal-title\" id=\"deleteOrderModalLabel";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 184), "html", null, true);
            yield "\">Confirmation de suppression</h5>
                                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <p>Êtes-vous sûr de vouloir supprimer définitivement la commande #";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 188), "html", null, true);
            yield " ?</p>
                                                    <p class=\"text-danger\"><strong>Attention :</strong> Cette action est irréversible et toutes les données associées à cette commande seront perdues.</p>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                                                    <form method=\"post\" action=\"";
            // line 193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 193)]), "html", null, true);
            yield "\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 194))), "html", null, true);
            yield "\">
                                                        <button type=\"submit\" class=\"btn btn-danger\">Confirmer la suppression</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 203
        if (!$context['_iterated']) {
            // line 204
            yield "                            <tr>
                                <td colspan=\"6\" class=\"text-center\">Aucune commande trouvée</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        yield "                    </tbody>
                </table>
            </div>

            <div class=\"pagination d-flex justify-content-center\">
                ";
        // line 213
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, ($context["orders"] ?? null));
        yield "
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
        return "admin/orders.html.twig";
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
        return array (  435 => 213,  428 => 208,  419 => 204,  417 => 203,  403 => 194,  399 => 193,  391 => 188,  384 => 184,  375 => 180,  366 => 174,  360 => 171,  354 => 168,  348 => 165,  342 => 161,  338 => 159,  336 => 158,  333 => 157,  331 => 156,  328 => 155,  326 => 154,  323 => 153,  321 => 152,  318 => 151,  316 => 150,  312 => 149,  307 => 147,  303 => 146,  297 => 145,  293 => 144,  290 => 143,  285 => 142,  263 => 123,  256 => 119,  238 => 108,  228 => 105,  218 => 102,  208 => 99,  198 => 96,  188 => 93,  178 => 86,  174 => 85,  170 => 84,  166 => 83,  162 => 82,  158 => 81,  146 => 71,  139 => 70,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/orders.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/admin/orders.html.twig");
    }
}
