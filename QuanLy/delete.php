<?php
    require "connect.php";

    $id = $_REQUEST["id"];
    $sql = "DELETE FROM users WHERE id ='$id'";
    if ($conn->query($sql) == TRUE) {
        header('location: QuanLy.php');
    }else {
        echo "error: ".$conn->error;
    }

    $conn->close();
?>