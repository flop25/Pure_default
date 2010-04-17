

<ul class="thumbnailCategories">
  {foreach from=$category_thumbnails item=cat}
  <li class="{cycle values="cat_1,cat_2,cat_3,cat_4"}" >
    <div class="thumbnailCategory">
      <div class="illustration">
        <a href="{$cat.URL}">
          <img src="{$cat.TN_SRC}" alt="{$cat.TN_ALT}" title="{$cat.NAME|@replace:'"':' '} - {'hint_category'|@translate}">
        </a>
      </div>
      <div class="description">
        <h3>
          <a href="{$cat.URL}">{$cat.NAME|truncate:30:" [...]"}</a>
          {$cat.ICON_TS}
        </h3>
		<div class="text">
        {if isset($cat.INFO_DATES) }
        <p>{$cat.INFO_DATES}</p>
        {/if}
        <p>{$cat.CAPTION_NB_IMAGES}</p>
        <p class="cat_description">{$cat.DESCRIPTION}</p>
		</div>
      </div>
    </div>
  </li>
  {/foreach}
</ul>
