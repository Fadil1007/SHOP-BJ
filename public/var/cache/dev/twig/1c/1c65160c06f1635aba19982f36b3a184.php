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

/* product/show.html.twig */
class __TwigTemplate_206c379b3f9d2fc451ea9c44e0eda7b2 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        yield " - SHOP BJ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container my-5\">
    ";
        // line 7
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "get", ["debug"], "method", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "    <div class=\"alert alert-info mb-4\">
        <h6>Informations de débogage</h6>
        <ul class=\"mb-0\">
            <li>ID Produit: ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
            yield "</li>
            <li>Image 1: ";
            // line 12
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "imageFilename", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "imageFilename", [], "any", false, false, false, 12), "html", null, true)) : ("NON DÉFINIE"));
            yield "</li>
            <li>Image 2: ";
            // line 13
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "imageFilename2", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "imageFilename2", [], "any", false, false, false, 13), "html", null, true)) : ("NON DÉFINIE"));
            yield "</li>
            <li>Image 3: ";
            // line 14
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })()), "imageFilename3", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })()), "imageFilename3", [], "any", false, false, false, 14), "html", null, true)) : ("NON DÉFINIE"));
            yield "</li>
            <li>Image 4: ";
            // line 15
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "imageFilename4", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "imageFilename4", [], "any", false, false, false, 15), "html", null, true)) : ("NON DÉFINIE"));
            yield "</li>
            <li>Tailles: ";
            // line 16
            yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "sizes", [], "any", false, false, false, 16))) ? ("Aucune") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "sizes", [], "any", false, false, false, 16), ", "), "html", null, true)));
            yield "</li>
            <li>Couleurs: ";
            // line 17
            yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "colors", [], "any", false, false, false, 17))) ? ("Aucune") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "colors", [], "any", false, false, false, 17), ", "), "html", null, true)));
            yield "</li>
            <li>Total images: ";
            // line 18
            $context["totalImages"] = 0;
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 18, $this->source); })()), "imageFilename", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $context["totalImages"] = ((isset($context["totalImages"]) || array_key_exists("totalImages", $context) ? $context["totalImages"] : (function () { throw new RuntimeError('Variable "totalImages" does not exist.', 18, $this->source); })()) + 1);
            }
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 18, $this->source); })()), "imageFilename2", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $context["totalImages"] = ((isset($context["totalImages"]) || array_key_exists("totalImages", $context) ? $context["totalImages"] : (function () { throw new RuntimeError('Variable "totalImages" does not exist.', 18, $this->source); })()) + 1);
            }
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 18, $this->source); })()), "imageFilename3", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $context["totalImages"] = ((isset($context["totalImages"]) || array_key_exists("totalImages", $context) ? $context["totalImages"] : (function () { throw new RuntimeError('Variable "totalImages" does not exist.', 18, $this->source); })()) + 1);
            }
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 18, $this->source); })()), "imageFilename4", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $context["totalImages"] = ((isset($context["totalImages"]) || array_key_exists("totalImages", $context) ? $context["totalImages"] : (function () { throw new RuntimeError('Variable "totalImages" does not exist.', 18, $this->source); })()) + 1);
            }
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalImages"]) || array_key_exists("totalImages", $context) ? $context["totalImages"] : (function () { throw new RuntimeError('Variable "totalImages" does not exist.', 18, $this->source); })()), "html", null, true);
            yield "</li>
        </ul>
    </div>
    ";
        }
        // line 22
        yield "

    ";
        // line 25
        yield "    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        yield "\">Produits</a></li>
            ";
        // line 29
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 29, $this->source); })()), "category", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "                <li class=\"breadcrumb-item\"><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 30, $this->source); })()), "category", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 30, $this->source); })()), "category", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
            yield "</a></li>
            ";
        }
        // line 32
        yield "            <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32), "html", null, true);
        yield "</li>
        </ol>
    </nav>

    <div class=\"row mb-5\">
        ";
        // line 38
        yield "        <div class=\"col-md-6\">
            <div class=\"product-image-container\">
                ";
        // line 40
        $context["hasImages"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 40, $this->source); })()), "imageFilename", [], "any", false, false, false, 40) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 40, $this->source); })()), "imageFilename2", [], "any", false, false, false, 40)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 40, $this->source); })()), "imageFilename3", [], "any", false, false, false, 40)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 40, $this->source); })()), "imageFilename4", [], "any", false, false, false, 40));
        // line 41
        yield "
                ";
        // line 42
        if ((($tmp = (isset($context["hasImages"]) || array_key_exists("hasImages", $context) ? $context["hasImages"] : (function () { throw new RuntimeError('Variable "hasImages" does not exist.', 42, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "                    ";
            // line 44
            yield "                    ";
            $context["mainImageSrc"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 44, $this->source); })()), "imageFilename", [], "any", false, false, false, 44);
            // line 45
            yield "                    ";
            if (( !(isset($context["mainImageSrc"]) || array_key_exists("mainImageSrc", $context) ? $context["mainImageSrc"] : (function () { throw new RuntimeError('Variable "mainImageSrc" does not exist.', 45, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 45, $this->source); })()), "imageFilename2", [], "any", false, false, false, 45))) {
                // line 46
                yield "                        ";
                $context["mainImageSrc"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 46, $this->source); })()), "imageFilename2", [], "any", false, false, false, 46);
                // line 47
                yield "                    ";
            }
            // line 48
            yield "                    ";
            if (( !(isset($context["mainImageSrc"]) || array_key_exists("mainImageSrc", $context) ? $context["mainImageSrc"] : (function () { throw new RuntimeError('Variable "mainImageSrc" does not exist.', 48, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 48, $this->source); })()), "imageFilename3", [], "any", false, false, false, 48))) {
                // line 49
                yield "                        ";
                $context["mainImageSrc"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 49, $this->source); })()), "imageFilename3", [], "any", false, false, false, 49);
                // line 50
                yield "                    ";
            }
            // line 51
            yield "                    ";
            if (( !(isset($context["mainImageSrc"]) || array_key_exists("mainImageSrc", $context) ? $context["mainImageSrc"] : (function () { throw new RuntimeError('Variable "mainImageSrc" does not exist.', 51, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 51, $this->source); })()), "imageFilename4", [], "any", false, false, false, 51))) {
                // line 52
                yield "                        ";
                $context["mainImageSrc"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 52, $this->source); })()), "imageFilename4", [], "any", false, false, false, 52);
                // line 53
                yield "                    ";
            }
            // line 54
            yield "
                    ";
            // line 55
            if ((($tmp = (isset($context["mainImageSrc"]) || array_key_exists("mainImageSrc", $context) ? $context["mainImageSrc"] : (function () { throw new RuntimeError('Variable "mainImageSrc" does not exist.', 55, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 56
                yield "                        <div class=\"main-image mb-3\">
                            <a href=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["mainImageSrc"]) || array_key_exists("mainImageSrc", $context) ? $context["mainImageSrc"] : (function () { throw new RuntimeError('Variable "mainImageSrc" does not exist.', 57, $this->source); })())), "html", null, true);
                yield "\" data-lightbox=\"product-gallery\" data-title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 57, $this->source); })()), "name", [], "any", false, false, false, 57), "html", null, true);
                yield "\">
                                <img src=\"";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["mainImageSrc"]) || array_key_exists("mainImageSrc", $context) ? $context["mainImageSrc"] : (function () { throw new RuntimeError('Variable "mainImageSrc" does not exist.', 58, $this->source); })())), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 58, $this->source); })()), "name", [], "any", false, false, false, 58), "html", null, true);
                yield "\" class=\"img-fluid rounded shadow main-product-image\" id=\"main-product-image\" style=\"width: 100%; max-width: 500px; height: 400px; object-fit: contain; background-color: #f8f9fa; margin: 0 auto; display: block;\">
                            </a>
                        </div>
                    ";
            }
            // line 62
            yield "
                    ";
            // line 64
            yield "                    ";
            $context["totalImages"] = 0;
            // line 65
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 65, $this->source); })()), "imageFilename", [], "any", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $context["totalImages"] = ((isset($context["totalImages"]) || array_key_exists("totalImages", $context) ? $context["totalImages"] : (function () { throw new RuntimeError('Variable "totalImages" does not exist.', 65, $this->source); })()) + 1);
            }
            // line 66
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 66, $this->source); })()), "imageFilename2", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $context["totalImages"] = ((isset($context["totalImages"]) || array_key_exists("totalImages", $context) ? $context["totalImages"] : (function () { throw new RuntimeError('Variable "totalImages" does not exist.', 66, $this->source); })()) + 1);
            }
            // line 67
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 67, $this->source); })()), "imageFilename3", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $context["totalImages"] = ((isset($context["totalImages"]) || array_key_exists("totalImages", $context) ? $context["totalImages"] : (function () { throw new RuntimeError('Variable "totalImages" does not exist.', 67, $this->source); })()) + 1);
            }
            // line 68
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 68, $this->source); })()), "imageFilename4", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $context["totalImages"] = ((isset($context["totalImages"]) || array_key_exists("totalImages", $context) ? $context["totalImages"] : (function () { throw new RuntimeError('Variable "totalImages" does not exist.', 68, $this->source); })()) + 1);
            }
            // line 69
            yield "
                    ";
            // line 71
            yield "                    ";
            if (((isset($context["totalImages"]) || array_key_exists("totalImages", $context) ? $context["totalImages"] : (function () { throw new RuntimeError('Variable "totalImages" does not exist.', 71, $this->source); })()) > 1)) {
                // line 72
                yield "                        <div class=\"additional-images d-flex flex-wrap gap-2 mt-3\">
                            ";
                // line 73
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 73, $this->source); })()), "imageFilename", [], "any", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 74
                    yield "                                <div class=\"thumbnail-image\" data-image-number=\"1\">
                                    <img src=\"";
                    // line 75
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 75, $this->source); })()), "imageFilename", [], "any", false, false, false, 75)), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 75, $this->source); })()), "name", [], "any", false, false, false, 75), "html", null, true);
                    yield " - Image 1\" class=\"img-fluid rounded thumbnail-clickable\" style=\"width: 80px; height: 80px; object-fit: cover; cursor: pointer; border: 3px solid ";
                    if (((isset($context["mainImageSrc"]) || array_key_exists("mainImageSrc", $context) ? $context["mainImageSrc"] : (function () { throw new RuntimeError('Variable "mainImageSrc" does not exist.', 75, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 75, $this->source); })()), "imageFilename", [], "any", false, false, false, 75))) {
                        yield "#007bff";
                    } else {
                        yield "#dee2e6";
                    }
                    yield ";\" data-main-image=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 75, $this->source); })()), "imageFilename", [], "any", false, false, false, 75)), "html", null, true);
                    yield "\" title=\"Image 1\">
                                </div>
                            ";
                }
                // line 78
                yield "
                            ";
                // line 79
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 79, $this->source); })()), "imageFilename2", [], "any", false, false, false, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 80
                    yield "                                <div class=\"thumbnail-image\" data-image-number=\"2\">
                                    <img src=\"";
                    // line 81
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 81, $this->source); })()), "imageFilename2", [], "any", false, false, false, 81)), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 81, $this->source); })()), "name", [], "any", false, false, false, 81), "html", null, true);
                    yield " - Image 2\" class=\"img-fluid rounded thumbnail-clickable\" style=\"width: 80px; height: 80px; object-fit: cover; cursor: pointer; border: 3px solid ";
                    if (((isset($context["mainImageSrc"]) || array_key_exists("mainImageSrc", $context) ? $context["mainImageSrc"] : (function () { throw new RuntimeError('Variable "mainImageSrc" does not exist.', 81, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 81, $this->source); })()), "imageFilename2", [], "any", false, false, false, 81))) {
                        yield "#007bff";
                    } else {
                        yield "#dee2e6";
                    }
                    yield ";\" data-main-image=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 81, $this->source); })()), "imageFilename2", [], "any", false, false, false, 81)), "html", null, true);
                    yield "\" title=\"Image 2\">
                                </div>
                            ";
                }
                // line 84
                yield "
                            ";
                // line 85
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 85, $this->source); })()), "imageFilename3", [], "any", false, false, false, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 86
                    yield "                                <div class=\"thumbnail-image\" data-image-number=\"3\">
                                    <img src=\"";
                    // line 87
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 87, $this->source); })()), "imageFilename3", [], "any", false, false, false, 87)), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 87, $this->source); })()), "name", [], "any", false, false, false, 87), "html", null, true);
                    yield " - Image 3\" class=\"img-fluid rounded thumbnail-clickable\" style=\"width: 80px; height: 80px; object-fit: cover; cursor: pointer; border: 3px solid ";
                    if (((isset($context["mainImageSrc"]) || array_key_exists("mainImageSrc", $context) ? $context["mainImageSrc"] : (function () { throw new RuntimeError('Variable "mainImageSrc" does not exist.', 87, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 87, $this->source); })()), "imageFilename3", [], "any", false, false, false, 87))) {
                        yield "#007bff";
                    } else {
                        yield "#dee2e6";
                    }
                    yield ";\" data-main-image=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 87, $this->source); })()), "imageFilename3", [], "any", false, false, false, 87)), "html", null, true);
                    yield "\" title=\"Image 3\">
                                </div>
                            ";
                }
                // line 90
                yield "
                            ";
                // line 91
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 91, $this->source); })()), "imageFilename4", [], "any", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 92
                    yield "                                <div class=\"thumbnail-image\" data-image-number=\"4\">
                                    <img src=\"";
                    // line 93
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 93, $this->source); })()), "imageFilename4", [], "any", false, false, false, 93)), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 93, $this->source); })()), "name", [], "any", false, false, false, 93), "html", null, true);
                    yield " - Image 4\" class=\"img-fluid rounded thumbnail-clickable\" style=\"width: 80px; height: 80px; object-fit: cover; cursor: pointer; border: 3px solid ";
                    if (((isset($context["mainImageSrc"]) || array_key_exists("mainImageSrc", $context) ? $context["mainImageSrc"] : (function () { throw new RuntimeError('Variable "mainImageSrc" does not exist.', 93, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 93, $this->source); })()), "imageFilename4", [], "any", false, false, false, 93))) {
                        yield "#007bff";
                    } else {
                        yield "#dee2e6";
                    }
                    yield ";\" data-main-image=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 93, $this->source); })()), "imageFilename4", [], "any", false, false, false, 93)), "html", null, true);
                    yield "\" title=\"Image 4\">
                                </div>
                            ";
                }
                // line 96
                yield "                        </div>

                        <div class=\"mt-2 text-muted small text-center\">
                            Cliquez sur les miniatures pour changer l'image principale (";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalImages"]) || array_key_exists("totalImages", $context) ? $context["totalImages"] : (function () { throw new RuntimeError('Variable "totalImages" does not exist.', 99, $this->source); })()), "html", null, true);
                yield " images disponibles)
                        </div>
                    ";
            }
            // line 102
            yield "                ";
        } else {
            // line 103
            yield "                    <div class=\"product-placeholder d-flex align-items-center justify-content-center bg-light rounded shadow\" style=\"height: 400px;\">
                        <i class=\"fas fa-image fa-4x text-secondary\"></i>
                    </div>
                ";
        }
        // line 107
        yield "            </div>
        </div>

        ";
        // line 111
        yield "        <div class=\"col-md-6\">
            <h1 class=\"mb-3\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 112, $this->source); })()), "name", [], "any", false, false, false, 112), "html", null, true);
        yield "</h1>

            ";
        // line 115
        yield "            <div class=\"product-price mb-4\">
                ";
        // line 116
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 116, $this->source); })()), "onSale", [], "any", false, false, false, 116) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 116, $this->source); })()), "oldPrice", [], "any", false, false, false, 116))) {
            // line 117
            yield "                    <span class=\"old-price\" style=\"text-decoration: line-through !important; color: #dc3545 !important; text-decoration-color: #dc3545 !important; text-decoration-thickness: 2px !important;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 117, $this->source); })()), "oldPrice", [], "any", false, false, false, 117)), "html", null, true);
            yield "</span>
                    <span class=\"price text-success fw-bold\">";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 118, $this->source); })()), "price", [], "any", false, false, false, 118)), "html", null, true);
            yield "</span>
                    <span class=\"discount-badge badge bg-danger\">-";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 119, $this->source); })()), "discountPercentage", [], "any", false, false, false, 119)), "html", null, true);
            yield "%</span>
                ";
        } else {
            // line 121
            yield "                    <span class=\"price\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 121, $this->source); })()), "price", [], "any", false, false, false, 121)), "html", null, true);
            yield "</span>
                ";
        }
        // line 123
        yield "            </div>

            ";
        // line 126
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 126, $this->source); })()), "shortDescription", [], "any", false, false, false, 126)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 127
            yield "                <div class=\"product-short-description mb-4\">
                    <p>";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 128, $this->source); })()), "shortDescription", [], "any", false, false, false, 128), "html", null, true);
            yield "</p>
                </div>
            ";
        }
        // line 131
        yield "
            ";
        // line 133
        yield "            ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 133, $this->source); })()), "sizes", [], "any", false, false, false, 133)) > 0)) {
            // line 134
            yield "                <div class=\"product-sizes mb-4\">
                    <h5 class=\"mb-2\">Tailles <span class=\"text-danger\">*</span></h5>
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Tailles disponibles\">
                        ";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 137, $this->source); })()), "sizes", [], "any", false, false, false, 137));
            foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
                // line 138
                yield "                            <input type=\"radio\" class=\"btn-check size-option\" name=\"size\" id=\"size-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["size"], "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["size"], "html", null, true);
                yield "\" autocomplete=\"off\" required>
                            <label class=\"btn btn-outline-secondary me-2\" for=\"size-";
                // line 139
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["size"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["size"], "html", null, true);
                yield "</label>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['size'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            yield "                    </div>
                    ";
            // line 142
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 142, $this->source); })()), "request", [], "any", false, false, false, 142), "get", ["debug"], "method", false, false, false, 142)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 143
                yield "                    <div class=\"mt-2 text-secondary\">
                        <small>Debug - Tailles disponibles: ";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 144, $this->source); })()), "sizes", [], "any", false, false, false, 144), ", "), "html", null, true);
                yield "</small>
                    </div>
                    ";
            }
            // line 147
            yield "                    <div class=\"invalid-feedback size-feedback d-none mt-2\">
                        Veuillez sélectionner une taille
                    </div>
                </div>
            ";
        }
        // line 152
        yield "
            ";
        // line 154
        yield "            ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 154, $this->source); })()), "colors", [], "any", false, false, false, 154)) > 0)) {
            // line 155
            yield "                <div class=\"product-colors mb-4\">
                    <h5 class=\"mb-2\">Couleurs <span class=\"text-danger\">*</span></h5>
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Couleurs disponibles\">
                        ";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 158, $this->source); })()), "colors", [], "any", false, false, false, 158));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
                // line 159
                yield "                            <input type=\"radio\" class=\"btn-check color-option\" name=\"color\" id=\"color-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 159), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["color"], "html", null, true);
                yield "\" autocomplete=\"off\" required>
                            <label class=\"btn btn-outline-secondary me-2\" for=\"color-";
                // line 160
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 160), "html", null, true);
                yield "\">
                                <span class=\"btn-color-swatch color-swatch-";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["color"], "html", null, true);
                yield "\"></span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["color"]), "html", null, true);
                yield "
                            </label>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            yield "                    </div>
                    ";
            // line 165
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 165, $this->source); })()), "request", [], "any", false, false, false, 165), "get", ["debug"], "method", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 166
                yield "                    <div class=\"mt-2 text-secondary\">
                        <small>Debug - Couleurs disponibles: ";
                // line 167
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 167, $this->source); })()), "colors", [], "any", false, false, false, 167), ", "), "html", null, true);
                yield "</small>
                    </div>
                    ";
            }
            // line 170
            yield "                    <div class=\"invalid-feedback color-feedback d-none mt-2\">
                        Veuillez sélectionner une couleur
                    </div>
                </div>
            ";
        }
        // line 175
        yield "
            ";
        // line 177
        yield "            <div class=\"options-alert alert alert-info mb-3 ";
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 177, $this->source); })()), "sizes", [], "any", false, false, false, 177)) == 0) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 177, $this->source); })()), "colors", [], "any", false, false, false, 177)) == 0))) {
            yield "d-none";
        }
        yield "\">
                <i class=\"fas fa-info-circle me-2\"></i>
                ";
        // line 179
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 179, $this->source); })()), "sizes", [], "any", false, false, false, 179)) > 0) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 179, $this->source); })()), "colors", [], "any", false, false, false, 179)) > 0))) {
            // line 180
            yield "                    Veuillez sélectionner une taille et une couleur avant d'ajouter ce produit au panier.
                ";
        } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 181
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 181, $this->source); })()), "sizes", [], "any", false, false, false, 181)) > 0)) {
            // line 182
            yield "                    Veuillez sélectionner une taille avant d'ajouter ce produit au panier.
                ";
        } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 183
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 183, $this->source); })()), "colors", [], "any", false, false, false, 183)) > 0)) {
            // line 184
            yield "                    Veuillez sélectionner une couleur avant d'ajouter ce produit au panier.
                ";
        }
        // line 186
        yield "            </div>

            ";
        // line 189
        yield "            <div id=\"options-error\" class=\"alert alert-danger mb-3 d-none\">
                <i class=\"fas fa-exclamation-circle me-2\"></i>
                <span id=\"error-message\">Veuillez sélectionner toutes les options requises avant d'ajouter au panier.</span>
            </div>

            ";
        // line 195
        yield "            <div class=\"d-flex align-items-center mb-4\">
                <div class=\"quantity-selector me-3\">
                    <button class=\"btn btn-sm btn-secondary\" id=\"decrease-quantity\">-</button>
                    <input type=\"number\" value=\"1\" min=\"1\" max=\"";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 198, $this->source); })()), "stock", [], "any", false, false, false, 198), "html", null, true);
        yield "\" id=\"product-quantity\" class=\"form-control mx-2\" style=\"width: 60px;\">
                    <button class=\"btn btn-sm btn-secondary\" id=\"increase-quantity\">+</button>
                </div>

                <div class=\"d-flex mb-3\">
                    <button class=\"btn btn-primary product-add-to-cart me-2\" data-product-id=\"";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 203, $this->source); })()), "id", [], "any", false, false, false, 203), "html", null, true);
        yield "\">
                        <i class=\"fas fa-shopping-cart me-2\"></i>Ajouter au panier
                    </button>
                    <button class=\"btn btn-outline-danger add-to-wishlist ";
        // line 206
        if ((($tmp = (isset($context["isInWishlist"]) || array_key_exists("isInWishlist", $context) ? $context["isInWishlist"] : (function () { throw new RuntimeError('Variable "isInWishlist" does not exist.', 206, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "active";
        }
        yield "\" data-product-id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 206, $this->source); })()), "id", [], "any", false, false, false, 206), "html", null, true);
        yield "\" title=\"";
        yield (((($tmp = (isset($context["isInWishlist"]) || array_key_exists("isInWishlist", $context) ? $context["isInWishlist"] : (function () { throw new RuntimeError('Variable "isInWishlist" does not exist.', 206, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Retirer des favoris") : ("Ajouter aux favoris"));
        yield "\">
                        <i class=\"bi ";
        // line 207
        if ((($tmp = (isset($context["isInWishlist"]) || array_key_exists("isInWishlist", $context) ? $context["isInWishlist"] : (function () { throw new RuntimeError('Variable "isInWishlist" does not exist.', 207, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "bi-heart-fill";
        } else {
            yield "bi-heart";
        }
        yield "\"></i>
                    </button>
                </div>
            </div>

            ";
        // line 213
        yield "            <div class=\"product-availability mb-4\">
                ";
        // line 214
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 214, $this->source); })()), "stock", [], "any", false, false, false, 214) > 10)) {
            // line 215
            yield "                    <p class=\"text-success\"><i class=\"fas fa-check-circle me-2\"></i>En stock</p>
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 216
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 216, $this->source); })()), "stock", [], "any", false, false, false, 216) > 0)) {
            // line 217
            yield "                    <p class=\"text-warning\"><i class=\"fas fa-exclamation-circle me-2\"></i>Plus que ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 217, $this->source); })()), "stock", [], "any", false, false, false, 217), "html", null, true);
            yield " en stock</p>
                ";
        } else {
            // line 219
            yield "                    <p class=\"text-danger\"><i class=\"fas fa-times-circle me-2\"></i>Rupture de stock</p>
                ";
        }
        // line 221
        yield "            </div>

            ";
        // line 224
        yield "            <div class=\"product-details mb-4\">
                <ul class=\"list-unstyled\">
                    <li><strong>Référence:</strong> ";
        // line 226
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "sku", [], "any", true, true, false, 226) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 226, $this->source); })()), "sku", [], "any", false, false, false, 226)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 226, $this->source); })()), "sku", [], "any", false, false, false, 226), "html", null, true)) : ("N/A"));
        yield "</li>
                    <li><strong>Catégorie:</strong> ";
        // line 227
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, true, false, 227), "name", [], "any", true, true, false, 227) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 227, $this->source); })()), "category", [], "any", false, false, false, 227), "name", [], "any", false, false, false, 227)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 227, $this->source); })()), "category", [], "any", false, false, false, 227), "name", [], "any", false, false, false, 227), "html", null, true)) : ("Non catégorisé"));
        yield "</li>
                </ul>
            </div>
        </div>
    </div>

    ";
        // line 234
        yield "    <div class=\"row mb-5\">
        <div class=\"col-12\">
            <ul class=\"nav nav-tabs\" id=\"productTabs\" role=\"tablist\">
                <li class=\"nav-item\" role=\"presentation\">
                    <button class=\"nav-link active\" id=\"description-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#description\" type=\"button\" role=\"tab\" aria-controls=\"description\" aria-selected=\"true\">Description</button>
                </li>
                <li class=\"nav-item\" role=\"presentation\">
                    <button class=\"nav-link\" id=\"reviews-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#reviews\" type=\"button\" role=\"tab\" aria-controls=\"reviews\" aria-selected=\"false\">Avis (";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 241, $this->source); })())), "html", null, true);
        yield ")</button>
                </li>
            </ul>
            <div class=\"tab-content p-4 border border-top-0\" id=\"productTabsContent\">
                <div class=\"tab-pane fade show active\" id=\"description\" role=\"tabpanel\" aria-labelledby=\"description-tab\">
                    ";
        // line 246
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 246, $this->source); })()), "description", [], "any", false, false, false, 246)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 247
            yield "                        ";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 247, $this->source); })()), "description", [], "any", false, false, false, 247);
            yield "
                    ";
        } else {
            // line 249
            yield "                        <p>Aucune description disponible pour ce produit.</p>
                    ";
        }
        // line 251
        yield "                </div>

                <div class=\"tab-pane fade\" id=\"reviews\" role=\"tabpanel\" aria-labelledby=\"reviews-tab\">
                    ";
        // line 254
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 254, $this->source); })())) > 0)) {
            // line 255
            yield "                        <div class=\"reviews-container mb-4\">
                            ";
            // line 256
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 256, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 257
                yield "                                <div class=\"review-item card mb-3\">
                                    <div class=\"card-body\">
                                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                                            <h5 class=\"card-title mb-0\">";
                // line 260
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "title", [], "any", false, false, false, 260), "html", null, true);
                yield "</h5>
                                            <div class=\"review-rating\">
                                                ";
                // line 262
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 263
                    yield "                                                    ";
                    if (($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 263))) {
                        // line 264
                        yield "                                                        <i class=\"fas fa-star text-warning\"></i>
                                                    ";
                    } else {
                        // line 266
                        yield "                                                        <i class=\"far fa-star text-warning\"></i>
                                                    ";
                    }
                    // line 268
                    yield "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 269
                yield "                                            </div>
                                        </div>
                                        <h6 class=\"card-subtitle mb-2 text-muted\">
                                            Par ";
                // line 272
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["review"], "user", [], "any", false, false, false, 272), "firstname", [], "any", false, false, false, 272) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["review"], "user", [], "any", false, false, false, 272), "lastname", [], "any", false, false, false, 272)), "html", null, true);
                yield " 
                                            le ";
                // line 273
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "createdAt", [], "any", false, false, false, 273), "d/m/Y"), "html", null, true);
                yield "
                                        </h6>
                                        <p class=\"card-text\">";
                // line 275
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "comment", [], "any", false, false, false, 275), "html", null, true);
                yield "</p>

                                        ";
                // line 277
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 277, $this->source); })()), "user", [], "any", false, false, false, 277) == CoreExtension::getAttribute($this->env, $this->source, $context["review"], "user", [], "any", false, false, false, 277)))) {
                    // line 278
                    yield "                                            <div class=\"d-flex justify-content-end\">
                                                <a href=\"";
                    // line 279
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 279)]), "html", null, true);
                    yield "\" 
                                                   class=\"btn btn-sm btn-outline-danger\" 
                                                   onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet avis ?')\">
                                                    <i class=\"fas fa-trash-alt me-1\"></i> Supprimer
                                                </a>
                                            </div>
                                        ";
                }
                // line 286
                yield "                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['review'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            yield "                        </div>
                    ";
        } else {
            // line 291
            yield "                        <p class=\"text-center py-3\">Aucun avis pour ce produit.</p>
                    ";
        }
        // line 293
        yield "
                    <div class=\"review-actions mt-4\">
                        ";
        // line 295
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 296
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review_new", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 296, $this->source); })()), "id", [], "any", false, false, false, 296)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary\">
                                <i class=\"fas fa-pen me-1\"></i> Écrire un avis
                            </a>
                        ";
        } else {
            // line 300
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-outline-primary\">
                                <i class=\"fas fa-sign-in-alt me-1\"></i> Connectez-vous pour écrire un avis
                            </a>
                        ";
        }
        // line 304
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 311
        yield "    <section class=\"mb-5\">
        <h2 class=\"text-center mb-4\">VOUS POURRIEZ AUSSI AIMER</h2>
        <div class=\"row\">
            ";
        // line 314
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["similarProducts"]) || array_key_exists("similarProducts", $context) ? $context["similarProducts"] : (function () { throw new RuntimeError('Variable "similarProducts" does not exist.', 314, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["similar"]) {
            // line 315
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["similar"], "id", [], "any", false, false, false, 315) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 315, $this->source); })()), "id", [], "any", false, false, false, 315))) {
                // line 316
                yield "                    <div class=\"col-md-3 mb-4\">
                        ";
                // line 317
                yield from $this->load("components/product_card.html.twig", 317)->unwrap()->yield(CoreExtension::merge($context, ["product" => $context["similar"]]));
                // line 318
                yield "                    </div>
                ";
            }
            // line 320
            yield "            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 321
            yield "                <div class=\"col-12 text-center\">
                    <p>Aucun produit similaire disponible.</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['similar'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 325
        yield "        </div>
    </section>
</div>

";
        // line 329
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 448
        yield "
";
        // line 449
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 329
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 330
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
/* Styles pour la galerie d'images */
.product-image-container img:hover {
    opacity: 0.9;
}

/* Image principale avec transition fluide */
.main-product-image {
    transition: opacity 0.3s ease, transform 0.2s ease;
}

.main-product-image:hover {
    transform: scale(1.02);
}

/* Styles pour les miniatures */
.thumbnail-clickable {
    transition: all 0.3s ease;
    cursor: pointer;
}

.thumbnail-clickable:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    opacity: 0.8;
}

