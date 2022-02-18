<?php if(!defined("APP_INIT") || APP_INIT!==true) die("Application not initialized"); ?>

<div class="form-group">
    <label><?= $params["title"] ?? "" ?></label>
    <?php if(isset($params['list'])): ?>
        <?php foreach($params['list'] as $checkbox): ?>
            <label class="form-label d-block">
                <input
                    type="checkbox"
                    class="<?= $params["additional_class"] ?? "" ?>"
                    name="<?= $params["name"] ?? "" ?>[]"
                    value="<?= $checkbox['value'] ?? "" ?>"
                    <?= $result["attributes"] ?? "" ?>
                    <?= $checkbox["checked"] ? "checked" : "" ?>
                >
                <span class="checkbox-title"><?= $checkbox['title'] ?></span>
            </label>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
