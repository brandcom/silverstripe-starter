<?php

use SilverStripe\CMS\Controllers\ContentController;

class PageController extends ContentController
{
    protected function init()
    {
        parent::init();

        // https://docs.silverstripe.org/en/4/developer_guides/security/secure_coding/#clickjacking-prevent-iframe-inclusion
        $this->getResponse()->addHeader("X-Frame-Options", "SAMEORIGIN");
    }
}
