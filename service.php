<?php

function get_fields($data){
    // Получает данные из заполненных полей и формирует массив полей
    foreach ($_POST as $k => $v) {
        if(array_key_exists($k, $data)){
            $data[$k]['value'] = trim($v);
        }
    }
    return $data;
}

function validate_empty($data){
    // Проверяет на то, что все поля заполнены
    $errors = '';
    foreach ($data as $k => $v) {
        if (empty($data[$k]['value'])) {
            $errors .= "<small class='text-danger'>Вы не заполнили поле {$data[$k]['field_name']} </small><br>";
        }
    }
    return $errors;
}

function log_to_file($result){
    // Записывает результат валидации в лог файл
    date_default_timezone_set('Europe/Moscow');
    $date_log = date('Y-m-d');
    $time_log = date('H:i:s');
    $log = $time_log . "\n";
    if ($result['error']['value']) {
        $log .= 'ПРОИЗОШЛА ОШИБКА' . "\n" . strip_tags($result['error']['value']) . "\n";
    }else {
        $log .= 'ПОЛЬЗОВАТЕЛЬ УСПЕШНО ЗАРЕГИСТРИРОВАН' . "\n";
        foreach ($result as $k => $v) {
            if ($k != 'error' && $k != 'password1') {
                $log .= $v['name'] . ': ' . $v['value'] . "\n";
            }
        }
    }
    file_put_contents(__DIR__ . "/{$date_log}.txt", $log . PHP_EOL, FILE_APPEND);
}
