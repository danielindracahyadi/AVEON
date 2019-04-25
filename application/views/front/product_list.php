<div class="features_items"><!--features_items-->
	<h2 class="title text-center" style="color: #1dd1a1;">Produk</h2>
	<?php foreach ($post_by_brand_id as $value) {?>

	<?php if($value->pro_status==1){?>
	<div class="col-sm-4">
		<div class="product-image-wrapper">
			<div class="single-products">
				<div class="productinfo text-center">
					<a href="<?php echo base_url()?>product-details/<?php echo $value->pro_id?>">
						<img src="<?php echo base_url().$value->pro_image?>" width="300px" height="300px" alt="" />
					</a>
					<h2 style="color: #1dd1a1;">$<?php echo $value->pro_price?></h2>
					<p><?php echo $value->pro_title?></p>
					<!-- <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Tambah ke Keranjang</a> -->
				</div>
				<!-- <div class="product-overlay">
					<div class="overlay-content">			
					<form action="<?php echo base_url()?>add-to-cart"  method="post">
							<h2>$<?php echo $value->pro_price?></h2>
							<p><?php echo $value->pro_title?></p>
							<input type="hidden" value="1" name="qty"/>
							<input type="hidden" value="<?php echo $value->pro_id?>" name="pro_id"/>
							<button type="submit" class="btn btn-default add-to-cart">
								<i class="fa fa-shopping-cart"></i>
								Add to cart
							</button>
							<a href="<?php echo base_url()?>product-details/<?php echo $value->pro_id?>" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>Details</a>
						</form>	
					</div>
				</div> -->
			</div>
			<!-- <div class="choose">
				<ul class="nav nav-pills nav-justified">
					<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
					<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
				</ul>
			</div> -->
		</div>
	</div>
	<?php }} ?>
		<?php if($post_by_brand_id!=NUll){?>
			<?php echo $this->pagination->create_links();?>
	<?php }else{?>
	<p style="color: red;"><i>Tidak ada produk yang tersedia.</p></i>
	<?php }?>
</div><!--features_items-->

