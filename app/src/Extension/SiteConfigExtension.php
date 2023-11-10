<?php

declare(strict_types=1);

use SilverStripe\Core\Extension;
use SilverStripe\Forms\FieldList;

class SiteConfigExtension extends Extension
{
    private static array $db = [];

    public function updateCMSFields(FieldList $fields): void
    {
    }
}
