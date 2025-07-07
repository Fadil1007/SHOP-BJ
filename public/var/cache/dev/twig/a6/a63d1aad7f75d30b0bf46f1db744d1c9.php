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

/* home/index.html.twig */
class __TwigTemplate_fc307c3ed961bb597b15275c87cca441 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        yield "Accueil - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["site_name"] ?? null), "html", null, true);
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/carousel.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/cart.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/quick-add-cart.js"), "html", null, true);
        yield "\"></script>
";
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield "<style>
    .category-image-container {
        height: 150px;
        overflow: hidden;
    }

    .category-image-container img {
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

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        yield "<!-- Hero Banner with Carousel -->
<div class=\"hero-banner mb-5\">
    <div class=\"container py-5\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-6 mb-4 mb-md-0\">
                <h1 class=\"display-4 fw-bold mb-3\">ShopBJ</h1>
                <p class=\"lead mb-4\">L'essentiel du shopping au Bénin en un seul endroit</p>
                <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        yield "\" class=\"btn btn-primary btn-lg\">Découvrir maintenant</a>
            </div>
            <div class=\"col-md-6\">
                <!-- Carousel -->
                <div id=\"heroCarousel\" class=\"carousel slide carousel-fade shadow-lg rounded\" data-bs-ride=\"carousel\">
                    <!-- Indicators -->
                    <div class=\"carousel-indicators\">
                        ";
        // line 48
        if ((array_key_exists("carouselSlides", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["carouselSlides"] ?? null)))) {
            // line 49
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["carouselSlides"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 50
                yield "                                <button type=\"button\" data-bs-target=\"#heroCarousel\" data-bs-slide-to=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 50), "html", null, true);
                yield "\" 
                                        ";
                // line 51
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "class=\"active\" aria-current=\"true\"";
                }
                yield " 
                                        aria-label=\"Slide ";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 52), "html", null, true);
                yield "\"></button>
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
            unset($context['_seq'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            yield "                        ";
        } else {
            // line 55
            yield "                            <!-- Indicateurs par défaut si aucun slide personnalisé n'est disponible -->
                            <button type=\"button\" data-bs-target=\"#heroCarousel\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                            <button type=\"button\" data-bs-target=\"#heroCarousel\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
                            <button type=\"button\" data-bs-target=\"#heroCarousel\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
                            <button type=\"button\" data-bs-target=\"#heroCarousel\" data-bs-slide-to=\"3\" aria-label=\"Slide 4\"></button>
                        ";
        }
        // line 61
        yield "                    </div>

                    <!-- Slides -->
                    <div class=\"carousel-inner rounded\">
                        ";
        // line 65
        if ((array_key_exists("carouselSlides", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["carouselSlides"] ?? null)))) {
            // line 66
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["carouselSlides"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 67
                yield "                                <div class=\"carousel-item ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "active";
                }
                yield "\">
                                    <img src=\"";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "imageFilename", [], "any", false, false, false, 68)), "html", null, true);
                yield "\" class=\"d-block w-100\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "title", [], "any", false, false, false, 68), "html", null, true);
                yield "\" style=\"height: 400px; object-fit: cover;\">
                                    <div class=\"carousel-caption d-none d-md-block\">
                                        <h5 class=\"bg-dark bg-opacity-50 p-2 rounded\">";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "title", [], "any", false, false, false, 70), "html", null, true);
                yield "</h5>
                                        ";
                // line 71
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "subtitle", [], "any", false, false, false, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 72
                    yield "                                            <p class=\"bg-dark bg-opacity-50 p-2 rounded\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "subtitle", [], "any", false, false, false, 72), "html", null, true);
                    yield "</p>
                                        ";
                }
                // line 74
                yield "                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "buttonText", [], "any", false, false, false, 74) && CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "buttonLink", [], "any", false, false, false, 74))) {
                    // line 75
                    yield "                                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "buttonLink", [], "any", false, false, false, 75), "html", null, true);
                    yield "\" class=\"btn btn-primary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "buttonText", [], "any", false, false, false, 75), "html", null, true);
                    yield "</a>
                                        ";
                }
                // line 77
                yield "                                    </div>
                                </div>
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
            unset($context['_seq'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            yield "                        ";
        } else {
            // line 81
            yield "                            <!-- Slides par défaut si aucun slide personnalisé n'est disponible -->
                            <div class=\"carousel-item active\">
                                <img src=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/banners/carousel-1.jpg"), "html", null, true);
            yield "\" class=\"d-block w-100\" alt=\"Collection Femmes\" style=\"height: 400px; object-fit: cover;\">
                                <div class=\"carousel-caption d-none d-md-block\">
                                    <h5 class=\"bg-dark bg-opacity-50 p-2 rounded\">Collection Femmes</h5>
                                </div>
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/banners/carousel-2.jpg"), "html", null, true);
            yield "\" class=\"d-block w-100\" alt=\"Collection Hommes\" style=\"height: 400px; object-fit: cover;\">
                                <div class=\"carousel-caption d-none d-md-block\">
                                    <h5 class=\"bg-dark bg-opacity-50 p-2 rounded\">Collection Hommes</h5>
                                </div>
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/banners/carousel-4.jpg"), "html", null, true);
            yield "\" class=\"d-block w-100\" alt=\"Collection Urbaine\" style=\"height: 400px; object-fit: cover;\">
                                <div class=\"carousel-caption d-none d-md-block\">
                                    <h5 class=\"bg-dark bg-opacity-50 p-2 rounded\">Style Urbain</h5>
                                </div>
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/banners/carousel-5.jpg"), "html", null, true);
            yield "\" class=\"d-block w-100\" alt=\"Accessoires\" style=\"height: 400px; object-fit: cover;\">
                                <div class=\"carousel-caption d-none d-md-block\">
                                    <h5 class=\"bg-dark bg-opacity-50 p-2 rounded\">Accessoires</h5>
                                </div>
                            </div>
                        ";
        }
        // line 107
        yield "                    </div>

                    <!-- Controls -->
                    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#heroCarousel\" data-bs-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">Précédent</span>
                    </button>
                    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#heroCarousel\" data-bs-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">Suivant</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Featured Categories -->
<section class=\"mb-5\">
    <div class=\"container\">
        <h2 class=\"text-center mb-4\">Nos Catégories</h2>

        <!-- Catégories principales -->
        <div class=\"row\">
            ";
        // line 131
        if ((array_key_exists("featuredCategories", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["featuredCategories"] ?? null)))) {
            // line 132
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["featuredCategories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 133
                yield "                    <div class=\"col-lg-3 col-md-4 col-6 mb-4\">
                        <a href=\"";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 134)]), "html", null, true);
                yield "\" class=\"text-decoration-none\">
                            <div class=\"card category-card text-center h-100\">
                                ";
                // line 136
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "imageFilename", [], "any", false, false, false, 136)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 137
                    yield "                                    <div class=\"category-image-container\">
                                        <img src=\"";
                    // line 138
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "imageFilename", [], "any", false, false, false, 138), "html", null, true);
                    yield "\" class=\"card-img-top\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 138), "html", null, true);
                    yield "\">
                                    </div>
                                ";
                } else {
                    // line 141
                    yield "                                    <div class=\"card-img-top d-flex align-items-center justify-content-center bg-light\" style=\"height: 150px;\">
                                        <i class=\"fas fa-";
                    // line 142
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "icon", [], "any", true, true, false, 142)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "icon", [], "any", false, false, false, 142), "tshirt")) : ("tshirt")), "html", null, true);
                    yield " fa-3x text-primary\"></i>
                                    </div>
                                ";
                }
                // line 145
                yield "                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 146), "html", null, true);
                yield "</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            yield "            ";
        }
        // line 153
        yield "
            <!-- Bouton Toutes les catégories (affiché même s'il n'y a pas de otherCategories) -->
            <div class=\"col-lg-3 col-md-4 col-6 mb-4\">
                <a href=\"";
        // line 156
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_list");
        yield "\" class=\"text-decoration-none\">
                    <div class=\"card category-card text-center h-100 border-primary\">
                        <div class=\"card-body\">
                            <i class=\"fas fa-ellipsis-h fa-3x mb-3 text-primary\"></i>
                            <h5 class=\"card-title\">Toutes les catégories</h5>
                        </div>
                    </div>
                </a>
            </div>

            ";
        // line 166
        if (( !array_key_exists("featuredCategories", $context) || Twig\Extension\CoreExtension::testEmpty(($context["featuredCategories"] ?? null)))) {
            // line 167
            yield "                <div class=\"col-12 text-center\">
                    <p class=\"text-muted\">Aucune catégorie disponible pour le moment.</p>
                </div>
            ";
        }
        // line 171
        yield "        </div>
    </div>
