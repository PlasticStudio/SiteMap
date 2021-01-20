<?php

namespace PlasticStudio\Sitemap\Extensions;

use SilverStripe\ORM\DataExtension;
use Silverstripe\Forms\FieldList;
use Silverstripe\Forms\CheckBoxField;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\SiteConfig\SiteConfig;

class SitemapPageExtension extends DataExtension {
     
	private static $db = [	
		'ExcludeFromSitemap' => 'Boolean',
		'DoNotIndex' => 'Boolean'
    ];
     
	public function updateSettingsFields(FieldList $fields)
	{
		$fields->insertBefore(
			'ShowInSearch', 
			CheckBoxField::create(
				'ExcludeFromSitemap', 
				'Exclude from sitemap?'
			), 
			'ShowInSearch'
		);
		$fields->insertAfter(
			'ShowInSearch', 
			CheckBoxField::create(
				'DoNotIndex', 
				'Exclude this page from indexing robots (like Google etc)'
			)
		);
    }
	
	public function Sitemap()
	{
		return SiteTree::get()->Filter(['ParentID' => 0]);
	}

	/**
	 * Append robots meta tag to SiteTree's ExtraMeta db attribute
	 * 
	 * @return string meta tags
	 */
	public function ExtraMeta()
	{
		$tags = $this->owner->ExtraMeta;
		if (SiteConfig::current_site_config()->DoNotIndex || $this->owner->DoNotIndex) {
            $tags .= '<meta name="robots" content="noindex, nofollow" />';
        }
        return $tags;
	}
	
}