<?php
/* Smarty version 3.1.32, created on 2018-11-09 21:02:55
  from '/home/b/burdilo/m-denta.ru/public_html/protected/app/core/admin-template/fields/date.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be5cbcf7864c2_62432960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3d29ce4f217c7eabc00dd83a2b03d9e08fd5908' => 
    array (
      0 => '/home/b/burdilo/m-denta.ru/public_html/protected/app/core/admin-template/fields/date.tpl',
      1 => 1541677088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be5cbcf7864c2_62432960 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="calendar input-group"><input name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if (isset($_smarty_tpl->tpl_vars['onchange']->value)) {?> onchange="<?php echo $_smarty_tpl->tpl_vars['onchange']->value;?>
"<?php }?> class="calendar-input<?php if (isset($_smarty_tpl->tpl_vars['class_name']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['class_name']->value;
}?>" <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['f_date_format'])) {?> data-format="<?php echo $_smarty_tpl->tpl_vars['settings']->value['f_date_format'];?>
"<?php }?> tabindex="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><span class="zmdi zmdi-calendar selector input-group-addon"></span></div><?php }
}
