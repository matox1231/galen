<?php
      // Подключение к базе данных
      require_once('db_connect.php');
      // Проверка соединения
      if ($conn->connect_error) {
          die("Ошибка подключения к базе данных: " . $conn->connect_error);
      }
      $login = $_POST['login'];
      $password = $_POST['password'];
      $login = trim(htmlspecialchars($login));
      $password = trim(htmlspecialchars($password));

      // Проверка наличия пользователя в таблице auth
      $sql = "SELECT * FROM auth WHERE login='$login' AND password='$password'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0)
      {
        while($row = $result->fetch_assoc()){
            header("Location: /pages/order.html");
        }
    } else {
        echo "ОШИБКА АВТОРИЗАЦИИ";
    }
?>