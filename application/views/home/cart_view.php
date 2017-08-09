		<!--banner-->
		<div class="banner1">
			<div class="container">
				<h2 class="ban-head text-left">YOUR CART</h2>
				<p><a href="<?php echo base_url(); ?>">Home</a> /<span>Cart</span></p>
			</div>
		</div>
	<!--banner-->
		<!--content-->
			<div class="content">
				<!--contact-->
					<div class="mail-w3ls">
						<div class="container">
							<div class="row">
							<h2 class="tittle">MY SHOPPING CART</h2></br>
							<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
							<?php if($this->cart->total()!=null): ?>
								<button class="btn btn-danger pull-right clear-cart" id="clear_cart"><i
                                        class="glyphicon glyphicon-trash"></i>&nbsp;CLEAR CART</button></br>
                             <?php endif; ?>
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr class="bg-info">
												<th>Item</th>
												<th>Price</th>
												<th>Quantity</th>
												<th>Total</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
										<?php $count=0; ?>
										<?php foreach($this->cart->contents() as $items): ?>
											<?php $count++; ?>
											<tr>
												<td><?php echo $items["name"]; ?></td>
												<td><?php echo $items["price"]; ?>/-</td>
												<td><input type="number" value="<?php echo $items["qty"]; ?>" min="1" max="10"  style="vertical-align:middle;" id="<?php echo $items['id']; ?>">
												<button title="Update Quantity" class="btn btn-success cart_update" name="cart_update" data-productid="<?php echo $items['id']; ?>" data-rowid="<?php echo $items["rowid"]; ?>"><span class="glyphicon glyphicon-repeat"></span></button>
												</td>
												<td id="itemtotal"><?php echo $items["subtotal"]; ?>/-</td>
												<td><button class="btn btn-warning coupon remove_inventory" name="remove_inventory" data-rowid="<?php echo $items["rowid"]; ?>" ><i class="glyphicon glyphicon-trash"></i>&nbsp;</button></td>
											</tr>
										<?php endforeach; ?>
										</tbody>
										<?php if($count==0): ?>
											<h3 align="center" style="color:#981616">Cart is Empty</h3>
										<?php endif; ?>
									  </table>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
								<br/><br/>
								<div class="table-responsive" style="margin-top: 4px">          
									  <table class="table">
										<thead>
											<tr>
												<th>Order Amount</th>
												<th><?php echo $this->cart->total(); ?>/-</th>
											</tr>
										</thead>
										<tbody>
											
											<tr>
												<td>Referral Discount</td>
												<td><?php if($this->session->userdata('referaldiscount')) 
												{
													echo $this->session->userdata('referaldiscount');
												}
												else{
													echo "0";
												}
												?>%&nbsp;<sup><span class="glyphicon glyphicon-star" aria-hidden="true"></span></sup></td>
											</tr>
											<tr class="bg-info">
												<td>Total</td>
												<td>
												<?php if(!$this->session->userdata('referaldiscount')): ?>
													<?php echo $this->cart->total(); ?>/-
												<?php else: ?>
													<?php echo $this->cart->total()-($this->cart->total()*5/100); ?>
												<?php endif; ?>
												</td>
											</tr>
											<!--<tr>
												<td colspan="2">
													<div class="">
														<input class="couponForm" id="" type="text"
															   placeholder="Coupon code">
														<button class=" btn btn-success coupon" type="button">Apply!</button>
													</div>
												</td>
											 </tr>-->
										</tbody>
									  </table>
								</div>
								<?php if($this->cart->total()==null): ?>
								<a class="btn btn-success btn-lg btn-block" title="checkout" href="javascript:void(0);" disabled="disabled" style="margin-bottom:20px"> Proceed to checkout &nbsp; <i class="fa fa-arrow-right"></i> </a>
							<?php else: ?>
								<a class="btn btn-success btn-lg btn-block" title="checkout" href="<?php echo base_url(); ?>home/checkout" disable style="margin-bottom:20px"> Proceed to checkout &nbsp; <i class="fa fa-arrow-right"></i> </a>
							<?php endif; ?>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<p><span class="glyphicon glyphicon-star" aria-hidden="true"></span> &nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
							</div>
						</div>
					</div>
				<!--contact-->
			</div>
		<!--content-->
		<script>
		$(document).ready(function(){
				$('.cart_update').click(function(){
					var product_id = $(this).data("productid");
					var rowid = $(this).data("rowid");
					var quantity = $('#' + product_id).val();
					// alert(product_id);
					// alert(rowid);
					// alert(quantity);
					if(quantity != '' && quantity > 0)
					{
						var xmlhttp = new XMLHttpRequest();
						xmlhttp.onreadystatechange = function() {
							if (this.readyState == 4 && this.status == 200) {
								document.getElementById("total").innerHTML = this.responseText;
								alert("cart updated");
								window.open("<?php echo base_url();?>home/cart","_self");
							}
						};
						var url="<?php echo base_url();?>home/updatecart?rowid="+rowid+"&quantity="+quantity;
						xmlhttp.open("GET", url, true);
						xmlhttp.send();


					}
					else
					{
						alert("Please Enter quantity");
					}
				});
			});

			$(document).ready(function(){
				$('.remove_inventory').click(function(){
					var rowid = $(this).data("rowid");
					var quantity = 0;
					// alert(product_id);
					// alert(rowid);
					// alert(quantity);
					
						var xmlhttp = new XMLHttpRequest();
						xmlhttp.onreadystatechange = function() {
							if (this.readyState == 4 && this.status == 200) {
								document.getElementById("total").innerHTML = this.responseText;
								alert("Cart Deleted");
								window.open("<?php echo base_url();?>home/cart","_self");
							}
						};
						var url="<?php echo base_url();?>home/updatecart?rowid="+rowid+"&quantity="+quantity;
						xmlhttp.open("GET", url, true);
						xmlhttp.send();


					
				});

				 $(document).on('click', '#clear_cart', function(){
				 	var urlclear="<?php echo base_url(); ?>home/clearcart";
				  if(confirm("Are you sure you want to clear cart?"))
				  {
				   $.ajax({
				    url:urlclear,
				    success:function(data)
				    {
				     alert("Your cart has been clear...");
				     window.open("<?php echo base_url();?>home/cart","_self");
				    }
				   });
				  }
				  else
				  {
				   return false;
				  }
				 });
			});



		</script>