.additional-images {
    min-height: 80px;
}

.thumbnail-image {
    position: relative;
}

.thumbnail-image::after {
    content: attr(data-image-number);
    position: absolute;
    top: 2px;
    right: 2px;
    background: rgba(0,0,0,0.7);
    color: white;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    font-weight: bold;
}

/* Style pour le modal d'image plein écran */
.modal-fullscreen-image .modal-body {
    padding: 0;
    background-color: rgba(0, 0, 0, 0.9);
}

.modal-fullscreen-image .modal-content {
    background-color: transparent;
    border: none;
}

.modal-fullscreen-image img {
    max-width: 100%;
    max-height: 90vh;
    margin: 0 auto;
    display: block;
}

/* Styles pour lightbox */
.lightbox-overlay {
    display: none;
    position: fixed;
    z-index: 1050;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.9);
    overflow: auto;
}

.lightbox-content {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
}

.lightbox-image {
    max-width: 90%;
    max-height: 90vh;
}

.lightbox-close {
    position: absolute;
    top: 20px;
    right: 30px;
    color: white;
    font-size: 40px;
    font-weight: bold;
    cursor: pointer;
    z-index: 1055;
}

.lightbox-title {
    position: absolute;
    bottom: 20px;
    width: 100%;
    text-align: center;
    color: white;
    background-color: rgba(0, 0, 0, 0.5);
    padding: 10px 0;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 449
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 450
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
// Script pour la galerie d'images produit - version isolée
(function() {
    'use strict';

    // Attendre que le DOM soit complètement chargé
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initProductGallery);
    } else {
        initProductGallery();
    }

    function initProductGallery() {
        console.log('=== INITIALISATION GALERIE PRODUIT ===');

        // ===== GALERIE D'IMAGES =====
        const mainImage = document.getElementById('main-product-image');
        const thumbnailImages = document.querySelectorAll('.thumbnail-clickable');

        console.log('Image principale trouvée:', !!mainImage);
        console.log('Nombre de miniatures trouvées:', thumbnailImages.length);

        // Gestion des clics sur les miniatures
        thumbnailImages.forEach((thumb, index) => {
            console.log(`Miniature \${index + 1}:`, {
                src: thumb.src,
                dataMainImage: thumb.getAttribute('data-main-image'),
                title: thumb.title
            });

            thumb.addEventListener('click', function(e) {
                e.preventDefault();
                const newImageSrc = this.getAttribute('data-main-image');

                console.log('=== CLIC SUR MINIATURE ===');
                console.log('Nouvelle image source:', newImageSrc);

                if (mainImage && newImageSrc) {
                    // Mettre à jour l'image principale avec animation
                    mainImage.style.opacity = '0.5';

                    setTimeout(() => {
                        mainImage.src = newImageSrc;
                        mainImage.alt = this.alt;
                        mainImage.style.opacity = '1';

                        // Mettre à jour le lien du lightbox si présent
                        const lightboxLink = mainImage.parentElement;
                        if (lightboxLink && lightboxLink.tagName === 'A') {
                            lightboxLink.href = newImageSrc;
                            lightboxLink.setAttribute('data-title', this.alt);
                        }

                        // Mettre à jour les bordures - toutes en gris sauf celle cliquée
                        thumbnailImages.forEach(t => {
                            t.style.border = '3px solid #dee2e6';
                        });
                        this.style.border = '3px solid #007bff';

                        console.log('✓ Image principale mise à jour vers:', newImageSrc);
                        console.log('✓ Bordure active mise à jour pour:', this.title);
                    }, 150);
                } else {
                    console.error('❌ Erreur: Image principale ou source manquante');
                }
            });
        });

        // ===== GESTION DU PANIER (version simplifiée) =====
        initProductCart();

        // ===== DEBUG FINAL =====
        console.log('=== INFORMATIONS PRODUIT ===');
        console.log('Images disponibles:');
        console.log('- Image 1:', '";
        // line 525
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 525, $this->source); })()), "imageFilename", [], "any", false, false, false, 525)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 525, $this->source); })()), "imageFilename", [], "any", false, false, false, 525)), "html", null, true)) : ("NON DÉFINIE"));
        yield "');
        console.log('- Image 2:', '";
        // line 526
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 526, $this->source); })()), "imageFilename2", [], "any", false, false, false, 526)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 526, $this->source); })()), "imageFilename2", [], "any", false, false, false, 526)), "html", null, true)) : ("NON DÉFINIE"));
        yield "');
        console.log('- Image 3:', '";
        // line 527
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 527, $this->source); })()), "imageFilename3", [], "any", false, false, false, 527)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 527, $this->source); })()), "imageFilename3", [], "any", false, false, false, 527)), "html", null, true)) : ("NON DÉFINIE"));
        yield "');
        console.log('- Image 4:', '";
        // line 528
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 528, $this->source); })()), "imageFilename4", [], "any", false, false, false, 528)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 528, $this->source); })()), "imageFilename4", [], "any", false, false, false, 528)), "html", null, true)) : ("NON DÉFINIE"));
        yield "');
        console.log('✓ Galerie d\\'images initialisée');
    }

    function initProductCart() {
        const quantityInput = document.getElementById('product-quantity');
        const decreaseBtn = document.getElementById('decrease-quantity');
        const increaseBtn = document.getElementById('increase-quantity');
        const addToCartBtn = document.querySelector('.product-add-to-cart');
        const sizeOptions = document.querySelectorAll('.size-option');
        const colorOptions = document.querySelectorAll('.color-option');

        // Variables locales pour les sélections
        let localSelectedSize = null;
        let localSelectedColor = null;

        // Gestion de la quantité
        if (decreaseBtn) {
            decreaseBtn.addEventListener('click', function() {
                let value = parseInt(quantityInput.value);
                if (value > 1) {
                    quantityInput.value = value - 1;
                }
            });
        }

        if (increaseBtn) {
            increaseBtn.addEventListener('click', function() {
                let value = parseInt(quantityInput.value);
                let max = parseInt(quantityInput.getAttribute('max'));
                if (value < max) {
                    quantityInput.value = value + 1;
                }
            });
        }

        // Gestion des sélections de taille
        sizeOptions.forEach(option => {
            option.addEventListener('change', function(e) {
                localSelectedSize = e.target.value;
                console.log('Taille sélectionnée:', localSelectedSize);
            });
        });

        // Gestion des sélections de couleur
        colorOptions.forEach(option => {
            option.addEventListener('change', function(e) {
                localSelectedColor = e.target.value;
                console.log('Couleur sélectionnée:', localSelectedColor);
            });
        });

        // Gestion ajout au panier
        if (addToCartBtn) {
            addToCartBtn.addEventListener('click', function(e) {
                e.preventDefault();

                const quantity = parseInt(quantityInput.value) || 1;
                const productId = ";
        // line 586
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 586, $this->source); })()), "id", [], "any", false, false, false, 586), "html", null, true);
        yield ";

                // Utiliser la fonction globale addToCart si elle existe
                if (typeof window.addToCart === 'function') {
                    window.addToCart(productId, quantity, localSelectedSize, localSelectedColor);
                } else {
                    console.log('Fonction addToCart non trouvée, ajout direct...');
                    // Fallback simple
                    alert('Produit ajouté au panier !');
                }
            });
        }

        // Gestion wishlist
        const wishlistBtn = document.querySelector('.add-to-wishlist');
        if (wishlistBtn) {
            wishlistBtn.addEventListener('click', function(e) {
                e.preventDefault();
                const productId = this.getAttribute('data-product-id');
                console.log('Ajout à la wishlist:', productId);
            });
        }
    }
})();
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "product/show.html.twig";
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
        return array (  1228 => 586,  1167 => 528,  1163 => 527,  1159 => 526,  1155 => 525,  1077 => 450,  1067 => 449,  941 => 330,  931 => 329,  923 => 449,  920 => 448,  918 => 329,  912 => 325,  903 => 321,  890 => 320,  886 => 318,  884 => 317,  881 => 316,  878 => 315,  860 => 314,  855 => 311,  847 => 304,  839 => 300,  831 => 296,  829 => 295,  825 => 293,  821 => 291,  817 => 289,  809 => 286,  799 => 279,  796 => 278,  794 => 277,  789 => 275,  784 => 273,  780 => 272,  775 => 269,  769 => 268,  765 => 266,  761 => 264,  758 => 263,  754 => 262,  749 => 260,  744 => 257,  740 => 256,  737 => 255,  735 => 254,  730 => 251,  726 => 249,  720 => 247,  718 => 246,  710 => 241,  701 => 234,  692 => 227,  688 => 226,  684 => 224,  680 => 221,  676 => 219,  670 => 217,  668 => 216,  665 => 215,  663 => 214,  660 => 213,  648 => 207,  638 => 206,  632 => 203,  624 => 198,  619 => 195,  612 => 189,  608 => 186,  604 => 184,  602 => 183,  599 => 182,  597 => 181,  594 => 180,  592 => 179,  584 => 177,  581 => 175,  574 => 170,  568 => 167,  565 => 166,  563 => 165,  560 => 164,  541 => 161,  537 => 160,  530 => 159,  513 => 158,  508 => 155,  505 => 154,  502 => 152,  495 => 147,  489 => 144,  486 => 143,  484 => 142,  481 => 141,  471 => 139,  464 => 138,  460 => 137,  455 => 134,  452 => 133,  449 => 131,  443 => 128,  440 => 127,  437 => 126,  433 => 123,  427 => 121,  422 => 119,  418 => 118,  413 => 117,  411 => 116,  408 => 115,  403 => 112,  400 => 111,  395 => 107,  389 => 103,  386 => 102,  380 => 99,  375 => 96,  359 => 93,  356 => 92,  354 => 91,  351 => 90,  335 => 87,  332 => 86,  330 => 85,  327 => 84,  311 => 81,  308 => 80,  306 => 79,  303 => 78,  287 => 75,  284 => 74,  282 => 73,  279 => 72,  276 => 71,  273 => 69,  268 => 68,  263 => 67,  258 => 66,  253 => 65,  250 => 64,  247 => 62,  238 => 58,  232 => 57,  229 => 56,  227 => 55,  224 => 54,  221 => 53,  218 => 52,  215 => 51,  212 => 50,  209 => 49,  206 => 48,  203 => 47,  200 => 46,  197 => 45,  194 => 44,  192 => 43,  190 => 42,  187 => 41,  185 => 40,  181 => 38,  172 => 32,  164 => 30,  162 => 29,  158 => 28,  154 => 27,  150 => 25,  146 => 22,  126 => 18,  122 => 17,  118 => 16,  114 => 15,  110 => 14,  106 => 13,  102 => 12,  98 => 11,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ product.name }} - SHOP BJ{% endblock %}