</section>

<!-- Featured Products -->
<section class=\"mb-5 bg-light py-5\">
    <div class=\"container\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h2>Produits à la Une</h2>
            <a href=\"";
        // line 180
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        yield "\" class=\"btn btn-outline-primary\">Voir tous</a>
        </div>

        <div class=\"row\">
            ";
        // line 184
        if ((array_key_exists("featuredProducts", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["featuredProducts"] ?? null)))) {
            // line 185
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["featuredProducts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 186
                yield "                    <div class=\"col-lg-3 col-md-4 col-6 mb-4\">
                        <div class=\"card product-card h-100\">
                            ";
                // line 188
                $context["firstImage"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename", [], "any", false, false, false, 188)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename", [], "any", false, false, false, 188)) : (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename2", [], "any", false, false, false, 188)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename2", [], "any", false, false, false, 188)) : (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename3", [], "any", false, false, false, 188)))));
                // line 189
                yield "                            ";
                if ((($tmp = ($context["firstImage"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 190
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 190)]), "html", null, true);
                    yield "\">
                                    <img src=\"";
                    // line 191
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["firstImage"] ?? null)), "html", null, true);
                    yield "\" class=\"card-img-top\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 191), "html", null, true);
                    yield "\" style=\"height: 200px; object-fit: cover; cursor: pointer;\">
                                </a>
                            ";
                } else {
                    // line 194
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 194)]), "html", null, true);
                    yield "\">
                                    <div class=\"card-img-top product-placeholder d-flex align-items-center justify-content-center bg-light\" style=\"height: 200px; cursor: pointer;\">
                                        <i class=\"fas fa-image fa-3x text-secondary\"></i>
                                    </div>
                                </a>
                            ";
                }
                // line 200
                yield "
                            <div class=\"card-body\">
                                <h5 class=\"card-title product-title\">";
                // line 202
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 202), "html", null, true);
                yield "</h5>
                                <p class=\"card-text product-price\">
                                    ";
                // line 204
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "onSale", [], "any", false, false, false, 204)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 205
                    yield "                                        <span class=\"old-price text-muted\"><del>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "oldPrice", [], "any", false, false, false, 205)), "html", null, true);
                    yield "</del></span>
                                        <span class=\"sale-price text-danger fw-bold\">";
                    // line 206
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 206)), "html", null, true);
                    yield "</span>
                                        <span class=\"discount-badge badge bg-danger\">-";
                    // line 207
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "discountPercentage", [], "any", false, false, false, 207)), "html", null, true);
                    yield "%</span>
                                    ";
                } else {
                    // line 209
                    yield "                                        <span class=\"fw-bold\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 209)), "html", null, true);
                    yield "</span>
                                    ";
                }
                // line 211
                yield "                                </p>
                            </div>
                            <div class=\"card-footer bg-white border-top-0 d-flex justify-content-between\">
                                <a href=\"";
                // line 214
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 214)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-primary\">Voir</a>
                                <button type=\"button\" class=\"btn btn-sm btn-outline-primary quick-add-to-cart\" data-product-id=\"";
                // line 215
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 215), "html", null, true);
                yield "\">
                                    <i class=\"fas fa-shopping-cart\"></i> Ajouter
                                </button>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            yield "            ";
        } else {
            // line 223
            yield "                <div class=\"col-12 text-center\">
                    <p class=\"text-muted\">Aucun produit à la une pour le moment.</p>
                </div>
            ";
        }
        // line 227
        yield "        </div>
    </div>
