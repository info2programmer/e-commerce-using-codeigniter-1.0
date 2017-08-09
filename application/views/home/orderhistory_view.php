
<!--content-->
<div class="content">
	<!--contact-->
	<div class="mail-w3ls">
		<div class="container">
			<h2 class="tittle">Your Order List </h2></br>
			<div style="clear:both"></div>
			<div class="table-responsive">          
				<table class="table">
					<thead>
						<tr class="bg-info">
							<th data-class="expand" data-sort-initial="true"><span
								title="table sorted by this column on load">Order ID</span></th>
								<th data-hide="phone,tablet" data-sort-ignore="true">No. of items</th>
								<th data-hide="default" data-type="numeric"> Date</th>
								<th data-hide="default"> Amount </th>
								<th data-hide="phone" data-type="numeric"> Order Status</th>
								<th data-hide="phone" data-type="numeric"> Order Details</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($history as $ordr): ?>
								<?php
							 	$orderid=$this->encrypt->encode($ordr->OrderId);
							 	$orderid=str_replace(array('+', '/', '='), array('-', '_', '~'), $orderid);
							 	?>
								<tr>
									<td>#ORDBPH<?php echo $ordr->OrderId; ?></td>
									<td><?php echo $ordr->OrderQuantity; ?>
										<small>item(s)</small>
									</td>
									<td><a target="_blank"><?php echo $ordr->OrderDateTime; ?> </a></td>
									<td>Rs. <?php echo $ordr->OrderTotAmount; ?>/-</td>
									<td><span class="btn btn-success order-status"><?php echo $ordr->OrderStatus; ?></span></td>
									<td data-value="78025368997"><a href="<?php echo base_url(); ?>home/orderdetails/<?php echo $orderid; ?>" class="btn btn-warning"><i class="fa fa-eye" aria-hidden="true"></i>
 View</a></td>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>


		</div>
	</div>
	<!--contact-->
</div>
<!--content-->