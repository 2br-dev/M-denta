<?php
/* Smarty version 3.1.32, created on 2018-11-26 09:02:34
  from '/home/b/burdilo/m-denta.ru/public_html/protected/app/core/admin-template/fields/select.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bfb8c7af10df5_77898989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '390de8ed87b25bbc462ef0a71afc63f7afecda98' => 
    array (
      0 => '/home/b/burdilo/m-denta.ru/public_html/protected/app/core/admin-template/fields/select.tpl',
      1 => 1541677088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfb8c7af10df5_77898989 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="<?php echo $_smarty_tpl->tpl_vars['class_name']->value;?>
"><select name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" data-placeholder="Выбрать" tabindex="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><option value="0">---</option><?php if (isset($_smarty_tpl->tpl_vars['list']->value) && !empty($_smarty_tpl->tpl_vars['list']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'e');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['e']->value['value'];?>
"<?php if ($_smarty_tpl->tpl_vars['e']->value['value'] == $_smarty_tpl->tpl_vars['value']->value || isset($_smarty_tpl->tpl_vars['e']->value['checked']) && $_smarty_tpl->tpl_vars['e']->value['checked'] == 1) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['e']->value['var'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></select></div><?php }
}
