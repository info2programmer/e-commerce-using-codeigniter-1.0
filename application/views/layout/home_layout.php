<!DOCTYPE HTML>
<html>
<head>
	<title>Biva Publication</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="biva publication,online book, best book in kolkata," />

	<!--css-->
	<link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" type="image/x-icon">

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
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-3.1.1.min.js"></script>

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
	<!-- Best seller slider -->
	<script src="<?php echo base_url(); ?>assets/js/best-seller.js"></script>
	<!-- Best seller slider -->
	<!-- Js -->
	<!--//End-rate-->
	<!-- for Dropdown hover-->
	<style>
	</style>
	<!-- for Dropdown hover-->


</head>
<body>
	<!--header-->
	<div class="header">
		<div class="header-top">
			<div class="container">
				<div class="top-left">
					<a href="#"> Help  <i class="glyphicon glyphicon-phone" aria-hidden="true"></i> +91 9434 343446</a>&nbsp;&nbsp;&nbsp;&nbsp;

					<a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
					<div id="cd-search" class="cd-search">
						<form action="<?php echo base_url(); ?>home/search" method="post">
							<input type="text" placeholder="Search..." name="txtSearch">
						</form>
					</div>
				</div>

				<div class="top-right">
					<ul>
						<li class="dropdown">
							<a href="" class="dropdown-toggle dropbtn" data-toggle="dropdown">
							<?php if($this->session->userdata('userlogin')): ?>Hello, <?php echo $this->session->userdata('firstname'); ?><?php else: ?> Hello, Readers <?php endif; ?> <b class="caret"></b>
							</a>
							<ul class="dropdown-menu multi-column-dropdown dropdown-content">
								<?php if(!$this->session->userdata('userlogin')): ?><li><a data-target="#ModalLogin" data-toggle="modal" style="cursor: pointer;"> <i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;&nbsp; Sign In</a></li><?php endif; ?>
								<?php if($this->session->userdata('userlogin')): ?><li><a href="<?php echo base_url(); ?>home/manageaccount"><i class='fa fa-user' aria-hidden='true'></i> &nbsp;&nbsp; Manage Account</a></li>
								<li><a href="<?php echo base_url(); ?>home/orderhistory"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp; Order History</a></li>
								<li><a href="<?php echo base_url(); ?>home/wishlist/"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;&nbsp; Wishlist</a></li><?php endif; ?>
								<?php if($this->session->userdata('userlogin')): ?><li><a href="<?php echo base_url(); ?>home/logout"> <i class="glyphicon glyphicon-log-out" aria-hidden="true"></i>&nbsp;&nbsp; Sign Out</a></li><?php endif; ?>
							</ul>
						</li>
						<?php if($this->session->userdata('userlogin')): ?><li><a href="<?php echo base_url(); ?>home/orderhistory" style="cursor:pointer;">Track Order</a></li><?php endif; ?>
						<?php if(!$this->session->userdata('userlogin')): ?><li><a data-target="#ModalLogin" data-toggle="modal" data-key="track" style="cursor: pointer;">Track Order</a></li><?php endif; ?>
						<li><a href="<?php echo base_url(); ?>home/cart"> <p> <div class="total" id="total"><img src="<?php echo base_url(); ?>/assets/images/rupees.png" />
							<?php
								  $count = 0;
								  foreach($this->cart->contents() as $items)
								  {
								  	$count++;
								  }
								  if($count == 0)
								  {
								   echo "<span class=''></span> 0 (<span id='' class=''></span>0 items)</div>";
								  }
								  else{
								  	echo "<span class=''></span> ".$this->cart->total()." (<span id='' class=''></span> ".$count++." items)</div>";
								  }
							?>
							<img src="<?php echo base_url(); ?>assets/images/bag.png" alt="" />
						</p></a></li>

						<li>
						<?php if($this->session->userdata('userlogin')): ?>
							<a href="<?php echo base_url(); ?>home/bivapoints"> <p> <div class="total" id="total">
							 <div class="total" id="total">
							<img src="<?php echo base_url(); ?>/assets/images/wallet.png" />
							(<?php $this->home_model->calculateBP(); ?> </div> Biva Points)
						<?php else: ?>
							<a href="javascript:void(0);"  onclick="alert('You Should Login First');"> <p> <div class="total" id="total">
							<img src="<?php echo base_url(); ?>/assets/images/wallet.png" />
							(0 </div> Biva Points)
						<?php endif; ?>
						</p></a></li>

					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="heder-bottom">
			<div class="container">
				<div class="logo-nav">
						<!--<div class="logo-nav-left navbar-brand">
							<a href="index.php" ><img src="assets/images-ori/bp.png" class="img-responsive" /></a>
						</div>-->
						<div class="">
							<nav class="navbar navbar-default">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header nav_2">
									<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a href="<?php echo base_url(); ?>" class="navbar-brand"><img src="<?php echo base_url(); ?>assets/images-ori/bp.png" class="img-responsive" /></a>
								</div>
								<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
									<ul class="nav navbar-nav navbar-right">
										<li><a href="<?php echo base_url(); ?>home/buybooks/" class="act">Buy Books</a></li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Products<b class="caret"></b></a>
											<ul class="dropdown-menu multi-column columns-3 dropdown-content">


												<ul class="multi-column-dropdown">
												<?php
												$this->load->library('encrypt');
												// $enc_username=$this->encrypt->encode($homevalueformoney->Product_Id);
												// $enc_username=str_replace(array('+', '/', '='), array('-', '_', '~'), $enc_username);
												?>
													<div class="row">
														<div class="col-sm-6">
																<ul class="multi-column-dropdown">
																	<?php
																	$i=0;
																	foreach($navcategory as $category){

																if($i<7){
																	$i=$i+1;
																		$CategoryId=$this->encrypt->encode($category->CategoryId);
																	$CategoryId=str_replace(array('+', '/', '='), array('-', '_', '~'), $CategoryId);
																	$CategoryName=$this->encrypt->encode($category->CategoryName);
																	$CategoryName=str_replace(array('+', '/', '='), array('-', '_', '~'), $CategoryName);
																	echo "<li><a href='".base_url()."home/category/".$CategoryId."/".$CategoryName."'>".$category->CategoryName."</a></li>";
																	echo "<li class='divider'></li>";
																		}
																		else{
																			//echo "<script>alert('".$i."');</script>";
																			$i=0;
																			echo "</ul></div>";
																			echo "<div class='col-sm-6'>
																			<ul class='multi-column-dropdown'>";
																		}
																	}

																	?>
																</ul>
															</div>
												</ul>

