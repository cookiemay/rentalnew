<?php
include "koneksi.php";
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php?login_dahulu");
}


session_start();
session_unset();
session_destroy();

header ("location:login.php?logout=berhasil");
?>