</section>



<!-- New Arrivals -->
<section class=\"mb-5\">
    <div class=\"container\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h2>Nouveautés</h2>
            <a href=\"";
        // line 238
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        yield "\" class=\"btn btn-outline-primary\">Voir tous</a>
        </div>

        <div class=\"row\">
            ";
        // line 242
        if ((array_key_exists("newProducts", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["newProducts"] ?? null)))) {
            // line 243
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["newProducts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 244
                yield "                    <div class=\"col-lg-2 col-md-3 col-6 mb-4\">
                        <div class=\"card product-card h-100\">
                            ";
                // line 246
                $context["firstImage"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename", [], "any", false, false, false, 246)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename", [], "any", false, false, false, 246)) : (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename2", [], "any", false, false, false, 246)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename2", [], "any", false, false, false, 246)) : (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename3", [], "any", false, false, false, 246)))));
                // line 247
                yield "                            ";
                if ((($tmp = ($context["firstImage"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 248
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 248)]), "html", null, true);
                    yield "\">
                                    <img src=\"";
                    // line 249
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["firstImage"] ?? null)), "html", null, true);
                    yield "\" class=\"card-img-top\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 249), "html", null, true);
                    yield "\" style=\"height: 150px; object-fit: cover; cursor: pointer;\">
                                </a>
                            ";
                } else {
                    // line 252
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 252)]), "html", null, true);
                    yield "\">
                                    <div class=\"card-img-top product-placeholder d-flex align-items-center justify-content-center bg-light\" style=\"height: 150px; cursor: pointer;\">
                                        <i class=\"fas fa-image fa-2x text-secondary\"></i>
                                    </div>
                                </a>
                            ";
                }
                // line 258
                yield "
                            <div class=\"card-body p-2\">
                                <h6 class=\"card-title product-title small\">";
                // line 260
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 260), "html", null, true);
                yield "</h6>
                                <p class=\"card-text product-price small mb-0\">
                                    ";
                // line 262
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "onSale", [], "any", false, false, false, 262)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 263
                    yield "                                        <span class=\"sale-price text-danger fw-bold\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 263)), "html", null, true);
                    yield "</span>
                                    ";
                } else {
                    // line 265
                    yield "                                        <span class=\"fw-bold\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 265)), "html", null, true);
                    yield "</span>
                                    ";
                }
                // line 267
                yield "                                </p>
                            </div>
                            <div class=\"card-footer bg-white border-top-0 p-2\">
                                <a href=\"";
                // line 270
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 270)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary w-100\">
                                    <i class=\"fas fa-eye me-1\"></i> Voir
                                </a>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 277
            yield "            ";
        } else {
            // line 278
            yield "                <div class=\"col-12 text-center\">
                    <p class=\"text-muted\">Aucune nouveauté pour le moment.</p>
                </div>
            ";
        }
        // line 282
        yield "        </div>
    </div>
