<section class="page cf">

	<main class="typography sitemap">

		<div class="inner">

				<% if Menu(1) %>
					<%-- level 1 --%>
					<ul>
					<% loop Menu(1) %>
						<% if not ExcludeFromSitemap %>
							<li>
								<a href="$Link" title="<% if MetaKeywords %>$MetaKeywords <% else %> Webdesign Wellington <% end_if %> - {$SiteConfig.Title} - <% if MetaTitle %>$MetaTitle.XML <% else %> $Title.XML <% end_if %>">$MenuTitle.XML</a>
								<% if Children %>
									<% include SitemapNextLevel %>
								<% end_if %>
							</li>
						<% end_if %>
					<% end_loop %>
					</ul>
				<% else %>
				
					<p>There are no pages in this site yet.</p>
					$Content
					$Form
				
				<% end_if %>
			
			<div class="clear"></div>

		</div>
	</main>

</section>