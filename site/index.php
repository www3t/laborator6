 <?php
 $host = 'database';
 $user = 'root';
 $pass = 'root';
 $db = 'testdb';
 $conn = new mysqli($host, $user, $pass, $db);
 if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
 } else {
    echo "<h1>Добро пожаловать в Docker Compose!</h1>";
    echo "<p>Соединение с базой данных успешно установлено.</p>";
 }
 ?>
