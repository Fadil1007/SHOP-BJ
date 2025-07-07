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
class __TwigTemplate_1373a0405398293d15e1b1c14189278d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

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

        yield "Accueil - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["site_name"]) || array_key_exists("site_name", $context) ? $context["site_name"] : (function () { throw new RuntimeError('Variable "site_name" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        if ((array_key_exists("carouselSlides", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["carouselSlides"]) || array_key_exists("carouselSlides", $context) ? $context["carouselSlides"] : (function () { throw new RuntimeError('Variable "carouselSlides" does not exist.', 48, $this->source); })())))) {
            // line 49
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["carouselSlides"]) || array_key_exists("carouselSlides", $context) ? $context["carouselSlides"] : (function () { throw new RuntimeError('Variable "carouselSlides" does not exist.', 49, $this->source); })()));
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
        if ((array_key_exists("carouselSlides", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["carouselSlides"]) || array_key_exists("carouselSlides", $context) ? $context["carouselSlides"] : (function () { throw new RuntimeError('Variable "carouselSlides" does not exist.', 65, $this->source); })())))) {
            // line 66
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["carouselSlides"]) || array_key_exists("carouselSlides", $context) ? $context["carouselSlides"] : (function () { throw new RuntimeError('Variable "carouselSlides" does not exist.', 66, $this->source); })()));
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
        if ((array_key_exists("featuredCategories", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["featuredCategories"]) || array_key_exists("featuredCategories", $context) ? $context["featuredCategories"] : (function () { throw new RuntimeError('Variable "featuredCategories" does not exist.', 131, $this->source); })())))) {
            // line 132
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["featuredCategories"]) || array_key_exists("featuredCategories", $context) ? $context["featuredCategories"] : (function () { throw new RuntimeError('Variable "featuredCategories" does not exist.', 132, $this->source); })()));
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
        if (( !array_key_exists("featuredCategories", $context) || Twig\Extension\CoreExtension::testEmpty((isset($context["featuredCategories"]) || array_key_exists("featuredCategories", $context) ? $context["featuredCategories"] : (function () { throw new RuntimeError('Variable "featuredCategories" does not exist.', 166, $this->source); })())))) {
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
        if ((array_key_exists("featuredProducts", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["featuredProducts"]) || array_key_exists("featuredProducts", $context) ? $context["featuredProducts"] : (function () { throw new RuntimeError('Variable "featuredProducts" does not exist.', 184, $this->source); })())))) {
            // line 185
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["featuredProducts"]) || array_key_exists("featuredProducts", $context) ? $context["featuredProducts"] : (function () { throw new RuntimeError('Variable "featuredProducts" does not exist.', 185, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 186
                yield "                    <div class=\"col-lg-3 col-md-4 col-6 mb-4\">
                        <div class=\"card product-card h-100\">
                            ";
                // line 188
                $context["firstImage"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename", [], "any", false, false, false, 188)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename", [], "any", false, false, false, 188)) : (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename2", [], "any", false, false, false, 188)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename2", [], "any", false, false, false, 188)) : (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename3", [], "any", false, false, false, 188)))));
                // line 189
                yield "                            ";
                if ((($tmp = (isset($context["firstImage"]) || array_key_exists("firstImage", $context) ? $context["firstImage"] : (function () { throw new RuntimeError('Variable "firstImage" does not exist.', 189, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 190
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 190)]), "html", null, true);
                    yield "\">
                                    <img src=\"";
                    // line 191
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["firstImage"]) || array_key_exists("firstImage", $context) ? $context["firstImage"] : (function () { throw new RuntimeError('Variable "firstImage" does not exist.', 191, $this->source); })())), "html", null, true);
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
        if ((array_key_exists("newProducts", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["newProducts"]) || array_key_exists("newProducts", $context) ? $context["newProducts"] : (function () { throw new RuntimeError('Variable "newProducts" does not exist.', 242, $this->source); })())))) {
            // line 243
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["newProducts"]) || array_key_exists("newProducts", $context) ? $context["newProducts"] : (function () { throw new RuntimeError('Variable "newProducts" does not exist.', 243, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 244
                yield "                    <div class=\"col-lg-2 col-md-3 col-6 mb-4\">
                        <div class=\"card product-card h-100\">
                            ";
                // line 246
                $context["firstImage"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename", [], "any", false, false, false, 246)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename", [], "any", false, false, false, 246)) : (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename2", [], "any", false, false, false, 246)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename2", [], "any", false, false, false, 246)) : (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename3", [], "any", false, false, false, 246)))));
                // line 247
                yield "                            ";
                if ((($tmp = (isset($context["firstImage"]) || array_key_exists("firstImage", $context) ? $context["firstImage"] : (function () { throw new RuntimeError('Variable "firstImage" does not exist.', 247, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 248
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 248)]), "html", null, true);
                    yield "\">
                                    <img src=\"";
                    // line 249
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["firstImage"]) || array_key_exists("firstImage", $context) ? $context["firstImage"] : (function () { throw new RuntimeError('Variable "firstImage" does not exist.', 249, $this->source); })())), "html", null, true);
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
        if ((array_key_exists("saleProducts", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["saleProducts"]) || array_key_exists("saleProducts", $context) ? $context["saleProducts"] : (function () { throw new RuntimeError('Variable "saleProducts" does not exist.', 295, $this->source); })())))) {
            // line 296
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["saleProducts"]) || array_key_exists("saleProducts", $context) ? $context["saleProducts"] : (function () { throw new RuntimeError('Variable "saleProducts" does not exist.', 296, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 297
                yield "                    <div class=\"col-lg-3 col-md-4 col-6 mb-4\">
                        <div class=\"card product-card h-100 border-danger\">
                            ";
                // line 299
                $context["firstImage"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename", [], "any", false, false, false, 299)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename", [], "any", false, false, false, 299)) : (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename2", [], "any", false, false, false, 299)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename2", [], "any", false, false, false, 299)) : (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageFilename3", [], "any", false, false, false, 299)))));
                // line 300
                yield "                            ";
                if ((($tmp = (isset($context["firstImage"]) || array_key_exists("firstImage", $context) ? $context["firstImage"] : (function () { throw new RuntimeError('Variable "firstImage" does not exist.', 300, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 301
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 301)]), "html", null, true);
                    yield "\">
                                    <img src=\"";
                    // line 302
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["firstImage"]) || array_key_exists("firstImage", $context) ? $context["firstImage"] : (function () { throw new RuntimeError('Variable "firstImage" does not exist.', 302, $this->source); })())), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  798 => 337,  792 => 333,  789 => 332,  776 => 325,  772 => 324,  765 => 320,  761 => 319,  756 => 317,  749 => 313,  745 => 311,  735 => 305,  727 => 302,  722 => 301,  719 => 300,  717 => 299,  713 => 297,  708 => 296,  706 => 295,  699 => 291,  688 => 282,  682 => 278,  679 => 277,  666 => 270,  661 => 267,  655 => 265,  649 => 263,  647 => 262,  642 => 260,  638 => 258,  628 => 252,  620 => 249,  615 => 248,  612 => 247,  610 => 246,  606 => 244,  601 => 243,  599 => 242,  592 => 238,  579 => 227,  573 => 223,  570 => 222,  557 => 215,  553 => 214,  548 => 211,  542 => 209,  537 => 207,  533 => 206,  528 => 205,  526 => 204,  521 => 202,  517 => 200,  507 => 194,  499 => 191,  494 => 190,  491 => 189,  489 => 188,  485 => 186,  480 => 185,  478 => 184,  471 => 180,  460 => 171,  454 => 167,  452 => 166,  439 => 156,  434 => 153,  431 => 152,  419 => 146,  416 => 145,  410 => 142,  407 => 141,  399 => 138,  396 => 137,  394 => 136,  389 => 134,  386 => 133,  381 => 132,  379 => 131,  353 => 107,  344 => 101,  335 => 95,  326 => 89,  317 => 83,  313 => 81,  310 => 80,  294 => 77,  286 => 75,  283 => 74,  277 => 72,  275 => 71,  271 => 70,  264 => 68,  257 => 67,  239 => 66,  237 => 65,  231 => 61,  223 => 55,  220 => 54,  204 => 52,  198 => 51,  193 => 50,  175 => 49,  173 => 48,  163 => 41,  154 => 34,  144 => 33,  117 => 12,  107 => 11,  97 => 8,  93 => 7,  88 => 6,  78 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil - {{ site_name }}{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/carousel.js') }}\"></script>
    <script src=\"{{ asset('js/cart.js') }}\"></script>
    <script src=\"{{ asset('js/quick-add-cart.js') }}\"></script>
{% endblock %}

{% block stylesheets %}
<style>
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
{% endblock %}

{% block body %}
<!-- Hero Banner with Carousel -->
<div class=\"hero-banner mb-5\">
    <div class=\"container py-5\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-6 mb-4 mb-md-0\">
                <h1 class=\"display-4 fw-bold mb-3\">ShopBJ</h1>
                <p class=\"lead mb-4\">L'essentiel du shopping au Bénin en un seul endroit</p>
                <a href=\"{{ path('product_index') }}\" class=\"btn btn-primary btn-lg\">Découvrir maintenant</a>
            </div>
            <div class=\"col-md-6\">
                <!-- Carousel -->
                <div id=\"heroCarousel\" class=\"carousel slide carousel-fade shadow-lg rounded\" data-bs-ride=\"carousel\">
                    <!-- Indicators -->
                    <div class=\"carousel-indicators\">
                        {% if carouselSlides is defined and carouselSlides is not empty %}
                            {% for slide in carouselSlides %}
                                <button type=\"button\" data-bs-target=\"#heroCarousel\" data-bs-slide-to=\"{{ loop.index0 }}\" 
                                        {% if loop.first %}class=\"active\" aria-current=\"true\"{% endif %} 
                                        aria-label=\"Slide {{ loop.index }}\"></button>
                            {% endfor %}
                        {% else %}
                            <!-- Indicateurs par défaut si aucun slide personnalisé n'est disponible -->
                            <button type=\"button\" data-bs-target=\"#heroCarousel\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                            <button type=\"button\" data-bs-target=\"#heroCarousel\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
                            <button type=\"button\" data-bs-target=\"#heroCarousel\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
                            <button type=\"button\" data-bs-target=\"#heroCarousel\" data-bs-slide-to=\"3\" aria-label=\"Slide 4\"></button>
                        {% endif %}
                    </div>

                    <!-- Slides -->
                    <div class=\"carousel-inner rounded\">
                        {% if carouselSlides is defined and carouselSlides is not empty %}
                            {% for slide in carouselSlides %}
                                <div class=\"carousel-item {% if loop.first %}active{% endif %}\">
                                    <img src=\"{{ asset(slide.imageFilename) }}\" class=\"d-block w-100\" alt=\"{{ slide.title }}\" style=\"height: 400px; object-fit: cover;\">
                                    <div class=\"carousel-caption d-none d-md-block\">
                                        <h5 class=\"bg-dark bg-opacity-50 p-2 rounded\">{{ slide.title }}</h5>
                                        {% if slide.subtitle %}
                                            <p class=\"bg-dark bg-opacity-50 p-2 rounded\">{{ slide.subtitle }}</p>
                                        {% endif %}
                                        {% if slide.buttonText and slide.buttonLink %}
                                            <a href=\"{{ slide.buttonLink }}\" class=\"btn btn-primary\">{{ slide.buttonText }}</a>
                                        {% endif %}
                                    </div>
                                </div>
                            {% endfor %}
                        {% else %}
                            <!-- Slides par défaut si aucun slide personnalisé n'est disponible -->
                            <div class=\"carousel-item active\">
                                <img src=\"{{ asset('uploads/banners/carousel-1.jpg') }}\" class=\"d-block w-100\" alt=\"Collection Femmes\" style=\"height: 400px; object-fit: cover;\">
                                <div class=\"carousel-caption d-none d-md-block\">
                                    <h5 class=\"bg-dark bg-opacity-50 p-2 rounded\">Collection Femmes</h5>
                                </div>
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"{{ asset('uploads/banners/carousel-2.jpg') }}\" class=\"d-block w-100\" alt=\"Collection Hommes\" style=\"height: 400px; object-fit: cover;\">
                                <div class=\"carousel-caption d-none d-md-block\">
                                    <h5 class=\"bg-dark bg-opacity-50 p-2 rounded\">Collection Hommes</h5>
                                </div>
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"{{ asset('uploads/banners/carousel-4.jpg') }}\" class=\"d-block w-100\" alt=\"Collection Urbaine\" style=\"height: 400px; object-fit: cover;\">
                                <div class=\"carousel-caption d-none d-md-block\">
                                    <h5 class=\"bg-dark bg-opacity-50 p-2 rounded\">Style Urbain</h5>
                                </div>
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"{{ asset('uploads/banners/carousel-5.jpg') }}\" class=\"d-block w-100\" alt=\"Accessoires\" style=\"height: 400px; object-fit: cover;\">
                                <div class=\"carousel-caption d-none d-md-block\">
                                    <h5 class=\"bg-dark bg-opacity-50 p-2 rounded\">Accessoires</h5>
                                </div>
                            </div>
                        {% endif %}
                    </div>

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
            {% if featuredCategories is defined and featuredCategories is not empty %}
                {% for category in featuredCategories %}
                    <div class=\"col-lg-3 col-md-4 col-6 mb-4\">
                        <a href=\"{{ path('category_show', {'id': category.id}) }}\" class=\"text-decoration-none\">
                            <div class=\"card category-card text-center h-100\">
                                {% if category.imageFilename %}
                                    <div class=\"category-image-container\">
                                        <img src=\"{{ category.imageFilename }}\" class=\"card-img-top\" alt=\"{{ category.name }}\">
                                    </div>
                                {% else %}
                                    <div class=\"card-img-top d-flex align-items-center justify-content-center bg-light\" style=\"height: 150px;\">
                                        <i class=\"fas fa-{{ category.icon|default('tshirt') }} fa-3x text-primary\"></i>
                                    </div>
                                {% endif %}
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">{{ category.name }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                {% endfor %}
            {% endif %}

            <!-- Bouton Toutes les catégories (affiché même s'il n'y a pas de otherCategories) -->
            <div class=\"col-lg-3 col-md-4 col-6 mb-4\">
                <a href=\"{{ path('category_list') }}\" class=\"text-decoration-none\">
                    <div class=\"card category-card text-center h-100 border-primary\">
                        <div class=\"card-body\">
                            <i class=\"fas fa-ellipsis-h fa-3x mb-3 text-primary\"></i>
                            <h5 class=\"card-title\">Toutes les catégories</h5>
                        </div>
                    </div>
                </a>
            </div>

            {% if not featuredCategories is defined or featuredCategories is empty %}
                <div class=\"col-12 text-center\">
                    <p class=\"text-muted\">Aucune catégorie disponible pour le moment.</p>
                </div>
            {% endif %}
        </div>
    </div>
</section>

<!-- Featured Products -->
<section class=\"mb-5 bg-light py-5\">
    <div class=\"container\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h2>Produits à la Une</h2>
            <a href=\"{{ path('product_index') }}\" class=\"btn btn-outline-primary\">Voir tous</a>
        </div>

        <div class=\"row\">
            {% if featuredProducts is defined and featuredProducts is not empty %}
                {% for product in featuredProducts %}
                    <div class=\"col-lg-3 col-md-4 col-6 mb-4\">
                        <div class=\"card product-card h-100\">
                            {% set firstImage = product.imageFilename ?: product.imageFilename2 ?: product.imageFilename3 %}
                            {% if firstImage %}
                                <a href=\"{{ path('product_show', {'id': product.id}) }}\">
                                    <img src=\"{{ asset(firstImage) }}\" class=\"card-img-top\" alt=\"{{ product.name }}\" style=\"height: 200px; object-fit: cover; cursor: pointer;\">
                                </a>
                            {% else %}
                                <a href=\"{{ path('product_show', {'id': product.id}) }}\">
                                    <div class=\"card-img-top product-placeholder d-flex align-items-center justify-content-center bg-light\" style=\"height: 200px; cursor: pointer;\">
                                        <i class=\"fas fa-image fa-3x text-secondary\"></i>
                                    </div>
                                </a>
                            {% endif %}

                            <div class=\"card-body\">
                                <h5 class=\"card-title product-title\">{{ product.name }}</h5>
                                <p class=\"card-text product-price\">
                                    {% if product.onSale %}
                                        <span class=\"old-price text-muted\"><del>{{ product.oldPrice|format_fcfa }}</del></span>
                                        <span class=\"sale-price text-danger fw-bold\">{{ product.price|format_fcfa }}</span>
                                        <span class=\"discount-badge badge bg-danger\">-{{ product.discountPercentage|round }}%</span>
                                    {% else %}
                                        <span class=\"fw-bold\">{{ product.price|format_fcfa }}</span>
                                    {% endif %}
                                </p>
                            </div>
                            <div class=\"card-footer bg-white border-top-0 d-flex justify-content-between\">
                                <a href=\"{{ path('product_show', {'id': product.id}) }}\" class=\"btn btn-sm btn-primary\">Voir</a>
                                <button type=\"button\" class=\"btn btn-sm btn-outline-primary quick-add-to-cart\" data-product-id=\"{{ product.id }}\">
                                    <i class=\"fas fa-shopping-cart\"></i> Ajouter
                                </button>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            {% else %}
                <div class=\"col-12 text-center\">
                    <p class=\"text-muted\">Aucun produit à la une pour le moment.</p>
                </div>
            {% endif %}
        </div>
    </div>
</section>



<!-- New Arrivals -->
<section class=\"mb-5\">
    <div class=\"container\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h2>Nouveautés</h2>
            <a href=\"{{ path('product_index') }}\" class=\"btn btn-outline-primary\">Voir tous</a>
        </div>

        <div class=\"row\">
            {% if newProducts is defined and newProducts is not empty %}
                {% for product in newProducts %}
                    <div class=\"col-lg-2 col-md-3 col-6 mb-4\">
                        <div class=\"card product-card h-100\">
                            {% set firstImage = product.imageFilename ?: product.imageFilename2 ?: product.imageFilename3 %}
                            {% if firstImage %}
                                <a href=\"{{ path('product_show', {'id': product.id}) }}\">
                                    <img src=\"{{ asset(firstImage) }}\" class=\"card-img-top\" alt=\"{{ product.name }}\" style=\"height: 150px; object-fit: cover; cursor: pointer;\">
                                </a>
                            {% else %}
                                <a href=\"{{ path('product_show', {'id': product.id}) }}\">
                                    <div class=\"card-img-top product-placeholder d-flex align-items-center justify-content-center bg-light\" style=\"height: 150px; cursor: pointer;\">
                                        <i class=\"fas fa-image fa-2x text-secondary\"></i>
                                    </div>
                                </a>
                            {% endif %}

                            <div class=\"card-body p-2\">
                                <h6 class=\"card-title product-title small\">{{ product.name }}</h6>
                                <p class=\"card-text product-price small mb-0\">
                                    {% if product.onSale %}
                                        <span class=\"sale-price text-danger fw-bold\">{{ product.price|format_fcfa }}</span>
                                    {% else %}
                                        <span class=\"fw-bold\">{{ product.price|format_fcfa }}</span>
                                    {% endif %}
                                </p>
                            </div>
                            <div class=\"card-footer bg-white border-top-0 p-2\">
                                <a href=\"{{ path('product_show', {'id': product.id}) }}\" class=\"btn btn-sm btn-outline-primary w-100\">
                                    <i class=\"fas fa-eye me-1\"></i> Voir
                                </a>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            {% else %}
                <div class=\"col-12 text-center\">
                    <p class=\"text-muted\">Aucune nouveauté pour le moment.</p>
                </div>
            {% endif %}
        </div>
    </div>
</section>

<!-- Sale Products -->
<section class=\"mb-5 bg-light py-5\">
    <div class=\"container\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h2>Promotions</h2>
            <a href=\"{{ path('product_index') }}\" class=\"btn btn-outline-danger\">Voir tous</a>
        </div>

        <div class=\"row\">
            {% if saleProducts is defined and saleProducts is not empty %}
                {% for product in saleProducts %}
                    <div class=\"col-lg-3 col-md-4 col-6 mb-4\">
                        <div class=\"card product-card h-100 border-danger\">
                            {% set firstImage = product.imageFilename ?: product.imageFilename2 ?: product.imageFilename3 %}
                            {% if firstImage %}
                                <a href=\"{{ path('product_show', {'id': product.id}) }}\">
                                    <img src=\"{{ asset(firstImage) }}\" class=\"card-img-top\" alt=\"{{ product.name }}\" style=\"height: 200px; object-fit: cover; cursor: pointer;\">
                                </a>
                            {% else %}
                                <a href=\"{{ path('product_show', {'id': product.id}) }}\">
                                    <div class=\"card-img-top product-placeholder d-flex align-items-center justify-content-center bg-light\" style=\"height: 200px; cursor: pointer;\">
                                        <i class=\"fas fa-image fa-3x text-secondary\"></i>
                                    </div>
                                </a>
                            {% endif %}

                            <div class=\"position-absolute top-0 start-0 p-2\">
                                <span class=\"badge bg-danger\">-{{ product.discountPercentage|round }}%</span>
                            </div>

                            <div class=\"card-body\">
                                <h5 class=\"card-title product-title\">{{ product.name }}</h5>
                                <p class=\"card-text product-price\">
                                    <span class=\"old-price text-muted\"><del>{{ product.oldPrice|format_fcfa }}</del></span>
                                    <span class=\"sale-price text-danger fw-bold\">{{ product.price|format_fcfa }}</span>
                                </p>
                            </div>
                            <div class=\"card-footer bg-white border-top-0 d-flex justify-content-between\">
                                <a href=\"{{ path('product_show', {'id': product.id}) }}\" class=\"btn btn-sm btn-primary\">Voir</a>
                                <button type=\"button\" class=\"btn btn-sm btn-outline-primary quick-add-to-cart\" data-product-id=\"{{ product.id }}\">
                                    <i class=\"fas fa-shopping-cart\"></i> Ajouter
                                </button>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            {% else %}
                <div class=\"col-12 text-center\">
                    <p class=\"text-muted\">Aucune promotion en cours.</p>
                </div>
            {% endif %}
        </div>
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
{% endblock %}", "home/index.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/home/index.html.twig");
    }
}
