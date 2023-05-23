<?php
include "../koneksi.php";

$Kode = $_GET['kode'];
mysqli_query($koneksi, "delete from akun where username='$Kode'");
header('location:akun.php');
?>