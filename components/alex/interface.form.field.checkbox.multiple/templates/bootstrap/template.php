<?php if(!defined("APP_INIT") || APP_INIT!==true) die("Application not initialized"); ?>

<div class="form-group">
    <label><?= $params["title"] ?? "" ?></label>
    <?php if(isset($params['list'])): ?>
        <?php foreach($params['list'] as $checkbox): ?>
            <div class="checkbox-group">
                <label>
                    <input type="checkbox" name="<?= $params["name"] ?? "" ?>[]" <?= $result["attributes"] ?? "" ?>
                           class="form-check-input <?= $params["additional_class"] ?? "" ?>"
                           value="<?= $checkbox['value'] ?? "" ?>" <?= $checkbox["checked"] ? "checked" : "" ?> >
                    <span class="checkbox-title"><?= $checkbox['title'] ?></span>
                </label>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
