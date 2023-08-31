<?php

use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Control\Director;
use SilverStripe\Forms\TextField;

class Page extends SiteTree
{
    private static $db = [
        "MetaTitle" => "Varchar(255)",
    ];

    public function getCanonicalUrl(): string
    {
        return $this->getBaseUrl() . $this->Link();
    }

    public function getBaseUrl(): string
    {
        return rtrim(Director::absoluteBaseURL(), "/");
    }

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab("Root.Main", TextField::create("MetaTitle", "MetaTitle"));

        return $fields;
    }
}
