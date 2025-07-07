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

/* admin/category_form.html.twig */
class __TwigTemplate_351070ccc7ce621e0284cab8dd686c09 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
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
        yield (((($tmp = ($context["editMode"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Ajouter"));
        yield " une catégorie - Administration SHOP BJ";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    .admin-menu {
        background: #f8f9fa;
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    .admin-menu a {
        display: block;
        padding: 8px 15px;
        margin-bottom: 5px;
        color: #495057;
        border-radius: 4px;
        text-decoration: none;
    }
    .admin-menu a:hover, .admin-menu a.active {
        background: #e9ecef;
        color: #007bff;
    }
    .admin-menu a i {
        width: 20px;
        text-align: center;
        margin-right: 8px;
    }
    .admin-header {
        background: linear-gradient(135deg, #0d6efd, #0dcaf0);
        color: white;
        padding: 20px;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    .help-text {
        font-size: 0.8rem;
        color: #6c757d;
        margin-top: 5px;
    }
    .category-preview-img {
        max-width: 200px;
        max-height: 200px;
        object-fit: contain;
        margin-top: 10px;
        border: 1px solid #dee2e6;
        border-radius: 5px;
    }
</style>
";
        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 55
        yield "<div class=\"container py-4\">
    <div class=\"admin-header\">
        <h1>";
        // line 57
        yield (((($tmp = ($context["editMode"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Ajouter"));
        yield " une catégorie</h1>
        <p>Administration des catégories de produits</p>
    </div>
    
    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"admin-menu\">
                <h5 class=\"mb-3\">Menu principal</h5>
                <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        yield "\"><i class=\"fa fa-home\"></i> Tableau de bord</a>
                <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products");
        yield "\"><i class=\"fa fa-tshirt\"></i> Produits</a>
                <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories");
        yield "\" class=\"active\"><i class=\"fa fa-list\"></i> Catégories</a>
                <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
        yield "\"><i class=\"fa fa-shopping-cart\"></i> Commandes</a>
                <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        yield "\"><i class=\"fa fa-users\"></i> Utilisateurs</a>
                <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"><i class=\"fa fa-arrow-left\"></i> Retour au site</a>
            </div>
        </div>
        
        <div class=\"col-md-9\">
            <div class=\"card\">
                <div class=\"card-body\">
                    ";
        // line 77
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate", "enctype" => "multipart/form-data"]]);
        yield "
                    
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 81), 'row');
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "slug", [], "any", false, false, false, 84), 'row');
        yield "
                        </div>
                    </div>
                    
                    <div class=\"row mb-3\">
                        <div class=\"col-md-12\">
                            ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 90), 'row');
        yield "
                        </div>
                    </div>
                    
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 96), 'row');
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"card\">
                                <div class=\"card-header bg-primary text-white\">
                                    <h6 class=\"mb-0\"><i class=\"fa fa-image\"></i> Image de la catégorie</h6>
                                </div>
                                <div class=\"card-body\">
                                    ";
        // line 104
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "imageFilename", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 105
            yield "                                        <div class=\"text-center mb-3\">
                                            <img src=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['App\Twig\AssetVersionExtension']->normalizeAssetPath(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "imageFilename", [], "any", false, false, false, 106))), "html", null, true);
            yield "?v=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 106), "html", null, true);
            yield "\" class=\"category-preview-img img-fluid rounded\" style=\"max-height: 200px;\">
                                            <div class=\"mt-2 text-muted small\">
                                                <strong>Image actuelle :</strong> ";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "imageFilename", [], "any", false, false, false, 108), "html", null, true);
            yield "
                                            </div>
                                        </div>
                                        <hr>
                                    ";
        }
        // line 113
        yield "                                    
                                    <div class=\"form-group\">
                                        <div class=\"mb-2\">
                                            <label class=\"form-label fw-bold\">";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "imageFile", [], "any", false, false, false, 116), 'label');
        yield "</label>
                                            ";
        // line 117
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "imageFilename", [], "any", false, false, false, 117)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 118
            yield "                                                <div class=\"text-muted small mb-2\">
                                                    <i class=\"fa fa-info-circle\"></i> Laissez ce champ vide pour conserver l'image actuelle
                                                </div>
                                            ";
        }
        // line 122
        yield "                                        </div>
                                        
                                        ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "imageFile", [], "any", false, false, false, 124), 'widget', ["attr" => ["class" => "form-control file-input"]]);
        yield "
                                        ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "imageFile", [], "any", false, false, false, 125), 'errors');
        yield "
                                        
                                        <div class=\"help-text text-muted mt-2 small\">
                                            <ul class=\"mb-0 ps-3\">
                                                <li>Formats acceptés : JPG, PNG, WEBP</li>
                                                <li>Taille maximale : 2 Mo</li>
                                                <li>Dimensions recommandées : 800x600 pixels</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"row mb-4\">
                        <div class=\"col-md-12\">
                            <div class=\"card mb-4\">
                                <div class=\"card-header bg-primary text-white\">
                                    <h6 class=\"mb-0\"><i class=\"fa fa-image\"></i> Image d'en-tête de la catégorie</h6>
                                </div>
                                <div class=\"card-body\">
                                    ";
        // line 147
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "headerImageFilename", [], "any", false, false, false, 147)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 148
            yield "                                        <div class=\"text-center mb-3\">
                                            <img src=\"";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['App\Twig\AssetVersionExtension']->normalizeAssetPath(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "headerImageFilename", [], "any", false, false, false, 149))), "html", null, true);
            yield "?v=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 149), "html", null, true);
            yield " - En-tête\" class=\"category-preview-img img-fluid rounded\" style=\"max-height: 200px; max-width: 100%;\">
                                            <div class=\"mt-2 text-muted small\">
                                                <strong>Image d'en-tête actuelle :</strong> ";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "headerImageFilename", [], "any", false, false, false, 151), "html", null, true);
            yield "
                                            </div>
                                        </div>
                                        <hr>
                                    ";
        }
        // line 156
        yield "                                    
                                    <div class=\"form-group\">
                                        <div class=\"mb-2\">
                                            <label class=\"form-label fw-bold\">";
        // line 159
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "headerImageFile", [], "any", false, false, false, 159), 'label');
        yield "</label>
                                            ";
        // line 160
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "headerImageFilename", [], "any", false, false, false, 160)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 161
            yield "                                                <div class=\"text-muted small mb-2\">
                                                    <i class=\"fa fa-info-circle\"></i> Laissez ce champ vide pour conserver l'image actuelle
                                                </div>
                                            ";
        }
        // line 165
        yield "                                        </div>
                                        
                                        ";
        // line 167
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "headerImageFile", [], "any", false, false, false, 167), 'widget', ["attr" => ["class" => "form-control header-file-input"]]);
        yield "
                                        ";
        // line 168
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "headerImageFile", [], "any", false, false, false, 168), 'errors');
        yield "
                                        
                                        <div class=\"help-text text-muted mt-2 small\">
                                            <ul class=\"mb-0 ps-3\">
                                                <li>Formats acceptés : JPG, PNG, WEBP</li>
                                                <li>Taille maximale : 2 Mo</li>
                                                <li>Dimensions recommandées : 1200x400 pixels (bannière horizontale)</li>
                                                <li>Cette image sera affichée en haut de la page de catégorie</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"card\">
                                <div class=\"card-header bg-primary text-white\">
                                    <h6 class=\"mb-0\"><i class=\"fa fa-star\"></i> Options d'affichage</h6>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"form-check form-switch\">
                                        ";
        // line 188
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "featured", [], "any", false, false, false, 188), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
                                        <label class=\"form-check-label\" for=\"";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "featured", [], "any", false, false, false, 189), "vars", [], "any", false, false, false, 189), "id", [], "any", false, false, false, 189), "html", null, true);
        yield "\">
                                            ";
        // line 190
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "featured", [], "any", false, false, false, 190), 'label');
        yield "
                                        </label>
                                        <div class=\"text-muted small mt-1\">
                                            <i class=\"fa fa-info-circle\"></i> Les catégories mises en avant apparaissent sur la page d'accueil dans la section \"Découvrez nos catégories\"
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"d-flex justify-content-between\">
                        <a href=\"";
        // line 202
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories");
        yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fa fa-arrow-left\"></i> Retour à la liste
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fa ";
        // line 206
        yield (((($tmp = ($context["editMode"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-save") : ("fa-plus"));
        yield "\"></i> 
                            ";
        // line 207
        yield (((($tmp = ($context["editMode"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Enregistrer les modifications") : ("Ajouter la catégorie"));
        yield "
                        </button>
                    </div>
                    
                    ";
        // line 211
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 219
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 220
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    // Fonction générique pour la prévisualisation d'images
    function setupImagePreview(inputSelector, previewContainerClass) {
        const imageFileInput = document.querySelector(inputSelector);
        if (imageFileInput) {
            imageFileInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    // Créer un conteneur de prévisualisation s'il n'existe pas
                    let previewContainer = imageFileInput.closest('.card-body').querySelector('.' + previewContainerClass);
                    
                    if (!previewContainer) {
                        // Si l'image actuelle existe, ajouter la prévisualisation après celle-ci
                        const existingHr = imageFileInput.closest('.card-body').querySelector('hr');
                        let insertAfterElement;
                        
                        if (existingHr) {
                            // Insérer après le hr
                            insertAfterElement = existingHr;
                        } else {
                            // Insérer après le titre du formulaire
                            insertAfterElement = imageFileInput.closest('.form-group').querySelector('.form-label.fw-bold');
                        }
                        
                        previewContainer = document.createElement('div');
                        previewContainer.className = previewContainerClass + ' mt-3';
                        
                        if (insertAfterElement) {
                            insertAfterElement.after(previewContainer);
                        } else {
                            // Fallback: insérer après l'input
                            imageFileInput.parentNode.appendChild(previewContainer);
                        }
                        
                        // Créer la structure
                        previewContainer.innerHTML = `
                            <div class=\"alert alert-info\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fa fa-eye me-2\"></i>
                                    <strong>Aperçu de la nouvelle image</strong>
                                </div>
                                <div class=\"text-center p-2 bg-light rounded\">
                                    <img src=\"\" class=\"preview-image img-fluid rounded\" alt=\"Aperçu\" style=\"max-height: 200px;\">
                                    <div class=\"mt-2 text-muted small\">
                                        <span class=\"file-info\"></span>
                                    </div>
                                </div>
                                <div class=\"mt-2 small text-muted\">
                                    <i class=\"fa fa-info-circle\"></i> Cette image remplacera l'image actuelle après l'enregistrement
                                </div>
                            </div>
                        `;
                    }
                    
                    // Mise à jour de l'aperçu
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        const previewImg = previewContainer.querySelector('.preview-image');
                        const fileInfo = previewContainer.querySelector('.file-info');
                        
                        previewImg.src = event.target.result;
                        fileInfo.textContent = `\${file.name} - \${(file.size / 1024).toFixed(2)} Ko`;
                    };
                    reader.readAsDataURL(file);
                } else {
                    // Si aucun fichier n'est sélectionné, supprimer la prévisualisation
                    const previewContainer = imageFileInput.closest('.card-body').querySelector('.' + previewContainerClass);
                    if (previewContainer) {
                        previewContainer.remove();
                    }
                }
            });
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Prévisualisation de l'image principale
        setupImagePreview('.file-input', 'image-preview-container');
        
        // Prévisualisation de l'image d'en-tête
        setupImagePreview('.header-file-input', 'header-image-preview-container');
        
        // Génération automatique du slug
        const nameInput = document.querySelector('input[name\$=\"[name]\"]');
        const slugInput = document.querySelector('input[name\$=\"[slug]\"]');
        
        if (nameInput && slugInput) {
            nameInput.addEventListener('input', function() {
                // Si le champ slug est vide, générer automatiquement à partir du nom
                if (!slugInput.value) {
                    // Convertir le nom en slug (minuscules, remplacer les espaces par des tirets, supprimer les caractères spéciaux)
                    let slug = nameInput.value.toLowerCase()
                        .replace(/[^\\w\\s-]/g, '') // Supprimer les caractères spéciaux
                        .replace(/\\s+/g, '-')     // Remplacer les espaces par des tirets
                        .replace(/--+/g, '-');    // Remplacer les multiples tirets par un seul
                    
                    slugInput.value = slug;
                }
            });
        }
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
        return "admin/category_form.html.twig";
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
        return array (  421 => 220,  414 => 219,  402 => 211,  395 => 207,  391 => 206,  384 => 202,  369 => 190,  365 => 189,  361 => 188,  338 => 168,  334 => 167,  330 => 165,  324 => 161,  322 => 160,  318 => 159,  313 => 156,  305 => 151,  296 => 149,  293 => 148,  291 => 147,  266 => 125,  262 => 124,  258 => 122,  252 => 118,  250 => 117,  246 => 116,  241 => 113,  233 => 108,  224 => 106,  221 => 105,  219 => 104,  208 => 96,  199 => 90,  190 => 84,  184 => 81,  177 => 77,  167 => 70,  163 => 69,  159 => 68,  155 => 67,  151 => 66,  147 => 65,  136 => 57,  132 => 55,  125 => 54,  73 => 6,  66 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/category_form.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/admin/category_form.html.twig");
    }
}