{% block body %}
<div class=\"container my-5\">
    {% if app.request.get('debug') %}
    <div class=\"alert alert-info mb-4\">
        <h6>Informations de débogage</h6>
        <ul class=\"mb-0\">
            <li>ID Produit: {{ product.id }}</li>
            <li>Image 1: {{ product.imageFilename ? product.imageFilename : 'NON DÉFINIE' }}</li>
            <li>Image 2: {{ product.imageFilename2 ? product.imageFilename2 : 'NON DÉFINIE' }}</li>
            <li>Image 3: {{ product.imageFilename3 ? product.imageFilename3 : 'NON DÉFINIE' }}</li>
            <li>Image 4: {{ product.imageFilename4 ? product.imageFilename4 : 'NON DÉFINIE' }}</li>
            <li>Tailles: {{ product.sizes is empty ? 'Aucune' : product.sizes|join(', ') }}</li>
            <li>Couleurs: {{ product.colors is empty ? 'Aucune' : product.colors|join(', ') }}</li>
            <li>Total images: {% set totalImages = 0 %}{% if product.imageFilename %}{% set totalImages = totalImages + 1 %}{% endif %}{% if product.imageFilename2 %}{% set totalImages = totalImages + 1 %}{% endif %}{% if product.imageFilename3 %}{% set totalImages = totalImages + 1 %}{% endif %}{% if product.imageFilename4 %}{% set totalImages = totalImages + 1 %}{% endif %}{{ totalImages }}</li>
        </ul>
    </div>
    {% endif %}


    {# Fil d'Ariane #}
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
            <li class=\"breadcrumb-item\"><a href=\"{{ path('product_index') }}\">Produits</a></li>
            {% if product.category %}
                <li class=\"breadcrumb-item\"><a href=\"{{ path('category_show', {'id': product.category.id}) }}\">{{ product.category.name }}</a></li>
            {% endif %}
            <li class=\"breadcrumb-item active\" aria-current=\"page\">{{ product.name }}</li>
        </ol>
    </nav>

    <div class=\"row mb-5\">
        {# Image du Produit #}
        <div class=\"col-md-6\">
            <div class=\"product-image-container\">
                {% set hasImages = product.imageFilename or product.imageFilename2 or product.imageFilename3 or product.imageFilename4 %}

                {% if hasImages %}
                    {# Image principale - afficher la première image disponible #}
                    {% set mainImageSrc = product.imageFilename %}
                    {% if not mainImageSrc and product.imageFilename2 %}
                        {% set mainImageSrc = product.imageFilename2 %}
                    {% endif %}
                    {% if not mainImageSrc and product.imageFilename3 %}
                        {% set mainImageSrc = product.imageFilename3 %}
                    {% endif %}
                    {% if not mainImageSrc and product.imageFilename4 %}
                        {% set mainImageSrc = product.imageFilename4 %}
                    {% endif %}

                    {% if mainImageSrc %}
                        <div class=\"main-image mb-3\">
                            <a href=\"{{ asset(mainImageSrc) }}\" data-lightbox=\"product-gallery\" data-title=\"{{ product.name }}\">
                                <img src=\"{{ asset(mainImageSrc) }}\" alt=\"{{ product.name }}\" class=\"img-fluid rounded shadow main-product-image\" id=\"main-product-image\" style=\"width: 100%; max-width: 500px; height: 400px; object-fit: contain; background-color: #f8f9fa; margin: 0 auto; display: block;\">
                            </a>
                        </div>
                    {% endif %}

                    {# Compteur pour vérifier le nombre total d'images #}
                    {% set totalImages = 0 %}
                    {% if product.imageFilename %}{% set totalImages = totalImages + 1 %}{% endif %}
                    {% if product.imageFilename2 %}{% set totalImages = totalImages + 1 %}{% endif %}
                    {% if product.imageFilename3 %}{% set totalImages = totalImages + 1 %}{% endif %}
                    {% if product.imageFilename4 %}{% set totalImages = totalImages + 1 %}{% endif %}

                    {# Afficher les miniatures seulement s'il y a plus d'une image #}
                    {% if totalImages > 1 %}
                        <div class=\"additional-images d-flex flex-wrap gap-2 mt-3\">
                            {% if product.imageFilename %}
                                <div class=\"thumbnail-image\" data-image-number=\"1\">
                                    <img src=\"{{ asset(product.imageFilename) }}\" alt=\"{{ product.name }} - Image 1\" class=\"img-fluid rounded thumbnail-clickable\" style=\"width: 80px; height: 80px; object-fit: cover; cursor: pointer; border: 3px solid {% if mainImageSrc == product.imageFilename %}#007bff{% else %}#dee2e6{% endif %};\" data-main-image=\"{{ asset(product.imageFilename) }}\" title=\"Image 1\">
                                </div>
                            {% endif %}

                            {% if product.imageFilename2 %}
                                <div class=\"thumbnail-image\" data-image-number=\"2\">
                                    <img src=\"{{ asset(product.imageFilename2) }}\" alt=\"{{ product.name }} - Image 2\" class=\"img-fluid rounded thumbnail-clickable\" style=\"width: 80px; height: 80px; object-fit: cover; cursor: pointer; border: 3px solid {% if mainImageSrc == product.imageFilename2 %}#007bff{% else %}#dee2e6{% endif %};\" data-main-image=\"{{ asset(product.imageFilename2) }}\" title=\"Image 2\">
                                </div>
                            {% endif %}

                            {% if product.imageFilename3 %}
                                <div class=\"thumbnail-image\" data-image-number=\"3\">
                                    <img src=\"{{ asset(product.imageFilename3) }}\" alt=\"{{ product.name }} - Image 3\" class=\"img-fluid rounded thumbnail-clickable\" style=\"width: 80px; height: 80px; object-fit: cover; cursor: pointer; border: 3px solid {% if mainImageSrc == product.imageFilename3 %}#007bff{% else %}#dee2e6{% endif %};\" data-main-image=\"{{ asset(product.imageFilename3) }}\" title=\"Image 3\">
                                </div>
                            {% endif %}

                            {% if product.imageFilename4 %}
                                <div class=\"thumbnail-image\" data-image-number=\"4\">
                                    <img src=\"{{ asset(product.imageFilename4) }}\" alt=\"{{ product.name }} - Image 4\" class=\"img-fluid rounded thumbnail-clickable\" style=\"width: 80px; height: 80px; object-fit: cover; cursor: pointer; border: 3px solid {% if mainImageSrc == product.imageFilename4 %}#007bff{% else %}#dee2e6{% endif %};\" data-main-image=\"{{ asset(product.imageFilename4) }}\" title=\"Image 4\">
                                </div>
                            {% endif %}
                        </div>

                        <div class=\"mt-2 text-muted small text-center\">
                            Cliquez sur les miniatures pour changer l'image principale ({{ totalImages }} images disponibles)
                        </div>
                    {% endif %}
                {% else %}
                    <div class=\"product-placeholder d-flex align-items-center justify-content-center bg-light rounded shadow\" style=\"height: 400px;\">
                        <i class=\"fas fa-image fa-4x text-secondary\"></i>
                    </div>
                {% endif %}
            </div>
        </div>

        {# Détails du Produit #}
        <div class=\"col-md-6\">
            <h1 class=\"mb-3\">{{ product.name }}</h1>

            {# Prix en FCFA #}
            <div class=\"product-price mb-4\">
                {% if product.onSale and product.oldPrice %}
                    <span class=\"old-price\" style=\"text-decoration: line-through !important; color: #dc3545 !important; text-decoration-color: #dc3545 !important; text-decoration-thickness: 2px !important;\">{{ product.oldPrice|format_fcfa }}</span>
                    <span class=\"price text-success fw-bold\">{{ product.price|format_fcfa }}</span>
                    <span class=\"discount-badge badge bg-danger\">-{{ product.discountPercentage|round }}%</span>
                {% else %}
                    <span class=\"price\">{{ product.price|format_fcfa }}</span>
                {% endif %}
            </div>

            {# Description Courte #}
            {% if product.shortDescription %}
                <div class=\"product-short-description mb-4\">
                    <p>{{ product.shortDescription }}</p>
                </div>
            {% endif %}

            {# Tailles #}
            {% if product.sizes|length > 0 %}
                <div class=\"product-sizes mb-4\">
                    <h5 class=\"mb-2\">Tailles <span class=\"text-danger\">*</span></h5>
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Tailles disponibles\">
                        {% for size in product.sizes %}
                            <input type=\"radio\" class=\"btn-check size-option\" name=\"size\" id=\"size-{{ size }}\" value=\"{{ size }}\" autocomplete=\"off\" required>
                            <label class=\"btn btn-outline-secondary me-2\" for=\"size-{{ size }}\">{{ size }}</label>
                        {% endfor %}
                    </div>
                    {% if app.request.get('debug') %}
                    <div class=\"mt-2 text-secondary\">
                        <small>Debug - Tailles disponibles: {{ product.sizes|join(', ') }}</small>
                    </div>
                    {% endif %}
                    <div class=\"invalid-feedback size-feedback d-none mt-2\">
                        Veuillez sélectionner une taille
                    </div>
                </div>
            {% endif %}

            {# Couleurs #}
            {% if product.colors|length > 0 %}
                <div class=\"product-colors mb-4\">
                    <h5 class=\"mb-2\">Couleurs <span class=\"text-danger\">*</span></h5>
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Couleurs disponibles\">
                        {% for color in product.colors %}
                            <input type=\"radio\" class=\"btn-check color-option\" name=\"color\" id=\"color-{{ loop.index }}\" value=\"{{ color }}\" autocomplete=\"off\" required>
                            <label class=\"btn btn-outline-secondary me-2\" for=\"color-{{ loop.index }}\">
                                <span class=\"btn-color-swatch color-swatch-{{ color }}\"></span>{{ color|capitalize }}
                            </label>
                        {% endfor %}
                    </div>
                    {% if app.request.get('debug') %}
                    <div class=\"mt-2 text-secondary\">
                        <small>Debug - Couleurs disponibles: {{ product.colors|join(', ') }}</small>
                    </div>
                    {% endif %}
                    <div class=\"invalid-feedback color-feedback d-none mt-2\">
                        Veuillez sélectionner une couleur
                    </div>
                </div>
            {% endif %}

            {# Message d'alerte pour options requises #}
            <div class=\"options-alert alert alert-info mb-3 {% if product.sizes|length == 0 and product.colors|length == 0 %}d-none{% endif %}\">
                <i class=\"fas fa-info-circle me-2\"></i>
                {% if product.sizes|length > 0 and product.colors|length > 0 %}
                    Veuillez sélectionner une taille et une couleur avant d'ajouter ce produit au panier.
                {% elseif product.sizes|length > 0 %}
                    Veuillez sélectionner une taille avant d'ajouter ce produit au panier.
                {% elseif product.colors|length > 0 %}
                    Veuillez sélectionner une couleur avant d'ajouter ce produit au panier.
                {% endif %}
            </div>

            {# Notification d'erreur pour la validation #}
            <div id=\"options-error\" class=\"alert alert-danger mb-3 d-none\">
                <i class=\"fas fa-exclamation-circle me-2\"></i>
                <span id=\"error-message\">Veuillez sélectionner toutes les options requises avant d'ajouter au panier.</span>
            </div>

            {# Quantité et Bouton d'Ajout au Panier #}
            <div class=\"d-flex align-items-center mb-4\">
                <div class=\"quantity-selector me-3\">
                    <button class=\"btn btn-sm btn-secondary\" id=\"decrease-quantity\">-</button>
                    <input type=\"number\" value=\"1\" min=\"1\" max=\"{{ product.stock }}\" id=\"product-quantity\" class=\"form-control mx-2\" style=\"width: 60px;\">
                    <button class=\"btn btn-sm btn-secondary\" id=\"increase-quantity\">+</button>
                </div>

                <div class=\"d-flex mb-3\">
                    <button class=\"btn btn-primary product-add-to-cart me-2\" data-product-id=\"{{ product.id }}\">
                        <i class=\"fas fa-shopping-cart me-2\"></i>Ajouter au panier
                    </button>
                    <button class=\"btn btn-outline-danger add-to-wishlist {% if isInWishlist %}active{% endif %}\" data-product-id=\"{{ product.id }}\" title=\"{{ isInWishlist ? 'Retirer des favoris' : 'Ajouter aux favoris' }}\">
                        <i class=\"bi {% if isInWishlist %}bi-heart-fill{% else %}bi-heart{% endif %}\"></i>
                    </button>
                </div>
            </div>

            {# Disponibilité #}
            <div class=\"product-availability mb-4\">
                {% if product.stock > 10 %}
                    <p class=\"text-success\"><i class=\"fas fa-check-circle me-2\"></i>En stock</p>
                {% elseif product.stock > 0 %}
                    <p class=\"text-warning\"><i class=\"fas fa-exclamation-circle me-2\"></i>Plus que {{ product.stock }} en stock</p>
                {% else %}
                    <p class=\"text-danger\"><i class=\"fas fa-times-circle me-2\"></i>Rupture de stock</p>
                {% endif %}
            </div>

            {# Détails Supplémentaires #}
            <div class=\"product-details mb-4\">
                <ul class=\"list-unstyled\">
                    <li><strong>Référence:</strong> {{ product.sku ?? 'N/A' }}</li>
                    <li><strong>Catégorie:</strong> {{ product.category.name ?? 'Non catégorisé' }}</li>
                </ul>
            </div>
        </div>
    </div>

    {# Onglets: Description, etc. #}
    <div class=\"row mb-5\">
        <div class=\"col-12\">
            <ul class=\"nav nav-tabs\" id=\"productTabs\" role=\"tablist\">
                <li class=\"nav-item\" role=\"presentation\">
                    <button class=\"nav-link active\" id=\"description-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#description\" type=\"button\" role=\"tab\" aria-controls=\"description\" aria-selected=\"true\">Description</button>
                </li>
                <li class=\"nav-item\" role=\"presentation\">
                    <button class=\"nav-link\" id=\"reviews-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#reviews\" type=\"button\" role=\"tab\" aria-controls=\"reviews\" aria-selected=\"false\">Avis ({{ reviews|length }})</button>
                </li>
            </ul>
            <div class=\"tab-content p-4 border border-top-0\" id=\"productTabsContent\">
                <div class=\"tab-pane fade show active\" id=\"description\" role=\"tabpanel\" aria-labelledby=\"description-tab\">
                    {% if product.description %}
                        {{ product.description|raw }}
                    {% else %}
                        <p>Aucune description disponible pour ce produit.</p>
                    {% endif %}
                </div>

                <div class=\"tab-pane fade\" id=\"reviews\" role=\"tabpanel\" aria-labelledby=\"reviews-tab\">
                    {% if reviews|length > 0 %}
                        <div class=\"reviews-container mb-4\">
                            {% for review in reviews %}
                                <div class=\"review-item card mb-3\">
                                    <div class=\"card-body\">
                                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                                            <h5 class=\"card-title mb-0\">{{ review.title }}</h5>
                                            <div class=\"review-rating\">
                                                {% for i in 1..5 %}
                                                    {% if i <= review.rating %}
                                                        <i class=\"fas fa-star text-warning\"></i>
                                                    {% else %}
                                                        <i class=\"far fa-star text-warning\"></i>
                                                    {% endif %}
                                                {% endfor %}
                                            </div>
                                        </div>
                                        <h6 class=\"card-subtitle mb-2 text-muted\">
                                            Par {{ review.user.firstname ~ ' ' ~ review.user.lastname }} 
                                            le {{ review.createdAt|date('d/m/Y') }}
                                        </h6>
                                        <p class=\"card-text\">{{ review.comment }}</p>

                                        {% if is_granted('ROLE_USER') and app.user == review.user %}
                                            <div class=\"d-flex justify-content-end\">
                                                <a href=\"{{ path('app_review_delete', {'id': review.id}) }}\" 
                                                   class=\"btn btn-sm btn-outline-danger\" 
                                                   onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet avis ?')\">
                                                    <i class=\"fas fa-trash-alt me-1\"></i> Supprimer
                                                </a>
                                            </div>
                                        {% endif %}
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                    {% else %}
                        <p class=\"text-center py-3\">Aucun avis pour ce produit.</p>
                    {% endif %}

                    <div class=\"review-actions mt-4\">
                        {% if is_granted('ROLE_USER') %}
                            <a href=\"{{ path('app_review_new', {'productId': product.id}) }}\" class=\"btn btn-outline-primary\">
                                <i class=\"fas fa-pen me-1\"></i> Écrire un avis
                            </a>
                        {% else %}
                            <a href=\"{{ path('app_login') }}\" class=\"btn btn-outline-primary\">
                                <i class=\"fas fa-sign-in-alt me-1\"></i> Connectez-vous pour écrire un avis
                            </a>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {# Produits Similaires #}
    <section class=\"mb-5\">
        <h2 class=\"text-center mb-4\">VOUS POURRIEZ AUSSI AIMER</h2>
        <div class=\"row\">
            {% for similar in similarProducts %}
                {% if similar.id != product.id %}
                    <div class=\"col-md-3 mb-4\">
                        {% include 'components/product_card.html.twig' with {'product': similar} %}
                    </div>
                {% endif %}
            {% else %}
                <div class=\"col-12 text-center\">
                    <p>Aucun produit similaire disponible.</p>
                </div>
            {% endfor %}
        </div>
    </section>
</div>

{% block stylesheets %}
{{ parent() }}
<style>
/* Styles pour la galerie d'images */
.product-image-container img:hover {
    opacity: 0.9;
}

/* Image principale avec transition fluide */
.main-product-image {
    transition: opacity 0.3s ease, transform 0.2s ease;
}

.main-product-image:hover {
    transform: scale(1.02);
}

/* Styles pour les miniatures */
.thumbnail-clickable {
    transition: all 0.3s ease;
    cursor: pointer;
}

.thumbnail-clickable:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    opacity: 0.8;
}

.additional-images {
    min-height: 80px;
}

.thumbnail-image {
    position: relative;
}

.thumbnail-image::after {
    content: attr(data-image-number);
    position: absolute;
    top: 2px;
    right: 2px;
    background: rgba(0,0,0,0.7);
    color: white;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    font-weight: bold;
}

/* Style pour le modal d'image plein écran */
.modal-fullscreen-image .modal-body {
    padding: 0;
    background-color: rgba(0, 0, 0, 0.9);
}

.modal-fullscreen-image .modal-content {
    background-color: transparent;
    border: none;
}

.modal-fullscreen-image img {
    max-width: 100%;
    max-height: 90vh;
    margin: 0 auto;
    display: block;
}

/* Styles pour lightbox */
.lightbox-overlay {
    display: none;
    position: fixed;
    z-index: 1050;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.9);
    overflow: auto;
}

.lightbox-content {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
}

.lightbox-image {
    max-width: 90%;
    max-height: 90vh;
}

.lightbox-close {
    position: absolute;
    top: 20px;
    right: 30px;
    color: white;
    font-size: 40px;
    font-weight: bold;
    cursor: pointer;
    z-index: 1055;
}

.lightbox-title {
    position: absolute;
    bottom: 20px;
    width: 100%;
    text-align: center;
    color: white;
    background-color: rgba(0, 0, 0, 0.5);
    padding: 10px 0;
}
</style>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
// Script pour la galerie d'images produit - version isolée
(function() {
    'use strict';

    // Attendre que le DOM soit complètement chargé
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initProductGallery);
    } else {
        initProductGallery();
    }

    function initProductGallery() {
        console.log('=== INITIALISATION GALERIE PRODUIT ===');

        // ===== GALERIE D'IMAGES =====
        const mainImage = document.getElementById('main-product-image');
        const thumbnailImages = document.querySelectorAll('.thumbnail-clickable');

        console.log('Image principale trouvée:', !!mainImage);
        console.log('Nombre de miniatures trouvées:', thumbnailImages.length);

        // Gestion des clics sur les miniatures
        thumbnailImages.forEach((thumb, index) => {
            console.log(`Miniature \${index + 1}:`, {
                src: thumb.src,
                dataMainImage: thumb.getAttribute('data-main-image'),
                title: thumb.title
            });

            thumb.addEventListener('click', function(e) {
                e.preventDefault();
                const newImageSrc = this.getAttribute('data-main-image');

                console.log('=== CLIC SUR MINIATURE ===');
                console.log('Nouvelle image source:', newImageSrc);

                if (mainImage && newImageSrc) {
                    // Mettre à jour l'image principale avec animation
                    mainImage.style.opacity = '0.5';

                    setTimeout(() => {
                        mainImage.src = newImageSrc;
                        mainImage.alt = this.alt;
                        mainImage.style.opacity = '1';

                        // Mettre à jour le lien du lightbox si présent
                        const lightboxLink = mainImage.parentElement;
                        if (lightboxLink && lightboxLink.tagName === 'A') {
                            lightboxLink.href = newImageSrc;
                            lightboxLink.setAttribute('data-title', this.alt);
                        }

                        // Mettre à jour les bordures - toutes en gris sauf celle cliquée
                        thumbnailImages.forEach(t => {
                            t.style.border = '3px solid #dee2e6';
                        });
                        this.style.border = '3px solid #007bff';

                        console.log('✓ Image principale mise à jour vers:', newImageSrc);
                        console.log('✓ Bordure active mise à jour pour:', this.title);
                    }, 150);
                } else {
                    console.error('❌ Erreur: Image principale ou source manquante');
                }
            });
        });

        // ===== GESTION DU PANIER (version simplifiée) =====
        initProductCart();

        // ===== DEBUG FINAL =====
        console.log('=== INFORMATIONS PRODUIT ===');
        console.log('Images disponibles:');
        console.log('- Image 1:', '{{ product.imageFilename ? asset(product.imageFilename) : \"NON DÉFINIE\" }}');
        console.log('- Image 2:', '{{ product.imageFilename2 ? asset(product.imageFilename2) : \"NON DÉFINIE\" }}');
        console.log('- Image 3:', '{{ product.imageFilename3 ? asset(product.imageFilename3) : \"NON DÉFINIE\" }}');
        console.log('- Image 4:', '{{ product.imageFilename4 ? asset(product.imageFilename4) : \"NON DÉFINIE\" }}');
        console.log('✓ Galerie d\\'images initialisée');
    }

    function initProductCart() {
        const quantityInput = document.getElementById('product-quantity');
        const decreaseBtn = document.getElementById('decrease-quantity');
        const increaseBtn = document.getElementById('increase-quantity');
        const addToCartBtn = document.querySelector('.product-add-to-cart');
        const sizeOptions = document.querySelectorAll('.size-option');
        const colorOptions = document.querySelectorAll('.color-option');

        // Variables locales pour les sélections
        let localSelectedSize = null;
        let localSelectedColor = null;

        // Gestion de la quantité
        if (decreaseBtn) {
            decreaseBtn.addEventListener('click', function() {
                let value = parseInt(quantityInput.value);
                if (value > 1) {
                    quantityInput.value = value - 1;
                }
            });
        }

        if (increaseBtn) {
            increaseBtn.addEventListener('click', function() {
                let value = parseInt(quantityInput.value);
                let max = parseInt(quantityInput.getAttribute('max'));
                if (value < max) {
                    quantityInput.value = value + 1;
                }
            });
        }

        // Gestion des sélections de taille
        sizeOptions.forEach(option => {
            option.addEventListener('change', function(e) {
                localSelectedSize = e.target.value;
                console.log('Taille sélectionnée:', localSelectedSize);
            });
        });

        // Gestion des sélections de couleur
        colorOptions.forEach(option => {
            option.addEventListener('change', function(e) {
                localSelectedColor = e.target.value;
                console.log('Couleur sélectionnée:', localSelectedColor);
            });
        });

        // Gestion ajout au panier
        if (addToCartBtn) {
            addToCartBtn.addEventListener('click', function(e) {
                e.preventDefault();

                const quantity = parseInt(quantityInput.value) || 1;
                const productId = {{ product.id }};

                // Utiliser la fonction globale addToCart si elle existe
                if (typeof window.addToCart === 'function') {
                    window.addToCart(productId, quantity, localSelectedSize, localSelectedColor);
                } else {
                    console.log('Fonction addToCart non trouvée, ajout direct...');
                    // Fallback simple
                    alert('Produit ajouté au panier !');
                }
            });
        }

        // Gestion wishlist
        const wishlistBtn = document.querySelector('.add-to-wishlist');
        if (wishlistBtn) {
            wishlistBtn.addEventListener('click', function(e) {
                e.preventDefault();
                const productId = this.getAttribute('data-product-id');
                console.log('Ajout à la wishlist:', productId);
            });
        }
    }
})();
</script>
{% endblock %}
{% endblock %}", "product/show.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/product/show.html.twig");
    }
}
