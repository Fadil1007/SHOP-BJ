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

/* admin/flash_message_form.html.twig */
class __TwigTemplate_6d8a9304922b4f59bd476d0b31f29611 extends Template
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
        // line 2
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("admin/base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield (((($tmp = ($context["editMode"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Nouveau"));
        yield " Message Flash";
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
        yield "
<div class=\"container-fluid mt-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <h1>";
        // line 12
        yield (((($tmp = ($context["editMode"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Nouveau"));
        yield " Message Flash</h1>
                <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_flash_messages");
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"fas fa-arrow-left\"></i> Retour à la liste
                </a>
            </div>

            <div class=\"card\">
                <div class=\"card-body\">
                    ";
        // line 20
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        yield "

                    <div class=\"row\">
                        <div class=\"col-md-8\">
                            <div class=\"mb-3\">
                                ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, false, 25), 'label');
        yield "
                                ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, false, 26), 'widget');
        yield "
                                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, false, 27), 'errors');
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 31), 'label');
        yield "
                                ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 32), 'widget');
        yield "
                                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 33), 'errors');
        yield "
                                <div class=\"form-text\">
                                    Vous pouvez utiliser du HTML basique dans le message.
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"mb-3\">
                                        ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 42), 'label');
        yield "
                                        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 43), 'widget');
        yield "
                                        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 44), 'errors');
        yield "
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"mb-3\">
                                        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "targetPages", [], "any", false, false, false, 49), 'label');
        yield "
                                        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "targetPages", [], "any", false, false, false, 50), 'widget');
        yield "
                                        ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "targetPages", [], "any", false, false, false, 51), 'errors');
        yield "
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"mb-3\">
                                        ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "startDate", [], "any", false, false, false, 59), 'label');
        yield "
                                        ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "startDate", [], "any", false, false, false, 60), 'widget');
        yield "
                                        ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "startDate", [], "any", false, false, false, 61), 'errors');
        yield "
                                        <div class=\"form-text\">
                                            Laissez vide pour un affichage immédiat
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"mb-3\">
                                        ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "endDate", [], "any", false, false, false, 69), 'label');
        yield "
                                        ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "endDate", [], "any", false, false, false, 70), 'widget');
        yield "
                                        ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "endDate", [], "any", false, false, false, 71), 'errors');
        yield "
                                        <div class=\"form-text\">
                                            Laissez vide pour un affichage permanent
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-md-4\">
                            <div class=\"card bg-light\">
                                <div class=\"card-header\">
                                    <h5 class=\"card-title mb-0\">Options</h5>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"mb-3\">
                                        <div class=\"form-check\">
                                            ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isActive", [], "any", false, false, false, 88), 'widget');
        yield "
                                            ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isActive", [], "any", false, false, false, 89), 'label');
        yield "
                                        </div>
                                        ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isActive", [], "any", false, false, false, 91), 'errors');
        yield "
                                        <div class=\"form-text\">
                                            Le message ne sera visible que s'il est activé
                                        </div>
                                    </div>

                                    ";
        // line 97
        if ((($context["editMode"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["flashMessage"] ?? null), "shouldDisplay", [], "any", false, false, false, 97))) {
            // line 98
            yield "                                        <div class=\"alert alert-info\">
                                            <i class=\"fas fa-info-circle\"></i>
                                            Ce message est actuellement affiché sur le site.
                                        </div>
                                    ";
        }
        // line 103
        yield "                                </div>
                            </div>

                            <!-- Aperçu du message -->
                            <div class=\"card mt-3\">
                                <div class=\"card-header\">
                                    <h5 class=\"card-title mb-0\">Aperçu</h5>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"message-preview\" class=\"alert alert-info\">
                                        <strong>Titre du message</strong><br>
                                        Contenu du message...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-save\"></i> ";
        // line 123
        yield (((($tmp = ($context["editMode"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Créer"));
        yield " le message
                        </button>
                        <a href=\"";
        // line 125
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_flash_messages");
        yield "\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-times\"></i> Annuler
                        </a>
                    </div>

                    ";
        // line 130
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const titleField = document.getElementById('flash_message_title');
    const messageField = document.getElementById('flash_message_message');
    const typeField = document.getElementById('flash_message_type');
    const preview = document.getElementById('message-preview');

    function updatePreview() {
        const title = titleField.value || 'Titre du message';
        const message = messageField.value || 'Contenu du message...';
        const type = typeField.value || 'info';

        preview.className = `alert alert-\${type}`;
        preview.innerHTML = `<strong>\${title}</strong><br>\${message}`;
    }

    titleField.addEventListener('input', updatePreview);
    messageField.addEventListener('input', updatePreview);
    typeField.addEventListener('change', updatePreview);

    // Mise à jour initiale
    updatePreview();
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
        return "admin/flash_message_form.html.twig";
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
        return array (  279 => 130,  271 => 125,  266 => 123,  244 => 103,  237 => 98,  235 => 97,  226 => 91,  221 => 89,  217 => 88,  197 => 71,  193 => 70,  189 => 69,  178 => 61,  174 => 60,  170 => 59,  159 => 51,  155 => 50,  151 => 49,  143 => 44,  139 => 43,  135 => 42,  123 => 33,  119 => 32,  115 => 31,  108 => 27,  104 => 26,  100 => 25,  92 => 20,  82 => 13,  78 => 12,  71 => 7,  64 => 6,  52 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/flash_message_form.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/admin/flash_message_form.html.twig");
    }
}
