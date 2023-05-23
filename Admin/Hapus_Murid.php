<?php
include "../koneksi.php";

$Kode = $_GET['kode'];
mysqli_query($koneksi, "delete from murid where nisn='$Kode'");
header('location:murid.php');
?>