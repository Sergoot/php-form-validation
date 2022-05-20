<?php
require_once "service.php";
require_once "data.php";


// Очищенные поля
$data_fields = get_fields($fields);


// Получаем значения заполненных полей.
$fields_values= [];
foreach ($data_fields as $k => $v){
    $fields_values[$k] = $v['value'];
}

$name = $fields_values['name'];
$surname = $fields_values['surname'];
$email = $fields_values['email'];
$password = $fields_values['password'];
$password1 = $fields_values['password1'];

// Массив с ответом
$result =[
    'error' => [
        'name' => 'Ошибки',
        'value' => '',
    ],
    'name' => [
        'name' => 'Фамилия',
        'value' => '',
    ],
    'surname' => [
        'name' => 'Фамилия',
        'value' => '',
    ],
    'email' => [
        'name' => 'Электронная почта',
        'value' => '',
    ],
    'password' => [
        'name' => 'Пароль',
        'value' => '',
    ],
    'password1' => [
        'name' => 'Повторите пароль',
    ],
];

// Проверяем, что поля не пустые
$result['error']['value'].=validate_empty($data_fields);

// Валидация почты и проверка на существующую почту
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    if (in_array($email, array_column($users,'email'))){
                $result['error']['value'] .= '<small class="text-danger">Пользователь с такой почтой уже существует</small><br/>';
        } else {
            $result['email']['value'] = $email;
            $result['name']['value']=$name;
            $result['surname']['value']=$surname;
        }
    }

//Валидация пароля
if ($password == $password1 && preg_match($password_pattern,$password)){
    $result['password']['value'] = $password;
}elseif ($password != $password1) {
        $result['error']['value'] .= '<small class="text-danger">Пароли не совпадают</small><br/>';
    }else{
    $result['error']['value'] .= '<small class="text-danger">Пароль должен содержать не менее 6 символов, одну заглавную букву, одну цифру</small><br/>';
}

// Записываем результат проверки в файл
    log_to_file($result);

    echo json_encode($result);
