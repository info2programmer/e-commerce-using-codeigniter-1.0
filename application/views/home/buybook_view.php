<!--banner-->
<div class="banner-w3">
	<div class="demo-1">            
		<div id="example1" class="core-slider core-slider__carousel example_1">
			<div class="core-slider_viewport">
				<div class="core-slider_list">
					<?php foreach($banner_load as $banner): ?>
						<div class="core-slider_item">
						<img src="<?php echo base_url(); ?>assets/Banner/<?php echo $banner->BannerImage; ?>" class="img-responsive" alt="">
						</div>
					<?php endforeach; ?>
				 </div>
			</div>
			<div class="core-slider_nav">
				<div class="core-slider_arrow core-slider_arrow__right"></div>
				<div class="core-slider_arrow core-slider_arrow__left"></div>
			</div>
			<div class="core-slider_control-nav"></div>
		</div>
	</div>
	<link href="<?php echo base_url(); ?>assets/css/coreSlider.css" rel="stylesheet" type="text/css">
	<script src="<?php echo base_url(); ?>assets/js/coreSlider.js"></script>
	<script>
	$('#example1').coreSlider({
	  pauseOnHover: false,
	  interval: 3000,
	  controlNavEnabled: true
	});

	</script>

</div>	
<!--banner-->
<!--content-->
		<div class="content">
			<!--VALUE FOR MONEY-->
				<div class="new-arrivals-w3agile">
					<div class="container">
						<!--<h2 class="tittle">VALUE FOR MONEY</h2>-->
						<?php $this->load->library('encrypt');?>
						<?php 
							$CategoryId=$this->encrypt->encode('2');
							$CategoryId=str_replace(array('+', '/', '='), array('-', '_', '~'), $CategoryId); 

							$categoryname=$this->encrypt->encode('VALUE FOR MONEY');
							$categoryname=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryname);

							//<?php echo $categoryname; ?
						 ?>
						<div class="col-md-12 common" style="">
						<div class="row main-cont" style="">
						<div class="col-lg-4 col-md-4  line common" style=""></div>
						<div class="col-lg-4 col-md-4 common" style=""><h3 class="">VALUE FOR MONEY</h3></div>
						<div class="col-lg-2 col-md-2  line common" style=";"></div>
						<div class="col-lg-2 col-md-2 common" style=";"><a href="<?php echo base_url();?>home/category/<?php echo $CategoryId; ?>/<?php echo $categoryname; ?>" class="btn btn default view-button"><h4><i class="fa fa-plus-square-o" aria-hidden="true"></i>&nbsp; View All</h4></a></div>
						<!--<a href="#" class="btn btn default view-button"><h4><i class="fa fa-plus-square-o" aria-hidden="true"></i>&nbsp; View All</h4></a>-->
						</div>
						</div>
						<div class="arrivals-grids">
							<?php foreach ($homevalueformoneys as $homevalueformoney): ?>
								<?php
										$this->load->library('encrypt');
										$enc_username=$this->encrypt->encode($homevalueformoney->Product_Id);
										$enc_username=str_replace(array('+', '/', '='), array('-', '_', '~'), $enc_username);
								?>
							<div class="col-lg-13 col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="<?php echo base_url(); ?>home/product/<?php echo $enc_username;?>" class="new-gri" data-toggle="" data-target="">
												<div class="grid-img">
													<img  src="<?php echo base_url(); ?>assets/productthumb/<?php echo $homevalueformoney->ProductThumbImage ?>" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="<?php echo base_url(); ?>assets/productthumb/<?php echo $homevalueformoney->ProductThumbImage ?>" class="img-responsive"  alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									<!--<div class="ribben">
										<p>NEW</p>
									</div>
									<div class="ribben1">
										<p>SALE</p>
									</div>-->
									<!--<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>-->
									<div class="women">
									
										<h6><a href="<?php echo base_url(); ?>home/product/<?php echo $enc_username;?>"><?php echo substr($homevalueformoney->ProductName,0,15); ?></a></h6>
										<!--<span class="size">XL / XXL / S </span>-->
										<p ><del>Rs:<?php echo $homevalueformoney->ProductRetailPrice; ?>/-</del>--<?php echo $homevalueformoney->ProductDiscount; ?>%&nbsp;<em class="item_price">Rs.<?php echo $homevalueformoney->ProductSellingPrice; ?>/-</em></p>
										<p class="text-center"><b>Author :</b> <?php echo substr($homevalueformoney->ProductAuther,0,15); ?>  </br> <b> Language: </b><?php echo $homevalueformoney->ProductLanguage; ?></br><b>Binding</b> : <?php echo $homevalueformoney->ProductBinding; ?> </p>
										<!--<a href="product-single.php" data-text="Add To Cart" class="my-cart-b item_add">VIEW THIS</a>
										<a href="cart.php" data-text="Add To Cart" class="my-cart-b item_add">ADD TO Cart</a>-->
									</div>
								</div>
							</div>
							<?php endforeach; ?>
					</div>
				</div>
			<!-- VALUE FOR MONEY -->
			
			<!--PRE ORDER-->
				<div class="new-arrivals-w3agile">
					<div class="container">
						<!--<h2 class="tittle">VALUE FOR MONEY</h2>-->
						<?php 
							$CategoryId=$this->encrypt->encode('3');
							$CategoryId=str_replace(array('+', '/', '='), array('-', '_', '~'), $CategoryId); 

							$categoryname=$this->encrypt->encode('PRE ORDER');
							$categoryname=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryname);

							//<?php echo $categoryname; ?
						 ?>
						<div class="col-md-12 common" style="">
						<div class="row main-cont" style="">
						<div class="col-lg-4 col-md-4  line common" style=""></div>
						<div class="col-lg-4 col-md-4 common" style=""><h3 class="">PRE ORDER</h3></div>
						<div class="col-lg-2 col-md-2  line common" style=";"></div>
						<div class="col-lg-2 col-md-2 common" style=";"><a href="<?php echo base_url();?>home/category/<?php echo $CategoryId; ?>/<?php echo $categoryname; ?>" class="btn btn default view-button"><h4><i class="fa fa-plus-square-o" aria-hidden="true"></i>&nbsp; View All</h4></a></div>
						<!--<a href="#" class="btn btn default view-button"><h4><i class="fa fa-plus-square-o" aria-hidden="true"></i>&nbsp; View All</h4></a>-->
						</div>
						</div>
						<div class="arrivals-grids">
							<?php foreach ($homepreorders as $homepreorder): ?>
								<?php
										$this->load->library('encrypt');
										$enc_username=$this->encrypt->encode($homepreorder->Product_Id);
										$enc_username=str_replace(array('+', '/', '='), array('-', '_', '~'), $enc_username);
								?>
							<div class="col-lg-13 col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="<?php echo base_url(); ?>home/product/<?php echo $enc_username;?>" class="new-gri" data-toggle="" data-target="">
												<div class="grid-img">
													<img  src="<?php echo base_url(); ?>assets/productthumb/<?php echo $homepreorder->ProductThumbImage ?>" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="<?php echo base_url(); ?>assets/productthumb/<?php echo $homepreorder->ProductThumbImage ?>" class="img-responsive"  alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									<!--<div class="ribben">
										<p>NEW</p>
									</div>
									<div class="ribben1">
										<p>SALE</p>
									</div>-->
									<!--<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>-->
									<div class="women">
									
										<h6><a href="<?php echo base_url(); ?>home/product/<?php echo $enc_username;?>"><?php echo substr($homepreorder->ProductName,0,15); ?></a></h6>
										<!--<span class="size">XL / XXL / S </span>-->
										<p ><del>Rs:<?php echo $homepreorder->ProductRetailPrice; ?>/-</del>--<?php echo $homepreorder->ProductDiscount; ?>%&nbsp;<em class="item_price">Rs.<?php echo $homepreorder->ProductSellingPrice; ?>/-</em></p>
										<p class="text-center"><b>Author :</b> <?php echo substr($homepreorder->ProductAuther,0,15); ?>  </br> <b> Language: </b><?php echo $homepreorder->ProductLanguage; ?></br><b>Binding</b> : <?php echo $homepreorder->ProductBinding; ?> </p>
										<!--<a href="product-single.php" data-text="Add To Cart" class="my-cart-b item_add">VIEW THIS</a>
										<a href="cart.php" data-text="Add To Cart" class="my-cart-b item_add">ADD TO Cart</a>-->
									</div>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			<!-- PRE ORDER -->

			
			<!--NEW RELEASES-->
				<div class="new-arrivals-w3agile">
					<div class="container">
						<!--<h2 class="tittle">VALUE FOR MONEY</h2>-->
						<?php 
							$CategoryId=$this->encrypt->encode('4');
							$CategoryId=str_replace(array('+', '/', '='), array('-', '_', '~'), $CategoryId);

							$categoryname=$this->encrypt->encode('NEW RELEASES');
							$categoryname=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryname);

							//<?php echo $categoryname; ? 
						 ?>
						<div class="col-md-12 common" style="">
						<div class="row main-cont" style="">
						<div class="col-lg-4 col-md-4  line common" style=""></div>
						<div class="col-lg-4 col-md-4 common" style=""><h3 class="">NEW RELEASES</h3></div>
						<div class="col-lg-2 col-md-2  line common" style=";"></div>
						<div class="col-lg-2 col-md-2 common" style=";"><a href="<?php echo base_url();?>home/category/<?php echo $CategoryId; ?>/<?php echo $categoryname; ?>" class="btn btn default view-button"><h4><i class="fa fa-plus-square-o" aria-hidden="true"></i>&nbsp; View All</h4></a></div>
						<!--<a href="#" class="btn btn default view-button"><h4><i class="fa fa-plus-square-o" aria-hidden="true"></i>&nbsp; View All</h4></a>-->
						</div>
						</div>

						<div class="arrivals-grids">

							<?php foreach ($homenewreleasess as $homenewreleases): ?>
								<?php
										$this->load->library('encrypt');
										$enc_username=$this->encrypt->encode($homenewreleases->Product_Id);
										$enc_username=str_replace(array('+', '/', '='), array('-', '_', '~'), $enc_username);
								?>
							<div class="col-lg-13 col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="<?php echo base_url(); ?>home/product/<?php echo $enc_username;?>" class="new-gri" data-toggle="" data-target="">
												<div class="grid-img">
													<img  src="<?php echo base_url(); ?>assets/productthumb/<?php echo $homenewreleases->ProductThumbImage ?>" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="<?php echo base_url(); ?>assets/productthumb/<?php echo $homenewreleases->ProductThumbImage ?>" class="img-responsive"  alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									<!--<div class="ribben">
										<p>NEW</p>
									</div>
									<div class="ribben1">
										<p>SALE</p>
									</div>-->
									<!--<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>-->
									<div class="women">
									
										<h6><a href="<?php echo base_url(); ?>home/product/<?php echo $enc_username;?>"><?php echo substr($homenewreleases->ProductName,0,15); ?></a></h6>
										<!--<span class="size">XL / XXL / S </span>-->
										<p ><del>Rs:<?php echo $homenewreleases->ProductRetailPrice; ?>/-</del>--<?php echo $homenewreleases->ProductDiscount; ?>%&nbsp;<em class="item_price">Rs.<?php echo $homenewreleases->ProductSellingPrice; ?>/-</em></p>
										<p class="text-center"><b>Author :</b> <?php echo substr($homenewreleases->ProductAuther,0,15); ?>  </br> <b> Language: </b><?php echo $homenewreleases->ProductLanguage; ?></br><b>Binding</b> : <?php echo $homenewreleases->ProductBinding; ?> </p>
										<!--<a href="product-single.php" data-text="Add To Cart" class="my-cart-b item_add">VIEW THIS</a>
										<a href="cart.php" data-text="Add To Cart" class="my-cart-b item_add">ADD TO Cart</a>-->
									</div>
								</div>
							</div>
							<?php endforeach; ?>

							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<!-- NEW RELEASES -->
			
			
			<!--BIVA CLASSICS-->
				<div class="new-arrivals-w3agile">
					<div class="container">
						<!--<h2 class="tittle">VALUE FOR MONEY</h2>-->
						<?php 
							$CategoryId=$this->encrypt->encode('5');
							$CategoryId=str_replace(array('+', '/', '='), array('-', '_', '~'), $CategoryId); 

							$categoryname=$this->encrypt->encode('BIVA CLASSICS');
							$categoryname=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryname);

							//<?php echo $categoryname; ? 
						 ?>
						<div class="col-md-12 common" style="">
						<div class="row main-cont" style="">
						<div class="col-lg-4 col-md-4  line common" style=""></div>
						<div class="col-lg-4 col-md-4 common" style=""><h3 class="">BIVA CLASSICS</h3></div>
						<div class="col-lg-2 col-md-2  line common" style=";"></div>
						<div class="col-lg-2 col-md-2 common" style=";"><a href="<?php echo base_url();?>home/category/<?php echo $CategoryId; ?>/<?php echo $categoryname; ?>" class="btn btn default view-button"><h4><i class="fa fa-plus-square-o" aria-hidden="true"></i>&nbsp; View All</h4></a></div>
						<!--<a href="#" class="btn btn default view-button"><h4><i class="fa fa-plus-square-o" aria-hidden="true"></i>&nbsp; View All</h4></a>-->
						</div>
						</div>
						<div class="arrivals-grids">
						<?php foreach ($homebivaclassics as $homebivaclassic): ?>
								<?php
										$this->load->library('encrypt');
										$enc_username=$this->encrypt->encode($homebivaclassic->Product_Id);
										$enc_username=str_replace(array('+', '/', '='), array('-', '_', '~'), $enc_username);
								?>
							<div class="col-lg-13 col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="<?php echo base_url(); ?>home/product/<?php echo $enc_username;?>" class="new-gri" data-toggle="" data-target="">
												<div class="grid-img">
													<img  src="<?php echo base_url(); ?>assets/productthumb/<?php echo $homebivaclassic->ProductThumbImage ?>" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="<?php echo base_url(); ?>assets/productthumb/<?php echo $homebivaclassic->ProductThumbImage ?>" class="img-responsive"  alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									<!--<div class="ribben">
										<p>NEW</p>
									</div>
									<div class="ribben1">
										<p>SALE</p>
									</div>-->
									<!--<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>-->
									<div class="women">
									
										<h6><a href="<?php echo base_url(); ?>home/product/<?php echo $enc_username;?>"><?php echo substr($homebivaclassic->ProductName,0,15); ?></a></h6>
										<!--<span class="size">XL / XXL / S </span>-->
										<p ><del>Rs:<?php echo $homebivaclassic->ProductRetailPrice; ?>/-</del>--<?php echo $homebivaclassic->ProductDiscount; ?>%&nbsp;<em class="item_price">Rs.<?php echo $homebivaclassic->ProductSellingPrice; ?>/-</em></p>
										<p class="text-center"><b>Author :</b> <?php echo substr($homebivaclassic->ProductAuther,0,15); ?>  </br> <b> Language: </b><?php echo $homebivaclassic->ProductLanguage; ?></br><b>Binding</b> : <?php echo $homebivaclassic->ProductBinding; ?> </p>
										<!--<a href="product-single.php" data-text="Add To Cart" class="my-cart-b item_add">VIEW THIS</a>
										<a href="cart.php" data-text="Add To Cart" class="my-cart-b item_add">ADD TO Cart</a>-->
									</div>
								</div>
							</div>
							<?php endforeach; ?>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<!--BIVA CLASSICS-->
			
			<!-- THRILLER & ADVENTURE -->
				<div class="new-arrivals-w3agile">
					<div class="container">
						<!--<h2 class="tittle">VALUE FOR MONEY</h2>-->
						<?php 
							$CategoryId=$this->encrypt->encode('6');
							$CategoryId=str_replace(array('+', '/', '='), array('-', '_', '~'), $CategoryId); 

							$categoryname=$this->encrypt->encode('THRILLER & ADVENTURE');
							$categoryname=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryname);

							//<?php echo $categoryname; ? 
						 ?>
						<div class="col-md-12 common" style="">
						<div class="row main-cont" style="">
						<div class="col-lg-4 col-md-4  line common" style=""></div>
						<div class="col-lg-4 col-md-4 common" style=""><h2 class="">THRILLER & ADVENTURE</h2></div>
						<div class="col-lg-2 col-md-2  line common" style=";"></div>
						<div class="col-lg-2 col-md-2 common" style=";"><a href="<?php echo base_url();?>home/category/<?php echo $CategoryId; ?>/<?php echo $categoryname; ?>" class="btn btn default view-button"><h4><i class="fa fa-plus-square-o" aria-hidden="true"></i>&nbsp; View All</h4></a></div>
						<!--<a href="#" class="btn btn default view-button"><h4><i class="fa fa-plus-square-o" aria-hidden="true"></i>&nbsp; View All</h4></a>-->
						</div>
						</div>
						<div class="arrivals-grids">
						<?php foreach ($homethrillers as $homethriller): ?>
								<?php
										$this->load->library('encrypt');
										$enc_username=$this->encrypt->encode($homethriller->Product_Id);
										$enc_username=str_replace(array('+', '/', '='), array('-', '_', '~'), $enc_username);
								?>
							<div class="col-lg-13 col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="<?php echo base_url(); ?>home/product/<?php echo $enc_username;?>" class="new-gri" data-toggle="" data-target="">
												<div class="grid-img">
													<img  src="<?php echo base_url(); ?>assets/productthumb/<?php echo $homethriller->ProductThumbImage ?>" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="<?php echo base_url(); ?>assets/productthumb/<?php echo $homethriller->ProductThumbImage ?>" class="img-responsive"  alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									<!--<div class="ribben">
										<p>NEW</p>
									</div>
									<div class="ribben1">
										<p>SALE</p>
									</div>-->
									<!--<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>-->
									<div class="women">
									
										<h6><a href="<?php echo base_url(); ?>home/product/<?php echo $enc_username;?>"><?php echo substr($homethriller->ProductName,0,15); ?></a></h6>
										<!--<span class="size">XL / XXL / S </span>-->
										<p ><del>Rs:<?php echo $homethriller->ProductRetailPrice; ?>/-</del>--<?php echo $homethriller->ProductDiscount; ?>%&nbsp;<em class="item_price">Rs.<?php echo $homethriller->ProductSellingPrice; ?>/-</em></p>
										<p class="text-center"><b>Author :</b> <?php echo substr($homethriller->ProductAuther,0,15); ?>  </br> <b> Language: </b><?php echo $homethriller->ProductLanguage; ?></br><b>Binding</b> : <?php echo $homethriller->ProductBinding; ?> </p>
										<!--<a href="product-single.php" data-text="Add To Cart" class="my-cart-b item_add">VIEW THIS</a>
										<a href="cart.php" data-text="Add To Cart" class="my-cart-b item_add">ADD TO Cart</a>-->
									</div>
								</div>
							</div>
							<?php endforeach; ?>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<!-- THRILLER & ADVENTURE -->
			<!--banner-bottom-->
				<div class="ban-bottom-w3l">
					<div class="container">
						<div class="row">
							<div class="col-md-6 ban-bottom">
								<div class="ban-top">
								<?php 
									$CategoryId=$this->encrypt->encode('10');
									$CategoryId=str_replace(array('+', '/', '='), array('-', '_', '~'), $CategoryId); 

									$categoryname=$this->encrypt->encode('SCIENCE GENRE');
									$categoryname=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryname);

									//<?php echo $categoryname; ? 
						 		?>
									<a href="<?php echo base_url();?>home/category/<?php echo $CategoryId; ?>/<?php echo $categoryname; ?>"><img src="<?php echo base_url(); ?>assets/images/p-1.jpg" class="img-responsive" alt=""/>
									<div class="ban-text">
										<h4>SCIENCE GENRE</h4>
									</div></a>
									<!--<div class="ban-text2 hvr-sweep-to-top">
										<h4>50% <span>Off/-</span></h4>
									</div>-->
								</div>
							</div>
							<div class="col-md-6 ban-bottom3">
								<div class="ban-top">
									<?php 
									$CategoryId=$this->encrypt->encode('7');
									$CategoryId=str_replace(array('+', '/', '='), array('-', '_', '~'), $CategoryId); 

									$categoryname=$this->encrypt->encode('POEM & VERSE');
									$categoryname=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryname);

									//<?php echo $categoryname; ? 
						 			?>
									<a href="<?php echo base_url();?>home/category/<?php echo $CategoryId; ?>/<?php echo $categoryname; ?>"><img src="<?php echo base_url(); ?>assets/images/p-2.jpg" class="img-responsive" alt=""/>
									<div class="ban-text1">
										<h4>POEM & VERSE</h4>
									</div></a>
								</div>
								<div class="ban-img">
									<div class=" ban-bottom1">
										<div class="ban-top">
											<?php 
												$CategoryId=$this->encrypt->encode('8');
												$CategoryId=str_replace(array('+', '/', '='), array('-', '_', '~'), $CategoryId); 

												$categoryname=$this->encrypt->encode('ROMANCE GENRE');
												$categoryname=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryname);

												//<?php echo $categoryname; ?
									 		?>
											<a href="<?php echo base_url();?>home/category/<?php echo $CategoryId; ?>/<?php echo $categoryname; ?>"><img src="<?php echo base_url(); ?>assets/images/p-6.jpg" class="img-responsive" alt=""/>
											<div class="ban-text1">
												<h4>ROMANCE GENRE</h4>
											</div></a>
										</div>
									</div>
									<div class="ban-bottom2">
										<div class="ban-top">
											<?php 
												$CategoryId=$this->encrypt->encode('11');
												$CategoryId=str_replace(array('+', '/', '='), array('-', '_', '~'), $CategoryId);

												$categoryname=$this->encrypt->encode('SOCIAL DRAMA');
												$categoryname=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryname);

												//<?php echo $categoryname; ? 
									 		?>
											<a href="<?php echo base_url();?>home/category/<?php echo $CategoryId; ?>/<?php echo $categoryname; ?>">"><img src="<?php echo base_url(); ?>assets/images/p-5.jpg" class="img-responsive" alt=""/>
											<div class="ban-text1">
												<h4>SOCIAL DRAMA</h4>
											</div></a>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="row bottom-row">
							<div class="col-md-6 ban-bottom">
								<div class="ban-top">
									<?php 
										$CategoryId=$this->encrypt->encode('12');
										$CategoryId=str_replace(array('+', '/', '='), array('-', '_', '~'), $CategoryId); 


										$categoryname=$this->encrypt->encode('PHILOSOPHY & BELIEFS');
										$categoryname=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryname);

										//<?php echo $categoryname; ? 
							 		?>
									<a href="<?php echo base_url();?>home/category/<?php echo $CategoryId; ?>/<?php echo $categoryname; ?>"><img src="<?php echo base_url(); ?>assets/images/p-3.jpg" class="img-responsive" alt=""/>
									<div class="ban-text1">
										<h4>PHILOSOPHY & BELIEFS</h4>
									</div></a>
								</div>
							</div>
							
							<div class="col-md-6 ban-bottom">
								<div class="ban-top">
									<?php 
										$CategoryId=$this->encrypt->encode('9');
										$CategoryId=str_replace(array('+', '/', '='), array('-', '_', '~'), $CategoryId); 

										$categoryname=$this->encrypt->encode('TEENAGE CHILD FICTIONS');
										$categoryname=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryname);

										//<?php echo $categoryname; ?
							 		?>
									<a href="<?php echo base_url();?>home/category/<?php echo $CategoryId; ?>/<?php echo $categoryname; ?>"><img src="<?php echo base_url(); ?>assets/images/p-4.jpg" class="img-responsive" alt=""/>
									<div class="ban-text1">
										<h4>TEENAGE CHILD FICTIONS</h4>
									</div></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			<!--banner-bottom-->
			<!-- LITTLE MAGAZINE HUB -->
				<div class="new-arrivals-w3agile">
					<div class="container">
						<!--<h2 class="tittle">VALUE FOR MONEY</h2>-->
						<?php 
							$CategoryId=$this->encrypt->encode('13');
							$CategoryId=str_replace(array('+', '/', '='), array('-', '_', '~'), $CategoryId); 

							$categoryname=$this->encrypt->encode('LITTLE MAGAZINE HUB');
							$categoryname=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryname);
				 		?>
						<div class="col-md-12 common" style="">
						<div class="row main-cont" style="">
						<div class="col-lg-4 col-md-4  line common" style=""></div>
						<div class="col-lg-4 col-md-4 common" style=""><h2 class="">LITTLE MAGAZINE HUB</h2></div>
						<div class="col-lg-2 col-md-2  line common" style=";"></div>
						<div class="col-lg-2 col-md-2 common" style=";"><a href="<?php echo base_url();?>home/category/<?php echo $CategoryId; ?>/<?php echo $categoryname; ?>" class="btn btn default view-button"><h4><i class="fa fa-plus-square-o" aria-hidden="true"></i>&nbsp; View All</h4></a></div>
						<!--<a href="#" class="btn btn default view-button"><h4><i class="fa fa-plus-square-o" aria-hidden="true"></i>&nbsp; View All</h4></a>-->
						</div>
						</div>
						<div class="arrivals-grids">
							<?php foreach ($homemagazinhubs as $homemagazinhub): ?>
								<?php
										$this->load->library('encrypt');
										$enc_username=$this->encrypt->encode($homemagazinhub->Product_Id);
										$enc_username=str_replace(array('+', '/', '='), array('-', '_', '~'), $enc_username);
								?>
							<div class="col-lg-13 col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="<?php echo base_url(); ?>home/product/<?php echo $enc_username;?>" class="new-gri" data-toggle="" data-target="">
												<div class="grid-img">
													<img  src="<?php echo base_url(); ?>assets/productthumb/<?php echo $homemagazinhub->ProductThumbImage ?>" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="<?php echo base_url(); ?>assets/productthumb/<?php echo $homemagazinhub->ProductThumbImage ?>" class="img-responsive"  alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									<!--<div class="ribben">
										<p>NEW</p>
									</div>
									<div class="ribben1">
										<p>SALE</p>
									</div>-->
									<!--<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>-->
									<div class="women">
									
										<h6><a href="<?php echo base_url(); ?>home/product/<?php echo $enc_username;?>"><?php echo substr($homemagazinhub->ProductName,0,15); ?></a></h6>
										<!--<span class="size">XL / XXL / S </span>-->
										<p ><del>Rs:<?php echo $homemagazinhub->ProductRetailPrice; ?>/-</del>--<?php echo $homemagazinhub->ProductDiscount; ?>%&nbsp;<em class="item_price">Rs.<?php echo $homemagazinhub->ProductSellingPrice; ?>/-</em></p>
										<p class="text-center"><b>Author :</b> <?php echo substr($homemagazinhub->ProductAuther,0,15); ?>  </br> <b> Language: </b><?php echo $homemagazinhub->ProductLanguage; ?></br><b>Binding</b> : <?php echo $homemagazinhub->ProductBinding; ?> </p>
										<!--<a href="product-single.php" data-text="Add To Cart" class="my-cart-b item_add">VIEW THIS</a>
										<a href="cart.php" data-text="Add To Cart" class="my-cart-b item_add">ADD TO Cart</a>-->
									</div>
								</div>
							</div>
							<?php endforeach; ?>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<!-- LITTLE MAGAZINE HUB -->
			<!-- BOOKS OF OTHER PUBLISHER -->
				<div class="new-arrivals-w3agile">
					<div class="container">
						<!--<h2 class="tittle">VALUE FOR MONEY</h2>-->
						<?php 
							$CategoryId=$this->encrypt->encode('14');
							$CategoryId=str_replace(array('+', '/', '='), array('-', '_', '~'), $CategoryId); 

							$categoryname=$this->encrypt->encode('BOOKS OF OTHER PUBLISHER');
							$categoryname=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryname);

							//<?php echo $categoryname; ? 
				 		?>
						<div class="col-md-12 common" style="">
						<div class="row main-cont" style="">
						<div class="col-lg-4 col-md-4  line common" style=""></div>
						<div class="col-lg-4 col-md-4 common" style=""><h2 class="">BOOKS OF OTHER PUBLISHER</h2></div>
						<div class="col-lg-2 col-md-2  line common" style=";"></div>
						<div class="col-lg-2 col-md-2 common" style=";"><a href="<?php echo base_url();?>home/category/<?php echo $CategoryId; ?>/<?php echo $categoryname; ?>" class="btn btn default view-button"><h4><i class="fa fa-plus-square-o" aria-hidden="true"></i>&nbsp; View All</h4></a></div>
						<!--<a href="#" class="btn btn default view-button"><h4><i class="fa fa-plus-square-o" aria-hidden="true"></i>&nbsp; View All</h4></a>-->
						</div>
						</div>
						<div class="arrivals-grids">
							<?php foreach ($homeothers as $homeother): ?>
								<?php
										$this->load->library('encrypt');
										$enc_username=$this->encrypt->encode($homeother->Product_Id);
										$enc_username=str_replace(array('+', '/', '='), array('-', '_', '~'), $enc_username);
								?>
							<div class="col-lg-13 col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="<?php echo base_url(); ?>home/product/<?php echo $enc_username;?>" class="new-gri" data-toggle="" data-target="">
												<div class="grid-img">
													<img  src="<?php echo base_url(); ?>assets/productthumb/<?php echo $homeother->ProductThumbImage ?>" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="<?php echo base_url(); ?>assets/productthumb/<?php echo $homeother->ProductThumbImage ?>" class="img-responsive"  alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									<!--<div class="ribben">
										<p>NEW</p>
									</div>
									<div class="ribben1">
										<p>SALE</p>
									</div>-->
									<!--<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>-->
									<div class="women">
									
										<h6><a href="<?php echo base_url(); ?>home/product/<?php echo $enc_username;?>"><?php echo substr($homeother->ProductName,0,15); ?></a></h6>
										<!--<span class="size">XL / XXL / S </span>-->
										<p ><del>Rs:<?php echo $homeother->ProductRetailPrice; ?>/-</del>--<?php echo $homeother->ProductDiscount; ?>%&nbsp;<em class="item_price">Rs.<?php echo $homeother->ProductSellingPrice; ?>/-</em></p>
										<p class="text-center"><b>Author :</b> <?php echo substr($homeother->ProductAuther,0,15); ?>  </br> <b> Language: </b><?php echo $homeother->ProductLanguage; ?></br><b>Binding</b> : <?php echo $homeother->ProductBinding; ?> </p>
										<!--<a href="product-single.php" data-text="Add To Cart" class="my-cart-b item_add">VIEW THIS</a>
										<a href="cart.php" data-text="Add To Cart" class="my-cart-b item_add">ADD TO Cart</a>-->
									</div>
								</div>
							</div>
							<?php endforeach; ?>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<!-- BOOKS OF OTHER PUBLISHER -->

			<!--BEST SELLING BOOKS SLIDER-->
			<div class="accessories-w3l">
				<!--BEST SELLERS SLIDER-->
					<div class="container">							
					<h3 class="title">BEST SELLING BOOKS</h3> 
								<div id="logos">
								  <ul>
								  <?php foreach($bestselling as $bestbook): ?>
								  	<?php 
								  		$Product_Id=$this->encrypt->encode($bestbook->Product_Id);
										$Product_Id=str_replace(array('+', '/', '='), array('-', '_', '~'), $Product_Id);
									?>
									<li><a href="<?php echo base_url(); ?>home/product/<?php echo $Product_Id; ?>"><img src="<?php echo base_url(); ?>assets/productthumb/<?php echo $bestbook->ProductThumbImage ?>" height="200" width="150"/></a></li>
								<?php endforeach; ?>
								  </ul>
								</div>

				

					</div>
				
				<!--BEST SELLERS SLIDER-->
			</div>
			
			<!--BEST SELLING BOOKS SLIDER-->

		</div>
	<!--content-->