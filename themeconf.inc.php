<?php
/*
Theme Name: Pure_default
Version: auto
Description: 
Theme URI: http://piwigo.org/ext/extension_view.php?eid=384
Author: flop25
Author URI: http://www.planete-flop.fr
*/
$themeconf = array(
  'name'         => 'Pure_default',
  'parent'        => 'default',
  'icon_dir'      => 'themes/Pure_default/icon',
  'mime_icon_dir' => 'themes/Pure_default/icon/mimetypes/',
  'local_head'    => 'local_head.tpl',
  'activable' => false,
);
/** index.tpl **/
add_event_handler('loc_end_index', 'Pure_default_index');
add_event_handler('loc_end_index', 'Pure_default_index_stuff');
function Pure_default_index()
{
    global $template;
    $template->set_prefilter('index', 'Pure_default_prefilter_index');
    //$template->set_prefilter('stuffs', 'Pure_default_prefilter_index_stuff');
		//return $tpl_thumbnails_var;
}
function Pure_default_index_stuff()
{
    global $template;
    //$template->set_prefilter('index', 'Pure_default_prefilter_index');
    $template->set_prefilter('stuffs', 'Pure_default_prefilter_index_stuff');
		//return $tpl_thumbnails_var;
}
function Pure_default_prefilter_index($content, &$smarty)
{
  $search = '#<div id="content" class="content">#';  
  $replacement = '<div id="content" class="content">
  <table id="table_content" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td id="section_up_left">&nbsp;</td>
      <td id="section_up">&nbsp;</td>
      <td id="section_up_right">&nbsp;</td>
    </tr>
    <tr>
      <td id="section_left">&nbsp;</td>
      <td id="section_in">
';
  $content = preg_replace($search, $replacement, $content);
	
  $search = '#\{if \!empty\(\$PLUGIN_INDEX_CONTENT_END\)\}\{\$PLUGIN_INDEX_CONTENT_END\}\{/if\}#';  
  $replacement = '{if !empty($PLUGIN_INDEX_CONTENT_END)}{$PLUGIN_INDEX_CONTENT_END}{/if}
      </td>
	  <td id="section_right">&nbsp;</td>
    </tr>
    <tr>
      <td id="section_bottom_left">&nbsp;</td>
      <td id="section_bottom" >&nbsp;</td>
      <td id="section_bottom_right" >&nbsp;</td>
    </tr>
  </table>
';
  return preg_replace($search, $replacement, $content);
}
function Pure_default_prefilter_index_stuff($content, &$smarty)
{
  
	$search = '#<div class="content stuffs_block">#';  
  $replacement = '<div class="content stuffs_block">
  <table id="table_content" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td id="section_up_left">&nbsp;</td>
      <td id="section_up">&nbsp;</td>
      <td id="section_up_right">&nbsp;</td>
    </tr>
    <tr>
      <td id="section_left">&nbsp;</td>
      <td id="section_in">
';
  $content = preg_replace($search, $replacement, $content);
	
  $search = '#\{if \$block\.end_line\}
  </div>
  \{\/if\}
\{/foreach\}
</div>#';  
  $replacement = '{if $block.end_line}
  </div>
  {/if}
{/foreach}
      </td>
	  <td id="section_right">&nbsp;</td>
    </tr>
    <tr>
      <td id="section_bottom_left">&nbsp;</td>
      <td id="section_bottom" >&nbsp;</td>
      <td id="section_bottom_right" >&nbsp;</td>
    </tr>
  </table>
</div>';
  return preg_replace($search, $replacement, $content);
	
	//echo($content);
	//return 'blabmabhmijokpiuyftdfghijkougyffguio';
}

?>
