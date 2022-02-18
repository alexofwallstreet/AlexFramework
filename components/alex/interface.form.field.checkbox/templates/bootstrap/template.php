<?php if(!defined("APP_INIT") || APP_INIT!==true) die("Application not initialized"); ?>

<?php
use app\core\Application;
use app\core\Config;

?>

<div class="form-group">
    <?php
    Application::getInstance()->includeComponent(
        "alex:interface.form.field.standard.input",
        $result["template"] ?? Config::get("defaultTemplate"),
        $params
    ) ?>
</div>