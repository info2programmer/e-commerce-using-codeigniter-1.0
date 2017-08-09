    <ul class="breadcrumb">
    	<li>
    		<a href="<?php echo base_url(); ?>admin/welcome">Home</a>
    	</li>
    	<li>
    		<a href="#">Best Seller</a>
    	</li>
    </ul>
</div>
<?php 
//Attributes
$buttonAttribute=array(
	'name' => 'btnEdit',
	'value' => 'Upload',
	'class' => 'btn btn-default btn-lg'
	);
 $fileUpload=array(
 	'name' => 'fileUpload',
 	'class' => 'form-control',
 	'id' => 'fileUpload'
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
					<li class="active"><a href="#info">Free Sample Books</a></li>
					<li><a href="#custom">List</a></li>
				</ul>

				<div id="myTabContent" class="tab-content">
					<div class="tab-pane active" id="info">
						<h3>Free Sample
							<small>Update Free Sample Books</small>
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
						<?php echo form_open_multipart('admin/addfreesample'); ?>
								<div class="form-group col-md-6">
									<?php echo form_label('Select Best Seller Books', 'ddlBestSeller'); ?>
									<select name="ddlBooks" id="ddlBestSeller" class="form-control" data-rel="chosen" >
										<?php 
											foreach ($productlists as $productlist) {
												echo "<option value='".$productlist->ProductId."' >".$productlist->ProductName."</option>";
											}
										?>
									</select>
								</div>

								<div class="form-group col-md-6">
									<?php echo form_label('Select Pdf Image', 'fileUpload'); ?>
									<?php echo form_upload($fileUpload); ?>
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
										<th>Serial Number</th>
										<th>Book Name</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								<?php $counter=0; ?>
								<?php foreach ($bestselleing as $object):?>
									<?php $counter++; ?>
									<tr>
									<td><?php echo $counter++; ?></td>
									<td><?php echo $object->ProductName; ?></td>
									<td><a class="btn btn-danger" href="<?php echo base_url();?>admin/deletebestsellingboooks/<?php echo $object->SerialNo; ?>">Delete</a></td>
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
