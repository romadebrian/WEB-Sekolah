<?php
include "../koneksi.php";

$Kode = $_GET['kode'];
mysqli_query($koneksi, "delete from pesan where Isi='$Kode'");
header('location:pesan.php');
