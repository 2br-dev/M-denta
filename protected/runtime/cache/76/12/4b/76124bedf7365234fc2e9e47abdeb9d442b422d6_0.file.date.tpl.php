<?php
/* Smarty version 3.1.32, created on 2018-11-22 18:37:56
  from 'C:\OpenServer\domains\mdenta.local\protected\app\core\admin-template\fields\date.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf6cd54413955_00296607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76124bedf7365234fc2e9e47abdeb9d442b422d6' => 
    array (
      0 => 'C:\\OpenServer\\domains\\mdenta.local\\protected\\app\\core\\admin-template\\fields\\date.tpl',
      1 => 1542897031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf6cd54413955_00296607 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="calendar input-group"><input name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if (isset($_smarty_tpl->tpl_vars['onchange']->value)) {?> onchange="<?php echo $_smarty_tpl->tpl_vars['onchange']->value;?>
"<?php }?> class="calendar-input<?php if (isset($_smarty_tpl->tpl_vars['class_name']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['class_name']->value;
}?>" <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['f_date_format'])) {?> data-format="<?php echo $_smarty_tpl->tpl_vars['settings']->value['f_date_format'];?>
"<?php }?> tabindex="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><span class="zmdi zmdi-calendar selector input-group-addon"></span></div><?php }
}
