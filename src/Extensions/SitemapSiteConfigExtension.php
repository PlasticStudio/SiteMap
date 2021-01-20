<?php

namespace PlasticStudio\Sitemap\Extensions;

use SilverStripe\ORM\DataExtension;
use Silverstripe\Forms\FieldList;
use Silverstripe\Forms\CheckBoxField;

class SitemapSiteConfigExtension extends DataExtension {
     
	private static $db = [	
		'DoNotIndex' => 'Boolean'
    ];
     
	public function updateCMSFields(FieldList $fields)
	{
        $fields->addFieldToTab(
            'Root.Indexing', 
            CheckBoxField::create(
				'DoNotIndex', 
				'Exclude entire site from indexing robots (like Google etc)'
            )
        );
    }
	
}