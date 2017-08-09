<!--content-->
<div class="content">
	<!--contact-->
		<div class="mail-w3ls">
			<div class="container">
				<h2 class="tittle">Wishlist</h2></br>
				<div class="col-xs-12 col-sm-12">
					<div class="table-responsive">          
						<table class="table display" id="myTable">
							<thead>
							<tr class="bg-info">
								<th>Cover Image</th>
								<th>Product Name</th>
								<th>Author</th>
								<th>Price</th>
								<th>Add To Cart</th>
								<th>Remove</th>
							</tr>
							</thead>
							<tbody>
								<tr>
								<?php foreach ($wishlist as $list): ?>
									<td><img src="<?php echo base_url(); ?>assets/productthumb/<?php echo $list->ProductThumbImage; ?>" class="img-responsive center-block" height="75 px" width="150 px" /></td>
									<td><?php echo $list->ProductName; ?></td>
									<td><?php echo $list->ProductAuther; ?></td>
									<td>Rs. <?php echo $list->ProductSellingPrice; ?>.00/-</td>
									<td><button data-productname="<?php echo $list->ProductName ?>" data-price="<?php echo $list->ProductSellingPrice; ?>" data-productid="<?php echo $list->Product_Id; ?>"  class="btn btn-warning add_cart" onclick="addtocart()"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart</button></td>
									<td><a  href="<?php echo base_url(); ?>home/deletetowishlist/<?php  echo $list->Product_Id; ?>"> <i class="glyphicon glyphicon-trash fa-2x"></i> </a></td>
								<?php endforeach; ?>
								</tr>
							</tbody>
						</table>
					</div>

				</div>
				
			</div>
		</div>
	<!--contact-->
</div>
<!--content-->
<script type="text/javascript">
	function addtocart(){
		var product_id = $('.add_cart').data("productid");
 	 	var product_name = $('.add_cart').data("productname");
  		var product_price = $('.add_cart').data("price");
  		var quantity = 1;

  		var xmlhttp = new XMLHttpRequest();
	    xmlhttp.onreadystatechange = function() {
	        if (this.readyState == 4 && this.status == 200) {
	            document.getElementById("total").innerHTML = this.responseText;
	           alert("Product Added To Your Cart");
	        }
	    };
	    var url="<?php echo base_url();?>home/addtocart?product_id="+product_id+"&product_name="+product_name+"&product_price="+product_price+"&quantity="+quantity;
	    xmlhttp.open("GET", url, true);
	    xmlhttp.send();

	}

</script>