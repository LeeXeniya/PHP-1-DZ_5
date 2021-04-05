<?php
session_start();

include __DIR__ . '/funcs.php';
?>
<!doctype html>
<html lang="ru">
<h1>Главная страница</h1>

<?php
//echo password_hash('123', PASSWORD_DEFAULT);

//var_dump(getUsersList()) ;
//var_dump(existsUser('Petr1'));
//var_dump(сheckPassword('Petr', '12345'));
var_dump(сheckPassword('Vasya', '123'));
//echo password_hash('12345', PASSWORD_DEFAULT);



