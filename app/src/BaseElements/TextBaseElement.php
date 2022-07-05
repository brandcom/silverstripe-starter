<?php

use SilverStripe\Assets\Image;

class TextBaseElement extends BaseElement
{
    private static $db = [
        'Content' => 'HTMLText',
    ];
}
