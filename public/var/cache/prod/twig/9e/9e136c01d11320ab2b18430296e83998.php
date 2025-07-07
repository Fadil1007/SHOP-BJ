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
class __TwigTemplate_032c35808e7c4c919664ed68fa04ec57 extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
        yield " - SHOP BJ";
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
        yield "<div class=\"container my-5\">
    ";
        // line 7
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 7), "get", ["debug"], "method", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "    <div class=\"alert alert-info mb-4\">
        <h6>Informations de débogage</h6>
        <ul class=\"mb-0\">
            <li>ID Produit: ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 11), "html", null, true);
            yield "</li>
            <li>Image 1: ";
            // line 12
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename", [], "any", false, false, false, 12), "html", null, true)) : ("NON DÉFINIE"));
            yield "</li>
            <li>Image 2: ";
            // line 13
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename2", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename2", [], "any", false, false, false, 13), "html", null, true)) : ("NON DÉFINIE"));
            yield "</li>
            <li>Image 3: ";
            // line 14
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename3", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename3", [], "any", false, false, false, 14), "html", null, true)) : ("NON DÉFINIE"));
            yield "</li>
            <li>Image 4: ";
            // line 15
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename4", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename4", [], "any", false, false, false, 15), "html", null, true)) : ("NON DÉFINIE"));
            yield "</li>
            <li>Tailles: ";
            // line 16
            yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "sizes", [], "any", false, false, false, 16))) ? ("Aucune") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "sizes", [], "any", false, false, false, 16), ", "), "html", null, true)));
            yield "</li>
            <li>Couleurs: ";
            // line 17
            yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "colors", [], "any", false, false, false, 17))) ? ("Aucune") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "colors", [], "any", false, false, false, 17), ", "), "html", null, true)));
            yield "</li>
            <li>Total images: ";
            // line 18
            $context["totalImages"] = 0;
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $context["totalImages"] = (($context["totalImages"] ?? null) + 1);
            }
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename2", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $context["totalImages"] = (($context["totalImages"] ?? null) + 1);
            }
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename3", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $context["totalImages"] = (($context["totalImages"] ?? null) + 1);
            }
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename4", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $context["totalImages"] = (($context["totalImages"] ?? null) + 1);
            }
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalImages"] ?? null), "html", null, true);
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "                <li class=\"breadcrumb-item\"><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
            yield "</a></li>
            ";
        }
        // line 32
        yield "            <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 32), "html", null, true);
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
        $context["hasImages"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename", [], "any", false, false, false, 40) || CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename2", [], "any", false, false, false, 40)) || CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename3", [], "any", false, false, false, 40)) || CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename4", [], "any", false, false, false, 40));
        // line 41
        yield "
                ";
        // line 42
        if ((($tmp = ($context["hasImages"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "                    ";
            // line 44
            yield "                    ";
            $context["mainImageSrc"] = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename", [], "any", false, false, false, 44);
            // line 45
            yield "                    ";
            if (( !($context["mainImageSrc"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename2", [], "any", false, false, false, 45))) {
                // line 46
                yield "                        ";
                $context["mainImageSrc"] = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename2", [], "any", false, false, false, 46);
                // line 47
                yield "                    ";
            }
            // line 48
            yield "                    ";
            if (( !($context["mainImageSrc"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename3", [], "any", false, false, false, 48))) {
                // line 49
                yield "                        ";
                $context["mainImageSrc"] = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename3", [], "any", false, false, false, 49);
                // line 50
                yield "                    ";
            }
            // line 51
            yield "                    ";
            if (( !($context["mainImageSrc"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename4", [], "any", false, false, false, 51))) {
                // line 52
                yield "                        ";
                $context["mainImageSrc"] = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename4", [], "any", false, false, false, 52);
                // line 53
                yield "                    ";
            }
            // line 54
            yield "
                    ";
            // line 55
            if ((($tmp = ($context["mainImageSrc"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 56
                yield "                        <div class=\"main-image mb-3\">
                            <a href=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["mainImageSrc"] ?? null)), "html", null, true);
                yield "\" data-lightbox=\"product-gallery\" data-title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 57), "html", null, true);
                yield "\">
                                <img src=\"";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["mainImageSrc"] ?? null)), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 58), "html", null, true);
                yield "\" class=\"img-fluid rounded shadow main-product-image\" id=\"main-product-image\" style=\"width: 100%; height: 400px; object-fit: cover;\">
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
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename", [], "any", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $context["totalImages"] = (($context["totalImages"] ?? null) + 1);
            }
            // line 66
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename2", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $context["totalImages"] = (($context["totalImages"] ?? null) + 1);
            }
            // line 67
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename3", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $context["totalImages"] = (($context["totalImages"] ?? null) + 1);
            }
            // line 68
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename4", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $context["totalImages"] = (($context["totalImages"] ?? null) + 1);
            }
            // line 69
            yield "
                    ";
            // line 71
            yield "                    ";
            if ((($context["totalImages"] ?? null) > 1)) {
                // line 72
                yield "                        <div class=\"additional-images d-flex flex-wrap gap-2 mt-3\">
                            ";
                // line 73
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename", [], "any", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 74
                    yield "                                <div class=\"thumbnail-image\" data-image-number=\"1\">
                                    <img src=\"";
                    // line 75
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename", [], "any", false, false, false, 75)), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 75), "html", null, true);
                    yield " - Image 1\" class=\"img-fluid rounded thumbnail-clickable\" style=\"width: 80px; height: 80px; object-fit: cover; cursor: pointer; border: 3px solid ";
                    if ((($context["mainImageSrc"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename", [], "any", false, false, false, 75))) {
                        yield "#007bff";
                    } else {
                        yield "#dee2e6";
                    }
                    yield ";\" data-main-image=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename", [], "any", false, false, false, 75)), "html", null, true);
                    yield "\" title=\"Image 1\">
                                </div>
                            ";
                }
                // line 78
                yield "
                            ";
                // line 79
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename2", [], "any", false, false, false, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 80
                    yield "                                <div class=\"thumbnail-image\" data-image-number=\"2\">
                                    <img src=\"";
                    // line 81
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename2", [], "any", false, false, false, 81)), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 81), "html", null, true);
                    yield " - Image 2\" class=\"img-fluid rounded thumbnail-clickable\" style=\"width: 80px; height: 80px; object-fit: cover; cursor: pointer; border: 3px solid ";
                    if ((($context["mainImageSrc"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename2", [], "any", false, false, false, 81))) {
                        yield "#007bff";
                    } else {
                        yield "#dee2e6";
                    }
                    yield ";\" data-main-image=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename2", [], "any", false, false, false, 81)), "html", null, true);
                    yield "\" title=\"Image 2\">
                                </div>
                            ";
                }
                // line 84
                yield "
                            ";
                // line 85
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename3", [], "any", false, false, false, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 86
                    yield "                                <div class=\"thumbnail-image\" data-image-number=\"3\">
                                    <img src=\"";
                    // line 87
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename3", [], "any", false, false, false, 87)), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 87), "html", null, true);
                    yield " - Image 3\" class=\"img-fluid rounded thumbnail-clickable\" style=\"width: 80px; height: 80px; object-fit: cover; cursor: pointer; border: 3px solid ";
                    if ((($context["mainImageSrc"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename3", [], "any", false, false, false, 87))) {
                        yield "#007bff";
                    } else {
                        yield "#dee2e6";
                    }
                    yield ";\" data-main-image=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename3", [], "any", false, false, false, 87)), "html", null, true);
                    yield "\" title=\"Image 3\">
                                </div>
                            ";
                }
                // line 90
                yield "
                            ";
                // line 91
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename4", [], "any", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 92
                    yield "                                <div class=\"thumbnail-image\" data-image-number=\"4\">
                                    <img src=\"";
                    // line 93
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename4", [], "any", false, false, false, 93)), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 93), "html", null, true);
                    yield " - Image 4\" class=\"img-fluid rounded thumbnail-clickable\" style=\"width: 80px; height: 80px; object-fit: cover; cursor: pointer; border: 3px solid ";
                    if ((($context["mainImageSrc"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename4", [], "any", false, false, false, 93))) {
                        yield "#007bff";
                    } else {
                        yield "#dee2e6";
                    }
                    yield ";\" data-main-image=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename4", [], "any", false, false, false, 93)), "html", null, true);
                    yield "\" title=\"Image 4\">
                                </div>
                            ";
                }
                // line 96
                yield "                        </div>

                        <div class=\"mt-2 text-muted small text-center\">
                            Cliquez sur les miniatures pour changer l'image principale (";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalImages"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 112), "html", null, true);
        yield "</h1>

            ";
        // line 115
        yield "            <div class=\"product-price mb-4\">
                ";
        // line 116
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "onSale", [], "any", false, false, false, 116) && CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "oldPrice", [], "any", false, false, false, 116))) {
            // line 117
            yield "                    <span class=\"old-price\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "oldPrice", [], "any", false, false, false, 117)), "html", null, true);
            yield "</span>
                    <span class=\"price\">";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 118)), "html", null, true);
            yield "</span>
                    <span class=\"discount-badge\">-";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "discountPercentage", [], "any", false, false, false, 119), "html", null, true);
            yield "%</span>
                ";
        } else {
            // line 121
            yield "                    <span class=\"price\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 121)), "html", null, true);
            yield "</span>
                ";
        }
        // line 123
        yield "            </div>

            ";
        // line 126
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "shortDescription", [], "any", false, false, false, 126)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 127
            yield "                <div class=\"product-short-description mb-4\">
                    <p>";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "shortDescription", [], "any", false, false, false, 128), "html", null, true);
            yield "</p>
                </div>
            ";
        }
        // line 131
        yield "
            ";
        // line 133
        yield "            ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "sizes", [], "any", false, false, false, 133)) > 0)) {
            // line 134
            yield "                <div class=\"product-sizes mb-4\">
                    <h5 class=\"mb-2\">Tailles <span class=\"text-danger\">*</span></h5>
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Tailles disponibles\">
                        ";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "sizes", [], "any", false, false, false, 137));
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
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 142), "get", ["debug"], "method", false, false, false, 142)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 143
                yield "                    <div class=\"mt-2 text-secondary\">
                        <small>Debug - Tailles disponibles: ";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "sizes", [], "any", false, false, false, 144), ", "), "html", null, true);
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "colors", [], "any", false, false, false, 154)) > 0)) {
            // line 155
            yield "                <div class=\"product-colors mb-4\">
                    <h5 class=\"mb-2\">Couleurs <span class=\"text-danger\">*</span></h5>
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Couleurs disponibles\">
                        ";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "colors", [], "any", false, false, false, 158));
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
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 165), "get", ["debug"], "method", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 166
                yield "                    <div class=\"mt-2 text-secondary\">
                        <small>Debug - Couleurs disponibles: ";
                // line 167
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "colors", [], "any", false, false, false, 167), ", "), "html", null, true);
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
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "sizes", [], "any", false, false, false, 177)) == 0) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "colors", [], "any", false, false, false, 177)) == 0))) {
            yield "d-none";
        }
        yield "\">
                <i class=\"fas fa-info-circle me-2\"></i>
                ";
        // line 179
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "sizes", [], "any", false, false, false, 179)) > 0) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "colors", [], "any", false, false, false, 179)) > 0))) {
            // line 180
            yield "                    Veuillez sélectionner une taille et une couleur avant d'ajouter ce produit au panier.
                ";
        } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 181
