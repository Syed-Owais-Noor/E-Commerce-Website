<section class="shop checkout section">
			<div class="container">
				<form method="POST" class="row" enctype="multipart/form-data"> 
					<div class="col-lg-8 col-12">
						<div class="checkout-form">
							<h2>Make Your Checkout Here</h2>
							<p>Please register in order to checkout more quickly</p>
							<!-- Form -->
							<div class="form">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Name<span>*</span></label>
											<input type="text" name="name" placeholder="" required>
										</div>
									</div>
									<!-- <div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Email Address<span>*</span></label>
											<input type="email" name="email" placeholder="" required>
										</div>
									</div> -->
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Phone Number<span>*</span></label>
											<input type="text" name="phone-number" placeholder="" required>
										</div>
									</div><div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Country<span>*</span></label>
											<input type="text" name="country" value="Pakistan" readonly>
											<!-- <select name="city" id="state-province">
												<option value="divition" selected="selected">Karachi</option>
												<option>Hyderabad</option>
												<option>Lahore</option>
												<option>Faisalabad</option>
												<option>Peshawar</option>
												<option>Islamabad</option>
												<option>Quetta</option>
											</select> -->
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>City<span>*</span></label>
											<select name="city" id="state-province">
												<option selected="selected">Karachi</option>
												<option>Hyderabad</option>
												<option>Lahore</option>
												<option>Faisalabad</option>
												<option>Peshawar</option>
												<option>Islamabad</option>
												<option>Quetta</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Postal Code<span>*</span></label>
											<input type="text" name="post-code" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Address Line 1<span>*</span></label>
											<input type="text" name="address" placeholder="" required="required">
										</div>
									</div>
								</div>
							</div>
							<!--/ End Form -->
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="order-details">
							<!-- Order Widget -->
							<div class="single-widget">
								<h2>CART TOTALS</h2>
								<div class="content">
									<ul>
										<?php
							
											include_once 'controller/website/order.php';

											try {
												$checkout = new order();
											} catch (\Throwable $th) {
												echo '<script>alert("Some thing went wrong!!!");</script>';
											}
										
										?>


										<li>
											Total Products
											<span>
												<?php
													try {
														echo $checkout->cartCount();
													} catch (\Throwable $th) {
														echo '<script>alert("Some thing went wrong!!!");</script>';
													}
												?>
											</span>
										</li>
										<li>Shipping<span>Free</span></li>
										<li class="last">
											Cart Total
											<span>
												Rs. 
												<?php
												
													try {
														if (isset($_SESSION['total'])) {
															echo $_SESSION['total'];
														}
														else {
															echo 0;
														}
													} catch (\Throwable $th) {
														echo '<script>alert("Some thing went wrong!!!");</script>';
													}
												
												?>
											</span>
										</li>
									</ul>
								</div>
							</div>
							<!--/ End Order Widget -->
							<!-- Order Widget -->
							<div class="single-widget">
								<h2>Payments</h2>
								<div class="content">
									<div class="checkbox">
										<select name="payment" id="state-province">
											<option value="COD" selected="selected">Cash On Delivery</option>
										</select>
									</div>
								</div>
							</div>
							<!--/ End Order Widget -->
							<!-- Button Widget -->
							<div class="single-widget get-button">
								<div class="content">
									<div class="button">
										<button type="submit" class="btn" name="checkout">checkout</button>
									</div>
								</div>
							</div>
							<!--/ End Button Widget -->
						</div>
					</div>
				</form>
			</div>
		</section>