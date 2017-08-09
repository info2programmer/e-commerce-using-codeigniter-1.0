<!--banner-->
<div class="banner1">
	<div class="container">
	<h3 class="text-left"><a href="<?php echo base_url(); ?>cart">Cart</a> / <span>Thanks For Order</span></h3>
	</div>
</div>
<!--banner-->
<!--content-->
<div class="content">
	<!--contact-->
	<div class="mail-w3ls">
		<div class="container">
			<div class="col-lg-12 ">
				<div class="row">

					<div class="thanxContent text-center">

						<h1> Thank you for your order <a href="javascript:void(0);">#ORDBPH<?php echo $this->session->flashdata('orderid'); ?></a></h1>
					</br>
					<h4>we'll let you know when your items are on their way</h4>

				</div>

				<div class="col-lg-12 col-center">

				</br>
				<div class="table-responsive">          
					<table class="table">
						<thead>
							<tr class="bg-warning"><td colspan="5"> <center><h2>Items to be Shipped</h2></center></td></tr>

						</thead>
						<tbody>
							<tr class="bg-info">
								<th>Product Name</th>
								<th>Author</th>
								<th>Quantity</th>
								<th>Price</th>
							</tr>
							<?php foreach($this->home_model->getorderlineitem($this->session->flashdata('orderid')) as $items): ?>
							<tr>
								<td><?php echo $items->ItemName; ?></td>
								<td><?php echo $items->ItemAuther; ?></td>
								<td><?php echo $items->ItemQuantity; ?></td>
								<td>Rs. <?php echo $items->ItemSellingPrice; ?>.00/-</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>

			</div>
		</div>
		<!--/row end-->

	</div>					
</div>
</div>
				<!--contact-->