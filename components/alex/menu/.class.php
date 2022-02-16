<?php

class MenuComponent extends app\core\component\Base
{
    function executeComponent()
    {
        $this->result["menuItems"] = $this->getMenuItems($this->params);
        $this->template->render();
    }

    private function getMenuItems($params)
    {
        return $params["menuItems"];
    }
}