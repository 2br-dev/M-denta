<?php
/* Smarty version 3.1.32, created on 2018-11-08 09:20:56
  from 'C:\OpenServer\domains\mdenta.local\protected\modules\news\tpl\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be3d5c872a793_22103954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e4ff8b5de57c3943a4ca1028b9d1750ca575094' => 
    array (
      0 => 'C:\\OpenServer\\domains\\mdenta.local\\protected\\modules\\news\\tpl\\list.tpl',
      1 => 1540904902,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be3d5c872a793_22103954 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="about-news">

        <div class="container-812">
            <a href="/about" class="nav-link"> << О клинике</a>
            <p class="black-centre-24">Новости</p>
        </div>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'sort');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sort']->value) {
?>
        <div class="container-flex-2">
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
            <div class="container-flex-2-info__text">
                <a class="btn" href="/about/novosti/<?php echo $_smarty_tpl->tpl_vars['sort']->value['system'];?>
"><?php echo $_smarty_tpl->tpl_vars['sort']->value['title'];?>
</a>
                <div>
                    <?php echo $_smarty_tpl->tpl_vars['sort']->value['preview'];?>

                </div>
                <p><?php echo $_smarty_tpl->tpl_vars['sort']->value['date'];?>
</p>
            </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</section>
<?php }
}
