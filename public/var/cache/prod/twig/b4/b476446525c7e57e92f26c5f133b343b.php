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

/* checkout/index.html.twig */
class __TwigTemplate_e1b4c508c45c4515440f3234e4d872c9 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        yield "Paiement - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["site_name"] ?? null), "html", null, true);
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
        yield "    <h1 class=\"mb-4\">Finaliser votre commande</h1>

    <div class=\"row\">
        <div class=\"col-lg-7 mb-4 mb-lg-0\">
            ";
        // line 11
        yield "            <div class=\"card mb-4\">
                <div class=\"card-header bg-light\">
                    <h5 class=\"mb-0\">Informations de commande</h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 16
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["checkout_form"] ?? null), 'form_start');
        yield "
                    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["checkout_form"] ?? null), 'errors');
        yield "
                    ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["checkout_form"] ?? null), "_token", [], "any", false, false, false, 18), 'widget');
        yield "
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["checkout_form"] ?? null), "lastName", [], "any", false, false, false, 21), 'row');
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["checkout_form"] ?? null), "firstName", [], "any", false, false, false, 24), 'row');
        yield "
                        </div>
                        <div class=\"col-12\">
                            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["checkout_form"] ?? null), "city", [], "any", false, false, false, 27), 'row');
        yield "
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-group\">
                                ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["checkout_form"] ?? null), "phone", [], "any", false, false, false, 31), 'label');
        yield "
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\">+229</span>
                                    ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["checkout_form"] ?? null), "phone", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control", "id" => "phone", "placeholder" => "XXXXXXXXXX", "data-phone-pattern" => "+229", "maxlength" => "10", "pattern" => "[0-9]*", "inputmode" => "numeric", "onkeypress" => "return event.charCode >= 48 && event.charCode <= 57"]]);
        yield "
                                </div>
                                ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["checkout_form"] ?? null), "phone", [], "any", false, false, false, 36), 'errors');
        yield "
                                <small class=\"form-text text-muted\">Format attendu: +229 suivi de 10 chiffres</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 45
        yield "            <div class=\"card\">
                <div class=\"card-header bg-light\">
                    <h5 class=\"mb-0\">Méthode de paiement</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"payment-methods\">
                        <div class=\"form-check mb-3\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"payment_method\" id=\"paymentFedaPay\" value=\"FedaPay\" checked>
                            <label class=\"form-check-label\" for=\"paymentFedaPay\">
                                <i class=\"fas fa-credit-card me-2\"></i>
                                FedaPay (Mobile Money, Carte bancaire, etc.)
                            </label>
                        </div>
                        <input type=\"hidden\" name=\"selected_payment_method\" id=\"selectedPaymentMethod\" value=\"FedaPay\">

                        <div class=\"payment-info mb-4\">
                            <div class=\"alert alert-info\">
                                <i class=\"fas fa-info-circle me-2\"></i>
                                Vous pourrez procéder au paiement sécurisé après avoir validé votre commande.
                            </div>
                        </div>
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary btn-lg w-100 mt-3\">
                        Confirmer la commande
                    </button>
                    ";
        // line 71
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["checkout_form"] ?? null), 'form_end', ["render_rest" => false]);
        yield "

                    <div class=\"payment-security mt-4\">
                        <div class=\"d-flex align-items-center justify-content-center\">
                            <i class=\"fas fa-lock me-2\"></i>
                            <span class=\"small\">Paiement 100% sécurisé</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-lg-5\">
            ";
        // line 85
        yield "            <div class=\"card sticky-top\" style=\"top: 20px;\">
                <div class=\"card-header bg-light\">
                    <h5 class=\"mb-0\">Récapitulatif de commande</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"order-items mb-4\">
                        ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["cart_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 92
            yield "                            <div class=\"order-item d-flex justify-content-between align-items-center mb-3\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"order-item-image me-3\">
                                        ";
            // line 95
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 95), "imageFilename", [], "any", false, false, false, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 96
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 96), "imageFilename", [], "any", false, false, false, 96)), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 96), "name", [], "any", false, false, false, 96), "html", null, true);
                yield "\" class=\"img-fluid\" width=\"60\">
                                        ";
            } else {
                // line 98
                yield "                                            <div class=\"product-placeholder-img d-flex align-items-center justify-content-center bg-light rounded\" style=\"width: 60px; height: 60px;\">
                                                <i class=\"fas fa-tshirt text-secondary\"></i>
                                            </div>
                                        ";
            }
            // line 102
            yield "                                    </div>
                                    <div>
                                        <h6 class=\"mb-0\">";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 104), "name", [], "any", false, false, false, 104), "html", null, true);
            yield "</h6>
                                        <div class=\"small text-muted\">
                                            ";
            // line 106
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 106)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Taille: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 106), "html", null, true);
            }
            // line 107
            yield "                                            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 107)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 107)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " - ";
                }
                yield "Couleur: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 107), "html", null, true);
            }
            // line 108
            yield "                                        </div>
                                        <div class=\"small text-muted\">
                                            Quantité: ";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 110), "html", null, true);
            yield "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"fw-bold\">
                                    ";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 115), "price", [], "any", false, false, false, 115) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 115))), "html", null, true);
            yield "
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        yield "                    </div>

                    <hr>

                    <div class=\"order-total\">
                        <div class=\"d-flex justify-content-between mb-2\">
                            <span>Sous-total</span>
                            <span>";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa(($context["total"] ?? null)), "html", null, true);
        yield "</span>
                        </div>
                        <div class=\"d-flex justify-content-between mb-2\">
                            <span>Livraison</span>
                            <span>À vos charges</span>
                        </div>
                        <hr>
                        <div class=\"d-flex justify-content-between mb-0\">
                            <span class=\"fw-bold\">Total</span>
                            <span class=\"fw-bold fs-5\">
                                ";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa(($context["total"] ?? null)), "html", null, true);
        yield "
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        yield from [];
    }

    // line 146
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 147
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Format le numéro de téléphone
    const phoneInput = document.getElementById('phone');

    if (phoneInput) {
        // Afficher l'indicatif +229 comme préfixe visuel dans un label
        const prefixLabel = document.createElement('div');
        prefixLabel.innerHTML = '<strong>+229</strong>';
        prefixLabel.className = 'phone-prefix-label mb-1';

        // Insérer le label avant le champ
        phoneInput.parentNode.insertBefore(prefixLabel, phoneInput);

        // N'autoriser que les chiffres lors de la saisie
        phoneInput.addEventListener('input', function(e) {
            // Supprimer tout ce qui n'est pas un chiffre
            this.value = this.value.replace(/\\D/g, '');
        });
    }

    // Gestion de la méthode de paiement FedaPay
    const selectedPaymentMethodInput = document.getElementById('selectedPaymentMethod');
    // Assurer que FedaPay est sélectionné par défaut
    selectedPaymentMethodInput.value = 'FedaPay';
});
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "checkout/index.html.twig";
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
        return array (  305 => 147,  298 => 146,  284 => 136,  271 => 126,  262 => 119,  252 => 115,  244 => 110,  240 => 108,  231 => 107,  226 => 106,  221 => 104,  217 => 102,  211 => 98,  203 => 96,  201 => 95,  196 => 92,  192 => 91,  184 => 85,  168 => 71,  140 => 45,  129 => 36,  124 => 34,  118 => 31,  111 => 27,  105 => 24,  99 => 21,  93 => 18,  89 => 17,  85 => 16,  78 => 11,  72 => 6,  65 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "checkout/index.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/checkout/index.html.twig");
    }
}
