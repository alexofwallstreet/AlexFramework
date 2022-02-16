<?php if(!defined("APP_INIT") || APP_INIT!==true) die("Application not initialized"); ?>

<?php
use app\core\Application;
?>
<div class="p-5 my-4 border">
    <h2 class="h2"><?= $params["title"] ?? "" ?></h2>

    <form class="alex_form <?= $params["additional_class"] ?? "" ?>" method="<?= $params["method"] ?? "" ?>"
          action="<?= $params["action"] ?? "" ?>" <?= $result["attributes"] ?? "" ?>>

        <?php if(isset($params["elements"])): ?>
            <?php foreach($params["elements"] as $element): ?>
                <?php if(in_array($element["type"], $result["allowedTypes"]))
                    Application::getInstance()->includeComponent(
                        "alex:interface.form.field.{$element["type"]}",
                        "bootstrap",
                        $element);
                ?>
            <?php endforeach; ?>
        <?php endif; ?>

        <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>
</div>
