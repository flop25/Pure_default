{* $Id: redirect.tpl 2521 2008-09-12 02:17:35Z rvelices $ *}
{html_head}
<style type="text/css">#the_page {ldelim}text-align:center;} </style>
{/html_head}

<div>
	{$REDIRECT_MSG}
</div>

<p style="margin: 2em">
	<a href="{$page_refresh.U_REFRESH}">
		{'click_to_redirect'|@translate}
	</a>
</p>
