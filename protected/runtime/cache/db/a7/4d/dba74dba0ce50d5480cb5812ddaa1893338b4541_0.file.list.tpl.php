<?php
/* Smarty version 3.1.32, created on 2018-12-05 12:06:35
  from '/home/b/burdilo/m-denta.ru/public_html/protected/modules/ourworks/tpl/list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c07951b428145_37594625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dba74dba0ce50d5480cb5812ddaa1893338b4541' => 
    array (
      0 => '/home/b/burdilo/m-denta.ru/public_html/protected/modules/ourworks/tpl/list.tpl',
      1 => 1543851847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c07951b428145_37594625 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="ourworks">
  <div class="container-812">
    <h1 class="black-centre-24">Наши работы</h1>
  </div>

  <div class="ourworks-container">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ourworks']->value, 'sort');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sort']->value) {
?>
      <a style="text-decoration: none;" href="/nashi-raboty/<?php echo $_smarty_tpl->tpl_vars['sort']->value['system'];?>
">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sort']->value['image_file'], 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?>
        <div class="ourworks-image" style="background: url('<?php echo $_smarty_tpl->tpl_vars['img']->value['preview']['file'];?>
');">  
          <div class="ourworks-image-hover">
            <p class="ourworks-image-p"><?php echo $_smarty_tpl->tpl_vars['sort']->value['title'];?>
</p>
          </div>
        </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </a>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
     
</section>

<?php }
}
