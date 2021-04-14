<?php
session_start();

include __DIR__ . '/funcs.php';
?>
<!doctype html>
<html lang="ru">
<h1>Главная страница</h1>

<?php


$list = scandir(__DIR__ . '/images');

echo ('Добрый день, ' . getCurrentUser()) ;

If (getCurrentUser() !== NULL) { ?>
<form action="/upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="userfile">
    <button type="submit">Загрузить</button>
</form>
<?php
}

