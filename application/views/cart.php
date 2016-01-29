<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
			  <li><a href="<?php echo site_url('UserController/index'); ?>">Home</a></li>
			  <li class="active">Shopping Cart</li>
			</ol>
		</div>
		<div class="table-responsive cart_info">
			<table class="table table-condensed">
				<thead>
					<tr class="cart_menu">
						<td class="image">Image</td>
						<td class="description">Description</td>
						<td class="price">Price</td>
						<td class="quantity">Quantity</td>
						<td class="total">Total</td>
						<td class="delete">Delete</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					<tr class="table-row">
						<?php
							foreach ($this->cart->contents() as $item) {

								$imagePath = "assets/images/products/" . $item['image'];
								$url = base_url().$imagePath; 
								?>
								<td class="cart_product">
									<img src="<?php echo $url;?>"/>
								</td>
								<?php
							?>
						<td class="cart_description">
							<?php
								echo $item['description'];
							?>
						</td>
						<td class="cart_price">
							<p>
								<?php
									echo "€" . $item['price'];
								?>
							</p>
						</td>
						<td class="cart_quantity">
							<div class="cart_quantity_button">
								<a class="cart_quantity_up" href=""> + </a>
								<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
								<a class="cart_quantity_down" href=""> - </a>
							</div>
						</td>
						<td class="cart_price">
							<p>
								<?php
									echo "€" . $item['price'] * $item['qty'];
								?>
							</p>
						</td>
						<td class="cart_delete">
							
						</td>
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</section> <!--/#cart_items-->

<section id="do_action">
	<div class="container">
		<div class="row">
			<div class="col-sm-6" style="float: right;">
				<div class="total_area">
					<ul>
						<li>Cart Sub Total <span></span></li>
						<li>Shipping Cost <span>Free</span></li>
						<li>Total <span></span></li>
					</ul>
						<a class="btn btn-default update" href="">Update</a>
						<a class="btn btn-default check_out" style="float: right;" href="">Check Out</a>
				</div>
			</div>
		</div>
	</div>
</section><!--/#do_action-->

<?php
	$this->load->view('footer');
?>

<script type="text/javascript" language="javascript" src="<?= base_url('assets/js/price-range.js') ?>">
</script>
<script type="text/javascript" language="javascript" src="<?= base_url('assets/js/jquery.prettyPhoto.js') ?>">
</script>
<script type="text/javascript" language="javascript" src="<?= base_url('assets/js/main.js') ?>">
</script>
</body>
</body>
</html>