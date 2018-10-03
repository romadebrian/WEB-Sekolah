<?php
include "../koneksi.php";

$Kode = $_GET['kode'];
mysql_query("delete from pesan where Isi='$Kode'");
header('location:pesan.php');
?>