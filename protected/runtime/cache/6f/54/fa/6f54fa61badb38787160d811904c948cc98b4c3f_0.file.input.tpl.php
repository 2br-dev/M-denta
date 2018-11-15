<?php
/* Smarty version 3.1.32, created on 2018-11-09 21:02:55
  from '/home/b/burdilo/m-denta.ru/public_html/protected/app/core/admin-template/fields/input.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be5cbcf7561d4_51810304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f54fa61badb38787160d811904c948cc98b4c3f' => 
    array (
      0 => '/home/b/burdilo/m-denta.ru/public_html/protected/app/core/admin-template/fields/input.tpl',
      1 => 1541677088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be5cbcf7561d4_51810304 (Smarty_Internal_Template $_smarty_tpl) {
?><input name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="<?php echo $_smarty_tpl->tpl_vars['class_name']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><?php }
}
