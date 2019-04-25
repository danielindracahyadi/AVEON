
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Home | E-Shopper</title>

	<?php
		echo $js;
		echo $css;
	?>
</head><!--/head-->

<body>
	<!--/header-->

	<?php
		echo $header;
	?>
	
	<?php 
	if(isset($main_content) && $main_content!=NULL){
		echo $main_content; // Load a single page under header and footer
	}
	else{

		?>
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<?php if(isset($slider)){
						echo $slider;
					}?>
				</div>
			</div>
		</div>
	</section><!--/slider-->
	<section>
		<div class="container">
			<div class="row">
					<?php if(isset($category_brand)){
						echo $category_brand;
					}?>
				
				<div class="col-sm-12">
					<?php if(isset($feature)){
						echo $feature;
					}?>
					
					<!-- This is Category Post option -->
					
					<?php if(isset($recommended)){
						echo $recommended;
					}?>
					
				</div>
			</div>
		</div>
	</section>
	<?php } ?>

	<?php
		echo $footer;
	?>



	<!--/Footer-->
	

	<!-- Price Range Code end -->
</body>
</html>