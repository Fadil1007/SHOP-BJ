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
class __TwigTemplate_fdef9b20c123a63c205f193797a61d4d extends Template
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
        <meta name=\"description\" content=\"MYSHOPBJ – L'essentiel du shopping au Bénin. Produits tendance, promos, paiement sécurisé, service client 7j/7. Livraison rapide et prix abordables.\">

        <link rel=\"icon\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        yield "?v=2\" type=\"image/x-icon\">
        <link rel=\"icon\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.svg"), "html", null, true);
        yield "?v=2\" type=\"image/svg+xml\">
        <link rel=\"apple-touch-icon\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apple-touch-icon.png"), "html", null, true);
        yield "?v=2\">
        <link rel=\"shortcut icon\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        yield "?v=2\" type=\"image/x-icon\">
        <meta name=\"theme-color\" content=\"#F58C1E\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\">
        <link rel=\"manifest\" href=\"";
        // line 16
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
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/color-swatches.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 29
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
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/carousel.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

        <!-- Ajustements responsifs -->
        <link href=\"";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/responsive-fix.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

        <!-- Thème personnalisé -->
        ";
        // line 229
        if ((array_key_exists("theme_css_path", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["theme_css_path"] ?? null)))) {
            // line 230
            yield "        <link href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["theme_css_path"] ?? null)), "html", null, true);
            yield "\" rel=\"stylesheet\">
        ";
        }
        // line 232
        yield "
        ";
        // line 233
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 234
        yield "    </head>
    <body>
        ";
        // line 236
        yield from $this->load("search_bar.html.twig", 236)->unwrap()->yield($context);
        // line 237
        yield "        <header>
            <nav class=\"navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm py-2\">
                <div class=\"container\">
                    <a class=\"navbar-brand\" href=\"";
        // line 240
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                        <img src=\"";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((array_key_exists("site_logo", $context)) ? (Twig\Extension\CoreExtension::default(($context["site_logo"] ?? null), "uploads/logo/logo-shop-bj.svg")) : ("uploads/logo/logo-shop-bj.svg"))), "html", null, true);
        yield "\" alt=\"SHOP BJ\" height=\"40\" class=\"d-inline-block align-top\">
                    </a>
                    <!-- Barre de navigation mobile optimisée et complètement visible -->
                    <div class=\"d-lg-none w-100 pt-2\">
                        <!-- Boutons d'action rapide pour mobile en haut -->
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <!-- Logo centré pour mobile -->
                            <a href=\"";
        // line 248
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
        // line 258
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 258)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 259
            yield "                                        <li><a class=\"dropdown-item\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\">Mon compte</a></li>
                                        <li><a class=\"dropdown-item\" href=\"";
            // line 260
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_orders");
            yield "\">Mes commandes</a></li>
                                        <li><a class=\"dropdown-item\" href=\"";
            // line 261
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wishlist_index");
            yield "\">Mes favoris</a></li>
                                        ";
            // line 262
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 263
                yield "                                            <li><hr class=\"dropdown-divider\"></li>
                                            <li><a class=\"dropdown-item\" href=\"";
                // line 264
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
                yield "\">Administration</a></li>
                                        ";
            }
            // line 266
            yield "                                        <li><hr class=\"dropdown-divider\"></li>
                                        <li><a class=\"dropdown-item\" href=\"";
            // line 267
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Déconnexion</a></li>
                                    ";
        } else {
            // line 269
            yield "                                        <li><a class=\"dropdown-item\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Connexion</a></li>
                                        <li><a class=\"dropdown-item\" href=\"";
            // line 270
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">Inscription</a></li>
                                    ";
        }
        // line 272
        yield "                                </ul>
                            </div>

                            ";
        // line 275
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 275)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 276
            yield "                            <!-- Favoris -->
                            <a href=\"";
            // line 277
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wishlist_index");
            yield "\" class=\"btn nav-icon-btn position-relative\">
                                <i class=\"fas fa-heart\"></i>
                                <span class=\"position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger wishlist-counter ";
            // line 279
            if ((($tmp =  !((array_key_exists("wishlist_count", $context)) ? (Twig\Extension\CoreExtension::default(($context["wishlist_count"] ?? null), 0)) : (0))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "d-none";
            }
            yield "\">
                                    ";
            // line 280
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("wishlist_count", $context)) ? (Twig\Extension\CoreExtension::default(($context["wishlist_count"] ?? null), 0)) : (0)), "html", null, true);
            yield "
                                </span>
                            </a>
                            ";
        }
        // line 284
        yield "
                            <!-- Panier -->
                            <a href=\"";
        // line 286
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        yield "\" class=\"btn nav-icon-btn position-relative\">
                                <i class=\"fas fa-shopping-bag\"></i>
                                <span class=\"position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger cart-count\">
                                    ";
        // line 289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("cart_count", $context)) ? (Twig\Extension\CoreExtension::default(($context["cart_count"] ?? null), 0)) : (0)), "html", null, true);
        yield "
                                </span>
                            </a>
                        </div>

                        <!-- Navigation directe pour mobile -->
                        <div class=\"mobile-search-bar mb-2\">
                            ";
        // line 296
        yield from $this->load("components/search_mobile.html.twig", 296)->unwrap()->yield($context);
        // line 297
        yield "                        </div>
                        <div class=\"mobile-nav-tabs d-flex justify-content-between mb-2\">
                            <a href=\"";
        // line 299
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-sm mobile-nav-tab ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 299), "get", ["_route"], "method", false, false, false, 299) == "app_home")) {
            yield "active";
        }
        yield "\">Accueil</a>
                            <a href=\"";
        // line 300
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        yield "\" class=\"btn btn-sm mobile-nav-tab ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 300), "get", ["_route"], "method", false, false, false, 300) == "product_index")) {
            yield "active";
        }
        yield "\">Nouveautés</a>
                            <a href=\"";
        // line 301
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        yield "\" class=\"btn btn-sm mobile-nav-tab\">Promos</a>
                        </div>

                        <!-- Catégories principales pour mobile -->
                        <div class=\"mobile-categories d-flex justify-content-between\">
                            ";
        // line 306
        if ((array_key_exists("featuredCategories", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["featuredCategories"] ?? null)))) {
            // line 307
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["featuredCategories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 308
                yield "                                    ";
                if (((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 308)) == "hommes") || (Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 308)) == "femmes"))) {
                    // line 309
                    yield "                                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 309)]), "html", null, true);
                    yield "\" class=\"btn btn-outline-primary mobile-category-btn\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 309), "html", null, true);
                    yield "</a>
                                    ";
                }
                // line 311
                yield "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 312
            yield "                            ";
        }
        // line 313
        yield "
                            <a href=\"";
        // line 314
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
        // line 324
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">ACCUEIL</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link px-3\" href=\"";
        // line 327
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        yield "\">NOUVEAUTÉS</a>
                            </li>
                            ";
        // line 330
        yield "                            ";
        if ((array_key_exists("featuredCategories", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["featuredCategories"] ?? null)))) {
            // line 331
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["featuredCategories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 332
                yield "                                    <li class=\"nav-item\">
                                        <a class=\"nav-link px-3\" href=\"";
                // line 333
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 333)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 333)), "html", null, true);
                yield "</a>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 336
            yield "                            ";
        }
        // line 337
        yield "
                            ";
        // line 339
        yield "                            <li class=\"nav-item\">
                                <a class=\"nav-link px-3\" href=\"";
        // line 340
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_list");
        yield "\">TOUTES LES CATÉGORIES</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link px-3\" href=\"";
        // line 343
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        yield "\">PROMOS</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link px-3\" href=\"";
        // line 346
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
        // line 360
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 360)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 361
            yield "                                            <li><a class=\"dropdown-item\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\">Mon compte</a></li>
                                            <li><a class=\"dropdown-item\" href=\"";
            // line 362
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_orders");
            yield "\">Mes commandes</a></li>
                                            <li><a class=\"dropdown-item\" href=\"";
            // line 363
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wishlist_index");
            yield "\">Mes favoris</a></li>
                                            ";
            // line 364
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 365
                yield "                                                <li><hr class=\"dropdown-divider\"></li>
                                                <li><a class=\"dropdown-item\" href=\"";
                // line 366
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
                yield "\">Administration</a></li>
                                            ";
            }
            // line 368
            yield "                                            <li><hr class=\"dropdown-divider\"></li>
                                            <li><a class=\"dropdown-item\" href=\"";
            // line 369
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Déconnexion</a></li>
                                        ";
        } else {
            // line 371
            yield "                                            <li><a class=\"dropdown-item\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Connexion</a></li>
                                            <li><a class=\"dropdown-item\" href=\"";
            // line 372
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">Inscription</a></li>
                                        ";
        }
        // line 374
        yield "                                    </ul>
                                </div>

                                ";
        // line 377
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 377)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 378
            yield "                                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wishlist_index");
            yield "\" class=\"btn nav-icon-btn position-relative\">
                                    <i class=\"fas fa-heart\"></i>
                                    <span class=\"position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger wishlist-counter ";
            // line 380
            if ((($tmp =  !((array_key_exists("wishlist_count", $context)) ? (Twig\Extension\CoreExtension::default(($context["wishlist_count"] ?? null), 0)) : (0))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "d-none";
            }
            yield "\">
                                        ";
            // line 381
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("wishlist_count", $context)) ? (Twig\Extension\CoreExtension::default(($context["wishlist_count"] ?? null), 0)) : (0)), "html", null, true);
            yield "
                                    </span>
                                </a>
                                ";
        }
        // line 385
        yield "
                                <a href=\"";
        // line 386
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        yield "\" class=\"btn nav-icon-btn position-relative\">
                                    <i class=\"fas fa-shopping-bag\"></i>
                                    <span class=\"position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger cart-count\">
                                        ";
        // line 389
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("cart_count", $context)) ? (Twig\Extension\CoreExtension::default(($context["cart_count"] ?? null), 0)) : (0)), "html", null, true);
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
        // line 515
        yield "            ";
        yield from $this->load("components/flash_messages.html.twig", 515)->unwrap()->yield($context);
        // line 516
        yield "
            ";
        // line 518
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 518));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 519
            yield "                <div class=\"container mt-3\">
                    ";
            // line 520
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 521
                yield "                        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                            ";
                // line 522
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fermer\"></button>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 526
            yield "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 528
        yield "
            ";
        // line 529
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 530
        yield "
            ";
        // line 531
        yield from $this->load("components/floating_cart.html.twig", 531)->unwrap()->yield($context);
        // line 532
        yield "
        </main>

        <footer class=\"mt-5 pt-4 pb-3\" style=\"background-color: var(--secondary-color);\">
            <div class=\"container\">
                <!-- Version desktop du footer -->
                <div class=\"row d-none d-md-flex\">
                    <div class=\"col-lg-3 col-md-6 mb-4\">
                        <div class=\"mb-3\">
                            <img src=\"";
        // line 541
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((array_key_exists("site_logo", $context)) ? (Twig\Extension\CoreExtension::default(($context["site_logo"] ?? null), "uploads/logo/logo-shop-bj.svg")) : ("uploads/logo/logo-shop-bj.svg"))), "html", null, true);
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
        // line 552
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"footer-link\">Accueil</a></li>
                            <li class=\"mb-2\"><a href=\"";
        // line 553
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        yield "\" class=\"footer-link\">Produits</a></li>
                            <li class=\"mb-2\"><a href=\"#\" class=\"footer-link\">À propos</a></li>
                            <li class=\"mb-2\"><a href=\"";
        // line 555
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"footer-link\">Contact</a></li>
                        </ul>
                    </div>
                    <div class=\"col-lg-3 col-md-6 mb-4\">
                        <h5 class=\"gradient-text\">Informations</h5>
                        <ul class=\"list-unstyled\">
                            <li class=\"mb-2\"><a href=\"";
        // line 561
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("terms_of_service");
        yield "\" class=\"footer-link\">Modalités de commande</a></li>
                            <li class=\"mb-2\"><a href=\"";
        // line 562
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("terms_of_service");
        yield "\" class=\"footer-link\">Conditions générales</a></li>
                            <li class=\"mb-2\"><a href=\"";
        // line 563
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
        // line 577
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/payment/mtn-mobile-money.svg"), "html", null, true);
        yield "\" alt=\"MTN Mobile Money\" height=\"30\" onerror=\"this.style.display='none'\"></span>
                            <span><img src=\"";
        // line 578
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/payment/moov-money.svg"), "html", null, true);
        yield "\" alt=\"Moov Money\" height=\"30\" onerror=\"this.style.display='none'\"></span>
                        </div>
                    </div>
                </div>

                <!-- Version mobile du footer - optimisée et compacte -->
                <div class=\"d-md-none\">
                    <div class=\"text-center mb-3\">
                        <img src=\"";
        // line 586
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((array_key_exists("site_logo", $context)) ? (Twig\Extension\CoreExtension::default(($context["site_logo"] ?? null), "uploads/logo/logo-shop-bj.svg")) : ("uploads/logo/logo-shop-bj.svg"))), "html", null, true);
        yield "\" alt=\"SHOP BJ\" height=\"50\">
                    </div>

                    <!-- Liens rapides en version mobile -->
                    <div class=\"row mb-3\">
                        <div class=\"col-6\">
                            <h6 class=\"gradient-text fw-bold\">Navigation</h6>
                            <ul class=\"list-unstyled small\">
                                <li><a href=\"";
        // line 594
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"footer-link\">Accueil</a></li>
                                <li><a href=\"";
        // line 595
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        yield "\" class=\"footer-link\">Produits</a></li>
                                <li><a href=\"#\" class=\"footer-link\">À propos</a></li>
                                <li><a href=\"";
        // line 597
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"footer-link\">Contact</a></li>
                            </ul>
                        </div>
                        <div class=\"col-6\">
                            <h6 class=\"gradient-text fw-bold\">Informations</h6>
                            <ul class=\"list-unstyled small\">
                                <li><a href=\"";
        // line 603
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("terms_of_service");
        yield "\" class=\"footer-link\">Commande</a></li>
                                <li><a href=\"";
        // line 604
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("terms_of_service");
        yield "\" class=\"footer-link\">CGV</a></li>
                                <li><a href=\"";
        // line 605
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("privacy_policy");
        yield "\" class=\"footer-link\">Politique de confidentialité</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Barre de recherche et réseaux sociaux -->
                    <div class=\"mb-3\">
                        <div class=\"social-links text-center\">
                            <a href=\"#\" class=\"mx-2 h4 text-primary\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a href=\"#\" class=\"mx-2 h4 text-primary\"><i class=\"fab fa-instagram\"></i></a>
                            <a href=\"#\" class=\"mx-2 h4 text-primary\"><i class=\"fab fa-twitter\"></i></a>
                            <a href=\"#\" class=\"mx-2 h4 text-primary\"><i class=\"fab fa-pinterest\"></i></a>
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
        // line 631
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/payment/mtn-mobile-money.svg"), "html", null, true);
        yield "\" alt=\"MTN Mobile Money\" height=\"25\" onerror=\"this.style.display='none'\"></span>
                            <span><img src=\"";
        // line 632
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/payment/moov-money.svg"), "html", null, true);
        yield "\" alt=\"Moov Money\" height=\"25\" onerror=\"this.style.display='none'\"></span>
                        </div>
                    </div>
                </div>

                <hr>

                <div class=\"row\">
                    <div class=\"col-md-6 text-center text-md-start\">
                        <p class=\"text-muted mb-0 small\">&copy; ";
        // line 641
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
        // line 660
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/flash-messages.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 661
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/cart.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 662
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/floating-cart.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 663
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
        // line 761
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 762
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
</html>
";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("site_name", $context)) ? (Twig\Extension\CoreExtension::default(($context["site_name"] ?? null), "MYSHOPBJ")) : ("MYSHOPBJ")), "html", null, true);
        yield from [];
    }

    // line 233
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 529
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 761
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        return array (  1257 => 761,  1247 => 529,  1237 => 233,  1226 => 6,  1152 => 762,  1150 => 761,  1049 => 663,  1045 => 662,  1041 => 661,  1037 => 660,  1015 => 641,  1003 => 632,  999 => 631,  970 => 605,  966 => 604,  962 => 603,  953 => 597,  948 => 595,  944 => 594,  933 => 586,  922 => 578,  918 => 577,  901 => 563,  897 => 562,  893 => 561,  884 => 555,  879 => 553,  875 => 552,  861 => 541,  850 => 532,  848 => 531,  845 => 530,  843 => 529,  840 => 528,  833 => 526,  823 => 522,  818 => 521,  814 => 520,  811 => 519,  806 => 518,  803 => 516,  800 => 515,  672 => 389,  666 => 386,  663 => 385,  656 => 381,  650 => 380,  644 => 378,  642 => 377,  637 => 374,  632 => 372,  627 => 371,  622 => 369,  619 => 368,  614 => 366,  611 => 365,  609 => 364,  605 => 363,  601 => 362,  596 => 361,  594 => 360,  577 => 346,  571 => 343,  565 => 340,  562 => 339,  559 => 337,  556 => 336,  545 => 333,  542 => 332,  537 => 331,  534 => 330,  529 => 327,  523 => 324,  510 => 314,  507 => 313,  504 => 312,  498 => 311,  490 => 309,  487 => 308,  482 => 307,  480 => 306,  472 => 301,  464 => 300,  456 => 299,  452 => 297,  450 => 296,  440 => 289,  434 => 286,  430 => 284,  423 => 280,  417 => 279,  412 => 277,  409 => 276,  407 => 275,  402 => 272,  397 => 270,  392 => 269,  387 => 267,  384 => 266,  379 => 264,  376 => 263,  374 => 262,  370 => 261,  366 => 260,  361 => 259,  359 => 258,  346 => 248,  336 => 241,  332 => 240,  327 => 237,  325 => 236,  321 => 234,  319 => 233,  316 => 232,  310 => 230,  308 => 229,  302 => 226,  296 => 223,  97 => 29,  93 => 28,  78 => 16,  71 => 12,  67 => 11,  63 => 10,  59 => 9,  53 => 6,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/base.html.twig");
    }
}
