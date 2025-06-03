<?php
include "../koneksi.php";

$Username = $_POST['Username'];
$Password = md5($_POST['Password']);
$Level = $_POST['Level'];

$sql = mysqli_query($koneksi, "SELECT * FROM `akun` WHERE username = '$Username' ") or die(mysqli_error($koneksi));
if (mysqli_num_rows($sql) == 0) {
	$input_akun = "INSERT INTO `akun` (`username`, `password`, `level`) VALUES ('$Username', '$Password', '$Level');";
	(mysqli_query($koneksi, $input_akun));
	header('location:akun.php');
} else {
	echo (" <SCRIPT LANGUAGE='JavaScript'>
				window.alert('Username sudah Terdaftar')
				window.location.href='akun.php';
			</SCRIPT>");
}
