
<!DOCTYPE HTML>
<html>
	<head>
		<title>Biva Publication</title>

		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

		<link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" type="image/x-icon">

		<link href="<?php echo base_url(); ?>assets/landing/css/bootstrap.css" rel='stylesheet' type='text/css' />

		<link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

		<script src="<?php echo base_url(); ?>assets/landing/js/jquery.min.js"></script>

		<script src="<?php echo base_url(); ?>assets/landing/js/bootstrap-3.1.1.min.js"></script>

		<!-- Custom Theme files -->

		<link href="<?php echo base_url(); ?>assets/landing/css/style_lan.css" rel='stylesheet' type='text/css' />

		<!-- Custom Theme files -->

		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
		<!---//webfonts--->
		<!---- start-smoth-scrolling---->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/landing/js/move-top.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/landing/js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		 <!---- start-smoth-scrolling---->
	</head>
	<body>
		<!---- container ---->
		<div class="container-fluid">
			<div class="row header-back">
			<!---- header ---->
				<div class="header">
					<div class="col-md-5 header-left">
						<!----sreen-gallery-cursual---->
							<div class="sreen-gallery-cursual">
								 <!-- requried-jsfiles-for owl -->
								<link href="<?php echo base_url(); ?>assets/landing/css/owl.carousel.css" rel="stylesheet">
									<script src="<?php echo base_url(); ?>assets/landing/js/owl.carousel.js"></script>
										<script>
									$(document).ready(function() {
									  $("#owl-demo").owlCarousel({
										items : 1,
										lazyLoad : true,
										autoPlay : true,
										navigation : false,
										navigationText :  false,
										pagination : true,
									  });
									});
									</script>
								 <!-- //requried-jsfiles-for owl -->
								 <!-- start content_slider -->
								   <div id="owl-demo" class="owl-carousel">
								   	<?php foreach($coverimages as $image): ?>
										<div class="item">
											<img src="<?php echo base_url(); ?>assets/coverbooks/<?php echo $image->coverbook; ?>" />
										</div>
									<?php endforeach; ?>
								  </div>
							<!--//sreen-gallery-cursual---->
					</div>
					</div>
					<div class="col-md-7 header-right">
						<a href="#"><img src="<?php echo base_url(); ?>assets/landing/images/mainlogo.png" class="img-responsive logo-main" title="value" /></a>
						<ul class="big-btns">
							<li><a class="btn btn-success" href="<?php echo base_url(); ?>home/buybooks/">BUY BOOKS</a></li>
							<li><a class="btn btn-success" href="#">BE AN AUTHOR</a></li>
							<li><a class="btn btn-success" href="free-sample.php">READ FREE SAMPLE</a></li>
							<li><a class="btn btn-success" href="<?php echo base_url(); ?>home/authorscorner/">AUTHORS CORNER</a></li>
							<li><a class="btn btn-success" href="#">GAMING ZONE</a></li>
						</ul>
						<!--<ul class="usefull-for">
							<li><a class="u-apple" href="#"><span> <i class="fa fa-facebook-official" aria-hidden="true"></i></span></a></li>
							<li><a class="u-and"href="#"><span> </span></a></li>
							<li><a class="u-windows" href="#"><span> </span></a></li>
						</ul>-->
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
			<!---- header ---->
			<!----- top-grids ----->
			<div class="top-grids">
				<div class="container">
					<div class="row">
						<!--<div class="col-md-12 text-left about-head">
							<h1>ABOUT US</h1>
							<h4>Once you learn to read, you will be forever free.</h4>
						</div>-->
						<div class="col-md-8 col-sm-9 ">
							<div class="text-left about-head">
								<h1>ABOUT US</h1>
								<h4>Once you learn to read, you will be forever free.</h4>
							</div>
							<div class="about-body">
							<p>&nbsp;&nbsp;&nbsp;BIVA Publication started on December 24, 2014 with a vision to establish a highly reputed and trust worthy publishing brand, capable to create internationally competitive books in Bengali with a price tag even lesser than a packet of cigarette, so that knowledge does not remain the prerogative of just a few people.</p>
							<p>&nbsp;&nbsp;&nbsp;Our books offer something for readers of every age. We believe whenever you read a book, somewhere in the world a door opens to allow in more light. Even the wildest fairy tales are more than true, not because they tell us that dragons exist, but because they tell us that dragons can also be defeated. Hence our tag line ''Imagination! Xperience ours, Xplore yours.'' held high with this ideology. </p>
							<p>&nbsp;&nbsp;&nbsp;We also truly believe that everybody does have a book in them, but in most cases that does not get a platform to blossom. Keeping that in mind BIVA Publication provides a unique self-publishing platform for new potential authors in the most affordable way.</p>
							</div>
							<!-- modal -->
							<!-- Trigger the modal with a button -->
							  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">WHY BIVA PUBLICATION</button>

							  <!-- Modal -->
							  <div class="modal fade" id="myModal" role="dialog">
								<div class="modal-dialog">

								  <!-- Modal content-->
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h3 class="modal-title">Why Us..</h3>
									</div>
									<div class="modal-body">
										<p>1.	BIVA Publication is a brand which provides book with internationally competitive quality.
										   Once you touch any of our products, you will feel the difference from other conventional publications.
										</p>
										<p>2.	Various ranges of our books offer something for readers of every age.     <a>View all products </a>
										</p>
										<p>3.	BIVA Publication provides high-quality books at the most affordable prices. Even some of our books 	cost you less than a packet of cigarette.    <a> View Discounted Products </a>
										</p>
										<p>4.	BIVA Classics comes with a 24 hours money return policy. If any of the book under Biva Classics category fails to satisfy your literally buds then on returning the book within 24 hours you will get you money back. This offer valid on purchase from Physical stores not from online.    <a>View all Biva Classics</a> </p>
										<p>5.	Only BIVA Publication offers you a unique way to judge our books before purchase. We offer free sample of our wide range of books to read.   <a>View Read Free Sample</a> </p>
										<p>6.	If you want to see your name on the title page of a book, then we are here to assist. BIVA Publication provides most trust worthy self-publishing platform for new authors to publish their books.    <a>View Publish</a></p>
										<p>7.	BIVA Publication offers online-offline Distribution services to all authors, publishers and Little Magazine groups from around the world.	   <a> View Books from Other Publishers </a></p>
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>

								</div>
							  </div>

						</div>
						<div class="col-md-4 col-sm-3 left-pic">
							<img src="<?php echo base_url(); ?>assets/landing/images/about-01.jpg" class="img-responsive img-thumbnail"/>
							<img src="<?php echo base_url(); ?>assets/landing/images/about-03.png" class="sign img-responsive center-block"/>
						</div>
					</div>
				</div>
			</div>
			<!----- top-grids ----->
			<!----- testmonials ---->
			<div class="testmonials">
				<div class="container">
					<script>
							    $(document).ready(function() {
							      $("#owl-demo2").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
							    </script>
							 <!-- //requried-jsfiles-for owl -->
							 <!-- start content_slider -->
						       <div id="owl-demo2" class="owl-carousel">
						       <?php foreach ($testimonial as $object): ?>
					                <div class="item">
					                	<div class="testmonial-grids">
					                		<div class="testmonial-head text-center">
					                			<img src="assets/landing/images/quit.png" title="name" />
												<h4><?php echo $object->day ?></h4>
					                			<p><?php echo $object->comment; ?></p>
					                		</div>
					                		<div class="testmonial-row">

					                			<div class="col-md-12 testmonial-grid">
					                				<div class="">
					                					<img src="<?php echo base_url(); ?>/assets/testimonial/<?php echo $object->image; ?>" class="img-responsive center-block" title="name" />
					                				</div>
					                				<!--<div class="t-people-right">
					                					<h4>Anthony Lagoon</h4>
					                					<span>photographer</span>
					                				</div>-->
					                				<div class="clearfix"> </div>
					                			</div>

					                			<div class="clearfix"> </div>
					                		</div>
					                	</div>
					                </div>
					            <?php endforeach; ?>
					                
				              </div>
						<!--//sreen-gallery-cursual---->
				</div>
			</div>
			<!----- testmonials ---->
			<!-- Experience free sample -->
			<div class="container-fluid">

				<div class="row top-grids sample">
					<div class="col-md-5 free-sample">
						<div class="">
							<!--<img src="images/free-05.png" class="img-responsive center-block"/>-->
						</div>
					</div>
					<div class="col-md-7">
						<div class="row">
							<div class="col-md-12 text-center">
								<h1>Experience Pages for FREE</h1></br>
								<h5>Only BIVA Publication offers you a unique way to judge our books before purchase. We offer free sample of our wide range of books to read.</h5>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<img src="<?php echo base_url(); ?>assets/landing/images/books-01.jpg" class="img-responsive img-thumbnail"/>
							</div>
							<div class="col-md-4">
								<img src="<?php echo base_url(); ?>assets/landing/images/books-02.jpg" class="img-responsive img-thumbnail"/>
							</div>
							<div class="col-md-4">
								<img src="<?php echo base_url(); ?>assets/landing/images/books-03.jpg" class="img-responsive img-thumbnail"/>
							</div>
							<div class="col-md-12 text-center">
								<a href="free-sample.php" type="button" class="btn btn-info btn-lg view-btn">Read Free Sample</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Experience free sample -->
			<!----- featrues-grids ---->
			<div class="testmonials">
				<div class="container">
					<div class="col-md-12 text-center"><h1 class="show-stoppers">FEW OF OUR SHOW-STOPPERS</h1></br></div>
					<script>
							    $(document).ready(function() {
							      $("#owl-demo3").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
							    </script>
							 <!-- //requried-jsfiles-for owl -->
							 <!-- start content_slider -->
						       <div id="owl-demo3" class="owl-carousel">
										 <?php foreach($stopperlist as $object): ?>
					                <div class="item">
					                	<div class="testmonial-grids">
					                		<!--<div class="testmonial-head text-center">
					                			<img src="images/quit.png" title="name" />
												<h4>Thu, 10 March 2016</h4>
					                			<p>"বিভা পাবলিকেশনের সযত্ন ও দৃষ্টিনন্দন ছাপা এবং আকর্ষণীয় প্রচ্ছদ যে কোনও পাঠকের নজর কাড়তে বাধ্য।"</p>
					                		</div>-->
					                		<div class="testmonial-row">

					                			<div class="col-md-6 testmonial-grid">
					                				<div class="">
					                					<img src="<?php echo base_url(); ?>assets/stopper/<?php echo $object->StoperImage; ?>" title="name" />
					                				</div>
					                				<!--<div class="t-people-right">
					                					<h4>Anthony Lagoon</h4>
					                					<span>photographer</span>
					                				</div>-->
					                				<div class="clearfix"> </div>
					                			</div>
					                			<div class="col-md-6 testmonial-grid">
													<h2><?php echo $object->StoperBookName; ?></h2>
													<p><?php echo $object->StoperBookDescription; ?></p>
												</div>
					                			<div class="clearfix"> </div>
					                		</div>
					                	</div>
					                </div>
												<?php endforeach; ?>
				              </div>
							  <div class="col-md-12 text-center">
									<a href="home.php" type="button" class="btn btn-info btn-lg view">VIEW MORE</a>
							  </div>
						<!--//sreen-gallery-cursual---->
				</div>
			</div>
			<!----- featrues-grids ---->

			<!----- notify
			<div class="notify">
				<div class="container">
					<div class="notify-grid">
						<img src="images/msg-icon.png" title="mail" />
						<h3>Get Notified of any updates!</h3>
						<p>Subscribe to our newsletter to be notified about new version release</p>
						<form>
							<input type="text" class="text" value="Your email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your email address';}">
							<input type="submit" value="Submit" />
						</form>
					</div>
				</div>
			</div>
			<!----- notify ---->
			<!-- Footer -->
			<div class="container-fluid">
				<div class="row top-grids">
					<div class="container">
						<div class="row foot">
							<div class="col-md-4">
								<h1>CONTACT US</h1>
								</br>
								<p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> &nbsp; +91 9434 343446</p>
								<p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> &nbsp; +91 9749 701988</p>
								<p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> &nbsp; +91 9903 308811</p>
								<p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> &nbsp; biva.publications@gmail.com</p>
							</div>
							<div class="col-md-4">
								<h1>Quick Links</h1>
								<ul style="margin:0;padding:0;list-style:none">
									<li style="list-style:none"><a href="<?php echo base_url(); ?>home/buybooks/" style="color:#fff; text-decoration:none;">Buy Books</a></li>
									<li style="list-style:none"><a href="#" style="color:#fff; text-decoration:none;">Be An Autor</a></li>
									<li style="list-style:none"><a href="free-sample.php" style="color:#fff; text-decoration:none;">Read Free Sample</a></li>
									<li style="list-style:none"><a href="#" style="color:#fff; text-decoration:none;">Authors Corner</a></li>
									<li style="list-style:none"><a href="#" style="color:#fff; text-decoration:none;">Gaming Zone</a></li>

								</ul>
							</div>
							<div class="col-md-4">
								<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FBivaPublication%2F&tabs=timeline&width=270&height=230&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=140497739811252" width="270" height="230" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer -->


			<!----- social-icons ---->
			<div class="social-icons">
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
				</div>
				<!---- footer-links ---->
				<div class="footer-links">
				<h4>Copyright © 2017 | All Rights Reserved.</h4>
					<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear'
								 		};
										*/

										$().UItoTop({ easingType: 'easeOutQuart' });

									});
								</script>
									<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				</div>
				<!---- footer-links ---->
			</div>
			<!----- social-icons ---->
		</div>
		<!---- container ---->
	</body>
</html>
