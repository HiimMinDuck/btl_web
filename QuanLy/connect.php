<?php
    $servername = "localhost";
    $username = "223524";
    $password = "Nmd0212."; //ko co pass
    $db = "223524";// database
    // create connection
    $conn = new mysqli ($servername, $username, $password, $db);
    mysqli_set_charset($conn, 'UTF8');
    // check connection
    if ($conn -> connect_error) {
        die ("connection failed: " . $conn->connect_error);
    }
?>