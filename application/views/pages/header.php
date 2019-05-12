<header id="header"><!--header-->
	<!--header_top-->
		<!-- <div class="header_top" style="background-color: #10171e;">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li>
									<a href="#" style="color: #f1f2f2;">
										<i class="fa fa-phone" style="color: #f1f2f2;"></i>  (021) 123456
									</a>
								</li>
								<li>
									<a href="#" style="color: #f1f2f2;">
										<i class="fa fa-envelope" style="color: #f1f2f2;"></i>  info@aveon.com
									</a>
								</li>
							</ul>
						</div>
					</div> -->
					<!-- <div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div> -->
<!-- 				</div>
			</div>
		</div> -->
		<!--/header_top-->
		<!--header-middle-->
		<div class="header-middle" style="background-color: #10171e;">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="<?php echo base_url();?>"><img src="<?php echo base_url()?>assets/front/logo.png" alt="" /></a>
						</div>
						<!-- <div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div>
						</div> -->
					</div>
					<div class="col-sm-8">
						<!-- <div class="shop-menu pull-right"> -->
							<ul class="nav navbar-nav navbar-right">
								
								<!-- <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li> -->
								<?php $customer_id = $this->session->userdata('cus_id');?>
								<?php $shipping_id = $this->session->userdata('shipping_id');?>

								<?php

								if($customer_id) { ?>
									
									<li>
										<a href="#" style="pointer-events: none; color: #1dd1a1">Hi, <?php echo $this->session->userdata("cus_name");?></a>
									</li>
								<?php }
								else{ ?>
								<?php } ?>

									<!-- <?php if($this->cart->total_items()!=Null && $customer_id!=NULL && $shipping_id!=NULL){
										?>
								<li>
									<a href="<?php echo base_url()?>payment"><i class="fa fa-crosshairs"></i> Checkout</a>

								</li>
									<?php }elseif($this->cart->total_items()!=Null && $customer_id!=NULL){?>

								<li>
									<a href="<?php echo base_url()?>billing"><i class="fa fa-crosshairs"></i> Checkout</a>

								</li>

									<?php }else{?>
								<li>
									<a href="<?php echo base_url()?>checkout"><i class="fa fa-crosshairs"></i> Checkout</a>

								</li>
									<?php } ?> -->
								<li>
									<?php if($this->cart->total_items()!=Null && $customer_id!=NULL && $shipping_id!=NULL){?>
									<a href="<?php echo base_url()?>payment" style="color: #f1f2f2;"><i class="fa fa-credit-card" style="color: #1dd1a1;"></i>Pembayaran</a>
									<?php } ?>
								</li>
								<li>	
									<a href="<?php echo base_url()?>show-cart" style="color: #f1f2f2;"><i class="fa fa-shopping-cart" style="color: #1dd1a1;"></i>
									<?php $cart_items =  $this->cart->total_items();
										if($cart_items>0){
									?> 
									 Keranjang(<?php echo $cart_items;?>)
									 <?php }else{?>
									  Keranjang(0)
									 <?php } ?>
									</a>

								</li>
								<?php 
									
								if($customer_id){?>
								<li>
									<a href="<?php echo base_url()?>logout" style="color: #f1f2f2;"><i class="fa fa-lock" style="color: #1dd1a1;"></i> Keluar</a>
								</li>
								<?php }else{ ?>
								<li>
									<a href="<?php echo base_url()?>checkout" style="color: #f1f2f2;"><i class="fa fa-lock" style="color: #1dd1a1;"></i> Masuk</a>
								</li>
								<?php } ?>
								
							</ul>
						<!-- </div> -->
					</div>
				</div>
			</div>
		</div>

		<!--/header-middle-->
		<!--header-bottom-->
		<!-- <div class="header-bottom">
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
								<li><a href="<?php echo base_url();?>" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
									<ul role="menu" class="sub-menu">
										<li><a href="<?php echo base_url()?>products">Products</a></li>
											<?php if($this->cart->total_items()!=Null && $customer_id!=NULL){
													?>
											<li>
												<a href="<?php echo base_url()?>billing">Checkout</a>

											</li>
												<?php }elseif($this->cart->total_items()!=Null){?>
											<li>
												<a href="<?php echo base_url()?>checkout">Checkout</a>

											</li>
												<?php } ?>
											<li>	
												<a href="<?php echo base_url()?>show-cart">
												<?php $cart_items =  $this->cart->total_items();
													if($cart_items>0){
												?> 
												 Cart(<?php echo $cart_items;?>)
												 <?php }else{?>
												  Cart(empty)
												 <?php } ?>
												</a>

											</li>
											<?php if($customer_id){?>
											<li>
												<a href="<?php echo base_url()?>logout"><i class="fa fa-lock"></i> Logout</a>
											</li>
											<?php }else{ ?>
											<li>
												<a href="<?php echo base_url()?>checkout"><i class="fa fa-lock"></i> Login</a>
											</li>
											<?php } ?>
			 
									</ul>
								</li> 
								<li><a href="<?php echo base_url()?>home/_404_page">404</a></li>
								<li><a href="<?php echo base_url()?>contact">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<form action="<?php echo base_url()?>search" method="post">
							<input type="text" name="search" placeholder="search" />							
							</form>
						</div> 
					</div>
				</div>
			</div>
		</div> -->
		<!--/header-bottom-->
</header>