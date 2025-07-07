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

/* base.html.twig */
class __TwigTemplate_77392a6df9f8025d4f181edc8ce56d7c extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        yield "?v=2\" type=\"image/x-icon\">
        <link rel=\"icon\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.svg"), "html", null, true);
        yield "?v=2\" type=\"image/svg+xml\">
        <link rel=\"apple-touch-icon\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apple-touch-icon.png"), "html", null, true);
        yield "?v=2\">
        <link rel=\"shortcut icon\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        yield "?v=2\" type=\"image/x-icon\">
        <meta name=\"theme-color\" content=\"#F58C1E\">
        <meta name=\"mobile-web-app-capable\" content=\"yes\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\">
        <link rel=\"manifest\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("manifest.json"), "html", null, true);
        yield "?v=2\">

        <!-- Bootstrap 5 CSS -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

        <!-- Bootstrap Icons -->
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css\">

        <!-- Font Awesome -->
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css\" rel=\"stylesheet\">

        <!-- Color Swatches CSS -->
        <link href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/color-swatches.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/search-bar-new.css"), "html", null, true);
        yield "?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "YmdHis"), "html", null, true);
        yield "\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        <style>
            :root {
                --primary-color: #FF6B6B; /* Rouge-corail vif */
                --primary-dark: #E05252; /* Rouge-corail foncé */
                --secondary-color: #FFF3F3; /* Rose très clair */
                --accent-color: #06D6A0; /* Vert turquoise */
                --accent-light: #7AE7C7; /* Vert turquoise clair */
                --text-color: #333333;
                --light-gray: #F8F8F8;
                --border-color: #E5E5E5;

                /* Couleurs secondaires pour plus de diversité */
                --neutral-pop: #FFD166; /* Jaune soleil */
                --neutral-soft: #FFC2C2; /* Rose pâle */
            }

            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                color: var(--text-color);
                background-color: #FFFFFF;
                padding-top: 160px; /* Hauteur de la navbar + barre de recherche */ /* Hauteur de la navbar + barre de recherche */
            }

            /* Style pour la barre de recherche principale */
            /* Style pour la barre de recherche principale - Style déplacé dans search-bar-new.css */
            .global-search-bar {
                background-color: transparent !important;
                position: fixed;
                top: 56px;
                left: 0;
                right: 0;
                padding: 10px 0;
                z-index: 100;
                box-shadow: none;
            }

            /* Dégradés verts */
            .gradient-bg {
                background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
                color: white;
            }

            .gradient-text {
                background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                display: inline-block;
            }

            .gradient-border {
                position: relative;
                border: none;
            }

            .gradient-border::after {
                content: '';
                position: absolute;
                bottom: -2px;
                left: 0;
                width: 100%;
                height: 2px;
                background: linear-gradient(to right, var(--primary-color), var(--accent-color));
            }

            /* Boutons neutres pour tous genres */
            .btn-neutral {
                background-color: var(--neutral-soft);
                border-color: var(--neutral-soft);
                color: var(--text-color);
            }

            .btn-neutral:hover {
                background-color: #C9B9A9; /* Légèrement plus foncé */
                border-color: #C9B9A9;
                color: var(--text-color);
            }

            .btn-accent {
                background-color: var(--neutral-pop);
                border-color: var(--neutral-pop);
                color: white;
            }

            .btn-accent:hover {
                background-color: #BF9F31; /* Or légèrement plus foncé */
                border-color: #BF9F31;
                color: white;
            }

            .navbar-brand {
                font-weight: bold;
                font-size: 1.5rem;
            }

            .nav-link {
                font-weight: 500;
            }

            .btn-primary {
                background-color: var(--primary-color);
                border-color: var(--primary-color);
            }

            .btn-primary:hover, .btn-primary:focus {
                background-color: var(--primary-dark);
                border-color: var(--primary-dark);
            }

            .btn-outline-primary {
                color: var(--primary-color);
                border-color: var(--primary-color);
            }

            .btn-outline-primary:hover {
                background-color: var(--primary-color);
                border-color: var(--primary-color);
            }

            .bg-primary {
                background-color: var(--primary-color) !important;
            }

            .text-primary {
                color: var(--primary-color) !important;
            }

            .hero-banner {
                background-color: var(--secondary-color);
                border-radius: 0.5rem;
            }

            .feature-box {
                border-radius: 0.5rem;
                background-color: var(--light-gray);
                transition: transform 0.3s ease;
            }

            .feature-box:hover {
                transform: translateY(-5px);
            }

            .product-card {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                border: 1px solid var(--border-color);
            }

            .product-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            }

            .product-title {
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
            }

            .category-card {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .category-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
                background-color: var(--primary-color);
                color: white;
            }

            .category-card:hover .text-primary {
                color: white !important;
            }

            footer {
                background-color: var(--secondary-color);
            }

            .footer-link {
                color: var(--text-color);
                text-decoration: none;
            }

            .footer-link:hover {
                color: var(--primary-color);
                text-decoration: underline;
            }
        </style>

        <!-- Carousel CSS -->
        <link href=\"";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/carousel.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

        <!-- Ajustements responsifs -->
        <link href=\"";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/responsive-fix.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

        <!-- Thème personnalisé -->
        ";
        // line 227
        if ((array_key_exists("theme_css_path", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["theme_css_path"]) || array_key_exists("theme_css_path", $context) ? $context["theme_css_path"] : (function () { throw new RuntimeError('Variable "theme_css_path" does not exist.', 227, $this->source); })())))) {
            // line 228
            yield "        <link href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["theme_css_path"]) || array_key_exists("theme_css_path", $context) ? $context["theme_css_path"] : (function () { throw new RuntimeError('Variable "theme_css_path" does not exist.', 228, $this->source); })())), "html", null, true);
            yield "\" rel=\"stylesheet\">
        ";
        }
        // line 230
        yield "
        ";
        // line 231
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 232
        yield "    </head>
    <body>
        ";
        // line 234
        yield from $this->load("search_bar.html.twig", 234)->unwrap()->yield($context);
        // line 235
        yield "        <header>
            <nav class=\"navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm py-2\">
                <div class=\"container\">
                    <a class=\"navbar-brand\" href=\"";
        // line 238
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                        <img src=\"";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((array_key_exists("site_logo", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["site_logo"]) || array_key_exists("site_logo", $context) ? $context["site_logo"] : (function () { throw new RuntimeError('Variable "site_logo" does not exist.', 239, $this->source); })()), "uploads/logo/logo-shop-bj.svg")) : ("uploads/logo/logo-shop-bj.svg"))), "html", null, true);
        yield "\" alt=\"SHOP BJ\" height=\"40\" class=\"d-inline-block align-top\">
                    </a>
                    <!-- Barre de navigation mobile optimisée et complètement visible -->
                    <div class=\"d-lg-none w-100 pt-2\">
                        <!-- Boutons d'action rapide pour mobile en haut -->
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <!-- Logo centré pour mobile -->
                            <a href=\"";
        // line 246
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn nav-icon-btn me-2\">
                                <i class=\"fas fa-home\"></i>
                            </a>

                            <!-- Action utilisateur -->
                            <div class=\"dropdown\">
                                <button class=\"btn nav-icon-btn\" type=\"button\" id=\"userDropdownMobile\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" title=\"Mon compte\">
                                    <i class=\"fas fa-user\"></i>
                                </button>
                                <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"userDropdownMobile\">
                                    ";
        // line 256
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 256, $this->source); })()), "user", [], "any", false, false, false, 256)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 257
            yield "                                        <li><a class=\"dropdown-item\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\">Mon compte</a></li>
                                        <li><a class=\"dropdown-item\" href=\"";
            // line 258
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_orders");
            yield "\">Mes commandes</a></li>
                                        <li><a class=\"dropdown-item\" href=\"";
            // line 259
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wishlist_index");
            yield "\">Mes favoris</a></li>
                                        ";
            // line 260
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 261
                yield "                                            <li><hr class=\"dropdown-divider\"></li>
                                            <li><a class=\"dropdown-item\" href=\"";
                // line 262
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
                yield "\">Administration</a></li>
                                        ";
            }
            // line 264
            yield "                                        <li><hr class=\"dropdown-divider\"></li>
                                        <li><a class=\"dropdown-item\" href=\"";
            // line 265
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Déconnexion</a></li>
                                    ";
        } else {
            // line 267
            yield "                                        <li><a class=\"dropdown-item\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Connexion</a></li>
                                        <li><a class=\"dropdown-item\" href=\"";
            // line 268
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">Inscription</a></li>
                                    ";
        }
        // line 270
        yield "                                </ul>
                            </div>

                            ";
        // line 273
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 273, $this->source); })()), "user", [], "any", false, false, false, 273)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 274
            yield "                            <!-- Favoris -->
                            <a href=\"";
            // line 275
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wishlist_index");
            yield "\" class=\"btn nav-icon-btn position-relative\">
                                <i class=\"fas fa-heart\"></i>
                                <span class=\"position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger wishlist-counter ";
            // line 277
            if ((($tmp =  !((array_key_exists("wishlist_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["wishlist_count"]) || array_key_exists("wishlist_count", $context) ? $context["wishlist_count"] : (function () { throw new RuntimeError('Variable "wishlist_count" does not exist.', 277, $this->source); })()), 0)) : (0))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "d-none";
            }
            yield "\">
                                    ";
            // line 278
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("wishlist_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["wishlist_count"]) || array_key_exists("wishlist_count", $context) ? $context["wishlist_count"] : (function () { throw new RuntimeError('Variable "wishlist_count" does not exist.', 278, $this->source); })()), 0)) : (0)), "html", null, true);
            yield "
                                </span>
                            </a>
                            ";
        }
        // line 282
        yield "
                            <!-- Panier -->
                            <a href=\"";
        // line 284
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        yield "\" class=\"btn nav-icon-btn position-relative\">
                                <i class=\"fas fa-shopping-bag\"></i>
                                <span class=\"position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger cart-count\">
                                    ";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("cart_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["cart_count"]) || array_key_exists("cart_count", $context) ? $context["cart_count"] : (function () { throw new RuntimeError('Variable "cart_count" does not exist.', 287, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "
                                </span>
                            </a>
                        </div>

                        <!-- Navigation directe pour mobile -->
                        <div class=\"mobile-search-bar mb-2\">
                            ";
        // line 294
        yield from $this->load("components/search_mobile.html.twig", 294)->unwrap()->yield($context);
        // line 295
        yield "                        </div>
                        <div class=\"mobile-nav-tabs d-flex justify-content-between mb-2\">
                            <a href=\"";
        // line 297
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-sm mobile-nav-tab ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 297, $this->source); })()), "request", [], "any", false, false, false, 297), "get", ["_route"], "method", false, false, false, 297) == "app_home")) {
            yield "active";
        }
        yield "\">Accueil</a>
                            <a href=\"";
        // line 298
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        yield "\" class=\"btn btn-sm mobile-nav-tab ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 298, $this->source); })()), "request", [], "any", false, false, false, 298), "get", ["_route"], "method", false, false, false, 298) == "product_index")) {
            yield "active";
        }
        yield "\">Nouveautés</a>
                            <a href=\"";
        // line 299
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        yield "\" class=\"btn btn-sm mobile-nav-tab\">Promos</a>
                        </div>

                        <!-- Catégories principales pour mobile -->
                        <div class=\"mobile-categories d-flex justify-content-between\">
                            ";
        // line 304
        if ((array_key_exists("featuredCategories", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["featuredCategories"]) || array_key_exists("featuredCategories", $context) ? $context["featuredCategories"] : (function () { throw new RuntimeError('Variable "featuredCategories" does not exist.', 304, $this->source); })())))) {
            // line 305
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["featuredCategories"]) || array_key_exists("featuredCategories", $context) ? $context["featuredCategories"] : (function () { throw new RuntimeError('Variable "featuredCategories" does not exist.', 305, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 306
                yield "                                    ";
                if (((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 306)) == "hommes") || (Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 306)) == "femmes"))) {
                    // line 307
                    yield "                                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 307)]), "html", null, true);
                    yield "\" class=\"btn btn-outline-primary mobile-category-btn\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 307), "html", null, true);
                    yield "</a>
                                    ";
                }
                // line 309
                yield "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 310
            yield "                            ";
        }
        // line 311
        yield "
                            <a href=\"";
        // line 312
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_list");
        yield "\" class=\"btn btn-outline-primary mobile-category-btn\">
                                Catégories
                            </a>
                        </div>
                    </div>

                    <!-- Navigation desktop uniquement -->
                    <div class=\"d-none d-lg-block mt-2\">
                        <ul class=\"navbar-nav mx-auto\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link px-3\" href=\"";
        // line 322
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">ACCUEIL</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link px-3\" href=\"";
        // line 325
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        yield "\">NOUVEAUTÉS</a>
                            </li>
                            ";
        // line 328
        yield "                            ";
        if ((array_key_exists("featuredCategories", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["featuredCategories"]) || array_key_exists("featuredCategories", $context) ? $context["featuredCategories"] : (function () { throw new RuntimeError('Variable "featuredCategories" does not exist.', 328, $this->source); })())))) {
            // line 329
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["featuredCategories"]) || array_key_exists("featuredCategories", $context) ? $context["featuredCategories"] : (function () { throw new RuntimeError('Variable "featuredCategories" does not exist.', 329, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 330
                yield "                                    <li class=\"nav-item\">
                                        <a class=\"nav-link px-3\" href=\"";
                // line 331
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 331)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 331)), "html", null, true);
                yield "</a>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 334
            yield "                            ";
        }
        // line 335
        yield "
                            ";
        // line 337
        yield "                            <li class=\"nav-item\">
                                <a class=\"nav-link px-3\" href=\"";
        // line 338
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        yield "\">PROMOS</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link px-3\" href=\"";
        // line 341
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\">CONTACT</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Section visible uniquement sur desktop -->
                        <div class=\"d-none d-lg-flex align-items-center\">
                            <div class=\"nav-icon-group d-flex\">

                                <div class=\"dropdown\">
                                    <button class=\"btn nav-icon-btn\" type=\"button\" id=\"userDropdown\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <i class=\"fas fa-user\"></i>
                                    </button>
                                    <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"userDropdown\">
                                        ";
        // line 355
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 355, $this->source); })()), "user", [], "any", false, false, false, 355)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 356
            yield "                                            <li><a class=\"dropdown-item\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\">Mon compte</a></li>
                                            <li><a class=\"dropdown-item\" href=\"";
            // line 357
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_orders");
            yield "\">Mes commandes</a></li>
                                            <li><a class=\"dropdown-item\" href=\"";
            // line 358
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wishlist_index");
            yield "\">Mes favoris</a></li>
                                            ";
            // line 359
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 360
                yield "                                                <li><hr class=\"dropdown-divider\"></li>
                                                <li><a class=\"dropdown-item\" href=\"";
                // line 361
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
                yield "\">Administration</a></li>
                                            ";
            }
            // line 363
            yield "                                            <li><hr class=\"dropdown-divider\"></li>
                                            <li><a class=\"dropdown-item\" href=\"";
            // line 364
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Déconnexion</a></li>
                                        ";
        } else {
            // line 366
            yield "                                            <li><a class=\"dropdown-item\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Connexion</a></li>
                                            <li><a class=\"dropdown-item\" href=\"";
            // line 367
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">Inscription</a></li>
                                        ";
        }
        // line 369
        yield "                                    </ul>
                                </div>

                                ";
        // line 372
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 372, $this->source); })()), "user", [], "any", false, false, false, 372)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 373
            yield "                                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wishlist_index");
            yield "\" class=\"btn nav-icon-btn position-relative\">
                                    <i class=\"fas fa-heart\"></i>
                                    <span class=\"position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger wishlist-counter ";
            // line 375
            if ((($tmp =  !((array_key_exists("wishlist_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["wishlist_count"]) || array_key_exists("wishlist_count", $context) ? $context["wishlist_count"] : (function () { throw new RuntimeError('Variable "wishlist_count" does not exist.', 375, $this->source); })()), 0)) : (0))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "d-none";
            }
            yield "\">
                                        ";
            // line 376
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("wishlist_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["wishlist_count"]) || array_key_exists("wishlist_count", $context) ? $context["wishlist_count"] : (function () { throw new RuntimeError('Variable "wishlist_count" does not exist.', 376, $this->source); })()), 0)) : (0)), "html", null, true);
            yield "
                                    </span>
                                </a>
                                ";
        }
        // line 380
        yield "
                                <a href=\"";
        // line 381
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        yield "\" class=\"btn nav-icon-btn position-relative\">
                                    <i class=\"fas fa-shopping-bag\"></i>
                                    <span class=\"position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger cart-count\">
                                        ";
        // line 384
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("cart_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["cart_count"]) || array_key_exists("cart_count", $context) ? $context["cart_count"] : (function () { throw new RuntimeError('Variable "cart_count" does not exist.', 384, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>


            <style>
                .nav-icon-btn {
                    font-size: 1.1rem;
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: #333;
                    background: transparent;
                    border: none;
                    padding: 0;
                    margin: 0 5px;
                    border-radius: 50%;
                    transition: all 0.2s ease;
                }

                .nav-icon-btn:hover {
                    color: var(--primary-color);
                    background-color: rgba(0, 0, 0, 0.05);
                }

                .nav-icon-group {
                    display: flex;
                    align-items: center;
                }

                .navbar .nav-link {
                    font-size: 0.9rem;
                    font-weight: 500;
                    letter-spacing: 0.5px;
                    transition: color 0.2s ease;
                }

                .navbar .nav-link:hover {
                    color: var(--primary-color);
                }

                /* Style pour les onglets de navigation mobile */
                .mobile-nav-tab {
                    flex: 1;
                    padding: 0.5rem 0.25rem;
                    text-align: center;
                    border: none;
                    border-radius: 4px;
                    font-weight: 500;
                    font-size: 0.9rem;
                    color: var(--dark-color);
                    background-color: #f5f5f5;
                    margin: 0 0.15rem;
                    transition: all 0.2s ease;
                }

                .mobile-nav-tab:hover, .mobile-nav-tab.active {
                    background-color: var(--primary-color);
                    color: white;
                }

                /* Style pour les boutons de catégories */
                .mobile-category-btn {
                    flex: 1;
                    text-align: center;
                    padding: 0.5rem;
                    border-radius: 4px;
                    font-weight: 500;
                    margin: 0 0.15rem;
                    font-size: 0.9rem;
                    text-transform: uppercase;
                    letter-spacing: 0.5px;
                }

                /* Styles pour les appareils mobiles */
                @media (max-width: 991.98px) {
                    /* Navigation principale */
                    .navbar .navbar-nav {
                        margin: 1rem 0;
                    }

                    .navbar .nav-link {
                        padding: 0.6rem 0;
                        font-size: 1rem;
                    }

                    /* Ajustement du logo pour libérer de l'espace */
                    .navbar-brand img {
                        height: 35px;
                    }

                    /* Ajustement de la navbar mobile */
                    .navbar {
                        padding-top: 0.5rem;
                        padding-bottom: 0.5rem;
                    }

                    /* Meilleure visibilité des badges de notification */
                    .badge.cart-count {
                        font-size: 0.65rem;
                        padding: 0.2rem 0.35rem;
                    }

                    /* Icônes pour mobile */
                    .nav-icon-btn {
                        color: var(--primary-color);
                        background-color: rgba(var(--primary-rgb), 0.05);
                    }

                    /* Espace pour le contenu sous la navbar mobile */
                    .mobile-content-padding {
                        padding-top: 170px; /* Ajusté pour compenser la hauteur de la navbar mobile */
                    }
                }
            </style>
        </header>

        <main class=\"mobile-content-padding\">
            ";
        // line 510
        yield "            ";
        yield from $this->load("components/flash_messages.html.twig", 510)->unwrap()->yield($context);
        // line 511
        yield "
            ";
        // line 513
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 513, $this->source); })()), "flashes", [], "any", false, false, false, 513));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 514
            yield "                <div class=\"container mt-3\">
                    ";
            // line 515
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 516
                yield "                        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                            ";
                // line 517
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fermer\"></button>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 521
            yield "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 523
        yield "
            ";
        // line 524
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 525
        yield "
            ";
        // line 526
        yield from $this->load("components/floating_cart.html.twig", 526)->unwrap()->yield($context);
        // line 527
        yield "
        </main>

        <footer class=\"mt-5 pt-4 pb-3\" style=\"background-color: var(--secondary-color);\">
            <div class=\"container\">
                <!-- Version desktop du footer -->
                <div class=\"row d-none d-md-flex\">
                    <div class=\"col-lg-3 col-md-6 mb-4\">
                        <div class=\"mb-3\">
                            <img src=\"";
        // line 536
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((array_key_exists("site_logo", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["site_logo"]) || array_key_exists("site_logo", $context) ? $context["site_logo"] : (function () { throw new RuntimeError('Variable "site_logo" does not exist.', 536, $this->source); })()), "uploads/logo/logo-shop-bj.svg")) : ("uploads/logo/logo-shop-bj.svg"))), "html", null, true);
        yield "\" alt=\"SHOP BJ\" height=\"60\">
                        </div>
                        <p class=\"text-muted\">Votre destination mode en ligne pour tous vos besoins, à des prix abordables.</p>
                        <div class=\"social-links mb-3\">
                            <a href=\"#\" class=\"me-2 text-primary\"><i class=\"fab fa-instagram\"></i></a>
                            <a href=\"https://www.tiktok.com/@shop.bj2?_t=ZN-8xdyL4Z9YKE&_r=1\" target=\"_blank\" class=\"me-2 text-primary\">TIKTOK<i class=\"fab fa-tiktok\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 mb-4\">
                        <h5 class=\"gradient-text\">Liens rapides</h5>
                        <ul class=\"list-unstyled\">
                            <li class=\"mb-2\"><a href=\"";
        // line 547
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"footer-link\">Accueil</a></li>
                            <li class=\"mb-2\"><a href=\"";
        // line 548
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        yield "\" class=\"footer-link\">Produits</a></li>
                            <li class=\"mb-2\"><a href=\"#\" class=\"footer-link\">À propos</a></li>
                            <li class=\"mb-2\"><a href=\"";
        // line 550
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"footer-link\">Contact</a></li>
                        </ul>
                    </div>
                    <div class=\"col-lg-3 col-md-6 mb-4\">
                        <h5 class=\"gradient-text\">Informations</h5>
                        <ul class=\"list-unstyled\">
                            <li class=\"mb-2\"><a href=\"";
        // line 556
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("legal_notice");
        yield "\" class=\"footer-link\">Mentions légales</a></li>
                            <li class=\"mb-2\"><a href=\"";
        // line 557
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("terms_of_service");
        yield "\" class=\"footer-link\">Conditions générales de vente</a></li>
                            <li class=\"mb-2\"><a href=\"";
        // line 558
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("privacy_policy");
        yield "\" class=\"footer-link\">Politique de confidentialité</a></li>
                        </ul>
                    </div>
                    <div class=\"col-lg-3 col-md-6 mb-4\">
                        <h5 class=\"gradient-text\">Moyens de paiement</h5>
                        <p class=\"text-muted\">Nous acceptons plusieurs méthodes de paiement pour votre commodité.</p>
                        <div class=\"payment-methods mb-3\">
                            <span class=\"me-2\"><i class=\"fab fa-cc-visa fa-2x\"></i></span>
                            <span class=\"me-2\"><i class=\"fab fa-cc-mastercard fa-2x\"></i></span>
                            <span class=\"me-2\"><i class=\"fab fa-cc-paypal fa-2x\"></i></span>
                            <span><i class=\"fab fa-cc-amex fa-2x\"></i></span>
                        </div>
                        <div class=\"payment-methods\">
                            <span class=\"me-2\"><i class=\"fas fa-credit-card fa-2x text-primary\"></i></span>
                            <span class=\"me-2\"><img src=\"";
        // line 572
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/payment/mtn-mobile-money.svg"), "html", null, true);
        yield "\" alt=\"MTN Mobile Money\" height=\"30\" onerror=\"this.style.display='none'\"></span>
                            <span><img src=\"";
        // line 573
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/payment/moov-money.svg"), "html", null, true);
        yield "\" alt=\"Moov Money\" height=\"30\" onerror=\"this.style.display='none'\"></span>
                        </div>
                    </div>
                </div>

                <!-- Version mobile du footer - optimisée et compacte -->
                <div class=\"d-md-none\">
                    <div class=\"text-center mb-3\">
                        <img src=\"";
        // line 581
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((array_key_exists("site_logo", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["site_logo"]) || array_key_exists("site_logo", $context) ? $context["site_logo"] : (function () { throw new RuntimeError('Variable "site_logo" does not exist.', 581, $this->source); })()), "uploads/logo/logo-shop-bj.svg")) : ("uploads/logo/logo-shop-bj.svg"))), "html", null, true);
        yield "\" alt=\"SHOP BJ\" height=\"50\">
                    </div>

                    <!-- Liens rapides en version mobile -->
                    <div class=\"row mb-3\">
                        <div class=\"col-6\">
                            <h6 class=\"gradient-text fw-bold\">Navigation</h6>
                            <ul class=\"list-unstyled small\">
                                <li><a href=\"";
        // line 589
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"footer-link\">Accueil</a></li>
                                <li><a href=\"";
        // line 590
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        yield "\" class=\"footer-link\">Produits</a></li>
                                <li><a href=\"#\" class=\"footer-link\">À propos</a></li>
                                <li><a href=\"";
        // line 592
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"footer-link\">Contact</a></li>
                            </ul>
                        </div>
                        <div class=\"col-6\">
                            <h6 class=\"gradient-text fw-bold\">Informations</h6>
                            <ul class=\"list-unstyled small\">
                                <li><a href=\"";
        // line 598
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("legal_notice");
        yield "\" class=\"footer-link\">Mentions légales</a></li>
                                <li><a href=\"";
        // line 599
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("terms_of_service");
        yield "\" class=\"footer-link\">CGV</a></li>
                                <li><a href=\"";
        // line 600
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("privacy_policy");
        yield "\" class=\"footer-link\">Confidentialité</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Barre de recherche et réseaux sociaux -->
                    <div class=\"mb-3\">
                        <div class=\"social-links text-center\">
                            <a href=\"#\" class=\"mx-2 h4 text-primary\"><i class=\"fab fa-instagram\"></i></a>
                            <a href=\"https://www.tiktok.com/@shop.bj2?_t=ZN-8xdyL4Z9YKE&_r=1\" target=\"_blank\" class=\"me-2 text-primary\">TIKTOK<i class=\"fab fa-tiktok\"></i></a>
                        </div>
                    </div>

                    <!-- Moyens de paiement en version mobile -->
                    <div class=\"mb-3\">
                        <h6 class=\"gradient-text fw-bold text-center\">Moyens de paiement</h6>
                        <div class=\"payment-methods text-center mb-2\">
                            <span class=\"mx-1\"><i class=\"fab fa-cc-visa fa-lg\"></i></span>
                            <span class=\"mx-1\"><i class=\"fab fa-cc-mastercard fa-lg\"></i></span>
                            <span class=\"mx-1\"><i class=\"fab fa-cc-paypal fa-lg\"></i></span>
                            <span class=\"mx-1\"><i class=\"fab fa-cc-amex fa-lg\"></i></span>
                        </div>
                        <div class=\"payment-methods text-center\">
                            <span class=\"me-2\"><i class=\"fas fa-credit-card fa-2x text-primary\"></i></span>
                            <span class=\"me-2\"><img src=\"";
        // line 624
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/payment/mtn-mobile-money.svg"), "html", null, true);
        yield "\" alt=\"MTN Mobile Money\" height=\"25\" onerror=\"this.style.display='none'\"></span>
                            <span><img src=\"";
        // line 625
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/payment/moov-money.svg"), "html", null, true);
        yield "\" alt=\"Moov Money\" height=\"25\" onerror=\"this.style.display='none'\"></span>
                        </div>
                    </div>
                </div>

                <hr>

                <div class=\"row\">
                    <div class=\"col-md-6 text-center text-md-start\">
                        <p class=\"text-muted mb-0 small\">&copy; ";
        // line 634
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " SHOP BJ - Tous droits réservés</p>
                    </div>
                    <div class=\"col-md-6 text-center text-md-end\">
                        <div class=\"payment-icons\">
                            <i class=\"fab fa-cc-visa fa-lg mx-1\"></i>
                            <i class=\"fab fa-cc-mastercard fa-lg mx-1\"></i>
                            <i class=\"fab fa-cc-paypal fa-lg mx-1\"></i>
                            <i class=\"fab fa-cc-amex fa-lg mx-1\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap JS Bundle with Popper -->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>

        <!-- Custom JavaScript -->
        <!-- Flash Messages en priorité pour éviter les conflits -->
        <script src=\"";
        // line 653
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/flash-messages.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 654
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/cart.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 655
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/floating-cart.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 656
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/quick-add-cart.js"), "html", null, true);
        yield "\"></script>

        <!-- Initialisation du total du panier flottant -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Vérifie si l'élément existe et si le panier n'est pas vide
                const floatingCartTotal = document.getElementById('floating-cart-total');
                const cartCount = document.querySelector('.cart-count');

                if (floatingCartTotal && cartCount && !cartCount.classList.contains('d-none')) {
                    // Récupère le total du panier depuis le serveur
                    fetch('/cart', {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success && data.total !== undefined) {
                            updateFloatingCartTotal(data.total);
                        }
                    })
                    .catch(error => {
                        console.error('Erreur lors de la récupération du total du panier:', error);
                    });
                }
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Initialisation des tooltips Bootstrap
                const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle=\"tooltip\"]');
                const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));

                // Product quantity selectors
                const quantityMinus = document.getElementById('quantity-minus');
                const quantityPlus = document.getElementById('quantity-plus');
                const quantityInput = document.getElementById('quantity');

                if (quantityMinus && quantityPlus && quantityInput) {
                    quantityMinus.addEventListener('click', function() {
                        let value = parseInt(quantityInput.value);
                        if (value > 1) {
                            quantityInput.value = value - 1;
                        }
                    });

                    quantityPlus.addEventListener('click', function() {
                        let value = parseInt(quantityInput.value);
                        let max = parseInt(quantityInput.getAttribute('max'));
                        if (value < max) {
                            quantityInput.value = value + 1;
                        }
                    });
                }
            });
        </script>

        <!-- Script pour afficher/masquer les mots de passe -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Gestion des boutons d'affichage/masquage du mot de passe
                const togglePasswordButtons = document.querySelectorAll('.togglePassword');

                togglePasswordButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const targetId = this.getAttribute('data-target');
                        const input = document.getElementById(targetId);

                        // Inverse le type de l'input (password <-> text)
                        if (input.type === 'password') {
                            input.type = 'text';
                            this.innerHTML = '<i class=\"bi bi-eye-slashi></i>';
                        } else {
                            input.type = 'password';
                            this.innerHTML = '<i class=\"bi bi-eye\"></i>';
                        }
                    });
                });
            });
        </script>
        <script>
            function dismissFlashMessage(id) {
                localStorage.setItem(id, 'dismissed');
            }

            document.addEventListener('DOMContentLoaded', () => {
                document.querySelectorAll('[data-id^=\"flash-\"]').forEach(el => {
                    const id = el.getAttribute('data-id');
                    if (localStorage.getItem(id) === 'dismissed') {
                        el.remove();
                    }
                });
            });
        </script>



        ";
        // line 754
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 755
        yield "
        <!-- KKiaPay Integration -->


        <!-- Modal pour l'ajout rapide au panier -->
        <div class=\"modal fade\" id=\"quickAddToCartModal\" tabindex=\"-1\" aria-labelledby=\"quickAddToCartModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"quickAddToCartModalLabel\">Ajouter au panier</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"row mb-3\">
                            <div class=\"col\">
                                <div class=\"product-info\">
                                    <h4 id=\"quick-product-name\">Nom du produit</h4>
                                    <p id=\"quick-product-price\" class=\"text-primary fw-bold mb-3\">0 FCFA</p>
                                    <div id=\"quick-product-image\" class=\"text-center mb-3\">
                                        <img src=\"\" alt=\"Image du produit\" class=\"img-fluid\" style=\"max-height: 150px;\">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id=\"options-error\" class=\"alert alert-danger d-none mb-3\">
                            <span id=\"error-message\">Veuillez sélectionner les options requises</span>
                        </div>

                        <div id=\"size-options-container\" class=\"mb-3\">
                            <label class=\"form-label fw-bold\">Taille:</label>
                            <div id=\"size-options\" class=\"btn-group d-flex flex-wrap\" role=\"group\" aria-label=\"Tailles disponibles\">
                                <!-- Les options de taille seront ajoutées ici dynamiquement -->
                            </div>
                            <div class=\"size-feedback text-danger small mt-1 d-none\">
                                Veuillez sélectionner une taille
                            </div>
                        </div>

                        <div id=\"color-options-container\" class=\"mb-3\">
                            <label class=\"form-label fw-bold\">Couleur:</label>
                            <div id=\"color-options\" class=\"btn-group d-flex flex-wrap\" role=\"group\" aria-label=\"Couleurs disponibles\">
                                <!-- Les options de couleur seront ajoutées ici dynamiquement -->
                            </div>
                            <div class=\"color-feedback text-danger small mt-1 d-none\">
                                Veuillez sélectionner une couleur
                            </div>
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"modal-product-quantity\" class=\"form-label fw-bold\">Quantité:</label>
                            <div class=\"input-group\">
                                <button id=\"modal-decrease-quantity\" class=\"btn btn-outline-secondary\" type=\"button\">-</button>
                                <input type=\"number\" id=\"modal-product-quantity\" class=\"form-control text-center\" value=\"1\" min=\"1\" max=\"10\">
                                <button id=\"modal-increase-quantity\" class=\"btn btn-outline-secondary\" type=\"button\">+</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <button type=\"button\" class=\"btn btn-primary\" id=\"modal-add-to-cart\">Ajouter au panier</button>
                    </div>
                </div>
            </div>
        </div>
       

    </body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("site_name", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["site_name"]) || array_key_exists("site_name", $context) ? $context["site_name"] : (function () { throw new RuntimeError('Variable "site_name" does not exist.', 6, $this->source); })()), "SHOP BJ")) : ("SHOP BJ")), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 231
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 524
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 754
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  1270 => 754,  1254 => 524,  1238 => 231,  1221 => 6,  1145 => 755,  1143 => 754,  1042 => 656,  1038 => 655,  1034 => 654,  1030 => 653,  1008 => 634,  996 => 625,  992 => 624,  965 => 600,  961 => 599,  957 => 598,  948 => 592,  943 => 590,  939 => 589,  928 => 581,  917 => 573,  913 => 572,  896 => 558,  892 => 557,  888 => 556,  879 => 550,  874 => 548,  870 => 547,  856 => 536,  845 => 527,  843 => 526,  840 => 525,  838 => 524,  835 => 523,  828 => 521,  818 => 517,  813 => 516,  809 => 515,  806 => 514,  801 => 513,  798 => 511,  795 => 510,  667 => 384,  661 => 381,  658 => 380,  651 => 376,  645 => 375,  639 => 373,  637 => 372,  632 => 369,  627 => 367,  622 => 366,  617 => 364,  614 => 363,  609 => 361,  606 => 360,  604 => 359,  600 => 358,  596 => 357,  591 => 356,  589 => 355,  572 => 341,  566 => 338,  563 => 337,  560 => 335,  557 => 334,  546 => 331,  543 => 330,  538 => 329,  535 => 328,  530 => 325,  524 => 322,  511 => 312,  508 => 311,  505 => 310,  499 => 309,  491 => 307,  488 => 306,  483 => 305,  481 => 304,  473 => 299,  465 => 298,  457 => 297,  453 => 295,  451 => 294,  441 => 287,  435 => 284,  431 => 282,  424 => 278,  418 => 277,  413 => 275,  410 => 274,  408 => 273,  403 => 270,  398 => 268,  393 => 267,  388 => 265,  385 => 264,  380 => 262,  377 => 261,  375 => 260,  371 => 259,  367 => 258,  362 => 257,  360 => 256,  347 => 246,  337 => 239,  333 => 238,  328 => 235,  326 => 234,  322 => 232,  320 => 231,  317 => 230,  311 => 228,  309 => 227,  303 => 224,  297 => 221,  98 => 27,  94 => 26,  79 => 14,  72 => 10,  68 => 9,  64 => 8,  60 => 7,  56 => 6,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}{{ site_name|default('SHOP BJ') }}{% endblock %}</title>
        <link rel=\"icon\" href=\"{{ asset('favicon.ico') }}?v=2\" type=\"image/x-icon\">
        <link rel=\"icon\" href=\"{{ asset('favicon.svg') }}?v=2\" type=\"image/svg+xml\">
        <link rel=\"apple-touch-icon\" href=\"{{ asset('apple-touch-icon.png') }}?v=2\">
        <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}?v=2\" type=\"image/x-icon\">
        <meta name=\"theme-color\" content=\"#F58C1E\">
        <meta name=\"mobile-web-app-capable\" content=\"yes\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\">
        <link rel=\"manifest\" href=\"{{ asset('manifest.json') }}?v=2\">

        <!-- Bootstrap 5 CSS -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

        <!-- Bootstrap Icons -->
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css\">

        <!-- Font Awesome -->
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css\" rel=\"stylesheet\">

        <!-- Color Swatches CSS -->
        <link href=\"{{ asset('css/color-swatches.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('css/search-bar-new.css') }}?v={{ \"now\"|date('YmdHis') }}\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        <style>
            :root {
                --primary-color: #FF6B6B; /* Rouge-corail vif */
                --primary-dark: #E05252; /* Rouge-corail foncé */
                --secondary-color: #FFF3F3; /* Rose très clair */
                --accent-color: #06D6A0; /* Vert turquoise */
                --accent-light: #7AE7C7; /* Vert turquoise clair */
                --text-color: #333333;
                --light-gray: #F8F8F8;
                --border-color: #E5E5E5;

                /* Couleurs secondaires pour plus de diversité */
                --neutral-pop: #FFD166; /* Jaune soleil */
                --neutral-soft: #FFC2C2; /* Rose pâle */
            }

            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                color: var(--text-color);
                background-color: #FFFFFF;
                padding-top: 160px; /* Hauteur de la navbar + barre de recherche */ /* Hauteur de la navbar + barre de recherche */
            }

            /* Style pour la barre de recherche principale */
            /* Style pour la barre de recherche principale - Style déplacé dans search-bar-new.css */
            .global-search-bar {
                background-color: transparent !important;
                position: fixed;
                top: 56px;
                left: 0;
                right: 0;
                padding: 10px 0;
                z-index: 100;
                box-shadow: none;
            }

            /* Dégradés verts */
            .gradient-bg {
                background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
                color: white;
            }

            .gradient-text {
                background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                display: inline-block;
            }

            .gradient-border {
                position: relative;
                border: none;
            }

            .gradient-border::after {
                content: '';
                position: absolute;
                bottom: -2px;
                left: 0;
                width: 100%;
                height: 2px;
                background: linear-gradient(to right, var(--primary-color), var(--accent-color));
            }

            /* Boutons neutres pour tous genres */
            .btn-neutral {
                background-color: var(--neutral-soft);
                border-color: var(--neutral-soft);
                color: var(--text-color);
            }

            .btn-neutral:hover {
                background-color: #C9B9A9; /* Légèrement plus foncé */
                border-color: #C9B9A9;
                color: var(--text-color);
            }

            .btn-accent {
                background-color: var(--neutral-pop);
                border-color: var(--neutral-pop);
                color: white;
            }

            .btn-accent:hover {
                background-color: #BF9F31; /* Or légèrement plus foncé */
                border-color: #BF9F31;
                color: white;
            }

            .navbar-brand {
                font-weight: bold;
                font-size: 1.5rem;
            }

            .nav-link {
                font-weight: 500;
            }

            .btn-primary {
                background-color: var(--primary-color);
                border-color: var(--primary-color);
            }

            .btn-primary:hover, .btn-primary:focus {
                background-color: var(--primary-dark);
                border-color: var(--primary-dark);
            }

            .btn-outline-primary {
                color: var(--primary-color);
                border-color: var(--primary-color);
            }

            .btn-outline-primary:hover {
                background-color: var(--primary-color);
                border-color: var(--primary-color);
            }

            .bg-primary {
                background-color: var(--primary-color) !important;
            }

            .text-primary {
                color: var(--primary-color) !important;
            }

            .hero-banner {
                background-color: var(--secondary-color);
                border-radius: 0.5rem;
            }

            .feature-box {
                border-radius: 0.5rem;
                background-color: var(--light-gray);
                transition: transform 0.3s ease;
            }

            .feature-box:hover {
                transform: translateY(-5px);
            }

            .product-card {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                border: 1px solid var(--border-color);
            }

            .product-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            }

            .product-title {
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
            }

            .category-card {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .category-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
                background-color: var(--primary-color);
                color: white;
            }

            .category-card:hover .text-primary {
                color: white !important;
            }

            footer {
                background-color: var(--secondary-color);
            }

            .footer-link {
                color: var(--text-color);
                text-decoration: none;
            }

            .footer-link:hover {
                color: var(--primary-color);
                text-decoration: underline;
            }
        </style>

        <!-- Carousel CSS -->
        <link href=\"{{ asset('css/carousel.css') }}\" rel=\"stylesheet\">

        <!-- Ajustements responsifs -->
        <link href=\"{{ asset('css/responsive-fix.css') }}\" rel=\"stylesheet\">

        <!-- Thème personnalisé -->
        {% if theme_css_path is defined and theme_css_path is not empty %}
        <link href=\"{{ asset(theme_css_path) }}\" rel=\"stylesheet\">
        {% endif %}

        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% include \"search_bar.html.twig\" %}
        <header>
            <nav class=\"navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm py-2\">
                <div class=\"container\">
                    <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">
                        <img src=\"{{ asset(site_logo|default('uploads/logo/logo-shop-bj.svg')) }}\" alt=\"SHOP BJ\" height=\"40\" class=\"d-inline-block align-top\">
                    </a>
                    <!-- Barre de navigation mobile optimisée et complètement visible -->
                    <div class=\"d-lg-none w-100 pt-2\">
                        <!-- Boutons d'action rapide pour mobile en haut -->
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <!-- Logo centré pour mobile -->
                            <a href=\"{{ path('app_home') }}\" class=\"btn nav-icon-btn me-2\">
                                <i class=\"fas fa-home\"></i>
                            </a>

                            <!-- Action utilisateur -->
                            <div class=\"dropdown\">
                                <button class=\"btn nav-icon-btn\" type=\"button\" id=\"userDropdownMobile\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" title=\"Mon compte\">
                                    <i class=\"fas fa-user\"></i>
                                </button>
                                <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"userDropdownMobile\">
                                    {% if app.user %}
                                        <li><a class=\"dropdown-item\" href=\"{{ path('app_profile') }}\">Mon compte</a></li>
                                        <li><a class=\"dropdown-item\" href=\"{{ path('app_profile_orders') }}\">Mes commandes</a></li>
                                        <li><a class=\"dropdown-item\" href=\"{{ path('wishlist_index') }}\">Mes favoris</a></li>
                                        {% if is_granted('ROLE_ADMIN') %}
                                            <li><hr class=\"dropdown-divider\"></li>
                                            <li><a class=\"dropdown-item\" href=\"{{ path('admin_index') }}\">Administration</a></li>
                                        {% endif %}
                                        <li><hr class=\"dropdown-divider\"></li>
                                        <li><a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Déconnexion</a></li>
                                    {% else %}
                                        <li><a class=\"dropdown-item\" href=\"{{ path('app_login') }}\">Connexion</a></li>
                                        <li><a class=\"dropdown-item\" href=\"{{ path('app_register') }}\">Inscription</a></li>
                                    {% endif %}
                                </ul>
                            </div>

                            {% if app.user %}
                            <!-- Favoris -->
                            <a href=\"{{ path('wishlist_index') }}\" class=\"btn nav-icon-btn position-relative\">
                                <i class=\"fas fa-heart\"></i>
                                <span class=\"position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger wishlist-counter {% if not wishlist_count|default(0) %}d-none{% endif %}\">
                                    {{ wishlist_count|default(0) }}
                                </span>
                            </a>
                            {% endif %}

                            <!-- Panier -->
                            <a href=\"{{ path('cart_index') }}\" class=\"btn nav-icon-btn position-relative\">
                                <i class=\"fas fa-shopping-bag\"></i>
                                <span class=\"position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger cart-count\">
                                    {{ cart_count|default(0) }}
                                </span>
                            </a>
                        </div>

                        <!-- Navigation directe pour mobile -->
                        <div class=\"mobile-search-bar mb-2\">
                            {% include \"components/search_mobile.html.twig\" %}
                        </div>
                        <div class=\"mobile-nav-tabs d-flex justify-content-between mb-2\">
                            <a href=\"{{ path('app_home') }}\" class=\"btn btn-sm mobile-nav-tab {% if app.request.get('_route') == 'app_home' %}active{% endif %}\">Accueil</a>
                            <a href=\"{{ path('product_index') }}\" class=\"btn btn-sm mobile-nav-tab {% if app.request.get('_route') == 'product_index' %}active{% endif %}\">Nouveautés</a>
                            <a href=\"{{ path('product_index') }}\" class=\"btn btn-sm mobile-nav-tab\">Promos</a>
                        </div>

                        <!-- Catégories principales pour mobile -->
                        <div class=\"mobile-categories d-flex justify-content-between\">
                            {% if featuredCategories is defined and featuredCategories is not empty %}
                                {% for category in featuredCategories %}
                                    {% if category.name|lower == 'hommes' or category.name|lower == 'femmes' %}
                                        <a href=\"{{ path('category_show', {'id': category.id}) }}\" class=\"btn btn-outline-primary mobile-category-btn\">{{ category.name }}</a>
                                    {% endif %}
                                {% endfor %}
                            {% endif %}

                            <a href=\"{{ path('category_list') }}\" class=\"btn btn-outline-primary mobile-category-btn\">
                                Catégories
                            </a>
                        </div>
                    </div>

                    <!-- Navigation desktop uniquement -->
                    <div class=\"d-none d-lg-block mt-2\">
                        <ul class=\"navbar-nav mx-auto\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link px-3\" href=\"{{ path('app_home') }}\">ACCUEIL</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link px-3\" href=\"{{ path('product_index') }}\">NOUVEAUTÉS</a>
                            </li>
                            {# Catégories en vedette #}
                            {% if featuredCategories is defined and featuredCategories is not empty %}
                                {% for category in featuredCategories %}
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link px-3\" href=\"{{ path('category_show', {'id': category.id}) }}\">{{ category.name|upper }}</a>
                                    </li>
                                {% endfor %}
                            {% endif %}

                            {# Lien vers toutes les catégories #}
                            <li class=\"nav-item\">
                                <a class=\"nav-link px-3\" href=\"{{ path('product_index') }}\">PROMOS</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link px-3\" href=\"{{ path('app_contact') }}\">CONTACT</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Section visible uniquement sur desktop -->
                        <div class=\"d-none d-lg-flex align-items-center\">
                            <div class=\"nav-icon-group d-flex\">

                                <div class=\"dropdown\">
                                    <button class=\"btn nav-icon-btn\" type=\"button\" id=\"userDropdown\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <i class=\"fas fa-user\"></i>
                                    </button>
                                    <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"userDropdown\">
                                        {% if app.user %}
                                            <li><a class=\"dropdown-item\" href=\"{{ path('app_profile') }}\">Mon compte</a></li>
                                            <li><a class=\"dropdown-item\" href=\"{{ path('app_profile_orders') }}\">Mes commandes</a></li>
                                            <li><a class=\"dropdown-item\" href=\"{{ path('wishlist_index') }}\">Mes favoris</a></li>
                                            {% if is_granted('ROLE_ADMIN') %}
                                                <li><hr class=\"dropdown-divider\"></li>
                                                <li><a class=\"dropdown-item\" href=\"{{ path('admin_index') }}\">Administration</a></li>
                                            {% endif %}
                                            <li><hr class=\"dropdown-divider\"></li>
                                            <li><a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Déconnexion</a></li>
                                        {% else %}
                                            <li><a class=\"dropdown-item\" href=\"{{ path('app_login') }}\">Connexion</a></li>
                                            <li><a class=\"dropdown-item\" href=\"{{ path('app_register') }}\">Inscription</a></li>
                                        {% endif %}
                                    </ul>
                                </div>

                                {% if app.user %}
                                <a href=\"{{ path('wishlist_index') }}\" class=\"btn nav-icon-btn position-relative\">
                                    <i class=\"fas fa-heart\"></i>
                                    <span class=\"position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger wishlist-counter {% if not wishlist_count|default(0) %}d-none{% endif %}\">
                                        {{ wishlist_count|default(0) }}
                                    </span>
                                </a>
                                {% endif %}

                                <a href=\"{{ path('cart_index') }}\" class=\"btn nav-icon-btn position-relative\">
                                    <i class=\"fas fa-shopping-bag\"></i>
                                    <span class=\"position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger cart-count\">
                                        {{ cart_count|default(0) }}
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>


            <style>
                .nav-icon-btn {
                    font-size: 1.1rem;
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: #333;
                    background: transparent;
                    border: none;
                    padding: 0;
                    margin: 0 5px;
                    border-radius: 50%;
                    transition: all 0.2s ease;
                }

                .nav-icon-btn:hover {
                    color: var(--primary-color);
                    background-color: rgba(0, 0, 0, 0.05);
                }

                .nav-icon-group {
                    display: flex;
                    align-items: center;
                }

                .navbar .nav-link {
                    font-size: 0.9rem;
                    font-weight: 500;
                    letter-spacing: 0.5px;
                    transition: color 0.2s ease;
                }

                .navbar .nav-link:hover {
                    color: var(--primary-color);
                }

                /* Style pour les onglets de navigation mobile */
                .mobile-nav-tab {
                    flex: 1;
                    padding: 0.5rem 0.25rem;
                    text-align: center;
                    border: none;
                    border-radius: 4px;
                    font-weight: 500;
                    font-size: 0.9rem;
                    color: var(--dark-color);
                    background-color: #f5f5f5;
                    margin: 0 0.15rem;
                    transition: all 0.2s ease;
                }

                .mobile-nav-tab:hover, .mobile-nav-tab.active {
                    background-color: var(--primary-color);
                    color: white;
                }

                /* Style pour les boutons de catégories */
                .mobile-category-btn {
                    flex: 1;
                    text-align: center;
                    padding: 0.5rem;
                    border-radius: 4px;
                    font-weight: 500;
                    margin: 0 0.15rem;
                    font-size: 0.9rem;
                    text-transform: uppercase;
                    letter-spacing: 0.5px;
                }

                /* Styles pour les appareils mobiles */
                @media (max-width: 991.98px) {
                    /* Navigation principale */
                    .navbar .navbar-nav {
                        margin: 1rem 0;
                    }

                    .navbar .nav-link {
                        padding: 0.6rem 0;
                        font-size: 1rem;
                    }

                    /* Ajustement du logo pour libérer de l'espace */
                    .navbar-brand img {
                        height: 35px;
                    }

                    /* Ajustement de la navbar mobile */
                    .navbar {
                        padding-top: 0.5rem;
                        padding-bottom: 0.5rem;
                    }

                    /* Meilleure visibilité des badges de notification */
                    .badge.cart-count {
                        font-size: 0.65rem;
                        padding: 0.2rem 0.35rem;
                    }

                    /* Icônes pour mobile */
                    .nav-icon-btn {
                        color: var(--primary-color);
                        background-color: rgba(var(--primary-rgb), 0.05);
                    }

                    /* Espace pour le contenu sous la navbar mobile */
                    .mobile-content-padding {
                        padding-top: 170px; /* Ajusté pour compenser la hauteur de la navbar mobile */
                    }
                }
            </style>
        </header>

        <main class=\"mobile-content-padding\">
            {# ✅ UNIQUEMENT les messages flash personnalisés #}
            {% include 'components/flash_messages.html.twig' %}

            {# ✅ UNIQUEMENT les messages flash Symfony classiques (pour la compatibilité) #}
            {% for type, messages in app.flashes %}
                <div class=\"container mt-3\">
                    {% for message in messages %}
                        <div class=\"alert alert-{{ type }} alert-dismissible fade show\" role=\"alert\">
                            {{ message }}
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fermer\"></button>
                        </div>
                    {% endfor %}
                </div>
            {% endfor %}

            {% block body %}{% endblock %}

            {% include 'components/floating_cart.html.twig' %}

        </main>

        <footer class=\"mt-5 pt-4 pb-3\" style=\"background-color: var(--secondary-color);\">
            <div class=\"container\">
                <!-- Version desktop du footer -->
                <div class=\"row d-none d-md-flex\">
                    <div class=\"col-lg-3 col-md-6 mb-4\">
                        <div class=\"mb-3\">
                            <img src=\"{{ asset(site_logo|default('uploads/logo/logo-shop-bj.svg')) }}\" alt=\"SHOP BJ\" height=\"60\">
                        </div>
                        <p class=\"text-muted\">Votre destination mode en ligne pour tous vos besoins, à des prix abordables.</p>
                        <div class=\"social-links mb-3\">
                            <a href=\"#\" class=\"me-2 text-primary\"><i class=\"fab fa-instagram\"></i></a>
                            <a href=\"https://www.tiktok.com/@shop.bj2?_t=ZN-8xdyL4Z9YKE&_r=1\" target=\"_blank\" class=\"me-2 text-primary\">TIKTOK<i class=\"fab fa-tiktok\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 mb-4\">
                        <h5 class=\"gradient-text\">Liens rapides</h5>
                        <ul class=\"list-unstyled\">
                            <li class=\"mb-2\"><a href=\"{{ path('app_home') }}\" class=\"footer-link\">Accueil</a></li>
                            <li class=\"mb-2\"><a href=\"{{ path('product_index') }}\" class=\"footer-link\">Produits</a></li>
                            <li class=\"mb-2\"><a href=\"#\" class=\"footer-link\">À propos</a></li>
                            <li class=\"mb-2\"><a href=\"{{ path('app_contact') }}\" class=\"footer-link\">Contact</a></li>
                        </ul>
                    </div>
                    <div class=\"col-lg-3 col-md-6 mb-4\">
                        <h5 class=\"gradient-text\">Informations</h5>
                        <ul class=\"list-unstyled\">
                            <li class=\"mb-2\"><a href=\"{{ path('legal_notice') }}\" class=\"footer-link\">Mentions légales</a></li>
                            <li class=\"mb-2\"><a href=\"{{ path('terms_of_service') }}\" class=\"footer-link\">Conditions générales de vente</a></li>
                            <li class=\"mb-2\"><a href=\"{{ path('privacy_policy') }}\" class=\"footer-link\">Politique de confidentialité</a></li>
                        </ul>
                    </div>
                    <div class=\"col-lg-3 col-md-6 mb-4\">
                        <h5 class=\"gradient-text\">Moyens de paiement</h5>
                        <p class=\"text-muted\">Nous acceptons plusieurs méthodes de paiement pour votre commodité.</p>
                        <div class=\"payment-methods mb-3\">
                            <span class=\"me-2\"><i class=\"fab fa-cc-visa fa-2x\"></i></span>
                            <span class=\"me-2\"><i class=\"fab fa-cc-mastercard fa-2x\"></i></span>
                            <span class=\"me-2\"><i class=\"fab fa-cc-paypal fa-2x\"></i></span>
                            <span><i class=\"fab fa-cc-amex fa-2x\"></i></span>
                        </div>
                        <div class=\"payment-methods\">
                            <span class=\"me-2\"><i class=\"fas fa-credit-card fa-2x text-primary\"></i></span>
                            <span class=\"me-2\"><img src=\"{{ asset('uploads/payment/mtn-mobile-money.svg') }}\" alt=\"MTN Mobile Money\" height=\"30\" onerror=\"this.style.display='none'\"></span>
                            <span><img src=\"{{ asset('uploads/payment/moov-money.svg') }}\" alt=\"Moov Money\" height=\"30\" onerror=\"this.style.display='none'\"></span>
                        </div>
                    </div>
                </div>

                <!-- Version mobile du footer - optimisée et compacte -->
                <div class=\"d-md-none\">
                    <div class=\"text-center mb-3\">
                        <img src=\"{{ asset(site_logo|default('uploads/logo/logo-shop-bj.svg')) }}\" alt=\"SHOP BJ\" height=\"50\">
                    </div>

                    <!-- Liens rapides en version mobile -->
                    <div class=\"row mb-3\">
                        <div class=\"col-6\">
                            <h6 class=\"gradient-text fw-bold\">Navigation</h6>
                            <ul class=\"list-unstyled small\">
                                <li><a href=\"{{ path('app_home') }}\" class=\"footer-link\">Accueil</a></li>
                                <li><a href=\"{{ path('product_index') }}\" class=\"footer-link\">Produits</a></li>
                                <li><a href=\"#\" class=\"footer-link\">À propos</a></li>
                                <li><a href=\"{{ path('app_contact') }}\" class=\"footer-link\">Contact</a></li>
                            </ul>
                        </div>
                        <div class=\"col-6\">
                            <h6 class=\"gradient-text fw-bold\">Informations</h6>
                            <ul class=\"list-unstyled small\">
                                <li><a href=\"{{ path('legal_notice') }}\" class=\"footer-link\">Mentions légales</a></li>
                                <li><a href=\"{{ path('terms_of_service') }}\" class=\"footer-link\">CGV</a></li>
                                <li><a href=\"{{ path('privacy_policy') }}\" class=\"footer-link\">Confidentialité</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Barre de recherche et réseaux sociaux -->
                    <div class=\"mb-3\">
                        <div class=\"social-links text-center\">
                            <a href=\"#\" class=\"mx-2 h4 text-primary\"><i class=\"fab fa-instagram\"></i></a>
                            <a href=\"https://www.tiktok.com/@shop.bj2?_t=ZN-8xdyL4Z9YKE&_r=1\" target=\"_blank\" class=\"me-2 text-primary\">TIKTOK<i class=\"fab fa-tiktok\"></i></a>
                        </div>
                    </div>

                    <!-- Moyens de paiement en version mobile -->
                    <div class=\"mb-3\">
                        <h6 class=\"gradient-text fw-bold text-center\">Moyens de paiement</h6>
                        <div class=\"payment-methods text-center mb-2\">
                            <span class=\"mx-1\"><i class=\"fab fa-cc-visa fa-lg\"></i></span>
                            <span class=\"mx-1\"><i class=\"fab fa-cc-mastercard fa-lg\"></i></span>
                            <span class=\"mx-1\"><i class=\"fab fa-cc-paypal fa-lg\"></i></span>
                            <span class=\"mx-1\"><i class=\"fab fa-cc-amex fa-lg\"></i></span>
                        </div>
                        <div class=\"payment-methods text-center\">
                            <span class=\"me-2\"><i class=\"fas fa-credit-card fa-2x text-primary\"></i></span>
                            <span class=\"me-2\"><img src=\"{{ asset('uploads/payment/mtn-mobile-money.svg') }}\" alt=\"MTN Mobile Money\" height=\"25\" onerror=\"this.style.display='none'\"></span>
                            <span><img src=\"{{ asset('uploads/payment/moov-money.svg') }}\" alt=\"Moov Money\" height=\"25\" onerror=\"this.style.display='none'\"></span>
                        </div>
                    </div>
                </div>

                <hr>

                <div class=\"row\">
                    <div class=\"col-md-6 text-center text-md-start\">
                        <p class=\"text-muted mb-0 small\">&copy; {{ \"now\"|date(\"Y\") }} SHOP BJ - Tous droits réservés</p>
                    </div>
                    <div class=\"col-md-6 text-center text-md-end\">
                        <div class=\"payment-icons\">
                            <i class=\"fab fa-cc-visa fa-lg mx-1\"></i>
                            <i class=\"fab fa-cc-mastercard fa-lg mx-1\"></i>
                            <i class=\"fab fa-cc-paypal fa-lg mx-1\"></i>
                            <i class=\"fab fa-cc-amex fa-lg mx-1\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap JS Bundle with Popper -->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>

        <!-- Custom JavaScript -->
        <!-- Flash Messages en priorité pour éviter les conflits -->
        <script src=\"{{ asset('js/flash-messages.js') }}\"></script>
        <script src=\"{{ asset('js/cart.js') }}\"></script>
        <script src=\"{{ asset('js/floating-cart.js') }}\"></script>
        <script src=\"{{ asset('js/quick-add-cart.js') }}\"></script>

        <!-- Initialisation du total du panier flottant -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Vérifie si l'élément existe et si le panier n'est pas vide
                const floatingCartTotal = document.getElementById('floating-cart-total');
                const cartCount = document.querySelector('.cart-count');

                if (floatingCartTotal && cartCount && !cartCount.classList.contains('d-none')) {
                    // Récupère le total du panier depuis le serveur
                    fetch('/cart', {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success && data.total !== undefined) {
                            updateFloatingCartTotal(data.total);
                        }
                    })
                    .catch(error => {
                        console.error('Erreur lors de la récupération du total du panier:', error);
                    });
                }
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Initialisation des tooltips Bootstrap
                const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle=\"tooltip\"]');
                const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));

                // Product quantity selectors
                const quantityMinus = document.getElementById('quantity-minus');
                const quantityPlus = document.getElementById('quantity-plus');
                const quantityInput = document.getElementById('quantity');

                if (quantityMinus && quantityPlus && quantityInput) {
                    quantityMinus.addEventListener('click', function() {
                        let value = parseInt(quantityInput.value);
                        if (value > 1) {
                            quantityInput.value = value - 1;
                        }
                    });

                    quantityPlus.addEventListener('click', function() {
                        let value = parseInt(quantityInput.value);
                        let max = parseInt(quantityInput.getAttribute('max'));
                        if (value < max) {
                            quantityInput.value = value + 1;
                        }
                    });
                }
            });
        </script>

        <!-- Script pour afficher/masquer les mots de passe -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Gestion des boutons d'affichage/masquage du mot de passe
                const togglePasswordButtons = document.querySelectorAll('.togglePassword');

                togglePasswordButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const targetId = this.getAttribute('data-target');
                        const input = document.getElementById(targetId);

                        // Inverse le type de l'input (password <-> text)
                        if (input.type === 'password') {
                            input.type = 'text';
                            this.innerHTML = '<i class=\"bi bi-eye-slashi></i>';
                        } else {
                            input.type = 'password';
                            this.innerHTML = '<i class=\"bi bi-eye\"></i>';
                        }
                    });
                });
            });
        </script>
        <script>
            function dismissFlashMessage(id) {
                localStorage.setItem(id, 'dismissed');
            }

            document.addEventListener('DOMContentLoaded', () => {
                document.querySelectorAll('[data-id^=\"flash-\"]').forEach(el => {
                    const id = el.getAttribute('data-id');
                    if (localStorage.getItem(id) === 'dismissed') {
                        el.remove();
                    }
                });
            });
        </script>



        {% block javascripts %}{% endblock %}

        <!-- KKiaPay Integration -->


        <!-- Modal pour l'ajout rapide au panier -->
        <div class=\"modal fade\" id=\"quickAddToCartModal\" tabindex=\"-1\" aria-labelledby=\"quickAddToCartModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"quickAddToCartModalLabel\">Ajouter au panier</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"row mb-3\">
                            <div class=\"col\">
                                <div class=\"product-info\">
                                    <h4 id=\"quick-product-name\">Nom du produit</h4>
                                    <p id=\"quick-product-price\" class=\"text-primary fw-bold mb-3\">0 FCFA</p>
                                    <div id=\"quick-product-image\" class=\"text-center mb-3\">
                                        <img src=\"\" alt=\"Image du produit\" class=\"img-fluid\" style=\"max-height: 150px;\">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id=\"options-error\" class=\"alert alert-danger d-none mb-3\">
                            <span id=\"error-message\">Veuillez sélectionner les options requises</span>
                        </div>

                        <div id=\"size-options-container\" class=\"mb-3\">
                            <label class=\"form-label fw-bold\">Taille:</label>
                            <div id=\"size-options\" class=\"btn-group d-flex flex-wrap\" role=\"group\" aria-label=\"Tailles disponibles\">
                                <!-- Les options de taille seront ajoutées ici dynamiquement -->
                            </div>
                            <div class=\"size-feedback text-danger small mt-1 d-none\">
                                Veuillez sélectionner une taille
                            </div>
                        </div>

                        <div id=\"color-options-container\" class=\"mb-3\">
                            <label class=\"form-label fw-bold\">Couleur:</label>
                            <div id=\"color-options\" class=\"btn-group d-flex flex-wrap\" role=\"group\" aria-label=\"Couleurs disponibles\">
                                <!-- Les options de couleur seront ajoutées ici dynamiquement -->
                            </div>
                            <div class=\"color-feedback text-danger small mt-1 d-none\">
                                Veuillez sélectionner une couleur
                            </div>
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"modal-product-quantity\" class=\"form-label fw-bold\">Quantité:</label>
                            <div class=\"input-group\">
                                <button id=\"modal-decrease-quantity\" class=\"btn btn-outline-secondary\" type=\"button\">-</button>
                                <input type=\"number\" id=\"modal-product-quantity\" class=\"form-control text-center\" value=\"1\" min=\"1\" max=\"10\">
                                <button id=\"modal-increase-quantity\" class=\"btn btn-outline-secondary\" type=\"button\">+</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <button type=\"button\" class=\"btn btn-primary\" id=\"modal-add-to-cart\">Ajouter au panier</button>
                    </div>
                </div>
            </div>
        </div>
       

    </body>
</html>", "base.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/base.html.twig");
    }
}
