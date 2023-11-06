<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__b61e4c31e475049c6b7c419b5c299e048ca120750117c582e9e65087f1562baf */
class __TwigTemplate_1a69619062973c6515fb37d51454bf4bca2c5df326725b10cf108e8b68dd8c6a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop_1.7.8.10/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop_1.7.8.10/img/app_icon.png\" />

<title>Gestionnaire de modules • testKongo</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesManage';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '1.7.8.10';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '99f5466bdf5e08aa8e200f3ce1cba342';
    var token_admin_orders = tokenAdminOrders = 'f9cf346659de08c5c3eda22abe8750c9';
    var token_admin_customers = '657c53bada3e9e6ed356a34b552edc36';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '014a325cd68e9ce9babfee63afde6ea4';
    var currentIndex = 'index.php?controller=AdminModulesManage';
    var employee_token = 'a3daa0697d3906aa0cf0d599bb58f675';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/prestashop_1.7.8.10/admin2294mykko/index.php/improve/modules/catalog/recommended?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag';
    var admin_notificati";
        // line 42
        echo "on_get_link = '/prestashop_1.7.8.10/admin2294mykko/index.php/common/notifications?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop_1.7.8.10/admin2294mykko/index.php/common/notifications/ack?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/prestashop_1.7.8.10/admin2294mykko/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_1.7.8.10/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_1.7.8.10/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_1.7.8.10/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_1.7.8.10/admin2294mykko/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_1.7.8.10/modules/ps_mbo/views/css/catalog.css?v=2.3.3\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_1.7.8.10/modules/ps_mbo/views/css/module-catalog.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_1.7.8.10/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_1.7.8.10/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop_1.7.8.10\\/admin2294mykko\\/\";
var baseDir = \"\\/prestashop_1.7.8.10\\/\";
var changeFormLanguageUrl = \"\\/prestashop_1.7.8.10\\/admin2294mykko\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=Vxxu33Q";
        // line 63
        echo "J3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.8.10/admin2294mykko/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.8.10/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.8.10/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.8.10/js/admin.js?v=1.7.8.10\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.8.10/admin2294mykko/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.8.10/js/tools.js?v=1.7.8.10\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.8.10/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.8.10/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.8.10/admin2294mykko/themes/default/js/vend";
        // line 81
        echo "or/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.8.10/modules/ps_mbo/views/js/recommended-modules.js?v=2.3.3\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/growl/jquery.growl.js?v=2.3.3\"></script>
<script type=\"text/javascript\" src=\"https://assets.prestashop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.8.10/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.8.10/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop_1.7.8.10/admin2294mykko/index.php/common/notifications?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 103
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminmodulesmanage\"
  data-base-url=\"/prestashop_1.7.8.10/admin2294mykko/index.php\"  data-token=\"Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8888/prestashop_1.7.8.10/admin2294mykko/index.php?controller=AdminDashboard&amp;token=ffc0eb2c9f85ed79ba4ce1fa61c00a3a\"></a>
      <span id=\"shop_version\">1.7.8.10</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/prestashop_1.7.8.10/admin2294mykko/index.php?controller=AdminOrders&amp;token=f9cf346659de08c5c3eda22abe8750c9\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/prestashop_1.7.8.10/admin2294mykko/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=03d6d1e4eb16a25bbf29b5b966f27d2a\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/prestashop_1.7.8.10/admin2294mykko/index.php/improve/modules/manage?token=20015ff67d5b2f1f013fa4c80705d599\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/prestashop_1.7.8.10/admin2294mykko/index.php?controller=AdminCartRules&amp;addcart_rule&amp";
        // line 137
        echo ";token=0cb6f4093e7c5195933c505db066b1c5\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/prestashop_1.7.8.10/admin2294mykko/index.php/sell/catalog/products/new?token=20015ff67d5b2f1f013fa4c80705d599\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/prestashop_1.7.8.10/admin2294mykko/index.php/sell/catalog/categories/new?token=20015ff67d5b2f1f013fa4c80705d599\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"138\"
        data-icon=\"icon-AdminModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/improve/modules/manage?-vCC6c9qvEYJA-5tCPS8fc7kag\"
        data-post-link=\"http://localhost:8888/prestashop_1.7.8.10/admin2294mykko/index.php?controller=AdminQuickAccesses&token=7f6e75c6b92856ca83c3aec3568a0080\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Modules - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8888/prestashop_1.7.8.10/admin2294mykko/index.php?controller=AdminQuickAccesses&token=7f6e75c6b92856ca83c3aec3568a0080\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop_1.7.8.10/admin2294mykko/index.php?controller=AdminSearch&amp;token=394d483a8860a84ceb194fd34aca9bd3\"
      role";
        // line 175
        echo "=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping";
        // line 191
        echo "-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost:8888/prestashop_1.7.8.10/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
 ";
        // line 242
        echo "             id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost:8888/prestashop_1.7.8.10/admin2294mykko/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=c8e5a97775bbde24ac258ca7d7a9462d\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
