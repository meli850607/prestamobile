<?php /* Smarty version Smarty-3.1.19, created on 2018-06-20 09:42:20
         compiled from "/home/lr26/prestashop-1.7.3.3-0/apps/prestashop/htdocs/administration/themes/new-theme/template/components/layout/search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13099234855b2a055c03c334-13426530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1e123ec4dcaa12369473351082c81cacb241060' => 
    array (
      0 => '/home/lr26/prestashop-1.7.3.3-0/apps/prestashop/htdocs/administration/themes/new-theme/template/components/layout/search_form.tpl',
      1 => 1527176670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13099234855b2a055c03c334-13426530',
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
  'unifunc' => 'content_5b2a055c058eb0_25695946',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2a055c058eb0_25695946')) {function content_5b2a055c058eb0_25695946($_smarty_tpl) {?>

<form id="header_search"
      class="bo_search_form dropdown-form js-dropdown-form collapsed"
      method="post"
      action="<?php echo $_smarty_tpl->tpl_vars['baseAdminUrl']->value;?>
index.php?controller=AdminSearch&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminSearch'),$_smarty_tpl);?>
"
      role="search">
  <input type="hidden" name="bo_search_type" id="bo_search_type" class="js-search-type" />
  <?php if (isset($_smarty_tpl->tpl_vars['show_clear_btn']->value)&&$_smarty_tpl->tpl_vars['show_clear_btn']->value) {?>
    <a href="#" class="clear_search hide"><i class="icon-remove"></i></a>
  <?php }?>
  <div class="input-group">
    <input type="text" class="form-control js-form-search" id="bo_query" name="bo_query" value="<?php echo $_smarty_tpl->tpl_vars['bo_query']->value;?>
" placeholder="<?php echo smartyTranslate(array('s'=>'Search (e.g.: product reference, customer name…)'),$_smarty_tpl);?>
">
    <div class="input-group-btn">
      <button type="button" class="btn btn-outline-secondary dropdown-toggle js-dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo smartyTranslate(array('s'=>'Everywhere'),$_smarty_tpl);?>

      </button>
      <div class="dropdown-menu js-items-list">
        <a class="dropdown-item" data-item="<?php echo smartyTranslate(array('s'=>'Everywhere'),$_smarty_tpl);?>
" href="#" data-value="0" data-placeholder="<?php echo smartyTranslate(array('s'=>'What are you looking for?'),$_smarty_tpl);?>
" data-icon="icon-search"><i class="material-icons">search</i> <?php echo smartyTranslate(array('s'=>'Everywhere'),$_smarty_tpl);?>
</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" data-item="<?php echo smartyTranslate(array('s'=>'Catalog'),$_smarty_tpl);?>
" href="#" data-value="1" data-placeholder="<?php echo smartyTranslate(array('s'=>'Product name, SKU, reference...'),$_smarty_tpl);?>
" data-icon="icon-book"><i class="material-icons">store_mall_directory</i> <?php echo smartyTranslate(array('s'=>'Catalog'),$_smarty_tpl);?>
</a>
        <a class="dropdown-item" data-item="<?php echo smartyTranslate(array('s'=>'Customers'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'by name'),$_smarty_tpl);?>
" href="#" data-value="2" data-placeholder="<?php echo smartyTranslate(array('s'=>'Email, name...'),$_smarty_tpl);?>
" data-icon="icon-group"><i class="material-icons">group</i> <?php echo smartyTranslate(array('s'=>'Customers'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'by name'),$_smarty_tpl);?>
</a>
        <a class="dropdown-item" data-item="<?php echo smartyTranslate(array('s'=>'Customers'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'by ip address'),$_smarty_tpl);?>
" href="#" data-value="6" data-placeholder="<?php echo smartyTranslate(array('s'=>'123.45.67.89'),$_smarty_tpl);?>
" data-icon="icon-desktop"><i class="material-icons">desktop_mac</i> <?php echo smartyTranslate(array('s'=>'Customers'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'by IP address'),$_smarty_tpl);?>
</a>
        <a class="dropdown-item" data-item="<?php echo smartyTranslate(array('s'=>'Orders'),$_smarty_tpl);?>
" href="#" data-value="3" data-placeholder="<?php echo smartyTranslate(array('s'=>'Order ID'),$_smarty_tpl);?>
" data-icon="icon-credit-card"><i class="material-icons">shopping_basket</i> <?php echo smartyTranslate(array('s'=>'Orders'),$_smarty_tpl);?>
</a>
        <a class="dropdown-item" data-item="<?php echo smartyTranslate(array('s'=>'Invoices'),$_smarty_tpl);?>
" href="#" data-value="4" data-placeholder="<?php echo smartyTranslate(array('s'=>'Invoice Number'),$_smarty_tpl);?>
" data-icon="icon-book"><i class="material-icons">book</i></i> <?php echo smartyTranslate(array('s'=>'Invoices'),$_smarty_tpl);?>
</a>
        <a class="dropdown-item" data-item="<?php echo smartyTranslate(array('s'=>'Carts'),$_smarty_tpl);?>
" href="#" data-value="5" data-placeholder="<?php echo smartyTranslate(array('s'=>'Cart ID'),$_smarty_tpl);?>
" data-icon="icon-shopping-cart"><i class="material-icons">shopping_cart</i> <?php echo smartyTranslate(array('s'=>'Carts'),$_smarty_tpl);?>
</a>
        <a class="dropdown-item" data-item="<?php echo smartyTranslate(array('s'=>'Modules'),$_smarty_tpl);?>
" href="#" data-value="7" data-placeholder="<?php echo smartyTranslate(array('s'=>'Module name'),$_smarty_tpl);?>
" data-icon="icon-puzzle-piece"><i class="material-icons">extension</i> <?php echo smartyTranslate(array('s'=>'Modules'),$_smarty_tpl);?>
</a>
      </div>
      <button class="btn btn-primary" type="submit"><span class="d-none"><?php echo smartyTranslate(array('s'=>'SEARCH'),$_smarty_tpl);?>
</span><i class="material-icons">search</i></button>
    </div>
  </div>
</form>

<script type="text/javascript">
 $(document).ready(function(){
  <?php if (isset($_smarty_tpl->tpl_vars['search_type']->value)&&$_smarty_tpl->tpl_vars['search_type']->value) {?>
    $('.search-option a[data-value='+<?php echo intval($_smarty_tpl->tpl_vars['search_type']->value);?>
+']').click();
  <?php }?>
  $('#bo_query').one('click', function() {
    $(this).closest('form').removeClass('collapsed');
  });
});
</script>
<?php }} ?>
