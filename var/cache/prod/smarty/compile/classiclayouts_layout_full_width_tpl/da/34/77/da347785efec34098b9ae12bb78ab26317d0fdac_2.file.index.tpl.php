<?php
/* Smarty version 3.1.48, created on 2023-11-06 18:44:46
  from '/Applications/MAMP/htdocs/prestashop_1.7.8.10/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6549260e4ed6c8_92049709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da347785efec34098b9ae12bb78ab26317d0fdac' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop_1.7.8.10/themes/classic/templates/index.tpl',
      1 => 1699100510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6549260e4ed6c8_92049709 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20650686026549260e4eaee4_34772693', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_4678026426549260e4eb506_36911947 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_12933303886549260e4ec2d8_38048846 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_14649414696549260e4ebd48_76407412 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12933303886549260e4ec2d8_38048846', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_20650686026549260e4eaee4_34772693 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_20650686026549260e4eaee4_34772693',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_4678026426549260e4eb506_36911947',
  ),
  'page_content' => 
  array (
    0 => 'Block_14649414696549260e4ebd48_76407412',
  ),
  'hook_home' => 
  array (
    0 => 'Block_12933303886549260e4ec2d8_38048846',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4678026426549260e4eb506_36911947', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14649414696549260e4ebd48_76407412', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
