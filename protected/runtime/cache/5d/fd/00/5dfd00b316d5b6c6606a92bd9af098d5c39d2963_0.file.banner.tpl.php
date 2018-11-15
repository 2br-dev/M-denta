<?php
/* Smarty version 3.1.32, created on 2018-11-15 12:34:54
  from '/home/b/burdilo/m-denta.ru/public_html/protected/themes/base/smarty/components/banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bed3dbe8461a2_69423561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dfd00b316d5b6c6606a92bd9af098d5c39d2963' => 
    array (
      0 => '/home/b/burdilo/m-denta.ru/public_html/protected/themes/base/smarty/components/banner.tpl',
      1 => 1541808856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bed3dbe8461a2_69423561 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['uri']->value[0] == '') {?><div class="main-content content-jumbotron"><p><strong>"M-Denta"</strong><br> Авторская стоматологическая клиника</p><div class="main-content content-input"><form id="form-banner" method="post" action='send.php'><input id="phone1" type="text" placeholder="Ваш номер телефона" name="phone" required><input type="hidden" name="field" value="Поле на баннере"><button type="submit">Записаться на бесплатный приём</button></form></div></div><?php }
}
}
