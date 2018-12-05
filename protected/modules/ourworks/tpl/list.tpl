<section class="ourworks">
  <div class="container-812">
    <h1 class="black-centre-24">Наши работы</h1>
  </div>

  <div class="ourworks-container">
    {foreach from=$ourworks item=sort}
      <a style="text-decoration: none;" href="/nashi-raboty/{$sort.system}">
      {foreach from=$sort.image_file item=img}
        <div class="ourworks-image" style="background: url('{$img.preview.file}');">  
          <div class="ourworks-image-hover">
            <p class="ourworks-image-p">{$sort.title}</p>
          </div>
        </div>
      {/foreach}
      </a>
    {/foreach}
  </div>
     
</section>

