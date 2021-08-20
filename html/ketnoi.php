<?php
$servername= "localhost";
$username="223524";
$password="Nmd0212.";
$db = "223524";
$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
  die("connection failed: " . $conn->connect_error);
}
echo "<br>";
 ?>
