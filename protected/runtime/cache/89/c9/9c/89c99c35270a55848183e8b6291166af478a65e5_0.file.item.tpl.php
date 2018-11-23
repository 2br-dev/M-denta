<?php
/* Smarty version 3.1.32, created on 2018-11-23 09:06:15
  from 'C:\OpenServer\domains\mdenta.local\protected\modules\news\tpl\item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf798d702fc28_10219407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89c99c35270a55848183e8b6291166af478a65e5' => 
    array (
      0 => 'C:\\OpenServer\\domains\\mdenta.local\\protected\\modules\\news\\tpl\\item.tpl',
      1 => 1542897197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf798d702fc28_10219407 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="about-news">
    <div class="container-812">
        <a href="/about/novosti" class="nav-link"> << Новости</a>
        <p class="black-centre-24"><?php echo $_smarty_tpl->tpl_vars['news']->value['name'];?>
</p>
    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value['image_file'], 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?>
    <img class="centre" src="<?php echo $_smarty_tpl->tpl_vars['img']->value['sm']['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['news']->value['name'];?>
">
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <div class="container-812">
        <p><?php echo $_smarty_tpl->tpl_vars['news']->value['desc'];?>
</p>
    </div>
    <a class="btn centre" href="/about/novosti">Вернуться к новостям</a>
</section><?php }
}
