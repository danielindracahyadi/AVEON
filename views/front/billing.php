<style type="text/css">
	.billing_info p{color: red;font-style: bold}
</style>
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="<?php echo base_url();?>">Home</a></li>
				  <li class="active">Periksa</li>
				</ol>
			</div><!--/breadcrums-->

			<!-- <div class="step-one">
				<h2 class="heading">Step 2</h2>
			</div> -->
		
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-2">
						
					</div>
					<div class="col-sm-8">
						<div class="bill-to">
							<h5 class="billing_info">
                   			 <?php echo validation_errors();?>
			              </h5>
							<p>Alamat Pembayar</p>
							
							<div class="form-two">
								<form action="<?php echo base_url()?>update-billing" method="post" name="billing_info">
									<input type="text" placeholder="Nama Lengkap" name="cus_name" value="<?php echo $cus_info->cus_name?>">
									<input type="hidden" name="cus_id" value="<?php echo $cus_info->cus_id?>">
									<input type="text" placeholder="Email*" name="cus_email" value="<?php echo $cus_info->cus_email?>" readonly="">
									<input type="text" placeholder="Nomor Telepon" name="cus_mobile" value="<?php echo $cus_info->cus_mobile?>">
									<input type="text" placeholder="Alamat" name="cus_address" value="<?php echo $cus_info->cus_address?>">
									<input type="text" placeholder="Kota" name="cus_city" value="<?php echo $cus_info->cus_city?>">
									<!-- <select name="cus_country" value="<?php echo $cus_info->cus_country?>">
										<option>-- Country --</option>
										<option value="United_States" >United States</option>
										<option value="Bangladesh">Bangladesh</option>
										<option value="UK">UK</option>
										<option value="India">India</option>
										<option value="Pakistan">Pakistan</option>
										<option value="Ucrane">Ucrane</option>
										<option value="Canada">Canada</option>
										<option value="Dubai">Dubai</option>
									</select> -->
									<input type="text" placeholder="Kode Pos" name="cus_zip" value="<?php echo $cus_info->cus_zip?>">
									<!-- Shipping Same As Billing
									<input type="checkbox" name="shipping_info" value="on"> -->
									<input type="submit" value="Berikutnya" class="btn btn-primary" style="background-color: #1dd1a1;">
								</form>
							</div>
							
						</div>
					</div>
					<div class="col-sm-2">
						
					</div>					
				</div>
			</div>
			
		</div>
	</section> <!--/#cart_items-->
	<!-- <script type="text/javascript">
		document.forms['billing_info'].elements['cus_country'].value=<?php echo $cus_info->cus_country?>

	</script> -->