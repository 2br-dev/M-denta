<!DOCTYPE html>
<html class="no-js" itemscope="itemscope" itemtype="http://schema.org/{if !isset($uri[1])}WebPage{else}ItemPage{/if}" lang="{$_page.lang}">
<head>
	<title itemprop="name">{$_meta.title}</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui">

	<link type="text/css" rel="stylesheet" href="/css/normalize.css" >
	<link type="text/css" rel="stylesheet" href="/css/style.css" >
	<link type="text/css" rel="stylesheet" href="/css/1024.css" >
	<link type="text/css" rel="stylesheet" href="/css/768.css" >
	<link type="text/css" rel="stylesheet" href="/css/640.css" >
	<link type="text/css" rel="stylesheet" href="/css/480.css" >
	<link type="text/css" rel="stylesheet" href="/css/320.css" >
    
    <meta content="{$_meta.robots}" name="robots">
    <meta content="{$_meta.keywords}" name="keywords">
    <meta content="{$_meta.description}" name="description">
	
	<meta content="{$_page.lang}" itemprop="inLanguage">

	
	{if isset($pagination.prev) && $pagination.prev !== ''}
		<link rel="prev" href="?page={$pagination.prev}">
	{/if}

	{if isset($pagination.next) && $pagination.next !== ''}
		<link rel="next" href="?page={$pagination.next}">
	{/if}

	<link rel="home" href="/">
	
	<!-- SLICK.jS -->
	<link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>
	<link href="/apps/libs/lightbox/dist/css/lightbox.css" rel="stylesheet">
	<link rel="stylesheet" href="/apps/libs/WOW-master/css/libs/animate.css">
	<!-- END -->
	<link rel="icon" href="/img/favicon.png" type="image/x-icon" />

	<script>(function(d) { d.className = d.className.replace(/\bno-js/, ''); })(document.documentElement);</script>

	<meta name="yandex-verification" content="f55a0705b41cd2fe" />

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
</head>
<body class="page-{$_page.system}">
	{literal}
	<!-- Yandex.Metrika counter -->
	<script>
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
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/47938892" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
	{/literal}
{/strip}