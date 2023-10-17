<?php $this->load->view('default/header');?>
   <body>
      <!--Start Header -->
      <?php $this->load->view('default/nav-black');?>
		<section class="breadcrumb-areav2" data-background="images/banner/4.jpg">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-7">
                  <div class="bread-titlev2">
                     <h1 class="wow fadeInUp" data-wow-delay=".2s">Happy Shopping</h1>
                  </div>
               </div>
            </div>
         </div>
      	</section>
		<!--shop products-->
		<section class="shop-products-bhv  pt60 pb60">
			<div class="container shop-container">
				<div class="row">
					<div class="col-lg-12">
						<div class="cart-extra-sevc div-for-data mb60">
							<h4 class="mb30">Addon Services</h4>
							<div class="media">
								<div class="post-image bdr-radius">
									<a href="#"><img src="<?php echo site_url('assets/web/images/blog/blog-small.jpg')?>" alt="girl" class="img-fluid"></a>
								</div>
								<div class="media-body post-info">
									<h5><a href="#">Template Installation – Custom Dev</a></h5>
									<div class="rpb-itm-pric mt5"><span class="offer-prz">$17 </span> <span class="regular-prz">$25</span></div>
									<a href="#" class="mt10 btn-main btn-small bg-btn3 lnk">Add this Addon<span class="circle"></span></a>
								</div>
							</div>
							<div class="media">
								<div class="post-image bdr-radius">
									<a href="#"><img src="<?php echo site_url('assets/web/images/blog/blog-small.jpg')?>" alt="girl" class="img-fluid"></a>
								</div>
								<div class="media-body post-info">
									<h5><a href="#">Hosting Server Installation</a></h5>
									<div class="rpb-itm-pric mt5"><span class="offer-prz">$17 </span> <span class="regular-prz">$25</span></div>
									<a href="#" class="mt10 btn-main btn-small bg-btn3 lnk">Add this Addon<span class="circle"></span></a>
								</div>
							</div>
							<div class="media">
								<div class="post-image bdr-radius">
									<a href="#"><img src="<?php echo site_url('assets/web/images/blog/blog-small.jpg')?>" alt="girl" class="img-fluid"></a>
								</div>
								<div class="media-body post-info">
									<h5><a href="#">WordPress CMS Installation</a></h5>
									<div class="rpb-itm-pric mt5"><span class="offer-prz">$17 </span> <span class="regular-prz">$25</span></div>
									<a href="#" class="mt10 btn-main btn-small bg-btn3 lnk">Add this Addon<span class="circle"></span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="rpb-cart-table">
							<table class="cart_table div-for-data">
								<thead>
									<tr>
										<th class="product-remove">&nbsp;</th>
										<th class="product-thumbnail">&nbsp;</th>
										<th class="product-name">Item Name</th>
										<th class="product-price">Price</th>
										<th class="product-quantity">Quantity</th>
										<th class="product-subtotal">Total</th>
									</tr>
								</thead>
								<tbody>
									<tr class="rpb-cart-item-td">
										<td class="product-remove">
											<a href="#" class="remove">×</a>
										</td>
										<td class="product-thumbnail">
											<a href="#"><img src="<?php echo site_url('assets/web/images/shop/item-perview.jpg')?>" alt="#"></a>
										</td>
										<td class="product-name rpbrs-titl" data-title="Item Name">
											<a href="#">Niwax</a>
										</td>
										<td class="product-price rpbrs-titl" data-title="Price">
											<span>$17</span>
										</td>
										<td class="product-quantity rpbrs-titl" data-title="Quantity">
											<span>1</span>
										</td>
										<td class="product-subtotal rpbrs-titl" data-title="Total">
											<span>$17</span>
										</td>
									</tr>
									<tr>
										<td colspan="6">
											<table class="table border">
												<tbody>
													<tr>
														<th>Subtotal</th>
														<td>$17</td>
													</tr>
													<tr>
														<th>Discount</th>
														<td>$0.00</td>
													</tr>
													<tr>
														<th>Tax</th>
														<td>$0.00</td>
													</tr>
													<tr>
														<th>Total</th>
														<td>$17</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
									<tr>
										<td colspan="3">
											<div class="cart-pg-coupon">
												<input type="text" name="#" class="input-text" placeholder="Coupon code">
												<button type="submit" class="bg-btn smllbtnn lnk">Apply coupon <span class="circle"></span></button>
											</div>
										</td>
										<td colspan="3" class="update-cart">
											<a href="<?php echo site_url('Shop/index')?>"><button  class="bg-btn3 smllbtnn lnk" name="#" value="Update cart">Update cart <span class="circle"></span></button></a>
											<a href="<?php echo site_url('Checkout/index')?>"><button class="bg-btn3 smllbtnn lnk" name="#" value="Update cart">Proceed to Checkout <span class="circle"></span></button></a>
										</td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</section>
			<?php $this->load->view('default/footer.php');?>
   <?php $this->load->view('default/off-canvas.php');?>
<?php $this->load->view('default/script.php');?>