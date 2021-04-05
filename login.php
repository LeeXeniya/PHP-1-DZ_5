<?php

session_start();

include __DIR__ . '/funcs.php';

if (getCurrentUser() === NULL) {?>

    <form method="post" action="/index.php">
        Логин: <input type="login" name="text">
        Пароль: <input type="password" name="password">
    <button type="submit">Отправить</button>
    </form>

<?php
}

If ((!empty($_POST['login'])) && (!empty($_POST['password'])) && (checkPassword($_POST['login'], $_POST['password']))) {
    $_SESSION['login'] = $_POST['login'];
    header('Location: http://localhost:8008/index.php');
    exit;
}