<?php
/* Smarty version 3.1.32, created on 2018-11-12 14:36:32
  from '/home/b/burdilo/m-denta.ru/public_html/protected/app/core/admin-template/system/editor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be965c0b9fe83_74041208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f552bddb68013cbf8ebfc31400239785dde532b5' => 
    array (
      0 => '/home/b/burdilo/m-denta.ru/public_html/protected/app/core/admin-template/system/editor.tpl',
      1 => 1541677088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be965c0b9fe83_74041208 (Smarty_Internal_Template $_smarty_tpl) {
if (!isset($_smarty_tpl->tpl_vars['editor_type']->value)) {
$_smarty_tpl->_assignInScope('editor_type', "codemirror");
}
if (!isset($_smarty_tpl->tpl_vars['editor_hightlight']->value)) {
$_smarty_tpl->_assignInScope('editor_hightlight', "smarty");
}?><textarea name="<?php echo $_smarty_tpl->tpl_vars['editor_name']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['editor_id']->value;?>
" class="CodeMirror js-editor" data-editor="<?php echo $_smarty_tpl->tpl_vars['editor_type']->value;?>
" data-hightlight="<?php echo $_smarty_tpl->tpl_vars['editor_hightlight']->value;?>
" rows="5" cols="50"><?php echo $_smarty_tpl->tpl_vars['editor_cont']->value;?>
</textarea><?php }
}
