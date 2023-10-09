<?php

declare(strict_types=1);

use SilverStripe\CMS\Controllers\ContentController;

class PageController extends ContentController
{
    protected function init(): void
    {
        parent::init();

        // https://docs.silverstripe.org/en/5/developer_guides/security/secure_coding/#clickjacking-prevent-iframe-inclusion
        $this->getResponse()->addHeader("X-Frame-Options", "SAMEORIGIN");
    }
}
