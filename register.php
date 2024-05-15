<?php
require 'koneksi.php';
$email = $_POST["email"];
$password = $_POST["password"];

$check_query = "SELECT * FROM tbl_users WHERE email='$email'";
$result = mysqli_query($conn, $check_query);

if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Akun ini sudah terdaftar!, Silahkan login'); window.location='login.html';</script>";
} else {
    $query_sql = "INSERT INTO tbl_users (email, password)
    VALUES ('$email','$password')";

    if (mysqli_query($conn, $query_sql)) {
        header("Location: login.html");
    } else {
        echo "Pendaftaran Gagal :" . mysqli_error($conn);
    }
}
?>