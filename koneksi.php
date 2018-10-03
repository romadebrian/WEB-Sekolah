<?PHP
$host="localhost";
$username="root";
$password="";
$databasename="school";
$koneksi=mysql_connect($host, $username, $password) or die ("Data base error");
mysql_select_db($databasename, $koneksi);
?>