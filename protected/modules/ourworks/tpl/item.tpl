<section class="workresults">
    <div class="container-812">
        <a href="/nashi-raboty" class="nav-link"> << Наши работы</a>

          <h1 class="black-centre-24">{$ourworks.title}</h1>

    </div>

    {foreach from=$results item=sort}
      <div class="workresults-container">
        <div class="workresults-desc">
          <p class="workresults-desc-header"><b>{$sort.patient}</b></p>
          {if $sort.comment}
            <p>{$sort.comment}</p>
          {/if}
        </div>
        {foreach from=$sort.image_before item=img}
          <div class='workresults-image'>
              <p>До</p>
              <div class="workresults-before" style="background: url('{$img.original.file}') center/cover;"></div>
          </div>
        {/foreach}
        {foreach from=$sort.image_after item=img}
          <div class='workresults-image'>
            <p>После</p>
            <div class="workresults-after" style="background: url('{$img.original.file}') center/cover;"></div>
          </div>
        {/foreach}    
      </div>
    {/foreach}
</section>




