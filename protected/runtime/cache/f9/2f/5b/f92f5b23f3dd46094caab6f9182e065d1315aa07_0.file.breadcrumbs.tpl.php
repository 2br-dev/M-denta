<?php
/* Smarty version 3.1.32, created on 2018-10-26 15:48:21
  from 'C:\OpenServer\domains\mdenta.local\protected\themes\base\smarty\components\breadcrumbs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd30d15e10587_63173695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f92f5b23f3dd46094caab6f9182e065d1315aa07' => 
    array (
      0 => 'C:\\OpenServer\\domains\\mdenta.local\\protected\\themes\\base\\smarty\\components\\breadcrumbs.tpl',
      1 => 1469786304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd30d15e10587_63173695 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['uri']->value[1]) && isset($_smarty_tpl->tpl_vars['_breadcrumbs']->value)) {?>
<nav class="breadcrumbs clearfix"><ol class="breadcrumbs__list" itemscope itemtype="http://schema.org/BreadcrumbList"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_breadcrumbs']->value, 'i', false, NULL, 'breadcrumbs', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumbs']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumbs']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumbs']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumbs']->value['total'];
?><li class="breadcrumbs__item" rel="nofollow" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumbs']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumbs']->value['last'] : null)) {?><span class="breadcrumbs__item__link current" itemprop="item"><span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</span></span><?php } else { ?><a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['link'];?>
" class="breadcrumbs__item__link" itemprop="url item"><span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</span></a><?php }?><meta itemprop="position" content="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumbs']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumbs']->value['iteration'] : null);?>
"></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ol></nav>
<?php }
}
}
