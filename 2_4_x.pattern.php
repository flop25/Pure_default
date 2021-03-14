<?php
$pattern['Pure_default_prefilter_index']['S']['table_content_begin']='#<div id="content" class="content\{if isset\(\$MENUBAR\)\} contentWithMenu\{/if\}">#';
$pattern['Pure_default_prefilter_index']['R']['table_content_begin']='<div id="content" class="content{if isset($MENUBAR)} contentWithMenu{/if}">
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
$pattern['Pure_default_prefilter_index']['S']['table_content_end']='#\{if \!empty\(\$PLUGIN_INDEX_CONTENT_END\)\}\{\$PLUGIN_INDEX_CONTENT_END\}\{/if\}#';
$pattern['Pure_default_prefilter_index']['R']['table_content_end']='{if !empty($PLUGIN_INDEX_CONTENT_END)}{$PLUGIN_INDEX_CONTENT_END}{/if}
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

$pattern['Pure_default_prefilter_picture']['S']['table_content_begin']='#<div id="content" \{if isset\(\$MENUBAR\)\}class="contentWithMenu"\{/if\}>#';
$pattern['Pure_default_prefilter_picture']['R']['table_content_begin']='<div id="content" {if isset($MENUBAR)}class="contentWithMenu"{/if}>
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
$pattern['Pure_default_prefilter_picture']['S']['table_content_end']='#\{if \!empty\(\$PLUGIN_PICTURE_AFTER\)\}\{\$PLUGIN_PICTURE_AFTER\}\{/if\}#';  
$pattern['Pure_default_prefilter_picture']['R']['table_content_end']='{if !empty($PLUGIN_PICTURE_AFTER)}{$PLUGIN_PICTURE_AFTER}{/if}
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
/**************************** identification.tpl *****************************************************************/
$pattern['Pure_default_prefilter_identification']['S']['autre_content_begin']='#<form action="\{\$F_LOGIN_ACTION\}" method="post" name="login_form" class="properties">#';  
$pattern['Pure_default_prefilter_identification']['R']['autre_content_begin']= '<div id="autre_content">
<form action="{$F_LOGIN_ACTION}" method="post" name="login_form" class="properties">
';
$pattern['Pure_default_prefilter_identification']['S']['autre_content_end']='#</div>[\s]*<\!-- content -->#';  
$pattern['Pure_default_prefilter_identification']['R']['autre_content_end']='</div>
	</div> <!-- content -->';
/**************************** nbm.tpl *****************************************************************/
$pattern['Pure_default_prefilter_nbm']['S']['autre_content_begin']='#\{if not empty(\$errors)\}#';  
$pattern['Pure_default_prefilter_nbm']['R']['autre_content_begin']= '<div id="autre_content">
{if not empty($errors)}
';
$pattern['Pure_default_prefilter_nbm']['S']['autre_content_end']='#\{/if\}[\s]*</div>#';  
$pattern['Pure_default_prefilter_nbm']['R']['autre_content_end']='<{/if}
	</div>
	</div> <!-- content -->';
/**************************** notification.tpl *****************************************************************/
$pattern['Pure_default_prefilter_notification']['S']['autre_content_begin']='#<div id="content" class="content\{if isset\(\$MENUBAR\)\} contentWithMenu\{/if\}">#';  
$pattern['Pure_default_prefilter_notification']['R']['autre_content_begin']= '<div id="autre_content" {if isset($MENUBAR)}class="contentWithMenu{/if}"><div id="content" class="content">';
$pattern['Pure_default_prefilter_notification']['S']['autre_content_end']='#</dt>[\s]*</dl>#';  
$pattern['Pure_default_prefilter_notification']['R']['autre_content_end']='</dt>
	</dl>
</div>';
/**************************** password.tpl *****************************************************************/
$pattern['Pure_default_prefilter_password']['S']['autre_content_begin']='#<form action=#';  
$pattern['Pure_default_prefilter_password']['R']['autre_content_begin']= '<div id="autre_content">
<form action=';
$pattern['Pure_default_prefilter_password']['S']['autre_content_end']='#</div>[\s]*<!-- content -->#';  
$pattern['Pure_default_prefilter_password']['R']['autre_content_end']='</div>
	</div> <!-- content -->';
/**************************** tags.tpl *****************************************************************/
$pattern['Pure_default_prefilter_tags']['S']['autre_content_begin']='#</h2>[\s]*</div>#';  
$pattern['Pure_default_prefilter_tags']['R']['autre_content_begin']= '</h2>
  </div>
<div id="autre_content">';
$pattern['Pure_default_prefilter_tags']['S']['autre_content_end']='#</div>[\s]*<!-- content -->#';  
$pattern['Pure_default_prefilter_tags']['R']['autre_content_end']='</div>
	</div> <!-- content -->';
/**************************** about.tpl *****************************************************************/
$pattern['Pure_default_prefilter_about']['S']['autre_content_begin']='#</h2>[\s]*</div>#';  
$pattern['Pure_default_prefilter_about']['R']['autre_content_begin']= '</h2>
  </div>
<div id="autre_content">';
$pattern['Pure_default_prefilter_about']['S']['autre_content_end']='#\{/if\}[\s]*</div>#';  
$pattern['Pure_default_prefilter_about']['R']['autre_content_end']='{/if}
  </div>
  </div>';
/**************************** popuphelp.tpl *****************************************************************/
$pattern['Pure_default_prefilter_popuphelp']['S']['autre_content_begin']='#</h2>[\s]*</div>#';  
$pattern['Pure_default_prefilter_popuphelp']['R']['autre_content_begin']= '</h2>
  </div>
<div id="autre_content">';
$pattern['Pure_default_prefilter_popuphelp']['S']['autre_content_end']='#</div>[\s]*<!-- content -->#';  
$pattern['Pure_default_prefilter_popuphelp']['R']['autre_content_end']='</div>
	</div> <!-- content -->';

?>
