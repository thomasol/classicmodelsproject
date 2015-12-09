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

	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/DataTables-1.10.9/media/css/jquery.dataTables.css') ?>">
	<script type="text/javascript" language="javascript"
	 	src="<?= base_url('assets/DataTables-1.10.9/media/js/jquery.js') ?>">
	 </script>
	<script type="text/javascript" language="javascript" 
	 	src="<?= base_url('assets/DataTables-1.10.9/media/js/jquery.dataTables.js')
		?>">
	</script>
	
	</head>
	<?php 
		$this->load->view('header');
	?>
	<br><br>
	<?= $this->table->generate($Products) ?>
	<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
	$('#productsTable').DataTable({
		});
	});
	</script>

	<?php
		$this->load->view('footer');
	?>
	

  	<script type="text/javascript" language="javascript"src="<?= base_url('assets/js/jquery.js') ?>">
 </script>
 <script type="text/javascript" language="javascript"src="<?= base_url('assets/js/bootstrap.min.js') ?>">
 </script>
  <script type="text/javascript" language="javascript"src="<?= base_url('assets/js/price-range.js') ?>">
 </script>
 <script type="text/javascript" language="javascript"src="<?= base_url('assets/js/jquery.prettyPhoto.js') ?>">
 </script>
 <script type="text/javascript" language="javascript"src="<?= base_url('assets/js/main.js') ?>">
 </script>
</body>
</html>