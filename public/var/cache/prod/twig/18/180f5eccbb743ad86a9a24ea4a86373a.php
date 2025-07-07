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

/* checkout/payment_success.html.twig */
class __TwigTemplate_d6997d0672d5bdd9038ce48ad38c3a2c extends Template
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
        yield "Paiement réussi | SHOP BJ";
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
        .success-icon {
            font-size: 64px;
            color: #28a745;
            margin-bottom: 20px;
        }
        .order-success {
            background-color: #f8f9fa;
            border-radius: 5px;
            padding: 30px;
            margin-top: 20px;
            margin-bottom: 30px;
        }
        .success-container {
            text-align: center;
            padding: 2rem 0;
        }
        .order-details {
            margin-top: 30px;
            border-top: 1px solid #dee2e6;
            padding-top: 20px;
        }
        .next-steps {
            margin-top: 30px;
        }
        .next-step-button {
            margin: 10px 5px;
        }
    </style>
";
        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "    <main class=\"main-content\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                            <li class=\"breadcrumb-item\"><a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        yield "\">Panier</a></li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Paiement réussi</li>
                        </ol>
                    </nav>
                </div>
            </div>
            
            <div class=\"order-success\">
                <div class=\"success-container\">
                    <div class=\"success-icon\">
                        <i class=\"bi bi-check-circle-fill\"></i>
                    </div>
                    <h2>Paiement effectué avec succès !</h2>
                    <p class=\"lead\">Merci pour votre commande. Votre paiement a été confirmé.</p>
                    <p>Un email de confirmation a été envoyé à <strong>";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "email", [], "any", false, false, false, 60), "html", null, true);
        yield "</strong></p>
                    
                    <div class=\"order-details\">
                        <h4>Récapitulatif de votre commande #";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 63), "html", null, true);
        yield "</h4>
                        <div class=\"row mt-4\">
                            <div class=\"col-md-6 text-md-right\">
                                <p><strong>Date :</strong> ";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "createdAt", [], "any", false, false, false, 66), "d/m/Y à H:i"), "html", null, true);
        yield "</p>
                                <p><strong>Méthode de paiement :</strong> ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentMethod", [], "any", false, false, false, 67), "html", null, true);
        yield "</p>
                                <p><strong>Total :</strong> ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 68), 0, "", " "), "html", null, true);
        yield " FCFA</p>
                            </div>
                            <div class=\"col-md-6 text-md-left\">
                                <p><strong>Nom :</strong> ";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "fullName", [], "any", false, false, false, 71), "html", null, true);
        yield "</p>
                                <p><strong>Téléphone :</strong> ";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "phone", [], "any", false, false, false, 72), "html", null, true);
        yield "</p>
                                <p><strong>Ville :</strong> ";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "city", [], "any", false, false, false, 73), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"next-steps\">
                        <h5>Que souhaitez-vous faire maintenant ?</h5>
                        <div class=\"d-flex justify-content-center flex-wrap\">
                            <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-primary next-step-button\">
                                <i class=\"bi bi-house\"></i> Retour à l'accueil
                            </a>
                            <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_orders");
        yield "\" class=\"btn btn-secondary next-step-button\">
                                <i class=\"bi bi-list-check\"></i> Voir mes commandes
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "checkout/payment_success.html.twig";
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
        return array (  195 => 84,  189 => 81,  178 => 73,  174 => 72,  170 => 71,  164 => 68,  160 => 67,  156 => 66,  150 => 63,  144 => 60,  127 => 46,  123 => 45,  115 => 39,  108 => 38,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "checkout/payment_success.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/checkout/payment_success.html.twig");
    }
}
