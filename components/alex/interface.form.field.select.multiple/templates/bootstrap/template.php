<?php use app\core\Application;

if(!defined("APP_INIT") || APP_INIT!==true) die("Application not initialized"); ?>

<div class="form-group">
    <label><?= $params["title"] ?? "" ?></label>
    <select name="<?= $params["name"] ?? "" ?>[]" <?= $result["attributes"] ?? ""?>
            class="form-select <?= $params["additional_class"] ?? "" ?>" multiple>
        <?php if(isset($params["list"])): ?>
        <?php foreach($params["list"] as $option): ?>
            <?php Application::getInstance()->includeComponent(
                "alex:interface.form.field.select.option",
                "bootstrap",
                $option)
            ?>
        <?php endforeach; ?>
        <?php endif; ?>
    </select>
</div>