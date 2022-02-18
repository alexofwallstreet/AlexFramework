<?php if(!defined("APP_INIT") || APP_INIT!==true) die("Application not initialized"); ?>

<div class="form-group">
    <label class="form-label d-block">
        <?= $params["title"] ?? "" ?>
        <textarea
           name="<?= $params["name"] ?? "" ?>"
           class="form-control <?= $params["additional_class"] ?? "" ?>"
           <?= $result["attributes"] ?? "" ?>
           placeholder="<?= $params["placeholder"] ?? "" ?>"></textarea>
    </label>
</div>