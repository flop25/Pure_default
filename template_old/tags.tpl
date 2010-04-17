{* $Id: tags.tpl 2409 2008-07-01 02:09:21Z rvelices $ *}
<div id="content" class="content">
  <div class="titrePage">
    <ul class="categoryActions">
      {if $display_mode == 'letters'}
      <li><a href="{$U_CLOUD}" title="{'show tag cloud'|@translate}"><img src="{$themeconf.icon_dir}/tag_cloud.png" class="button" alt="{'cloud'|@translate}"/></a></li>
      {/if}
      
      {if $display_mode == 'cloud'}
      <li><a href="{$U_LETTERS}" title="{'group by letters'|@translate}"><img src="{$themeconf.icon_dir}/tag_letters.png" class="button" alt="{'letters'|@translate}"/></a></li>
      {/if}
      <li><a href="{$U_HOME}" title="{'return to homepage'|@translate}"><img src="{$themeconf.icon_dir}/home.png" class="button" alt="{'home'|@translate}"/></a></li>
    </ul>
    <h2>{'Tags'|@translate}</h2>
  </div>
  <div id="autre_content"> {if isset($tags)}
    {if $display_mode == 'cloud'}
    <div id="fullTagCloud"> {foreach from=$tags item=tag} <span><a href="{$tag.URL}" class="tagLevel{$tag.level}" title="{$tag.counter}">{$tag.name}</a></span> {/foreach} </div>
    {/if}
    
    {if $display_mode == 'letters'}
    <table>
      <tr>
        <td valign="top"> {foreach from=$letters item=letter}
          <fieldset class="tagLetter">
          <legend class="tagLetterLegend">{$letter.TITLE}</legend>
          <table class="tagLetterContent">
            {foreach from=$letter.tags item=tag}
            <tr class="tagLine">
              <td><a href="{$tag.URL}">{$tag.name}</a></td>
              <td class="nbEntries">{$pwg->l10n_dec('%d element', '%d elements', $tag.counter)}</td>
            </tr>
            {/foreach}
          </table>
          </fieldset>
          {if $letter.CHANGE_COLUMN} </td>
        <td valign="top"> {/if}
          {/foreach} </td>
      </tr>
    </table>
    {/if}
    {/if} </div>
</div>
<!-- content -->
