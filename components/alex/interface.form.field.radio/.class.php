<?php

class FormFieldRadioComponent extends app\core\component\Base
{
    function executeComponent()
    {
        $this->result["attributes"] = $this->getAttributesString($this->params["attr"]);
        $this->template->render();
    }
}