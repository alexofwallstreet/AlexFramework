<?php if(!defined("APP_INIT") || APP_INIT!==true) die("Application not initialized"); ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">AlexFramework</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php if (isset($result["menuItems"])):?>
                <ul class="navbar-nav mr-auto">
                    <?php foreach ($result["menuItems"] as $item): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=$item["url"]?>"><?=$item["title"]?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</nav>
