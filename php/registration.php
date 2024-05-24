<?php
      // Подключение к базе данных
      require_once('db_connect.php');

      // Получение данных из формы
      $login = $_POST['login'];
      $password = $_POST['password'];
      $email = $_POST['email'];
      $login = trim(htmlspecialchars($login));
      $password = trim(htmlspecialchars($password));
      $email = trim(htmlspecialchars($email));
      // Вставка данных в таблицу auth
      $sql = "INSERT INTO auth (login, password, email) VALUES ('$login', '$password', '$email')";
      if ($conn->query($sql) === TRUE) {

        // Регистрация пользователя
        $result = mysqli_query($conn, "SELECT id FROM auth WHERE login='$login'"); 
        $myrow = mysqli_fetch_array($result);
        $conn->close();
    }
    header("Location: /pages/auth.html")
    ?>


