<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "peskov_is";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Ошибка подключения: ". mysqli_connect_error());
    }
?>

<?php
//это объектный нативный PHP MySQLi
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "peskov_is";

$conn = new mysqli($servername, $username, $password, $dbname) ;

if ($conn->connect_error) 
{
    die("Ошибка подключения: ". mysqli_connect_error());
}

?>

<?php
    //это объектный нативный PHP PDO
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "peskov_is";

    try {
        
        $conn = new PDO("mysql:host=$servername; $dbname",
        $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e)
{
    echo "Ошибка подключения: " . $e->getMessage();
}
?>
    <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Peskov_IS</title>
        <link rel="stylesheet" href="./main.css">
    </head>
    <body>
        
    </body>
    </html>
