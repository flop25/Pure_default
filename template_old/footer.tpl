{* $Id: footer.tpl 2381 2008-06-01 19:19:46Z vdigital $ *}
<div id="copyright"> <a name="EoP"></a>
  <!-- End of Page -->
  {if isset($debug.TIME) }
  {'generation_time'|@translate} {$debug.TIME} ({$debug.NB_QUERIES} {'sql_queries_in'|@translate} {$debug.SQL_TIME}) -
  {/if}
  
  {* Please, do not remove this copyright. If you really want to,
  contact us on http://piwigo.org to find a solution on how
  to show the origin of the script...
  *}
  
  {'powered_by'|@translate} <a href="{$PHPWG_URL}" class="Piwigo"> <span class="Piwigo">Piwigo</span></a> {$VERSION}
  {if isset($CONTACT_MAIL)}
  - <a href="http://flop25.free.fr">Flop25 Style</a> - <a href="http://tango.freedesktop.org/Tango_Desktop_Project">Tango Icon</a> - {'send_mail'|@translate} <a href="mailto:{$CONTACT_MAIL}?subject={'title_send_mail'|@translate|@escape:url}">{'Webmaster'|@translate}</a> {/if}
  
  {if isset($footer_elements)}
  {foreach from=$footer_elements item=v}
  {$v}
  {/foreach}
  {/if} </div>
<!-- the_page -->
{if isset($debug.QUERIES_LIST)}
<div id="debug"> {$debug.QUERIES_LIST} </div>
{/if}
</div>
<!-- copyright -->
</body></html>