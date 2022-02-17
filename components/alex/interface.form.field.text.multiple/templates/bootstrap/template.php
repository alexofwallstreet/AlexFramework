<?php if(!defined("APP_INIT") || APP_INIT!==true) die("Application not initialized"); ?>

<div class="form-group">
    <label><?= $params["title"] ?? "" ?></label>
    <input type="text" name="<?= $params["name"] ?? "" ?>[]" <?= $result["attributes"] ?? "" ?>
           placeholder="<?= $params["placeholder"] ?? "" ?>" class="form-control mt-1 <?= $params["additional_class"] ?? "" ?>">
    <div class="btn btn-success mt-2 btn-add-text-field">Добавить поле</div>
</div>