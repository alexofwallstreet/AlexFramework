<?php if(!defined("APP_INIT") || APP_INIT!==true) die("Application not initialized"); ?>


<?php
use app\core\Application;
use app\core\Config;

?>

<div class="form-group">
    <?= $params['title'] ?? "" ?>
    <?php if(isset($params['list'])): ?>
        <?php foreach ($params['list'] as $radio): ?>
        <?php
        Application::getInstance()->includeComponent(
            "alex:interface.form.field.standard.input",
            $result["template"] ?? Config::get("defaultTemplate"),
            array_merge($params, $radio)
        ) ?>
        <?php endforeach; ?>
    <?php endif; ?>
</div>