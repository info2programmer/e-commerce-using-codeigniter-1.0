<!--banner-->
<div class="banner1">
	<div class="container">
		<h2 class="ban-head text-left"><?php echo $categoryname; ?></h2>
		<p><a href="<?php echo base_url(); ?>">Home</a> /<span><a href="<?php echo base_url(); ?>home/buybooks/">Buy Books</a></span> /<span><?php echo $categoryname; ?></span></p>
	</div>
</div>
<!--banner-->
<!--content-->
<div class="content">
	<div class="products-agileinfo">
		<div class="container">
			<div class="product-agileinfo-grids w3l">
				<div class="col-md-3 product-agileinfo-grid">
					<div class="categories">
						<h3>Categories</h3>
						<ul class="tree-list-pad">
							<?php
							 $categoryname=$this->encrypt->encode('VALUE FOR MONEY');
							 $categoryname=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryname); 
							 $categoryId=$this->encrypt->encode('2');
							 $categoryId=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryId); 
							 ?>
							<li><a type="checkbox" href="<?php echo base_url();?>home/category/<?php echo $categoryId; ?>/<?php echo $categoryname; ?>" checked="checked" id="item-0" />VALUE FOR MONEY</a></li>
							<?php
							$categoryId=$this->encrypt->encode('3');
							$categoryId=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryId); 

							$categoryname=$this->encrypt->encode('PRE ORDER');
							$categoryname=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryname); 
							 ?>
							<li><a type="checkbox" href="<?php echo base_url();?>home/category/<?php echo $categoryId; ?>/<?php echo $categoryname; ?>" checked="checked" id="item-0" />PRE-ORDERS</a></li>
							<?php
							$categoryId=$this->encrypt->encode('4');
							$categoryId=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryId);

							$categoryname=$this->encrypt->encode('NEW RELEASES');
							$categoryname=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryname);
							?>
							<li><a type="checkbox" href="<?php echo base_url();?>home/category/<?php echo $categoryId; ?>/<?php echo $categoryname; ?>" checked="checked" id="item-0" />NEW RELEASES</a></li>
							<?php
							$categoryId=$this->encrypt->encode('5');
							$categoryId=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryId);

							$categoryname=$this->encrypt->encode('BIVA CLASSICS');
							$categoryname=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryname);
							?>
							<li><a type="checkbox" href="<?php echo base_url();?>home/category/<?php echo $categoryId; ?>/<?php echo $categoryname; ?>" checked="checked" id="item-0" />BIVA CLASSICS</a></li>
							<?php
							$categoryId=$this->encrypt->encode('6');
							$categoryId=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryId);

							$categoryname=$this->encrypt->encode('THRILLER & ADVENTURE');
							$categoryname=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryname);
							?>
							<li><a type="checkbox" href="<?php echo base_url();?>home/category/<?php echo $categoryId; ?>/<?php echo $categoryname; ?>" checked="checked" id="item-0" />THRILLER & ADVENTURE</a></li>
							<?php
							$categoryId=$this->encrypt->encode('13');
							$categoryId=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryId);

							$categoryname=$this->encrypt->encode('LITTLE MAGAZINE HUB');
							$categoryname=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryname);
							?>
							<li><a type="checkbox" href="<?php echo base_url();?>home/category/<?php echo $categoryId; ?>/<?php echo $categoryname; ?>" checked="checked" id="item-0" />LITTLE MAGAZINE HUB</a></li>
							<li><input type="checkbox" id="item-2-1" /><label for="item-2-1">SUBJECTS &nbsp;&nbsp;<i class="fa fa-angle-double-down" aria-hidden="true"></i></label>
								<ul>
									<?php
									$categoryId=$this->encrypt->encode('7');
									$categoryId=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryId);

									$categoryname=$this->encrypt->encode('POEM & VERSE');
									$categoryname=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryname);
									?>
									<li><a href="<?php echo base_url();?>home/category/<?php echo $categoryId; ?>/<?php echo $categoryname; ?>">POEM & VERSE</a></li>
									<?php
									$categoryId=$this->encrypt->encode('8');
									$categoryId=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryId);

									$categoryname=$this->encrypt->encode('ROMANCE GENRE');
									$categoryname=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryname);
									?>
									<li><a href="<?php echo base_url();?>home/category/<?php echo $categoryId; ?>/<?php echo $categoryname; ?>">ROMANCE GENRE</a></li>
									<?php
									$categoryId=$this->encrypt->encode('9');
									$categoryId=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryId);

									$categoryname=$this->encrypt->encode('TEENAGE & CHILD FICTION');
									$categoryname=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryname);
									?>
									<li><a href="<?php echo base_url();?>home/category/<?php echo $categoryId; ?>/<?php echo $categoryname; ?>">TEENAGE & CHILD FICTION</a></li>
									<?php
									$categoryId=$this->encrypt->encode('10');
									$categoryId=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryId);

									$categoryname=$this->encrypt->encode('SCIENCE GENRE');
									$categoryname=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryname);
									?>
									<li><a href="<?php echo base_url();?>home/category/<?php echo $categoryId; ?>/<?php echo $categoryname; ?>">SCIENCE GENRE</a></li>
									<?php
									$categoryId=$this->encrypt->encode('11');
									$categoryId=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryId);

									$categoryname=$this->encrypt->encode('SOCIAL DRAMA');
									$categoryname=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryname);
									?>
									<li><a href="<?php echo base_url();?>home/category/<?php echo $categoryId; ?>/<?php echo $categoryname; ?>">SOCIAL DRAMA</a></li>
									<?php
									$categoryId=$this->encrypt->encode('12');
									$categoryId=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryId);

									$categoryname=$this->encrypt->encode('PHILOSOPHY & BELIEFS');
									$categoryname=str_replace(array('+', '/', '='), array('-', '_', '~'), $categoryname);
									?>
									<li><a href="<?php echo base_url();?>home/category/<?php echo $categoryId; ?>/<?php echo $categoryname; ?>">PHILOSOPHY & BELIEFS</a></li>
								</ul>
							</li>

							<li><input type="checkbox" id="item-2-2" /><label for="item-2-2">LIST OF AUTHOR &nbsp;&nbsp;<i class="fa fa-angle-double-down" aria-hidden="true"></i></label>
								<ul>
								<?php $count=0; ?>
								<?php foreach ($authorlist as $author): ?>
									<?php $count=$count+1; ?>
									<?php $authorName=$this->encrypt->encode($author->ProductAuther);
									$authorName=str_replace(array('+', '/', '='), array('-', '_', '~'), $authorName); ?>
									<li><a href="<?php echo base_url(); ?>home/auther/<?php echo $authorName; ?>"><?php echo $author->ProductAuther ?></a></li>
									<?php if($count==7){break;} ?>
								<?php endforeach ?>
									<!-- <li><a href="#">BUDHHADEV GUHA</a></li>
									<li><a href="#">NARAYAN SANYAL</a></li>
									<li><a href="#">BANI BASU</a></li>
									<li><a href="#">SUNIL GANGOPADHYA</a></li>
									<li><a href="#">SATYAJIT ROY</a></li>
									<li><a href="#">ASAPURNA DEVI</a></li> -->
									<li><a href="" type="button" data-toggle="modal" data-target="#myModal">View All..</a></li>
									<!-- Modal -->
									<div id="myModal" class="modal fade" role="dialog">
										<div class="modal-dialog">

											<!-- Modal content-->
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title">LIST OF AUTHOR</h4>
												</div>
												<div class="modal-body">
													<div class="row">
													<div class='col-md-3'>
													<ul>
													<?php 
													$i=0;
													foreach($authorlist as $author){
														
														if($i<10){
															$i=$i+1;
															echo "<li><a href='#'>".$author->ProductAuther."</a></li>";
														}
														else{
															//echo "<script>alert('".$i."');</script>";
															$i=0;
															echo "</ul></div>";
															echo "<div class='col-md-3'>
															<ul>";
														}
													}

													?>
													</ul>
													</div>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												</div>
											</div>

										</div>
									</div>
								</ul>
							</li>
						</ul>		</div>
					</div>
					<div class="col-md-9 product-agileinfon-grid1">
						<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
							<ul id="myTab" class="nav1 nav1-tabs left-tab" role="tablist">

								<div id="myTabContent" class="tab-content">
									<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
										<div class="product-tab">
											<?php foreach($productlist as $product ): ?>
												<?php
												$this->load->library('encrypt');
												$Product_Id=$this->encrypt->encode($product->Product_Id);
												$Product_Id=str_replace(array('+', '/', '='), array('-', '_', '~'), $Product_Id);
												?>
												<div class="col-lg-3 col-md-3 arrival-grid simpleCart_shelfItem">
													<div class="grid-arr">
														<div  class="grid-arrival">
															<figure>		
																<a href="<?php echo base_url(); ?>home/product/<?php echo $Product_Id;?>" class="new-gri" data-toggle="" data-target="">
																	<div class="grid-img">
																		<img  src="<?php echo base_url(); ?>assets/productthumb/<?php echo $product->ProductThumbImage ?>" class="img-responsive" alt="">
																	</div>
																	<div class="grid-img">
																		<img  src="<?php echo base_url(); ?>assets/productthumb/<?php echo $product->ProductThumbImage ?>" class="img-responsive"  alt="">
																	</div>			
																</a>		
															</figure>	
														</div>
														<div class="women">
															<h6><a href="<?php echo base_url(); ?>home/product/<?php echo $Product_Id;?>"><?php echo substr($product->ProductName,0,15); ?></a></h6>
															<div class="block">
																<div class="starbox small ghosting"> </div>
															</div>
															<p ><del>Rs:<?php echo $product->ProductRetailPrice; ?>/-</del>--<?php echo $product->ProductDiscount; ?>%<em class="item_price">Rs.<?php echo $product->ProductSellingPrice; ?>/-</em></p>
															<a href="<?php echo base_url(); ?>home/product/<?php echo $Product_Id;?>" data-text="Add To Cart" class="my-cart-b item_add">Buy This</a>
														</div>
													</div>
												</div>
											<?php endforeach; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
<!--content-->