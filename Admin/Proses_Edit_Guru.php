<?php
include "../koneksi.php";

$NIP_Lama = $_POST['nip_lama'];
$NIP = $_POST['nip'];
$Nama_Guru = $_POST['nama_guru'];
$Username = $_POST['Username'];
$No_Telepon = $_POST['no_tlp'];
$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
$Agama = $_POST['Agama'];

if ($_POST['nip'] == "")
{
	$sqlstr="UPDATE `guru` SET `nama_guru` = '$Nama_Guru', username = '$Username',`no_hp` = '$No_Telepon', `jenkel` = '$Jenis_Kelamin', `agama` = '$Agama' WHERE `guru`.`nip` = '$NIP_Lama';";
}
else
{
	$sqlstr="UPDATE `guru` SET nip = '$NIP', `nama_guru` = '$Nama_Guru', username = '$Username',`no_hp` = '$No_Telepon', `jenkel` = '$Jenis_Kelamin', `agama` = '$Agama' WHERE `guru`.`nip` = '$NIP_Lama';";
}
(mysqli_query($koneksi, $sqlstr));

header('location:guru.php');
?>