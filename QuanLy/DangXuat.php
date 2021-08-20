<?php
    session_start();
    if (isset($_SESSION['email'])) {
        unset($_SESSION['email']); //xoa session userid
        header ('location: index.php');
    }

?>