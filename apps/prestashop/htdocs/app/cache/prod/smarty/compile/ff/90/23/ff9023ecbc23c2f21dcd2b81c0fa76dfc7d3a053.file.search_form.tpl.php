<?php /* Smarty version Smarty-3.1.19, created on 2018-06-20 09:42:39
         compiled from "/home/lr26/prestashop-1.7.3.3-0/apps/prestashop/htdocs/administration/themes/default/template/search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2011985665b2a056f4074f8-42051850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff9023ecbc23c2f21dcd2b81c0fa76dfc7d3a053' => 
    array (
      0 => '/home/lr26/prestashop-1.7.3.3-0/apps/prestashop/htdocs/administration/themes/default/template/search_form.tpl',
      1 => 1527176670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2011985665b2a056f4074f8-42051850',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseAdminUrl' => 0,
    'show_clear_btn' => 0,
    'bo_query' => 0,
    'search_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b2a056f418fa9_00345305',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2a056f418fa9_00345305')) {function content_5b2a056f418fa9_00345305($_smarty_tpl) {?>
<form id="header_search" class="bo_search_form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['baseAdminUrl']->value;?>
index.php?controller=AdminSearch&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminSearch'),$_smarty_tpl);?>
" role="search">
	<div class="form-group">
		<input type="hidden" name="bo_search_type" id="bo_search_type" />
		<div class="input-group">
			<div class="input-group-btn">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					<i id="search_type_icon" class="icon-search"></i>
					<i class="icon-caret-down"></i>
				</button>
				<ul id="header_search_options" class="dropdown-menu">
					<li class="search-all search-option active">
						<a href="#" data-value="0" data-placeholder="<?php echo smartyTranslate(array('s'=>'What are you looking for?','d'=>'Admin.Navigation.Header'),$_smarty_tpl);?>
" data-icon="icon-search">
							<i class="icon-search"></i> <?php echo smartyTranslate(array('s'=>'Everywhere','d'=>'Admin.Navigation.Header'),$_smarty_tpl);?>
</a>
					</li>
					<li class="divider"></li>
					<li class="search-book search-option">
						<a href="#" data-value="1" data-placeholder="<?php echo smartyTranslate(array('s'=>'Product name, SKU, reference...','d'=>'Admin.Navigation.Header'),$_smarty_tpl);?>
" data-icon="icon-book">
							<i class="icon-book"></i> <?php echo smartyTranslate(array('s'=>'Catalog','d'=>'Admin.Navigation.Menu'),$_smarty_tpl);?>

						</a>
					</li>
					<li class="search-customers-name search-option">
						<a href="#" data-value="2" data-placeholder="<?php echo smartyTranslate(array('s'=>'Email, name...','d'=>'Admin.Navigation.Header'),$_smarty_tpl);?>
" data-icon="icon-group">
							<i class="icon-group"></i> <?php echo smartyTranslate(array('s'=>'Customers by name','d'=>'Admin.Navigation.Header'),$_smarty_tpl);?>

						</a>
					</li>
					<li class="search-customers-addresses search-option">
						<a href="#" data-value="6" data-placeholder="<?php echo smartyTranslate(array('s'=>'123.45.67.89'),$_smarty_tpl);?>
" data-icon="icon-desktop">
							<i class="icon-desktop"></i> <?php echo smartyTranslate(array('s'=>'Customers by IP address','d'=>'Admin.Navigation.Header'),$_smarty_tpl);?>
</a>
					</li>
					<li class="search-orders search-option">
						<a href="#" data-value="3" data-placeholder="<?php echo smartyTranslate(array('s'=>'Order ID','d'=>'Admin.Navigation.Header'),$_smarty_tpl);?>
" data-icon="icon-credit-card">
							<i class="icon-credit-card"></i> <?php echo smartyTranslate(array('s'=>'Orders','d'=>'Admin.Global'),$_smarty_tpl);?>

						</a>
					</li>
					<li class="search-invoices search-option">
						<a href="#" data-value="4" data-placeholder="<?php echo smartyTranslate(array('s'=>'Invoice Number','d'=>'Admin.Navigation.Header'),$_smarty_tpl);?>
" data-icon="icon-book">
							<i class="icon-book"></i> <?php echo smartyTranslate(array('s'=>'Invoices','d'=>'Admin.Navigation.Menu'),$_smarty_tpl);?>

						</a>
					</li>
					<li class="search-carts search-option">
						<a href="#" data-value="5" data-placeholder="<?php echo smartyTranslate(array('s'=>'Cart ID','d'=>'Admin.Navigation.Header'),$_smarty_tpl);?>
" data-icon="icon-shopping-cart">
							<i class="icon-shopping-cart"></i> <?php echo smartyTranslate(array('s'=>'Carts','d'=>'Admin.Global'),$_smarty_tpl);?>

						</a>
					</li>
					<li class="search-modules search-option">
						<a href="#" data-value="7" data-placeholder="<?php echo smartyTranslate(array('s'=>'Module name','d'=>'Admin.Navigation.Header'),$_smarty_tpl);?>
" data-icon="icon-puzzle-piece">
							<i class="icon-puzzle-piece"></i> <?php echo smartyTranslate(array('s'=>'Modules','d'=>'Admin.Global'),$_smarty_tpl);?>

						</a>
					</li>
				</ul>
			</div>
			<?php if (isset($_smarty_tpl->tpl_vars['show_clear_btn']->value)&&$_smarty_tpl->tpl_vars['show_clear_btn']->value) {?>
			<a href="#" class="clear_search hide"><i class="icon-remove"></i></a>
			<?php }?>
			<input id="bo_query" name="bo_query" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['bo_query']->value;?>
" placeholder="<?php echo smartyTranslate(array('s'=>'Search','d'=>'Admin.Actions'),$_smarty_tpl);?>
" />
<!--  							<span class="input-group-btn">
				<button type="submit" id="bo_search_submit" class="btn btn-primary">
					<i class="icon-search"></i>
				</button>
			</span> -->
		</div>
	</div>

	<script>
		<?php if (isset($_smarty_tpl->tpl_vars['search_type']->value)&&$_smarty_tpl->tpl_vars['search_type']->value) {?>
			$(document).ready(function() {
				$('.search-option a[data-value='+<?php echo intval($_smarty_tpl->tpl_vars['search_type']->value);?>
+']').click();
			});
		<?php }?>
	</script>
</form>
<?php }} ?>
