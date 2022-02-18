<?php if(!defined("APP_INIT") || APP_INIT!==true) die("Application not initialized"); ?>

<div class="form-group">
    <label><?= $params["title"] ?? "" ?></label>
    <input type="number" name="<?= $params["name"] ?? "" ?>" <?= $result["attributes"] ?? "" ?>
           placeholder="<?= $params["placeholder"] ?? "" ?>" class="form-control <?= $params["additional_class"] ?? "" ?>">
</div>