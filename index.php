<?php

use app\core\Application;
use app\core\Page;

require_once __DIR__ . '/init.php';

$app = Application::getInstance();
Page::getInstance()->setProperty("title", "Home");
$app->header();
?>

<?php Application::getInstance()->includeComponent(
    "alex:interface.form",
    "bootstrap",
    [
        'title' => 'Форма для заполнения',
        'additional_class' => 'window--full-form', //доп класс на контейнер формы
        'attr' => [ // доп атрибуты
            'data-form-id' => 'form-123'
        ],
        'method' => 'post',
        'action' => '', //url отправки
        'elements' => [ //список элементов формы
            [
                'type' => 'text',
                'name' => 'login',
                'additional_class' => 'js-login',
                'attr' => [
                    'data-id' => '17'
                ],
                'title' => 'Логин',
                'placeholder' => 'Введите имя'
            ],
            [
                'type' => 'password',
                'name' => 'password',
                'title' => 'Пароль',
                'placeholder' => 'Введите пароль'
            ],
            [
                'type' => 'select',
                'name' => 'server',
                'additional_class' => 'js-login',
                'attr' => [
                    'data-id' => '17'
                ],
                'title' => 'Выберите сервер',
                'list' => [
                    [
                        'title' => 'Онлайнер',
                        'value' => 'onliner',
                        'additional_class' => 'mini--option',
                        'attr' => [
                            'data-id' => '188'
                        ],
                        'selected' => true
                    ],
                    [
                        'title' => 'Тутбай',
                        'value' => 'tut',
                    ]
                ]
            ],

            [
                'type' => 'checkbox',
                'name' => 'login',
                'additional_class' => 'js-login',
                'attr' => [
                    'data-id' => '17'
                ],
                'title' => 'Запомнить меня'
            ],

            [
                'type' => 'textarea',
                'name' => 'message',
                'additional_class' => 'js-login',
                'attr' => [
                    'data-id' => 1,
                    'rows' => 5
                ],
                'title' => 'Ваше сообщение',
                'placeholder' => "Введите ваше сообщение"
            ],
        ]
    ]
)
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

