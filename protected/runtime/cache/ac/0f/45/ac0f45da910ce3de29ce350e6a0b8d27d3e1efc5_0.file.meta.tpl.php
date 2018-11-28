<?php
/* Smarty version 3.1.32, created on 2018-11-28 11:39:49
  from '/home/b/burdilo/m-denta.ru/public_html/protected/themes/base/smarty/components/meta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bfe54553deb28_87267658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac0f45da910ce3de29ce350e6a0b8d27d3e1efc5' => 
    array (
      0 => '/home/b/burdilo/m-denta.ru/public_html/protected/themes/base/smarty/components/meta.tpl',
      1 => 1542971407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfe54553deb28_87267658 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html class="no-js" itemscope="itemscope" itemtype="http://schema.org/<?php if (!isset($_smarty_tpl->tpl_vars['uri']->value[1])) {?>WebPage<?php } else { ?>ItemPage<?php }?>" lang="<?php echo $_smarty_tpl->tpl_vars['_page']->value['lang'];?>
">
<head>
	<title itemprop="name"><?php echo $_smarty_tpl->tpl_vars['_meta']->value['title'];?>
</title>
	<meta name="author" content="serhserhserh">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui">

	<link type="text/css" rel="stylesheet" href="/css/normalize.css" >
	<link type="text/css" rel="stylesheet" href="/css/style.css" >
	<link type="text/css" rel="stylesheet" href="/css/1024.css" >
	<link type="text/css" rel="stylesheet" href="/css/768.css" >
	<link type="text/css" rel="stylesheet" href="/css/640.css" >
	<link type="text/css" rel="stylesheet" href="/css/480.css" >
	<link type="text/css" rel="stylesheet" href="/css/320.css" >
    
    <meta content="<?php echo $_smarty_tpl->tpl_vars['_meta']->value['robots'];?>
" name="robots">
    <meta content="<?php echo $_smarty_tpl->tpl_vars['_meta']->value['keywords'];?>
" name="keywords">
    <meta content="<?php echo $_smarty_tpl->tpl_vars['_meta']->value['description'];?>
" name="description" itemprop="description">
	
	<meta content="<?php echo $_smarty_tpl->tpl_vars['_page']->value['lang'];?>
" itemprop="inLanguage">

	
	<?php if (isset($_smarty_tpl->tpl_vars['pagination']->value['prev']) && $_smarty_tpl->tpl_vars['pagination']->value['prev'] !== '') {?>
		<link rel="prev" href="?page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['prev'];?>
">
	<?php }?>

	<?php if (isset($_smarty_tpl->tpl_vars['pagination']->value['next']) && $_smarty_tpl->tpl_vars['pagination']->value['next'] !== '') {?>
		<link rel="next" href="?page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['next'];?>
">
	<?php }?>

	<link rel="home" href="/">
	
	<!-- SLICK.jS -->
	<link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>
	<link href="/apps/libs/lightbox/dist/css/lightbox.css" rel="stylesheet">
	<link rel="stylesheet" href="/apps/libs/WOW-master/css/libs/animate.css">
	<!-- END -->
	<link rel="icon" href="/img/favicon.png" type="image/x-icon" />

	<?php echo '<script'; ?>
>(function(d) { d.className = d.className.replace(/\bno-js/, ''); })(document.documentElement);<?php echo '</script'; ?>
>

	<meta name="yandex-verification" content="f55a0705b41cd2fe" />

	<!--[if lt IE 9]>
	<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"><?php echo '</script'; ?>
>
	<![endif]-->
</head>
<body class="page-<?php echo $_smarty_tpl->tpl_vars['_page']->value['system'];?>
">
	
	<!-- Yandex.Metrika counter -->
	<?php echo '<script'; ?>
 type="text/javascript" >
	    (function (d, w, c) {
	        (w[c] = w[c] || []).push(function() {
	            try {
	                w.yaCounter47938892 = new Ya.Metrika2({
	                    id:47938892,
	                    clickmap:true,
	                    trackLinks:true,
	                    accurateTrackBounce:true,
	                    webvisor:true
	                });
	            } catch(e) { }
	        });

	        var n = d.getElementsByTagName("script")[0],
	            s = d.createElement("script"),
	            f = function () { n.parentNode.insertBefore(s, n); };
	        s.type = "text/javascript";
	        s.async = true;
	        s.src = "https://mc.yandex.ru/metrika/tag.js";

	        if (w.opera == "[object Opera]") {
	            d.addEventListener("DOMContentLoaded", f, false);
	        } else { f(); }
	    })(document, window, "yandex_metrika_callbacks2");
	<?php echo '</script'; ?>
>
	<noscript><div><img src="https://mc.yandex.ru/watch/47938892" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
	
<?php }
}