<!--<div class="col-sm-6">
<ul class="multi-column-dropdown">

</ul>
</div>-->
<!--<div class="col-sm-3">
<a href="products.php"><img src="assets/images/woo.jpg" class="img-responsive" alt=" "/></a>
</div>
<div class="col-sm-3">
<a href="products.php"><img src="assets/images/woo.jpg" class="img-responsive" alt=" "/></a>
</div>-->

</ul>
</li>
<li><a href="#" class="act">Other Literary Works</a></li>
<li><a href="<?php echo base_url(); ?>home/aboutus">About Us</a></li>
<li><a href="<?php echo base_url(); ?>home/contactus">Contact Us</a></li>
</ul>
</div>
</nav>
</div>
						<!--<div class="logo-nav-right">
							<ul class="cd-header-buttons">
								<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
							</ul> <!-- cd-header-buttons
							<div id="cd-search" class="cd-search">
								<form action="#" method="post">
									<input name="Search" type="search" placeholder="Search...">
								</form>
							</div>
						</div>-->
						<!--<div class="header-right2">
							<div class="cart box_1">
								<a href="checkout.html">
									<h3> <div class="total">
										<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
										<img src="assets/images/bag.png" alt="" />
									</h3>
								</a>
								<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
								<div class="clearfix"> </div>
							</div>
						</div>-->

					</div>
				</div>
			</div>
		</div>
		<!--header-->

		<?php $this->load->view($main_view); ?>

		<!--content-->
		<!---footer-->
		<div class="footer-w3l">
			<div class="container">
				<div class="footer-grids">
					<div class="col-md-4 footer-grid">
						<h4>CONTACT US</h4>
					</br>
					<p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> &nbsp; +91 9434 343446</p>
					<p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> &nbsp; +91 9749 701988</p>
					<p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> &nbsp; +91 9903 308811</p>
					<p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> &nbsp; biva.publications@gmail.com</p>
				</br>
			</div>
			<div class="col-md-4 footer-grid">
				<h4>Quick Links</h4>
				<ul>
					<li><a href="<?php echo base_url(); ?>home/buybooks/">Buy Books</a></li>
					<li><a href="#">Be An Autor</a></li>
					<li><a href="free-sample.php">Read Free Sample</a></li>
					<li><a href="<?php echo base_url(); ?>home/authorscorner/">Authors Corner</a></li>
					<li><a href="#">Gaming Zone</a></li>

				</ul>

			</div>

			<div class="col-md-4 footer-grid foot" style="height: 230px;">
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FBivaPublication%2F&tabs=timeline&width=270&height=230&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=140497739811252" width="270" height="230" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
			</div>
			<div class="clearfix"> </div>
		</div>
 		</div>
		</div>
