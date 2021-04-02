<?php

session_start();

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

function сheckPassword($login, $password) {

        $usersList = getUsersList();
        foreach($usersList as $index => $value) {
            if(($login === $index) && (password_verify($password, $value))) {
                return true;
            }
        }
}
 function getCurrentUser() {
    
 }
