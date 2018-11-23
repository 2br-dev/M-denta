<?php
/* Smarty version 3.1.32, created on 2018-11-22 18:12:55
  from 'C:\OpenServer\domains\mdenta.local\protected\modules\team\tpl\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf6c77773ef25_27508491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77e8ce3f963cd6f1995420664625704d2d44057e' => 
    array (
      0 => 'C:\\OpenServer\\domains\\mdenta.local\\protected\\modules\\team\\tpl\\list.tpl',
      1 => 1542897197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf6c77773ef25_27508491 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="about-team">
    <div class="container-812">
        <a href="/about" class="nav-link"> << О клинике</a>
        <h2 class="black-centre-24">Наша команда</h2>
    </div>
    <div class="wrapper-first">
        <div class="container-812">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['team']->value, 'sort');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sort']->value) {
?>
            <div class="half-width-column">
            	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sort']->value['image_file'], 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['img']->value['sm']['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['sort']->value['name'];?>
">
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	                <?php if ($_smarty_tpl->tpl_vars['sort']->value['desc']) {?>
	                <a class="btn" href="/about/nasha-komanda/<?php echo $_smarty_tpl->tpl_vars['sort']->value['system'];?>
"><?php echo $_smarty_tpl->tpl_vars['sort']->value['name'];?>
</a>
	                	<?php } else { ?>
	                	<p><?php echo $_smarty_tpl->tpl_vars['sort']->value['name'];?>
</p>
	                <?php }?>
                <p><?php echo $_smarty_tpl->tpl_vars['sort']->value['position'];?>
</p>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</section><?php }
}
