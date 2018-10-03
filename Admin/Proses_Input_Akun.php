<?php
include "../koneksi.php";

$Username = $_POST['Username'];
$Password = md5($_POST['Password']);
$Level = $_POST['Level'];

$sql = mysql_query("SELECT * FROM `akun` WHERE username = '$Username' ") or die(mysql_error());
if(mysql_num_rows($sql) == 0)
{
	$input_akun="INSERT INTO `akun` (`username`, `password`, `level`) VALUES ('$Username', '$Password', '$Level');";
	(mysql_query($input_akun));
	header('location:akun.php');
}
else
{
	echo (" <SCRIPT LANGUAGE='JavaScript'>
				window.alert('Username sudah Terdaftar')
				window.location.href='akun.php';
			</SCRIPT>");
}
?>