<?php

return [
    'folders' => [
        'name'         => 'Папки',
        'instructions' => 'Укажите, какие папки доступны для этого поля. Оставьте пустым, чтобы отобразить все папки.',
        'warning'      => 'Существующие разрешения для папок имеют приоритет над выбранными папками.',
    ],
    'min'     => [
        'label'        => 'Минимальный выбор',
        'instructions' => 'Введите минимальное количество разрешенных выборов.',
    ],
    'max'     => [
        'label'        => 'Максимальный выбор',
        'instructions' => 'Введите максимальное количество разрешенных выборов.',
    ],
    'mode'    => [
        'name'         => 'Режим ввода',
        'instructions' => 'Как пользователи должны вводить файлы?',
        'option'       => [
            'default' => 'Загрузить и / или выбрать файлы.',
            'select'  => 'Выберите только файлы.',
            'upload'  => 'Загружайте только файлы.',
        ],
    ],
];
