<?php
/* Smarty version 3.1.48, created on 2023-11-06 18:40:29
  from '/Applications/MAMP/htdocs/prestashop_1.7.8.10/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6549250d03c4f3_28713285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e3a65d8c3b57fd3bc5f3bde3af489deadce4a60' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop_1.7.8.10/themes/classic/templates/_partials/helpers.tpl',
      1 => 1699100510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6549250d03c4f3_28713285 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/Applications/MAMP/htdocs/prestashop_1.7.8.10/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/4e/3a/65/4e3a65d8c3b57fd3bc5f3bde3af489deadce4a60_2.file.helpers.tpl.php',
    'uid' => '4e3a65d8c3b57fd3bc5f3bde3af489deadce4a60',
    'call_name' => 'smarty_template_function_renderLogo_18166130766549250d0371e1_37453808',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_18166130766549250d0371e1_37453808 */
if (!function_exists('smarty_template_function_renderLogo_18166130766549250d0371e1_37453808')) {
function smarty_template_function_renderLogo_18166130766549250d0371e1_37453808(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_18166130766549250d0371e1_37453808 */
}
