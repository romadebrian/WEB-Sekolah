
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
	
<!-- Admin Pannel -->
<div id="Admin_Pannel">
	<div class="container">
	  <h3 class="w3l-title"> Admin Pannel </h3>
	  <div class="team-w3l-grid margin-atas">
    	<div class="col-md-4 col-xs-4 t1">
			<div class="about_img">
			<a href="akun.php"> <img src="image/a.png" class="about_img" width="250" height="250" > 
            <p class="detail_img"> Akun <p></a>
            </div>
		</div>

 	  	<div class="col-md-4 col-xs-4 t2">
			<div class="about_img">
			<a href="murid.php"> <img src="image/m.png" class="about_img" width="250" height="250" >
            <p class="detail_img"> Murid <p> </a>
            </div>
		</div>
    
    	<div class="col-md-4 col-xs-4 t3">
			<div class="about_img">
			<a href="guru.php"> <img src="image/g.png" class="about_img" width="250" height="250" > 
            <p class="detail_img"> Guru <p></a>
            </div>
		</div>
        <div class="clearfix"></div>
    </div>
    
    <br>
    
    <div class="team-w3l-grid grid-2-team">
    	<div class="col-md-4 col-xs-4 t1">
			<div class="about_img">
			<a href="Nilai.php"> <img src="image/n.png" class="about_img" width="250" height="250" > 
            <p class="detail_img"> Nilai <p></a>
            </div>
		</div>

 	  	<div class="col-md-4 col-xs-4 t2">
			<div class="about_img">
			<a href="pesan.php"> <img src="image/e.png" class="about_img" width="250" height="250" > 
            <p class="detail_img"> Email <p></a>
            </div>
		</div>
		
		<div class="col-md-4 col-xs-4 t2">
			<div class="about_img">
			<a href="mata_pelajaran.php"> <img src="image/mpl.png" class="about_img" width="250" height="250" > 
            <p class="detail_img"> Mata Pelajaran <p></a>
            </div>
		</div>
    </div>
    
    <div class="clearfix margin-bawah"></div>
    
    </div>
</div>

<!-- //Admin Pannel -->

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