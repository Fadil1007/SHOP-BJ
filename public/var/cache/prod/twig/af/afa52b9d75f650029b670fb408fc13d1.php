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

/* emails/welcome.html.twig */
class __TwigTemplate_ea209c3c9172f4a6d16df8f76cba9e48 extends Template
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
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "emails/base_email.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("emails/base_email.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Bienvenue sur SHOP BJ";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<style>
    .header {
        text-align: center;
        margin-bottom: 30px;
        border-bottom: 2px solid #f48120;
        padding-bottom: 20px;
    }
    .logo-text {
        font-size: 36px;
        font-weight: bold;
        background: linear-gradient(45deg, #f48120, #ff6b35, #f48120);
        background-size: 200% 200%;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-align: center;
        margin-bottom: 10px;
        animation: gradient 3s ease infinite;
    }
    @keyframes gradient {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
</style>
<div class=\"header\">
    <div class=\"logo-text\">SHOP BJ</div>
    <h1>Bienvenue sur SHOP BJ !</h1>
</div>
<div style=\"padding: 20px; background-color: #f8f9fa; border-radius: 8px; margin-bottom: 20px;\">
    <h2 style=\"color: #FF6B6B; margin-top: 0;\">Bienvenue ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "firstName", [], "any", false, false, false, 36), "html", null, true);
        yield " !</h2>

    <p>Nous sommes ravis de vous accueillir sur <strong>SHOP BJ</strong>, votre nouvelle destination mode en ligne !</p>

    <p>Votre compte a été créé avec succès. Vous pouvez dès maintenant explorer notre collection et profiter d'une expérience shopping exceptionnelle.</p>

    <div style=\"margin: 30px 0;\">
        <h3 style=\"color: #333;\">Voici ce que vous pouvez faire dès maintenant :</h3>
        <ul style=\"padding-left: 20px; line-height: 1.7;\">
            <li>Explorer nos <strong>dernières collections</strong> pour hommes et femmes</li>
            <li>Découvrir nos <strong>accessoires tendance</strong></li>
            <li>Profiter de nos <strong>offres exclusives</strong> pour les nouveaux membres</li>
            <li>Compléter votre <strong>profil</strong> pour une expérience personnalisée</li>
        </ul>
    </div>

    <div style=\"text-align: center; margin: 30px 0;\">
        <a href=\"https://myshopbj.com/login\" style=\"background-color: #FF6B6B; color: white; padding: 12px 28px; text-decoration: none; font-weight: bold; border-radius: 4px; display: inline-block;\">
            ACCÉDER À MON COMPTE
        </a>
    </div>

    <p>Si vous avez des questions ou besoin d'aide, n'hésitez pas à contacter notre service client.</p>

    <p style=\"margin-top: 30px;\">
        Merci pour votre confiance,<br>
        <strong>L'équipe SHOP BJ</strong>
    </p>
</div>
";
        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 68
        yield "<p style=\"font-size: 12px; color: #888;\">
    Cet email a été envoyé à ";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 69), "html", null, true);
        yield ". Vous recevez cet email car vous venez de créer un compte sur SHOP BJ.
</p>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "emails/welcome.html.twig";
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
        return array (  148 => 69,  145 => 68,  138 => 67,  103 => 36,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "emails/welcome.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/emails/welcome.html.twig");
    }
}