($context["product"] ?? null), "sizes", [], "any", false, false, false, 181)) > 0)) {
            // line 182
            yield "                    Veuillez sélectionner une taille avant d'ajouter ce produit au panier.
                ";
        } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 183
($context["product"] ?? null), "colors", [], "any", false, false, false, 183)) > 0)) {
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stock", [], "any", false, false, false, 198), "html", null, true);
        yield "\" id=\"product-quantity\" class=\"form-control mx-2\" style=\"width: 60px;\">
                    <button class=\"btn btn-sm btn-secondary\" id=\"increase-quantity\">+</button>
                </div>

                <div class=\"d-flex mb-3\">
                    <button class=\"btn btn-primary product-add-to-cart me-2\" data-product-id=\"";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 203), "html", null, true);
        yield "\">
                        <i class=\"fas fa-shopping-cart me-2\"></i>Ajouter au panier
                    </button>
                    <button class=\"btn btn-outline-danger add-to-wishlist ";
        // line 206
        if ((($tmp = ($context["isInWishlist"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "active";
        }
        yield "\" data-product-id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 206), "html", null, true);
        yield "\" title=\"";
        yield (((($tmp = ($context["isInWishlist"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Retirer des favoris") : ("Ajouter aux favoris"));
        yield "\">
                        <i class=\"bi ";
        // line 207
        if ((($tmp = ($context["isInWishlist"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stock", [], "any", false, false, false, 214) > 10)) {
            // line 215
            yield "                    <p class=\"text-success\"><i class=\"fas fa-check-circle me-2\"></i>En stock</p>
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 216
($context["product"] ?? null), "stock", [], "any", false, false, false, 216) > 0)) {
            // line 217
            yield "                    <p class=\"text-warning\"><i class=\"fas fa-exclamation-circle me-2\"></i>Plus que ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stock", [], "any", false, false, false, 217), "html", null, true);
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
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "sku", [], "any", true, true, false, 226) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "sku", [], "any", false, false, false, 226)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "sku", [], "any", false, false, false, 226), "html", null, true)) : ("N/A"));
        yield "</li>
                    <li><strong>Catégorie:</strong> ";
        // line 227
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, true, false, 227), "name", [], "any", true, true, false, 227) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 227), "name", [], "any", false, false, false, 227)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 227), "name", [], "any", false, false, false, 227), "html", null, true)) : ("Non catégorisé"));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["reviews"] ?? null)), "html", null, true);
        yield ")</button>
                </li>
            </ul>
            <div class=\"tab-content p-4 border border-top-0\" id=\"productTabsContent\">
                <div class=\"tab-pane fade show active\" id=\"description\" role=\"tabpanel\" aria-labelledby=\"description-tab\">
                    ";
        // line 246
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 246)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 247
            yield "                        ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 247);
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["reviews"] ?? null)) > 0)) {
            // line 255
            yield "                        <div class=\"reviews-container mb-4\">
                            ";
            // line 256
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["reviews"] ?? null));
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
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") && (CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 277) == CoreExtension::getAttribute($this->env, $this->source, $context["review"], "user", [], "any", false, false, false, 277)))) {
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review_new", ["productId" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 296)]), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["similarProducts"] ?? null));
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
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["similar"], "id", [], "any", false, false, false, 315) != CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 315))) {
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
        yield from [];
    }

    // line 329
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 449
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename", [], "any", false, false, false, 525)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename", [], "any", false, false, false, 525)), "html", null, true)) : ("NON DÉFINIE"));
        yield "');
        console.log('- Image 2:', '";
        // line 526
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename2", [], "any", false, false, false, 526)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename2", [], "any", false, false, false, 526)), "html", null, true)) : ("NON DÉFINIE"));
        yield "');
        console.log('- Image 3:', '";
        // line 527
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename3", [], "any", false, false, false, 527)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename3", [], "any", false, false, false, 527)), "html", null, true)) : ("NON DÉFINIE"));
        yield "');
        console.log('- Image 4:', '";
        // line 528
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename4", [], "any", false, false, false, 528)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename4", [], "any", false, false, false, 528)), "html", null, true)) : ("NON DÉFINIE"));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 586), "html", null, true);
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
        return array (  1201 => 586,  1140 => 528,  1136 => 527,  1132 => 526,  1128 => 525,  1050 => 450,  1043 => 449,  920 => 330,  913 => 329,  908 => 449,  905 => 448,  903 => 329,  897 => 325,  888 => 321,  875 => 320,  871 => 318,  869 => 317,  866 => 316,  863 => 315,  845 => 314,  840 => 311,  832 => 304,  824 => 300,  816 => 296,  814 => 295,  810 => 293,  806 => 291,  802 => 289,  794 => 286,  784 => 279,  781 => 278,  779 => 277,  774 => 275,  769 => 273,  765 => 272,  760 => 269,  754 => 268,  750 => 266,  746 => 264,  743 => 263,  739 => 262,  734 => 260,  729 => 257,  725 => 256,  722 => 255,  720 => 254,  715 => 251,  711 => 249,  705 => 247,  703 => 246,  695 => 241,  686 => 234,  677 => 227,  673 => 226,  669 => 224,  665 => 221,  661 => 219,  655 => 217,  653 => 216,  650 => 215,  648 => 214,  645 => 213,  633 => 207,  623 => 206,  617 => 203,  609 => 198,  604 => 195,  597 => 189,  593 => 186,  589 => 184,  587 => 183,  584 => 182,  582 => 181,  579 => 180,  577 => 179,  569 => 177,  566 => 175,  559 => 170,  553 => 167,  550 => 166,  548 => 165,  545 => 164,  526 => 161,  522 => 160,  515 => 159,  498 => 158,  493 => 155,  490 => 154,  487 => 152,  480 => 147,  474 => 144,  471 => 143,  469 => 142,  466 => 141,  456 => 139,  449 => 138,  445 => 137,  440 => 134,  437 => 133,  434 => 131,  428 => 128,  425 => 127,  422 => 126,  418 => 123,  412 => 121,  407 => 119,  403 => 118,  398 => 117,  396 => 116,  393 => 115,  388 => 112,  385 => 111,  380 => 107,  374 => 103,  371 => 102,  365 => 99,  360 => 96,  344 => 93,  341 => 92,  339 => 91,  336 => 90,  320 => 87,  317 => 86,  315 => 85,  312 => 84,  296 => 81,  293 => 80,  291 => 79,  288 => 78,  272 => 75,  269 => 74,  267 => 73,  264 => 72,  261 => 71,  258 => 69,  253 => 68,  248 => 67,  243 => 66,  238 => 65,  235 => 64,  232 => 62,  223 => 58,  217 => 57,  214 => 56,  212 => 55,  209 => 54,  206 => 53,  203 => 52,  200 => 51,  197 => 50,  194 => 49,  191 => 48,  188 => 47,  185 => 46,  182 => 45,  179 => 44,  177 => 43,  175 => 42,  172 => 41,  170 => 40,  166 => 38,  157 => 32,  149 => 30,  147 => 29,  143 => 28,  139 => 27,  135 => 25,  131 => 22,  111 => 18,  107 => 17,  103 => 16,  99 => 15,  95 => 14,  91 => 13,  87 => 12,  83 => 11,  78 => 8,  76 => 7,  73 => 6,  66 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "product/show.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/product/show.html.twig");
    }
}
