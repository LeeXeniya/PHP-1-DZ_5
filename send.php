<?php
session_start();
include __DIR__ . '/funcs.php';
 //$str = $_POST['text'];


$login = $_POST['login'];
$password = $_POST['password'];

$_SESSION[''][] = '';



if (isset($users[$_POST['login']])) {
    echo 'Пользователь найден';
    if (password_verify($_POST['password'], $users[$_POST['login']])) {
        echo 'Добро пожаловать';
    } else {
        echo 'Пароль не подошел';
    }
} else {
    echo 'Пользователь не найден';
}
