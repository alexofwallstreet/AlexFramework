<?php if(!defined("APP_INIT") || APP_INIT!==true) die("Application not initialized"); ?>

<div class="form-group">
    <input type="checkbox" name="<?= $params["name"] ?? "" ?>" <?= $result["attributes"] ?? "" ?>
           class="form-check-input <?= $params["additional_class"] ?? "" ?>">
    <label><?= $params["title"] ?? "" ?></label>
</div>