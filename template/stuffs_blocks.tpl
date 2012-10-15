<div class="content stuffs_block contentWithMenu">
  <table id="table_content" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td id="section_up_left">&nbsp;</td>
      <td id="section_up">&nbsp;</td>
      <td id="section_up_right">&nbsp;</td>
    </tr>
    <tr>
      <td id="section_left">&nbsp;</td>
      <td id="section_in"> {foreach from=$blocks item=block key=key}
        {if $block.new_line}
        <div class="content stuffs_block stuffs"> {/if}
          <div id="stuffs_block_{$block.ID}" class="content {$block.CLASS}" {if !empty($block.WIDTH)}style="width: {$block.WIDTH}%;"{/if}> {if isset($block.TITLE)}
            <div class="titrePage"> {if !empty($block.U_EDIT)}
              <ul class="categoryActions">
                <li><a href="{$block.U_EDIT}" title="{'edit'|@translate}" class="pwg-state-default pwg-button"> <span class="pwg-icon pwg-icon-category-edit"> </span><span class="pwg-button-text">{'edit'|@translate}</span> </a></li>
              </ul>
              {/if}
              {if isset($block.TITLE_URL)}
              <h2><a href="{$block.TITLE_URL}">{$block.TITLE}</a></h2>
              {else}
              <h2>{$block.TITLE}</h2>
              {/if} </div>
            {/if}
            {include file=$block.TEMPLATE} </div>
          {if $block.end_line} </div>
        {/if}
        {/foreach} </td>
      <td id="section_right">&nbsp;</td>
    </tr>
    <tr>
      <td id="section_bottom_left">&nbsp;</td>
      <td id="section_bottom" >&nbsp;</td>
      <td id="section_bottom_right" >&nbsp;</td>
    </tr>
  </table>
</div>
