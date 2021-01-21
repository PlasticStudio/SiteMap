Description
===========

Adds ability to create both HTML and XML versions of a sitemap on silverstripe sites. 
BOth are based off the site tree, with the ability to elect (via a checkbox in the CMS) to exclude any page from the sitemaps.
Default HTML and XML sitemaps are created by running dev/build after installing this module.
Also generates an xml file (sitemap.xml) in root of site, updated on load of the xml sitemap in the sitetree.



Dependencies
============

* SilverStripe 3.1+


Features
============

* Adds HTML and XML versions of a sitemap based on sitetree
* Exclude any page from sitemaps with CMS checkbox (on Settings tab)
* Uses partial caching, refreshed when any page in the sitetree is updated
* Creates/updates an actual sitemap.xml file in the root of the site on load of xml sitemap page
* Adds the ability to prevent a single page or the entire site from being crawled and indexed by (well-behaved) bots


Installation
============

1. Install module via composer  `composer require plasticstudio/sitemap`
2. Run /dev/build?flush=1
3. Pages can be excluded from sitemap using the checkbox in the Settings CMS tab (under Visibility)
4. Pages can be excluded from being crawled/indexed by bots in the Settings CMS tab (under Visibility)
5. The entire site can be excluded from being crawled/indexed by bots in Site Settings (under the Indexing tab)
6. The noindex tag piggy-backs off SiteTree's ExtraMeta attribute, so make sure your page head template includes the `$ExtraMeta` tag.
