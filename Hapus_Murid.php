<?php
include "../koneksi.php";

$Kode = $_GET['kode'];
mysql_query("delete from murid where nisn='$Kode'");
header('location:murid.php');
?>