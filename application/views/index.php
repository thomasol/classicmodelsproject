	<section id="slider">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
						<?php

						$i = 0;
							foreach ($sixRandomProducts as $value) 
							{
							  if($i == 0)
							  {
							  	echo '<div class="item active">';
							  }
							  else
							  {
							  	echo '<div class="item">';
							  }
							  $i++;
							?>

							  <div class="col-sm-6">
							  <h1><span>MINI</span>THINGS</h1>
							  <h2>Classic Models Shop</h2>
							 <?php
							 	 echo '<p>' . $value['productDescription'] . '</p>';
							 ?>
							  <button type="button" class="btn btn-default get">Get it now</button>		
							  </div>
							  <div class="col-sm-6">
							 <?php
							 $imagePath = "assets/images/products/" . $value['image'];
    									$url = base_url().$imagePath; 
    									?>
										<img class="logo" src="<?php echo $url;?>"/>
										<?php
							  ?>
							  </div>
							  </div>
							 <?php
							}
						?>
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Categories</h2>
						<div class="panel-group category-products" id="accordian">
							<?php
								foreach ($categories as $c) 
								{
									?>
										<div class="panel panel-default">
										<div class="panel-heading">
										<h4 class="panel-title">
									<?php
									echo '<a data-toggle="collapse" data-parent="#accordian" href="#' . $c['productCode'] . '">';
									echo '<span class="badge pull-right"><i class="fa fa-plus"></i></span>' . $c['productLine'];
									?>
										</a>
									    </h4>
									    </div>
								    <?php
							        echo '<div id="' . $c['productCode'] . '" class="panel-collapse collapse">';
								    echo '<div class="panel-body">';
								    echo '<ul>';
								    foreach($b as $p)
								    {
								    	if($p['productLine'] == $c['productLine'])
								    	{
											echo 	'<li><a href="#">' . $p['productName'] . '</a></li>';
								    	}
								    }
								    echo '</ul>';
								    echo '</div>';
									echo '</div>';
									echo '</div>';
								}
							?>								
						
						</div>
						
					</div> <!--left sidebar-->
				</div> <!--col-sm 3-->
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>

						<?php
						foreach($featuredItems as $featuredItem)
						{
							echo form_open('Cartcontroller/addToCart'); 

					        echo form_hidden(array('image' => $featuredItem['image'], 'description' => $featuredItem['productDescription'], 'name' => $featuredItem['productName'], 'id' => $featuredItem['productCode'],
				        					 'qty' => '1', 'price' => $featuredItem['MSRP'])); ?>
							
							<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
									<?php
									$imagePath = "assets/images/products/" . $featuredItem['image'];
									$url = base_url().$imagePath; 
									?>
									<img src="<?php echo $url;?>"/>
									<?php
										echo '<h2>' . '€' . $featuredItem['MSRP'] . '</h2>';
										echo '<p>' . $featuredItem['productName'] . '</p>';
										?>
										<?php
										echo '<button type="submit" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>';
										?>
									</div> <!--productinfo center-->
										
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
									</ul>
								</div>
							</div>
							</div>
						<?php
						echo form_close();
						}
						?>
						
					</div><!--features_items-->
					
					<div class="category-tab"><!--category-tab-->
					<br>
					<h2 class="title text-center">Vendor's Products</h2>
						<div class="col-sm-12">
							<ul class="nav nav-tabs">

							<?php
							$c = 0;
								foreach ($vendors as $v) 
								{
									if($c == 0) {
										$id1 = str_replace(' ', '', $v['productVendor'] );

										echo '<li class="active"><a href="#' . $id1 . '" data-toggle="tab">' . $v['productVendor'] . '</a></li>';
									}
									else {
										$id2 = str_replace(' ', '', $v['productVendor']);

										echo '<li><a href="#' . $id2 . '" data-toggle="tab">' . $v['productVendor'] . '</a></li>';
									}
									$c++;
								}
								?>
							</ul>
						</div> <!--col sm 12-->
							<div class="tab-content">
							<?php
							$fadeIn = 0;
							foreach ($vendors as $v) {
								if($fadeIn == 0) {
									$id1 = str_replace(' ', '', $v['productVendor'] );

									echo '<div id="' . $id1. '" class="tab-pane fade in active">';
								}
								else {
									$id2 = str_replace(' ', '', $v['productVendor']);

									echo '<div id="' . $id2 . '" class="tab-pane fade">';
								}
								$fadeIn++;
								foreach ($b as $p) {
									if($p['productVendor'] == $v['productVendor']) {

										echo form_open('Cartcontroller/addToCart'); 
					        			echo form_hidden(array('image' => $p['image'], 'description' => $p['productDescription'], 'name' => $p['productName'], 'id' => $p['productCode'],
				        									 'qty' => '1', 'price' => $p['MSRP']));
								  ?>
									
									<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
											<?php
											$imagePath = "assets/images/products/" . $p['image'];
	    									$url = base_url().$imagePath; 
	    									?>
											<img src="<?php echo $url;?>"/>
											<?php
												echo '<h2>' . '€' . $p['MSRP'] . '</h2>';
												echo '<p>' . $p['productName'] . '</p>';
												?>

												<button type="submit" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div> <!--productinfo center-->
										</div> <!--single products-->
									</div> <!--product image wrapper-->
										<div class="choose">
											<ul class="nav nav-pills nav-justified">
												<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
											</ul>
										</div> <!--choose-->
									</div> <!--col sm 3-->
									<?php
									echo form_close();
									}
								}
								echo '</div>'; //tab pane 
							}
							?>
					</div> <!--tab content-->
					</div> <!--category-->
				</div> <!--col 9-->
			</div> <!--row-->
		</div> <!--container-->
	</section>
	
	<?php
		$this->load->view('footer');
	?>
	
</body>
</html>