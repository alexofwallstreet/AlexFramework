<?php if(!defined("APP_INIT") || APP_INIT!==true) die("Application not initialized"); ?>

<div class="form-group">
    <label class="form-label d-block">
        <?= $params["title"] ?? "" ?>
        <input
               type="text"
               class="<?= $params["additional_class"] ?? "" ?>"
               name="<?= $params["name"] ?? "" ?>[]"
               <?= $result["attributes"] ?? "" ?>
               placeholder="<?= $params["placeholder"] ?? "" ?>"
        >
    </label>
    <div class="btn btn-success mt-1 btn-add-text-field">Добавить поле</div>
</div>