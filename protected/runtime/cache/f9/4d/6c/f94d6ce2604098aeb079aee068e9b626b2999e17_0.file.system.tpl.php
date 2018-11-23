<?php
/* Smarty version 3.1.32, created on 2018-11-23 10:43:50
  from 'C:\OpenServer\domains\mdenta.local\protected\app\core\admin-template\fields\system.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf7afb67a2480_98848123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f94d6ce2604098aeb079aee068e9b626b2999e17' => 
    array (
      0 => 'C:\\OpenServer\\domains\\mdenta.local\\protected\\app\\core\\admin-template\\fields\\system.tpl',
      1 => 1542897031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf7afb67a2480_98848123 (Smarty_Internal_Template $_smarty_tpl) {
?><input name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="<?php echo $_smarty_tpl->tpl_vars['class_name']->value;?>
 js-binding" data-binding-name="<?php echo $_smarty_tpl->tpl_vars['settings']->value['f_binding'];?>
" data-binding-element="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><?php }
}
