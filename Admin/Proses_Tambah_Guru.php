<?php
include "../koneksi.php";


$NIP = $_POST['nip'];
$Nama_Guru = $_POST['nama_guru'];
$Username = $_POST['Username'];
$No_Telepon = $_POST['no_tlp'];
$Jenis_Kelamin = $_POST['jenis_kelamin'];
$Agama = $_POST['agama'];

$sqlstr="INSERT INTO `guru` (`nip`, `nama_guru`, `no_hp`, `jenkel`, `agama`, `username`) VALUES ('$NIP', '$Nama_Guru', '$No_Telepon', '$Jenis_Kelamin', '$Agama', '$Username');";
(mysqlis_query($sqlstr));

header('location:guru.php');
?>