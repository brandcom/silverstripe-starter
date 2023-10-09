<?php

declare(strict_types=1);

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
}
