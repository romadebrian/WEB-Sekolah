<?php
include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>SMK TERPADU</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Scholarly web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="../css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="../css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="../css/swipebox.css">
<link rel="stylesheet" href="../css/jquery-ui.css" />
<link rel="stylesheet" href="../css/roma.css"/>
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
</head>
<body>

<?php include ('../napigasi2.php'); ?>

<div class="clearfix"> </div> 
<!-- //Modal2 -->	
<!-- Laporan Nilai -->

<div id="Laporan Nilai">
	<div class="container roma-batasan">
	
<?php
//$NISN=$_POST['NISN'];
$query=mysql_query("select * from murid where username='$_SESSION[username]'");
$data=mysql_fetch_array($query);
?>
	
	<table class="table-condensed">
	<tr>
		<td> Nama </td>
		<td> : </td>
		<td> <input type="text" name="no_tlp" id="No_HP" value="<?php echo $data['nama_murid']; ?>" Readonly> </td>
	</tr>
	<tr>
		<td> Kelas </td>
		<td> : </td>
		<td> <input type="text" name="no_tlp" id="No_HP" value="<?php echo $data['kelas']; ?>" Readonly> </td>
	<tr>
		<td> Jurusan </td>
		<td> : </td>
		<td> <input type="text" name="no_tlp" id="No_HP" value="<?php echo $data['jurusan']; ?>" Readonly> </td>
	</tr>
	</table>
	
	<br>
    
	<table border=1 class="table table-bordered">
		<tr>
			<td width="150" align="center">Mata Pelajaran</td>
			<td width="80" align="center">Nilai UTS</td>
			<td width="80" align="center">Nilai UAS</td>
		<tr>
		
<?php
$Nama_Murid = $data['nama_murid'];
$Kelas 		= $data['kelas'];
$Jurusan	= $data['jurusan'];	
$tampil="SELECT * FROM nilai WHERE nama_murid = '$Nama_Murid' AND kelas = '$Kelas' AND jurusan = '$Jurusan'";
$hasil=mysql_query($tampil);

while ($data=mysql_fetch_array($hasil))
{
	echo "	<tr>
				<td> $data[nama_matapelajaran]</td>
				<td align='center'>$data[nilai_UTS]</td>
				<td align='center'>$data[nilai_UAS]</td>
			<tr>
		 ";
}
		
?>

	</table>
	
	</div>
</div>

<!-- //Laporan Nilai -->

<!-- footer -->

<div class="w3layouts_copy_right">
	<div class="container">
		<p>© 2018 SMK TERPADU | Design by <a href="http://w3layouts.com">W3layouts.</a></p>
		okky
	</div>
</div>
<!-- //footer -->

<!-- js-scripts -->			
<!-- js-files -->
<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js-files -->
<!-- Baneer-js -->



<!-- smooth scrolling -->
<script src="../js/SmoothScroll.min.js"></script>
<!-- //smooth scrolling -->
<!-- stats -->
<script type="text/javascript" src="../js/numscroller-1.0.js"></script>
<!-- //stats -->
<!-- moving-top scrolling -->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //moving-top scrolling -->
<!-- gallery popup -->
<script src="../js/jquery.swipebox.min.js"></script> 
<script type="text/javascript">
jQuery(function($) {
	$(".swipebox").swipebox();
});
</script>
<!-- //gallery popup -->
<!--/script-->
	<script src="../js/simplePlayer.js"></script>
			<script>
				$("document").ready(function() {
					$("#video").simplePlayer();
				});
			</script>
<!-- //Baneer-js -->
<!-- Calendar -->
<script src="../js/jquery-ui.js"></script>
	<script>
	  $(function() {
		$( "#datepicker" ).datepicker();
	 });
	</script>
<!-- //Calendar -->	

<!-- //js-scripts -->
</body>
</html>