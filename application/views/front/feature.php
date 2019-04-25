<div class="features_items"><!--features_items-->
	<h2 class="title text-center" style="color: #1dd1a1;">Features Items</h2>
	<?php $allproduct = $this->ProductModel->get_all_product_limit();?>
	<?php foreach ($allproduct as $product) {?>
	<?php if($product->pro_status==1){?>
	<div class="col-sm-4">
		<div class="product-image-wrapper">
			<div class="single-products">
				<div class="productinfo text-center">
					<form action="<?php echo base_url()?>add-to-cart" method="post">
						<a href="<?php echo base_url()?>product-details/<?php echo $product->pro_id?>">
							<img src="<?php echo base_url().$product->pro_image?>" width="300px" height="300px">
						</a>
						<h2 style="color: #1dd1a1;">$<?php echo $product->pro_price?></h2>
						<p><?php echo $product->pro_title?></p>
						<input type="hidden" value="1" name="qty"/>
						<input type="hidden" value="<?php echo $product->pro_id?>" name="pro_id"/>
						<div>
							<button type="submit" class="btn btn-default add-to-cart" style="color: #1dd1a1;">
								<i class="fa fa-shopping-cart"></i> Add to card
							</button>
						</div>
						<!-- <div>
							<a href="<?php echo base_url()?>product-details/<?php echo $product->pro_id?>" class="btn btn-default add-to-cart" style="color: #1dd1a1;"><i class="fa fa-info" ></i> Details</a>
						</div> -->
					</form>
				</div>
				<!-- <div class="product-overlay">
					<div class="overlay-content">			
					<form action="<?php echo base_url()?>add-to-cart"  method="post">
							<h2>$<?php echo $product->pro_price?></h2>
							<p><?php echo $product->pro_title?></p>
							<input type="hidden" value="1" name="qty"/>
							<input type="hidden" value="<?php echo $product->pro_id?>" name="pro_id"/>
							<button type="submit" class="btn btn-default add-to-cart">
								<i class="fa fa-shopping-cart"></i>
								Add to cart
							</button>
							<a href="<?php echo base_url()?>product-details/<?php echo $product->pro_id?>" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>Details</a>
						</form>	
					</div>
				</div> -->
			</div>
			<!-- <div class="choose">
				<ul class="nav nav-pills nav-justified">
					<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
					<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
				</ul>
			</div> -->
		</div>
	</div>

	<?php } }?>
</div><!--features_items-->