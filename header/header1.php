<?php

    try {
        if (!defined('DevEx')) {
            die('<script>window.location.href="../index.php"</script>');
        }
    } catch (\Throwable $th) {
        echo '<script>alert("Some thing went wrong!!!");</script>';
    }

?>

<!-- Header -->
<header class="header shop">
		<!-- Topbar -->
		<?php

			include_once "controller/website/userAccount.php";
		
			if (isset($_SESSION['role'])) {
				include_once 'topbar_c.php';
			}
			else {
				include_once 'topbar.php';
			}
			
		?>
		<!-- End Topbar -->

		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="index.php"><img src="images/logo.png" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
					</div>
					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
							<!-- Search Form -->
							<div class="sinlge-bar">
								<?php
								
									if (isset($_SESSION['role'])) {
										if ($_SESSION['role'] == 'admin') {
											echo '<a href="dashboard/admin/dashboard.php" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>';
										}
										if ($_SESSION['role'] == 'customer') {
											echo '<a href="dashboard/customer/dashboard.php?customer='.$_SESSION['id'].'" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>';
										}
									}
									else {
										include_once 'topbar.php';
									}

								?>
							</div>
							<div class="sinlge-bar shopping">
								<a href="cart.php" class="single-icon"><i class="ti-bag"></i> 
									<span class="total-count">
										<?php
										
											include_once 'controller/website/order.php';

											$count = new order();

											echo $count->cartCount();
										
										?>
									</span>
								</a>
								<!-- Shopping Item -->
								<!-- <div class="shopping-item">
									<div class="dropdown-cart-header">
										<span>2 Items</span>
										<a href="cart.php">View Cart</a>
									</div>
									<ul class="shopping-list">
										<li>
											<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
											<a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
											<h4><a href="#">Woman Ring</a></h4>
											<p class="quantity">1x - <span class="amount">$99.00</span></p>
										</li>
										<li>
											<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
											<a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
											<h4><a href="#">Woman Necklace</a></h4>
											<p class="quantity">1x - <span class="amount">$35.00</span></p>
										</li>
									</ul>
									<div class="bottom">
										<div class="total">
											<span>Total</span>
											<span class="total-amount">$134.00</span>
										</div>
										<a href="checkout.php" class="btn animate">Checkout</a>
									</div>
								</div> -->
								<!--/ End Shopping Item -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Inner -->
		<?php include_once 'innerHeader1.php'; ?>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->