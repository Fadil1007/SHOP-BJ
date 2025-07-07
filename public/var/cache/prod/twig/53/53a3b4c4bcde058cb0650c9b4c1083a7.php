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

/* checkout/confirmation.html.twig */
class __TwigTemplate_8f223db901269bb1e35c26af6a200590 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        yield "Confirmation de commande - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["site_name"] ?? null), "html", null, true);
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
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .payment-status-section {
            margin-bottom: 2rem;
            padding: 1.5rem;
            background-color: #f8f9fa;
            border-radius: 0.5rem;
        }
        .payment-button {
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            font-weight: bold;
            border-radius: 0.375rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            transition: all 0.3s;
            width: 100%;
            font-size: 1.125rem;
            margin-bottom: 1rem;
        }
        .fedapay-button {
            background-color: #1B5E20;
        }
        .fedapay-button:hover {
            background-color: #2E7D32;
            color: white;
        }
        .cinetpay-button {
            background-color: #FF6B35;
        }
        .cinetpay-button:hover {
            background-color: #E55A2E;
            color: white;
        }
        .stripe-button {
            background-color: #6772E5;
        }
        .stripe-button:hover {
            background-color: #4F56BD;
            color: white;
        }
        .payment-logo {
            height: 1.5rem;
        }
        .payment-section {
            margin-top: 1.5rem;
            margin-bottom: 3rem;
        }
        #payment-result {
            margin-top: 1rem;
        }
        .payment-or {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 1rem 0;
        }
        .payment-or:before,
        .payment-or:after {
            content: \"\";
            flex: 1;
            border-bottom: 1px solid #eee;
        }
        .payment-or:before {
            margin-right: 1rem;
        }
        .payment-or:after {
            margin-left: 1rem;
        }
    </style>
