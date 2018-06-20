<?php /* Smarty version Smarty-3.1.19, created on 2018-06-19 15:09:52
         compiled from "/home/lr26/prestashop-1.7.3.3-0/apps/prestashop/htdocs/administration/themes/default/template/controllers/groups/helpers/view/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5334680935b2900a0164218-63283757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '384f0b5ae92f0cbd13cf6d7bdc16eba6a14e591e' => 
    array (
      0 => '/home/lr26/prestashop-1.7.3.3-0/apps/prestashop/htdocs/administration/themes/default/template/controllers/groups/helpers/view/view.tpl',
      1 => 1527176670,
      2 => 'file',
    ),
    '5c04e5d71f302e4d61295138faf963dbb8e86a23' => 
    array (
      0 => '/home/lr26/prestashop-1.7.3.3-0/apps/prestashop/htdocs/administration/themes/default/template/helpers/view/view.tpl',
      1 => 1527176670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5334680935b2900a0164218-63283757',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name_controller' => 0,
    'hookName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b2900a018a3b0_65479730',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2900a018a3b0_65479730')) {function content_5b2900a018a3b0_65479730($_smarty_tpl) {?>

<div class="leadin"></div>


<div class="row">
	<div class="col-lg-6">
		<div class="panel">
			<h3><i class="icon-group"></i> <?php echo smartyTranslate(array('s'=>'Group information','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl);?>
</h3>
			<h2><i class="icon-group"></i> <?php echo $_smarty_tpl->tpl_vars['group']->value->name[$_smarty_tpl->tpl_vars['language']->value->id];?>
</h2>
			<div class="form-horizontal">
				<div class="form-group">
					<label class="col-lg-3 control-label"><?php echo smartyTranslate(array('s'=>'Discount:'),$_smarty_tpl);?>
</label>
					<div class="col-lg-3"><p class="form-control-static"><?php echo smartyTranslate(array('s'=>'Discount: %.2f%%','sprintf'=>array($_smarty_tpl->tpl_vars['group']->value->reduction),'d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl);?>
</p></div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label"><?php echo smartyTranslate(array('s'=>'Price display method:','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl);?>
</label>
					<div class="col-lg-3"><p class="form-control-static"><?php if ($_smarty_tpl->tpl_vars['group']->value->price_display_method) {?>
					<?php echo smartyTranslate(array('s'=>'Tax excluded','d'=>'Admin.Global'),$_smarty_tpl);?>

				<?php } else { ?>
					<?php echo smartyTranslate(array('s'=>'Tax included','d'=>'Admin.Global'),$_smarty_tpl);?>

				<?php }?></p></div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label"><?php echo smartyTranslate(array('s'=>'Show prices:','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl);?>
</label>
					<div class="col-lg-3"><p class="form-control-static"><?php if ($_smarty_tpl->tpl_vars['group']->value->show_prices) {?><?php echo smartyTranslate(array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl);?>
<?php }?></p></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="panel">
			<h3><i class="icon-dollar"></i> <?php echo smartyTranslate(array('s'=>'Current category discount','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl);?>
</h3>
			<?php if (!$_smarty_tpl->tpl_vars['categorieReductions']->value) {?>
				<div class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'None','d'=>'Admin.Global'),$_smarty_tpl);?>
</div>
			<?php } else { ?>
				<table class="table">
					<thead>
						<tr>
							<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Category','d'=>'Admin.Global'),$_smarty_tpl);?>
</span></th>
							<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Discount','d'=>'Admin.Global'),$_smarty_tpl);?>
</span></th>
						</tr>
					</thead>
					<tbody>
					<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categorieReductions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['category']->key;
?>
						<tr class="alt_row">
							<td><?php echo $_smarty_tpl->tpl_vars['category']->value['path'];?>
</td>
							<td><?php echo smartyTranslate(array('s'=>'Discount: %.2f%%','sprintf'=>array($_smarty_tpl->tpl_vars['category']->value['reduction']),'d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl);?>
</td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			<?php }?>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<h2><?php echo smartyTranslate(array('s'=>'Members of this customer group','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl);?>
</h2>
		<p><?php echo smartyTranslate(array('s'=>'Limited to the first 100 customers.','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'Please use filters to narrow your search.','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl);?>
</p>
		<?php echo $_smarty_tpl->tpl_vars['customerList']->value;?>

	</div>
</div>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminView'),$_smarty_tpl);?>

<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)) {?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
View<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php } elseif (isset($_GET['controller'])) {?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
View<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
