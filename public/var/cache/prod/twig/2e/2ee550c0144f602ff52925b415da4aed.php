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

/* category/list.html.twig */
class __TwigTemplate_7c729e71e18426250f612102dc76860b extends Template
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

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Nos Catégories - SHOP BJ";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "<div class=\"container my-5\">
    ";
        // line 9
        yield "    <nav aria-label=\"breadcrumb\" class=\"mb-4\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Catégories</li>
        </ol>
    </nav>
    
    <h1 class=\"text-center mb-5\">Toutes nos catégories</h1>
    
    <div class=\"row\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 20
            yield "            <div class=\"col-md-4 mb-4\">
                <div class=\"card category-card h-100\">
                    ";
            // line 22
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "imageFilename", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 23
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                yield "\">
                            <div class=\"category-image-container\">
                                <img src=\"";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "imageFilename", [], "any", false, false, false, 25), "html", null, true);
                yield "\" class=\"card-img-top\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 25), "html", null, true);
                yield "\" style=\"cursor: pointer;\">
                            </div>
                        </a>
                    ";
            } else {
                // line 29
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                yield "\">
                            <div class=\"card-img-top d-flex align-items-center justify-content-center bg-light\" style=\"height: 200px; cursor: pointer;\">
                                <span class=\"text-center p-3 h4\">";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 31), "html", null, true);
                yield "</span>
                            </div>
                        </a>
                    ";
            }
            // line 35
            yield "                    <div class=\"card-body text-center\">
                        <h3 class=\"card-title\">";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 36), "html", null, true);
            yield "</h3>
                        ";
            // line 37
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 38
                yield "                            <p class=\"card-text\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 38), 0, 100) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 38)) > 100)) ? ("...") : (""))), "html", null, true);
                yield "</p>
                        ";
            }
            // line 40
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            yield "\" class=\"btn btn-primary mt-2\">Explorer</a>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 44
        if (!$context['_iterated']) {
            // line 45
            yield "            <div class=\"col-12 text-center\">
                <p>Aucune catégorie trouvée.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "    </div>
</div>

<style>
    .category-card {
        transition: all 0.3s;
        border-radius: 8px;
        overflow: hidden;
    }
    
    .category-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .category-image-container {
        height: 200px;
        overflow: hidden;
    }
    
    .category-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .category-card:hover img {
        transform: scale(1.05);
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
        return "category/list.html.twig";
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
        return array (  163 => 49,  154 => 45,  152 => 44,  142 => 40,  136 => 38,  134 => 37,  130 => 36,  127 => 35,  120 => 31,  114 => 29,  105 => 25,  99 => 23,  97 => 22,  93 => 20,  88 => 19,  77 => 11,  73 => 9,  70 => 7,  63 => 6,  52 => 4,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "category/list.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/category/list.html.twig");
    }
}
