<?php
session_start();
?>

<!doctype html>
<html lang="ru">
<h1>Авторизация</h1>

<?php

include __DIR__ . '/funcs.php';


//echo password_hash('123', PASSWORD_DEFAULT);

//var_dump(getUsersList()) ;
var_dump(existsUser('Petr1'));
var_dump(сheckPassword('Petr', '12345'));
var_dump(сheckPassword('Vasya', '123'));
//echo password_hash('12345', PASSWORD_DEFAULT);
?>

<form method="post" action="/send.php">
    Логин: <input type="login" name="text">
    Пароль: <input type="password" name="password">
    <button type="submit">Отправить</button>
</form>
</html>
