<?php
/* Smarty version 3.1.32, created on 2018-10-26 15:23:41
  from 'C:\OpenServer\domains\mdenta.local\protected\app\core\admin-template\view\settings\menu\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd3074d2469a4_93099035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8da0bee8a8607f86c7e9c23d93c2d41928f2f46' => 
    array (
      0 => 'C:\\OpenServer\\domains\\mdenta.local\\protected\\app\\core\\admin-template\\view\\settings\\menu\\edit.tpl',
      1 => 1469786304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/group.tpl' => 1,
    'file:system/buttons.tpl' => 1,
  ),
),false)) {
function content_5bd3074d2469a4_93099035 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_GET['msg']) && $_GET['msg'] == "apply") {?><div class="apply"><b>Данные были успешно сохранены!</b></div><?php }?><form method="post" id="form_mdd"><input type="hidden" name="action" value="menu_edit"><input type="hidden" name="post_id" value="<?php echo $_smarty_tpl->tpl_vars['menu_edit']->value['id'];?>
"><table id="meta_data" class="table"><colgroup><col width="200"><col></colgroup><tbody><tr class="th"><td class="h hl va_m">Наименование меню</td><td><input name="name" class="w50 ness" value="<?php echo $_smarty_tpl->tpl_vars['menu_edit']->value['name'];?>
"></td></tr><tr class="th"><td class="h hl va_m">Системное имя</td><td><input name="system" class="w50 ness js-binding<?php if ($_smarty_tpl->tpl_vars['menu_edit']->value['system']) {?> js-binding-init<?php }?>" data-binding-name="name" data-binding-element="system" value="<?php echo $_smarty_tpl->tpl_vars['menu_edit']->value['system'];?>
"></td></tr><tr class="th"><td class="h hl va_m">Отображать подменю</td><td><?php $_smarty_tpl->_subTemplateRender("file:system/group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"tree",'check'=>$_smarty_tpl->tpl_vars['menu_edit']->value['tree'],'list'=>array(array('value'=>1,'text'=>"Да"),array('value'=>0,'text'=>"Нет",'default'=>true))), 0, false);
?></td></tr></tbody></table><?php $_smarty_tpl->_subTemplateRender("file:system/buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></form><?php }
}
