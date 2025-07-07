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

/* admin/config/index.html.twig */
class __TwigTemplate_804a52d135fd242acb217f2aa32aef50 extends Template
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
            'admin_content' => [$this, 'block_admin_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin/layout_custom.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("admin/layout_custom.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Configuration du site";
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
    .tab-content {
        min-height: 300px;
    }
    pre {
        white-space: pre-wrap;
        word-wrap: break-word;
        max-height: 400px;
        overflow-y: auto;
    }
</style>
";
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    function copyToPrivacyEditor() {
        const content = document.getElementById('privacyTemplate').textContent;
        document.getElementById('privacy_policy').value = content;
    }
    
    function copyToLegalEditor() {
        const content = document.getElementById('legalTemplate').textContent;
        document.getElementById('legal_notice').value = content;
    }
    
    function copyToTermsEditor() {
        const content = document.getElementById('termsTemplate').textContent;
        document.getElementById('terms_of_service').value = content;
    }
</script>
";
        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_admin_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        yield "<div class=\"container-fluid px-4\">
    <h1 class=\"mt-4\">Configuration du site</h1>
    <ol class=\"breadcrumb mb-4\">
        <li class=\"breadcrumb-item\"><a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        yield "\">Dashboard</a></li>
        <li class=\"breadcrumb-item active\">Configuration</li>
    </ol>

    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 49
            yield "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fermer\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "
    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 56
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fermer\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "
    <div class=\"row\">
        <div class=\"col-xl-6\">
            <div class=\"card mb-4\">
                <div class=\"card-header\">
                    <i class=\"fas fa-cogs me-1\"></i>
                    Configuration générale
                </div>
                <div class=\"card-body\">
                    <div class=\"mb-4\">
                        <h5>Mode maintenance</h5>
                        <p>
                            Lorsque le mode maintenance est activé, seuls les administrateurs peuvent accéder au site. 
                            Les autres utilisateurs voient une page de maintenance.
                        </p>
                        <div class=\"d-flex align-items-center\">
                            <div class=\"me-3\">
                                <span class=\"badge bg-";
        // line 78
        yield (((($tmp = ($context["maintenance_mode"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("success") : ("secondary"));
        yield " p-2\">
                                    ";
        // line 79
        yield (((($tmp = ($context["maintenance_mode"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Activé") : ("Désactivé"));
        yield "
                                </span>
                            </div>
                            <form method=\"post\" action=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_config_maintenance_toggle");
        yield "\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("maintenance_toggle"), "html", null, true);
        yield "\">
                                <button type=\"submit\" class=\"btn btn-";
        // line 84
        yield (((($tmp = ($context["maintenance_mode"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("danger") : ("success"));
        yield "\">
                                    ";
        // line 85
        yield (((($tmp = ($context["maintenance_mode"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
        yield " le mode maintenance
                                </button>
                            </form>
                        </div>
                        ";
        // line 89
        if ((($tmp = ($context["maintenance_mode"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 90
            yield "                        <div class=\"alert alert-warning mt-3\">
                            <i class=\"fas fa-exclamation-triangle me-2\"></i>
                            Attention: Le site est actuellement en mode maintenance. Seuls les administrateurs peuvent y accéder.
                        </div>
                        ";
        }
        // line 95
        yield "                    </div>
                    
                    <div class=\"mb-4\">
                        <h5>Email de notification</h5>
                        <p>
                            Cette adresse email recevra toutes les notifications concernant les commandes et paiements.
                        </p>
                        <form method=\"post\">
                            <input type=\"hidden\" name=\"admin_email_form\" value=\"1\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("admin_email_update"), "html", null, true);
        yield "\">
                            <div class=\"mb-3\">
                                <label for=\"admin_email\" class=\"form-label\">Adresse email de l'administrateur</label>
                                <input type=\"email\" class=\"form-control\" id=\"admin_email\" name=\"admin_email\" value=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["admin_email"] ?? null), "html", null, true);
        yield "\">
                                <small class=\"text-muted\">Ex: votre-email@gmail.com</small>
                            </div>
                            <div class=\"mb-3\">
                                <button type=\"submit\" class=\"btn btn-primary\">Mettre à jour</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-xl-6\">
            <div class=\"card mb-4\">
                <div class=\"card-header\">
                    <i class=\"fas fa-shield-alt me-1\"></i>
                    Informations légales
                </div>
                <div class=\"card-body\">
                    <p>
                        Ces informations sont importantes pour la conformité aux réglementations locales du Bénin et la protection des données.
                    </p>
                    <ul class=\"nav nav-tabs\" id=\"legalTabs\" role=\"tablist\">
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link active\" id=\"privacy-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#privacy\" type=\"button\" role=\"tab\" aria-controls=\"privacy\" aria-selected=\"true\">Politique de confidentialité</button>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" id=\"legal-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#legal\" type=\"button\" role=\"tab\" aria-controls=\"legal\" aria-selected=\"false\">Mentions légales</button>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" id=\"terms-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#terms\" type=\"button\" role=\"tab\" aria-controls=\"terms\" aria-selected=\"false\">CGV</button>
                        </li>
                    </ul>
                    <div class=\"tab-content pt-3\" id=\"legalTabsContent\">
                        <!-- Politique de confidentialité -->
                        <div class=\"tab-pane fade show active\" id=\"privacy\" role=\"tabpanel\" aria-labelledby=\"privacy-tab\">
                            <form method=\"post\">
                                <input type=\"hidden\" name=\"privacy_policy_form\" value=\"1\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("privacy_policy_update"), "html", null, true);
        yield "\">
                                <div class=\"mb-3\">
                                    <label for=\"privacy_policy\" class=\"form-label\">Texte de la politique de confidentialité</label>
                                    <textarea class=\"form-control\" id=\"privacy_policy\" name=\"privacy_policy\" rows=\"15\">";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["privacy_policy"] ?? null), "html", null, true);
        yield "</textarea>
                                    <small class=\"text-muted\">Vous pouvez utiliser des balises HTML pour la mise en forme.</small>
                                </div>
                                <div class=\"mb-3\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                                </div>
                            </form>
                        </div>
                        
                        <!-- Mentions légales -->
                        <div class=\"tab-pane fade\" id=\"legal\" role=\"tabpanel\" aria-labelledby=\"legal-tab\">
                            <form method=\"post\">
                                <input type=\"hidden\" name=\"legal_notice_form\" value=\"1\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("legal_notice_update"), "html", null, true);
        yield "\">
                                <div class=\"mb-3\">
                                    <label for=\"legal_notice\" class=\"form-label\">Texte des mentions légales</label>
                                    <textarea class=\"form-control\" id=\"legal_notice\" name=\"legal_notice\" rows=\"15\">";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["legal_notice"] ?? null), "html", null, true);
        yield "</textarea>
                                    <small class=\"text-muted\">Vous pouvez utiliser des balises HTML pour la mise en forme.</small>
                                </div>
                                <div class=\"mb-3\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                                </div>
                            </form>
                        </div>
                        
                        <!-- Conditions générales de vente -->
                        <div class=\"tab-pane fade\" id=\"terms\" role=\"tabpanel\" aria-labelledby=\"terms-tab\">
                            <form method=\"post\">
                                <input type=\"hidden\" name=\"terms_of_service_form\" value=\"1\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("terms_of_service_update"), "html", null, true);
        yield "\">
                                <div class=\"mb-3\">
                                    <label for=\"terms_of_service\" class=\"form-label\">Texte des conditions générales de vente</label>
                                    <textarea class=\"form-control\" id=\"terms_of_service\" name=\"terms_of_service\" rows=\"15\">";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["terms_of_service"] ?? null), "html", null, true);
        yield "</textarea>
                                    <small class=\"text-muted\">Vous pouvez utiliser des balises HTML pour la mise en forme.</small>
                                </div>
                                <div class=\"mb-3\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modèles de textes légaux -->
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card mb-4\">
                <div class=\"card-header\">
                    <i class=\"fas fa-info-circle me-1\"></i>
                    Modèles de textes légaux adaptés au Bénin
                </div>
                <div class=\"card-body\">
                    <div class=\"alert alert-info\">
                        <p><strong>Conseils pour les documents légaux :</strong></p>
                        <ul>
                            <li>La politique de confidentialité doit être conforme à la loi n°2017-20 du 20 avril 2018 portant code du numérique en République du Bénin</li>
                            <li>Pour les mentions légales, incluez le numéro RCCM, l'IFU, et les coordonnées complètes de l'entreprise</li>
                            <li>Les CGV doivent préciser clairement les modalités de livraison, de paiement et de retour spécifiques au marché béninois</li>
                            <li>Mentionnez l'Autorité de Protection des Données Personnelles (APDP) comme organe de contrôle</li>
                        </ul>
                        <p>Vous pouvez consulter les modèles ci-dessous et les adapter à votre activité.</p>
                    </div>
                    
                    <div class=\"accordion\" id=\"legalTemplateAccordion\">
                        <!-- Modèle de politique de confidentialité -->
                        <div class=\"accordion-item\">
                            <h2 class=\"accordion-header\" id=\"privacyTemplateHeading\">
                                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#privacyTemplateCollapse\" aria-expanded=\"false\" aria-controls=\"privacyTemplateCollapse\">
                                    Modèle de politique de confidentialité
                                </button>
                            </h2>
                            <div id=\"privacyTemplateCollapse\" class=\"accordion-collapse collapse\" aria-labelledby=\"privacyTemplateHeading\" data-bs-parent=\"#legalTemplateAccordion\">
                                <div class=\"accordion-body\">
                                    <button class=\"btn btn-sm btn-outline-primary mb-3\" onclick=\"copyToPrivacyEditor()\">Copier dans l'éditeur</button>
                                    <div class=\"border p-3 bg-light\">
<pre id=\"privacyTemplate\">
<h2>Politique de Confidentialité de SHOP BJ</h2>

<h3>1. Introduction</h3>
<p>Bienvenue sur la politique de confidentialité de SHOP BJ. Cette politique explique comment nous collectons, utilisons et protégeons vos données personnelles conformément à la loi n°2017-20 du 20 avril 2018 portant code du numérique en République du Bénin.</p>

<h3>2. Données collectées</h3>
<p>Nous collectons les informations suivantes :</p>
<ul>
  <li>Informations d'identification (nom, prénom, adresse email)</li>
  <li>Coordonnées (adresse postale, numéro de téléphone)</li>
  <li>Informations de paiement (sécurisées via nos partenaires KKiaPay et Stripe)</li>
  <li>Historique d'achats et de navigation sur notre site</li>
</ul>

<h3>3. Utilisation des données</h3>
<p>Vos données sont utilisées pour :</p>
<ul>
  <li>Traiter et livrer vos commandes</li>
  <li>Vous informer sur l'état de vos commandes</li>
  <li>Améliorer nos services et votre expérience d'achat</li>
  <li>Vous proposer des offres adaptées à vos préférences (avec votre consentement)</li>
</ul>

<h3>4. Durée de conservation</h3>
<p>Vos données sont conservées pour une durée maximale de 3 ans après votre dernière interaction avec notre site, sauf obligation légale de conservation plus longue.</p>

<h3>5. Partage des données</h3>
<p>Nous ne partageons vos données qu'avec :</p>
<ul>
  <li>Nos partenaires de livraison pour acheminer vos commandes</li>
  <li>Nos prestataires de paiement sécurisé (KKiaPay et Stripe)</li>
  <li>Les autorités compétentes en cas d'obligation légale</li>
</ul>

<h3>6. Sécurité des données</h3>
<p>Nous mettons en œuvre des mesures techniques et organisationnelles appropriées pour protéger vos données contre tout accès non autorisé, perte ou altération.</p>

<h3>7. Vos droits</h3>
<p>Conformément à la législation béninoise, vous disposez des droits suivants :</p>
<ul>
  <li>Droit d'accès à vos données personnelles</li>
  <li>Droit de rectification de vos données</li>
  <li>Droit à l'effacement (dans les limites légales)</li>
  <li>Droit à la limitation du traitement</li>
  <li>Droit d'opposition au traitement</li>
  <li>Droit à la portabilité de vos données</li>
</ul>

<h3>8. Autorité de contrôle</h3>
<p>Pour toute réclamation, vous pouvez contacter l'Autorité de Protection des Données Personnelles (APDP) du Bénin : <a href=\"https://www.apdp.bj\">www.apdp.bj</a></p>

<h3>9. Nous contacter</h3>
<p>Pour toute question relative à cette politique ou pour exercer vos droits, contactez-nous à :</p>
<p>Email : [Votre email de contact]<br>
Téléphone : [Votre numéro de téléphone]<br>
Adresse : [Votre adresse postale]</p>

<h3>10. Mise à jour</h3>
<p>Cette politique de confidentialité a été mise à jour le [date de mise à jour]. Nous nous réservons le droit de la modifier à tout moment pour refléter les évolutions légales ou de nos pratiques.</p>
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Modèle de mentions légales -->
                        <div class=\"accordion-item\">
                            <h2 class=\"accordion-header\" id=\"legalTemplateHeading\">
                                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#legalTemplateCollapse\" aria-expanded=\"false\" aria-controls=\"legalTemplateCollapse\">
                                    Modèle de mentions légales
                                </button>
                            </h2>
                            <div id=\"legalTemplateCollapse\" class=\"accordion-collapse collapse\" aria-labelledby=\"legalTemplateHeading\" data-bs-parent=\"#legalTemplateAccordion\">
                                <div class=\"accordion-body\">
                                    <button class=\"btn btn-sm btn-outline-primary mb-3\" onclick=\"copyToLegalEditor()\">Copier dans l'éditeur</button>
                                    <div class=\"border p-3 bg-light\">
<pre id=\"legalTemplate\">
<h2>Mentions Légales de SHOP BJ</h2>

<h3>1. Informations légales</h3>
<p>Le site SHOP BJ est édité par :</p>
<p>[Nom de votre entreprise]<br>
RCCM : [Votre numéro RCCM]<br>
IFU : [Votre numéro IFU]<br>
Siège social : [Adresse complète]<br>
Téléphone : [Numéro de téléphone]<br>
Email : [Email de contact]</p>

<h3>2. Direction de la publication</h3>
<p>Directeur de la publication : [Nom du responsable]</p>

<h3>3. Hébergement</h3>
<p>Le site est hébergé par [Nom de l'hébergeur], dont le siège social est situé [Adresse de l'hébergeur].</p>

<h3>4. Propriété intellectuelle</h3>
<p>L'ensemble des éléments constituant ce site (textes, graphismes, logiciels, photographies, images, vidéos, sons, plans, logos, marques, etc.) est la propriété exclusive de SHOP BJ ou de ses partenaires. Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable.</p>

<h3>5. Responsabilité</h3>
<p>SHOP BJ s'efforce d'assurer au mieux de ses possibilités l'exactitude et la mise à jour des informations diffusées sur son site. Cependant, SHOP BJ ne peut garantir l'exactitude, la précision ou l'exhaustivité des informations mises à disposition sur le site.</p>

<h3>6. Droit applicable et juridiction compétente</h3>
<p>Les présentes mentions légales sont soumises au droit béninois. En cas de litige, les tribunaux béninois seront seuls compétents.</p>

<h3>7. Médiation</h3>
<p>Conformément à la législation béninoise, SHOP BJ propose un service de médiation pour la résolution amiable des litiges. Pour toute question, contactez le service client à [email de contact].</p>
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Modèle de CGV -->
                        <div class=\"accordion-item\">
                            <h2 class=\"accordion-header\" id=\"termsTemplateHeading\">
                                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#termsTemplateCollapse\" aria-expanded=\"false\" aria-controls=\"termsTemplateCollapse\">
                                    Modèle de conditions générales de vente
                                </button>
                            </h2>
                            <div id=\"termsTemplateCollapse\" class=\"accordion-collapse collapse\" aria-labelledby=\"termsTemplateHeading\" data-bs-parent=\"#legalTemplateAccordion\">
                                <div class=\"accordion-body\">
                                    <button class=\"btn btn-sm btn-outline-primary mb-3\" onclick=\"copyToTermsEditor()\">Copier dans l'éditeur</button>
                                    <div class=\"border p-3 bg-light\">
<pre id=\"termsTemplate\">
<h2>Conditions Générales de Vente de SHOP BJ</h2>

<h3>1. Préambule</h3>
<p>Les présentes conditions générales de vente s'appliquent à toutes les ventes conclues sur le site SHOP BJ, entre [Nom de l'entreprise] et ses clients.</p>

<h3>2. Produits</h3>
<p>Les caractéristiques essentielles des produits sont présentées sur notre site. Les photographies illustrant les produits n'entrent pas dans le champ contractuel et ne sont pas exhaustives. La responsabilité de SHOP BJ ne peut être engagée si des erreurs s'y sont introduites.</p>

<h3>3. Prix</h3>
<p>Les prix sont indiqués en Francs CFA (XOF) et comprennent la TVA applicable au jour de la commande. SHOP BJ se réserve le droit de modifier ses prix à tout moment, mais les produits seront facturés sur la base des tarifs en vigueur au moment de la validation de la commande.</p>

<h3>4. Commande</h3>
<p>Pour passer commande, vous suivez les étapes suivantes :</p>
<ul>
  <li>Ajout des produits au panier</li>
  <li>Validation du contenu du panier</li>
  <li>Identification ou création de compte</li>
  <li>Choix du mode de livraison</li>
  <li>Choix du mode de paiement et validation</li>
</ul>
<p>La confirmation de commande vaut acceptation des présentes conditions de vente.</p>

<h3>5. Paiement</h3>
<p>Plusieurs moyens de paiement sont proposés :</p>
<ul>
  <li>Paiement mobile via KKiaPay (MTN Mobile Money, Moov Money, etc.)</li>
  <li>Paiement par carte bancaire via Stripe</li>
  <li>Paiement à la livraison (uniquement pour Cotonou et ses environs)</li>
</ul>
<p>Vos informations de paiement sont sécurisées et ne transitent pas par nos serveurs.</p>

<h3>6. Livraison</h3>
<p>La livraison est assurée dans toutes les grandes villes du Bénin. Les délais de livraison sont les suivants :</p>
<ul>
  <li>Cotonou et environs : 1 à 2 jours ouvrés</li>
  <li>Autres grandes villes : 2 à 4 jours ouvrés</li>
  <li>Zones rurales : 3 à 7 jours ouvrés</li>
</ul>
<p>Les frais de livraison sont calculés en fonction de la destination et du poids du colis. La livraison est gratuite à partir de [montant] FCFA d'achat.</p>

<h3>7. Droit de rétractation</h3>
<p>Conformément à la législation béninoise, vous disposez d'un délai de 7 jours à compter de la réception du produit pour exercer votre droit de rétractation sans avoir à justifier de motifs ni à payer de pénalités. Les frais de retour sont à votre charge. Le produit doit être retourné dans son état d'origine et complet.</p>

<h3>8. Garanties</h3>
<p>Tous nos produits bénéficient de la garantie légale de conformité et de la garantie contre les vices cachés. Pour toute demande relative à ces garanties, contactez notre service client.</p>

<h3>9. Responsabilité</h3>
<p>SHOP BJ ne saurait être tenu pour responsable de l'inexécution du contrat en cas de rupture de stock, indisponibilité du produit, force majeure, perturbation ou grève totale ou partielle des services postaux.</p>

<h3>10. Droit applicable et litiges</h3>
<p>Les présentes CGV sont soumises au droit béninois. En cas de litige, une solution amiable sera recherchée avant toute action judiciaire. À défaut, les tribunaux béninois seront seuls compétents.</p>

<h3>11. Service client</h3>
<p>Pour toute question relative à une commande ou aux présentes CGV, contactez notre service client :</p>
<p>Email : [Email de contact]<br>
Téléphone : [Numéro de téléphone]<br>
Horaires : [Horaires de disponibilité]</p>
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        return "admin/config/index.html.twig";
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
        return array (  341 => 180,  335 => 177,  319 => 164,  313 => 161,  297 => 148,  291 => 145,  250 => 107,  244 => 104,  233 => 95,  226 => 90,  224 => 89,  217 => 85,  213 => 84,  209 => 83,  205 => 82,  199 => 79,  195 => 78,  176 => 61,  166 => 57,  163 => 56,  159 => 55,  156 => 54,  146 => 50,  143 => 49,  139 => 48,  132 => 44,  127 => 41,  120 => 40,  97 => 21,  90 => 20,  72 => 6,  65 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/config/index.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/admin/config/index.html.twig");
    }
}
