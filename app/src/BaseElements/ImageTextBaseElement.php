<?php

declare(strict_types=1);

use SilverStripe\Assets\Image;

/**
 * @link https://wissenspool.brandcom.de/books/assets-images-video-icons
 */
class ImageTextBaseElement extends BaseElement
{
    /**
     * @link https://silverstripe.github.io/silverstripe-pattern-lib/?path=/story/admin-icons--icon-reference&addons=1&panelRight=0&selectedKind=Admin/Icons&selectedStory=Icon%20reference&stories=1
     */
    private static string $icon = "font-icon-block-promo-3";

    private static string $singular_name = "Image Text Element";

    private static string $plural_name = "Image Text Elemente";

    private static string $description = "Ein HTML-Editor-Element, zur Darstellung von Text-Inhalten.";

    private static array $db = [
        "Content" => "HTMLText",
    ];

    private static array $has_one = [
        "Image" => Image::class,
    ];

    private static array $field_labels = [
        "Content" => "Inhalt",
        "Image" => "Bild",
    ];
}
