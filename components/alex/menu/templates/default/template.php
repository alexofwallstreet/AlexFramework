<?php if(!defined("APP_INIT") || APP_INIT!==true) die("Application not initialized"); ?>

<nav class="default__menu">
    <?php if (isset($result["menuItems"])):?>
        <ul>
            <?php foreach ($result["menuItems"] as $item): ?>
                <li>
                    <a href="<?=$item["url"]?>"><?=$item["title"]?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</nav>
