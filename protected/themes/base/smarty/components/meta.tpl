<!DOCTYPE html>
<!-- (c) lnk. CELEBRO Studio | http://celebro.ru -->
{strip}
<!--[if lt IE 7]><html class="ie6" lang="{$_page.lang}"><![endif]-->
<!--[if IE 7]>   <html class="ie7" lang="{$_page.lang}"><![endif]-->
<!--[if IE 8]>   <html class="ie8" lang="{$_page.lang}"><![endif]-->
<!--[if IE 9]>   <html class="ie9" lang="{$_page.lang}"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" itemscope="itemscope" itemtype="http://schema.org/{if !isset($uri[1])}WebPage{else}ItemPage{/if}" lang="{$_page.lang}">
<!--<![endif]-->
<head>
	<title itemprop="name">{$_page.title}</title>

	<meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
	<meta content="on" http-equiv="cleartype">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<meta name="format-detection" content="telephone=no">
	<meta name="format-detection" content="address=no">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">

	{if $_csrf_token nocache}
	<meta content="{$_csrf_param}" name="csrf-param">
	<meta content="{$_csrf_token}" name="csrf-token">
	{/if}
	
	{* <link rel="preload" href="./fonts/thin.woff"> *}
	{* <link rel="preload" href="./fonts/light.woff"> *}
	{* <link rel="preload" href="./fonts/regular.woff"> *}
	{* <link rel="preload" href="./fonts/medium.woff"> *}
	{* <link rel="preload" href="./fonts/semibold.woff"> *}
	{* <link rel="preload" href="./fonts/bold.woff"> *}

	{* type   = 'inline' *}

	<link type="text/css" rel="stylesheet" href="/css/normalize.css" >
	<link type="text/css" rel="stylesheet" href="/css/style.css" >
	<link type="text/css" rel="stylesheet" href="/css/1024.css" >
	<link type="text/css" rel="stylesheet" href="/css/768.css" >
	<link type="text/css" rel="stylesheet" href="/css/640.css" >
	<link type="text/css" rel="stylesheet" href="/css/480.css" >
	<link type="text/css" rel="stylesheet" href="/css/320.css" >
    <meta content="{$_page.robots}" name="robots">
    <meta content="{$_page.keywords}" name="keywords">
    <meta content="{$_page.description}" name="description" itemprop="description">
	
	<meta content="{$_page.lang}" itemprop="inLanguage">
	
	<!--
	<meta content="no" http-equiv="imagetoolbar">
	<meta content="public" http-equiv="Cache-Control">
	<meta content="max-age=3600, must-revalidate" http-equiv="Cache-Control">
 	-->	
	
	{if isset($pagination.prev) && $pagination.prev !== ''}
		<link rel="prev" href="?page={$pagination.prev}">
	{/if}

	{if isset($pagination.next) && $pagination.next !== ''}
		<link rel="next" href="?page={$pagination.next}">
	{/if}

	<meta name="application-name" content="{$smarty.const.COMPANY_NAME}">

	<link rel="home" href="/">
	<link rel="search" href="/search" title="{$smarty.const.COMPANY_NAME}" type="application/opensearchdescription+xml">
	<link rel="canonical" href="http://{$smarty.server.HTTP_HOST nocache}{$smarty.server.REQUEST_URI nocache}">
	
	<!-- SLICK.jS -->
	<link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>
	<link href="/apps/libs/lightbox/dist/css/lightbox.css" rel="stylesheet">
	<link rel="stylesheet" href="/apps/libs/WOW-master/css/libs/animate.css">
	<!-- END -->
	<link rel="icon" href="/img/favicon.png" type="image/x-icon" />

	<script>(function(d) { d.className = d.className.replace(/\bno-js/, ''); })(document.documentElement);</script>

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
</head>
<body class="page-{$_page.system}">
{/strip}