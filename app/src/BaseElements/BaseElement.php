<?php


class BaseElement extends \DNADesign\Elemental\Models\BaseElement
{
    public function forTemplate($holder = true)
    {
        return $this->renderWith('BaseElements/' . $this->ClassName);
    }

    public function getType()
    {
        return str_replace('BaseElement', '', $this->ClassName);
    }
}
