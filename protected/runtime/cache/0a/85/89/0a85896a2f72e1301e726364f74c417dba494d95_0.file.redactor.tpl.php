<?php
/* Smarty version 3.1.32, created on 2018-10-30 16:37:00
  from 'C:\OpenServer\domains\mdenta.local\protected\app\core\admin-template\fields\redactor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd85e7ccf8f36_79784765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a85896a2f72e1301e726364f74c417dba494d95' => 
    array (
      0 => 'C:\\OpenServer\\domains\\mdenta.local\\protected\\app\\core\\admin-template\\fields\\redactor.tpl',
      1 => 1515767444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/redactor.tpl' => 1,
  ),
),false)) {
function content_5bd85e7ccf8f36_79784765 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:system/redactor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('redactor_type'=>$_smarty_tpl->tpl_vars['settings']->value['f_redactor'],'redactor_id'=>$_smarty_tpl->tpl_vars['name']->value,'redactor_name'=>$_smarty_tpl->tpl_vars['name']->value,'redactor_value'=>$_smarty_tpl->tpl_vars['value']->value), 0, false);
}
}
