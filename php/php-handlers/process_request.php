<?php

if (isset($_SERVER["REQUEST_METHOD"])) {
    $username = htmlspecialchars($_REQUEST['username']);
    echo "Имя пользователя (из POST): $username <br>"
}

if (isset($_SERVER["REQUEST_METHOD"])) {
    $sourse = htmlspecialchars($_REQUEST['sourse']);
    echo "Источник (из GET): $sourse <br>"
}

if (isset($_SERVER["REQUEST_METHOD"])) {
    $password = htmlspecialchars($_REQUEST['password']);
    echo "Пароль (из POST): $password <br>"
}