<?php
/* Smarty version 3.1.32, created on 2018-12-05 17:50:11
  from 'C:\OpenServer\domains\mdenta.local\protected\modules\docs\tpl\block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c07e5a3093fc0_22111821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '579e89112ecfb68ea1266fe0d62390afcfb29e49' => 
    array (
      0 => 'C:\\OpenServer\\domains\\mdenta.local\\protected\\modules\\docs\\tpl\\block.tpl',
      1 => 1542897197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c07e5a3093fc0_22111821 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['uri']->value[0] == '') {?>
<div class="main-content content-gallery ">
    <div class="main-content content-gallery-license wow fadeInUp" data-wow-delay=".75s">
        <a class="link" href="about/fotogalereya">Лицензии</a>
        <div class="gallery-license">
        	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['docs']->value, 'doc');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['doc']->value) {
?>
	            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc']->value['image_file'], 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?>
	            <div class="gallery-item">
	                <a href="<?php echo $_smarty_tpl->tpl_vars['img']->value['original']['file'];?>
" data-lightbox="license"><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value['sm']['file'];?>
" alt="license"></a>
	            </div>
	            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
    <div class="main-content content-gallery-photos wow fadeInUp" data-wow-delay=".75s">
        <a class="link" href="about/fotogalereya">Перейти в Галерею компании</a>
        <div class="gallery-photos">
        	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gallery']->value, 'gal');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gal']->value) {
?>
	            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gal']->value['image_file'], 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
	            <div class="gallery-item">
	                <a href="<?php echo $_smarty_tpl->tpl_vars['image']->value['original']['file'];?>
" data-lightbox="gallery"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value['sm']['file'];?>
" alt="gallery"></a>
	            </div>
	            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['uri']->value[1] == 'fotogalereya') {?>
<section class="fotogalereya">
    <div class="container-812">
        <a href="/about" class="nav-link"> << О клинике</a>
        <h2 class="black-centre-24">Фотогалерея</h2>
    </div>
    <div class="container">
        <div>
            <div class="container-gallery">
                <a href="#gallery-header" class="btn">Смотреть альбом</a>
            </div>
            <a href="#gallery-header" class="red-link gallery-link">Клиника в фотографиях</a>
        </div>
        <div>
            <div class="container-docs">
                <a href="#gallery-header" class="btn">Смотреть альбом</a>
            </div>
            <a href="#gallery-header" class="red-link docs-link">Документы</a>
        </div>
    </div>
    <div class="container-812">
        <p id="gallery-header" class="black-centre-24"></p>
    </div>
    <div class="container">
        <div class="container-docs-preview">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['docs']->value, 'doc');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['doc']->value) {
?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc']->value['image_file'], 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?>
                <div class="gallery-item">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['img']->value['original']['file'];?>
" data-lightbox="license"><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value['sm']['file'];?>
" alt="license"></a>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <div class="container-gallery-preview">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gallery']->value, 'gal');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gal']->value) {
?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gal']->value['image_file'], 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
                <div class="gallery-item">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['image']->value['original']['file'];?>
" data-lightbox="gallery"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value['square']['file'];?>
" alt="gallery"></a>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</section>
<?php }
}
}
