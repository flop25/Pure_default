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
  'colorscheme' => 'clear',
);


add_event_handler('loc_begin_page_header', 'pwg_v');
function  pwg_v() {
  global $template;
  $pwgversion=str_replace('.','',PHPWG_VERSION);
  $pwgversion_array=explode('.', PHPWG_VERSION);
  $template->assign(
  array(
    'PHPWG_VERSION_01' => $pwgversion_array[0].$pwgversion_array[1],
  ));
}


// function load_pattern
// include the right ***.pattern.php
// not compatible 2.2and<2.2

function load_pattern()
{
  global $pattern;
  $pwgversion=str_replace('.','',PHPWG_VERSION);
  $pwgversion_array=explode('.', PHPWG_VERSION);
  if (file_exists($pwgversion.'pattern.php'))
  {
    include($pwgversion.'.pattern.php');
    return true;
  }
  elseif (file_exists(PHPWG_ROOT_PATH.'themes/Pure_default/'.$pwgversion_array[0].$pwgversion_array[1].'x.pattern.php'))
  {
    include(PHPWG_ROOT_PATH.'themes/Pure_default/'.$pwgversion_array[0].$pwgversion_array[1].'x.pattern.php');
    return true;
  }
  else
  {
    $list_pattern_path=array();
    $dir=PHPWG_ROOT_PATH.'themes/Pure_default';
    $dh = opendir($dir);
    while (($file = readdir ($dh)) !== false ) {
      if ($file !== '.' && $file !== '..') {
        $path =$dir.'/'.$file;
        if (!is_dir ($path)) { 
          if(strpos($file,'pattern.php')!==false) { //On ne prend que les .pattern.php
            $list_pattern_path[]=$file;
          }
        }
      }
    }
    closedir($dh);
    $f=0;
    for($i = 10; $i >=0; $i--)
    {
      if (in_array($pwgversion_array[0].$i.'.pattern.php',$list_pattern_path))
      {
        include($pwgversion_array[0].$i.'.pattern.php');
        return true;
        $f=1;
        break;
      }
    }
    if ($f=0)
    {
      return false;
    }
  }
  
}
if(!load_pattern())
{
  global $page;
  $page['errors'][]='Theme not compatible';
}



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
  global $pattern;
  $r=$pattern['Pure_default_prefilter_index']['R'];
  $ps=$pattern['Pure_default_prefilter_index']['S'];
  foreach($r as $i => $pr)
  {
    $content = preg_replace($ps[$i], $pr, $content);
  }
  return $content;
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
  global $pattern;
  $r=$pattern['Pure_default_prefilter_picture']['R'];
  $ps=$pattern['Pure_default_prefilter_picture']['S'];
  foreach($r as $i => $pr)
  {
    $content = preg_replace($ps[$i], $pr, $content);
  }
  return $content;
}
/**************************** identification.tpl *****************************************************************/
function Pure_default_prefilter_identification($content, &$smarty)
{
  global $pattern;
  $r=$pattern['Pure_default_prefilter_identification']['R'];
  $ps=$pattern['Pure_default_prefilter_identification']['S'];
  foreach($r as $i => $pr)
  {
    $content = preg_replace($ps[$i], $pr, $content);
  }
  return $content;
}
/**************************** nbm.tpl *****************************************************************/
function Pure_default_prefilter_nbm($content, &$smarty)
{
  global $pattern;
  $r=$pattern['Pure_default_prefilter_nbm']['R'];
  $ps=$pattern['Pure_default_prefilter_nbm']['S'];
  foreach($r as $i => $pr)
  {
    $content = preg_replace($ps[$i], $pr, $content);
  }
  return $content;
}
/**************************** notification.tpl *****************************************************************/
function Pure_default_prefilter_notification($content, &$smarty)
{
  global $pattern;
  $r=$pattern['Pure_default_prefilter_notification']['R'];
  $ps=$pattern['Pure_default_prefilter_notification']['S'];
  foreach($r as $i => $pr)
  {
    $content = preg_replace($ps[$i], $pr, $content);
  }
  return $content;
}
/**************************** password.tpl *****************************************************************/
function Pure_default_prefilter_password($content, &$smarty)
{
  global $pattern;
  $r=$pattern['Pure_default_prefilter_password']['R'];
  $ps=$pattern['Pure_default_prefilter_password']['S'];
  foreach($r as $i => $pr)
  {
    $content = preg_replace($ps[$i], $pr, $content);
  }
  return $content;
}
/**************************** tags.tpl *****************************************************************/
function Pure_default_prefilter_tags($content, &$smarty)
{
  global $pattern;
  $r=$pattern['Pure_default_prefilter_tags']['R'];
  $ps=$pattern['Pure_default_prefilter_tags']['S'];
  foreach($r as $i => $pr)
  {
    $content = preg_replace($ps[$i], $pr, $content);
  }
  return $content;
}
/**************************** about.tpl *****************************************************************/
function Pure_default_prefilter_about($content, &$smarty)
{
  global $pattern;
  $r=$pattern['Pure_default_prefilter_about']['R'];
  $ps=$pattern['Pure_default_prefilter_about']['S'];
  foreach($r as $i => $pr)
  {
    $content = preg_replace($ps[$i], $pr, $content);
  }
  return $content;
}
/**************************** popuphelp.tpl *****************************************************************/
function Pure_default_prefilter_popuphelp($content, &$smarty)
{
  global $pattern;
  $r=$pattern['Pure_default_prefilter_popuphelp']['R'];
  $ps=$pattern['Pure_default_prefilter_popuphelp']['S'];
  foreach($r as $i => $pr)
  {
    $content = preg_replace($ps[$i], $pr, $content);
  }
  return $content;
}

?>
