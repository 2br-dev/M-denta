{strip}
{include file="./components/meta.tpl"}

{include file="./components/modal.tpl"}

{include file="./components/header.tpl"}
{include file="./components/banner.tpl"}

{if $uri[0] == ''}
  {include file="./components/christmas.tpl"}
{/if}

{include file="./components/services.tpl"}
{include file="./components/navigation.tpl"}


{$_page.content}

{include file="./components/footer.tpl"}

{include file="./components/scripts.tpl"}
{/strip}