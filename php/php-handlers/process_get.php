<?php

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $name = htmlspecialchars($_GET['age']);

        echo "<h2>Полеченные данные через GET:</h2>"
        echo "Возраст: $age <br>"
    }