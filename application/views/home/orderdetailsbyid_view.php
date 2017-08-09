<!--content-->
			<div class="content">
				<!--contact-->
					<div class="mail-w3ls">
						<div class="container">
							<h2 class="tittle">Your Order Status </h2></br>
							<div style="clear:both"></div>
							<div class="row">
							<div class="col-sm-12 col-md-6">
								<div class=" statusTop">
									<?php foreach ($ordersummerydata as $data): ?>
									<?php
									 $OrderDateTime=$data->OrderDateTime;
									 $OrderStatus=$data->OrderStatus;
									 $PaymentMode=$data->PaymentMode;
									 $TotalOrderAmount=$data->OrderTotAmount;
									 $OrderID=$data->OrderId;
									 $OrderID=$this->encrypt->encode($OrderID);
							 		 $OrderID=str_replace(array('+', '/', '='), array('-', '_', '~'), $OrderID);
									 ?>
									<p><strong>Order Id:</strong> #ORDBPH<?php echo $data->OrderId; ?></p>
									<p><strong>Order Date And Time:</strong> <?php echo $data->OrderDateTime; ?></p>
									<p><strong>Order Status:</strong> <?php echo $data->OrderStatus; ?></p>
								</div>
							</div>
							<?php if($data->OrderStatus=="Delivered" || $data->OrderStatus=="Confirmed" || $data->OrderStatus=="Readytoship" || $data->OrderStatus=="Shipped" || $data->OrderStatus=="Delivered"): ?>
							<div class="col-sm-12 col-md-6 invoice">
								<div>
									</br></br><a href="<?php echo base_url(); ?>home/invoice/<?php echo $OrderID; ?>" class="btn btn-warning btn-lg pull-right" title="Invoice" > <i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i> &nbsp; DOWNLOAD INVOICE </a>
								</div>
							</div>
							<?php endif; ?>
						<?php endforeach; ?>
							</div>
							<?php
							switch($OrderStatus){
								case "Pending":
									$datapercent="12%";
									break;
								case "Confirmed":
									$datapercent="28%";
									break;
								case "Readytoship":
									$datapercent="48%";
									break;
								case "Shipped":
									$datapercent="75%";
									break;
								case "Delivered":
									$datapercent="100%";
									break;
								default:
									$datapercent="100%";
									break;
							}
							?>
							<div class="row tracking-order">
								<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 text-center">
									<h3>Ordered</h3>
									<h5><?php echo $OrderDateTime; ?></h5>
									</br>
									<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
								</div>
								<?php foreach($ordershipmentdata as $shipmentdata): ?>
								<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 text-center">
									<h3>Confirmed</h3>
									</br>
									</br>
									<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
								</div>
								<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 text-center">
									<h3>Packed</h3>
									<h5><?php echo $shipmentdata->OrderPackDate; ?></h5>
									</br>
									<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
								</div>
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
									<h3>ON THE WAY</h3>
									<h5>Courier Name:<a href="<?php echo $shipmentdata->OrderTrackingURL; ?>" target="_blank"><?php echo $shipmentdata->ShipmentCourier; ?></a></h5>
									<h5>Tracking Id.: <?php echo $shipmentdata->OrderTrackingId; ?></h5>
									<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
								</div>
								<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 text-center">
									<h3>Delivered</h3>
									<h5><?php echo $shipmentdata->OrderDeliveryDate; ?></h5>
									</br>
									<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
								</div>
							<?php endforeach; ?>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 status-bar">
									<div class="progress progress-striped active skillbar clearfix" data-percent="<?php echo $datapercent; ?>">
										<div class="progress-bar skillbar-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style=>
										</div>
									</div>
									<script>
									jQuery(document).ready(function(){
										jQuery('.skillbar').each(function(){
											jQuery(this).find('.skillbar-bar').animate({
												width:jQuery(this).attr('data-percent')
											},7000);
										});
									});
									</script>								
								</div>
							</div>
							<div class="row order-table">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="table-responsive">          
									<table class="table">
										<thead>
										<tr class="bg-info">
											<th>Product Name</th>
											<th>Cover Image</th>
											<th>Author</th>
											<th>Price</th>
											<th>Language</th>
											<th>Edition</th>
											<th>Quantity</th>
										</tr>
										</thead>
										<tbody>
										<?php foreach ($orderlineitem as $lineitemdata): ?>
											<tr>
												<td><?php echo $lineitemdata->ItemName; ?></td>
												<td><img src="<?php echo base_url(); ?>assets/productthumb/<?php echo $lineitemdata->ProductThumbImage; ?>" class="img-responsive" style="height:200px;width:150px;"/>
												</td>
												<td><?php echo $lineitemdata->ItemAuther; ?></td>
												<td><del>Rs.<?php echo $lineitemdata->ItemRetailPrice; ?>/</del>--<?php echo $lineitemdata->ItemDiscount; ?>%</br><em class="item_price">Rs.<?php echo $lineitemdata->ItemSellingPrice; ?>/- </em></td>
												<td><?php echo $lineitemdata->ProductLanguage; ?></td>
												<td><?php echo $lineitemdata->ItemEdition; ?></td>
												<td><?php echo $lineitemdata->ItemQuantity; ?></td>
											</tr>
										<?php endforeach; ?>
										</tbody>
									</table>
								</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
									<h3><strong>Total : </strong>Rs. <?php echo $TotalOrderAmount; ?>/-&nbsp; | <strong>Payment Method : </strong><?php echo $PaymentMode; ?> </h3>
									</br>
									<a href="<?php echo base_url(); ?>home/orderhistory/">&larr; Back to Order History</a>
								</div>
							</div>
						</div>
					</div>
				<!--contact-->
			</div>
		<!--content-->