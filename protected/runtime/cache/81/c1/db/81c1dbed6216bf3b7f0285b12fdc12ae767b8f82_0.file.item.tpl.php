<?php
/* Smarty version 3.1.32, created on 2018-11-23 12:28:03
  from 'C:\OpenServer\domains\mdenta.local\protected\modules\ourworks\tpl\item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf7c823752e23_04040039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81c1dbed6216bf3b7f0285b12fdc12ae767b8f82' => 
    array (
      0 => 'C:\\OpenServer\\domains\\mdenta.local\\protected\\modules\\ourworks\\tpl\\item.tpl',
      1 => 1542962204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf7c823752e23_04040039 (Smarty_Internal_Template $_smarty_tpl) {
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
