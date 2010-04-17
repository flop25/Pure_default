{* $Id: profile.tpl 2352 2008-05-20 00:27:26Z patdenice $ *}
<div id="content" class="content">

{if isset($errors)}
<div class="errors">
  <ul>
    {foreach from=$errors item=error}
    <li>{$error}</li>
    {/foreach}
  </ul>
</div>
{/if}

  <div class="titrePage">
    <ul class="categoryActions">
      <li><a href="{$U_HOME}" title="{'return to homepage'|@translate}"><img src="{$ROOT_URL}{$themeconf.icon_dir}/home.png" class="button" alt="{'home'|@translate}"/></a></li>
    </ul>
    <h2>{'Profile'|@translate}</h2>
  </div>

{$PROFILE_CONTENT}
</div> <!-- content -->
