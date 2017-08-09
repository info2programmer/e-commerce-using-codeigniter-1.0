	<!--content-->
	<div class="content">
		<!-- ZOOMING PRODUCT-->


		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/foundation.css" />
		<script src="<?php echo base_url();?>assets/js/vendor/modernizr.js"></script>
		<!-- xzoom plugin here -->
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/xzoom.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/xzoom.css" media="all" />
		<!-- hammer plugin here -->
		<script type="text/javascript" src="<?php echo base_url();?>assets/hammer.js/1.0.5/jquery.hammer.min.js"></script>
		<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url();?>assets/fancybox/source/jquery.fancybox.css" />
		<link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url();?>assets/magnific-popup/css/magnific-popup.css" />
		<script type="text/javascript" src="<?php echo base_url();?>assets/fancybox/source/jquery.fancybox.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/magnific-popup/js/magnific-popup.js"></script>

		<script src="<?php echo base_url();?>assets/js/foundation.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/setup.js"></script>



		<!-- ZOOMING PRODUCT-->

		<?php foreach ($ProductDetails as $object) : ?>
			<!--single-->
			<div class="single-wl3">
				<div class="container">
					<div class="single-grids">
						<div class="col-md-5 single-grid">
							<div clas="single-top">
								<div class="">
									<!-- default start -->
									<section id="default" class="padding-top0">
										<div class="">

											<div class="">
												<div class="xzoom-container">
													<img class="xzoom" id="xzoom-default" src="<?php echo base_url();?>assets/productthumb/<?php echo $object->ProductThumbImage; ?>" xoriginal="<?php echo base_url();?>assets/productthumb/<?php echo $object->ProductThumbImage; ?>" />
													<div class="xzoom-thumbs">
														<?php foreach($ProductImages as $img): ?>
															<a href="<?php echo base_url();?>assets/singleproductimage/<?php echo $img->ImageName; ?>"><img class="xzoom-gallery" width="80" src="<?php echo base_url();?>assets/singleproductimage/<?php echo $img->ImageName; ?>"  xpreview="<?php echo base_url();?>assets/singleproductimage/<?php echo $img->ImageName; ?>" ></a>
														<?php endforeach; ?>
													</div>
												</div>
											</div>
											<div class=""></div>
										</div>
									</section>
									<!-- default end -->
									<?php if($this->session->userdata('userlogin')): ?>
										<div class="text-center">
											<button data-target="#ModalSuggest" class="my-cart-b-home wishlist_btn item_add add_wishlist"  data-toggle="modal"><i class="fa fa-share-square-o" aria-hidden="true"></i> Refere Your Friend</button>
										</div>
										<div class="text-center">
											<button name="add_wishlist" data-text="Add To Wishlist" class="my-cart-b-home wishlist_btn item_add add_wishlist"  data-productid="<?php echo $object->ProductId; ?>" onclick="AddToWishlist()"><i class="glyphicon glyphicon-heart"></i>&nbsp;Add To Wishlist</button>
										</div>
									<?php else: ?>
										<div class="text-center">
											<a  href="javascript:;" data-target="#ModalSuggest" class="my-cart-b-home wishlist_btn item_add add_wishlist myWish" disabled><i class="fa fa-share-square-o" aria-hidden="true"></i> Refere Your Friend</a>
											<a  href="javascript:;" data-text="Add To Wishlist" class="my-cart-b-home wishlist_btn item_add add_wishlist myWish" disabled ><i class="glyphicon glyphicon-heart"></i>&nbsp;Add To Wishlist</a>
										</div><br/>
										<div class="alert alert-warning" id="success-alert">
											<button type="button" class="close" data-dismiss="alert">x</button>
											<strong>Warning! </strong>You may have login first.
										</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<div class="col-md-7 single-grid">
							<div clas="single-top">
								<div class=" simpleCart_shelfItem">
									<h3 ><?php echo $object->ProductName; ?></h3></br>
									<h5>Author: <?php echo $object->ProductAuther; ?></h5></br>
									<div class="">
										<!--<div class="starbox small ghosting"> </div>-->
										<button type="button" class="btn btn-default star"><?php $this->home_model->getavgstarratebyproductid($object->ProductId); ?> &nbsp;<i class="fa fa-star-o" aria-hidden="true"></i> </button></br><span class="rating_av"><?php $this->home_model->totalreatingandreview($object->ProductId); ?> Rating & <?php $this->home_model->totalreatingandreview($object->ProductId); ?> Reviews </span>
									</div>

									<p class="price item_price"><del><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $object->ProductRetailPrice; ?>/-</del>&nbsp;<?php echo $object->ProductDiscount; ?>% OFF&nbsp;&nbsp;<em class="item_price"></em><span class="final"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $object->ProductSellingPrice; ?></span></p>

									<h5 id="txtblnk" style="color:rgb(255,0,0);">FREE SHIPPING  &nbsp;<!--<a href="JavaScript:Void(0);" data-toggle="tooltip" data-placement="right" title="Free shipping across the India. if ORDER VALUE >= Rs. 200.ELSE shipping charges Rs. 40 will be added." class="tool-tip"><i class="fa fa-question-circle" aria-hidden="true"></i></a>--></h5>
									<h6>IF Order Amount	 >= Rs. 200. ELSE shipping charge Rs. 40 extra.</h6>

								</br>
								<?php if(strtotime(date("Y-m-d")) < strtotime($object->PublishDate)): ?>
									<h3>Releasing On: <?php echo $object->PublishDate; ?> </h3></br>
								<?php endif; ?>
								<div><label>COD Availablity :&nbsp;&nbsp;<input type="text" class="box" onblur="chkcashondelivery(this.value)" placeholder="Enter Delivery Pin"></label>&nbsp;&nbsp;<button class="btn btn-link box-btn">Check</button><br/>
									<span id="codresult"></span>
								</div>
								<?php if($object->ProductLiveFlag): ?>
									<div class="quantity"><label>Enter Quantity :&nbsp;&nbsp;&nbsp;<input type="number" min="1" class="box" placeholder="Enter Quantity" id="<?php echo $object->ProductId; ?>" value="1" style="width: 50px;border: 2px solid #1565c0;text-align: center;" ></label>
									</div>
								<?php endif; ?>
								<div class="description">

								</div>

							</br></br>

							<div class="women">
								<?php if($object->ProductLiveFlag): ?>
									<!--<span class="size">XL / XXL / S </span>-->
									<button data-text="Add To Cart" data-open="1" name="add_cart" class="my-cart-b-home add_cart" data-productname="<?php echo $object->ProductName ?>" data-price="<?php echo $object->ProductSellingPrice; ?>" data-productid="<?php echo $object->ProductId; ?>" data-edition="<?php echo $object->ProducEdition; ?>" data-auther="<?php echo $object->ProductAuther; ?>" data-retailprice="<?php echo $object->ProductRetailPrice; ?>" data-discount="<?php echo $object->ProductDiscount; ?>"><i class="glyphicon glyphicon-tag"></i>&nbsp;Buy Now</button>&nbsp;&nbsp;

									<button type="button" data-open="0" name="add_cart" class="my-cart-b-home add_cart" data-productname="<?php echo $object->ProductName ?>" data-price="<?php echo $object->ProductSellingPrice; ?>" data-productid="<?php echo $object->ProductId; ?>" data-edition="<?php echo $object->ProducEdition; ?>" data-auther="<?php echo $object->ProductAuther; ?>" data-retailprice="<?php echo $object->ProductRetailPrice; ?>" data-discount="<?php echo $object->ProductDiscount; ?>" /><i class="glyphicon glyphicon-shopping-cart"></i>&nbsp;Add to Cart</button>
								<?php else: ?>
									<a  href="javascript:;" data-text="This product currently unavailable" class="my-cart-b-home wishlist_btn item_add add_wishlist" disabled style="width:46%;"><i class="fa fa-low-vision" ></i>&nbsp;This product currently unavailable</a>
								<?php endif; ?>
							</div></br>

							<span></span>
							<script>
								$(document).ready(function(){
									$('[data-toggle="tooltip"]').tooltip();
								});

							</script>

							<div class="description">
								<p><span>SPECIFICATIONS : </span> </p>
								<p>Series Name	:	<?php echo $object->ProdutSeries; ?></p>
								<p>Language	:	<?php echo $object->ProductLanguage; ?></p>
								<p>Publisher	:	Biva Publication</p>
								<p>Published on	:	<?php echo $object->PublishDate; ?></p>
								<p>No. of Pages	:	<?php echo $object->ProductPages; ?></p>
								<p>Binding	:	<?php echo $object->ProductBinding; ?></p>
								<p>Edition	:	<?php echo $object->ProducEdition; ?></p>
								<p>ISBN	:	<?php echo $object->ProductISBN; ?></p>
							</div></br>

							<div class="description">
								<p><span>DESCRIPTION : </span> </p>
								<p><?php echo $object->ProductDescription; ?></p>
							</div></br>

							<div class="description global">
								<p><span>REVIEWS AND RATINGS : </span> </p></br>
								<div>
									<div id="overall" class="col-md-6">
										<button type="button" class="btn btn-default star">
											<?php $this->home_model->getavgstarratebyproductid($object->ProductId); ?> &nbsp;&#9734;
										</button></br></br><span class="rating_av"><?php $this->home_model->totalreatingandreview($object->ProductId); ?> Rating & <?php $this->home_model->totalreatingandreview($object->ProductId); ?> Reviews </span>
									</div>
									<div id="myProgress" class="col-md-6">
									<!-- <div id="myBar" class="five-star">106&#9734;&#9734;&#9734;&#9734;&#9734;</div>
									<div id="myBar" class="four-star">476&#9734;&#9734;&#9734;&#9734;</div>
									<div id="myBar" class="three-star">106&#9734;&#9734;&#9734;</div>
									<div id="myBar" class="two-star">66&#9734;&#9734;</div>
									<div id="myBar" class="one-star">25&#9734;</div> -->
									<?php $this->home_model->viewreatingprogressber($object->ProductId); ?>
									<br>

								</div>
							</div>
							<?php if(!$this->home_model->checkreview($object->ProductId)): ?>
								<div class="col-md-12">
									<?php if($this->session->userdata('userlogin')): ?>
										<?php echo form_open('home/review'); ?>
										<h3>Rate This Book</h3>
										<fieldset id='demo3' class="rating">
											<input class="stars" type="radio" id="star53" name="rating" value="5" />
											<label class = "full" for="star53" title="Awesome - 5 stars"></label>
											<input class="stars" type="radio" id="star43" name="rating" value="4" />
											<label class = "full" for="star43" title="Pretty good - 4 stars"></label>
											<input class="stars" type="radio" id="star33" name="rating" value="3" />
											<label class = "full" for="star33" title="Meh - 3 stars"></label>
											<input class="stars" type="radio" id="star23" name="rating" value="2" />
											<label class = "full" for="star23" title="Kinda bad - 2 stars"></label>
											<input class="stars" type="radio" id="star13" name="rating" value="1" />
											<label class = "full" for="star13" title="Bad - 1 star"></label>
										</fieldset>
									</div>
									<div class="col-md-12">
									</br>
									<h3>Give Us Your Review</h3>

									<div class="form-group col-sm-6 review-form">
										<label for="usr">Name:</label>
										<input type="text" name="txtName" required class="form-control" id="usr" value="<?php echo $this->session->userdata('firstname')." ".$this->session->userdata('lastname'); ?>" readonly>
									</div>
									<div class="form-group col-sm-6 review-form">
										<label for="usr">Email:</label>
										<input type="text" name="txtEmail" required class="form-control" readonly value="<?php echo $this->session->userdata('useremail'); ?>" id="usr">
									</div>
									<div class="form-group col-sm-12 review-form">
										<label for="txtTitle">Title:<sup>&nbsp;(Max Lengeth 250 Letters)</sup></label>
										<input type="text" name="txtTitle" required class="form-control" maxlength="255" id="txtTitle">
									</div>
									<input type="hidden" name="txtProduct" value="<?php echo $object->ProductId; ?>">
									<div class="form-group col-sm-12 review-form">
										<label for="txtComment">Your Review:</label>
										<textarea class="form-control" required cols="5" id="txtComment" name="txtComment"></textarea>
									</div>
									<button class="btn btn-warning" name="btnReview" type="submit">Add Review</button>
									<?php echo form_close(); ?>
								<?php else: ?>
									<a href="javascript:void(0)" onclick="alert('Login To Review')" class="btn btn-default">Login To Review This Book</a>
								<?php endif;?>
							<?php else: ?>
								<h3>Your Review</h3>
								<?php foreach($this->home_model->checkreview($object->ProductId) as $key): ?>
									<div class="co-md-12 rev">
										<div>
											<button type="button" class="btn btn-default star"><?php echo $key->Rate; ?> &nbsp;<i class="fa fa-star-o" aria-hidden="true"></i> </button>
											<h5 class="rev-head">"<?php echo $key->Title; ?>"</h5></br></br>
											<p class="rev-comm"><?php echo $key->ReviewComment; ?></p></br>
											<p><strong><?php echo $key->ReviewDate; ?>,</strong>&nbsp; <?php echo $key->ReviewTime; ?></p>
										</div>
									</div>
								<?php endforeach; ?>
							<?php endif;?>

						</div>
					</div></br>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>

		<div class="clearfix"> </div>
		<?php if($this->home_model->viewreviewbyidwithlimit($object->ProductId,2)): ?>
			<?php foreach($this->home_model->viewreviewbyidwithlimit($object->ProductId,2) as $LastReview): ?>
				<div class="co-md-12 rev">
					<div>
						<button type="button" class="btn btn-default star"><?php echo $LastReview->Rate; ?> &nbsp;<i class="fa fa-star-o" aria-hidden="true"></i> </button>
						<h5 class="rev-head">"<?php echo $LastReview->Title; ?>"</h5></br></br>
						<p class="rev-comm"><?php echo $LastReview->ReviewComment; ?></p></br>
						<p><strong><?php echo $LastReview->FirstName." ".$LastReview->LastName; ?>,</strong>&nbsp; <?php echo $LastReview->ReviewDate; ?></p>
					</div>
				</div>
			<?php endforeach; ?>
			<div class="co-md-12 rev">
				<?php
				$ProductId=$this->encrypt->encode($object->ProductId);
				$ProductId=str_replace(array('+', '/', '='), array('-', '_', '~'), $ProductId);
				$url="home/product/".$ProductId;
				?>
				<h4 class="rev-link"><a href="<?php echo base_url(); ?>home/productreview/<?php echo $ProductId; ?>">VIEW ALL REVIEWS</a></h4>
			</div>
		<?php else: ?>
			<div class="co-md-12 rev">
				<h3>No Review Found</h3>
			</div>
		<?php endif; ?>

	</div>
