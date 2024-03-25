<?php

declare(strict_types=1);

use SilverStripe\Assets\Image;

class ImageTextBaseElement extends BaseElement
{
    /**
     * @link https://silverstripe.github.io/silverstripe-pattern-lib/?path=/story/admin-icons--icon-reference&addons=1&panelRight=0&selectedKind=Admin/Icons&selectedStory=Icon%20reference&stories=1
     */
    private static string $icon = "font-icon-block-promo-3";

    private static string $singular_name = "Image Text Element";

    private static string $plural_name = "Image Text Elemente";

    private static string $description = "Ein Element zur Darstellung von Textinhalten mit nebenstehendem Bild.";

    private static array $db = [
        "Content" => "HTMLText",
    ];

    private static array $has_one = [
        "Image" => Image::class,
    ];

    private static array $owns = ["Image"];

    private static array $field_labels = [
        "Content" => "Inhalt",
        "Image" => "Bild",
    ];
}
