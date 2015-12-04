<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | Mini Things</title>
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

<?php
	$this->load->view('header');
?>

	<section id="form">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form">
						<h2>Login to your account</h2>
						<?php
						    echo validation_errors();
							$attributesLogin = array("name" => "loginForm");
							echo form_open("UserController/login", $attributesLogin);
						?>
						
							<input type="text" name="username" placeholder="Username" value="<?php echo set_value('username'); ?>" />
							<input type="password" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>"/>
							<span>
								<input type="checkbox" name="rememberMe" value="rememberMe" class="checkbox"> 
								Remember Me
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						<?php echo form_close(); ?>
					</div>
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>

				<div class="col-sm-4">
				<div class="signup-form">
					<h2>New User Signup!</h2>

					<?php 
					    echo validation_errors();
						$attributesSignUp = array("name" => "registrationform");
						echo form_open("UserController/registration", $attributesSignUp);
					?>
				<div>
                    <input name="fName" placeholder="Your First Name" type="text" value="<?php echo set_value('fName'); ?>" />
					<span class="text-danger"><?php echo form_error('fName'); ?></span>
                </div>
                <div class="form-group">
                    <input class="form-control" name="lName" placeholder="Last Name" type="text" value="<?php echo set_value('lName'); ?>" />
                    <span class="text-danger"><?php echo form_error('lName'); ?></span>
                </div>

                <div class="form-group">
                    <input class="form-control" name="customerName" placeholder="Customer Name" type="text" value="<?php echo set_value('customerName'); ?>" />
                    <span class="text-danger"><?php echo form_error('customerName'); ?></span>
                </div>
                
                <div class="form-group">
                    <input class="form-control" name="email" placeholder="Email" type="text" value="<?php echo set_value('email'); ?>" />
                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                </div>

                <div class="form-group">
                    <input class="form-control" name="phone" placeholder="Phone Number" type="text" />
                    <span class="text-danger"><?php echo form_error('phone'); ?></span>
                </div>

                <div class="form-group">
                    <input class="form-control" name="address1" placeholder="Address Line 1" type="text" />
                    <span class="text-danger"><?php echo form_error('address1'); ?></span>
                </div>

                <div class="form-group">
                    <input class="form-control" name="address2" placeholder="Address Line 2" type="text" />
                    <span class="text-danger"><?php echo form_error('address2'); ?></span>
                </div>

                <div class="form-group">
                    <input class="form-control" name="city" placeholder="City" type="text" />
                    <span class="text-danger"><?php echo form_error('city'); ?></span>
                </div>

                <div class="form-group">
                    <input class="form-control" name="state" placeholder="State" type="text" />
                    <span class="text-danger"><?php echo form_error('state'); ?></span>
                </div>

                <div class="form-group">
                    <input class="form-control" name="postalCode" placeholder="Postal Code" type="text" />
                    <span class="text-danger"><?php echo form_error('postalCode'); ?></span>
                </div>

                <div class="form-group">
                    <input class="form-control" name="country" placeholder="Country" type="text" />
                    <span class="text-danger"><?php echo form_error('country'); ?></span>
                </div>

                <div class="form-group">
                    <input class="form-control" name="password" placeholder="Password" type="password" />
                    <span class="text-danger"><?php echo form_error('password'); ?></span>
                </div>

                <div class="form-group">
                    <input class="form-control" name="cPassword" placeholder="Confirm Password" type="password" />
                    <span class="text-danger"><?php echo form_error('cPassword'); ?></span>
                </div>

                <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-default">Signup</button>
                </div>
                <?php echo form_close(); ?>
                <?php echo $this->session->flashdata('msg'); ?>
            	</div>
				</div>
			</div>
		</div>
	</section>

	<?php
		$this->load->view('footer');
	?>
	
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>