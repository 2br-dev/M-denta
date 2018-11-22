<?php
/* Smarty version 3.1.32, created on 2018-11-22 17:20:32
  from '/home/b/burdilo/m-denta.ru/public_html/protected/themes/base/smarty/components/scripts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf6bb30bf4a02_87002755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32ce1fb4ab270e27b0af4b5b24fa0f47d988a28b' => 
    array (
      0 => '/home/b/burdilo/m-denta.ru/public_html/protected/themes/base/smarty/components/scripts.tpl',
      1 => 1541677089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf6bb30bf4a02_87002755 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/b/burdilo/m-denta.ru/public_html/protected/app/libs/smarty.plugins/function.compress.php','function'=>'smarty_function_compress',),));
?><!-- <?php echo '<script'; ?>
 src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"><?php echo '</script'; ?>
> --><?php echo smarty_function_compress(array('attr'=>'data-no-instant','mode'=>'js','source'=>array(array('file'=>'/js/vendor.min.js'),array('file'=>'/js/app.min.js'))),$_smarty_tpl);
if (isset($_smarty_tpl->tpl_vars['suggestions']->value)) {?><!--[if lt IE 10]><?php echo '<script'; ?>
 type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"><?php echo '</script'; ?>
><![endif]--><?php echo '<script'; ?>
 type="text/javascript" src="https://dadata.ru/static/js/lib/jquery.suggestions-15.12.min.js"><?php echo '</script'; ?>
><?php }?><!-- Dependencies --><?php echo '<script'; ?>
 type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="/apps/libs/jquery.maskedinput-master/src/jquery.maskedinput.js" type="text/javascript"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="/apps/libs/lightbox/dist/js/lightbox.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript" src="/slick/slick.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="/apps/libs/WOW-master/dist/wow.min.js"><?php echo '</script'; ?>
><!-- Main JavaScript File --><?php echo '<script'; ?>
 type="text/javascript" src="/static/js/script.js"><?php echo '</script'; ?>
></body></html><?php }
}
