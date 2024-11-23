<!DOCTYPE html>
<html lang="en, ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма POST</title>
</head>
<body>

    <p>[Это форма, созданная для проверки $_POST]</p>
    <form action="php/php-handlers/process_post.php" method="post">
        <label for="name">
            Имя:
        </label>
        <input type="text" name="name" id="name" required>
        <label for="email">
            Email:
        </label>
        <input type="email" name="email" id="email" required>
        <input type="submit" value="Отправить">
    </form>

    <br>
    <p>[Это форма, созданная для проверки $_GET]</p>
    <form action="php/php-handlers/process_get.php" method="get">
        <label for="age">
            Возраст:
        </label>
        <input type="text" name="age" id="age" required>
        <input type="submit" value="Отправить">
    </form>

    <br>
    <p>[Это форма, созданная для проверки $_REQUEST]</p>
    <form action="php/php-handlers/process_request.php" method="post">
        <label for="username">
            Имя пользователя:
        </label>
        <input type="text" name="username" id="username" required>
        <label for="password">
            Пароль:
        </label>
        <input type="password" name="password" id="password" required>
        <input type="submit" value="Отправить">
    </form>

</body>
</html>