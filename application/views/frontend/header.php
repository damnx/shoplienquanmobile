
<!DOCTYPE html>
<html>

<head>
    <title><?=isset($setting['title']) ? $setting['title'] : ''?></title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="title" content="<?=isset($setting['title']) ? $setting['title'] : 'GB'?>" />
    <meta name="description" content="<?=isset($setting['description']) ? cutOf(strip_tags($setting['description']), 200, false) : 'GB'?>" />


    <meta property="og:title" content="<?=isset($setting['title']) ? $setting['title'] : 'GB'?>" />
    <meta property="og:type" content="<?=isset($setting['title']) ? $setting['title'] : 'GB'?>" />
    <meta property="og:url" content="<?=isset($setting['url']) ? $setting['url'] : URL?>" />
    <meta property="og:image" content="<?=isset($setting['thumb']) ? $setting['thumb'] : 'GB'?>" />
    <meta property="og:description" content="<?=isset($setting['description']) ? cutOf(strip_tags($setting['description']), 200, false) : 'GB'?>" />

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--//for-mobile-apps -->
	<!--Custom Theme files -->
	<link href="<?=CDN?>/frontend/css/bootstrap.css?vs=<?=time()?>" rel="stylesheet" type="text/css" media="all" />
	<link href="<?=CDN?>/frontend/css/style.css?vs=<?=time()?>" rel="stylesheet" type="text/css" media="all" />
	<!-- <link rel="stylesheet" href="<?=CDN?>/frontend/css/flexslider.css?vs=<?=time()?>" type="text/css" media="screen" /> -->
	<!--//Custom Theme files -->
	
	
	<!--js-->
	<script src="<?=CDN?>/frontend/js/jquery-1.11.1.min.js?vs=<?=time()?>"></script>
	<script src="<?=CDN?>/frontend/js/modernizr.custom.js?vs=<?=time()?>"></script>
	<!--//js-->
	<!--cart-->
	<script src="<?=CDN?>/frontend/js/simpleCart.min.js?vs=<?=time()?>"></script>
	<!--cart-->
	<!--web-fonts-->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<script src="<?=CDN?>/frontend/js/notify.js?vs=<?=time()?>"></script>

	<!-- <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
	 rel='stylesheet' type='text/css'> -->
	<!-- <link href='//fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Fascinate' rel='stylesheet' type='text/css'> -->
	<!--web-fonts-->
	<!--animation-effect-->
	<link href="<?=CDN?>/frontend/css/animate.min.css?vs=<?=time()?>" rel="stylesheet">
	<script src="<?=CDN?>/frontend/js/wow.min.js?vs=<?=time()?>"></script>
	<script>
		new WOW().init();
	</script>
	<!--//animation-effect-->
	<!--start-smooth-scrolling-->
	<script type="text/javascript" src="<?=CDN?>/frontend/js/move-top.js"></script>
	<script type="text/javascript" src="<?=CDN?>/frontend/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
			});
		});
	</script>
	<!--//end-smooth-scrolling-->
</head>

<body>
	<!--header-->
	<div class="header">
		<div class="top-header navbar navbar-default">
			<!--header-one-->
			<div class="container">
				<div class="nav navbar-nav wow fadeInLeft animated" data-wow-delay=".5s">
					<?php 
						 if (isset($check_login) && count($check_login) > 0){
							 ?>
							 	<p><span class="welcome">Welcome <?=$check_login['full_name']?> đến với ShopLienQuanMobile </span><a href="/tai-khoan.html">Quản lý tài khoản</a> | <a href="/dang-xuat.html">Thoát tài khoản</a></p>
							 <?php
						 }else{
							 ?>
							 	<p>Welcome to ShopLienQuanMobile<a href="/dang-ky.html">Đang ký </a> Or <a href="/dang-nhap.html">Đang nhập </a></p>
							 <?php
						 }
					?>
					
				</div>
				<div class="nav navbar-nav navbar-right social-icons wow fadeInRight animated" data-wow-delay=".5s">

					<ul>
						<li ><a target="_blank" href="<?=isset($setting['link_facebook'])? $setting['link_facebook']:'#'?>"> </a></li>
						<li ><a target="_blank" href="#" class="pin"> </a></li>
						<li ><a target="_blank" href="#" class="in"> </a></li>
						<li ><a target="_blank" href="#" class="be"> </a></li>
						<li ><a target="_blank" href="#" class="you"> </a></li>
						<li ><a target="_blank" href="#" class="vimeo"> </a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="header-two navbar navbar-default">
			<!--header-two-->
			<div class="container">
				<div class="nav navbar-nav header-two-left">
					<ul>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><a href="mailto:info@example.com"><?=isset($setting['phome'])? $setting['phome']:''?></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com"><?=isset($setting['eamil'])? $setting['eamil']:''?></a></li>
					</ul>
				</div>
				<div class="nav navbar-nav logo wow zoomIn animated" data-wow-delay=".7s">
					<h1><a href="/">Liên Quân Mobile <b>Shoppe</b><span class="tag">Mọi thứ Liên Quân Mobile </span> </a></h1>
				</div>
				<div class="nav navbar-nav navbar-right header-two-right">
					<div class="header-right my-account">
						<a target="_blank" href="<?=isset($setting['link_facebook'])? $setting['link_facebook']:'#'?>"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Liên Hệ</a>
					</div>
					<div class="header-right cart">
						<!-- <a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
						<h4><a href="checkout.html">
								<span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>)
						</a></h4>
						<div class="cart-box">
							<p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
							<div class="clearfix"> </div>
						</div> -->
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="top-nav navbar navbar-default">
			<!--header-three-->
			<div class="container">
				<nav class="navbar" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    	<?=$this->load->widget('menu_head');?>

						<div class="clearfix"> </div>
					</div>
				</nav>
				<div id="cd-search" class="cd-search">
					<form>
						<input type="search" placeholder="Search...">
					</form>
				</div>
			</div>
		</div>
	</div>