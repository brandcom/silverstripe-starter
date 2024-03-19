<?php

declare(strict_types=1);
use SilverStripe\ORM\FieldType\DBField;

class TextBaseElement extends BaseElement
{
    /**
     * @link https://silverstripe.github.io/silverstripe-pattern-lib/?path=/story/admin-icons--icon-reference&addons=1&panelRight=0&selectedKind=Admin/Icons&selectedStory=Icon%20reference&stories=1
     */
    private static string $icon = "font-icon-p-document";

    private static string $singular_name = "Text Element";

    private static string $plural_name = "Text Elemente";

    private static string $description = "Ein HTML-Editor-Element, zur Darstellung von Text-Inhalten.";

    private static array $db = [
        "Content" => "HTMLText",
    ];

    private static array $field_labels = [
        "Content" => "Inhalt",
    ];

    /**
     *  Gibt eine Inhaltszusammenfassung zurück für die Zusammenfassung im CMS
     */
    public function getSummary(): string
    {
        return DBField::create_field('HTMLText', $this->Content)->Summary(100);
    }
}
