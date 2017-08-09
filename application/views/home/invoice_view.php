<!DOCTYPE HTML>
<html>
<head>
<title>Biva Publication</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<!--css-->
	<link rel="icon" href="<?php echo base_url(); ?>favicon.ico" type="image/x-icon">
		
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
	
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
	
	<link href="<?php echo base_url(); ?>assets/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"/>
	
	<link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">
	
	<link href="<?php echo base_url(); ?>assets/css/star-rate.css" rel="stylesheet">

	<link href="<?php echo base_url(); ?>assets/css/free-sample.css" rel="stylesheet">

		<!-- best seller slider -->
				<link href="<?php echo base_url(); ?>assets/css/best-seller.css" rel="stylesheet">
		<!-- best seller slider -->

	<!--css-->



	<!-- Js -->
	<script type="application/x-javascript"> 
	addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
	</script>
	
	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Russo+One|Ubuntu" rel="stylesheet">
	<!-- Fonts -->

	<!--search jQuery-->
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
	<!--search jQuery-->

		<script src="assets/js/responsiveslides.min.js"></script>
		 <script>
			$(function () {
			  $("#slider").responsiveSlides({
				auto: true,
				nav: true,
				speed: 500,
				namespace: "callbacks",
				pager: true,
			  });
			});
		 </script>
	<!--mycart-->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-3.1.1.min.js"></script>
	<!-- cart -->
	<script src="<?php echo base_url(); ?>assets/js/simpleCart.min.js"></script>
	<!-- cart -->

	
		<!-- owl js -->
	<script src="<?php echo base_url(); ?>assets/js/owl.carousel.js"></script>
	<!-- owl js -->
	<!--start-rate-->
	<script src="<?php echo base_url(); ?>assets/js/jstarbox.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
	<!-- Js -->

</head>
<body>
<!-- INVOICE PAGE -->
		<div class="container">
			<div class="row invoice-row">
				<div class="col-md-12 text-center">
					
					<h2>Invoice for Order #ORDBPH<?php echo $OrderId; ?></h2>
				</div>
				<div class="col-md-12 text-center sec-row">
					<h3>Items Ordered</h3>
				</div>
				<div class="col-md-12 text-center sec-row">
					<div class="table-responsive">          
						<table class="table">
							<thead>
								<tr>
									<th>Product Name</th>
									<th>Author</th>
									<th>Quantity</th>
									<th>Price</th>
									
								</tr>
							</thead>
							<tbody>
							<?php $totalAmount=0; ?>
							<?php foreach($orderlineitem as $lineitem): ?>
								<?php $totalAmount=$totalAmount+$lineitem->ItemSellingPrice; ?>
								<tr>
									<td><?php echo $lineitem->ItemName; ?></td>
									<td><?php echo $lineitem->ItemAuther; ?></td>
									<td><?php echo $lineitem->ItemQuantity; ?></td>
									<td>Rs. <?php echo $lineitem->ItemSellingPrice; ?>/-</td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-md-12 sec-row">
				<?php foreach($ordersummerydata as $smmerydata): ?>
					<div class="col-md-6 text-left">
						<h5>DELIVERY ADDRESS</h5>
						<p><?php echo $smmerydata->OrderShipAddressL1."<br/>".$smmerydata->OrderShipAddressL2."<br/>".$smmerydata->OrderShipAddressL3."<br/>".$smmerydata->OrderShipAddressL4."<br/>"; ?></p>
						<p><strong>CITY :</strong> <?php echo $smmerydata->OrderCity; ?></p>
						<p><strong>PIN :</strong> <?php echo $smmerydata->OrderZip; ?></p>
						<p><strong>PHONE :</strong> <?php echo $smmerydata->OrderPhone; ?></p>
					</div>
					<div class="col-md-6 text-right">
						<p>Order Amount RS: <?php echo $totalAmount; ?>/-</p>
						<p>Coupon Discount: <?php echo $smmerydata->OrderDiscount; ?>/-</p>
						<hr>
						<p>Total RS: <?php echo $totalAmount-$smmerydata->OrderDiscount; ?>/-</p>
						<hr>
						<p>Shipping Charge:<?php echo $smmerydata->OrderShipmentCharge; ?>/-</p>
						<hr>
						<h4>Total for this Delivery RS: <?php echo $smmerydata->OrderTotAmount; ?>/-</h4>
					</div>
				<?php endforeach; ?>
				</div>
				<div class="col-md-12 sec-row text-center">
					</br><h5>Thank you for placing an order at <span>www.bivapublication.com</span>
Looking forward to serve you again</h5></br>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
				<a href="javascript:window.history.back();	">&larr; Back to Order Details</a>
			</div>
		</div>
	<!-- INVOICE PAGE -->

</body>
</html>