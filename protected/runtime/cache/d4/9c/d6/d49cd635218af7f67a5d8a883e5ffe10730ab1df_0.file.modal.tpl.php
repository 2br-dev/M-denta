<?php
/* Smarty version 3.1.32, created on 2018-11-22 17:20:32
  from '/home/b/burdilo/m-denta.ru/public_html/protected/themes/base/smarty/components/modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf6bb30ba7049_17030658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd49cd635218af7f67a5d8a883e5ffe10730ab1df' => 
    array (
      0 => '/home/b/burdilo/m-denta.ru/public_html/protected/themes/base/smarty/components/modal.tpl',
      1 => 1541677089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf6bb30ba7049_17030658 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal modal-first-touch wow fadeIn" data-wow-delay=".5s">
	<a href="#" class="modal-close"></a>
	<form id="form-modal" method="post" action='send.php'>
		<p class="black-centre-24">Введите ваш номер телефона,
и мы вам перезвоним</p>
		<input id="submit-modal" type="text" name="phone" class="modal-input" required>
		<input type="hidden" name="field" value="Всплывающая форма">
		<button class="modal-button btn">Отправить</button>
	</form>
</div>

<div class="modal-wrapper wow fadeIn"></div>

<div class="modal modal-reaction wow flip">
	<a href="#" class="modal-close"></a>
		<p class="black-centre-24">Спасибо!</p>
		<p class="black-centre-24">Мы перезвоним вам в ближайшее время</p>
		<img src="/img/calback.png" alt="перезвоните нам">
		<img class="callback" src="/img/callback-circle.png" alt="перезвоните нам">
</div><?php }
}
