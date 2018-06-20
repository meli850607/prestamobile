<?php /* Smarty version Smarty-3.1.19, created on 2018-06-20 09:42:19
         compiled from "/home/lr26/prestashop-1.7.3.3-0/apps/prestashop/htdocs/administration/themes/new-theme/template/page_header_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16743436485b2a055be8b4a3-62939468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f68c11e62879a7d7413890c173990a822de4c3f6' => 
    array (
      0 => '/home/lr26/prestashop-1.7.3.3-0/apps/prestashop/htdocs/administration/themes/new-theme/template/page_header_toolbar.tpl',
      1 => 1527176670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16743436485b2a055be8b4a3-62939468',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'breadcrumbs2' => 0,
    'title' => 0,
    'toolbar_btn' => 0,
    'k' => 0,
    'btn' => 0,
    'table' => 0,
    'help_link' => 0,
    'enableSidebar' => 0,
    'headerTabContent' => 0,
    'tabContent' => 0,
    'current_tab_level' => 0,
    'tabs' => 0,
    'level_1' => 0,
    'level_2' => 0,
    'level_3' => 0,
    'level_4' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b2a055bee07c8_81124835',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2a055bee07c8_81124835')) {function content_5b2a055bee07c8_81124835($_smarty_tpl) {?>

<div class="header-toolbar">

  
    <nav class="breadcrumb">

      <?php if ($_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['name']!='') {?>
        <?php if ($_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['href']!='') {?>
          <a class="breadcrumb-item" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['href']);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['name']);?>
</a>
        <?php }?>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['breadcrumbs2']->value['tab']['name']!=''&&$_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['name']!=$_smarty_tpl->tpl_vars['breadcrumbs2']->value['tab']['name']) {?>
        <?php if ($_smarty_tpl->tpl_vars['breadcrumbs2']->value['tab']['href']!='') {?>
          <a class="breadcrumb-item active" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['breadcrumbs2']->value['tab']['href']);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['breadcrumbs2']->value['tab']['name']);?>
</a>
        <?php }?>
      <?php }?>

    </nav>
  

  
    <h2 class="title">
      <?php if (is_array($_smarty_tpl->tpl_vars['title']->value)) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(end($_smarty_tpl->tpl_vars['title']->value));?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['title']->value);?>
<?php }?>
    </h2>
  

  
    <div class="toolbar-icons">
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayDashboardToolbarTopMenu'),$_smarty_tpl);?>

      <?php  $_smarty_tpl->tpl_vars['btn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['btn']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['toolbar_btn']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['btn']->key => $_smarty_tpl->tpl_vars['btn']->value) {
$_smarty_tpl->tpl_vars['btn']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['btn']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['k']->value!='back'&&$_smarty_tpl->tpl_vars['k']->value!='modules-list') {?>
          
          <a
            class="mx-1 btn btn-primary <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['target'])&&$_smarty_tpl->tpl_vars['btn']->value['target']) {?> _blank<?php }?> pointer"<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['href'])) {?>
            id="page-header-desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['imgclass'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['btn']->value['imgclass']);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
<?php }?>"
            href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['btn']->value['href']);?>
"<?php }?>
            title="<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['help'])) {?><?php echo $_smarty_tpl->tpl_vars['btn']->value['help'];?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['btn']->value['desc']);?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['js'])&&$_smarty_tpl->tpl_vars['btn']->value['js']) {?>
            onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['btn']->value['modal_target'])&&$_smarty_tpl->tpl_vars['btn']->value['modal_target']) {?>
            data-target="<?php echo $_smarty_tpl->tpl_vars['btn']->value['modal_target'];?>
"
            data-toggle="modal"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['btn']->value['help'])) {?>
            data-toggle="pstooltip"
            data-placement="bottom"<?php }?>
          >
            <i class="material-icons"><?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
</i>
            <span class="title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['btn']->value['desc']);?>
</span>
          </a>
        <?php }?>
      <?php } ?>
      <?php if (isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['modules-list'])) {?>
        
        <a
          class="toolbar-button toolbar_btn<?php if (isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['modules-list']['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['modules-list']['class'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['modules-list']['target'])&&$_smarty_tpl->tpl_vars['toolbar_btn']->value['modules-list']['target']) {?> _blank<?php }?>"
          id="page-header-desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-<?php if (isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['modules-list']['imgclass'])) {?><?php echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['modules-list']['imgclass'];?>
<?php } else { ?>modules-list<?php }?>"
          <?php if (isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['modules-list']['href'])) {?>href="<?php echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['modules-list']['href'];?>
"<?php }?>
          title="<?php echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['modules-list']['desc'];?>
"
          <?php if (isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['modules-list']['js'])&&$_smarty_tpl->tpl_vars['toolbar_btn']->value['modules-list']['js']) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['modules-list']['js'];?>
"<?php }?>
        >
          <?php if (isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['modules-list']['imgclass'])) {?>
            <i class="process-icon-<?php echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['modules-list']['imgclass'];?>
"></i>
          <?php } else { ?>
            <i class="material-icons">extension</i>
          <?php }?>
          <span class="title"><?php echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['modules-list']['desc'];?>
</span>
        </a>
      <?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['help_link']->value)) {?>

        <?php if ($_smarty_tpl->tpl_vars['enableSidebar']->value) {?>
          <a class="toolbar-button btn-help btn-sidebar" href="#"
             title="<?php echo smartyTranslate(array('s'=>'Help'),$_smarty_tpl);?>
"
             data-toggle="sidebar"
             data-target="#right-sidebar"
             data-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['help_link']->value);?>
"
             id="product_form_open_help"
          >
            <i class="material-icons">help</i>
            <span class="title"><?php echo smartyTranslate(array('s'=>'Help'),$_smarty_tpl);?>
</span>
          </a>
        <?php } else { ?>
          <a class="toolbar-button" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['help_link']->value);?>
" title="<?php echo smartyTranslate(array('s'=>'Help'),$_smarty_tpl);?>
">
            <i class="material-icons">help</i>
            <span class="title"><?php echo smartyTranslate(array('s'=>'Help'),$_smarty_tpl);?>
</span>
          </a>
        <?php }?>
      <?php }?>
    </div>
  
  <?php if (isset($_smarty_tpl->tpl_vars['headerTabContent']->value)) {?>
      <div class="page-head-tabs" id="head_tabs">
      <?php  $_smarty_tpl->tpl_vars['tabContent'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tabContent']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['headerTabContent']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tabContent']->key => $_smarty_tpl->tpl_vars['tabContent']->value) {
$_smarty_tpl->tpl_vars['tabContent']->_loop = true;
?>
          <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tabContent']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>

      <?php } ?>
      </div>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['current_tab_level']->value==3) {?>
    <div class="page-head-tabs">
      <?php  $_smarty_tpl->tpl_vars['level_1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['level_1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['level_1']->key => $_smarty_tpl->tpl_vars['level_1']->value) {
$_smarty_tpl->tpl_vars['level_1']->_loop = true;
?>
        <?php  $_smarty_tpl->tpl_vars['level_2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['level_2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['level_1']->value['sub_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['level_2']->key => $_smarty_tpl->tpl_vars['level_2']->value) {
$_smarty_tpl->tpl_vars['level_2']->_loop = true;
?>
          <?php  $_smarty_tpl->tpl_vars['level_3'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['level_3']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['level_2']->value['sub_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['level_3']->key => $_smarty_tpl->tpl_vars['level_3']->value) {
$_smarty_tpl->tpl_vars['level_3']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['level_3']->value['current']) {?>
              <?php  $_smarty_tpl->tpl_vars['level_4'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['level_4']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['level_3']->value['sub_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['level_4']->key => $_smarty_tpl->tpl_vars['level_4']->value) {
$_smarty_tpl->tpl_vars['level_4']->_loop = true;
?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['level_4']->value['href'];?>
" <?php if ($_smarty_tpl->tpl_vars['level_4']->value['current']) {?>class="current"<?php }?>><?php echo $_smarty_tpl->tpl_vars['level_4']->value['name'];?>
</a>
              <?php } ?>
            <?php }?>
          <?php } ?>
        <?php } ?>
      <?php } ?>
    </div>
  <?php }?>
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayDashboardTop'),$_smarty_tpl);?>

</div>
<?php }} ?>
