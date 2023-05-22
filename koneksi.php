<?php
$host 				= "localhost";
$username_database 	= "root";
$password_database 	= "";
$nama_database		= "school";

$koneksi = mysqli_connect($host, $username_database, $password_database, $nama_database);

// mengecek koneksi
if (!$koneksi) 
{
	die("Koneksi gagal: " . mysqli_connect_error());
}


/**
 * Untuk penggunaan PHP versi 7
 */
/*
define('_HOST_NAME','localhost');
define('_DATABASE_USER_NAME','root');
define('_DATABASE_PASSWORD','');
define('_DATABASE_NAME','school');
 
$MySQLiconn = new MySQLi(_HOST_NAME,_DATABASE_USER_NAME,_DATABASE_PASSWORD,_DATABASE_NAME);
  
if($MySQLiconn->connect_errno) 
{
	die("ERROR : -> ".$MySQLiconn->connect_error);
}
*/
?>