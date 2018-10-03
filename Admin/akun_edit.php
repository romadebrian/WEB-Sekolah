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
	
<!-- Edit Akun -->
<div id="Edit_Akun">
	<div class="container">
    <h3 class="w3l-title cl"> Akun Control </h3>
    <div class="container margin-atas">
	
<?php
$Kode=$_GET['kode'];
$query=mysql_query("select * from akun where username='$Kode'");
$data=mysql_fetch_array($query);

$Password = md5($data['password']);
$Level = $data['level'];
?>
	
    <form class="form-group" action="Proses_Edit_Akun.php" method="post" onSubmit="">
    <table class="table">
	
    <tr>
    	<td> Username Lama : </td>
   		<td> <input type="text" name="Username_Lama" value="<?php echo "$Kode"; ?>" Readonly>  </td>
    </tr>
	
	<tr>
    	<td> Username Baru : </td>
   		<td> <input type="text" name="Username_Baru"> Opsional </td>
    </tr>
    
    <tr>
    	<td> Password Baru : </td>
        <td> <input type="text" name="Password" value=""> Opsional </td>
    </tr>
    
    <tr>
	
<?php

if ($Level == 1)
{
	echo "
<td>Level : </td>
<td><select name='Level'>
	<option value='1' selected> Admin </option>
	<option value='2'> Guru </option>
	<option value='3'> Murid </option>
	</select>
</td>
";
}
else if ($Level == 2)
{
	echo "
<td>Level : </td>
<td><select name='Level'>
	<option value='2' selected> Guru </option>
	<option value='1'> Admin </option>
	<option value='3'> Murid </option>
	</select>
</td>
";
}
else
{
	echo "
<td>Level : </td>
<td><select name='Level'>
	<option value='3' selected> Murid </option>
	<option value='1'> Admin </option>
	<option value='2'> Guru </option>
	</select>
</td>
";
}


?>
 	</tr>
    </table>
    
	
    <button class="btn btn-primary"> Simpan </button>
    </form>
    
    </div>
        
    <div class="clearfix margin-bawah"></div>
    </div>
</div>

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