</div>

</div>
</div>
<!--single-->
<!-- modal suggest a friend -->

<div class="modal signUpContent fade" id="ModalSuggest" tabindex="-1" role="dialog">
	<div class="modal-dialog ">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
				<h3 class="modal-title-site text-center"> <i class="fa fa-unlock-alt"> </i> REFERE YOUR FRIEND</h3>
			</div>
			<div class="modal-body">
				<h3>  </h3></br>

				<form role="form">
					<div class="form-group">
						<label for="txtReferEmail"> Email address* </label>
						<input type="email" class="form-control" id="txtReferEmail" placeholder="Enter Your Firend Email">
					</div>
					<div class="form-group">
						<label for="txtMessage"> Message </label>
						<textarea class="form-control" placeholder="Enter Message" id="txtReferMessage"></textarea>
					</div>
					<div class="col-md-4"><button type="button" class="btn btn-primary pull-right btn-block refefance" id="retrive-button" data-productid="<?php echo $object->ProductId; ?>" onclick="referfriend();"><i class="fa fa-share" aria-hidden="true"></i> Send Referance
					</button></div>
					
				</form>
				<!--userForm-->
			</div>
			<div class="modal-footer">
				<div class="clear clearfix">
				<h5 align="center" id="refmessage"></h5>
					<ul class="pager">
						<li class="previous pull-right"><a href="javascript:void(0);"  data-dismiss="modal" aria-hidden="true"> &larr; Close </a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /.modal-content -->

	</div>
	<!-- /.modal-dialog -->

