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
foreach ($products as $object) {
	
$txtProductNameAttribute=array(
	'class' => 'form-control',
	'id' => 'txtProductName',
	'placeholder' => 'Enter Product Name',
	'name' => 'txtProductName',
	'value' => $object->ProductName
	);
$txtProductSKU=array(
	'class' => 'form-control',
	'id' => 'txtProductSKU',
	'placeholder' => 'Enter Product SKU',
	'name' => 'txtProductSKU',
	'value' => $object->ProductSKU
	); 
$txtAuther= array(
	'name' => 'txtAuther',
	'id' => 'txtAuther',
	'placeholder' => 'Enter Auther Name',
	'class' => 'form-control',
	'value' => $object->ProductAuther
	);
$txtstock= array(
	'name' => 'txtstock',
	'id' => 'txtstock',
	'placeholder' => 'Enter Stock Amount',
	'class' => 'form-control',
	'type' => 'number',
	'value' => $object->ProductStock
	);
$txtRetailPrice= array(
	'name' => 'txtRetailPrice',
	'id' => 'txtRetailPrice',
	'placeholder' => 'Enter Retail Price',
	'class' => 'form-control',
	'type' => 'number',
	'value' => $object->ProductRetailPrice
	);

$txtSellingPrice= array(
	'name' => 'txtSellingPrice',
	'id' => 'txtSellingPrice',
	'placeholder' => 'Enter Selling Price',
	'class' => 'form-control',
	'type' => 'number',
	'onblur' => 'getDiscount()',
	'value' => $object->ProductSellingPrice
	);

$txtDiscount= array(
	'name' => 'txtDiscount',
	'id' => 'txtDiscount',
	'placeholder' => 'Discount (Auto Calculate)',
	'class' => 'form-control',
	'type' => 'number',
	'Readonly' => 'readonly',
	'value' => $object->ProductDiscount
	);

$txtLanguage= array(
	'name' => 'txtLanguage',
	'id' => 'txtLanguage',
	'placeholder' => 'Enter Language',
	'class' => 'form-control',
	'value' => $object->ProductLanguage
	);
$txtProductSeries= array(
	'name' => 'txtProductSeries',
	'id' => 'txtProductSeries',
	'placeholder' => 'Enter Product Series',
	'class' => 'form-control',
	'value' => $object->ProdutSeries
	);
$txtISBN= array(
	'name' => 'txtISBN',
	'id' => 'txtISBN',
	'placeholder' => 'Enter Product ISBN',
	'class' => 'form-control',
	'value' => $object->ProductISBN
	);

$txtEdition= array(
	'name' => 'txtEdition',
	'id' => 'txtEdition',
	'placeholder' => 'Enter Product Edition',
	'class' => 'form-control',
	'value' => $object->ProducEdition
	);


$txtPublishDate= array(
	'name' => 'txtPublishDate',
	'id' => 'txtPublishDate',
	'placeholder' => 'Enter Publish Date',
	'class' => 'form-control',
	'type' => 'date',
	'value' => $object->PublishDate
	);
$txtBinding= array(
	'name' => 'txtBinding',
	'id' => 'txtBinding',
	'placeholder' => 'Enter Binding',
	'class' => 'form-control',
	'value' => $object->ProductBinding
	);

$txtNoPage= array(
	'name' => 'txtNoPage',
	'id' => 'txtNoPage',
	'placeholder' => 'Enter Number Of Page',
	'class' => 'form-control',
	'type' => 'number',
	'value' => $object->ProductPages
	);

$txtWeight= array(
	'name' => 'txtWeight',
	'id' => 'txtWeight',
	'placeholder' => 'Enter Weight',
	'class' => 'form-control',
	'value' => $object->ProductWeight
	);

$txtProductLive= array(
	'class' => 'form-control',
	'name' => 'chkPreorder',
	'value' => $object->ProductLiveFlag
	);

$txtDescription= array(
	'name' => 'txtDescription',
	'id' => 'txtDescription',
	'placeholder' => 'Enter Description',
	'class' => 'form-control',
	'rows' => '5',
	'value' => $object->ProductDescription
	);

$txtSearchKey= array(
	'name' => 'txtSearchKey',
	'id' => 'txtSearchKey',
	'placeholder' => 'Enter Search Keyword',
	'class' => 'form-control',
	'rows' => '5',
	'value' => $object->ProductSearchKey
	);

$buttonAttribute=array(
	'name' => 'btnEdit',
	'value' => 'Edit Book',
	'class' => 'btn btn-default btn-lg'
	);

$txtHidden=array(
	'name' => 'txtHidden',
	'type' => 'hidden',
	'value' => $object->ProductId
);

}

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
					<!-- <li><a href="#custom">ProductList</a></li>
					<li><a href="#messages">Stock</a></li> -->
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
						<?php echo form_open('admin/editproduct/11'); ?>
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
											foreach ($selectedcategory as $categories) {
												echo "<option value='".$categories->Category_Id."' selected>".$categories->categoryName."</option>";
											}
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
											foreach ($selectedhomecategory as $homecategories) {
												echo "<option value='".$homecategories->Category_Id."' selected>".$homecategories->categoryName."</option>";
											}
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
								<div class="form-group col-md-4">
									<?php echo form_label('Product Live', 'txtProductLive'); ?>
									
									<?php echo form_checkbox('txtProductLive', '1', 'TRUE',$txtProductLive) ?>
								</div>
								<div class="form-group col-md-4">
									<?php echo form_label('Description', 'txtDescription'); ?>
									<?php 
										
									?>
									<?php echo form_textarea($txtDescription); ?>
								</div>
								<div class="form-group col-md-4">
									<?php echo form_label('Search Keyword', 'txtSearchKey'); ?>
									<?php 
										
									?>
									<?php echo form_textarea($txtSearchKey); ?>
								</div>

								<?php echo form_input($txtHidden); ?>
								<div class="form-group col-md-12 text-center">
								<?php
									
									echo form_submit($buttonAttribute);
								?>
								</div>

								<? echo form_close(); ?>

								<br><br/> <br>

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