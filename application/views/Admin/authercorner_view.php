    <ul class="breadcrumb">
    	<li>
    		<a href="<?php echo base_url(); ?>admin/welcome">Home</a>
    	</li>
    	<li>
    		<a href="#">Author's Corner</a>
    	</li>
    </ul>

    <?php
    $txtPostTitle=array(
	    'name' => 'txtPostTitle',
		'class' => 'form-control',
		'id' => 'txtPostTitle',
		'placeholder' => 'Enter Post Title'
    );
    $txtPostDescription=array(
	    'name' => 'txtPostDescription',
		'class' => 'form-control',
		'id' => 'txtPostDescription',
		'placeholder' => 'Enter Post Description'
    );
    $txtAuthorDetails=array(
	    'name' => 'txtAuthorDetails',
		'class' => 'form-control',
		'id' => 'txtAuthorDetails',
		'placeholder' => 'Enter Author Details'
    );

     $txtAuthorName=array(
        'name' => 'txtAuthorName',
        'class' => 'form-control',
        'id' => 'txtAuthorName',
        'placeholder' => 'Enter Author Name'
    );

      $txtGener=array(
        'name' => 'txtGener',
        'class' => 'form-control',
        'id' => 'txtGener',
        'placeholder' => 'Enter Genre'
    );
    //Button Submit Attribute
	$buttonAttribute=array(
	'name' => 'btnSubmit',
	'value' => 'Create Post',
	'class' => 'btn btn-default btn-lg'
	);

	$filePostImage=array(
	'name' => 'filePostImage',
	'class' => 'form-control',
	'id' => 'filePostImage'
	);
	$fileAuthorImage=array(
	'name' => 'fileAuthorImage',
	'class' => 'form-control',
	'id' => 'fileAuthorImage'
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
    				<li class="active"><a href="#info">New Post</a></li>
    					<li><a href="#custom">Post List</a></li>
    				</ul>

    				<div id="myTabContent" class="tab-content">
    					<div class="tab-pane active" id="info">
    						<h3>New Author's Post
    							<small>Create New Author's Post</small>
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
    						<?php echo form_open_multipart('admin/newpost'); ?>


    						<div class="form-group col-md-12">
    							<?php echo form_label('Post Title', 'txtPostTitle'); ?>
    							<?php 
    							echo form_input($txtPostTitle);;
    							?>
    						</div>
    						<div class="form-group col-md-12">
    							<?php echo form_label('Post Details', 'txtPostDescription'); ?>
    							<?php 
    							echo form_textarea($txtPostDescription);
    							?>
    						</div>
    						<div class="form-group col-md-12">
    							<?php echo form_label('Author Description', 'txtAuthorDetails'); ?>
    							<?php 
    							echo form_input($txtAuthorDetails);
    							?>
    						</div>
                            <div class="form-group col-md-6">
                                <?php echo form_label('Auther Name', 'txtAuthorName'); ?>
                                <?php echo form_input($txtAuthorName); ?>
                            </div>
                            <div class="form-group col-md-6">
                                <?php echo form_label('Genre', 'txtGener'); ?>
                                <?php echo form_input($txtGener); ?>
                            </div>
    						<div class="form-group col-md-6">
    							<?php echo form_label('Select Post Image', 'filePostImage'); ?>
    							<?php 
    							echo form_upload($filePostImage);
    							?>
    						</div><div class="form-group col-md-6">
    							<?php echo form_label('Select Author Image', 'fileAuthorImage'); ?>
    							<?php 
    							echo form_upload($fileAuthorImage);
    							?>
    						</div>
    						<div class="form-group col-md-12">
    							<?php
    								echo form_submit($buttonAttribute);
    							?>
    						</div>
    						<h4><span class="label label-info">Author Image Should Be 200px*200px</span>
    						<span class="label label-info">Post Image Should Be 850px*450px</span>
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
    									<th>Date</th>
    									<th>Post Title </th>
    									<th>Author Name </th>
    									<th>Genre </th>
    									<th>Post Image </th>
    									<th>Author Image </th>
    									<th>Action </th>
    								</tr>
    							</thead>
    							<tbody>
    								<?php foreach ($postdata as $object):?>
    									<tr>
    										<td><?php echo $object->PostDateAndTime;	?></td>
    										<td><?php echo $object->PostTitle;	?></td>
    										<td><?php echo $object->AutherName; ?></td>
    										<td><?php echo $object->Gener; ?></td>
    										<td><img src='<?php echo base_url(); ?>assets/Post/<?php echo $object->PostImage; ?>' height="150px" width="150px"/></td>
    										<td><img src='<?php echo base_url(); ?>assets/Post/<?php echo $object->AuthorImage; ?>' height="150px" width="150px" /></td>
    										<td><a class="btn btn-danger" href="<?php echo base_url();?>admin/deletepost/<?php echo $object->Id; ?>/<?php echo $object->PostImage; ?>/<?php echo $object->AuthorImage; ?>">Delete</a></td>
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