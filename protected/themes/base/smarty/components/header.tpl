{strip}
    <header class="header">
        <a href="/"><img class="header-logo"src="/img/logo.png" alt="M-Denta"></a>
        {if isset($_sitemenu.header_menu) nocache}
            <div class="header-links">
                {foreach $_sitemenu.header_menu as $e}
                    <a href="/{$e.system}" class="header-links-link" title="{$e.name}">{$e.name}</a>
                {/foreach}
            </div>
        {/if}
        <div class="header-contacts">
            <a href="https://www.instagram.com/stomatolog_evgeney/" target="_blank"><img src="/img/instagram.png" alt="Instagram" class="header-contacts-instagram">stomatolog_evgeney</a>
            <a href="https://www.instagram.com/stomatolog_evgeney/" target="_blank"><img src="/img/stomatolog_evgeney.jpg" alt="Instagram" class="header-contacts-instagram" style="border-radius: 50%"><span id="inst_count"></span> подписчиков</a>
        </div>
        <div class="header-adress">            
            <a href="tel:+78612980851" class="header-contacts-phone">+7 (861) 298-08-51</a>
            <a href="#" class="header-contacts-phone header-contacts-phone-desc">+7 (861) 298-08-51</a>
            <p> г. Краснодар, ул. Северная, 490, БЦ "Кутузовский", кабинет 603</p>
        </div>
    </header>

    <div class="hamburger">
        <div class="hamburger-flex"> 
            <a href="/"><div class="hamburger-logo"></div></a>
            <div class="hamburger-phone">
                <a href="tel:+78612980851">+7 (861) 298-08-51</a>
            </div>
            <div class="menu">
                <span class="bar"></span>
                <span class="bar" style="display: none"></span>
            </div>
        </div>
        <div class="hamburger-slide">
            <div class="hamburger-slide-container">
                <div class="hamburger-slide-contacts">
                    <a class="hamburger-instagram" href="https://www.instagram.com/stomatolog_evgeney/" target="_blank"><img src="/img/instagram.png" alt="Instagram" class="header-contacts-instagram">stomatolog_evgeney</a>
                    <a class="hamburger-adress" href="https://www.google.com/maps/search/%D0%BC-%D0%B4%D0%B5%D0%BD%D1%82%D0%B0/@45.0366387,38.9945174,17z/data=!3m1!4b1">г. Краснодар, ул. Северная, 490</a>
                </div>
                {if isset($_sitemenu.header_menu) nocache}
                <div class="hamburger-links">
                    {foreach $_sitemenu.services as $e}
                    <a href="/{$e.system}" class="hamburger-links-link">{$e.name}</a>
                    {/foreach}
                    <div class="hamburger-links">
                        {foreach $_sitemenu.header_menu as $e}
                        <a href="/{$e.system}" class="hamburger-links-link">{$e.name}</a>
                        {/foreach}
                    </div>
                </div>
                {/if}    
            </div>  
        </div>
    </div>
    
{/strip}
