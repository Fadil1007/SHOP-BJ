<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/utilisateur/nouveau' => [[['_route' => 'admin_admin_user_new', '_controller' => 'App\\Controller\\AdminController::newUser'], null, null, null, false, false, null]],
        '/admin/carousel' => [[['_route' => 'admin_carousel_index', '_controller' => 'App\\Controller\\Admin\\AdminCarouselController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/carousel/new' => [[['_route' => 'admin_carousel_new', '_controller' => 'App\\Controller\\Admin\\AdminCarouselController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [
            [['_route' => 'admin_simple', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, true, false, null],
            [['_route' => 'admin_index', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, true, false, null],
        ],
        '/admin/produits' => [[['_route' => 'admin_products', '_controller' => 'App\\Controller\\Admin\\AdminController::products'], null, null, null, false, false, null]],
        '/admin/categories' => [[['_route' => 'admin_categories', '_controller' => 'App\\Controller\\Admin\\AdminController::categories'], null, null, null, false, false, null]],
        '/admin/orders' => [[['_route' => 'admin_orders', '_controller' => 'App\\Controller\\Admin\\AdminController::orders'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'admin_users', '_controller' => 'App\\Controller\\Admin\\AdminController::users'], null, null, null, false, false, null]],
        '/admin/product-create' => [[['_route' => 'admin_product_new', '_controller' => 'App\\Controller\\Admin\\AdminController::newProduct'], null, null, null, false, false, null]],
        '/admin/category/new' => [[['_route' => 'admin_category_new', '_controller' => 'App\\Controller\\Admin\\AdminController::newCategory'], null, null, null, false, false, null]],
        '/admin-fix' => [[['_route' => 'admin_fix_index', '_controller' => 'App\\Controller\\Admin\\AdminControllerUploadFix::index'], null, null, null, true, false, null]],
        '/admin-fix/produits' => [[['_route' => 'admin_fix_products', '_controller' => 'App\\Controller\\Admin\\AdminControllerUploadFix::products'], null, null, null, false, false, null]],
        '/admin-fix/product-create' => [[['_route' => 'admin_fix_product_new', '_controller' => 'App\\Controller\\Admin\\AdminControllerUploadFix::newProduct'], null, null, null, false, false, null]],
        '/admin/config' => [[['_route' => 'admin_config_index', '_controller' => 'App\\Controller\\Admin\\ConfigController::index'], null, null, null, true, false, null]],
        '/admin/config/maintenance/toggle' => [[['_route' => 'admin_config_maintenance_toggle', '_controller' => 'App\\Controller\\Admin\\ConfigController::toggleMaintenanceMode'], null, ['POST' => 0], null, false, false, null]],
        '/admin/contact' => [
            [['_route' => 'app_admin_contact_index', '_controller' => 'App\\Controller\\Admin\\ContactAdminController::index'], null, null, null, true, false, null],
            [['_route' => 'admin_contact', '_controller' => 'App\\Controller\\AdminController::contact'], null, null, null, false, false, null],
        ],
        '/admin/contact/check-new-messages' => [[['_route' => 'app_admin_contact_check_new', '_controller' => 'App\\Controller\\Admin\\ContactAdminController::checkNewMessages'], null, ['GET' => 0], null, false, false, null]],
        '/admin/flash-messages' => [[['_route' => 'admin_flash_messages', '_controller' => 'App\\Controller\\Admin\\FlashMessageAdminController::index'], null, null, null, true, false, null]],
        '/admin/flash-messages/new' => [[['_route' => 'admin_flash_message_new', '_controller' => 'App\\Controller\\Admin\\FlashMessageAdminController::new'], null, null, null, false, false, null]],
        '/admin/custom/logo-selector' => [[['_route' => 'admin_logo_selector', '_controller' => 'App\\Controller\\Admin\\LogoController::logoSelector'], null, null, null, false, false, null]],
        '/admin/custom/update-logo' => [[['_route' => 'admin_update_logo', '_controller' => 'App\\Controller\\Admin\\LogoController::updateLogo'], null, ['POST' => 0], null, false, false, null]],
        '/admin/avis' => [[['_route' => 'admin_review_index', '_controller' => 'App\\Controller\\Admin\\ReviewController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/settings' => [[['_route' => 'admin_settings', '_controller' => 'App\\Controller\\Admin\\SettingsController::index'], null, null, null, true, false, null]],
        '/admin/custom/theme-selector' => [[['_route' => 'admin_theme_selector', '_controller' => 'App\\Controller\\Admin\\ThemeController::themeSelector'], null, null, null, false, false, null]],
        '/admin/utilisateurs' => [[['_route' => 'admin_admin_users', '_controller' => 'App\\Controller\\AdminController::users'], null, null, null, false, false, null]],
        '/admin/commandes' => [[['_route' => 'admin_admin_orders', '_controller' => 'App\\Controller\\AdminController::orders'], null, null, null, false, false, null]],
        '/admin/commandes/export' => [[['_route' => 'admin_order_export', '_controller' => 'App\\Controller\\AdminController::exportOrders'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/cart/clear' => [[['_route' => 'cart_clear', '_controller' => 'App\\Controller\\CartController::clear'], null, ['POST' => 0], null, false, false, null]],
        '/categorie/liste' => [[['_route' => 'category_list', '_controller' => 'App\\Controller\\CategoryController::list'], null, null, null, false, false, null]],
        '/checkout' => [[['_route' => 'checkout_index', '_controller' => 'App\\Controller\\CheckoutController::index'], null, null, null, false, false, null]],
        '/checkout/fedapay/create-transaction' => [[['_route' => 'checkout_fedapay_create_transaction', '_controller' => 'App\\Controller\\CheckoutController::createFedaPayTransaction'], null, ['POST' => 0], null, false, false, null]],
        '/checkout/fedapay/callback' => [[['_route' => 'checkout_fedapay_callback', '_controller' => 'App\\Controller\\CheckoutController::fedaPayCallback'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/debug-symfony' => [[['_route' => 'app_debug', '_controller' => 'App\\Controller\\DebugController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/politique-de-confidentialite' => [[['_route' => 'privacy_policy', '_controller' => 'App\\Controller\\LegalController::privacyPolicy'], null, null, null, false, false, null]],
        '/mentions-legales' => [[['_route' => 'legal_notice', '_controller' => 'App\\Controller\\LegalController::legalNotice'], null, null, null, false, false, null]],
        '/conditions-generales-de-vente' => [[['_route' => 'terms_of_service', '_controller' => 'App\\Controller\\LegalController::termsOfService'], null, null, null, false, false, null]],
        '/produits/recherche' => [[['_route' => 'product_search', '_controller' => 'App\\Controller\\ProductController::search'], null, null, null, false, false, null]],
        '/produits' => [[['_route' => 'product_index', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, true, false, null]],
        '/profile' => [
            [['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, true, false, null],
            [['_route' => 'user_profile', '_controller' => 'App\\Controller\\UserController::profile'], null, null, null, false, false, null],
        ],
        '/profile/edit' => [[['_route' => 'app_profile_edit', '_controller' => 'App\\Controller\\ProfileController::edit'], null, null, null, false, false, null]],
        '/profile/orders' => [[['_route' => 'app_profile_orders', '_controller' => 'App\\Controller\\ProfileController::orders'], null, null, null, false, false, null]],
        '/profile/password' => [[['_route' => 'app_profile_change_password', '_controller' => 'App\\Controller\\ProfileController::changePassword'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/reset-password/reset-invalide' => [[['_route' => 'app_reset_token_invalid', '_controller' => 'App\\Controller\\ResetPasswordController::tokenInvalid'], null, null, null, false, false, null]],
        '/mot-de-passe-oublie' => [[['_route' => 'app_forgot_password', '_controller' => 'App\\Controller\\SecurityController::forgotPassword'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/sitemap.xml' => [[['_route' => 'sitemap', '_format' => 'xml', '_controller' => 'App\\Controller\\SitemapController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'user_register', '_controller' => 'App\\Controller\\UserController::register'], null, null, null, false, false, null]],
        '/user-login' => [[['_route' => 'user_login', '_controller' => 'App\\Controller\\UserController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'user_logout', '_controller' => 'App\\Controller\\UserController::logout'], null, null, null, false, false, null]],
        '/favoris' => [[['_route' => 'wishlist_index', '_controller' => 'App\\Controller\\WishlistController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login_redirect', 'path' => '/connexion', 'permanent' => true, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|dmin(?'
                        .'|/(?'
                            .'|utilisateur/([^/]++)/(?'
                                .'|modifier(*:55)'
                                .'|supprimer(*:71)'
                            .')'
                            .'|c(?'
                                .'|a(?'
                                    .'|rousel/([^/]++)(?'
                                        .'|(*:105)'
                                        .'|/edit(*:118)'
                                        .'|(*:126)'
                                    .')'
                                    .'|tegory/([^/]++)/(?'
                                        .'|edit(*:158)'
                                        .'|delete(*:172)'
                                    .')'
                                .')'
                                .'|o(?'
                                    .'|ntact/(?'
                                        .'|(\\d+)(*:200)'
                                        .'|([^/]++)/(?'
                                            .'|delete(*:226)'
                                            .'|mark\\-as\\-(?'
                                                .'|read(*:251)'
                                                .'|unread(*:265)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|mmandes/([^/]++)(?'
                                        .'|(*:295)'
                                        .'|/(?'
                                            .'|modifier(*:315)'
                                            .'|facture(*:330)'
                                            .'|supprimer(*:347)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|product/([^/]++)/(?'
                                .'|edit(*:383)'
                                .'|delete(?'
                                    .'|\\-image/([^/]++)(*:416)'
                                    .'|(*:424)'
                                .')'
                            .')'
                            .'|flash\\-messages/([^/]++)/(?'
                                .'|edit(*:466)'
                                .'|delete(*:480)'
                                .'|toggle(*:494)'
                            .')'
                            .'|avis/([^/]++)/(?'
                                .'|approuver(*:529)'
                                .'|rejeter(*:544)'
                                .'|supprimer(*:561)'
                            .')'
                        .')'
                        .'|\\-fix/product/([^/]++)/edit(*:598)'
                    .')'
                    .'|pi/products/([^/]++)(*:627)'
                    .'|vis/([^/]++)/supprimer(*:657)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:694)'
                .'|/c(?'
                    .'|a(?'
                        .'|rt/(?'
                            .'|add/([^/]++)(*:729)'
                            .'|update/([^/]++)(*:752)'
                            .'|remove/([^/]++)(*:775)'
                        .')'
                        .'|tegorie/(\\d+)(*:797)'
                    .')'
                    .'|heckout/(?'
                        .'|confirmation/([^/]++)(*:838)'
                        .'|fedapay/verify/([^/]++)(*:869)'
                        .'|payment\\-success/([^/]++)(*:902)'
                    .')'
                .')'
                .'|/pro(?'
                    .'|du(?'
                        .'|it(?'
                            .'|s/(?'
                                .'|category/([^/]++)(*:951)'
                                .'|(\\d+)(*:964)'
                            .')'
                            .'|/([^/]++)/avis/nouveau(*:995)'
                        .')'
                        .'|ct/([^/]++)/review(*:1022)'
                    .')'
                    .'|file/orders/([^/]++)(*:1052)'
                .')'
                .'|/reset\\-password/reset/([^/]++)(*:1093)'
                .'|/favoris/(?'
                    .'|ajouter/([^/]++)(*:1130)'
                    .'|supprimer/([^/]++)(*:1157)'
                    .'|verifie/([^/]++)(*:1182)'
                    .'|basculer/([^/]++)(*:1208)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        55 => [[['_route' => 'admin_admin_user_edit', '_controller' => 'App\\Controller\\AdminController::editUser'], ['id'], null, null, false, false, null]],
        71 => [[['_route' => 'admin_admin_user_delete', '_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id'], null, null, false, false, null]],
        105 => [[['_route' => 'admin_carousel_show', '_controller' => 'App\\Controller\\Admin\\AdminCarouselController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        118 => [[['_route' => 'admin_carousel_edit', '_controller' => 'App\\Controller\\Admin\\AdminCarouselController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        126 => [[['_route' => 'admin_carousel_delete', '_controller' => 'App\\Controller\\Admin\\AdminCarouselController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        158 => [[['_route' => 'admin_category_edit', '_controller' => 'App\\Controller\\Admin\\AdminController::editCategory'], ['id'], null, null, false, false, null]],
        172 => [[['_route' => 'admin_category_delete', '_controller' => 'App\\Controller\\Admin\\AdminController::deleteCategory'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        200 => [[['_route' => 'app_admin_contact_show', '_controller' => 'App\\Controller\\Admin\\ContactAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        226 => [[['_route' => 'app_admin_contact_delete', '_controller' => 'App\\Controller\\Admin\\ContactAdminController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        251 => [[['_route' => 'app_admin_contact_mark_read', '_controller' => 'App\\Controller\\Admin\\ContactAdminController::markAsRead'], ['id'], ['POST' => 0], null, false, false, null]],
        265 => [[['_route' => 'app_admin_contact_mark_unread', '_controller' => 'App\\Controller\\Admin\\ContactAdminController::markAsUnread'], ['id'], ['POST' => 0], null, false, false, null]],
        295 => [[['_route' => 'admin_order_view', '_controller' => 'App\\Controller\\AdminController::viewOrder'], ['id'], null, null, false, true, null]],
        315 => [[['_route' => 'admin_order_edit', '_controller' => 'App\\Controller\\AdminController::editOrder'], ['id'], null, null, false, false, null]],
        330 => [[['_route' => 'admin_order_invoice', '_controller' => 'App\\Controller\\AdminController::orderInvoice'], ['id'], null, null, false, false, null]],
        347 => [[['_route' => 'admin_order_delete', '_controller' => 'App\\Controller\\AdminController::deleteOrder'], ['id'], null, null, false, false, null]],
        383 => [[['_route' => 'admin_product_edit', '_controller' => 'App\\Controller\\Admin\\AdminController::editProduct'], ['id'], null, null, false, false, null]],
        416 => [[['_route' => 'admin_product_delete_image', '_controller' => 'App\\Controller\\Admin\\AdminController::deleteProductImage'], ['id', 'imageNumber'], ['POST' => 0], null, false, true, null]],
        424 => [[['_route' => 'admin_product_delete', '_controller' => 'App\\Controller\\Admin\\AdminController::deleteProduct'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        466 => [[['_route' => 'admin_flash_message_edit', '_controller' => 'App\\Controller\\Admin\\FlashMessageAdminController::edit'], ['id'], null, null, false, false, null]],
        480 => [[['_route' => 'admin_flash_message_delete', '_controller' => 'App\\Controller\\Admin\\FlashMessageAdminController::delete'], ['id'], null, null, false, false, null]],
        494 => [[['_route' => 'admin_flash_message_toggle', '_controller' => 'App\\Controller\\Admin\\FlashMessageAdminController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        529 => [[['_route' => 'admin_review_approve', '_controller' => 'App\\Controller\\Admin\\ReviewController::approve'], ['id'], ['GET' => 0], null, false, false, null]],
        544 => [[['_route' => 'admin_review_reject', '_controller' => 'App\\Controller\\Admin\\ReviewController::reject'], ['id'], ['GET' => 0], null, false, false, null]],
        561 => [[['_route' => 'admin_review_delete', '_controller' => 'App\\Controller\\Admin\\ReviewController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        598 => [[['_route' => 'admin_fix_product_edit', '_controller' => 'App\\Controller\\Admin\\AdminControllerUploadFix::editProduct'], ['id'], null, null, false, false, null]],
        627 => [[['_route' => 'api_products_get_by_id', '_controller' => 'App\\Controller\\Api\\ProductApiController::getProduct'], ['id'], ['GET' => 0], null, false, true, null]],
        657 => [[['_route' => 'app_review_delete', '_controller' => 'App\\Controller\\ReviewController::delete'], ['id'], null, null, false, false, null]],
        694 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        729 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], ['POST' => 0], null, false, true, null]],
        752 => [[['_route' => 'cart_update', '_controller' => 'App\\Controller\\CartController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        775 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], ['POST' => 0], null, false, true, null]],
        797 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], null, null, false, true, null]],
        838 => [[['_route' => 'checkout_confirmation', '_controller' => 'App\\Controller\\CheckoutController::confirmation'], ['id'], null, null, false, true, null]],
        869 => [[['_route' => 'checkout_fedapay_verify', '_controller' => 'App\\Controller\\CheckoutController::verifyFedaPayPayment'], ['id'], ['POST' => 0], null, false, true, null]],
        902 => [[['_route' => 'checkout_payment_success', '_controller' => 'App\\Controller\\CheckoutController::paymentSuccess'], ['id'], null, null, false, true, null]],
        951 => [[['_route' => 'product_category_by_slug', '_controller' => 'App\\Controller\\ProductController::categoryBySlug'], ['slug'], null, null, false, true, null]],
        964 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], null, null, false, true, null]],
        995 => [[['_route' => 'app_review_new', '_controller' => 'App\\Controller\\ReviewController::new'], ['productId'], null, null, false, false, null]],
        1022 => [[['_route' => 'review_add', '_controller' => 'App\\Controller\\ReviewController::add'], ['id'], ['POST' => 0], null, false, false, null]],
        1052 => [[['_route' => 'app_profile_order_show', '_controller' => 'App\\Controller\\ProfileController::showOrder'], ['id'], null, null, false, true, null]],
        1093 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1130 => [[['_route' => 'wishlist_add', '_controller' => 'App\\Controller\\WishlistController::add'], ['id'], ['POST' => 0], null, false, true, null]],
        1157 => [[['_route' => 'wishlist_remove', '_controller' => 'App\\Controller\\WishlistController::remove'], ['id'], ['POST' => 0], null, false, true, null]],
        1182 => [[['_route' => 'wishlist_check', '_controller' => 'App\\Controller\\WishlistController::check'], ['id'], ['GET' => 0], null, false, true, null]],
        1208 => [
            [['_route' => 'wishlist_toggle', '_controller' => 'App\\Controller\\WishlistController::toggle'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
