<?php if(!defined("APP_INIT") || APP_INIT!==true) die("Application not initialized"); ?>

<div class="form-group">
    <label><?= $params["title"] ?? "" ?></label>
    <input type="checkbox" name="<?= $params["name"] ?? "" ?>" <?= $result["attributes"] ?? "" ?>
           class="form-check-input <?= $params["additional_class"] ?? "" ?>">
</div>