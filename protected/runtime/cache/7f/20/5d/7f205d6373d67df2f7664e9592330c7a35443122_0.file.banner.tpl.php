<?php
/* Smarty version 3.1.32, created on 2018-11-23 12:28:03
  from 'C:\OpenServer\domains\mdenta.local\protected\themes\base\smarty\components\banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf7c823c61e21_92548929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f205d6373d67df2f7664e9592330c7a35443122' => 
    array (
      0 => 'C:\\OpenServer\\domains\\mdenta.local\\protected\\themes\\base\\smarty\\components\\banner.tpl',
      1 => 1542897200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf7c823c61e21_92548929 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['uri']->value[0] == '') {?><div class="main-content content-jumbotron"><h1>Стоматологическая клиника в Краснодаре<br><strong>M-Denta</strong></h1><div class="main-content content-input"><form id="form-banner" method="post" action='send.php'><input id="phone1" type="text" placeholder="Ваш номер телефона" name="phone" required><input type="hidden" name="field" value="Поле на баннере"><button type="submit">Записаться на бесплатный приём</button></form></div></div><?php }
}
}
