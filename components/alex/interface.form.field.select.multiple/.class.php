<?php

class FormFieldSelectMultipleComponent extends app\core\component\Base
{
    function executeComponent()
    {
        $this->result["attributes"] = $this->getAttributesString($this->params["attr"]);
        $this->result["optionAttributes"] = $this->getAttributesString($this->params["list"]["attr"]);
        $this->template->render();
    }
}