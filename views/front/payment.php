
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="<?php echo base_url();?>">Home</a></li>
				  <li class="active">Payment</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu" style="background-color: #1dd1a1;">
							<td class="image">Barang</td>
							<td class="description"></td>
							<td class="price">Harga</td>
							<td class="quantity">Banyak</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php $cart_content = $this->cart->contents();
						
						?>

						<?php foreach ($cart_content as $items){ ?>

						<tr>
							<td class="cart_product">
								<a href=""><img  width="100" src="<?php echo $items['options']['pro_image']?>" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $items['name']?></a></h4>
							</td>
							<td class="cart_price">
								<h4>Rp<?php echo $items['price']?></h4>
							</td>
							<td class="cart_quantity">
								<h4><?php echo $items['qty']?></h4>
								<!-- <div class="cart_quantity_button">
									<form action="<?php echo base_url()?>update-cart-qty-payment" method="post">
										<a class="cart_quantity_up" href=""> + </a>
										<input class="cart_quantity_input" type="text" name="qty" value="<?php echo $items['qty']?>" autocomplete="off" size="2">
										<a class="cart_quantity_down" href=""> - </a>
										<input  type="hidden" name="rowid" value="<?php echo $items['rowid']?>">
										<input  type="submit"  value="Update"/>
									<form>
								</div> -->
							</td>
							<td class="cart_total">
								<p class="cart_total_price" style="color: #1dd1a1;">Rp<?php echo $items['subtotal']?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="<?php echo base_url()?>delete-to-cart-payment/<?php echo $items['rowid']?>"><i class="fa fa-times" style="color: #1dd1a1;"></i></a>
							</td>
						</tr>
						<?php } ?>

					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<?php 
								$cart_total = $this->cart->total();
							?>
							<li>Total belanja 
								<span>
									Rp<?php echo $cart_total;?>
								</span>
							</li>

							<!-- <?php
								$tax = ($cart_total*2)/100;
							?> -->

							<!-- Shipping Cost Dependend Quantity, price, buyer distance etc -->
							<!-- <li>Eco Tax 2% <span>$<?php echo $tax?></span></li>-->
							<?php
								if($cart_total>0 && $cart_total<=100000){
									$shiping = 0;
								}elseif($cart_total>100000 && $cart_total<=150000){
									$shiping = 10000;
								}elseif($cart_total>150000 && $cart_total<=200000){
									$shiping = 20000;
								}elseif($cart_total>200000){
									$shiping = 30000;
								}elseif($cart_total==0){
									$shiping = 0;
								}
							?> 

							<li>Biaya pengiriman 
								<span>
									Rp<?php echo $shiping?>										
								</span>
							</li>
							
							<?php $g_total = $cart_total+$shiping;?>
							<li><strong>Total 
								<span>
									Rp<?php echo $g_total;?>
								</span>
								</strong>
							</li>
						</ul>
							<form action="<?php echo base_url()?>update-cart-qty-payment" method="post" >	
							
							</form>	
					</div>
				</div>
				<div class="col-sm-6">
					<!-- <form action="<?php echo base_url()?>place-order" method="post" >
						<span>
							<input type="submit" name="btn" class="btn btn-primary" style="background-color: #1dd1a1;" value="Selesai">
						</span>
					</form> -->
					<form action="<?php echo base_url()?>place-order" method="post">
						<div class="payment-options">
							<div class="order-message">
								<p class="alert alert-warning">Shipping Order</p>
								<?php echo $this->session->flashdata("flash_msg")?>
								<textarea name="payment_message"  placeholder="Catatan Pengiriman" rows="10"></textarea>
							</div>

							<div class="payment-method">
								<label for="card" class="method card">
									<img src="https://www.shoptab.net/blog/wp-content/uploads/2016/02/cashondelivery.gif"
									style="height: 100px;"/>
								<div class="radio-input">
									<input id="card" type="radio" name="payment_gateway" value="cash_on_delivery" >
									Pembayaran di lokasi
									<br>
									<br>
									Pembatalan akan dikenakan denda
								</div>
								</label>

								<label for="paypal" class="method paypal">
								<img src="https://www.suaramerdeka.com/storage/images/2019/02/04/bca-5c57ad3870d25.png"
									style="height: 100px;"/>
								<div class="radio-input" style="padding-left:10px; padding-right:10px;">
									<input id="paypal" type="radio" name="payment_gateway" value="paypal_payment">
									Pembayaran menggunakan BCA
									<br>
									<br>
									Transfer ke no rekening 700073812 atas nama Aveon Company
								</div>
								</label>
							</div>
							<span>
								<input type="submit" name="btn" class="btn btn-primary" value="Order">
							</span>
							<!-- <span>
								<label><input type="radio"  name="payment_gateway" value="cash_on_delivery"> COD(Cash on delivery)</label>
							</span>
							<span>
								<label><input type="radio"  name="payment_gateway" value="paypal_payment"> BCA</label>
							</span> -->
							
						</div>
					</form>
				</div>

			</div>
		</div>
	</section><!--/#do_action-->
	