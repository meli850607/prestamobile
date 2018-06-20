<?php /* Smarty version Smarty-3.1.19, created on 2018-06-19 16:40:52
         compiled from "/home/lr26/prestashop-1.7.3.3-0/apps/prestashop/htdocs/administration/themes/default/template/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20916939995b2915f45b10a3-38460065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c88455d13af1c5db9e3c345016ae04c54e7ec689' => 
    array (
      0 => '/home/lr26/prestashop-1.7.3.3-0/apps/prestashop/htdocs/administration/themes/default/template/helpers/tree/tree_toolbar.tpl',
      1 => 1527176670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20916939995b2915f45b10a3-38460065',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b2915f45bad88_40546683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2915f45bad88_40546683')) {function content_5b2915f45bad88_40546683($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div>
<?php }} ?>
