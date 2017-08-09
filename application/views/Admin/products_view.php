    <ul class="breadcrumb">
    	<li>
    		<a href="<?php echo base_url(); ?>admin/welcome">Home</a>
    	</li>
    	<li>
    		<a href="#">Products</a>
    	</li>
    </ul>
</div>
<?php
//Atributes
$txtProductNameAttribute=array(
	'class' => 'form-control',
	'id' => 'txtProductName',
	'placeholder' => 'Enter Product Name',
	'name' => 'txtProductName'
	);
$txtProductSKU=array(
	'class' => 'form-control',
	'id' => 'txtProductSKU',
	'placeholder' => 'Enter Product SKU',
	'name' => 'txtProductSKU'
	); 
$txtAuther= array(
	'name' => 'txtAuther',
	'id' => 'txtAuther',
	'placeholder' => 'Enter Auther Name',
	'class' => 'form-control'
	);
$txtstock= array(
	'name' => 'txtstock',
	'id' => 'txtstock',
	'placeholder' => 'Enter Stock Amount',
	'class' => 'form-control',
	'type' => 'number'
	);
$txtRetailPrice= array(
	'name' => 'txtRetailPrice',
	'id' => 'txtRetailPrice',
	'placeholder' => 'Enter Retail Price',
	'class' => 'form-control',
	'type' => 'number'
	);

$txtSellingPrice= array(
	'name' => 'txtSellingPrice',
	'id' => 'txtSellingPrice',
	'placeholder' => 'Enter Selling Price',
	'class' => 'form-control',
	'type' => 'number',
	'onblur' => 'getDiscount()'
	);

$txtDiscount= array(
	'name' => 'txtDiscount',
	'id' => 'txtDiscount',
	'placeholder' => 'Discount (Auto Calculate)',
	'class' => 'form-control',
	'type' => 'number',
	'Readonly' => 'readonly'
	);

$txtLanguage= array(
	'name' => 'txtLanguage',
	'id' => 'txtLanguage',
	'placeholder' => 'Enter Language',
	'class' => 'form-control'
	);
$txtProductSeries= array(
	'name' => 'txtProductSeries',
	'id' => 'txtProductSeries',
	'placeholder' => 'Enter Product Series',
	'class' => 'form-control'
	);
$txtISBN= array(
	'name' => 'txtISBN',
	'id' => 'txtISBN',
	'placeholder' => 'Enter Product ISBN',
	'class' => 'form-control'
	);

$txtEdition= array(
	'name' => 'txtEdition',
	'id' => 'txtEdition',
	'placeholder' => 'Enter Product Edition',
	'class' => 'form-control'
	);


$txtPublishDate= array(
	'name' => 'txtPublishDate',
	'id' => 'txtPublishDate',
	'placeholder' => 'Enter Publish Date',
	'class' => 'form-control',
	'type' => 'date'
	);
$txtBinding= array(
	'name' => 'txtBinding',
	'id' => 'txtBinding',
	'placeholder' => 'Enter Binding',
	'class' => 'form-control'
	);

$txtNoPage= array(
	'name' => 'txtNoPage',
	'id' => 'txtNoPage',
	'placeholder' => 'Enter Number Of Page',
	'class' => 'form-control',
	'type' => 'number'
	);

$txtWeight= array(
	'name' => 'txtWeight',
	'id' => 'txtWeight',
	'placeholder' => 'Enter Weight',
	'class' => 'form-control'
	);
$fileThambImage= array(
	'name' => 'fileThambImage',
	'id' => 'fileThambImage',
	'placeholder' => 'Enter Weight',
	'class' => 'form-control'
	);


$filePDF= array(
	'name' => 'filePDF',
	'id' => 'filePDF',
	'placeholder' => 'Enter Weight',
	'class' => 'form-control'
	);


$txtProductLive= array(
	'class' => 'form-control',
	'name' => 'chkPreorder'
	);

$txtProductLive= array(
	'class' => 'form-control',
	'name' => 'chkPreorder'
	);

$txtDescription= array(
	'name' => 'txtDescription',
	'id' => 'txtDescription',
	'placeholder' => 'Enter Description',
	'class' => 'form-control',
	'rows' => '5'
	);

$txtSearchKey= array(
	'name' => 'txtSearchKey',
	'id' => 'txtSearchKey',
	'placeholder' => 'Enter Search Keyword',
	'class' => 'form-control',
	'rows' => '5'
	);

