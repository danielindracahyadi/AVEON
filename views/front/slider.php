<?php $all_slider = $this->ProductModel->get_all_top_product()?>

<div class="col-sm-12">
	<div id="slider-carousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#slider-carousel" data-slide-to="0" class="active" style="background-color: #1dd1a1;"></li>
			<li data-target="#slider-carousel" data-slide-to="1" style="background-color: #1dd1a1;"></li>
			<li data-target="#slider-carousel" data-slide-to="2" style="background-color: #1dd1a1;"></li>
			<li data-target="#slider-carousel" data-slide-to="3" style="background-color: #1dd1a1;"></li>
		</ol>
		
		<div class="carousel-inner">

			<?php
				$i=1;
				foreach ($all_slider as $slider) {
					if($i==1){
						echo "<div class='item active'>";
					}else{
						echo "<div class='item'>";
					}
			?>
			
				<div class="col-sm-6">
					<h1><i><span style="color: #1dd1a1;">A</span>VEON</i></h1>
					<h2><?php echo $slider->pro_title;?></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					<button type="button" class="btn btn-default get" style="background-color: #1dd1a1;">Get it now</button>
				</div>
				<div class="col-sm-6">
					<img src="<?php echo base_url().$slider->pro_image;?>" class="girl img-responsive" alt="" />
					<img src="images/home/pricing.png"  class="pricing" alt="" />
				</div>
			</div>
			<?php $i++; } ?>

		</div>
		
		<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
			<i class="fa fa-angle-left"></i>
		</a>
		<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
			<i class="fa fa-angle-right"></i>
		</a>
	</div>
	
</div>
