<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);

        echo "<h2>Полеченные данные через POST:</h2>"
        echo "Имя: $name <br>"
        echo "Email: $email <br>"
    }