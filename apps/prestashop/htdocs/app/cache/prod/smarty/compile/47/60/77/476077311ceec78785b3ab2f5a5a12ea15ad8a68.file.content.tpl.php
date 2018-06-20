<?php /* Smarty version Smarty-3.1.19, created on 2018-06-20 09:42:39
         compiled from "/home/lr26/prestashop-1.7.3.3-0/apps/prestashop/htdocs/administration/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6520521725b2a056f2c8169-06429762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '476077311ceec78785b3ab2f5a5a12ea15ad8a68' => 
    array (
      0 => '/home/lr26/prestashop-1.7.3.3-0/apps/prestashop/htdocs/administration/themes/default/template/content.tpl',
      1 => 1527176670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6520521725b2a056f2c8169-06429762',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b2a056f2cac50_68324455',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2a056f2cac50_68324455')) {function content_5b2a056f2cac50_68324455($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