<!---footer-->
<!--copy-->
<!---footer-->
<!--copy-->
<div class="my-icons">
	<div class="container">

		<ul>
			<li><a class="facebook" href="https://www.facebook.com/BivaPublication/" target="_blank"><img src="<?php echo base_url(); ?>assets/landing/images/icon1.png"></a></li>
			<li>|</li>
			<li><a class="twitter" href="https://twitter.com/BivaPublication" target="_blank"><img src="<?php echo base_url(); ?>assets/landing/images/icon2.png"></a></li>
			<li>|</li>
			<li><a class="vemeo" href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/landing/images/icon3.png"></a></li>
			<li>|</li>
			<li><a class="pin" href="#" target="_blank"><img src="<?php echo base_url(); ?>assets/landing/images/icon4.png"></a></li>
			<div class="clearfix"> </div>
		</ul>

		<div class="">
			<h4>Copyright © 2017 | All Rights Reserved. </h4>
		</div>

		<div class="clearfix"></div>
	</div>
</div>
<!--copy-->

<!-- MODAL -->
<!-- Modal Login start -->
<div class="modal signUpContent fade" id="ModalLogin" tabindex="-1" role="dialog">
	<div class="modal-dialog ">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
				<h3 class="modal-title-site text-center"> Login to BIVA PUBLICATION </h3>
			</div>
			<div class="modal-body">
				<div class="form-group login-email">
					<div>
						<input  id="login-user" class="form-control input" size="20"
						placeholder="Enter Email" type="text">
					</div>
				</div>
				<div class="form-group login-password">
					<div>
						<input id="login-password" class="form-control input" size="20"
						placeholder="Password" type="password">
					</div>
				</div>
					<div>
						<div>
							<button name="submit" class="btn btn-block btn-lg btn-primary" onclick="checklogin()"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</button>
						</div>
					</div>
					<!--userForm-->

				</div>
				<div class="modal-footer">
					<p class="text-center"> Not here before? <a data-toggle="modal" data-dismiss="modal"
						href="#ModalSignup" class="sign"> Sign Up. </a> <br>
						<a data-toggle="modal" data-dismiss="modal" href="#Modalpassword"> Forgot password?</a></p>
					</div>
				</div>
				<!-- /.modal-content -->

			</div>
			<!-- /.modal-dialog -->

		</div>
		<!-- /.Modal Login -->
		<!-- Modal Signup start -->
		<div class="modal signUpContent fade" id="ModalSignup" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
						<h3 class="modal-title-site text-center"> REGISTER </h3>
					</div>
					<div class="modal-body">
    <!--<div class="control-group"><a class="fb_button btn  btn-block btn-lg " href="#"> SIGNUP WITH
        FACEBOOK </a></div>
        <h5 style="padding:10px 0 10px 0;" class="text-center"> OR </h5>-->


        <div class="form-group reg-email">
        	<div>
        		<input name="reg" class="form-control input" size="20" placeholder="Enter Email (user Id)" id="txtEmail" type="text">
        	</div>
        </div>
        <div class="form-group reg-phone">
        	<div>
        		<input name="phone" class="form-control input" size="20" id="txtPhone" placeholder="Enter Phone Number"
        		type="text">
        	</div>
        </div>
        <div class="form-group">
        	<div>
        		<input name="dob" class="form-control input" type="date" id="txtDateofBirth" size="20" placeholder="Enter Date Of Birth" />
        	</div>
        </div>
        <div class="form-group reg-password">
        	<div>
        		<input name="password" class="form-control input" id="txtPassword" size="20" placeholder="Password"
        		type="password">
        	</div>
        </div>
        <div class="form-group reg-password">
        	<div>
        		<input name="re-password" class="form-control input" id="txtrepassword"  size="20" placeholder="Retype Password"
        		type="password">
        	</div>
        </div>
        	<div>
        		<div>
        			<button class="btn  btn-block btn-lg btn-primary" id="btnRegister" onclick="register()"> REGISTER</button>
        		</div>
        	</div>
        	<!--userForm-->

        </div>
        <div class="modal-footer">
        	<p class="text-center"> Already member? <a data-toggle="modal" data-dismiss="modal" href="#ModalLogin" class="sign">
        		Sign in </a></p>
        	</div>
        </div>
        <!-- /.modal-content -->

    </div>
    <!-- /.modal-dialog -->

