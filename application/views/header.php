<body>
	<header id="header">
		<div class="header_top">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 ">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
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
								<?php
									if(!$this->session->userdata('logged_in'))
									{
										?>
										<li><a href="<?php echo site_url('UserController/login'); ?>"><i class="fa fa-lock"></i> Login</a></li>
										<?php
									}
									else
									{
										echo "Logged in as " . $username;
									}
								?>

								
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