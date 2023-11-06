<?php
/* Smarty version 3.1.48, created on 2023-11-06 18:40:56
  from '/Applications/MAMP/htdocs/prestashop_1.7.8.10/admin2294mykko/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_65492528021632_27496034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d15470fac6c6a43f5ad35e6630e62ac408521f3' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop_1.7.8.10/admin2294mykko/themes/default/template/content.tpl',
      1 => 1699100498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65492528021632_27496034 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
