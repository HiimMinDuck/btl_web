<?php
    require "connect.php";

    $chkarr = $_POST['checkbox'];
    if ($chkarr == '') {
        header('location: QuanLy.php');
    }
    foreach($chkarr as $id) //vong lap for set tung phan tu trong mang
            {
                $sql = "DELETE FROM users WHERE id='$id'";
                if ($conn->query($sql) == TRUE) {
                    header("location: ./QuanLy.php");
                }else {
                    echo "Error: " .$conn->error;
                }
            }
    $conn->close();
?>