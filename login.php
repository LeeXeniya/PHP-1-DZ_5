<?php

session_start();

include __DIR__ . '/funcs.php';

If (getCurrentUser() !== NULL) {
    header('Location: http://localhost:8008/index.php');
    exit;
} else {
?>
<form method="post" action="/login.php">
    Логин: <input type="text" name="login">
    Пароль: <input type="password" name="password">
    <button type="submit">Отправить</button>
</form>
<?php
}
If ((!empty($_POST['login'])) && (!empty($_POST['password'])) && (checkPassword($_POST['login'], $_POST['password']))) {
    $_SESSION['login'] = $_POST['login'];
}