";
        yield from [];
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 82
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    ";
        // line 84
        yield "    <script>
        console.log('FedaPay configuration:', ";
        // line 85
        yield json_encode(((array_key_exists("fedapay_data", $context)) ? (Twig\Extension\CoreExtension::default(($context["fedapay_data"] ?? null), "null")) : ("null")));
        yield ");
        window.fedaPayConfig = ";
        // line 86
        yield json_encode(((array_key_exists("fedapay_data", $context)) ? (Twig\Extension\CoreExtension::default(($context["fedapay_data"] ?? null), "null")) : ("null")));
        yield ";
    </script>

    <!-- Payment Integration Scripts -->
    ";
        // line 90
        yield ($context["fedapay_script"] ?? null);
        yield "
    <script src=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/fedapay-payment.js"), "html", null, true);
        yield "\"></script>
";
        yield from [];
    }

    // line 94
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 95
        yield "    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            ";
        // line 97
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentStatus", [], "any", false, false, false, 97) == "paid")) {
            // line 98
            yield "            <div class=\"card mb-4\">
                <div class=\"card-body text-center p-5\">
                    <div class=\"confirmation-icon mb-4\">
                        <i class=\"fas fa-check-circle fa-5x text-success\"></i>
                    </div>
                    <h1 class=\"mb-3\">Merci pour votre commande!</h1>
                    <p class=\"lead\">Votre commande a été reçue et est en cours de traitement.</p>
                    <div class=\"order-number mb-4\">
                        <span class=\"fw-bold\">Numéro de commande:</span> #";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 106), "html", null, true);
            yield "
                    </div>
                    <div class=\"text-muted mb-4\">
                        Un e-mail de confirmation a été envoyé à <strong>";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "email", [], "any", false, false, false, 109), "html", null, true);
            yield "</strong>.
                    </div>
                    <div class=\"d-grid gap-2 d-md-flex justify-content-md-center\">
                        <a href=\"";
            // line 112
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            yield "\" class=\"btn btn-primary\">
                            Retour à l'accueil
                        </a>
                        <a href=\"";
            // line 115
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_orders");
            yield "\" class=\"btn btn-outline-secondary\">
                            Voir mes commandes
                        </a>
                    </div>
                </div>
            </div>
            ";
        } else {
            // line 122
            yield "            <div class=\"card mb-4\">
                <div class=\"card-header bg-light\">
                    <h2 class=\"h5 mb-0\">Commande #";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 124), "html", null, true);
            yield "</h2>
                </div>
                <div class=\"card-body text-center\">
                    <p class=\"lead\">Votre commande a été enregistrée.</p>
                    <p>Veuillez procéder au paiement pour finaliser votre achat.</p>
                </div>
            </div>
            ";
        }
        // line 132
        yield "
            ";
        // line 134
        yield "            <div class=\"card\">
                <div class=\"card-header bg-light\">
                    <h2 class=\"h5 mb-0\">Détails de la commande</h2>
                </div>
                <div class=\"card-body\">
                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <h3 class=\"h6 mb-3\">Informations du client</h3>
                            <address class=\"mb-0\">
                                <strong>";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "fullName", [], "any", false, false, false, 143), "html", null, true);
        yield "</strong><br>
                                ";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "city", [], "any", false, false, false, 144), "html", null, true);
        yield "<br>
                                ";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "country", [], "any", false, false, false, 145), "html", null, true);
        yield "<br>
                                <abbr title=\"Téléphone\">Tél:</abbr> ";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "phone", [], "any", false, false, false, 146), "html", null, true);
        yield "
                            </address>
                        </div>
                        <div class=\"col-md-6\">
                            <h3 class=\"h6 mb-3\">Informations de commande</h3>
                            <p class=\"mb-0\">
                                <strong>Numéro de commande:</strong> #";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 152), "html", null, true);
        yield "<br>
                                <strong>Date:</strong> ";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "createdAt", [], "any", false, false, false, 153), "d/m/Y"), "html", null, true);
        yield "<br>
                                <strong>Statut:</strong> 
                                <span class=\"badge bg-info\">";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 155), "html", null, true);
        yield "</span><br>
                                <strong>Total:</strong> ";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 156), 0, "", " "), "html", null, true);
        yield " FCFA<br>
                            </p>
                        </div>
                    </div>

                    <h3 class=\"h6 mb-3\">Produits commandés</h3>
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    <th>Produit</th>
                                    <th>Prix unitaire</th>
                                    <th>Quantité</th>
                                    <th class=\"text-end\">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "orderItems", [], "any", false, false, false, 173));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 174
            yield "                                    <tr>
                                        <td>
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"me-3\">
                                                    ";
            // line 178
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 178), "imageFilename", [], "any", false, false, false, 178)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 179
                yield "                                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 179), "imageFilename", [], "any", false, false, false, 179)), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 179), "name", [], "any", false, false, false, 179), "html", null, true);
                yield "\" width=\"50\" class=\"img-fluid\">
                                                    ";
            } else {
                // line 181
                yield "                                                        <div class=\"product-placeholder-img d-flex align-items-center justify-content-center bg-light rounded\" style=\"width: 50px; height: 50px;\">
                                                            <i class=\"fas fa-tshirt text-secondary\"></i>
                                                        </div>
                                                    ";
            }
            // line 185
            yield "                                                </div>
                                                <div>
                                                    ";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 187), "name", [], "any", false, false, false, 187), "html", null, true);
            yield "
                                                    ";
            // line 188
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 188) || CoreExtension::getAttribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 188))) {
                // line 189
                yield "                                                        <div class=\"small text-muted\">
                                                            ";
                // line 190
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 190)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "Taille: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 190), "html", null, true);
                }
                // line 191
                yield "                                                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 191)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 191)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " - ";
                    }
                    yield "Couleur: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 191), "html", null, true);
                }
                // line 192
                yield "                                                        </div>
                                                    ";
            }
            // line 194
            yield "                                                </div>
                                            </div>
                                        </td>
                                        <td>";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 197), 0, "", " "), "html", null, true);
            yield " FCFA</td>
                                        <td>";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 198), "html", null, true);
            yield "</td>
                                        <td class=\"text-end\">";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 199) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 199)), 0, "", " "), "html", null, true);
            yield " FCFA</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        yield "                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan=\"3\" class=\"text-end\"><strong>Sous-total</strong></td>
                                    <td class=\"text-end\">";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 206), 0, "", " "), "html", null, true);
        yield " FCFA</td>
                                </tr>
                                <tr>
                                    <td colspan=\"3\" class=\"text-end\"><strong>Livraison</strong></td>
                                    <td class=\"text-end\">
                                        <span>À votre charge</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"3\" class=\"text-end\"><strong>Total</strong></td>
                                    <td class=\"text-end fw-bold\">
                                        ";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 217), 0, "", " "), "html", null, true);
        yield " FCFA
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

            ";
        // line 227
        yield "            <div class=\"card mt-4\">
                <div class=\"card-header bg-light\">
                    <h2 class=\"h5 mb-0\">Paiement</h2>
                </div>
                <div class=\"card-body\">
                    <div class=\"payment-status-section\">
                        <h3 class=\"h6 mb-3\">Statut du paiement</h3>
                        <div class=\"d-flex align-items-center mb-3\">
                            <span class=\"me-2\">Statut actuel:</span>
                            <span id=\"payment-status-badge\" class=\"badge 
                                ";
        // line 237
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentStatus", [], "any", false, false, false, 237) == "paid")) {
            yield "bg-success
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 238
($context["order"] ?? null), "paymentStatus", [], "any", false, false, false, 238) == "pending")) {
            yield "bg-warning
                                ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 239
($context["order"] ?? null), "paymentStatus", [], "any", false, false, false, 239) == "failed") || (CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentStatus", [], "any", false, false, false, 239) == "FAILED"))) {
            yield "bg-danger
                                ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 240
($context["order"] ?? null), "paymentStatus", [], "any", false, false, false, 240) == "cancelled") || (CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentStatus", [], "any", false, false, false, 240) == "CANCELLED"))) {
            yield "bg-secondary
                                ";
        } else {
            // line 241
            yield "bg-secondary";
        }
        yield "\">
                                ";
        // line 242
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentStatus", [], "any", false, false, false, 242) == "paid")) {
            // line 243
            yield "                                    Payé
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 244
($context["order"] ?? null), "paymentStatus", [], "any", false, false, false, 244) == "pending")) {
            // line 245
            yield "                                    En attente
                                ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 246
($context["order"] ?? null), "paymentStatus", [], "any", false, false, false, 246) == "failed") || (CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentStatus", [], "any", false, false, false, 246) == "FAILED"))) {
            // line 247
            yield "                                    Refusé
                                ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 248
($context["order"] ?? null), "paymentStatus", [], "any", false, false, false, 248) == "cancelled") || (CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentStatus", [], "any", false, false, false, 248) == "CANCELLED"))) {
            // line 249
            yield "                                    Annulé
                                ";
        } else {
            // line 251
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentStatus", [], "any", true, true, false, 251)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentStatus", [], "any", false, false, false, 251), "En attente")) : ("En attente"))), "html", null, true);
            yield "
                                ";
        }
        // line 253
        yield "                            </span>
                        </div>

                        <div id=\"payment-result\" class=\"alert ";
        // line 256
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentStatus", [], "any", false, false, false, 256) == "failed") || (CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentStatus", [], "any", false, false, false, 256) == "FAILED"))) {
            yield "alert-danger";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentStatus", [], "any", false, false, false, 256) == "cancelled") || (CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentStatus", [], "any", false, false, false, 256) == "CANCELLED"))) {
            yield "alert-info";
        } else {
            yield "d-none";
        }
        yield "\">
                            ";
        // line 257
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentStatus", [], "any", false, false, false, 257) == "failed") || (CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentStatus", [], "any", false, false, false, 257) == "FAILED"))) {
            // line 258
            yield "                                <i class=\"fas fa-exclamation-triangle me-2\"></i> Votre paiement a été refusé. Cela peut être dû à un problème avec votre carte bancaire ou votre compte. Veuillez vérifier vos informations de paiement et réessayer.
                            ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 259
($context["order"] ?? null), "paymentStatus", [], "any", false, false, false, 259) == "cancelled") || (CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentStatus", [], "any", false, false, false, 259) == "CANCELLED"))) {
            // line 260
            yield "                                <i class=\"fas fa-info-circle me-2\"></i> Votre paiement a été annulé. Vous pouvez réessayer quand vous serez prêt.
                            ";
        }
        // line 262
        yield "                        </div>

                        ";
        // line 264
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentStatus", [], "any", false, false, false, 264) != "paid")) {
            // line 265
            yield "                            <div class=\"payment-section\">
                                <h3 class=\"h6 mb-3\">Procéder au paiement</h3>
                                <p class=\"mb-3\">Pour finaliser votre commande, veuillez procéder au paiement en utilisant l'une des méthodes ci-dessous:</p>

                                <button id=\"fedapay-payment-button\" class=\"payment-button fedapay-button btn btn-primary btn-lg w-100\" 
                                    data-order-id=\"";
            // line 270
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 270), "html", null, true);
            yield "\"
                                    data-amount=\"";
            // line 271
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 271), "html", null, true);
            yield "\"
                                    data-name=\"";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "fullName", [], "any", false, false, false, 272), "html", null, true);
            yield "\"
                                    data-phone=\"";
            // line 273
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "phone", [], "any", false, false, false, 273), "html", null, true);
            yield "\"
                                    data-email=\"";
            // line 274
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "email", [], "any", false, false, false, 274), "html", null, true);
            yield "\"
                                    data-callback=\"";
            // line 275
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fedapay_data"] ?? null), "callbackUrl", [], "any", false, false, false, 275), "html", null, true);
            yield "\">
                                    <svg width=\"100\" height=\"30\" viewBox=\"0 0 100 30\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"payment-logo me-2\">
                                        <rect width=\"100\" height=\"30\" rx=\"5\" fill=\"#1B5E20\"/>
                                        <text x=\"50\" y=\"20\" text-anchor=\"middle\" fill=\"white\" font-size=\"12\" font-weight=\"bold\">FedaPay</text>
                                    </svg>
                                    Payer ";
            // line 280
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 280), 0, "", " "), "html", null, true);
            yield " FCFA par Mobile Money
                                </button>

                            </div>
                        ";
        } else {
            // line 285
            yield "                            <div id=\"confirmation-message\" class=\"alert alert-success\">
                                <i class=\"fas fa-check-circle me-2\"></i> Votre paiement a été reçu et votre commande est en cours de traitement.
                            </div>
                        ";
        }
        // line 289
        yield "                    </div>
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
        return "checkout/confirmation.html.twig";
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
        return array (  577 => 289,  571 => 285,  563 => 280,  555 => 275,  551 => 274,  547 => 273,  543 => 272,  539 => 271,  535 => 270,  528 => 265,  526 => 264,  522 => 262,  518 => 260,  516 => 259,  513 => 258,  511 => 257,  501 => 256,  496 => 253,  490 => 251,  486 => 249,  484 => 248,  481 => 247,  479 => 246,  476 => 245,  474 => 244,  471 => 243,  469 => 242,  464 => 241,  459 => 240,  455 => 239,  451 => 238,  447 => 237,  435 => 227,  423 => 217,  409 => 206,  403 => 202,  394 => 199,  390 => 198,  386 => 197,  381 => 194,  377 => 192,  368 => 191,  363 => 190,  360 => 189,  358 => 188,  354 => 187,  350 => 185,  344 => 181,  336 => 179,  334 => 178,  328 => 174,  324 => 173,  304 => 156,  300 => 155,  295 => 153,  291 => 152,  282 => 146,  278 => 145,  274 => 144,  270 => 143,  259 => 134,  256 => 132,  245 => 124,  241 => 122,  231 => 115,  225 => 112,  219 => 109,  213 => 106,  203 => 98,  201 => 97,  197 => 95,  190 => 94,  183 => 91,  179 => 90,  172 => 86,  168 => 85,  165 => 84,  160 => 82,  153 => 81,  73 => 6,  66 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "checkout/confirmation.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/checkout/confirmation.html.twig");
    }
}
