<?php
$name = '';
$password = '';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $conn = $mysqli_connection('localhost', 'root', '27102001', 'mywebsite');
    $sql = "INSERT INTO sinh_vien(name, password) VALUE('$name', '$password')";
    mysqli_set_charset($conn, 'utf8');
    $mysqli_query($conn, $sql);
}
?>