<?php
/* Smarty version 3.1.32, created on 2018-11-23 10:57:08
  from 'C:\OpenServer\domains\mdenta.local\protected\app\core\admin-template\system\controll.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf7b2d4d85d93_91171517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2ba50f03f94c49278c73cd568bd7ad0af95c26f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\mdenta.local\\protected\\app\\core\\admin-template\\system\\controll.tpl',
      1 => 1542897031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf7b2d4d85d93_91171517 (Smarty_Internal_Template $_smarty_tpl) {
?><label class="controll<?php if ($_smarty_tpl->tpl_vars['addclass']->value) {?> <?php echo $_smarty_tpl->tpl_vars['addclass']->value;
}?>"<?php if ($_smarty_tpl->tpl_vars['id']->value) {?> id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php }
if ($_smarty_tpl->tpl_vars['title']->value) {?> title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"<?php }?>><input type="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" class="controll__input<?php if ($_smarty_tpl->tpl_vars['ctrlclass']->value) {?> <?php echo $_smarty_tpl->tpl_vars['ctrlclass']->value;
}?>"<?php if (isset($_smarty_tpl->tpl_vars['value']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"<?php }
if ($_smarty_tpl->tpl_vars['onchange']->value) {?> onchange="<?php echo $_smarty_tpl->tpl_vars['onchange']->value;?>
"<?php }
if ($_smarty_tpl->tpl_vars['ctrlid']->value) {?> id="<?php echo $_smarty_tpl->tpl_vars['ctrlid']->value;?>
"<?php }
if ($_smarty_tpl->tpl_vars['name']->value) {?> name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['needle']->value) && $_smarty_tpl->tpl_vars['needle']->value == $_smarty_tpl->tpl_vars['value']->value) || (isset($_smarty_tpl->tpl_vars['checked']->value) && $_smarty_tpl->tpl_vars['checked']->value === true)) {?> checked<?php }?>><span class="controll__visible controll__visible_<?php echo $_smarty_tpl->tpl_vars['type']->value;
if ($_smarty_tpl->tpl_vars['content']->value) {?> controll__visible--contented<?php }?>"><?php if ($_smarty_tpl->tpl_vars['content']->value) {
echo $_smarty_tpl->tpl_vars['content']->value;
}?></span><?php if ($_smarty_tpl->tpl_vars['text']->value) {?><span class="controll__text"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</span><?php }?></label><?php if ($_smarty_tpl->tpl_vars['hint']->value) {?><span class="controll__hint"><?php echo $_smarty_tpl->tpl_vars['hint']->value;?>
</span><?php }
}
}
