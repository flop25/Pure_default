{if !empty($blocks) }
<div id="menubar">
	{foreach from=$blocks key=id item=block}
	{if ( not empty($block->template) or not empty($block->raw_content) )}
  <table {if ($id=='mbMenu' or $id=='mbSpecials' or $id=='mbCategories' or $id=='mbIdentification' or $id=='mbLinks' or $id=='mbTags') }id="table_{$id}"{else}class="table_menu"{/if} cellspacing="0" cellpadding="0">
    <tr>
      <td class="blocmenu_up_left">&nbsp;</td>
      <td class="blocmenu_up">&nbsp;</td>
      <td class="blocmenu_up_right">&nbsp;</td>
    </tr>
    <tr>
      <td class="blocmenu_left">&nbsp;</td>
      <td class="blocmenu_in">
      	<dl>
            {if not empty($block->template)}
            {include file=$block->template|@get_extent:$id }
            {else}
            {$block->raw_content|@default}
            {/if}
		</dl>
	  </td>
      <td class="blocmenu_right">&nbsp;</td>
    </tr>
    <tr>
      <td class="blocmenu_bottom_left">&nbsp;</td>
      <td class="blocmenu_bottom">&nbsp;</td>
      <td class="blocmenu_bottom_right">&nbsp;</td>
    </tr>
  </table>
  	{/if}
	{/foreach}
</div>
{/if}