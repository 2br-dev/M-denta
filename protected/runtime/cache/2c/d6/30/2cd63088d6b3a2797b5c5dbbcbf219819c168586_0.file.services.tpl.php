<?php
/* Smarty version 3.1.32, created on 2018-11-26 10:01:50
  from '/home/b/burdilo/m-denta.ru/public_html/protected/themes/base/smarty/components/services.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bfb9a5e142c70_37042860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cd63088d6b3a2797b5c5dbbcbf219819c168586' => 
    array (
      0 => '/home/b/burdilo/m-denta.ru/public_html/protected/themes/base/smarty/components/services.tpl',
      1 => 1541677089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfb9a5e142c70_37042860 (Smarty_Internal_Template $_smarty_tpl) {
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
