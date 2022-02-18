<?php

class FormFieldTextMultipleComponent extends app\core\component\Base
{
    function executeComponent()
    {
        $this->result["attributes"] = $this->getAttributesString($this->params["attr"]);
        $this->result["template"] = $this->template->getId();
        $this->template->render();
    }
}