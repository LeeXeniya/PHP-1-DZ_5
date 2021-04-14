<?php

function getUsersList() {

    return include ( __DIR__ . '/users.php') ;
}


function existsUser($login) {

    $usersList = getUsersList();
    foreach($usersList as $index => $value) {
        if($login === $index) {
            return true;
        }
    }
}

function checkPassword($login, $password) {

        $usersList = getUsersList();
        foreach($usersList as $index => $value) {
            if(($login === $index) && (password_verify($password, $value))) {
                return true;
            }
        }
}
 function getCurrentUser() {
    if ( !empty($_SESSION['login']) && (true === existsUser($_SESSION['login']))) {
        return $_SESSION['login'];
    } else {
        return NULL;
    }
 }
