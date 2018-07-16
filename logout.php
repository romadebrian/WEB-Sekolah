<?php
session_start();
session_destroy();
 
echo '<script language="javascript">alert("Anda berhasil Logout!"); document.location="index.php";</script>';
?>
