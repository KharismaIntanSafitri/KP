<?php
include "../connect/koneksi.php";
session_start();
$uname = $_SESSION["username"];
session_destroy();
header('location: ../index.php');
?>