<?php
$servername = "localhost";
$database = "db_users";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM tbl_users WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
    header("Location:index.html");
} else {
    echo "<script>alert('Email atau Password Anda Belum Terdaftar. Silahkan Register Terlebih Dahulu.'); window.location='register.html';</script>";
}
?>