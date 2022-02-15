<?php

class MenuComponent extends app\core\component\Base
{
    function executeComponent()
    {
        $result = $this->params;
        $this->template->render("bootstrap", $result);
    }
}