<?php

class FormComponent extends app\core\component\Base
{
    private const TYPE_TEXT = "text";
    private const TYPE_NUMBER = "number";
    private const TYPE_PASSWORD = "password";
    private const TYPE_CHECKBOX = "checkbox";
    private const TYPE_RADIO = "radio";
    private const TYPE_SELECT = "select";
    private const TYPE_TEXTAREA = "textarea";

    function executeComponent()
    {
        $this->result["attributes"] = $this->getAttributesString($this->params["attr"]);
        $this->result["allowedTypes"] = array_values(self::getConstants());
        $this->template->render();
    }

    static function getConstants(): array
    {
        $reflectionClass = new ReflectionClass(__CLASS__);
        return $reflectionClass->getConstants();
    }
}