<?php
        // Подключение к базе данных
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "galen";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Проверка соединения
        if ($conn->connect_error) {
            die("Ошибка подключения к базе данных: " . $conn->connect_error);
        }
?>