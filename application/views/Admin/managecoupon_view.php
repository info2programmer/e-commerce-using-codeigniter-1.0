<ul class="breadcrumb">
  <li>
    <a href="<?php echo base_url(); ?>admin/welcome">Home</a>
  </li>
  <li>
    <a href="#">Coupon Managment</a>
  </li>
</ul>
</div>
<?php
//Form Attribute
$txtCoupon= array(
  'name' => 'txtCoupon',
	'class' => 'form-control',
	'id' => 'txtCoupon',
	'placeholder' => 'Enter Coupon Code'
);

$txtCouponName=array(
  'name' => 'txtCouponName',
	'class' => 'form-control',
	'id' => 'txtCouponName',
	'placeholder' => 'Enter Coupon Person Name'
);

$txtCouponName=array(
  'name' => 'txtCouponName',
	'class' => 'form-control',
	'id' => 'txtCouponName',
	'placeholder' => 'Enter Coupon Person Name'
);

$txtCouponEmail=array(
  'name' => 'txtCouponEmail',
  'class' => 'form-control',
  'id' => 'txtCouponEmail',
  'placeholder' => 'Enter Coupon Person Email'
);

$txtCouponPhone=array(
  'name' => 'txtCouponPhone',
  'class' => 'form-control',
  'id' => 'txtCouponPhone',
  'placeholder' => 'Enter Coupon Person Phone'
);

$txtCouponDiscount=array(
  'name' => 'txtCouponDiscount',
  'class' => 'form-control',
  'id' => 'txtCouponDiscount',
  'type' => 'number',
  'placeholder' => 'Enter Discount Amount'
);

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
					<li class="active"><a href="#info">Coupon</a></li>
					<li><a href="#custom">Coupons List</a></li>
					<li><a href="#upload">Upload Coupon</a></li>
				</ul>

				<div id="myTabContent" class="tab-content">
					<div class="tab-pane active" id="info">
						<h3>Coupon
							<small>Create New Coupon</small>
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
						<?php echo form_open_multipart('admin/createcoupon'); ?>


								<div class="form-group col-md-6">
									<?php echo form_label('Coupon Code* : ', 'txtCoupon'); ?>
									<?php
										echo form_input($txtCoupon);
									 ?>
								</div>
								<div class="form-group col-md-6">
									<?php echo form_label('Enter Coupon Person Name :', 'txtCouponName'); ?>
									<?php
										echo form_input($txtCouponName);
									 ?>
								</div>
                <div class="form-group col-md-6">
									<?php echo form_label('Enter Coupon Person Email :', 'txtCouponEmail'); ?>
									<?php
										echo form_input($txtCouponEmail);
									 ?>
								</div>
                <div class="form-group col-md-6">
									<?php echo form_label('Enter Coupon Person Phone :', 'txtCouponPhone'); ?>
									<?php
										echo form_input($txtCouponPhone);
									 ?>
								</div>
                <div class="form-group col-md-6">
									<?php echo form_label('Enter Discount Amount :', 'txtCouponDiscount'); ?>
									<?php
										echo form_input($txtCouponDiscount);
									 ?>
								</div>
                <div class="form-group col-md-6">
									<?php echo form_label('Select Discount Type :', 'ddlDiscountType'); ?>
									<select class="form-control" name="ddlDiscountType" Id="ddlDiscountType" required>
									  <option value="">Select Discount Type</option>
									  <option value="cash">Cash Discount</option>
									  <option value="trad">Trad Discount</option>
									</select>
								</div>
								<div class="form-group col-md-12 text-center">
								<?php
									echo form_submit($buttonAttribute);
								?>
								</div>

								<?php echo form_close(); ?>

								<br><br/> <br>

							</div>
							<div class="tab-pane" id="custom">
								<h3>List
									<small>Coupons List</small>
								</h3>
								<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
								<thead>
									<tr>
										<th>Coupon Code</th>
										<th>Coupon Person Name</th>
										<th>Coupon Person Email</th>
										<th>Coupon Person Phone</th>
										<th>Coupon Status</th>
										<th>Coupon Discount</th>
										<th>Discount Type</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($couponlist as $object):?>
									<tr>
									<td><?php echo $object->CouponCode; ?></td>
									<td><?php echo $object->CouponPersonName; ?></td>
									<td><?php echo $object->CouponPersonEmail; ?></td>
									<td><?php echo $object->CouponPersonPhone; ?></td>
                  <?php if($object->CouponStatus==1): ?>
									<td><span class="label-success label label-default">Active</span></td>
                  <?php else: ?>
                  <td><span class="label-default label label-danger">Banned</span></td>
                  <?php endif; ?>
									<td><?php echo $object->CouponDiscount; ?></td>
									<td><?php echo $object->CouponType; ?></td>
									<td><a class="btn btn-danger" href="<?php echo base_url();?>admin/deletecoupon/<?php echo $object->CouponId; ?>">Delete</a>
                  <?php if($object->CouponStatus==1): ?>
                    <a class="btn btn-warning" href="<?php echo base_url();?>admin/changestatus/<?php echo $object->CouponId; ?>/0">Disable</a>
                  <?php else: ?>
                    <a class="btn btn-success" href="<?php echo base_url();?>admin/changestatus/<?php echo $object->CouponId; ?>/1">Enable</a>
                  <?php endif; ?>
                  </td>
									</tr>
								<?php endforeach; ?>
								</tbody>
								</table>
							</div>

							<div class="tab-pane" id="upload">
								<h3>Upload
									<small>Upload Coupon</small>
								</h3>
								<?php echo form_open_multipart('admin/uploadcoupon'); ?>
									<div class="form-group col-md-12">
										<?php echo form_label('Select Image', 'fileCouponImage'); ?>
										<?php
											$fileCouponImage=array(
												'class' => 'form-control',
												'name' => 'fileCouponImage',
												'id' => 'fileCouponImage',
												'required' => 'required'
											);
										 ?>
										<?php echo form_upload($fileCouponImage); ?>
									</div>
									<div class="form-group text-center">
										<?php
											$btnUpload=array(
												'name' => 'btnUpload',
												'class' => 'btn btn-success',
												'id' => 'btnUpload',
												'value' => 'Upload Coupon'
											);
										 ?>
										<?php echo form_submit($btnUpload); ?>										
									</div>
								<?php echo  form_close(); ?>
								<hr style="border:1px solid black" />
								<h3 align="center">Coupon Image List</h3>
								<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
								<thead>
									<tr>
										<th>Image</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($couponimage as $image) : ?>
										<td>
											<img src="<?php echo base_url(); ?>assets/coupons/<?php echo $image->Image ?>" height="75px" width="75px">
										</td>
										<td>
											<?php echo anchor('admin/deletecouponimage/'.$image->Id.'/'.$image->Image, 'Delete', array('class'=>'delete', 'onclick'=>"return confirmDialog();")); ?>	
										</td>
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
		<script type="text/javascript">
			function confirmDialog() {
			    return confirm("Are you sure you want to delete this coupon?")
			}
		</script>
