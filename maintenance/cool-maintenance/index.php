<?php include_once '../../po-library/po-database.php';
	$tableset = new PoTable('setting');
	$currentSet = $tableset->findBy(id_setting, '1');
	$currentSet = $currentSet->current();
	$mode_maintenance = $currentSet->website_maintenance;
	$maintenance_tgl = $currentSet->website_maintenance_tgl;
	$tanggal = substr($maintenance_tgl,8,2);
	$bulan = substr($maintenance_tgl,5,2);
	$tahun = substr($maintenance_tgl,0,4);    
 ?>    
<!DOCTYPE html>
<html>
<head>
<title>Cool Under Construction Page Flat</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cool Under Construction Page Flat Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href='//fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/jquery.countdown.css" />
<!--js-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/jquery.countdown.js"></script>
<!--js-->
</head>
<body>
	<div class="header">
		<h1>This Website Is Under Construction</h1>
	</div>
	<div class="content">
		<div class="content1"> 
			<img src="images/work.png" alt="under-construction">
		</div>
		<div class="content2">
			<div class="timer_wrap">
				<div id="counter"> </div>		
			</div>
		</div>
		<div class="content3">
			<p>Subscribe To Our News Letter!</p>
			<ul class="form">
				<li>						
					<form>
						<input type="text" class="email" placeholder="Enter your email address" required="">
						<input type="submit" value="SUBSCRIBE">
						<div class="clear"> </div> 
					</form>
				</li>
			</ul>
		</div>
	</div>
<div class="footer">
	<p>Copyright © Cool Under Construction Page. All Rights Reserved | Design by <a href="http://dadanh.com" target="_blank">Kerendi Developers</a></p>
</div>
<script>
    $(document).ready(function(){
	/* ---- Countdown timer ---- */
  
	$('#counter').countdown({
		timestamp: new Date(<?=$tahun;?>, <?=$bulan;?>-1, <?=$tanggal;?>)
	});

	/* ---- Animations ---- */

	$('#links a').hover(
		function(){ $(this).animate({ left: 3 }, 'fast'); },
		function(){ $(this).animate({ left: 0 }, 'fast'); }
	);

	$('footer a').hover(
		function(){ $(this).animate({ top: 3 }, 'fast'); },
		function(){ $(this).animate({ top: 0 }, 'fast'); }
	);


});
</script>
</body>
</html>