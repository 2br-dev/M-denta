<?php
/* Smarty version 3.1.32, created on 2018-11-23 12:28:03
  from 'C:\OpenServer\domains\mdenta.local\protected\themes\base\smarty\components\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf7c823afecb9_40001240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81a73ca82932a59803cab531d0a051a69251271f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\mdenta.local\\protected\\themes\\base\\smarty\\components\\header.tpl',
      1 => 1542897667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf7c823afecb9_40001240 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="header"><a href="/"><img class="header-logo"src="/img/logo.png" alt="M-Denta"></a><?php if (isset($_smarty_tpl->tpl_vars['_sitemenu']->value['header_menu'])) {?><div class="header-links"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_sitemenu']->value['header_menu'], 'e');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
?><a href="/<?php echo $_smarty_tpl->tpl_vars['e']->value['system'];?>
" class="header-links-link" title="<?php echo $_smarty_tpl->tpl_vars['e']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value['name'];?>
</a><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }?><div class="header-contacts"><a href="https://www.instagram.com/stomatolog_evgeney/" target="_blank"><img src="/img/instagram.png" alt="Instagram" class="header-contacts-instagram">stomatolog_evgeney</a><a href="https://www.instagram.com/stomatolog_evgeney/" target="_blank"><img src="/img/stomatolog_evgeney.jpg" alt="Instagram" class="header-contacts-instagram" style="border-radius: 50%"><span id="inst_count"></span> подписчиков</a></div><div class="header-adress"><a href="tel:+78612980851" class="header-contacts-phone">+7 (861) 298-08-51</a><a href="#" class="header-contacts-phone header-contacts-phone-desc">+7 (861) 298-08-51</a><p> г. Краснодар, ул. Северная, 490, БЦ"Кутузовский", кабинет 603</p></div></header><div class="hamburger"><div class="hamburger-flex"><a href="/"><div class="hamburger-logo"></div></a><div class="hamburger-phone"><a href="tel:+78612980851">+7 (861) 298-08-51</a></div><div class="menu"><span class="bar"></span><span class="bar" style="display: none"></span></div></div><div class="hamburger-slide"><div class="hamburger-slide-container"><div class="hamburger-slide-contacts"><a class="hamburger-instagram" href="https://www.instagram.com/stomatolog_evgeney/" target="_blank"><img src="/img/instagram.png" alt="Instagram" class="header-contacts-instagram">stomatolog_evgeney</a><a class="hamburger-adress" href="https://www.google.com/maps/search/%D0%BC-%D0%B4%D0%B5%D0%BD%D1%82%D0%B0/@45.0366387,38.9945174,17z/data=!3m1!4b1">г. Краснодар, ул. Северная, 490</a></div><?php if (isset($_smarty_tpl->tpl_vars['_sitemenu']->value['header_menu'])) {?><div class="hamburger-links"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_sitemenu']->value['services'], 'e');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
?><a href="/<?php echo $_smarty_tpl->tpl_vars['e']->value['system'];?>
" class="hamburger-links-link"><?php echo $_smarty_tpl->tpl_vars['e']->value['name'];?>
</a><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><div class="hamburger-links"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_sitemenu']->value['header_menu'], 'e');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
?><a href="/<?php echo $_smarty_tpl->tpl_vars['e']->value['system'];?>
" class="hamburger-links-link"><?php echo $_smarty_tpl->tpl_vars['e']->value['name'];?>
</a><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php }?></div></div></div>
<?php }
}
