
<ul class="breadcrumb">
<li>
<a href="welcome">Home</a>
</li>
<li>
<a href="#">Publisher</a>
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
<li class="active"><a href="#info">NewPublisher</a></li>
<li><a href="#custom">PublishertList</a></li>
<!-- <li><a href="#messages">Stock</a></li> -->
</ul>

<div id="myTabContent" class="tab-content">
<div class="tab-pane active" id="info">
<h3>Publisher
<small>Create New Publisher</small>
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
<?php echo form_open_multipart('admin/newpublisher'); ?>
<div class="form-group col-md-6">
<?php echo form_label('Name', 'txtPublisherName'); ?>
<?php
$txtPublisherName=array(
'class' => 'form-control',
'id' => 'txtPublisherName',
'placeholder' => 'Enter Publisher Name',
'name' => 'txtPublisherName'
); ?>

<?php echo form_input($txtPublisherName); ?>
</div>

<div class="form-group col-md-6">
<?php echo form_label(' Address', 'txtPublisherAddress'); ?>
<?php
$txtPublisherAddress=array(
	'class' => 'form-control',
	'id' => 'txtPublisherAddress',
	'placeholder' => 'Enter Publisher Address',
	'name' => 'txtPublisherAddress',
	'rows' => '3'
	); ?>

	<?php echo form_textarea($txtPublisherAddress); ?>
</div>

<div class="form-group col-md-4">
	<?php echo form_label(' Phone', 'txtPublisherPhone'); ?>
	<?php
	$txtPublisherPhone=array(
		'class' => 'form-control',
		'id' => 'txtPublisherPhone',
		'placeholder' => 'Enter Publisher Phone Number',
		'name' => 'txtPublisherPhone',
		'Type' => 'number'
		); ?>

		<?php echo form_input($txtPublisherPhone); ?>
	</div>

	<div class="form-group col-md-4">
		<?php echo form_label('Email', 'txtPublisherEmail'); ?>
		<?php
		$txtPublisherEmail=array(
			'class' => 'form-control',
			'id' => 'txtPublisherEmail',
			'placeholder' => 'Enter Publisher Email Address',
			'name' => 'txtPublisherEmail',
			'type' => 'email'			); ?>

			<?php echo form_input($txtPublisherEmail); ?>
		</div>

		<div class="form-group col-md-4">
			<?php echo form_label('Publisher Live', 'chkPublisherActive'); ?>
			<?php 
			$chkPublisherActive= array(
				'class' => 'form-control'
				);
				?>
				<?php echo form_checkbox('chkPublisherActive', '1', 'TRUE',$chkPublisherActive) ?>
			</div>

			<div class="form-group col-md-12 text-center">
				<?php
				$buttonAttribute=array(
					'name' => 'btnSubmit',
					'value' => 'Crate Publisher',
					'class' => 'btn btn-default btn-lg'
					);
				echo form_submit($buttonAttribute);
				?>
			</div>

			<? echo form_close(); ?>

			<br><br/> <br>

		</div>
		<div class="tab-pane" id="custom">
			<h3>Publisher List
				<small>Get All Publisher And Delete Publisher</small>
			</h3>
			<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
				<thead>
					<tr>
						<th>Name</th>
						<th>Address</th>
						<th>Phone</th>
						<th>Email</th>
						<th>Status</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php if($result): ?>
						<?php foreach ($result as $object): ?>
							<tr>
								<td><?php echo $object->PublisherName; ?></td>
								<td class="center"><?php echo $object->PublisherAddress; ?></td>
								<td class="center"><?php echo $object->PublisherPhone; ?></td>
								<td class="center"><?php echo $object->PublisherEmail; ?></td>
								<td class="center">
									<?php if($object->PublisherActive): ?>
										<span class="label-success label label-default">Active</span>
									<?php else: ?>
										<span class="label-default label label-danger">Banned</span>
									<?php endif;?>
								</td>
								<td class="center">
									<a class="btn btn-danger" href="deletepublisher/<?php echo $object->PublisherId; ?>">
										<i class="glyphicon glyphicon-trash icon-white"></i>
										Delete
									</a>
									<?php if($object->PublisherActive): ?>
										<a class="btn btn-warning" href="bandpublisher/<?php echo $object->PublisherId; ?>/0">
											<i class="glyphicon glyphicon-pencil icon-white"></i>
											Band
										</a>
									<?php else: ?>
										<a class="btn btn-info" href="bandpublisher/<?php echo $object->PublisherId; ?>/1">
											<i class="glyphicon glyphicon-ok icon-white"></i>
											Active
										</a>
									<?php endif; ?>
								</td>
							</tr>
						<?php endforeach; ?>
					<?php endif; ?>
				</tbody>
			</table>
		</div>
<!-- <div class="tab-pane" id="messages">
<h3>Messages
	<small>small text</small>
</h3>
<p>Sample paragraph.</p>

<p>Your custom text.</p>
</div> -->
</div>
</div>
</div>
</div>
<!--/span-->
<!--/span-->
</div>