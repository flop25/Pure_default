{footer_script require='jquery'}
{literal} 
var max_dim_width = 0;
var max_dim_height = 0;
jQuery(document).ready(function() {
  $(".thumbnails img").each(function () {
    if (jQuery(this).height() > max_dim_height)
      max_dim_height = jQuery(this).height() + 10;
    if (jQuery(this).width() > max_dim_width)
      max_dim_width = jQuery(this).width() + 10;

    jQuery(".wrap2")
      .css('width', max_dim_width+'px')
      .css('height', max_dim_height+'px');
  });
});
{/literal}
{/footer_script}
