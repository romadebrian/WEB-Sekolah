<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>SMK TERPADU</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="SMK TERPADU" />
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

	<!-- Edit Mata Pelajaran -->
	<div id="Edit_Akun">
		<div class="container">
			<h3 class="w3l-title cl"> Edit Mata Pelajaran </h3>
			<div class="container margin-atas">

				<?php
				include('../koneksi.php');
				$tampil = "SELECT * FROM `guru`";
				$hasil = mysqli_query($koneksi, $tampil);

				$Kode = $_GET['kode'];
				$query = mysqli_query($koneksi, "select * from mata_pelajaran where kode_mata_pelajaran='$Kode'");
				$data = mysqli_fetch_array($query);

				$tampil_guru = "SELECT * FROM `guru` where nip = '$data[nip]'";
				$hasil_guru = mysqli_query($koneksi, $tampil_guru);
				$data_guru2 = mysqli_fetch_array($hasil_guru);
				?>

				<form class="form-group" action="Proses_Edit_Mata_Pelajaran.php" method="post">
					<table class="table">
						<tr>
							<td> Kode Mata Pelajaran : </td>
							<td> <input type="text" name="Kode_lama" onkeypress="return hanyaAngka(event)" value="<?php echo "$Kode"; ?>" Readonly> </td>
						</tr>

						<tr>
							<td> Kode Mata Pelajaran Baru : </td>
							<td> <input type="text" name="Kode_mapel" onkeypress="return hanyaAngka(event)" placeholder="<?php echo "$Kode"; ?>"> </td>
						</tr>

						<tr>
							<td> Nama Mata Pelajaran : </td>
							<td> <input type="text" name="Nama_Mata_Pelajaran" value="<?php echo "$data[nama_matapelajaran]"; ?>"> </td>
						</tr>

						<tr>
							<td> Nama Guru : </td>
							<td> <select name="NIP">
									<?php
									echo "<option value='$data_guru2[nip]' selected> $data_guru2[nama_guru] </option>";
									while ($data_guru = mysqli_fetch_array($hasil)) {
										echo "<option value='$data_guru[nip]'> $data_guru[nama_guru] </option> ";
									}
									?>
								</select>
							</td>
						</tr>

						<tr>
							<td> Jurusan : </td>
							<td><?php
								if ($data['jurusan'] == "AP") {
									echo "
									<select name='Jurusan'>
										<option value='AP' selected> AP </option>
										<option value='RPL'> RPL </option>
										<option value='TKR'> TKR </option>
									</select>
									";
								} else if ($data['jurusan'] == "RPL") {
									echo "
									<select name='Jurusan'>
										<option value='RPL' selected> RPL </option>
										<option value='AP'> AP </option>
										<option value='TKR'> TKR </option>
									</select>
									";
								} else {
									echo "
									<select name='Jurusan'>
										<option value='TKR' selected> TKR </option>
										<option value='RPL'> RPL </option>
										<option value='AP'> AP </option>
									</select>
									";
								}
								?>
							</td>
						</tr>

						<tr>
							<td>Kelas : </td>
							<td><?php
								if ($data['kelas'] == 10) {
									echo "
									<select name='Kelas'>
										<option value='10' selected> 10 </option>
										<option value='11'> 11 </option>
										<option value='12'> 12 </option>
									</select>
									";
								}

								if ($data['kelas'] == 11) {
									echo "
									<select name='Kelas'>
										<option value='11' selected> 11 </option>
										<option value='10'> 10 </option>
										<option value='12'> 12 </option>
									</select>
									";
								}

								if ($data['kelas'] == 12) {
									echo "
									<select name='Kelas'>
										<option value='12' selected> 12 </option>
										<option value='11'> 11 </option>
										<option value='10'> 10 </option>
									</select>
									";
								}
								?>
							</td>
					</table>

					<button class="btn btn-primary"> Simpan </button>
					<a href="mata_pelajaran.php" class="btn btn-primary"> Batal </a>
				</form>

			</div>

			<div class="clearfix margin-bawah"></div>
		</div>
	</div>

	<script type="text/javascript">
		function hanyaAngka(evt) {
			var charCode = (evt.which) ? evt.which : event.keyCode
			if (charCode > 31 && (charCode < 48 || charCode > 57))

				return false;
			return true;
		}
	</script>

	<!-- //Edit Mata Pelajaran -->

	<!-- footer -->

	<div class="w3layouts_copy_right">
		<div class="container">
			<p>© 2018 SMK TERPADU </p>
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
			$("#datepicker").datepicker();
		});
	</script>
	<!-- //Calendar -->

	<!-- //js-scripts -->
</body>

</html>