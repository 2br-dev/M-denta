<?php
/* Smarty version 3.1.32, created on 2018-11-23 10:48:29
  from 'C:\OpenServer\domains\mdenta.local\protected\app\core\admin-template\fields\input.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf7b0cd0df6c3_53969480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bec6bac1681f7e7d12d445503db43449564a90c5' => 
    array (
      0 => 'C:\\OpenServer\\domains\\mdenta.local\\protected\\app\\core\\admin-template\\fields\\input.tpl',
      1 => 1542897031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf7b0cd0df6c3_53969480 (Smarty_Internal_Template $_smarty_tpl) {
?><input name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="<?php echo $_smarty_tpl->tpl_vars['class_name']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><?php }
}