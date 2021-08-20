<?php
    require "connect.php";

    $name = $_POST["name"];
    $phone = $_POST["phonenumber"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $passAgain = $_POST["passagain"];
    if ($pass != $passAgain) {
        header('location: DangKy.php');
        return false;
    }
    //cau lenh sql insert
    $sql = "INSERT INTO users (name, phoneNumber, email, password) 
    VALUES ('$name', '$phone', '$email', '$pass')";
    if ($conn->query($sql) == TRUE) {
        header('location: DangNhap.php');
    }else{
        echo"Error: " .$conn->error;
    }


    $conn->close();
?>