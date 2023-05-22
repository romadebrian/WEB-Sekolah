<?php
include('koneksi.php');

$user = $_POST['username'];
$pass = md5($_POST['password']);
$sql = mysqli_query($koneksi, "SELECT * FROM akun WHERE username='$user' AND password='$pass'") or die(mysqli_error());

if(mysqli_num_rows($sql) == 0)
{
	echo '<script language="javascript">alert("Username dan Password salah atau tidak terdaftar"); document.location="index.php";</script>';
}
else
{
	$row = mysqli_fetch_assoc($sql);
	session_start();

	if($row['level'] == 1)
	{
		$_SESSION['username']=$user;
		$_SESSION['level']='admin';
		header("Location: index.php");
	}
	else if($row['level'] == 2)
	{
		$_SESSION['username']=$user;
		$_SESSION['level']='guru';
		header("Location: index.php");
	}
	else if($row['level'] == 3)
	{
		$_SESSION['username']=$user;
		$_SESSION['level']='siswa';
		header("Location: index.php");
	}
	else
	{
		echo '<script language="javascript">alert("Username dan Password salah atau tidak terdaftar"); document.location="index.php";</script>';
	}
}
?>
