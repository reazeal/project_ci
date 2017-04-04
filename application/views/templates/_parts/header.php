<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Andia - Responsive Agency Template</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel="stylesheet" href="<?php echo site_url('assets/bootstrap/css/bootstrap.min.css');?>">
        <link rel="stylesheet" href="<?php echo site_url('assets/font-awesome/css/font-awesome.min.css');?>">
        <link rel="stylesheet" href="<?php echo site_url('assets/css/animate.css');?>">
        <link rel="stylesheet" href="<?php echo site_url('assets/css/magnific-popup.css');?>">
        <link rel="stylesheet" href="<?php echo site_url('assets/flexslider/flexslider.css');?>">
        <link rel="stylesheet" href="<?php echo site_url('assets/css/form-elements.css');?>">
        <link rel="stylesheet" href="<?php echo site_url('assets/css/style.css');?>">
        <link rel="stylesheet" href="<?php echo site_url('assets/css/media-queries.css');?>">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo site_url('assets/ico/apple-touch-icon-144-precomposed.png');?>">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo site_url('assets/ico/apple-touch-icon-114-precomposed.png');?>">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo site_url('assets/ico/apple-touch-icon-72-precomposed.png');?>">
        <link rel="apple-touch-icon-precomposed" href="<?php echo site_url('assets/ico/apple-touch-icon-57-precomposed.png');?>">

    </head>

	<!-- Javascript -->
        <script src="<?php echo site_url('assets/js/jquery-1.11.1.min.js');?>"></script>
        <script src="<?php echo site_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
        <script src="<?php echo site_url('assets/js/bootstrap-hover-dropdown.min.js');?>"></script>
        <script src="<?php echo site_url('assets/js/jquery.backstretch.min.js');?>"></script>
        <script src="<?php echo site_url('assets/js/wow.min.js');?>"></script>
        <script src="<?php echo site_url('assets/js/retina-1.1.0.min.js');?>"></script>
        <script src="<?php echo site_url('assets/js/jquery.magnific-popup.min.js');?>"></script>
        <script src="<?php echo site_url('assets/flexslider/jquery.flexslider-min.js');?>"></script>
        <script src="<?php echo site_url('assets/js/jflickrfeed.min.js');?>"></script>
        <script src="<?php echo site_url('assets/js/masonry.pkgd.min.js');?>"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="<?php echo site_url('assets/js/jquery.ui.map.min.js');?>"></script>
        <script src="<?php echo site_url('assets/js/scripts.js');?>"></script>
	
	
    <body>
		
		 <!-- Top menu -->
		<nav class="navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">Andia - a super cool design agency...</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								<i class="fa fa-home"></i><br>Home <span class="caret"></span>
							</a>
							<ul class="dropdown-menu dropdown-menu-left" role="menu">
								<li class=""><a href="index.html">Home</a></li>
								<li><a href="<?php echo site_url('utama');?>">Home 2</a></li>
							</ul>
						</li>
						<li class="" id="menuPortofolio" >
							<a href="<?php echo site_url('utama/portofolio');?>"><i class="fa fa-camera"></i><br>Portfolio</a>
						</li>
						<li>
							<a href="services.html"><i class="fa fa-tasks"></i><br>Services</a>
						</li>
						<li>
							<a href="about.html"><i class="fa fa-user"></i><br>About</a>
						</li>
						<li>
							<a href="contact.html"><i class="fa fa-envelope"></i><br>Contact</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								<i class="fa fa-paperclip"></i><br>Pages <span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="pricing-tables.html">Pricing tables</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
