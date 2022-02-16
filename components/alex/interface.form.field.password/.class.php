<?php

class FormFieldPasswordComponent extends app\core\component\Base
{
    function executeComponent()
    {
        $this->result["attributes"] = $this->getAttributesString($this->params["attr"]);
        $this->template->render();
    }
}