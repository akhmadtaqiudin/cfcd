<?php include_once '../../po-library/po-database.php';
	$tableset = new PoTable('setting');
	$currentSet = $tableset->findBy(id_setting, '1');
	$currentSet = $currentSet->current();
	$mode_maintenance = $currentSet->website_maintenance;
	$maintenance_tgl = $currentSet->website_maintenance_tgl;
	$tanggal = substr($maintenance_tgl,8,2);
	$bulan = substr($maintenance_tgl,5,2);
	$tahun = substr($maintenance_tgl,0,4);    
   // $sisa_waktu = $maintenance_tgl - date('Y-m-d h:i:s');
  
    
    
    
    //tentukan waktu tujuan
    $waktu_tujuan = mktime(0,0,0,$bulan,$tanggal,$tahun);
    
    //tentukan waktu saat ini
    $waktu_sekarang = mktime(date('H'), date("i"), date("s"), date("m"), date("d"), date("y"));
    
    //hitung selisih kedua waktu
   // $selisih_waktu = $waktu_tujuan–$waktu_sekarang;
    $sisa_waktu = $waktu_tujuan-$waktu_sekarang;
    
    //Untuk menghitung jumlah dalam satuan hari:
    $jumlah_hari = floor($sisa_waktu/86400);
   // if($jumlah_hari<10) $jumlah_hari = "0".$jumlah_hari;
    //Untuk menghitung jumlah dalam satuan jam:
    $sisa = $sisa_waktu % 86400;
    $jumlah_jam = floor($sisa/3600);
    if($jumlah_jam<10) $jumlah_jam = "0".$jumlah_jam;
    //Untuk menghitung jumlah dalam satuan menit:
    $sisa = $sisa % 3600;
    $jumlah_menit = floor($sisa/60);
    if($jumlah_menit<10) $jumlah_menit = "0".$jumlah_menit;
    //Untuk menghitung jumlah dalam satuan detik:
    $sisa = $sisa % 60;
    $jumlah_detik = floor($sisa/1);
    if($jumlah_detik<10) $jumlah_detik = "0".$jumlah_detik;
    // print_r($tahun); exit;
    
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
	<p>Copyright © Cool Under Construction Page. All Rights Reserved | Design by <a href="http://w3layouts.com" target="_blank">W3layouts</a></p>
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