<?php if(!defined("APP_INIT") || APP_INIT!==true) die("Application not initialized"); ?>

<div class="form-group">
    <label><?= $params["title"] ?? "" ?></label>
    <select name="<?= $params["name"] ?? "" ?>" <?= $result["attributes"] ?? ""?>
            class="form-select <?= $params["additional_class"] ?? "" ?>">
        <?php if(isset($params["list"])): ?>
        <?php foreach($params["list"] as $option): ?>
            <option value="<?= $option["value"] ?? "" ?>" class="<?= $option["additional_class"] ?>" <?= $result["optionAttributes"] ?? "" ?>>
                <?= $option["title"] ?? "" ?>
            </option>
        <?php endforeach; ?>
        <?php endif; ?>
    </select>
</div>