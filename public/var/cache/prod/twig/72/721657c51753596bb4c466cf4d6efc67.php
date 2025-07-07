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

/* admin/reviews/index.html.twig */
class __TwigTemplate_4d1d04ea24b23bfd1a3b43cd1fd632d9 extends Template
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
        yield "Gestion des avis clients";
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
        yield "<div class=\"container-fluid py-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1>Gestion des avis clients</h1>
    </div>

    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3 d-flex justify-content-between align-items-center\">
            <h6 class=\"m-0 font-weight-bold text-primary\">Liste des avis</h6>
            <div class=\"d-flex align-items-center\">
                <form method=\"get\" class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"search\" class=\"form-control bg-light border-0 small\" placeholder=\"Rechercher un avis...\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 17), "query", [], "any", false, false, false, 17), "get", ["search"], "method", false, false, false, 17), "html", null, true);
        yield "\">
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-primary\" type=\"submit\">
                                <i class=\"fas fa-search fa-sm\"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                    <thead>
                        <tr>
                            <th>Produit</th>
                            <th>Client</th>
                            <th>Titre</th>
                            <th>Note</th>
                            <th>Date</th>
                            <th>Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["reviews"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 43
            yield "                            <tr>
                                <td>
                                    <a href=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["review"], "product", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\" target=\"_blank\">
                                        ";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["review"], "product", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46), "html", null, true);
            yield "
                                    </a>
                                </td>
                                <td>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["review"], "user", [], "any", false, false, false, 49), "email", [], "any", false, false, false, 49), "html", null, true);
            yield "</td>
                                <td>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "title", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 53
                yield "                                        ";
                if (($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 53))) {
                    // line 54
                    yield "                                            <i class=\"fas fa-star text-warning\"></i>
                                        ";
                } else {
                    // line 56
                    yield "                                            <i class=\"far fa-star text-warning\"></i>
                                        ";
                }
                // line 58
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            yield "                                </td>
                                <td>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "createdAt", [], "any", false, false, false, 60), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 62
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["review"], "isApproved", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 63
                yield "                                        <span class=\"badge bg-success\">Approuvé</span>
                                    ";
            } else {
                // line 65
                yield "                                        <span class=\"badge bg-danger\">Non approuvé</span>
                                    ";
            }
            // line 67
            yield "                                </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group\">
                                        ";
            // line 70
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["review"], "isApproved", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 71
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_review_approve", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 71)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-success\" title=\"Approuver\">
                                                <i class=\"fas fa-check\"></i>
                                            </a>
                                        ";
            } else {
                // line 75
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_review_reject", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 75)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-warning\" title=\"Rejeter\">
                                                <i class=\"fas fa-times\"></i>
                                            </a>
                                        ";
            }
            // line 79
            yield "                                        
                                        <form method=\"post\" action=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_review_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet avis ?');\" style=\"display: inline-block;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 81))), "html", null, true);
            yield "\">
                                            <button class=\"btn btn-sm btn-danger\" title=\"Supprimer\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 89
        if (!$context['_iterated']) {
            // line 90
            yield "                            <tr>
                                <td colspan=\"7\" class=\"text-center\">Aucun avis trouvé</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['review'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "                    </tbody>
                </table>
            </div>
            
            <div class=\"navigation d-flex justify-content-center mt-4\">
                ";
        // line 99
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, ($context["reviews"] ?? null));
        yield "
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
        return "admin/reviews/index.html.twig";
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
        return array (  239 => 99,  232 => 94,  223 => 90,  221 => 89,  208 => 81,  204 => 80,  201 => 79,  193 => 75,  185 => 71,  183 => 70,  178 => 67,  174 => 65,  170 => 63,  168 => 62,  163 => 60,  160 => 59,  154 => 58,  150 => 56,  146 => 54,  143 => 53,  139 => 52,  134 => 50,  130 => 49,  124 => 46,  120 => 45,  116 => 43,  111 => 42,  83 => 17,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/reviews/index.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/admin/reviews/index.html.twig");
    }
}
