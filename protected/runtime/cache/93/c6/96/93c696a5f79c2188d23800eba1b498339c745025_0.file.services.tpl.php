<?php
/* Smarty version 3.1.32, created on 2018-11-23 12:28:03
  from 'C:\OpenServer\domains\mdenta.local\protected\themes\base\smarty\components\services.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf7c823cd7ac9_66241767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93c696a5f79c2188d23800eba1b498339c745025' => 
    array (
      0 => 'C:\\OpenServer\\domains\\mdenta.local\\protected\\themes\\base\\smarty\\components\\services.tpl',
      1 => 1542897200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf7c823cd7ac9_66241767 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['uri']->value[0] == '') {?><div class="main-content content-advantages"><?php if (isset($_smarty_tpl->tpl_vars['_sitemenu']->value['services'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_sitemenu']->value['services'], 'e');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
?><div class="main-content content-advantages-item"><a href="/<?php echo $_smarty_tpl->tpl_vars['e']->value['system'];?>
" class="srv-<?php echo $_smarty_tpl->tpl_vars['e']->value['system'];?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value['name'];?>
</a></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></div><?php } else { ?><section class="navigation"><div class="navigation-links"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_sitemenu']->value['services'], 'e');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
?><a href="/<?php echo $_smarty_tpl->tpl_vars['e']->value['system'];?>
" class="navigation-links-link"><?php echo $_smarty_tpl->tpl_vars['e']->value['name'];?>
</a><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></section><?php }
}
}
