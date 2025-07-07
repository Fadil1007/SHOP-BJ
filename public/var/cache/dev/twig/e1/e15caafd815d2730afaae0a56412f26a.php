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

/* admin/product_form.html.twig */
class __TwigTemplate_45e05c68851f93b0c0442b2162899bd9 extends Template
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
        yield " un produit - Administration SHOP BJ";
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
    .sizes-checkboxes, .colors-checkboxes {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }
    .sizes-checkboxes div, .colors-checkboxes div {
        margin-right: 15px;
        margin-bottom: 10px;
    }
    .colors-checkboxes .form-check {
        display: flex;
        align-items: center;
    }
    .colors-checkboxes .form-check-label {
        display: flex;
        align-items: center;
        margin-left: 5px;
    }
    .help-text {
        font-size: 0.8rem;
        color: #6c757d;
        margin-top: 5px;
    }
    .product-preview-img {
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

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 73
        yield "<div class=\"container py-4\">
    <div class=\"admin-header\">
        <h1>";
        // line 75
        yield (((($tmp = ($context["editMode"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Ajouter"));
        yield " un produit</h1>
        <p>Administration du catalogue de produits</p>
    </div>

    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"admin-menu\">
                <h5 class=\"mb-3\">Menu principal</h5>
                <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        yield "\"><i class=\"fa fa-home\"></i> Tableau de bord</a>
                <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products");
        yield "\" class=\"active\"><i class=\"fa fa-tshirt\"></i> Produits</a>
                <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories");
        yield "\"><i class=\"fa fa-list\"></i> Catégories</a>
                <a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
        yield "\"><i class=\"fa fa-shopping-cart\"></i> Commandes</a>
                <a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        yield "\"><i class=\"fa fa-users\"></i> Utilisateurs</a>
                <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"><i class=\"fa fa-arrow-left\"></i> Retour au site</a>
            </div>
        </div>

        <div class=\"col-md-9\">
            <div class=\"card\">
                <div class=\"card-body\">
                    ";
        // line 95
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate", "enctype" => "multipart/form-data"]]);
        yield "

                    <div class=\"row mb-3\">
                        <div class=\"col-md-8\">
                            ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 99), 'row');
        yield "
                        </div>
                        <div class=\"col-md-4\">
                            ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "sku", [], "any", false, false, false, 102), 'row');
        yield "
                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <div class=\"col-md-4\">
                            ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "price", [], "any", false, false, false, 108), 'row');
        yield "
                        </div>
                        <div class=\"col-md-4\">
                            ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "oldPrice", [], "any", false, false, false, 111), 'row');
        yield "
                            <div class=\"help-text\">Si un ancien prix est spécifié et supérieur au prix actuel, le produit sera affiché comme en promotion.</div>
                        </div>
                        <div class=\"col-md-4\">
                            ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "stock", [], "any", false, false, false, 115), 'row');
        yield "
                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <div class=\"col-md-12\">
                            ";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "shortDescription", [], "any", false, false, false, 121), 'row');
        yield "
                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <div class=\"col-md-12\">
                            ";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 127), 'row');
        yield "
                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "category", [], "any", false, false, false, 133), 'row');
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "imageFile", [], "any", false, false, false, 136), 'row');
        yield "
                            <div class=\"help-text\">Formats acceptés : JPG, PNG, WEBP (max 2 Mo) - Au moins une image obligatoire</div>

                            ";
        // line 139
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename", [], "any", false, false, false, 139)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 140
            yield "                                <div class=\"mt-2\">
                                    <p>Image principale actuelle :</p>
                                    <img src=\"";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename", [], "any", false, false, false, 142)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 142), "html", null, true);
            yield "\" class=\"product-preview-img\">
                                    <div class=\"mt-2\">
                                        <button type=\"button\" class=\"btn btn-danger btn-sm delete-image-btn\" data-image=\"1\">
                                            <i class=\"fa fa-trash\"></i> Supprimer cette image
                                        </button>
                                    </div>
                                </div>
                            ";
        }
        // line 150
        yield "                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            ";
        // line 155
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "imageFile2", [], "any", false, false, false, 155), 'row');
        yield "
                            <div class=\"help-text\">Image secondaire (optionnelle)</div>

                            ";
        // line 158
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename2", [], "any", false, false, false, 158)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 159
            yield "                                <div class=\"mt-2\">
                                    <p>Image secondaire actuelle :</p>
                                    <img src=\"";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename2", [], "any", false, false, false, 161)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 161), "html", null, true);
            yield "\" class=\"product-preview-img\">
                                    <div class=\"mt-2\">
                                        <button type=\"button\" class=\"btn btn-danger btn-sm delete-image-btn\" data-image=\"2\">
                                            <i class=\"fa fa-trash\"></i> Supprimer cette image
                                        </button>
                                    </div>
                                </div>
                            ";
        }
        // line 169
        yield "                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 171
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "imageFile3", [], "any", false, false, false, 171), 'row');
        yield "
                            <div class=\"help-text\">Image tertiaire (optionnelle)</div>

                            ";
        // line 174
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename3", [], "any", false, false, false, 174)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 175
            yield "                                <div class=\"mt-2\">
                                    <p>Image tertiaire actuelle :</p>
                                    <img src=\"";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename3", [], "any", false, false, false, 177)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 177), "html", null, true);
            yield "\" class=\"product-preview-img\">
                                    <div class=\"mt-2\">
                                        <button type=\"button\" class=\"btn btn-danger btn-sm delete-image-btn\" data-image=\"3\">
                                            <i class=\"fa fa-trash\"></i> Supprimer cette image
                                        </button>
                                    </div>
                                </div>
                            ";
        }
        // line 185
        yield "                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            ";
        // line 190
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "imageFile4", [], "any", false, false, false, 190), 'row');
        yield "
                            <div class=\"help-text\">Image quaternaire (optionnelle)</div>

                            ";
        // line 193
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename4", [], "any", false, false, false, 193)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 194
            yield "                                <div class=\"mt-2\">
                                    <p>Image quaternaire actuelle :</p>
                                    <img src=\"";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageFilename4", [], "any", false, false, false, 196)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 196), "html", null, true);
            yield "\" class=\"product-preview-img\">
                                    <div class=\"mt-2\">
                                        <button type=\"button\" class=\"btn btn-danger btn-sm delete-image-btn\" data-image=\"4\">
                                            <i class=\"fa fa-trash\"></i> Supprimer cette image
                                        </button>
                                    </div>
                                </div>
                            ";
        }
        // line 204
        yield "                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            <label class=\"form-label\">";
        // line 209
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "sizes", [], "any", false, false, false, 209), 'label');
        yield "</label>
                            <div class=\"sizes-checkboxes\">
                                ";
        // line 211
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "sizes", [], "any", false, false, false, 211), 'widget');
        yield "
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <label class=\"form-label\">";
        // line 215
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "colors", [], "any", false, false, false, 215), 'label');
        yield "</label>
                            <div class=\"colors-checkboxes\">
                                ";
        // line 217
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "colors", [], "any", false, false, false, 217), 'widget');
        yield "
                            </div>
                        </div>
                    </div>

                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"form-check\">
                                ";
        // line 225
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "featured", [], "any", false, false, false, 225), 'widget');
        yield "
                                ";
        // line 226
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "featured", [], "any", false, false, false, 226), 'label');
        yield "
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-check\">
                                ";
        // line 231
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isActive", [], "any", false, false, false, 231), 'widget');
        yield "
                                ";
        // line 232
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isActive", [], "any", false, false, false, 232), 'label');
        yield "
                            </div>
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-between\">
                        <a href=\"";
        // line 238
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products");
        yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fa fa-arrow-left\"></i> Retour à la liste
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fa ";
        // line 242
        yield (((($tmp = ($context["editMode"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-save") : ("fa-plus"));
        yield "\"></i> 
                            ";
        // line 243
        yield (((($tmp = ($context["editMode"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Enregistrer les modifications") : ("Ajouter le produit"));
        yield "
                        </button>
                    </div>

                    ";
        // line 247
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

    // line 255
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 256
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    // Preview des images lorsqu'un fichier est sélectionné
    document.addEventListener('DOMContentLoaded', function() {
        // Gestion de l'aperçu d'images lors du téléchargement
        const imageFileInputs = document.querySelectorAll('input[type=\"file\"]');

        imageFileInputs.forEach(function(input, index) {
            input.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        // Identifier quel input et créer l'ID approprié pour l'aperçu
                        const inputId = input.getAttribute('id');
                        let previewId = 'preview-' + inputId;

                        // Créer ou mettre à jour l'aperçu
                        let previewImg = document.getElementById(previewId);
                        if (!previewImg) {
                            previewImg = document.createElement('img');
                            previewImg.id = previewId;
                            previewImg.className = 'product-preview-img mt-2';
                            previewImg.style.maxWidth = '200px';
                            previewImg.style.maxHeight = '200px';
                            previewImg.style.objectFit = 'contain';
                            previewImg.style.border = '1px solid #dee2e6';
                            previewImg.style.borderRadius = '5px';

                            // Ajouter l'aperçu après le champ de fichier
                            const container = input.closest('.col-md-6') || input.parentNode;
                            container.appendChild(previewImg);
                        }
                        previewImg.src = event.target.result;
                    };
                    reader.readAsDataURL(file);
                }
            });
        });

        // Ajouter des pastilles de couleur aux options de couleur dans le formulaire
        const colorCheckboxes = document.querySelectorAll('.colors-checkboxes .form-check-input');

        colorCheckboxes.forEach(checkbox => {
            const label = document.querySelector(`label[for=\"\${checkbox.id}\"]`);

            if (label) {
                const colorValue = checkbox.value;
                // Vérifier si une pastille de couleur existe déjà
                let colorSwatch = label.querySelector('.admin-color-swatch');

                if (!colorSwatch) {
                    // Créer et ajouter une pastille de couleur
                    colorSwatch = document.createElement('span');
                    colorSwatch.className = `admin-color-swatch color-swatch-\${colorValue}`;

                    // Insérer la pastille au début du label
                    label.insertBefore(colorSwatch, label.firstChild);

                    // Ajouter un petit espace après la pastille
                    const space = document.createTextNode(' ');
                    label.insertBefore(space, colorSwatch.nextSibling);
                }
            }
        });
    });

    // Gestion de la suppression d'images directe
    const deleteButtons = document.querySelectorAll('.delete-image-btn');
    
    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const imageNumber = this.dataset.image;
            const productId = '";
        // line 329
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 329), "html", null, true);
        yield "';
            
            // Faire une requête AJAX pour supprimer l'image
            fetch(`/admin/product/\${productId}/delete-image/\${imageNumber}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Masquer l'image et le bouton
                    const imageContainer = this.closest('.mt-2');
                    if (imageContainer) {
                        imageContainer.style.display = 'none';
                    }
                    
                    // Afficher un message de succès
                    const alertDiv = document.createElement('div');
                    alertDiv.className = 'alert alert-success mt-2';
                    alertDiv.innerHTML = `<i class=\"fa fa-check\"></i> Image \${imageNumber} supprimée avec succès`;
                    this.parentNode.appendChild(alertDiv);
                    
                    // Supprimer l'alerte après 3 secondes
                    setTimeout(() => {
                        alertDiv.remove();
                    }, 3000);
                } else {
                    // Afficher un message d'erreur
                    const alertDiv = document.createElement('div');
                    alertDiv.className = 'alert alert-danger mt-2';
                    alertDiv.innerHTML = `<i class=\"fa fa-exclamation-triangle\"></i> Erreur lors de la suppression: \${data.error}`;
                    this.parentNode.appendChild(alertDiv);
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                const alertDiv = document.createElement('div');
                alertDiv.className = 'alert alert-danger mt-2';
                alertDiv.innerHTML = '<i class=\"fa fa-exclamation-triangle\"></i> Erreur de connexion';
                this.parentNode.appendChild(alertDiv);
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
        return "admin/product_form.html.twig";
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
        return array (  554 => 329,  478 => 256,  471 => 255,  459 => 247,  452 => 243,  448 => 242,  441 => 238,  432 => 232,  428 => 231,  420 => 226,  416 => 225,  405 => 217,  400 => 215,  393 => 211,  388 => 209,  381 => 204,  368 => 196,  364 => 194,  362 => 193,  356 => 190,  349 => 185,  336 => 177,  332 => 175,  330 => 174,  324 => 171,  320 => 169,  307 => 161,  303 => 159,  301 => 158,  295 => 155,  288 => 150,  275 => 142,  271 => 140,  269 => 139,  263 => 136,  257 => 133,  248 => 127,  239 => 121,  230 => 115,  223 => 111,  217 => 108,  208 => 102,  202 => 99,  195 => 95,  185 => 88,  181 => 87,  177 => 86,  173 => 85,  169 => 84,  165 => 83,  154 => 75,  150 => 73,  143 => 72,  73 => 6,  66 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/product_form.html.twig", "/home/clients/0b7b1b2beec33c6f8b1ed00b9312f0c7/sites/SHOP-BJ/templates/admin/product_form.html.twig");
    }
}
