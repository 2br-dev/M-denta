{strip}

{if $uri[0] == ""}

	<div class="main-content content-advantages">

	{if isset($_sitemenu.services) nocache}
            
                {foreach $_sitemenu.services as $e}
                <div class="main-content content-advantages-item">
                    <a href="/{$e.system}" class="srv-{$e.system}">{$e.name}</a>
                 </div>    
                {/foreach}
           
        {/if}
	 </div>

	{else}  
	 <section class="navigation">
        <div class="navigation-links">
        	{foreach $_sitemenu.services as $e}
				<a href="/{$e.system}" class="navigation-links-link">{$e.name}</a>
            {/foreach}
        </div>
    </section>

{/if}


{/strip}
