<?php
/* Smarty version 3.1.32, created on 2018-11-09 21:02:55
  from '/home/b/burdilo/m-denta.ru/public_html/protected/app/core/admin-template/fields/redactor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be5cbcf75bbf0_81640647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '863f7e97963c8d1541489dfc4fc093c840cfb321' => 
    array (
      0 => '/home/b/burdilo/m-denta.ru/public_html/protected/app/core/admin-template/fields/redactor.tpl',
      1 => 1541677088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/redactor.tpl' => 1,
  ),
),false)) {
function content_5be5cbcf75bbf0_81640647 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:system/redactor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('redactor_type'=>$_smarty_tpl->tpl_vars['settings']->value['f_redactor'],'redactor_id'=>$_smarty_tpl->tpl_vars['name']->value,'redactor_name'=>$_smarty_tpl->tpl_vars['name']->value,'redactor_value'=>$_smarty_tpl->tpl_vars['value']->value), 0, false);
}
}
