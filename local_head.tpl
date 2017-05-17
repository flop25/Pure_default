{if isset($PHPWG_VERSION_01) and $PHPWG_VERSION_01 eq "23"}
{footer_script require='jquery'}
{literal} 
var max_dim_width = 0;
var max_dim_height = 0;
jQuery(window).load(function() {
  $(".thumbnails img").each(function () {
    if (jQuery(this).height() > max_dim_height)
      max_dim_height = jQuery(this).height() + 10;
    if (jQuery(this).width() > max_dim_width)
      max_dim_width = jQuery(this).width() + 10;

    jQuery(".wrap2")
      .css('width', max_dim_width+'px')
      .css('height', max_dim_height+'px');
    jQuery(".wrap1")
      .css('width', max_dim_width+'px');
  });
});
{/literal}
{/footer_script}
{/if}
{if isset($MENUBAR) and isset($ELEMENT_CONTENT)}
{html_head}{literal}
<style>
#imageHeaderBar, #imageToolBar {
	background-image:none;
}
</style>
{/literal}{/html_head}
{/if}