$buttonAttribute=array(
	'name' => 'btnSubmit',
	'value' => 'Crate Book',
	'class' => 'btn btn-default btn-lg'
	);



?>
<div class="row">
	<div class="box col-md-12">
		<div class="box-inner homepage-box" style="height: 1050px;">
			<div class="box-header well">
				<h2><i class="glyphicon glyphicon-th"></i> Tabs</h2>


			</div>
			<div class="box-content">
				<ul class="nav nav-tabs" id="myTab">
					<li class="active"><a href="#info">NewProducts</a></li>
					<li><a href="#custom">ProductList</a></li>
					<li><a href="#messages">Stock</a></li>
				</ul>

				<div id="myTabContent" class="tab-content">
					<div class="tab-pane active" id="info">
						<h3>Products
							<small>Create New Products</small>
						</h3>
						<?php if($this->session->flashdata('error_log')): ?>
						<div class="alert alert-danger">
						<?php echo $this->session->flashdata('error_log'); ?>
						</div>
						<?php endif; ?>
						<?php if($this->session->flashdata('success_log')): ?>
						<div class="alert alert-success">
						<?php echo $this->session->flashdata('success_log'); ?>
						</div>
						<?php endif; ?>
						<?php echo form_open_multipart('admin/newproduct'); ?>
						<div class="form-group col-md-6">
							<?php echo form_label('Product Name', 'txtProductName'); ?>

								<?php echo form_input($txtProductNameAttribute); ?>
							</div>
							<div class="form-group col-md-6">
								<?php echo form_label('Product SKU', 'txtProductSKU'); ?>
								<!--  -->
									<?php echo form_input($txtProductSKU); ?>
								</div>

								<div class="form-group col-md-6">
									<?php echo form_label('Auther Name', 'txtAuther'); ?>
									<!-- <select id="ddlAuther" class="form-control" name="ddlAuther" data-rel="chosen">
										<option>Auther 1</option>
										<option>Auther 2</option>
									</select> -->
									
									<?php echo form_input($txtAuther); ?>
								</div>
								<div class="form-group col-md-6">
									<?php echo form_label('Product Stock', 'txtstock'); ?>
									<?php echo form_input($txtstock); ?>
								</div>
								<div class="form-group col-md-6">
									<?php echo form_label('Select Category', 'ddlCategory'); ?>
									
									<select name="ddlCategory[]" id="ddlCategory" class="form-control" data-rel="chosen" multiple="multiple">
										<?php 
											
											foreach ($category as $object) {
												if($object->CategoryActive)
												{
													echo "<option value='".$object->CategoryId."'>".$object->CategoryName."</option>";
												}
												
											}
										?>
									</select>
								</div>
								<div class="form-group col-md-6">
									<?php echo form_label('Select Home View Category', 'ddlHomeCategory'); ?>
									<select name="ddlHomeCategory[]" id="ddlHomeCategory" class="form-control" data-rel="chosen" multiple="multiple">
										<?php 
											
											foreach ($category as $object) {
												if($object->CategoryActive)
												{
													echo "<option value='".$object->CategoryId."'>".$object->CategoryName."</option>";
												}
												
											}
										?>
									</select>
								</div>
								<div class="form-group col-md-4">
									<?php echo form_label('Retail Price', 'txtRetailPrice'); ?>
									
									<?php echo form_input($txtRetailPrice); ?>
								</div>
								<div class="form-group col-md-4">
									<?php echo form_label('Selling Price', 'txtSellingPrice'); ?>
									
									<?php echo form_input($txtSellingPrice); ?>
								</div>
								<div class="form-group col-md-4">
									<?php echo form_label('Discount', 'txtDiscount'); ?>
									
									<?php echo form_input($txtDiscount); ?>
								</div>
								<div class="form-group col-md-4">
									<?php echo form_label('Product Language', 'txtLanguage'); ?>
									
									<?php echo form_input($txtLanguage); ?>
								</div>
								<div class="form-group col-md-4">
									<?php echo form_label('Product Series', 'txtProductSeries'); ?>
									
									<?php echo form_input($txtProductSeries); ?>
								</div>
								<div class="form-group col-md-4">
									<?php echo form_label('Select Publisher', 'ddlPublisher'); ?>
									<select name='ddlPublisher' id='ddlPublisher' class='form-control' required>
										<option value="">Select Publisher</option>
										<?php foreach ($publisher as $object ): ?>
											<option value="<?php echo $object->PublisherId ?>"><?php echo $object->PublisherName ?></option>
										<?php endforeach; ?>
									</select>
								</div>

								<div class="form-group col-md-4">
									<?php echo form_label('Enter ISBN Number', 'txtISBN'); ?>
									
									<?php echo form_input($txtISBN); ?>
								</div>

								<div class="form-group col-md-4">
									<?php echo form_label('Product Edition', 'txtEdition'); ?>

									<?php echo form_input($txtEdition); ?>
								</div>
								<div class="form-group col-md-4">
									<?php echo form_label('Publish Date', 'txtPublishDate'); ?>
									
									<?php echo form_input($txtPublishDate); ?>
								</div>

								<div class="form-group col-md-4">
									<?php echo form_label('Binding', 'txtBinding'); ?>
									
									<?php echo form_input($txtBinding); ?>
								</div>

								<div class="form-group col-md-4">
									<?php echo form_label('Page Number', 'txtNoPage'); ?>
									
									<?php echo form_input($txtNoPage); ?>
								</div>
								<div class="form-group col-md-4">
									<?php echo form_label('Product Weight', 'txtWeight'); ?>
									
									<?php echo form_input($txtWeight); ?>
								</div>
								<div class="form-group col-md-6">
									<?php echo form_label('Select Image', 'fileThambImage'); ?>
									
									<?php echo form_upload($fileThambImage); ?>
								</div>
								<div class="form-group col-md-6">
									<?php echo form_label('Product Live', 'txtProductLive'); ?>
									
									<?php echo form_checkbox('txtProductLive', '1', 'TRUE',$txtProductLive) ?>
								</div>
								<div class="form-group col-md-6">
									<?php echo form_label('Description', 'txtDescription'); ?>
									<?php 
										
									?>
									<?php echo form_textarea($txtDescription); ?>
								</div>
								<div class="form-group col-md-6">
									<?php echo form_label('Search Keyword', 'txtSearchKey'); ?>
									<?php 
										
									?>
									<?php echo form_textarea($txtSearchKey); ?>
								</div>
								<div class="form-group col-md-12 text-center">
								<?php
									
									echo form_submit($buttonAttribute);
								?>
								</div>

								<? echo form_close(); ?>

								<br><br/> <br>

							</div>
							<div class="tab-pane" id="custom">
								<h3>List
									<small>Get All Product</small>
								</h3>
								<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
								<thead>
									<tr>
										<th>SKU</th>
										<th>Name</th>
										<th>Auther</th>
										<th>SellingPrice</th>
										<th>Discount</th>
										<th>Image</th>
										<th>Added By</th>
										<th>Added Date Time</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($allproducts as $objproduct ): ?>
										<tr>
											<td><?php echo $objproduct->ProductSKU; ?></td>
											<td><?php echo $objproduct->ProductName; ?></td>
											<td><?php echo $objproduct->ProductAuther; ?></td>
											<td><?php echo $objproduct->ProductSellingPrice; ?></td>
											<td><?php echo $objproduct->ProductDiscount ; ?></td>
											<td><img src='<?php echo base_url()."assets/productthumb/".$objproduct->ProductThumbImage; ?>' height="75px" width="75px" /></td>
											<td><?php echo $objproduct->UploadedBy ; ?></td>
											<td><?php echo $objproduct->UploadDateTime ; ?></td>
											<td><a href="deleteproduct/<?php echo $objproduct->ProductId; ?>/<?php echo $objproduct->ProductThumbImage; ?>" class="btn btn-danger" >Delete</a>&nbsp;<a href="productedit/<?php echo $objproduct->ProductId; ?> " class="btn btn-info" >Edit</a>&nbsp;<a href="productimage/<?php echo $objproduct->ProductId; ?> " class="btn btn-warning" >Upload Image</a></td>
										</tr>
									<?php endforeach; ?>
								</tbody>
								</table>
							</div>
							<div class="tab-pane" id="messages">
								<h3>Messages
									<small>small text</small>
								</h3>
								<p>Sample paragraph.</p>

								<p>Your custom text.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/span-->
			<!--/span-->
		</div>
		<script>
			function getDiscount(){
				//alert()
				var retailPrice=document.getElementById("txtRetailPrice").value;
				var sellingPrice=document.getElementById("txtSellingPrice").value;

				
					var result=sellingPrice/retailPrice;
					var result=result*100;

					document.getElementById("txtDiscount").value=100-Math.floor(result);
			}
		</script>