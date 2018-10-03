<?php
include "../koneksi.php";

$Kode = $_GET['kode'];
mysql_query("delete from akun where username='$Kode'");
header('location:akun.php');
?>