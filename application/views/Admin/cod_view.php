    <ul class="breadcrumb">
    	<li>
    		<a href="<?php echo base_url(); ?>admin/welcome">Home</a>
    	</li>
    	<li>
    		<a href="#">Cash On Delivey Managment</a>
    	</li>
    </ul>
</div>
<?php

//File Input Attribute
$txtLocationName=array(
	'name' => 'txtLocationName',
	'class' => 'form-control',
	'id' => 'txtLocationName',
	'placeholder' => 'Enter Location / Area'
);

$txtPincode= array(
	'name' => 'txtPincode',
	'class' => 'form-control',
	'Id' => 'txtPincode',
	'placeholder' => '733129',
	'type' => 'number'
 );

//Button Submit Attribute
$buttonAttribute=array(
	'name' => 'btnSubmit',
	'value' => 'Submit',
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
			<li class="active"><a href="#info">Cash On Delivery</a></li>
			<li><a href="#custom">COD List</a></li>
		</ul>

		<div id="myTabContent" class="tab-content">
			<div class="tab-pane active" id="info">
				<h3>Cash On Delivery
					<small>Create New COD</small>
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
				<?php echo form_open_multipart('admin/newcod'); ?>
				
					
						<div class="form-group col-md-6">
							<?php echo form_label('Location:', 'txtLocationName'); ?>
							<?php 
								echo form_input($txtLocationName);
							 ?>
						</div>
						<div class="form-group col-md-6">
							<?php echo form_label('Pincode:', 'txtPincode'); ?>
							<?php 
								echo form_input($txtPincode);
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
							<small>COD List</small>
						</h3>
						<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
						<thead>
							<tr>
								<th>Location Name</th>
								<th>Pin Code</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($codlist as $object):?>
							<tr>
							<td><?php echo $object->LocationName; ?></td>
							<td><?php echo $object->PinCode; ?></td>
							<td><a class="btn btn-danger" href="<?php echo base_url();?>admin/deletecod/<?php echo $object->LocationId; ?>">Delete</a></td>
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
