<?php
/* Smarty version 3.1.32, created on 2018-11-15 12:23:07
  from '/home/b/burdilo/m-denta.ru/public_html/protected/themes/base/smarty/components/navigation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bed3afb046704_17317983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e39db5767abaa6e36aff741321c3c291eb5d9aee' => 
    array (
      0 => '/home/b/burdilo/m-denta.ru/public_html/protected/themes/base/smarty/components/navigation.tpl',
      1 => 1541677089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bed3afb046704_17317983 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['uri']->value[0] == "implantaciya-zubov" && !$_smarty_tpl->tpl_vars['uri']->value[1]) {?><section class="implantacia-main"><p class="black-centre-24">Имплантация зубов</p><?php if (isset($_smarty_tpl->tpl_vars['_sitemenu']->value['implantaciya'])) {?><div class="container-flex-2"><div class="container-flex-2-info__text"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_sitemenu']->value['implantaciya'], 'e');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
?><a href="implantaciya-zubov/<?php echo $_smarty_tpl->tpl_vars['e']->value['system'];?>
" class="red-link"><?php echo $_smarty_tpl->tpl_vars['e']->value['name'];?>
</a><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><p>Сегодня потеря зубов уже не считается нерешаемой проблемой. Операции по установке зубных имплантатов успешно проводятся более 40 лет. За это время они доказали свою безопасность, практичность и функциональный результат.</p></div><?php }?><img src="/img/implantaciya-main.png" alt="implantacia-main"></div></section><?php }
if ($_smarty_tpl->tpl_vars['uri']->value[0] == "protezirovanie-zubov" && !$_smarty_tpl->tpl_vars['uri']->value[1]) {?><section class="protezirovanie-main"><p class="black-centre-24">Протезирование зубов</p><?php if (isset($_smarty_tpl->tpl_vars['_sitemenu']->value['protezirovanie'])) {?><div class="container-flex-2"><div class="container-flex-2-info__text"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_sitemenu']->value['protezirovanie'], 'e');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
?><a href="protezirovanie-zubov/<?php echo $_smarty_tpl->tpl_vars['e']->value['system'];?>
" class="red-link"><?php echo $_smarty_tpl->tpl_vars['e']->value['name'];?>
</a><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }?><img src="/img/protezirovanie-main.png" alt="protezirovanie-main"></div></section><?php }
if ($_smarty_tpl->tpl_vars['uri']->value[0] == "esteticheskaya-stomatologiya" && !$_smarty_tpl->tpl_vars['uri']->value[1]) {?><section class="protezirovanie-main"><p class="black-centre-24">Эстетическая стоматология</p><?php if (isset($_smarty_tpl->tpl_vars['_sitemenu']->value['estetic'])) {?><div class="container-flex-2"><div class="container-flex-2-info__text"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_sitemenu']->value['estetic'], 'e');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
?><a href="esteticheskaya-stomatologiya/<?php echo $_smarty_tpl->tpl_vars['e']->value['system'];?>
" class="red-link"><?php echo $_smarty_tpl->tpl_vars['e']->value['name'];?>
</a><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><p><strong>Эстетическая стоматология — одно из наиболее востребованных направлений, при помощи которого специалисты улучшают внешний вид зубов. </strong></p><p>Эстетическая стоматология — это один из сложных разделов стоматологии, который требует высокого профессионализма, огромного опыта, а также индивидуального и творческого подхода.</p><p>Эстетическая стоматология включает в себя широкий спектр услуг: украшение, реставрация и отбеливание зубов, установка коронок и виниров, позволяющих успешно справиться с различными проблемами.</p></div><?php }?><img src="/img/estetic-main.png" alt="protezirovanie-main"></div></section><?php }
if ($_smarty_tpl->tpl_vars['uri']->value[0] == "about" && !$_smarty_tpl->tpl_vars['uri']->value[1]) {?><section class="about-main"><p class="black-centre-24">О клинике</p><?php if (isset($_smarty_tpl->tpl_vars['_sitemenu']->value['about'])) {?><div class="container-flex-2"><div class="container-flex-2-info__text"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_sitemenu']->value['about'], 'e');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
?><a href="about/<?php echo $_smarty_tpl->tpl_vars['e']->value['system'];?>
" class="red-link"><?php echo $_smarty_tpl->tpl_vars['e']->value['name'];?>
</a><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><p>Начиная с 1997 года основатели клиники - потомственная семья медиков в третьем поколении Мыльцевых - прошли большой путь, постоянно совершенствуя методы стоматологической реабилитации пациентов.</p><p><strong>Ведущие врачи имеют за плечами не только российское высшее медицинское образование, но и длительную стажировку в известных стоматологических клиниках Европы и США.</strong></p></div><?php }?><img src="/img/about-first.png" alt="protezirovanie-main"></div></section><?php }?>    

<?php }
}
