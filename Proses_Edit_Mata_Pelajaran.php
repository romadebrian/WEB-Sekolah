<?php
include "../koneksi.php";

$Kode_Lama = $_POST['Kode_lama'];
$Kode_Baru = $_POST['Kode_mapel'];
$Nama_Mata_Pelajaran = $_POST['Nama_Mata_Pelajaran'];
$NIP = $_POST['NIP'];
$Jurusan = $_POST['Jurusan'];
$Kelas = $_POST['Kelas'];

if ($_POST['Kode_mapel'] == "")
{
	$sqlstr="UPDATE `mata_pelajaran` SET `nama_matapelajaran` = '$Nama_Mata_Pelajaran', `kelas` = '$Kelas', `jurusan` = '$Jurusan', `nip` = '$NIP' WHERE `kode_mata_pelajaran` = '$Kode_Lama' ;";
}
else
{
	$sqlstr="UPDATE `mata_pelajaran` SET kode_mata_pelajaran = '$Kode_Baru', `nama_matapelajaran` = '$Nama_Mata_Pelajaran', `kelas` = '$Kelas', `jurusan` = '$Jurusan', `nip` = '$NIP' WHERE `kode_mata_pelajaran` = '$Kode_Lama' ;";
}

(mysql_query($sqlstr));

header('location:mata_pelajaran.php');
?>