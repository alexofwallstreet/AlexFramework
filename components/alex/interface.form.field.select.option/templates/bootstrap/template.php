<?php if(!defined("APP_INIT") || APP_INIT!==true) die("Application not initialized"); ?>

<option value="<?= $params["value"] ?? "" ?>" class="<?= $params["additional_class"] ?? "" ?>"
    <?= $params["selected"] ? "selected" : "" ?> <?= $result["attributes"] ?? ""?>>
    <?= $params["title"] ?? "" ?>
</option>