";
        // line 286
        echo "            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost:8888/prestashop_1.7.8.10/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Ravi de vous revoir Test</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/configure/advanced/employees/1/edit?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/ressources/documentation?utm_source=back-office&amp;ut";
        // line 334
        echo "m_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Documentation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/formation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Formation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Trouver un expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/fr/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Centre d'assistance</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost:8888/prestashop_1.7.8.10/admin2294mykko/index.php?controller=AdminLogin&amp;logout=1&amp;token=b9952886d6cbcd3acba29bfb5155383c\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop_1.7.8.10/admin2294mykko/index.php/configure/advanced/employees/toggle-navigation?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left";
        // line 353
        echo "</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost:8888/prestashop_1.7.8.10/admin2294mykko/index.php?controller=AdminDashboard&amp;token=ffc0eb2c9f85ed79ba4ce1fa61c00a3a\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/sell/orders/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                          ";
        // line 396
        echo "      <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/sell/orders/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/sell/orders/invoices/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/sell/orders/credit-slips/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/sell/orders/delivery-slips/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                              ";
        // line 426
        echo "              
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost:8888/prestashop_1.7.8.10/admin2294mykko/index.php?controller=AdminCarts&amp;token=c8e5a97775bbde24ac258ca7d7a9462d\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/sell/catalog/products?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/sell/catalog/products?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Produits
                                </a>
                              </li>

                            ";
        // line 457
        echo "                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/sell/catalog/categories?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/sell/catalog/monitoring/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost:8888/prestashop_1.7.8.10/admin2294mykko/index.php?controller=AdminAttributesGroups&amp;token=18c046dca4abd177bdbae498ced2f058\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop_1.7.8.10/admin22";
        // line 485
        echo "94mykko/index.php/sell/catalog/brands/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/sell/attachments/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost:8888/prestashop_1.7.8.10/admin2294mykko/index.php?controller=AdminCartRules&amp;token=0cb6f4093e7c5195933c505db066b1c5\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/sell/stocks/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                            ";
        // line 515
        echo "  
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/sell/customers/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/sell/customers/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/sell/addresses/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Adresses
                                </a>
                              </li>

                                          ";
        // line 546
        echo "                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost:8888/prestashop_1.7.8.10/admin2294mykko/index.php?controller=AdminCustomerThreads&amp;token=014a325cd68e9ce9babfee63afde6ea4\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost:8888/prestashop_1.7.8.10/admin2294mykko/index.php?controller=AdminCustomerThreads&amp;token=014a325cd68e9ce9babfee63afde6ea4\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop_1.7.8.10/";
        // line 575
        echo "admin2294mykko/index.php/sell/customer-service/order-messages/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost:8888/prestashop_1.7.8.10/admin2294mykko/index.php?controller=AdminReturn&amp;token=1e3cc089023d02342360381fbb8a3043\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/modules/metrics/legacy/stats?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                               ";
        // line 606
        echo "                             
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/modules/metrics/legacy/stats?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Statistiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"141\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/modules/metrics?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/modules/addons/modules/catalog?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Mod";
        // line 640
        echo "ules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/modules/addons/modules/catalog?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/improve/modules/manage?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThem";
        // line 669
        echo "es\">
                    <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/improve/design/themes/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/improve/design/themes/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"139\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/modules/addons/themes/catalog?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Catalogue de thèmes
                                </a>
                              </li>

                                                                                  
                              
                       ";
        // line 698
        echo "                                     
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/improve/design/mail_theme/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/improve/design/cms-pages/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/improve/design/modules/positions/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost:8888/prestashop_1.7.8.10/admin2294mykko/index.php?controller=AdminImages&amp;token=52022736205a0ad5ebae0be0f5b31e4f\" class=\"link\"> Images
                 ";
        // line 725
        echo "               </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/modules/link-widget/list?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost:8888/prestashop_1.7.8.10/admin2294mykko/index.php?controller=AdminCarriers&amp;token=194cda4254d08c8838379fe43fdb9dd3\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                      ";
        // line 757
        echo "          <a href=\"http://localhost:8888/prestashop_1.7.8.10/admin2294mykko/index.php?controller=AdminCarriers&amp;token=194cda4254d08c8838379fe43fdb9dd3\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/improve/shipping/preferences/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/improve/payment/payment_methods?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
     ";
        // line 788
        echo "                                                       
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/improve/payment/payment_methods?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Moyens de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/improve/payment/preferences?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/improve/international/localization/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                           ";
        // line 817
        echo " </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/improve/international/localization/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/improve/international/zones/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/improve/international/taxes/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-";
        // line 846
        echo "AdminTranslations\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/improve/international/translations/settings?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"142\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost:8888/prestashop_1.7.8.10/admin2294mykko/index.php?controller=AdminPsfacebookModule&amp;token=747e8309d7eac34dc05d9c200a23aa96\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-142\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"143\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost:8888/prestashop_1.7.8.10/admin2294mykko/index.php?controller=AdminPsfacebookModule&amp;token=747e8309d7eac34dc05d9c200a23aa96\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                           ";
        // line 876
        echo "                                                       
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost:8888/prestashop_1.7.8.10/admin2294mykko/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=13fea2132138059b9ca01e965712549f\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/configure/shop/preferences/preferences?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                              ";
        // line 911
        echo "        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/configure/shop/preferences/preferences?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/configure/shop/order-preferences/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/configure/shop/product-preferences/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/configu";
        // line 939
        echo "re/shop/customer-preferences/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/configure/shop/contacts/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/configure/shop/seo-urls/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost:8888/prestashop_1.7.8.10/admin2294mykko/index.php?controller=AdminSearchConf&amp;token=73fc1ad12285149ae5fdd1bdc20d32bd\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                             ";
        // line 969
        echo " 
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/configure/advanced/system-information/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/configure/advanced/system-information/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/configure/advanced/performance/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Performances
       ";
        // line 997
        echo "                         </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/configure/advanced/administration/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/configure/advanced/emails/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/configure/advanced/import/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
             ";
        // line 1028
        echo "                   <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/configure/advanced/employees/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/configure/advanced/sql-requests/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/configure/advanced/logs/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/configure/advanced/webservice-keys/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                       ";
        // line 1056
        echo "                                                                                       
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/configure/advanced/feature-flags/?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" class=\"link\"> Fonctionnalités expérimentales
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Gestionnaire de modules </li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/improve/modules/manage?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" aria-current=\"page\">Modules</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Gestionnaire de modules          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Installer un module\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">cloud_upload</i>                  Installer un module
         ";
        // line 1105
        echo "       </a>
                                                                        <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-addons_connect\"
                  href=\"#\"                  title=\"Se connecter à la marketplace Addons\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">vpn_key</i>                  Se connecter à la marketplace Addons
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop_1.7.8.10/admin2294mykko/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D1.7.8.10%2526country%253Dfr/Aide?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  ";
        // line 1133
        echo "                            <li class=\"nav-item\">
                    <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/improve/modules/manage?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"45\">
                      Modules
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/improve/modules/alerts?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"46\">
                      Alertes
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop_1.7.8.10/admin2294mykko/index.php/improve/modules/updates?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"47\">
                      Mises à jour
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                       ";
        // line 1157
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Installer un module\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Installer un module
              <i class=\"material-icons\">cloud_upload</i>            </a>
                                        <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-addons_connect\"
              href=\"#\"              title=\"Se connecter à la marketplace Addons\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Se connecter à la marketplace Addons
              <i class=\"material-icons\">vpn_key</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\"";
        // line 1180
        echo " href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop_1.7.8.10/admin2294mykko/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D1.7.8.10%2526country%253Dfr/Aide?_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Recommended modules',
        'description': \"Voici une sélection de modules,<\\strong> compatibles avec votre boutique <\\/strong>, pour vous aider à atteindre vos objectifs.\",
        'Close': 'Fermer',
      },
      recommendedModulesUrl: '/prestashop_1.7.8.10/admin2294mykko/index.php/modules/addons/modules/recommended?tabClassName=AdminModulesManage&_token=Vxxu33QJ3v4crhsiR-vCC6c9qvEYJA-5tCPS8fc7kag',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 0,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1221
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://localhost:8888/prestashop_1.7.8.10/admin2294mykko/index.php?controller=AdminDashboard&amp;token=ffc0eb2c9f85ed79ba4ce1fa61c00a3a\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=kevinkongo%40yahoo.com&amp;firstname=Test&amp;lastname=Test&amp;website=http%3A%2F%2Flocalhost%3A8888%2Fprestashop_1.7.8.10%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/prestashop_1.7.8.10/admin2294mykko/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement ";
        // line 1267
        echo "tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=kevinkongo%40yahoo.com&amp;firstname=Test&amp;lastname=Test&amp;website=http%3A%2F%2Flocalhost%3A8888%2Fprestashop_1.7.8.10%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6";
        // line 1307
        echo "\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1329
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 103
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1221
    public function block_content_header($context, array $blocks = [])
    {
    }

    public function block_content($context, array $blocks = [])
    {
    }

    public function block_content_footer($context, array $blocks = [])
    {
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1329
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__b61e4c31e475049c6b7c419b5c299e048ca120750117c582e9e65087f1562baf";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1493 => 1329,  1476 => 1221,  1467 => 103,  1458 => 1329,  1434 => 1307,  1392 => 1267,  1340 => 1221,  1297 => 1180,  1272 => 1157,  1246 => 1133,  1216 => 1105,  1165 => 1056,  1135 => 1028,  1102 => 997,  1072 => 969,  1040 => 939,  1010 => 911,  973 => 876,  941 => 846,  910 => 817,  879 => 788,  846 => 757,  812 => 725,  783 => 698,  752 => 669,  721 => 640,  685 => 606,  652 => 575,  621 => 546,  588 => 515,  556 => 485,  526 => 457,  493 => 426,  461 => 396,  416 => 353,  395 => 334,  345 => 286,  299 => 242,  246 => 191,  228 => 175,  188 => 137,  149 => 103,  125 => 81,  105 => 63,  82 => 42,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b61e4c31e475049c6b7c419b5c299e048ca120750117c582e9e65087f1562baf", "");
    }
}
