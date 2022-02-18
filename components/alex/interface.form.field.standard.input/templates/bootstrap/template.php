<?php if(!defined("APP_INIT") || APP_INIT!==true) die("Application not initialized"); ?>

<label class="form-label d-block">
    <?= $params["title"] ?? "" ?>
    <input
           type="<?= $params["type"] ?? "text" ?>"
           class="<?= $params["additional_class"] ?? "" ?>"
           name="<?= $params["name"] ?? "" ?>"
           <?= $result["attributes"] ?? "" ?>
           placeholder="<?= $params["placeholder"] ?? "" ?>"
           value="<?= $params["value"] ?? "" ?>"
           <?= ($params["checked"] ?? false) ? "checked" : "" ?>
    >
</label>