</div>			
<!-- modal suggest a friend -->	
<!--content-->
<?php endforeach; ?>
<div class="new-arrivals-w3agile">
	<div class="container">
		<h3 class="tittle1">SIMILAR BOOKS</h3>
		<div class="arrivals-grids">
			<?php foreach ($randombooks as $similarBooks): ?>
				<div class="col-md-3 arrival-grid simpleCart_shelfItem">
					<div class="grid-arr">
						<div  class="grid-arrival">
							<figure>
								<?php $Product_Id=$this->encrypt->encode($similarBooks->ProductId);
								$Product_Id=str_replace(array('+', '/', '='), array('-', '_', '~'), $Product_Id); ?>
								<a href="<?php echo base_url(); ?>home/product/<?php echo $Product_Id; ?>">
									<div class="grid-img">
										<img  src="<?php echo base_url(); ?>assets/productthumb/<?php echo $similarBooks->ProductThumbImage ?>" class="img-responsive img-thumbnail" alt="">
									</div>
									<div class="grid-img">
										<img  src="<?php echo base_url(); ?>assets/productthumb/<?php echo $similarBooks->ProductThumbImage ?>" class="img-responsive img-thumbnail" alt="">
									</div>
								</a>
							</figure>
						</div>
						<div class="women">
							<h6><a href="<?php echo base_url(); ?>home/product/<?php echo $Product_Id; ?>"><?php echo substr($similarBooks->ProductName, 0,15); ?>  </a></h6>
							<a href="<?php echo base_url(); ?>home/product/<?php echo $Product_Id; ?>" data-text="Add To Cart" class="my-cart-b item_add">Buy This</a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--new-arrivals-->
