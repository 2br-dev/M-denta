<?php
/* Smarty version 3.1.32, created on 2018-12-03 18:52:05
  from '/home/b/burdilo/m-denta.ru/public_html/protected/app/core/admin-template/view/structure/index/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c055125882273_17857070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a207017a0eb5da9503d93759c01582a052665e5a' => 
    array (
      0 => '/home/b/burdilo/m-denta.ru/public_html/protected/app/core/admin-template/view/structure/index/index.tpl',
      1 => 1541677088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c055125882273_17857070 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="dd-tree"><?php $_smarty_tpl->_assignInScope('structure_item', $_smarty_tpl->tpl_vars['tv_struct']->value);
if (!empty($_smarty_tpl->tpl_vars['structure_item']->value)) {?><div class="dd nestable-tree" data-path="structure" data-group="0"><ol class="dd-list"><?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/structure_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('a_tree'=>$_smarty_tpl->tpl_vars['structure_item']->value), 0, true);
?></ol></div><?php }?></div>

<?php }
}
