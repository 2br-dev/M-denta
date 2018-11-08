<?php
/* Smarty version 3.1.32, created on 2018-11-08 09:21:22
  from 'C:\OpenServer\domains\mdenta.local\protected\modules\team\tpl\item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be3d5e2c36fa2_37374460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f9a682f0ad9a03eefd05299f24787ea5fe3a816' => 
    array (
      0 => 'C:\\OpenServer\\domains\\mdenta.local\\protected\\modules\\team\\tpl\\item.tpl',
      1 => 1541591900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be3d5e2c36fa2_37374460 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="about-employee">
	<div class="container-812">
        <a href="/about" class="nav-link"> << О клинике</a>
        <h2 class="black-centre-24"><?php echo $_smarty_tpl->tpl_vars['team']->value['name'];?>
</h2>
    </div>

	<div class="container-flex-2">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['team']->value['image_file'], 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value['sm']['file'];?>
" alt="">
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<div class="container-flex-2-info__text">
			<p><strong><?php echo $_smarty_tpl->tpl_vars['team']->value['name'];?>
</strong></p>
			<p><?php echo $_smarty_tpl->tpl_vars['team']->value['position'];?>
</p>
			<a href="/about/nasha-komanda" class="btn"> К странице команды</a>
		</div>
		
	</div>
	<div class="container-812">
		<p><?php echo $_smarty_tpl->tpl_vars['team']->value['desc'];?>
</p>
	</div>
	
</section>


<?php }
}
