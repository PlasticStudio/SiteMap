<?php

namespace PlasticStudio\Sitemap\Extensions;

use SilverStripe\ORM\DataExtension;
use Silverstripe\Forms\FieldList;
use Silverstripe\Forms\CheckBoxField;
use SilverStripe\CMS\Model\SiteTree;

class SitemapPageExtension extends DataExtension {
     
	private static $db = [	
		'ExcludeFromSitemap' => 'Boolean'
    ];
     
	public function updateSettingsFields(FieldList $fields)
	{
		$fields->addFieldToTab(
			'Root.Settings', 
			CheckBoxField::create(
				'ExcludeFromSitemap', 
				'Exclude from sitemap?'
			), 
			'ShowInSearch'
		);
    }
	
	public function Sitemap()
	{
		return SiteTree::get()->Filter(['ParentID' => 0]);
	}
	
}