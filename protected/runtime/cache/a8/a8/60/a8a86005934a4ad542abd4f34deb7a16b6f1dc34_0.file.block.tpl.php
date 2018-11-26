<?php
/* Smarty version 3.1.32, created on 2018-11-26 00:27:23
  from '/home/b/burdilo/m-denta.ru/public_html/protected/modules/pricelist/tpl/block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bfb13bb3eda29_96578383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8a86005934a4ad542abd4f34deb7a16b6f1dc34' => 
    array (
      0 => '/home/b/burdilo/m-denta.ru/public_html/protected/modules/pricelist/tpl/block.tpl',
      1 => 1541677089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfb13bb3eda29_96578383 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="prices">
    <div class="container-812">
        <h2 class="black-centre-24">Прайс-лист на услуги</h2>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['consult']->value) {?>
    <a id="1b" class="centre btn price-expand">Консультация</a>
    <div id="1" class="container">
        <table border="0">
            <tr>
                <th class='container-header'>Код услуги</th>
                <th class='container-header'>Описание</th>
                <th class='container-header'>Цены</th>
            </tr> 
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['consult']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <tr class="row">
                <td class='container-code'><?php echo $_smarty_tpl->tpl_vars['item']->value['code'];?>
</td>
                <td class='container-desc'><?php echo $_smarty_tpl->tpl_vars['item']->value['desc'];?>
</td>
                <td class='container-price'><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
    <a id="1a" href="#" class="link centre">↓ развернуть ↓</a>


    <a id="2b" class="centre btn price-expand">Терапевтическая стоматология</a>
    <div id="2" class="container">
        <table border="0">
            <tr>
                <th class='container-header'>Код услуги</th>
                <th class='container-header'>Описание</th>
                <th class='container-header'>Цены</th>
            </tr> 
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['terapevtic']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <tr class="row">
                <td class='container-code'><?php echo $_smarty_tpl->tpl_vars['item']->value['code'];?>
</td>
                <td class='container-desc'><?php echo $_smarty_tpl->tpl_vars['item']->value['desc'];?>
</td>
                <td class='container-price'><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
    <a id="2a" href="#" class="link centre">↓ развернуть ↓</a>

    <a id="3b" class="centre btn price-expand">Ортопедическая стоматология</a>
    <div id="3" class="container">
        <table border="0">
            <tr>
                <th class='container-header'>Код услуги</th>
                <th class='container-header'>Описание</th>
                <th class='container-header'>Цены</th>
            </tr> 
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ortopedic']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <tr class="row">
                <td class='container-code'><?php echo $_smarty_tpl->tpl_vars['item']->value['code'];?>
</td>
                <td class='container-desc'><?php echo $_smarty_tpl->tpl_vars['item']->value['desc'];?>
</td>
                <td class='container-price'><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>    
    <a id="3a" href="#" class="link centre">↓ развернуть ↓</a>

    <a id="4b" class="centre btn price-expand">Хирургическая стоматология</a>
    <div id="4" class="container">
        <table border="0">
            <tr>
                <th class='container-header'>Код услуги</th>
                <th class='container-header'>Описание</th>
                <th class='container-header'>Цены</th>
            </tr> 
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hirurgic']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <tr class="row">
                <td class='container-code'><?php echo $_smarty_tpl->tpl_vars['item']->value['code'];?>
</td>
                <td class='container-desc'><?php echo $_smarty_tpl->tpl_vars['item']->value['desc'];?>
</td>
                <td class='container-price'><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
    <a id="4a" href="#" class="link centre">↓ развернуть ↓</a>


    <a id="5b" class="centre btn price-expand">Ортодонтическая стоматология</a>
    <div id="5" class="container">
        <table border="0">
            <tr>
                <th class='container-header'>Код услуги</th>
                <th class='container-header'>Описание</th>
                <th class='container-header'>Цены</th>
            </tr> 
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ortodontic']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <tr class="row">
                <td class='container-code'><?php echo $_smarty_tpl->tpl_vars['item']->value['code'];?>
</td>
                <td class='container-desc'><?php echo $_smarty_tpl->tpl_vars['item']->value['desc'];?>
</td>
                <td class='container-price'><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>    
    <a id="5a" href="#" class="link centre">↓ развернуть ↓</a>


</section>

<?php }
}
}
