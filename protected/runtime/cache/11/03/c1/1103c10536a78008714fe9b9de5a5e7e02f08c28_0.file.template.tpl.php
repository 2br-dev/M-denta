<?php
/* Smarty version 3.1.32, created on 2018-10-29 11:38:26
  from 'C:\OpenServer\domains\mdenta.local\protected\app\core\admin-template\view\shopping\orders\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd6c7020c3011_53506367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1103c10536a78008714fe9b9de5a5e7e02f08c28' => 
    array (
      0 => 'C:\\OpenServer\\domains\\mdenta.local\\protected\\app\\core\\admin-template\\view\\shopping\\orders\\template.tpl',
      1 => 1508678880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/controll.tpl' => 2,
  ),
),false)) {
function content_5bd6c7020c3011_53506367 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/html" id="tpl_status_payment"><div class="popover" id="popover-status_payment"><span class="popover__triangle"></span><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings']->value['status_payment'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?><li><?php $_smarty_tpl->_subTemplateRender("file:system/controll.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"radio",'needle'=>"0",'addclass'=>"controll_fill",'name'=>"payment[]",'value'=>$_smarty_tpl->tpl_vars['order']->value['value'],'text'=>$_smarty_tpl->tpl_vars['order']->value['variable']), 0, true);
?></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/html" id="tpl_status_delivery"><div class="popover" id="popover-status_delivery"><span class="popover__triangle"></span><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings']->value['status_delivery'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?><li><?php $_smarty_tpl->_subTemplateRender("file:system/controll.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"radio",'needle'=>"0",'addclass'=>"controll_fill",'name'=>"delivery[]",'value'=>$_smarty_tpl->tpl_vars['order']->value['value'],'text'=>$_smarty_tpl->tpl_vars['order']->value['variable']), 0, true);
?></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><?php echo '</script'; ?>
>



<?php }
}
