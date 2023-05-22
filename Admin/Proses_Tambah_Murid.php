<?php
include "../koneksi.php";


$NISN = $_POST['NISN'];
$Username = $_POST['Username'];
$Nama = $_POST['Nama'];
$Kota = $_POST['Kota'];
$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
$Agama = $_POST['Agama'];
$Jurusan = $_POST['Jurusan'];
$Kelas = $_POST['Kelas'];

$sqlstr="INSERT INTO `murid` (`nisn`, `nama_murid`, `username`,`kota`, `jenkel`, `agama`, `jurusan`, `kelas`) VALUES ('$NISN', '$Nama', '$Username','$Kota', '$Jenis_Kelamin', '$Agama', '$Jurusan', '$Kelas');";
(mysqli_query($koneksi, $sqlstr));

header('location:murid.php');
?>