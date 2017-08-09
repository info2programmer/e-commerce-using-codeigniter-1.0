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

	<script src="<?php echo base_url(); ?>assets/js/responsiveslides.min.js"></script>
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
	<script type="<?php echo base_url(); ?>text/javascript" src="assets/js/bootstrap-3.1.1.min.js"></script>
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
	<!--header-->
	<div class="header">

		<div class="">
			<div class="container">
				<div class="logo-nav">
					<div class="col-sm-12">
						<img src="<?php echo base_url(); ?>assets/landing/images/mainlogo.png" class="img-responsive center-block" />

					</div>

				</div>
			</div>
		</div>
	</div>
	<!--header-->

	<!--content-->
	<div class="content">
		<!--contact-->
		<div class="mail-w3ls">
			<div class="container">
				<div class="col-sm-12 text-center" style="margin-top:100px; font-size:45px; color:#00aeef;"><i class="fa fa-spinner fa-pulse fa-3x fa-fw" aria-hidden="true"></i></div>
				<div class="col-sm-12 text-center" style="margin-top:10px;"><h3>"You are redirected to secured CCAvenue page to complete the payment.</br>
					There you can choose from multiple online payment methods like Credit Card, Debit Card, Net Banking, Paytm Wallet etc. Thanks."</h3></div>

					<form method="post" name="customerData" action="ccavRequestHandler.php">
						<table width="40%" height="100" border='0' align="center"><caption><font size="4" color="blue"></font></caption></table>
						<table width="40%" height="100" border='0' align="center">
							<tr>

							</tr>
							<tr>

							</tr>
							<tr>
								<td><input type="hidden" name="tid" id="tid" readonly /></td>
							</tr>
							<tr>
								<td><input type="hidden" name="merchant_id" value="74902"/></td>
							</tr>
							<tr>
								<td><input type="hidden" name="order_id" value="<?php echo "#ORDBPH".$orderid; ?>"/></td>
							</tr>
							<tr>
								<td><input type="hidden" name="amount" value="<?php echo $totalprice.".00"; ?>"/></td>
							</tr>
							<tr>
								<td><input type="hidden" name="currency" value="INR"/></td>
							</tr>
							<tr>
								<td><input type="hidden" name="redirect_url" value="http://bivapublication.com/ccavResponseHandler.php"/></td>
							</tr>
							<tr>
								<td><input type="hidden" name="cancel_url" value="http://bivapublication.com/error.php?Status=Error"/></td>
							</tr>
							<tr>
								<td><input type="hidden" name="language" value="EN"/></td>
							</tr>
							<tr>
								<td><input type="hidden" name="billing_name" value="<?php echo $orderby; ?>"/></td>
							</tr>
							<tr>
								<td><input type="hidden" name="billing_address" value="<?php echo $address; ?>"/></td>
							</tr>
							<tr>
								<td><input type="hidden" name="billing_city" value="<?php echo $city; ?>"/></td>
							</tr>
							<tr>
								<td><input type="hidden" name="billing_state" value="<?php echo $state; ?>"/></td>
							</tr>
							<tr>
								<td><input type="hidden" name="billing_zip" value="<?php echo $pin; ?>"/></td>
							</tr>
							<tr>
								<td><input type="hidden" name="billing_country" value="India"/></td>
							</tr>
							<tr>
								<td><input type="hidden" name="billing_tel" value="<?php echo $phone; ?>"/></td>
							</tr>
							<tr>
								<td><input type="hidden" name="billing_email" value="<?php echo $email; ?>"/></td>
							</tr>
							<tr>
								<td><input type="hidden" name="delivery_name" value="<?php echo $orderby; ?>"/></td>
							</tr>
							<tr>
								<td><input type="hidden" name="delivery_address" value="<?php echo $address; ?>"/></td>
							</tr>
							<tr>
								<td><input type="hidden" name="delivery_city" value="<?php echo $city; ?>"/></td>
							</tr>
							<tr>
								<td><input type="hidden" name="delivery_state" value="<?php echo $state; ?>"/></td>
							</tr>
							<tr>
								<td><input type="hidden" name="delivery_zip" value="<?php echo $pin; ?>"/></td>
							</tr>
							<tr>
								<td><input type="hidden" name="delivery_country" value="India"/></td>
							</tr>
							<tr>
								<td><input type="hidden" name="delivery_tel" value="<?php echo $phone; ?>"/></td>
							</tr>
							<tr>
								<td></td><td align="Center">
								<div class="col-sm-12 text-center" style="margin-top:20px;"><button class="btn btn-warning btn-lg" type="submit">CONTINUE <i class="fa fa-caret-square-o-right" aria-hidden="true"></i></button></div></td>
							</tr>
						</table>
					</form>	
				</div>
			</div>
			<!--contact-->
		</div>
		<!--content-->
		<script>document.customerData.submit();</script>
	</body>
	</html>