<?php
include "../koneksi.php";

$NISN_Lama = $_POST['NISN_Lama'];
$NISN = $_POST['NISN'];
$Nama = $_POST['Nama'];
$Username = $_POST['Username'];
$Kota = $_POST['Kota'];
$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
$Agama = $_POST['Agama'];
$Jurusan = $_POST['Jurusan'];
$Kelas = $_POST['Kelas'];

if ($_POST['NISN'] == "")
{
	$sqlstr="UPDATE `murid` SET `nama_murid` = '$Nama', `username` = '$Username',`kota` = '$Kota', `jenkel` = '$Jenis_Kelamin', `agama` = '$Agama', `jurusan` = '$Jurusan', `kelas` = '$Kelas' WHERE `murid`.`nisn` = '$NISN_Lama';";
}
else
{
	$sqlstr="UPDATE `murid` SET `nisn` = '$NISN',`nama_murid` = '$Nama', `username` = '$Username',`kota` = '$Kota', `jenkel` = '$Jenis_Kelamin', `agama` = '$Agama', `jurusan` = '$Jurusan', `kelas` = '$Kelas' WHERE `murid`.`nisn` = '$NISN_Lama';";
}

(mysql_query($sqlstr));

header('location:murid.php');
?>