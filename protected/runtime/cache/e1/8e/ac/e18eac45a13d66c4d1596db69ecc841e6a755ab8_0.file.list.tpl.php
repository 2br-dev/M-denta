<?php
/* Smarty version 3.1.32, created on 2018-11-23 12:26:37
  from 'C:\OpenServer\domains\mdenta.local\protected\modules\ourworks\tpl\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf7c7cd3e6ca3_08634721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e18eac45a13d66c4d1596db69ecc841e6a755ab8' => 
    array (
      0 => 'C:\\OpenServer\\domains\\mdenta.local\\protected\\modules\\ourworks\\tpl\\list.tpl',
      1 => 1542962211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf7c7cd3e6ca3_08634721 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="ourworks">
  <div class="container-812">
    <p class="black-centre-24">Наши работы</p>
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
