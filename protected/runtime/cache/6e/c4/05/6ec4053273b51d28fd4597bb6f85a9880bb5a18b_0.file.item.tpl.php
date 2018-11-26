<?php
/* Smarty version 3.1.32, created on 2018-11-26 10:26:42
  from '/home/b/burdilo/m-denta.ru/public_html/protected/modules/ourworks/tpl/item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bfba0327fdd36_56342134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ec4053273b51d28fd4597bb6f85a9880bb5a18b' => 
    array (
      0 => '/home/b/burdilo/m-denta.ru/public_html/protected/modules/ourworks/tpl/item.tpl',
      1 => 1542965574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfba0327fdd36_56342134 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="workresults">
    <div class="container-812">
        <a href="/nashi-raboty" class="nav-link"> << Наши работы</a>

          <p class="black-centre-24"><?php echo $_smarty_tpl->tpl_vars['ourworks']->value['title'];?>
</p>

    </div>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'sort');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sort']->value) {
?>
      <div class="workresults-container">
        <div class="workresults-desc">
          <p class="workresults-desc-header"><b><?php echo $_smarty_tpl->tpl_vars['sort']->value['patient'];?>
</b></p>
          <?php if ($_smarty_tpl->tpl_vars['sort']->value['comment']) {?>
            <p><?php echo $_smarty_tpl->tpl_vars['sort']->value['comment'];?>
</p>
          <?php }?>
        </div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sort']->value['image_before'], 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?>
          <div class='workresults-image'>
              <p>До</p>
              <div class="workresults-before" style="background: url('<?php echo $_smarty_tpl->tpl_vars['img']->value['original']['file'];?>
') center/cover;"></div>
          </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sort']->value['image_after'], 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?>
          <div class='workresults-image'>
            <p>После</p>
            <div class="workresults-after" style="background: url('<?php echo $_smarty_tpl->tpl_vars['img']->value['original']['file'];?>
') center/cover;"></div>
          </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
      </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</section>




<?php }
}
