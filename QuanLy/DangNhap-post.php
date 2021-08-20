<?php
    require "connect.php";

    $email = $_POST["email"];
    $pass = $_POST["password"];

    //select ktra email, pass
    $sql = "SELECT users.email, users.password FROM users WHERE email = '$email' AND password = '$pass'";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {
        header ('location: DangNhap.php');
    }
    else {
        session_start();

        $_SESSION['email'] = $email;
        header ('location: index.php');
    }
    $conn->close();
?>