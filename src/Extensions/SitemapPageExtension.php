<?php

namespace PlasticStudio\Sitemap\Extensions;

use SilverStripe\ORM\DataExtension;
use Silverstripe\Forms\FieldList;
use Silverstripe\Forms\CheckBoxField;

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
	
}