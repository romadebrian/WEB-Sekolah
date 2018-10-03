<?php
include "../koneksi.php";

$Username_Lama = $_POST['Username_Lama'];
$Password = md5($_POST['Password']);
$Level = $_POST['Level'];

if ($_POST['Username_Baru'] == "" && $_POST['Password'] == "")
{
	$sqlstr="UPDATE `akun` SET `level` = '$Level' WHERE `username` = '$Username_Lama';";
}
else if ($_POST['Username_Baru'] != "" && $_POST['Password'] == "")
{	
	$Username = $_POST['Username_Baru'];
	$sqlstr="UPDATE `akun` SET `username` = '$Username', `level` = '$Level' WHERE `username` = '$Username_Lama' ;";
}
else if ($_POST['Username_Baru'] == "" && $_POST['Password'] != "")
{
	$sqlstr="UPDATE `akun` SET `Password` = '$Password', `level` = '$Level' WHERE `username` = '$Username_Lama';";
}
else
{
	$sqlstr="UPDATE `akun` SET `username` = '$Username_Baru', `Password` = '$Password', `level` = '$Level' WHERE `username` = '$Username_Lama';";
}

(mysql_query($sqlstr));

header('location:akun.php');
?>