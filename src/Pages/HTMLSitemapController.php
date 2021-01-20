<?php

namespace PlasticStudio\Sitemap\Pages;

use PageController;
use SilverStripe\View\Requirements;

class HTMLSitemap_Controller extends PageController {
	
	public function init() {
		parent::init();
		Requirements::css('plasticstudio/sitemap:css/sitemap.css');
	}

}