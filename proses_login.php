<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

// Query dengan prepared statements untuk keamanan
$sql = "SELECT * FROM user WHERE username=? AND password=md5(?)";
$stmt = $koneksi->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $_SESSION['username'] = $username; // Simpan username ke sesi
    header("location:transaksi.php?login=sukses");
} else {
    header("location:login.php?login=gagal");
}