</div>

<script>
	function chkcashondelivery(str) {
		if (str.length == 0) {
			document.getElementById("codresult").innerHTML = "";
			return;
		} else {
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("codresult").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET", "<?php echo base_url(); ?>home/checkcod/" + str, true);
			xmlhttp.send();
		}
	}

//Add To Cart Function
$(document).ready(function(){

	$('.add_cart').click(function(){
		var product_id = $(this).data("productid");
		var product_name = $(this).data("productname");
		var product_price = $(this).data("price");
		var quantity = $('#' + product_id).val();
		var product_auther = $(this).data("auther");
		var product_edition = $(this).data("edition");
		var product_retailprice = $(this).data("retailprice");
		var product_discount = $(this).data("discount");
		var open = $(this).data("open");
  // alert(product_id);
  // alert(product_name);
  // alert(product_price);
  // alert(quantity);

  if(quantity != '' && quantity > 0)
  {
  	var xmlhttp = new XMLHttpRequest();
  	xmlhttp.onreadystatechange = function() {
  		if (this.readyState == 4 && this.status == 200) {
  			document.getElementById("total").innerHTML = this.responseText;
  			alert("Product Added To Your Cart");
  			if(open==1)
  			{
  				window.open("<?php echo base_url(); ?>home/cart","_self");
  			}
  		}
  	};
  	var url="<?php echo base_url();?>home/addtocart?product_id="+product_id+"&product_name="+product_name+"&product_price="+product_price+"&quantity="+quantity+"&product_auther="+product_auther+"&product_edition="+product_edition+"&product_retailprice="+product_retailprice+"&product_discount="+product_discount;
  	xmlhttp.open("GET", url, true);
  	xmlhttp.send();
  }
  else
  {
  	alert("Please Enter quantity");
  }
});

});

