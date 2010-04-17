{* $Id: popuphelp.tpl 2352 2008-05-20 00:27:26Z patdenice $ *}
<div id="content" class="content">
<div id="autre_content">
{$HELP_CONTENT}
 <!-- content -->
</div>
<ul class="categoryActions">
	<li>
		<a href="#" onclick="window.close();" title="{'Close this window'|@translate}">
			<img src="{$ROOT_URL}{$themeconf.icon_dir}/exit.png" class="button" alt="exit">
		</a>
	</li>
</ul>
</div>