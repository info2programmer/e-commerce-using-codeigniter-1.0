    <ul class="breadcrumb">
    	<li>
    		<a href="<?php echo base_url(); ?>admin/welcome">Home</a>
    	</li>
    	<li>
    		<a href="<?php echo base_url(); ?>admin/products">Products</a>
    	</li>
    	<li>
    		<a href="#">Products Images</a>
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
					<li class="active"><a href="#info">Insert Image</a></li>
					<li><a href="#custom">Image List</a></li>
				</ul>

				<div id="myTabContent" class="tab-content">
					<div class="tab-pane active" id="info">
						<h3>Images
							<small>Manage Product Images</small>
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
						<?php echo form_open_multipart('admin/insertproductimage'); ?>
								<div class="form-group col-md-12 text-center">
									<?php echo form_label('Select Image', 'fileImage'); ?>
									<?php
										$fileThambImage= array(
										'name' => 'fileImage[]',
										'id' => 'fileImage',
										'placeholder' => 'Enter Weight',
										'class' => 'form-control',
										'multiple' => 'multiple'
										);
									?>
									<?php echo form_upload($fileThambImage); ?>
								</div>
								<?php echo form_hidden('txtProductid', $product_id); ?>
								<div class="form-group col-md-12 text-center">
								<?php
									$buttonAttribute=array(
									'name' => 'btnSubmit',
									'value' => 'Upoad Image',
									'class' => 'btn btn-default btn-lg'
									);
									echo form_submit($buttonAttribute);
								?>
								</div>

								<? echo form_close(); ?>

								<br><br/> <br>

							</div>
							<div class="tab-pane" id="custom">
								<h3>Image List
									<small>Get All Product Images</small>
								</h3>
								<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
								<thead>
									<tr>
										<th>Product Name</th>
										<th>SKU</th>
										<th>Image</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($imagelist as $obImage ): ?>
										<tr>
											<td><?php echo $obImage->ProductName; ?></td>
											<td><?php echo $obImage->ProductSKU ; ?></td>
											<td><img src='<?php echo base_url()."assets/singleproductimage/".$obImage->ImageName; ?>' height="75px" width="75px" /></td>
											<td><a href="<?php echo base_url(); ?>admin/deleteproductimage/<?php echo $obImage->ImageID; ?>/<?php echo $obImage->ImageName; ?>/<?php echo $obImage->Product_Id; ?>" class="btn btn-danger" >Delete</a>
											</td>
											
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