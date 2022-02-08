<?php

use app\core\Application;

require_once __DIR__ . '/init.php';

$app = Application::getInstance();
$app->header();
?>
<pre>
-------- 08.02.2022 --------
1) добавлены методы addJs, addCss, addString класса Page
-------- 03.02.2022 --------
1) создан трейт Singleton
2) добавлена константа ядра
3) начало работы над шаблонизацией
4) работа с буфером, методы header() и footer() класса Application
5) создана страница истории изменения проекта
</pre>
<?php
$app->footer();
?>

