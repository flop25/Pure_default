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
add_event_handler('loc_after_page_header', 'Pure_default_after_page_header');
function Pure_default_after_page_header()
{
	global $template, $page;
	if (isset($page['body_id']) and $page['body_id'] == 'theIdentificationPage')
	{
    $template->set_prefilter('identification', 'Pure_default_prefilter_identification');
	}
	if (isset($page['body_id']) and $page['body_id'] == 'theNBMPage')
	{
    $template->set_prefilter('nbm', 'Pure_default_prefilter_nbm');
	}
	if (isset($page['body_id']) and $page['body_id'] == 'theNotificationPage')
	{
		$template->set_prefilter('notification', 'Pure_default_prefilter_notification');
	}
	if (isset($page['body_id']) and $page['body_id'] == 'thePasswordPage')
	{
		$template->set_prefilter('password', 'Pure_default_prefilter_password');
	}
	if (isset($page['body_id']) and $page['body_id'] == 'theTagsPage')
	{
		$template->set_prefilter('tags', 'Pure_default_prefilter_tags');
	}
	if (isset($page['body_id']) and $page['body_id'] == 'theAboutPage')
	{
		$template->set_prefilter('about', 'Pure_default_prefilter_about');
	}
	if (isset($page['body_id']) and $page['body_id'] == 'thePopuphelpPage')
	{
		$template->set_prefilter('popuphelp', 'Pure_default_prefilter_popuphelp');
	}
}
/************************************ index.tpl ************************************/
add_event_handler('loc_end_index', 'Pure_default_index');
function Pure_default_index()
{
    global $template;
    $template->set_prefilter('index', 'Pure_default_prefilter_index');
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
/************************************ picture.tpl ************************************/
add_event_handler('loc_begin_picture', 'Pure_default_picture');
function Pure_default_picture()
{
    global $template;
    $template->set_prefilter('picture', 'Pure_default_prefilter_picture');
}
function Pure_default_prefilter_picture($content, &$smarty)
{
  $search = '#<div id="content" class="pictureContent">#';  
  $replacement = '<div id="content" class="pictureContent">
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
	
  $search = '#\{if \!empty\(\$PLUGIN_PICTURE_AFTER\)\}\{\$PLUGIN_PICTURE_AFTER\}\{/if\}#';  
  $replacement = '{if !empty($PLUGIN_PICTURE_AFTER)}{$PLUGIN_PICTURE_AFTER}{/if}
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

/**************************** identification.tpl *****************************************************************/
function Pure_default_prefilter_identification($content, &$smarty)
{
  $search = '#<form action="\{\$F_LOGIN_ACTION\}" method="post" name="login_form" class="properties">#';  
  $replacement = '<div id="autre_content">
<form action="{$F_LOGIN_ACTION}" method="post" name="login_form" class="properties">
';
  $content = preg_replace($search, $replacement, $content);
  $search = '#</div>[\s]*<\!-- content -->#';  
  $replacement = '</div>
	</div> <!-- content -->';
  return preg_replace($search, $replacement, $content);
}
/**************************** nbm.tpl *****************************************************************/
function Pure_default_prefilter_nbm($content, &$smarty)
{
	$search = '#\{if not empty(\$errors)\}#';  
	$replacement = '<div id="autre_content">
{if not empty($errors)}
';
	$content = preg_replace($search, $replacement, $content);
	$search = '#\{/if\}[\s]*</div>#';  
	$replacement = '{/if}
	</div>
	</div> <!-- content -->';
	return preg_replace($search, $replacement, $content);
}
/**************************** notification.tpl *****************************************************************/
function Pure_default_prefilter_notification($content, &$smarty)
{
	$search = '#<p>\{\'#';  
	$replacement = '<div id="autre_content">
<p>{\'';
	$content = preg_replace($search, $replacement, $content);
	$search = '#</dt>[\s]*</dl>#';  
	$replacement = '</dt>
	</dl>
</div>';
	return preg_replace($search, $replacement, $content);
}
/**************************** password.tpl *****************************************************************/
function Pure_default_prefilter_password($content, &$smarty)
{
	$search = '#<form action=#';  
	$replacement = '<div id="autre_content">
<form action=';
	$content = preg_replace($search, $replacement, $content);
	$search = '#</div>[\s]*<!-- content -->#';  
	$replacement = '</div>
	</div> <!-- content -->';
	return preg_replace($search, $replacement, $content);
}
/**************************** tags.tpl *****************************************************************/
function Pure_default_prefilter_tags($content, &$smarty)
{
		$search = '#</h2>[\s]*</div>#';  
		$replacement = '</h2>
  </div>
<div id="autre_content">';
		$content = preg_replace($search, $replacement, $content);
		$search = '#</div>[\s]*<!-- content -->#';  
		$replacement = '</div>
		</div> <!-- content -->';
		return preg_replace($search, $replacement, $content);
}
/**************************** about.tpl *****************************************************************/
function Pure_default_prefilter_about($content, &$smarty)
{
		$search = '#</h2>[\s]*</div>#';  
		$replacement = '</h2>
  </div>
<div id="autre_content">';
		$content = preg_replace($search, $replacement, $content);
		$search = '#\{/if\}[\s]*</div>#';  
		$replacement = '{/if}
  </div>
  </div>';
		return preg_replace($search, $replacement, $content);
}
/**************************** popuphelp.tpl *****************************************************************/
function Pure_default_prefilter_popuphelp($content, &$smarty)
{
		$search = '#</h2>[\s]*</div>#';  
		$replacement = '</h2>
  </div>
<div id="autre_content">';
		$content = preg_replace($search, $replacement, $content);
		$search = '#</div>[\s]*<!-- content -->#';  
		$replacement = '</div>
		</div> <!-- content -->';
		return preg_replace($search, $replacement, $content);
}

?>
