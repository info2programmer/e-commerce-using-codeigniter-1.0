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

//File Input Attribute
$fileImage=array(
	'name' => 'fileImage',
	'class' => 'form-control',
	'id' => 'fileImage'
);

$txtUrl=array(
	'name' => 'txtUrl',
	'class' => 'form-control',
	'id' => 'txtUrl',
	'placeholder' => 'http://bivapublication.com/home/bsdhahdaidhaisdhaidhad'
);

//Button Submit Attribute
$buttonAttribute=array(
	'name' => 'btnSubmit',
	'value' => 'Insert Banner',
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
					<li class="active"><a href="#info">NewBanner</a></li>
					<li><a href="#custom">BannerList</a></li>
				</ul>

				<div id="myTabContent" class="tab-content">
					<div class="tab-pane active" id="info">
						<h3>Benner
							<small>Create New Banner</small>
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
						<?php echo form_open_multipart('admin/newbanner'); ?>
						
							
								<div class="form-group col-md-12 text-center">
									<?php echo form_label('Select Image', 'fileImage'); ?>
									<?php 
										echo form_upload($fileImage);;
									 ?>
								</div>
								<div class="form-group col-md-12 text-center">
									<?php echo form_label('Enter URL', 'txtUrl'); ?>
									<?php 
										echo form_input($txtUrl);
									 ?>
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
									<small>Get All Banner</small>
								</h3>
								<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
								<thead>
									<tr>
										<th>Image</th>
										<th>Added By </th>
										<th>Added Date Time</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($bannerlist as $object):?>
									<tr>
									<td><img src="<?php echo base_url(); ?>assets/Banner/<?php echo $object->BannerImage; ?>" height="150px"/></td>
									<td><?php echo $object->AddedBy; ?></td>
									<td><?php echo $object->Addtime; ?></td>
									<td><a class="btn btn-danger" href="<?php echo base_url();?>admin/deletebanner/<?php echo $object->BannerId; ?>/<?php echo $object->BannerImage; ?>">Delete</a></td>
									</tr>
								<?php endforeach; ?>
								</tbody>
								</table>
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