$(document).ready (function(){
	$("#success-alert").hide();
	$(".myWish").click(function showAlert() {
		$("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
			$("#success-alert").slideUp(500);
		});
	});
});


//This function To Add Item In Wishlist
function AddToWishlist(){
	var product_id = $('.add_wishlist').data("productid");
	var urls="<?php echo base_url(); ?>home/addtowishlist";
	var data={'productid':product_id};
	$.ajax({
		'type':'post',
		'data' : data,
		'url' : urls,
		'beforeSend' : function(){},
		'success' : function(data){
			alert(data);
		}

	});
}

//This Function Send Your Friend referance
function referfriend(){
	var product_id = $('.refefance').data("productid");
	var email=document.getElementById("txtReferEmail").value;
	var message=document.getElementById("txtReferMessage").value;
	var urls="<?php echo base_url(); ?>home/referfriend";
	var data={'product_id':product_id,'email':email,'message':message};

	if(email=="" || message==""){
		document.getElementById("refmessage").innerHTML="Email And Message should No Empty";
		document.getElementById("refmessage").style="color:red";
	}
	else{
		$.ajax({
		'type':'post',
		'data' : data,
		'url' : urls,
		'beforeSend' : function(){},
		'success' : function(data){
			document.getElementById("refmessage").innerHTML=data;
			document.getElementById("refmessage").style="color:green";
			document.getElementById("txtReferEmail").value="";
			document.getElementById("txtReferMessage").value="";
		}

	});
	}
}

</script>

<!-- MODAL FOR BLINKING -->
<script type="text/javascript">
	$(function() {
		blinkeffect('#txtblnk');
	})
	function blinkeffect(selector) {
		$(selector).fadeOut('slow', function() {
			$(this).fadeIn('slow', function() {
				blinkeffect(this);
			});
		});
	}
</script>
<!-- MODAL FOR BLINKING -->
