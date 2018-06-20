<?php /* Smarty version Smarty-3.1.19, created on 2018-06-19 16:40:41
         compiled from "/home/lr26/prestashop-1.7.3.3-0/apps/prestashop/htdocs/administration/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20368969905b2915e915c419-98704096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '356ffa19e0137f705b1ef64d09f314f03514b464' => 
    array (
      0 => '/home/lr26/prestashop-1.7.3.3-0/apps/prestashop/htdocs/administration/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1527176670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20368969905b2915e915c419-98704096',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b2915e9160659_79692387',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2915e9160659_79692387')) {function content_5b2915e9160659_79692387($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
