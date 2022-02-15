<?php

use app\core\Application;
use app\core\Page;

require_once __DIR__ . '/init.php';

$app = Application::getInstance();
Page::getInstance()->setProperty("title", "Home");
$app->header();
?>
<pre>
-------- 09.02.2022 --------
Класс Page:
1) методы setProperty(), getProperty(), showProperty() для записи свойств
2) метод для создания макроса getMacro()
3) showHead() для подключения css, js и строк в head из любого места
4) метод getAllReplaces() получения массива для замены макросов
Класс Application:
5) метод replaceAllMacros() для замены макросов из буффера

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

