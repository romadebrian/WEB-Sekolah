<?php
include "koneksi.php";

date_default_timezone_set('Asia/Jakarta');
$input="INSERT INTO `pesan` (`Tanggal`, `Subject`, `Nama`, `Email`, `No_HP`, `Isi`) VALUES ('".date('d-m-Y')."', '$_POST[subject]', '$_POST[Name]', '$_POST[Email]', '$_POST[number]', '$_POST[Message]');";
//Apabila perintah SQL untuk menginput data benar



mysql_query($input);
if ($input) 
{
echo	"<script>	alert('Pesan Terkirim'); document.location='index.php'; </script>";
//header("Location: index.php");
}
else{
echo	"<script>	alert('Pesan Gagal Di Kirim'); document.location='index.php'; </script>";
}

?>