</section>

<!-- Sale Products -->
<section class=\"mb-5 bg-light py-5\">
    <div class=\"container\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h2>Promotions</h2>
            <a href=\"";
        // line 291
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        yield "\" class=\"btn btn-outline-danger\">Voir tous</a>
        </div>

        <div class=\"row\">
            ";
        // line 295
        if ((array_key_exists("saleProducts", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["saleProducts"] ?? null)))) {
            // line 296
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["saleProducts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 297
                yield "                    <div class=\"col-lg-3 col-md-4 col-6 mb-4\">
                        <div class=\"card product-card h-100 border-danger\">
                            ";
                // line 299
                $context["firstImage"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename", [], "any", false, false, false, 299)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename", [], "any", false, false, false, 299)) : (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename2", [], "any", false, false, false, 299)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename2", [], "any", false, false, false, 299)) : (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename3", [], "any", false, false, false, 299)))));
                // line 300
                yield "                            ";
                if ((($tmp = ($context["firstImage"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 301
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 301)]), "html", null, true);
                    yield "\">
                                    <img src=\"";
                    // line 302
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["firstImage"] ?? null)), "html", null, true);
                    yield "\" class=\"card-img-top\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 302), "html", null, true);
                    yield "\" style=\"height: 200px; object-fit: cover; cursor: pointer;\">
                                </a>
                            ";
                } else {
                    // line 305
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 305)]), "html", null, true);
                    yield "\">
                                    <div class=\"card-img-top product-placeholder d-flex align-items-center justify-content-center bg-light\" style=\"height: 200px; cursor: pointer;\">
                                        <i class=\"fas fa-image fa-3x text-secondary\"></i>
                                    </div>
                                </a>
                            ";
                }
                // line 311
                yield "
                            <div class=\"position-absolute top-0 start-0 p-2\">
                                <span class=\"badge bg-danger\">-";
                // line 313
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "discountPercentage", [], "any", false, false, false, 313)), "html", null, true);
                yield "%</span>
                            </div>

                            <div class=\"card-body\">
                                <h5 class=\"card-title product-title\">";
                // line 317
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 317), "html", null, true);
                yield "</h5>
                                <p class=\"card-text product-price\">
                                    <span class=\"old-price text-muted\"><del>";
                // line 319
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "oldPrice", [], "any", false, false, false, 319)), "html", null, true);
                yield "</del></span>
                                    <span class=\"sale-price text-danger fw-bold\">";
                // line 320
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CurrencyExtension']->formatFcfa(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 320)), "html", null, true);
                yield "</span>
                                </p>
                            </div>
                            <div class=\"card-footer bg-white border-top-0 d-flex justify-content-between\">
                                <a href=\"";
                // line 324
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 324)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-primary\">Voir</a>
                                <button type=\"button\" class=\"btn btn-sm btn-outline-primary quick-add-to-cart\" data-product-id=\"";
                // line 325
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 325), "html", null, true);
                yield "\">
                                    <i class=\"fas fa-shopping-cart\"></i> Ajouter
                                </button>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 332
            yield "            ";
        } else {
            // line 333
            yield "                <div class=\"col-12 text-center\">
                    <p class=\"text-muted\">Aucune promotion en cours.</p>
                </div>
            ";
        }
        // line 337
        yield "        </div>
    </div>
