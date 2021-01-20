<% loop AllChildren %>
	<% if not ExcludeFromSitemap %>
		<url>
			<loc>$AbsoluteLink</loc>
			<lastmod>{$LastEdited.Format(Y-MM-dd)}T{$LastEdited.Format(HH:mm:ss)}+00:00</lastmod>
		</url>
		<% if AllChildren %>
			<% include XMLSitemapNextLevel %>
		<% end_if %>
	<% end_if %>
<% end_loop %>