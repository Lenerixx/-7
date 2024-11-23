    <?php
    // Подключаем файл config.php, где определены подключения
    include "php/config.php";

    echo "Вывод из базы данных:";

    // Использование процедурного MySQLi
    $sql = "SELECT id, name, email FROM users";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_object($result)) 
        { 
            echo "ID: " . $row->id . " - Name: " . $row->name . " - Email: " . $row->email . "<br>";
        }
    } 
    else 
    {
        echo "0 results";
    }

    // Использование объектного MySQLi
    $sql = "SELECT id, name, email FROM users";
    $result = $conn_object->query($sql);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row['id'] . " - Name: " . $row['name'] . " - Email: " . $row['email'] . "<br>";
        }
    } else {
        echo "Нет результатов.";
    }

    // Использование PDO
    try {
        $sql = "SELECT id, name, email FROM users";
        $stmt = $conn_pdo->query($sql);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($rows)) {
            foreach ($rows as $row) {
                echo "ID: " . $row['id'] . " - Name: " . $row['name'] . " - Email: " . $row['email'] . "<br>";
            }
        } else {
            echo "Нет результатов.";
        }
    } catch (PDOException $e) {
        echo "Ошибка выполнения запроса: " . $e->getMessage();
    }
    ?>