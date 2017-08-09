<ul class="breadcrumb">
	<li>
		<a href="<?php echo base_url(); ?>admin/welcome">Home</a>
	</li>
	<li>
		<a href="#">Manage Testimonial</a>
	</li>
</ul>
</div>
<div class="row">
<div class="box col-md-12">
<div class="box-inner homepage-box" style="height: 1050px;">
	<div class="box-header well">
		<h2><i class="glyphicon glyphicon-th"></i> Tabs</h2>


	</div>
	<div class="box-content">
		<ul class="nav nav-tabs" id="myTab">
			<li class="active"><a href="#info">Create Testimonial</a></li>
			<li><a href="#custom">Testimonial List</a></li>
		</ul>

		<div id="myTabContent" class="tab-content">
			<div class="tab-pane active" id="info">
				<h3>Testimonial Manage
					<small>Create New Tetimonial</small>
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
				<?php echo form_open_multipart('admin/inserttestimonial'); ?>
						<div class="form-group col-md-6">
							<?php echo form_label('Enter Day : ', 'txtDay'); ?>
							<?php 
								$txtDay=array(
									'name' => 'txtDay',
									'class' => 'form-control',
									'id' => 'txtUrl',
									'placeholder' => 'Wed, 2 March 2016'
								);
								echo form_input($txtDay);
							?>
						</div>
						<div class="form-group col-md-6">
						<?php echo form_label('Enter Comment :', 'txtComment'); ?>
						<?php 
							$txtComment=array(
								'name' => 'txtComment',
								'class' => 'form-control',
								'id' => 'txtComment',
								'placeholder' => 'বিভা পাবলিকেশনের সযত্ন ও দৃষ্টিনন্দন ছাপা এবং আকর্ষণীয় প্রচ্ছদ যে কোনও পাঠকের নজর কাড়তে বাধ্য।'
							);
							echo form_input($txtComment);
						?>
						</div>
						<div class="form-group col-md-12">
							<?php echo form_label('Select Iamge :', 'fileImage'); ?>
							<?php 
								$fileImage=array(
									'name' => 'fileImage',
									'class' => 'form-control',
									'id' => 'fileImage',
									'placeholder' => 'select image'
								);
								echo form_upload($fileImage);
							?>
						</div>
						<div class="form-group col-md-12 text-center">
						<?php 
						$buttonAttribute=array(
							'name' => 'btnSave',
							'value' => 'Save',
							'class' => 'btn btn-default btn-lg'
						);
						?>
						<?php
							echo form_submit($buttonAttribute);
						?>
						</div>

						<? echo form_close(); ?>

						<br><br/> <br>

					</div>
					<div class="tab-pane" id="custom">
						<h3>List
							<small>Testimonial List</small>
						</h3>
						<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
						<thead>
							<tr>
								<th>Day</th>
								<th>Comment</th>
								<th>By</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($postdata as $object):?>
							<tr>
							<td><?php echo $object->day; ?></td>
							<td><?php echo $object->comment; ?></td>
							<td><img src="<?php echo base_url(); ?>/assets/testimonial/<?php echo $object->image; ?>" height="75px" width="75px" /></td>
							<td><a class="btn btn-danger" href="<?php echo base_url();?>admin/deletetestimonail/<?php echo $object->Id; ?>/<?php echo $object->image; ?>">Delete</a></td>
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
