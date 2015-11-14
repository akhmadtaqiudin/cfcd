<?php if ($mod==""){
	header('location:../../404.php');
}else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<!-- Your Basic Site Informations -->
	<title><?php include "title.php"; ?></title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="index, follow" />
    <meta name="description" content="<?php include "meta-desc.php"; ?>" />
    <meta name="keywords" content="<?php include "meta-key.php"; ?>" />
    <meta http-equiv="Copyright" content="popojicms" />
    <meta name="author" content="Dwira Survivor" />
    <meta http-equiv="imagetoolbar" content="no" />
    <meta name="language" content="Indonesia" />
    <meta name="revisit-after" content="7" />
    <meta name="webcrawlers" content="all" />
    <meta name="rating" content="general" />
    <meta name="spiders" content="all" />
		<link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
		rel='stylesheet' type='text/css'>
		<link href="<?=$website_url;?>/po-content/<?=$folder;?>/css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?=$website_url;?>/po-content/<?=$folder;?>/css/common.css" />
		<link href="<?=$website_url;?>/po-content/<?=$folder;?>/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link rel="stylesheet" href="<?=$website_url;?>/po-content/<?=$folder;?>/css/chocolat.css" type="text/css">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<script type="text/javascript" src="<?=$website_url;?>/po-content/<?=$folder;?>/js/jquery.min.js"></script>
		<script src="<?=$website_url;?>/po-content/<?=$folder;?>/js/modernizr.custom.97074.js"></script>
		<script type="text/javascript" src="<?=$website_url;?>/po-content/<?=$folder;?>/js/move-top.js"></script>
		<script type="text/javascript" src="<?=$website_url;?>/po-content/<?=$folder;?>/js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>

    <!-- Social Media Meta -->
    <?php include "meta-social.php"; ?>

    <!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width" />

    <!-- Stylesheets -->


    <!-- Favicons -->
	<link rel="shortcut icon" href="<?=$website_url;?>/<?=$favicon;?>" />

	<script src="https://www.google.com/recaptcha/api.js"></script>
</head>
<body>
	<!-- banner-slider -->
	<div id="home" class="banner-slider">
		<div class="header">
										<div class="header-left">
											<a class="link link--kumya" href="#"><span data-letters="BIGWIG">BIGWIG</span></a>
										</div>
										<div class="navigation">
											<span class="menu"><img src="<?=$website_url;?>/po-content/<?=$folder;?>/images/menu.png" alt=""/></span>
													<nav class="cl-effect-11" id="cl-effect-11">
														<ul class="nav1">
															<li><a class="scroll" href="#home" data-hover="HOME">HOME</a></li>
															<li><a class="scroll" href="#about" data-hover="ABOUT">ABOUT</a></li>
															<li><a class="scroll" href="#services" data-hover="SERVICES">SERVICES</a></li>
															<li><a class="scroll" href="#portfolio" data-hover="PORTFOLIO">PORTFOLIO</a></li>
															<li><a class="scroll" href="#contact" data-hover="CONTACT">CONTACT</a></li>

														</ul>
													</nav>
														<!-- script for menu -->
															<script>
																$( "span.menu" ).click(function() {
																$( "ul.nav1" ).slideToggle( 300, function() {
																 // Animation complete.
																});
																});
															</script>
														<!-- //script for menu -->

										</div>
										<div class="clearfix"></div>
								</div>
			<!-- responsiveslides -->
								<script src="<?=$website_url;?>/po-content/<?=$folder;?>/js/responsiveslides.min.js"></script>
									<script>
										// You can also use "$(window).load(function() {"
										$(function () {
										 // Slideshow 4
										$("#slider3").responsiveSlides({
											auto: true,
											pager: true,
											nav: false,
											speed: 500,
											namespace: "callbacks",
											before: function () {
										$('.events').append("<li>before event fired.</li>");
										},
										after: function () {
											$('.events').append("<li>after event fired.</li>");
											}
											});
											});
									</script>
			<!-- responsiveslides -->
			<div id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">

					<li>
						<div class="banner">
								<div class="container">
									<div class="banner-info">
										<h3>FIND EVERYTHING YOU WANTED
										TO KNOW ABOUT BUSINESS</h3>
										<p>Sed ut perspiciatis unde omnis iste natus error
										sit voluptatem accusantium doloremque laudantium,
										totam rem aperiam, eaque ipsa quae ab illo inventore
										veritatis et quasi architecto beatae vitae dicta
										sunt explicabo. </p>
										<a class="scroll" href="#about"><img src="<?=$website_url;?>/po-content/<?=$folder;?>/images/arrow.png" alt=""/></a>
									</div>
								</div>
						</div>
					</li>
					<li>
						<div class="banner">

								<div class="container">
									<div class="banner-info">
										<h3>SMART BUSINESS SOLUTIONS
										THAT YOU NEED</h3>
										<p>Sed ut perspiciatis unde omnis iste natus error
										sit voluptatem accusantium doloremque laudantium,
										totam rem aperiam, eaque ipsa quae ab illo inventore
										veritatis et quasi architecto beatae vitae dicta
										sunt explicabo. </p>
										<a class="scroll" href="#about"><img src="<?=$website_url;?>/po-content/<?=$folder;?>/images/arrow.png" alt=""/></a>
									</div>
								</div>
						</div>
					</li>
				</ul>
			</div>
	</div>
	<div class="clearfix"></div>
	<!-- //banner-slider -->
<?php } ?>
