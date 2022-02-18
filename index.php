<?php

use app\core\Application;
use app\core\Page;

require_once __DIR__ . '/init.php';

$app = Application::getInstance();
Page::getInstance()->setProperty("title", "Home");
$app->header();
?>

<?php
if (!empty($_POST)) {
    echo "<h3>Массив _POST:</h3>";
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
}
?>

<?php Application::getInstance()->includeComponent(
    "alex:interface.form",
    "bootstrap",
    [
        'title' => 'Пример работы компонента формы',
        'additional_class' => 'mt-3 p-5 border', //доп класс на контейнер формы
        'attr' => [ // доп атрибуты
            'data-form-id' => 'form-123'
        ],
        'method' => 'post',
        'action' => '/', //url отправки
        'elements' => [ //список элементов формы
            [
                'title' => 'Логин',
                'type' => 'text',
                'name' => 'login',
                'additional_class' => 'form-control form-control-lg',
                'placeholder' => 'Введите имя',
                'attr' => [
                    'required' => ''
                ]
            ],
            [
                'title' => 'Пароль',
                'type' => 'password',
                'name' => 'password',
                'additional_class' => 'form-control',
                'placeholder' => 'Введите пароль',
                'attr' => [
                    'required' => ''
                ]
            ],
            [
                'title' => 'Год рождения',
                'type' => 'number',
                'name' => 'birth_year',
                'additional_class' => 'form-control form-control-lg',
                'placeholder' => 'Введите год',
                'attr' => [
                    'min' => '1900',
                    'max' => date('Y'),
                    'value' => '1990'
                ]
            ],
            [
                'title' => 'Лучшая поисковая система',
                'type' => 'select',
                'name' => 'search_engine',
                'additional_class' => 'form-select form-select-lg',
                'attr' => [
                    'size' => '4'
                ],
                'list' => [
                    [
                        'title' => 'Google',
                        'value' => 'google',
                        'attr' => [
                            'data-id' => '100'
                        ],
                        'selected' => true
                    ],

                    [
                        'title' => 'Яндекс',
                        'value' => 'yandex',
                        'attr' => [
                            'data-id' => '101'
                        ]
                    ],

                    [
                        'title' => 'Yahoo',
                        'value' => 'yahoo',
                        'attr' => [
                            'data-id' => '102'
                        ]
                    ],

                    [
                        'title' => 'Bing',
                        'value' => 'bing',
                        'attr' => [
                            'data-id' => '103'
                        ]
                    ],
                ]
            ],

            [
                'type' => 'checkbox',
                'name' => 'remember',
                'additional_class' => 'form-check-input',
                'attr' => [
                    'data-id' => '17'
                ],
                'title' => 'Запомнить меня'
            ],

            [
                'type' => 'textarea',
                'name' => 'message',
                'additional_class' => 'border border-primary',
                'attr' => [
                    'data-id' => 1,
                    'rows' => 5
                ],
                'title' => 'Ваше сообщение',
                'placeholder' => "Введите ваше сообщение"
            ],

            [
                'type' => 'radio',
                'name' => 'planet',
                'additional_class' => 'mt-1 form-check-input',
                'title' => 'Какая планета имеет кольца?',
                'list' => [
                    [
                        'title' => 'Земля',
                        'value' => 'earth'
                    ],
                    [
                        'title' => 'Марс',
                        'value' => 'mars'
                    ],
                    [
                        'title' => 'Сатурн',
                        'value' => 'saturn'
                    ],
                    [
                        'title' => 'Юпитер',
                        'value' => 'jupiter'
                    ],
                ]
            ],

            [
                'type' => 'text.multiple',
                'name' => 'phones',
                'additional_class' => 'mt-1 form-control form-control-lg',
                'title' => 'Ваш номер телефона',
                'placeholder' => "Введите ваш номер"
            ],

            [
                'type' => 'checkbox.multiple',
                'name' => 'cities',
                'additional_class' => 'form-check-input border border-success',
                'title' => 'В каких городах вы хотели бы побывать?',
                'list' => [
                    [
                        'title' => 'Лондон',
                        'value' => 'london',
                        'checked' => true
                    ],

                    [
                        'title' => 'Мюнхен',
                        'value' => 'munich'
                    ],

                    [
                        'title' => 'Лиссабон',
                        'value' => 'lisbon'
                    ],
                ]
            ],

            [
                'title' => 'Какие языки вы знаете?',
                'type' => 'select.multiple',
                'name' => 'languages',
                'additional_class' => 'form-select-lg',
                'attr' => [
                    'data-id' => '17'
                ],
                'list' => [
                    [
                        'title' => 'Русский',
                        'value' => 'rus',
                        'additional_class' => 'border',
                        'attr' => [
                            'data-id' => '188'
                        ],
                        'selected' => true
                    ],
                    [
                        'title' => 'Белоруский',
                        'value' => 'bel',
                        'additional_class' => '',
                        'attr' => [
                            'data-id' => '188'
                        ],
                        'selected' => true
                    ],
                    [
                        'title' => 'English',
                        'value' => 'en'
                    ],
                ]
            ],
        ]
    ]
)
?>
<pre>
-------- 18.02.2022 --------
1) добавлен компонент number для form

-------- 17.02.2022 --------
1) добавлена компонента text.multiple
2) добавлена возможность динамически добавлять текстовые поля для text.multiple
3) добавлена компонента checkbox.multiple
4) добавлена компонента select.multiple
4) добавлена компонента select.option

-------- 16.02.2022 --------
1) добавлена компонента form
2) добавлены основные компоненты для form (text, checkbox, radio, select)

-------- 15.02.2022 --------
1) доработка классов шаблона и базового компонента
2) обработка ошибок, переменные $result и $params для использовани в шаблоне

-------- 14.02.2022 --------
1) работа над компонентами
2) вывод шаблона компонента на страницу

-------- 11.02.2022 --------
1) Начало работы над шаблоном меню
1) создание структуры для реализации компонентов

-------- 10.02.2022 --------
1) добавлен класс Dictionary

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

