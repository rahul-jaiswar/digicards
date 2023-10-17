<?php $this->load->view('default/header');?>
   <body>
      <!--Start Header -->
      <?php $this->load->view('default/nav-black');?>
		<section class="breadcrumb-areav2" data-background="images/banner/4.jpg">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-7">
                  <div class="bread-titlev2">
                     <h1 class="wow fadeInUp" data-wow-delay=".2s">Complete Purchase</h1>
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
						<h4>Order Summary</h4><br>
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
										<td colspan="3">
											<div class="cart-pg-coupon">
												<input type="text" name="#" class="input-text" placeholder="Coupon code">
												<button type="submit" class="bg-btn smllbtnn lnk">Apply coupon <span class="circle"></span></button>
											</div>
										</td>
										<td colspan="3" class="update-cart">
											<button type="submit" class="bg-btn3 smllbtnn lnk" name="#" value="Update cart">Update cart <span class="circle"></span></button>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 mt60">
						<form id="contact-form" action="<?php echo site_url('Panel/register')?>" method="POST">
				         <div class="tab-17 tabs-layout">
				            <ul class="nav nav-tabs" id="myTab3" role="tablist">
				              <li class="nav-item">
				                <a class="nav-link active" id="shipping-address" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Shipping Address</a>
				              </li>
				              <li class="nav-item">
				                <a class="nav-link" id="billing-address" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Billing Address</a>
				              </li>
				              <li class="nav-item">
				                <a class="nav-link" id="delivery-method" data-bs-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Delivery Method</a>
				              </li>
				              <li class="nav-item">
				                <a class="nav-link" id="payment-method" data-bs-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">Payment Method</a>
				              </li>
				            </ul>
				            <!-- Shipping Address -->
				            <div class="tab-content" id="myTabContent3">
				              <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="shipping-address">
				                <div class="form-block">
						            <div class="fieldsets row">
											<div class="col-md-4 form-group">
											 <input type="text" name="" id="name"  placeholder="Full Name" required="required">
											</div>
											<div class="col-md-4 form-group">
											 <input type="text" name="name" id="name"  placeholder="Enter Email Address" required="required">
											</div>
											<div class="col-md-4 form-group">
											 <input type="text" name="name" id="name"  placeholder="Enter Contact No" required="required">
											</div>
											<div class="col-md-4 form-group">
											 <input type="text" name="name" id="name"  placeholder="Select Country" required="required">
											</div>
											<div class="col-md-4 form-group">
											 <input type="text" name="name" id="name"  placeholder="Select State" required="required">
											</div>
											<div class="col-md-4 form-group">
											 <input type="text" name="name" id="name"  placeholder="Enter Postal Code" required="required">
											</div>
											<div class="col-md-12 form-group">
											 <textarea class="" placeholder="Enter Full Address"></textarea>
											</div>
						            </div>
						            <div class="fieldsets row mt20">
						              <div class="col-md-12 form-group ">
						                <button type="submit" class="lnk btn-main bg-btn">Continue <span class="circle"></span></button>
						              </div>
						            </div>
						        	 </div>
				              </div>
				              <!-- Billing Address -->
				              <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="billing-address">
				                <div class="form-block">
						            <div class="fieldsets row">
						              <div class="col-md-4 form-group">
											 <input type="text" name="" id="name"  placeholder="Full Name" required="required">
											</div>
											<div class="col-md-4 form-group">
											 <input type="text" name="name" id="name"  placeholder="Enter Email Address" required="required">
											</div>
											<div class="col-md-4 form-group">
											 <input type="text" name="name" id="name"  placeholder="Enter Contact No" required="required">
											</div>
											<div class="col-md-4 form-group">
											 <input type="text" name="name" id="name"  placeholder="Select Country" required="required">
											</div>
											<div class="col-md-4 form-group">
											 <input type="text" name="name" id="name"  placeholder="Select State" required="required">
											</div>
											<div class="col-md-4 form-group">
											 <input type="text" name="name" id="name"  placeholder="Enter Postal Code" required="required">
											</div>
											<div class="col-md-12 form-group">
											 <textarea class="" placeholder="Enter Full Address"></textarea>
											</div>
						            </div>
						            <div class="fieldsets row mt20">
						              <div class="col-md-12 form-group ">
						                <button type="submit" class="lnk btn-main bg-btn">Continue <span class="circle"></span></button>
						              </div>
						            </div>
						        	 </div>
				              </div>
				              <!-- Delivery Method -->
				              <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="delivery-method">
				              		<div class="row upset ovr-bg1 ho-gdnt">
											<div class="col-lg-4 col-sm-6 mt30">
												<div class="s-block up-hor ovr-base">
													<div class="nn-card-set">
														 <div class="s-card-icon"><img src="<?php echo site_url('assets/web/images/icons/branding.svg')?>" alt="service" class="img-fluid" /></div>
														 <h4>Standard Delivery</h4>
														 <p>3-5 Days</p>
														 <a href="javascript:void(0)">Rs.100</a>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-sm-6 mt30">
												<div class="s-block up-hor ovr-base">
													<div class="nn-card-set">
														 <div class="s-card-icon"><img src="<?php echo site_url('assets/web/images/icons/development.svg')?>" alt="service" class="img-fluid" /></div>
														 <h4>Express Delivery</h4>
														 <p>1-2 Days</p>
														 <a href="javascript:void(0)">Rs.100</a>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-sm-6 mt30">
												<div class="s-block up-hor ovr-base">
													<div class="nn-card-set">
														 <div class="s-card-icon"><img src="<?php echo site_url('assets/web/images/icons/app.svg')?>" alt="service" class="img-fluid" /></div>
														 <h4>Same Day</h4>
														 <p>Evening Delivery</p>
														 <a href="javascript:void(0)">Rs.100</a>
													</div>
												</div>
											</div>
										</div>
				              </div>
				              <!-- Payment Method -->
				              <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="payment-method">
				              	<div class="row">
				              		<div class="col-md-8">
				              			<h4 class="mb30">Total Payable</h4>
											<table class="table border">
												<tbody>
													<tr>
														<th>Subtotal</th>
														<td>$17</td>
													</tr>
													<tr>
														<th>Coupon Discount</th>
														<td>$0.00</td>
													</tr>
													<tr>
														<th>Delivery Charges</th>
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
													<tr>
														<th>Bank Transfer</th>
														<td><p>
															Bank Name: IDBI Bank <br>
															Account Number: XXXXXXXXXX <br>
															IFSC CODE: XXXXXXXXX<br>
															Branch : Santacruz (W)<br>
														</p></td>
													</tr>
													<tr>
														<th>Note:</th>
														<td><b>Use Bank Details for Payment to avoid Payment Gateway Charges</b></td>
													</tr>
												</tbody>
											</table>
											<a href="#" class="btn-main bg-btn3 lnk w-100">
												Bank Transfer or Card Payment <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span>
											</a>
				              		</div>
				              		<div class="col-md-4">
								          <div class="s-block up-hor mb30">
								            <img src="<?php echo site_url('assets/web/images/payment/scanner.png')?>" alt="service" class="img-fluid"/>
								            <h4>Scan and Pay</h4>
								          </div>
				              			
				              		</div>
				              	</div>
								  </div>
				            </div>
				      	</div>
			      	</form>
		        	</div>
				</div>
			</div>
		</section>
     <?php $this->load->view('default/footer.php');?>
   <?php $this->load->view('default/off-canvas.php');?>
<?php $this->load->view('default/script.php');?>