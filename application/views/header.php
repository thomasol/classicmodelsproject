<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Mini Things</title>

    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/font-awesome.min.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/prettyPhoto.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/price-range.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/animate.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/main.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/responsive.css"); ?>" />
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url("assets/images/ico/favicon.ico"); ?>" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url("assets/images/ico/apple-touch-icon-144-precomposed.png"); ?>" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url("images/ico/apple-touch-icon-114-precomposed.png"); ?>" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url("images/ico/apple-touch-icon-72-precomposed.png"); ?>" />
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url("images/ico/apple-touch-icon-57-precomposed.png"); ?>" />
</head><!--/head-->
<body>
	<header id="header">
		<div class="header-middle">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="<?php echo site_url('UserController/index'); ?>"><img src="images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									IRL
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">UK</a></li>
									<li><a href="">EU</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									EURO
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="<?php echo site_url('AccountController/account'); ?>"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="<?php echo site_url('ProductController/checkout'); ?>"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="<?php echo site_url('CheckoutController/checkout'); ?>"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="<?php echo site_url('CartController/cart'); ?>"></i> Cart</a></li>
								<li><a href="<?php echo site_url('UserController/login'); ?>"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<div class="header-bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?php echo site_url('UserController/index'); ?>">Home</a></li>
								<li class="dropdown"><a href="#" class="active">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?php echo site_url('ProductController/displayProductsWithDataTable'); ?>" class="active">Products</a></li>
										<li><a href="<?php echo site_url('ProductController/productDetailsw'); ?>">Product Details</a></li> 
										<li><a href="<?php echo site_url('ProductController/account'); ?>">Checkout</a></li> 
										<li><a href="<?php echo site_url('ProductController/account'); ?>">Cart</a></li> 
										<li><a href="<?php echo site_url('UserController/login'); ?>">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?php echo site_url('BlogController/blogList'); ?>">Blog List</a></li>
										<li><a href="<?php echo site_url('BlogController/blogSingle'); ?>">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="<?php echo site_url('UserController/contactUs'); ?>">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
				</div>
			</div>
	</header>