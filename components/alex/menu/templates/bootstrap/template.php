<?php if(!defined("APP_INIT") || APP_INIT!==true) die("Application not initialized"); ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">AlexFramework</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php if (!empty($result)):?>
        <ul class="navbar-nav mr-auto">
            <?php foreach ($result as $item): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?=$item["link"]?>"><?=$item["text"]?></a>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    </div>
</nav>
