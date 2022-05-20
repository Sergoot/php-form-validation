<?php

// Массив существующих пользователей
$users = array(['id'=>1,'email'=>'Bob@mail.ru','name'=>'Bob'],
    ['id'=>2,'email'=>'Sergey@gmail.com','name'=>'Sergey'],
    ['id'=>3,'email'=>'Ann@yandex.ru','name'=>'Ann']
);


// Исходный массив полей с именами
$fields = [
    'name' => [
        'field_name' => 'Имя',
    ],
    'surname' => [
        'field_name' => 'Фамилия',
    ],
    'email' => [
        'field_name' => 'Электронная почта',
    ],
    'password' => [
        'field_name' => 'Пароль',
    ],
    'password1' => [
        'field_name' => 'Повторите пароль',
    ],
];

// Регулярное выражение для проверки пароля
$password_pattern = '/(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{6,}/';