</section>

<!-- Features -->
<section class=\"mb-5\">
    <div class=\"container\">
        <div class=\"row text-center\">
            <div class=\"col-md-6 col-6 mb-4\">
                <div class=\"feature-box p-3\">
                    <i class=\"fas fa-lock fa-3x mb-3 text-primary\"></i>
                    <h5>Paiement sécurisé</h5>
                    <p class=\"small text-muted\">100% sécurisé</p>
                </div>
            </div>
            <div class=\"col-md-6 col-6 mb-4\">
                <div class=\"feature-box p-3\">
                    <i class=\"fas fa-headset fa-3x mb-3 text-primary\"></i>
                    <h5>Service client</h5>
                    <p class=\"small text-muted\">7j/7, de 9h à 19h</p>
                </div>
            </div>
        </div>
    </div>
</section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
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
        return array (  771 => 337,  765 => 333,  762 => 332,  749 => 325,  745 => 324,  738 => 320,  734 => 319,  729 => 317,  722 => 313,  718 => 311,  708 => 305,  700 => 302,  695 => 301,  692 => 300,  690 => 299,  686 => 297,  681 => 296,  679 => 295,  672 => 291,  661 => 282,  655 => 278,  652 => 277,  639 => 270,  634 => 267,  628 => 265,  622 => 263,  620 => 262,  615 => 260,  611 => 258,  601 => 252,  593 => 249,  588 => 248,  585 => 247,  583 => 246,  579 => 244,  574 => 243,  572 => 242,  565 => 238,  552 => 227,  546 => 223,  543 => 222,  530 => 215,  526 => 214,  521 => 211,  515 => 209,  510 => 207,  506 => 206,  501 => 205,  499 => 204,  494 => 202,  490 => 200,  480 => 194,  472 => 191,  467 => 190,  464 => 189,  462 => 188,  458 => 186,  453 => 185,  451 => 184,  444 => 180,  433 => 171,  427 => 167,  425 => 166,  412 => 156,  407 => 153,  404 => 152,  392 => 146,  389 => 145,  383 => 142,  380 => 141,  372 => 138,  369 => 137,  367 => 136,  362 => 134,  359 => 133,  354 => 132,  352 => 131,  326 => 107,  317 => 101,  308 => 95,  299 => 89,  290 => 83,  286 => 81,  283 => 80,  267 => 77,  259 => 75,  256 => 74,  250 => 72,  248 => 71,  244 => 70,  237 => 68,  230 => 67,  212 => 66,  210 => 65,  204 => 61,  196 => 55,  193 => 54,  177 => 52,  171 => 51,  166 => 50,  148 => 49,  146 => 48,  136 => 41,  127 => 34,  120 => 33,  96 => 12,  89 => 11,  82 => 8,  78 => 7,  73 => 6,  66 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "home/index.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/home/index.html.twig");
    }
}
