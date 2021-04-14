<?php

session_start();

$res = false;

if (isset($_FILES['userfile'])) {
    if(0 === $_FILES['userfile']['error']) {
        $res = move_uploaded_file(
            $_FILES['userfile']['tmp_name'],
            __DIR__ . '/images/' . $_FILES['userfile']['name']
        );
        $info = $_SESSION['login'] . '|' . date('y-m-d h:i:s') . '|'  . $_FILES['userfile']['name'] . "\n";
        file_put_contents('gb.txt', $info, FILE_APPEND);
    }
}

if($res) {
    ?>Файл успешно загружен<?php
}