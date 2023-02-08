<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title><?php echo $title;?></title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/linearicons.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/themify-icons.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/nice-select.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/nouislider.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/fontawesome-5/css/all.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/1.css">
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/Icon.png" type="image/x-icon">
</head>

<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="<?php echo base_url('welcome/accueil')?>"><img src="<?php echo base_url();?>assets/img/logo.png" alt="" height="40px"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto" id="Top">
							<li class="nav-item" id="activated"><a class="nav-link" href="<?php echo base_url('welcome/accueil')?>">Accueil</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false"><i class="fas fa-user-circle"></i></a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url('welcome/deconexion')?>">Se déconnecter</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>