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

/* admin/flash_messages.html.twig */
class __TwigTemplate_47cad9f4b1db18bc5b18bed6f4b3fcc3 extends Template
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
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("admin/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Gestion des Messages Flash";
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
        yield "
<div class=\"container-fluid mt-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1>Messages Flash</h1>
        <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_flash_message_new");
        yield "\" class=\"btn btn-primary\">
            <i class=\"fas fa-plus\"></i> Nouveau Message
        </a>
    </div>

    <!-- Barre de recherche -->
    <div class=\"row mb-3\">
        <div class=\"col-md-6\">
            <form method=\"GET\" action=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_flash_messages");
        yield "\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Rechercher un message...\" value=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 20), "query", [], "any", false, false, false, 20), "get", ["search"], "method", false, false, false, 20), "html", null, true);
        yield "\">
                    <button class=\"btn btn-outline-secondary\" type=\"submit\">
                        <i class=\"fas fa-search\"></i>
                    </button>
                    ";
        // line 24
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 24), "query", [], "any", false, false, false, 24), "get", ["search"], "method", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_flash_messages");
            yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-times\"></i>
                        </a>
                    ";
        }
        // line 29
        yield "                </div>
            </form>
        </div>
    </div>

    <!-- Table des messages flash -->
    <div class=\"card\">
        <div class=\"card-body\">
            ";
        // line 37
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["flash_messages"] ?? null)) > 0)) {
            // line 38
            yield "                <div class=\"table-responsive\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titre</th>
                                <th>Type</th>
                                <th>Pages cibles</th>
                                <th>Statut</th>
                                <th>Période</th>
                                <th>Créé le</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["flash_messages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 54
                yield "                                <tr>
                                    <td>";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["flashMessage"], "id", [], "any", false, false, false, 55), "html", null, true);
                yield "</td>
                                    <td>";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["flashMessage"], "title", [], "any", false, false, false, 56), "html", null, true);
                yield "</td>
                                    <td>
                                        <span class=\"badge bg-";
                // line 58
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["flashMessage"], "type", [], "any", false, false, false, 58) == "success")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["flashMessage"], "type", [], "any", false, false, false, 58) == "warning")) ? ("warning") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["flashMessage"], "type", [], "any", false, false, false, 58) == "danger")) ? ("danger") : ("info"))))));
                yield "\">
                                            ";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["flashMessage"], "type", [], "any", false, false, false, 59)), "html", null, true);
                yield "
                                        </span>
                                    </td>
                                    <td>
                                        ";
                // line 63
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["flashMessage"], "targetPages", [], "any", false, false, false, 63) == "all")) {
                    // line 64
                    yield "                                            Toutes les pages
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 65
$context["flashMessage"], "targetPages", [], "any", false, false, false, 65) == "home")) {
                    // line 66
                    yield "                                            Accueil
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 67
$context["flashMessage"], "targetPages", [], "any", false, false, false, 67) == "products")) {
                    // line 68
                    yield "                                            Produits
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 69
$context["flashMessage"], "targetPages", [], "any", false, false, false, 69) == "categories")) {
                    // line 70
                    yield "                                            Catégories
                                        ";
                } else {
                    // line 72
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["flashMessage"], "targetPages", [], "any", false, false, false, 72), "html", null, true);
                    yield "
                                        ";
                }
                // line 74
                yield "                                    </td>
                                    <td>
                                        <form method=\"POST\" action=\"";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_flash_message_toggle", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["flashMessage"], "id", [], "any", false, false, false, 76)]), "html", null, true);
                yield "\" class=\"d-inline\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle" . CoreExtension::getAttribute($this->env, $this->source, $context["flashMessage"], "id", [], "any", false, false, false, 77))), "html", null, true);
                yield "\">
                                            <button type=\"submit\" class=\"btn btn-sm ";
                // line 78
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["flashMessage"], "isActive", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-success") : ("btn-secondary"));
                yield "\">
                                                ";
                // line 79
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["flashMessage"], "isActive", [], "any", false, false, false, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 80
                    yield "                                                    <i class=\"fas fa-eye\"></i> Actif
                                                ";
                } else {
                    // line 82
                    yield "                                                    <i class=\"fas fa-eye-slash\"></i> Inactif
                                                ";
                }
                // line 84
                yield "                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        ";
                // line 88
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["flashMessage"], "startDate", [], "any", false, false, false, 88) || CoreExtension::getAttribute($this->env, $this->source, $context["flashMessage"], "endDate", [], "any", false, false, false, 88))) {
                    // line 89
                    yield "                                            <small>
                                                ";
                    // line 90
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["flashMessage"], "startDate", [], "any", false, false, false, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 91
                        yield "                                                    Du ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["flashMessage"], "startDate", [], "any", false, false, false, 91), "d/m/Y H:i"), "html", null, true);
                        yield "
                                                ";
                    }
                    // line 93
                    yield "                                                ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["flashMessage"], "endDate", [], "any", false, false, false, 93)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 94
                        yield "                                                    ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["flashMessage"], "startDate", [], "any", false, false, false, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "<br>";
                        }
                        // line 95
                        yield "                                                    Au ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["flashMessage"], "endDate", [], "any", false, false, false, 95), "d/m/Y H:i"), "html", null, true);
                        yield "
                                                ";
                    }
                    // line 97
                    yield "                                            </small>
                                        ";
                } else {
                    // line 99
                    yield "                                            <small class=\"text-muted\">Permanent</small>
                                        ";
                }
                // line 101
                yield "                                    </td>
                                    <td>";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["flashMessage"], "createdAt", [], "any", false, false, false, 102), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                                    <td>
                                        <div class=\"btn-group\" role=\"group\">
                                            <a href=\"";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_flash_message_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["flashMessage"], "id", [], "any", false, false, false, 105)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\">
                                                <i class=\"fas fa-edit\"></i>
                                            </a>
                                            <a href=\"";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_flash_message_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["flashMessage"], "id", [], "any", false, false, false, 108)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-danger\">
                                                <i class=\"fas fa-trash\"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['flashMessage'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            yield "                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                ";
            // line 120
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, ($context["flash_messages"] ?? null));
            yield "
            ";
        } else {
            // line 122
            yield "                <div class=\"text-center py-5\">
                    <i class=\"fas fa-envelope fa-3x text-muted mb-3\"></i>
                    <h4>Aucun message flash</h4>
                    <p class=\"text-muted\">Créez votre premier message flash pour communiquer avec vos visiteurs.</p>
                    <a href=\"";
            // line 126
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_flash_message_new");
            yield "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus\"></i> Créer un message
                    </a>
                </div>
            ";
        }
        // line 131
        yield "        </div>
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
        return "admin/flash_messages.html.twig";
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
        return array (  313 => 131,  305 => 126,  299 => 122,  294 => 120,  287 => 115,  274 => 108,  268 => 105,  262 => 102,  259 => 101,  255 => 99,  251 => 97,  245 => 95,  240 => 94,  237 => 93,  231 => 91,  229 => 90,  226 => 89,  224 => 88,  218 => 84,  214 => 82,  210 => 80,  208 => 79,  204 => 78,  200 => 77,  196 => 76,  192 => 74,  186 => 72,  182 => 70,  180 => 69,  177 => 68,  175 => 67,  172 => 66,  170 => 65,  167 => 64,  165 => 63,  158 => 59,  154 => 58,  149 => 56,  145 => 55,  142 => 54,  138 => 53,  121 => 38,  119 => 37,  109 => 29,  101 => 25,  99 => 24,  92 => 20,  87 => 18,  76 => 10,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/flash_messages.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/admin/flash_messages.html.twig");
    }
}
