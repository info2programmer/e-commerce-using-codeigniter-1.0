
<ul class="breadcrumb">
	<li>
		<a href="welcome">Home</a>
	</li>
	<li>
		<a href="#">Category</a>
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
					<li class="active"><a href="#info">NewCategory</a></li>
					<li><a href="#custom">CategorytList</a></li>
					<!-- <li><a href="#messages">Stock</a></li> -->
				</ul>

				<div id="myTabContent" class="tab-content">
					<div class="tab-pane active" id="info">
						<h3>Category
							<small>Create New Category</small>
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
						<?php echo form_open_multipart('admin/newcategory'); ?>
						<div class="form-group col-md-6">
							<?php echo form_label('Category Name', 'txtCategoryName'); ?>
							<?php
							$txtCategoryName=array(
								'class' => 'form-control',
								'id' => 'txtCategoryName',
								'placeholder' => 'Enter Category Name',
								'name' => 'txtCategoryName'
								); ?>

								<?php echo form_input($txtCategoryName); ?>
							</div>

							<div class="form-group col-md-6">
								<?php echo form_label('Category Live', 'chkCategoryActive'); ?>
								<?php 
								$chkCategoryActive= array(
									'class' => 'form-control'
									);
									?>
									<?php echo form_checkbox('chkCategoryActive', '1', 'TRUE',$chkCategoryActive) ?>
								</div>

								<div class="form-group col-md-12">
									<?php echo form_label('Description', 'txtDescription'); ?>
									<?php 
									$txtDescription=array(
										'class' => 'form-control',
										'id' => 'txtDescription',
										'placeholder' => 'Enter Product Name',
										'name' => 'txtDescription',
										'rows'=> '3'
										); ?>
										<?php echo form_textarea($txtDescription); ?>
									</div>

									<div class="form-group col-md-12 text-center">
										<?php
										$buttonAttribute=array(
											'name' => 'btnSubmit',
											'value' => 'Crate Category',
											'class' => 'btn btn-default btn-lg'
											);
										echo form_submit($buttonAttribute);
										?>
									</div>

									<? echo form_close(); ?>

									<br><br/> <br>

								</div>
								<div class="tab-pane" id="custom">
									<h3>Categoey List
										<small>Get All Category And Delete Category</small>
									</h3>
									<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
										<thead>
											<tr>
											<th>Category Name</th>
											<th>Category Description</th>
											<th>Status</th>
											<th>Actions</th>
											</tr>
										</thead>
										<tbody>
										<?php if($result): ?>
											<?php foreach ($result as $object): ?>
												<tr>
													<td><?php echo $object->CategoryName; ?></td>
													<td class="center"><?php echo $object->CategoryDescription; ?></td>
													<td class="center">
													<?php if($object->CategoryActive): ?>
														<span class="label-success label label-default">Active</span>
													<?php else: ?>
														<span class="label-default label label-danger">Banned</span>
													<?php endif;?>
													</td>
													<td class="center">
														<a class="btn btn-danger" href="deletecategory/<?php echo $object->CategoryId; ?>">
															<i class="glyphicon glyphicon-trash icon-white"></i>
															Delete
														</a>
														<?php if($object->CategoryActive): ?>
															<a class="btn btn-warning" href="bandcategory/<?php echo $object->CategoryId; ?>/0">
																<i class="glyphicon glyphicon-pencil icon-white"></i>
																Band
															</a>
														<?php else: ?>
															<a class="btn btn-info" href="bandcategory/<?php echo $object->CategoryId; ?>/1">
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