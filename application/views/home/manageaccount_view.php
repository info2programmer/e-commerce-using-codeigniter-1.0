<!--content-->
<div class="content">
	<!--contact-->
		<div class="mail-w3ls">
			<div class="container">
				<h2 class="tittle">Manage Your Account</h2></br>
				<div class="col-xs-12 col-sm-12" style="margin-top:10px;">
								<?php  if($this->session->flashdata('error_log')): ?>
								<div class="alert alert-danger alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								  <strong>Error!</strong><?php echo $this->session->flashdata('error_log') ?>
								</div>
								<?php elseif($this->session->flashdata('success_log')): ?>
									<div class="alert alert-success alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								  <strong>Success!</strong>&nbsp;<?php echo $this->session->flashdata('success_log') ?>
								</div>
								<?php endif; ?>

        						<?php foreach ($userdetails as $object): ?>
								<?php echo form_open('home/updateuserdata'); ?>
										<div class="col-md-4">
											<label for="txtFirstName">FIRST NAME<sup>*</sup> </label>
                                            <?php
                                            	$txtFirstName= array(
                                            	 'name' => 'txtFirstName',
                                            	 'Id' => 'txtFirstName',
                                            	 'class' => 'form-control',
                                            	 'placeholder' => 'Enter First Name',
                                            	 'required' => 'required',
                                            	 'value' => $object->FName
                                            	);
                                            ?>
                                            <?php echo form_input($txtFirstName); ?>
										</div>
										<div class="col-md-4">
											<label for="txtLastName">LAST NAME<sup>*</sup> </label>
											 <?php
                          	$txtLastName= array(
                          	 'name' => 'txtLastName',
                          	 'Id' => 'txtLastName',
                          	 'class' => 'form-control',
                          	 'placeholder' => 'Enter Last Name',
                          	 'required' => 'required',
                          	 'value' => $object->LName
                          	);
                          ?>
                           <?php echo form_input($txtLastName); ?>
										</div>
										<div class="col-sm-4">
											<label for="txtLastName">DATE OF BIRTH<sup>*</sup> </label>
											<input type="date" name="txtDateofBirth" class="form-control" value="<?php echo $object->uDateofBirth; ?>" />
										</div>
										<div class="col-md-6">
											<label for="txtPhoneNumber">PHONE NUMBER </label>
                                            <?php
                                            	$txtPhoneNumber= array(
                                            	 'name' => 'txtPhoneNumber',
                                            	 'Id' => 'txtPhoneNumber',
                                            	 'class' => 'form-control',
                                            	 'placeholder' => 'Enter Last Name',
                                            	 'required' => 'required',
                                            	 'type' => 'number',
                                            	 'value' => $object->userPhone
                                            	);
                                            ?>
                                             <?php echo form_input($txtPhoneNumber); ?>
										</div>
										<div class="col-md-6">
											<label for="txtEmail">Email Id<sup>*</sup> </label>
											<?php
                                            	$txtEmail= array(
                                            	 'name' => 'txtEmail',
                                            	 'Id' => 'txtEmail',
                                            	 'class' => 'form-control',
                                            	 'placeholder' => 'Enter Last Name',
                                            	 'required' => 'required',
                                            	 'type' => 'email',
                                            	 'value' => $object->uEmail,
                                            	 'readonly' => 'readonly'
                                            	);
                                            ?>
                                             <?php echo form_input($txtEmail); ?>
										</div>
										<div class="col-md-6">
														<label for="txtAddressLine1">ADDRESS LINE 1 <sup>*</sup> </label>
														<?php
														$txtAddressLine1=array(
															'class' => 'form-control',
															'id' => 'txtAddressLine1',
															'name' => 'txtAddressLine1',
															'placeholder' => 'Address Line 1',
															'required' => 'required',
															'rows' => '2',
                                            	 			'value' => $object->add1
														);
														?>
														<?php echo form_textarea($txtAddressLine1); ?>
													</div>
													<div class="col-md-6">
														<label for="txtAddressLine2">ADDRESS LINE 2</label>
														<?php
														$txtAddressLine2=array(
															'class' => 'form-control',
															'id' => 'txtAddressLine2',
															'name' => 'txtAddressLine2',
															'placeholder' => 'Address Line 2',
															'rows' => '2',
                                            	 			'value' => $object->add2
														);
														?>
														<?php echo form_textarea($txtAddressLine2); ?>
													</div>
													<div class="col-md-6">
														<label for="txtAddressLine3">ADDRESS LINE 3</label>
                            <?php
														$txtAddressLine3=array(
															'class' => 'form-control',
															'id' => 'txtAddressLine3',
															'name' => 'txtAddressLine3',
															'placeholder' => 'Address Line 3',
															'rows' => '2',
                                            	 			'value' => $object->add3
														);
														?>
														<?php echo form_textarea($txtAddressLine3); ?>
													</div>
													<div class="col-md-6">
														<label for="txtAddressLine4">ADDRESS LINE 4</label>
                                                        <?php
														$txtAddressLine4=array(
															'class' => 'form-control',
															'id' => 'txtAddressLine4',
															'name' => 'txtAddressLine4',
															'placeholder' => 'Address Line 4',
															'rows' => '2',
                                            	 			'value' => $object->add4
														);
														?>
														<?php echo form_textarea($txtAddressLine4); ?>
													</div>
													<div class="col-md-6">
														<label for="txtCity">CITY<sup>*</sup> </label>
                                                        <?php
														$txtCity=array(
															'class' => 'form-control',
															'id' => 'txtCity',
															'name' => 'txtCity',
															'placeholder' => 'Enter City',
															'type' => 'text',
															'required' => 'required',
                                            	 			'value' => $object->add4
														);
														?>
														<?php echo form_input($txtCity); ?>
													</div>
													<div class="col-md-6">
														<label for="txtPin">PIN CODE <sup>*</sup>
                                                        </label>
                                                        <?php
														$txtPin=array(
															'class' => 'form-control',
															'id' => 'txtPin',
															'name' => 'txtPin',
															'placeholder' => 'Enter Pin',
															'type' => 'number',
															'required' => 'required',
                                            	 			'value' => $object->pi
														);
														?>
														<?php echo form_input($txtPin); ?>
													</div>
													<div class="col-md-6">
																<label for="ddlState">STATE <sup>*</sup> </label>

                                                                <select class="form-control" required
                                                                        aria-required="true" id="ddlState"
                                                                        name="ddlState">
                                                                    <option value="<?php echo $object->st; ?>" selected><?php echo $object->st; ?></option>
                                                                    <option value="Andaman and Nicobar">Andaman and Nicobar</option>
																	<option value="Andhra Pradesh">Andhra Pradesh</option>
																	<option value="Arunachal Pradesh">Arunachal Pradesh</option>
																	<option value="Assam">Assam</option>
																	<option value="Bihar">Bihar</option>
																	<option value="Chandigarh">Chandigarh</option>
																	<option value="Chhattisgarh">Chhattisgarh</option>
																	<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
																	<option value="Daman and Diu">Daman and Diu </option>
																	<option value="Delhi">Delhi</option>
																	<option value="Goa">Goa</option>
																	<option value="Gujarat">Gujarat</option>
																	<option value="Haryana">Haryana</option>
																	<option value="Himachal Pradesh">Himachal Pradesh</option>
																	<option value="Jammu and Kashmir">Jammu and Kashmir</option>
																	<option value="Jharkhand">Jharkhand</option>
																	<option value="Karnataka">Karnataka</option>
																	<option value="Kerala">Kerala</option>
																	<option value="Lakshadweep">Lakshadweep </option>
																	<option value="Madhya Pradesh">Madhya Pradesh</option>
																	<option value="Maharashtra">Maharashtra</option>
																	<option value="Manipur">Manipur</option>
																	<option value="Meghalaya">Meghalaya</option>
																	<option value="Mizoram">Mizoram</option>
																	<option value="Nagaland">Nagaland</option>
																	<option value="Odisha">Odisha</option>
																	<option value="Puducherry">Puducherry</option>
																	<option value="Punjab">Punjab</option>
																	<option value="Rajasthan">Rajasthan</option>
																	<option value="Sikkim">Sikkim</option>
																	<option value="Tamil Nadu">Tamil Nadu</option>
																	<option value="Telangana">Telangana</option>
																	<option value="Tripura">Tripura</option>
																	<option value="Uttar Pradesh">Uttar Pradesh</option>
																	<option value="Uttarakhand">Uttarakhand</option>
																	<option value="West Bengal">West Bengal</option>
                                                                </select>
													</div>
												<div class="col-md-6">
													<label for="InputName">Country<sup>*</sup> </label>
													<input required type="text" class="form-control" id="" value="India (Service Available In India Only)" disabled="">
												</div>
											<?php endforeach; ?>
												<!--<div class="col-md-6">
													<label for="landmark">LANDMARK
													 <sup>*</sup></label>
													<input required type="text" name="landmark"
																   class="form-control" id="" placeholder="LANDMARK">
												</div>
												<div class="col-md-12">
													<label for="specialNote">Special Note </label>
													<textarea  required type="text" class="form-control notes"
                                                           id="" placeholder="If you Have Any Notes Then Fill Free To Tell Us"></textarea>
												</div>-->

										<div class="col-md-12">
											<?php
													$buttonAttribute= array(
														'class' => 'btn btn-success coupon pull-right nxt',
														'role' => 'button',
														'value' => 'Update data',
														'name' => 'btnSubmit'

													);
													?>
													<?php echo form_submit($buttonAttribute); ?>
													&nbsp;
														<a class="btn btn-success coupon pull-right nxt" style="margin-right:14px" role="button" data-toggle="collapse" data-parent="#accordion" href="javascript:window.history.back();" aria-expanded="false"><span class="glyphicon glyphicon-chevron-left"></span> Back</a>
													</div>
										</div>
									<?php echo form_close(); ?>
				</div>
    <!--<div class="col-xs-12 col-sm-6" style="margin-top:10px;">
        <h2 class="block-title-2"><span>Already registered?</span></h2>

        <form role="form" class="logForm ">
            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="checkbox">
                    Remember me </label>
            </div>
            <div class="form-group">
                <p><a title="Recover your forgotten password" href="forgot-password.html">Forgot your
                    password? </a></p>
            </div>
            <a class="btn btn-primary" href="my-account.php"><i class="fa fa-sign-in"></i> Sign In</a>


        </form>
    </div>-->

			</div>
		</div>
	<!--contact-->
</div>
<!--content-->