</div>
<!-- /.ModalSignup End -->
<!-- modal Forgot Password -->
<div class="modal signUpContent fade" id="Modalpassword" tabindex="-1" role="dialog">
	<div class="modal-dialog ">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
				<h3 class="modal-title-site text-center"> <i class="fa fa-unlock-alt"> </i> Forgot your password?</h3>
			</div>
			<div class="modal-body">
				<p> To reset your password, enter the email address you use to sign in to site. We will then send
					you a new link to change your password. </p></br>

					<form role="form">
						<div class="form-group">
							<label for="exampleInputEmail1"> Email address </label>
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
						</div>
						<div class="col-md-4"><button type="button" class="btn btn-primary pull-right btn-block" id="retrive-button"> SEND
						</button></div>
						<div class="col-md-4"><a href="password-change.php" type="button" class="btn btn-primary pull-left btn-block" id="retrive-button"><i class="fa fa-unlock"> </i> Retrieve Password
						</a></div>
						<div class="col-md-4"></div>
					</form>



					<!--userForm-->

				</div>
				<div class="modal-footer">
					<div class="clear clearfix">
						<ul class="pager">
							<li class="previous pull-right"><a href="account.php"> &larr; Back to Login </a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /.modal-content -->

		</div>
		<!-- /.modal-dialog -->

	</div>

	<!-- modal Forgot Password -->
	<!-- MODAL -->

	<script>
		function checklogin(){
			var useremail=$('#login-user').val();
			var password=$('#login-password').val();
			var data={'username':useremail,'password':password};
			var urls="<?php echo base_url(); ?>home/do_login";

			$.ajax({
				'type':'post',
				'data' : data,
				'url' : urls,
				'beforeSend' : function(){},
				'success' : function(data){
					if(data=="OK"){
						location.reload();
					}
					else{
						alert('Incorrect Username And Password');
					}
				}

			});
		}

		function register(){
			var email=$('#txtEmail').val();
			var phone=$('#txtPhone').val();
			var password=$('#txtPassword').val();
			var repassword=$('#txtrepassword').val();
			var dateofbirth=$('#txtDateofBirth').val();
			if(email!=null && phone!=null && password!=null && repassword!=null && dateofbirth!=null){
				if(password!=repassword){
					alert("Password And Re Password Should be Same");
				}
				else{
					var data={'email':email,'phone':phone,'password':password,'repassword':repassword,'dateofbirth':dateofbirth};
					var urls="<?php echo base_url(); ?>home/user_registation";
					$.ajax({
						'type':'post',
						'data' : data,
						'url' : urls,
						'beforeSend' : function(){
							document.getElementById("btnRegister").innerHTML="<i class='fa fa-spinner fa-spin'></i> Register";
							document.getElementById("btnRegister").setAttribute("disabled", "disabled");
							//
						},
						'success' : function(data){
							if(data=="OK"){
								alert("Success! Please check your inbox or spam box to verify your account");
								location.reload();
							}
							else if(data=="validationerror"){
								document.getElementById("btnRegister").innerHTML="Register";
								document.getElementById("btnRegister").removeAttribute("disabled");
								alert("Validation Error");
							}
							else if(data=="emailexist"){
								document.getElementById("btnRegister").innerHTML="Register";
								document.getElementById("btnRegister").removeAttribute("disabled");
								alert("Email Already Exist ");
							}
						}

					});
				}
			}
			else{
				alert("Better Check Yourself");
			}
		}
	</script>


</body>
</html>
