<?php include "../koneksi.php"; ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>SMK TERPADU</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="SMK TERPADU" />
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
	
<!-- Edit Guru -->
<div id="Edit_Akun">
	<div class="container">
    <h3 class="w3l-title cl"> Guru </h3>
    <div class="container margin-atas">

<?php
$Kode=$_GET['kode'];
$query=mysqli_query($koneksi, "select * from guru where nip='$Kode'");
$data=mysqli_fetch_array($query);

$tampil_akun="SELECT * FROM `akun` ORDER BY `username` ASC ";
$hasil_akun=mysqli_query($koneksi, $tampil_akun);
?>
	
    <form class="form-group" action="Proses_Edit_Guru.php" method="post" >
    <table class="table">
	<tr>
		<td> NIP : </td>
		<td> <input type="text" name="nip_lama" maxlength="10" size="8" <?php echo "value='$data[nip]'"; ?> Readonly> </td>
	</tr>
	
	<tr>
		<td> NIP Baru : </td>
		<td> <input type="text" name="nip" maxlength="10" size="8" onkeypress="return hanyaAngka(event)" <?php echo "placeholder='$data[nip]'"; ?> > </td>
	</tr>
	
    <tr>
    	<td> Nama Guru : </td>
   		<td> <input type="text" name="nama_guru" <?php echo "value='$data[nama_guru]'"; ?>> </td>
    </tr>
	
	<tr>
    	<td> Username : </td>
   		<td> <select name="Username">
				<?php
				echo "<option value='$data[username]' selected> $data[username] </option>";
				while ($data_akun=mysqli_fetch_array($hasil_akun))
				{
					echo "<option value='$data_akun[username]'> $data_akun[username] </option> ";
				}
				?>
			 </select>
		</td>
    </tr>
    
    <tr>
    	<td> No Telepon : </td>
        <td> <input type="text" name="no_tlp" id="No_HP" <?php echo "value='$data[no_hp]'"; ?> onkeypress="return hanyaAngka(event)" /> </td>
    </tr>
	
	<tr>
    	<td> Jenis Kelamin : </td>
   		<td><?php
			if ($data['jenkel'] == "Laki-Laki")
			{
			echo "
			<select name='Jenis_Kelamin'>
    			<option value='Laki-Laki' selected> Laki-Laki </option>
				<option value='Perempuan'> Perempuan </option>
			</select>
			";
			}
			
			else
			{
			echo "
			<select name='Jenis_Kelamin'>
    			<option value='Perempuan' selected> Perempuan </option>
				<option value='Laki-Laki'> Laki-Laki </option>
			</select>
			";
			}
			?>
		</td>
    </tr>
	
	<tr>
    	<td> Agama : </td>
   		<td><?php
			if ($data['agama'] == "Islam")
			{
			echo "
			<select name='Agama'>
    			<option value='Islam' selected> Islam </option>
				<option value='Kristen'> Kristen </option>
				<option value='Katolik'> Katolik </option>
				<option value='Hindu' > Hindu </option>
				<option value='Buddha'> Buddha </option>
				<option value='Kong Hu Cu'> Kong Hu Cu </option>
			</select>
			";
			}
			
			else if ($data['agama'] == "Kristen")
			{
			echo "
			<select name='Agama'>
    			<option value='Kristen' selected> Kristen </option>
				<option value='Islam'> Islam </option>
				<option value='Katolik'> Katolik </option>
				<option value='Hindu' > Hindu </option>
				<option value='Buddha'> Buddha </option>
				<option value='Kong Hu Cu'> Kong Hu Cu </option>
			</select>
			";
			}
			
			else if ($data['agama'] == "Katolik")
			{
			echo "
			<select name='Agama'>
    			<option value='Katolik' selected> Katolik </option>
				<option value='Kristen'> Kristen </option>
				<option value='Islam'> Islam </option>
				<option value='Hindu' > Hindu </option>
				<option value='Buddha'> Buddha </option>
				<option value='Kong Hu Cu'> Kong Hu Cu </option>
			</select>
			";
			}
			
			else if ($data['agama'] == "Hindu")
			{
			echo "
			<select name='Agama'>
    			<option value='Hindu' selected> Hindu </option>
				<option value='Kristen'> Kristen </option>
				<option value='Katolik'> Katolik </option>
				<option value='Islam' > Islam </option>
				<option value='Buddha'> Buddha </option>
				<option value='Kong Hu Cu'> Kong Hu Cu </option>
			</select>
			";
			}
			
			else if ($data['agama'] == "Buddha")
			{
			echo "
			<select name='Agama'>
    			<option value='Buddha' selected> Buddha </option>
				<option value='Kristen'> Kristen </option>
				<option value='Katolik'> Katolik </option>
				<option value='Hindu' > Hindu </option>
				<option value='Islam'> Islam </option>
				<option value='Kong Hu Cu'> Kong Hu Cu </option>
			</select>
			";
			}
			
			else
			{
			echo "
			<select name='Agama'>
    			<option value='Kong_Hu_Cu' selected> Kong Hu Cu </option>
				<option value='Kristen'> Kristen </option>
				<option value='Katolik'> Katolik </option>
				<option value='Hindu' > Hindu </option>
				<option value='Buddha'> Buddha </option>
				<option value='Islam'> Islam </option>
			</select>
			";
			}
			?>
		</td>
    </tr>
    </table>
    
	
    
	<button class='btn btn-primary' id='Simpan'> Simpan  </button>
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
<!-- //Admin Pannel -->

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