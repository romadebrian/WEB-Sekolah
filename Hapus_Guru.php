<?php
include "../koneksi.php";

$Kode = $_GET['kode'];
mysql_query("delete from guru where nip='$Kode'");
header('location:guru.php');
?>