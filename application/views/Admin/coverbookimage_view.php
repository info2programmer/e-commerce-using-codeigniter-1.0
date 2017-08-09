<ul class="breadcrumb">
	<li>
		<a href="<?php echo base_url(); ?>admin/welcome">Home</a>
	</li>
	<li>
		<a href="#">Cover Books</a>
	</li>
</ul>
<?php
$fileImage= array(
'name' => 'fileImage[]',
'id' => 'fileImage',
'placeholder' => 'Enter Weight',
'class' => 'form-control',
'multiple' => 'multiple',
'required' => 'required'
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
	<li class="active"><a href="#info">New Home Book Image</a></li>
		<li><a href="#custom">List</a></li>
	</ul>

	<div id="myTabContent" class="tab-content">
		<div class="tab-pane active" id="info">
			<h3>New Home Book Image 
				<small>Create New Landing paeg cover Book Image</small>
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
			<?php echo form_open_multipart('admin/addcoverbooks'); ?>
			
			<div class="form-group col-md-12">
				<?php echo form_label('Select Cover Book Image', 'fileImage'); ?>
				<?php 
				echo form_upload($fileImage);
				?>
			</div>
			<div class="form-group col-md-12">
				<?php
					$buttonAttribute=array(
					'name' => 'btnSubmit',
					'value' => 'Upoad Image',
					'class' => 'btn btn-default btn-lg'
					);
					echo form_submit($buttonAttribute);
				?>
			</div>
			<h4><span class="label label-info">Cover Book Image Should Be 400px*600px</span>
			</h4>
			<? echo form_close(); ?>

			<br><br/> <br>

		</div>
		<div class="tab-pane" id="custom">
			<h3>List
				<small>Get All Author's Post List</small>
			</h3>
			<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
				<thead>
					<tr>
						<th>Cover Image </th>
						<th>Action </th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($postdata as $object):?>
						<tr>
							<td><img src='<?php echo base_url(); ?>assets/coverbooks/<?php echo $object->coverbook; ?>' height="150px" width="150px" /></td>
							<td><a class="btn btn-danger" href="<?php echo base_url();?>admin/deletecoverpost/<?php echo $object->id; ?>/<?php echo $object->coverbook; ?>">Delete</a></td>
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