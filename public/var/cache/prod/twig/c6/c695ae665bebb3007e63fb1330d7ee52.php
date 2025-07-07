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

/* admin/contact/index.html.twig */
class __TwigTemplate_079097320f3df1837cf2b163d6bb01cc extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        yield "Gestion des Messages de Contact | ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["site_name"] ?? null), "html", null, true);
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
        <h1 class=\"h3 mb-0 text-gray-800\">
            Messages de Contact
            ";
        // line 10
        if ((($context["unreadCount"] ?? null) > 0)) {
            // line 11
            yield "                <span class=\"badge bg-danger ms-2\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unreadCount"] ?? null), "html", null, true);
            yield " non lu";
            if ((($context["unreadCount"] ?? null) > 1)) {
                yield "s";
            }
            yield "</span>
            ";
        }
        // line 13
        yield "        </h1>
        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        yield "\" class=\"btn btn-sm btn-outline-secondary\">
            <i class=\"fas fa-arrow-left me-1\"></i>Retour au tableau de bord
        </a>
    </div>

    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 20
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 21
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                ";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3 d-flex justify-content-between align-items-center\">
            <h6 class=\"m-0 font-weight-bold text-primary\">Liste des messages (";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["contacts"] ?? null)), "html", null, true);
        yield ")</h6>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th class=\"ps-3\" style=\"width: 60px;\">Statut</th>
                            <th>Date</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Sujet</th>
                            <th class=\"text-end pe-3\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 46
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["contacts"] ?? null)) > 0)) {
            // line 47
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["contacts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 48
                yield "                                <tr class=\"";
                yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "isRead", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("table-warning fw-bold") : (""));
                yield "\">
                                    <td class=\"ps-3\">
                                        ";
                // line 50
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "isRead", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 51
                    yield "                                            <span class=\"badge bg-secondary\"><i class=\"fas fa-check me-1\"></i>Lu</span>
                                        ";
                } else {
                    // line 53
                    yield "                                            <span class=\"badge bg-warning text-dark\"><i class=\"fas fa-envelope me-1\"></i>Non lu</span>
                                        ";
                }
                // line 55
                yield "                                    </td>
                                    <td>";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "createdAt", [], "any", false, false, false, 56), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                                    <td>";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "name", [], "any", false, false, false, 57), "html", null, true);
                yield "</td>
                                    <td>
                                        <a href=\"mailto:";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "email", [], "any", false, false, false, 59), "html", null, true);
                yield "\" class=\"text-decoration-none\">
                                            ";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "email", [], "any", false, false, false, 60), "html", null, true);
                yield "
                                        </a>
                                    </td>
                                    <td>";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "subject", [], "any", false, false, false, 63), "html", null, true);
                yield "</td>
                                    <td class=\"text-end pe-3\">
                                        <a href=\"";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contact_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 65)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-info me-1\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>

                                        ";
                // line 69
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "isRead", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 70
                    yield "                                            <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contact_mark_unread", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                    yield "\" class=\"d-inline\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 71
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("mark_unread" . CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 71))), "html", null, true);
                    yield "\">
                                                <button class=\"btn btn-sm btn-warning\" type=\"submit\" title=\"Marquer comme non lu\">
                                                    <i class=\"fas fa-envelope\"></i>
                                                </button>
                                            </form>
                                        ";
                } else {
                    // line 77
                    yield "                                            <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contact_mark_read", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 77)]), "html", null, true);
                    yield "\" class=\"d-inline\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 78
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("mark_read" . CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 78))), "html", null, true);
                    yield "\">
                                                <button class=\"btn btn-sm btn-secondary\" type=\"submit\" title=\"Marquer comme lu\">
                                                    <i class=\"fas fa-check\"></i>
                                                </button>
                                            </form>
                                        ";
                }
                // line 84
                yield "
                                        <form method=\"post\" action=\"";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contact_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 85)]), "html", null, true);
                yield "\" class=\"d-inline delete-form\" data-confirmation=\"Êtes-vous sûr de vouloir supprimer ce message ?\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 86))), "html", null, true);
                yield "\">
                                            <button class=\"btn btn-sm btn-danger\" type=\"submit\" title=\"Supprimer\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['contact'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            yield "                        ";
        } else {
            // line 95
            yield "                            <tr>
                                <td colspan=\"6\" class=\"text-center py-4\">
                                    <p class=\"text-muted mb-0\">Aucun message de contact pour le moment.</p>
                                </td>
                            </tr>
                        ";
        }
        // line 101
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 109
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 110
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Ajout d'une confirmation pour les formulaires de suppression
        document.querySelectorAll('.delete-form').forEach(function(form) {
            form.addEventListener('submit', function(e) {
                if (!confirm(this.dataset.confirmation)) {
                    e.preventDefault();
                    return false;
                }
            });
        });
    });
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/contact/index.html.twig";
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
        return array (  292 => 110,  285 => 109,  274 => 101,  266 => 95,  263 => 94,  249 => 86,  245 => 85,  242 => 84,  233 => 78,  228 => 77,  219 => 71,  214 => 70,  212 => 69,  205 => 65,  200 => 63,  194 => 60,  190 => 59,  185 => 57,  181 => 56,  178 => 55,  174 => 53,  170 => 51,  168 => 50,  162 => 48,  157 => 47,  155 => 46,  136 => 30,  131 => 27,  125 => 26,  115 => 22,  110 => 21,  105 => 20,  101 => 19,  93 => 14,  90 => 13,  80 => 11,  78 => 10,  72 => 6,  65 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/contact/index.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/admin/contact/index.html.twig");
    }
}
