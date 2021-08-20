<?php
    require "Connect.php";

    $id = $_REQUEST["id"];
    $sql = "DELETE FROM upload WHERE id = '$id'";
    if ($conn->query($sql) == TRUE) {
      header("location:news.php");
    }else {
        echo "error: ".$conn->close();
    }

    $conn->close();
?>