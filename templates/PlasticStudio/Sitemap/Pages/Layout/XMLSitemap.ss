<?xml version="1.0" encoding="UTF-8"?>

	<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<% if Sitemap %>
		<% loop Sitemap %>
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
	<% end_if %>
	
	</urlset>