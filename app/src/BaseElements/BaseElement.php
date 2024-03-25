<?php

declare(strict_types=1);

use SilverStripe\ORM\FieldType\DBField;
use SilverStripe\ORM\FieldType\DBHTMLText;

/**
 * The following line is needed to avoid false negatives in phpstan
 * @property string $Content
 */
class BaseElement extends \DNADesign\Elemental\Models\BaseElement
{
    /**
     * Diese Method sorgt dafür, dass wir die BaseElement-Templates in den Unterordner packen können.
     *
     * @param bool $holder
     * @return \SilverStripe\ORM\FieldType\DBHTMLText|string|null
     */
    public function forTemplate($holder = true)
    {
        return $this->renderWith("BaseElements/" . $this->ClassName);
    }

    /**
     * Gibt den Namen des BaseElements für die Auswahl im CMS zurück.
     */
    public function getType(): string
    {
        return str_replace("BaseElement", "", $this->ClassName);
    }

    /**
     *  Gibt eine Inhaltszusammenfassung zurück für die Zusammenfassung im CMS
     */
    public function getSummary(): string
    {
        /** @var DBHTMLText $htmlTextField */
        $htmlTextField = DBField::create_field("HTMLText", $this->Content);
        return $htmlTextField->Summary(100);
    }
}
