<?php if(!defined("APP_INIT") || APP_INIT!==true) die("Application not initialized"); ?>

<div class="form-group">
    <label><?= $params["title"] ?? "" ?></label>
    <textarea name="<?= $params["name"] ?? "" ?>" <?= $result["attributes"] ?? "" ?>
           class="form-control <?= $params["additional_class"] ?? "" ?>" placeholder="<?= $params["placeholder"] ?? "" ?>"></textarea>
</div>