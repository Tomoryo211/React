<?php
$servername = "db";
$username = "user";
$password = "password";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("接続失敗: " . $conn->connect_error);
}

echo "MySQL接続成功！";

$conn->close();
?>
