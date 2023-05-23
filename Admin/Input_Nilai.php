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
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="../css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
	<link rel="stylesheet" href="../css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
	<link rel="stylesheet" href="../css/swipebox.css">
	<link rel="stylesheet" href="../css/jquery-ui.css" />
	<link rel="stylesheet" href="../css/roma.css" />
	<!-- //css files -->
	<!-- online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //online-fonts -->
</head>

<body>

	<?php include('../napigasi2.php'); ?>

	<div class="clearfix"> </div>
	<!-- Input Nilai -->
	<?php
	include "../koneksi.php";

	$mapel = "SELECT * FROM `mata_pelajaran` WHERE nama_matapelajaran = '$_POST[Mata_Pelajaran]';";
	$hasil_mapel = mysqli_query($koneksi, $mapel);
	$data_mapel = mysqli_fetch_array($hasil_mapel)
	?>

	<div id="Input Nilai">
		<div class="container roma-batasan">
			<form action="process_guru.php" method="post">
				Nama Mata Pelajaran : <input type="text" name="Nama_Mata_Pelajaran" value="<?php echo $_POST['Mata_Pelajaran']; ?>" Readonly> <br><br>
				Jurusan : <input type="text" name="Jurusan" value="<?php echo $data_mapel['jurusan']; ?>" size='2' Rseadonly><br><br>
				Kelas : <input type="text" name="Kelas" value="<?php echo $data_mapel['kelas']; ?>" size='2' Readonly><br><br>

				<table class="table table-bordered">
					<tr>
						<td width="150" align="center">NISN</td>
						<td width="150" align="center">Nama Murid</td>
						<td wsidth="80" align="center">Nilai UTS</td>
						<td width="80" align="center">Nilai UAS</td>
					<tr>

						<?php
						$tampil_murid = "SELECT * FROM murid WHERE jurusan = '$data_mapel[jurusan]' and kelas = '$data_mapel[kelas]'";
						$hasil_murid = mysqli_query($koneksi, $tampil_murid);

						$N = 1;
						$T = 10000;
						$A = 20000;

						while ($data_murid = mysqli_fetch_array($hasil_murid)) {
							$tampil_nilai = "SELECT * FROM `nilai` WHERE nama_murid = '$data_murid[nama_murid]' and jurusan = '$data_murid[jurusan]' and kelas = '$data_mapel[kelas]' and nama_matapelajaran = '$_POST[Mata_Pelajaran]'";
							$hasil_nilai = mysqli_query($koneksi, $tampil_nilai);
							$data_nilai = mysqli_fetch_array($hasil_nilai);

							$nilai_UTS = !isset($data_nilai['nilai_UTS']) ? "" : $data_nilai['nilai_UTS'];
							$nilai_UAS = !isset($data_nilai['nilai_UAS']) ? "" : $data_nilai['nilai_UAS'];

							echo "
							<td> $data_murid[nisn] </td>
							<td class='text-left'> <input type='text' name='$N' value='$data_murid[nama_murid]' Readonly> </td>			
							<td align='center'> <input type='text' name='$T' value='$nilai_UTS' maxlength='3' size='1'/>  </td>
							<td align='center'> <input type='text' name='$A' value='$nilai_UAS' maxlength='3' size='1'/> </td>
							</TR>
		 					";

							$N++;
							$T++;
							$A++;
						}

						?>

				</table>
				<button class="btn btn-primary"> Simpan </button>
			</form>
		</div>
	</div>

	<!-- //Laporan Nilai -->


	<!-- footer -->

	<div class="w3layouts_copy_right">
		<div class="container">
			<p>© 2018 SMK TERPADU | Design by <a href="http://w3layouts.com">W3layouts.</a></p>
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
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
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
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;">
		</span></a>
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
			$("#datepicker").datepicker();
		});
	</script>
	<!-- //Calendar -->

	<!-- //js-scripts -->
</body>

</html>