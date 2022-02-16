<?php if(!defined("APP_INIT") || APP_INIT!==true) die("Application not initialized"); ?>

<div class="form-group">
    <input type="radio" class="form-check-input <?= $params["additional_class"] ?? "" ?>"
           name="name=<?= $params["name"] ?? "" ?>">
    <label><?= $params["title"] ?? "" ?></label>
</div>