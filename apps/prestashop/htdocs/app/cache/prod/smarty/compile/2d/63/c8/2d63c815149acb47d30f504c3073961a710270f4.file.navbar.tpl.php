<?php /* Smarty version Smarty-3.1.19, created on 2018-06-20 09:42:39
         compiled from "/home/lr26/prestashop-1.7.3.3-0/apps/prestashop/htdocs/modules/welcome/views/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2023351955b2a056f4580c5-79875265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d63c815149acb47d30f504c3073961a710270f4' => 
    array (
      0 => '/home/lr26/prestashop-1.7.3.3-0/apps/prestashop/htdocs/modules/welcome/views/navbar.tpl',
      1 => 1514913948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2023351955b2a056f4580c5-79875265',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'percent_rounded' => 0,
    'percent_real' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b2a056f45bc55_74059279',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2a056f45bc55_74059279')) {function content_5b2a056f45bc55_74059279($_smarty_tpl) {?>

<div class="onboarding-navbar">
  <div class="row text">
    <div class="col-md-8">
      <?php echo smartyTranslate(array('s'=>'Launch your shop!','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

    </div>
    <div class="col-md-4 text-right text-md-right"><?php echo $_smarty_tpl->tpl_vars['percent_rounded']->value;?>
%</div>
  </div>
  <div class="progress">
    <div class="bar" role="progressbar" style="width:<?php echo $_smarty_tpl->tpl_vars['percent_real']->value;?>
%;"></div>
  </div>
  <div>
    <button class="btn btn-main btn-sm onboarding-button-resume"><?php echo smartyTranslate(array('s'=>'Resume','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
  </div>
  <div>
    <a class="btn -small btn-main btn-sm onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Stop the OnBoarding','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</a>
  </div>
</div>
<?php }} ?>
