<?php
//This Variables For Form Attribute
	if($userdata!=null)
	{
		foreach ($userdata as $key) {
		$txtName=array(
			'name' => 'txtName',
			'id' => 'txtName',
			'class' => 'form-control',
			'required' => 'required',
			'type' => 'text',
			'placeholder'=>'Name',
			'value' => $key->FName." ".$key->LName
		);
		$txtEmail=array(
			'name' => 'txtEmail',
			'id' => 'txtEmail',
			'class' => 'form-control',
			'required' => 'required',
			'type' => 'email',
			'placeholder'=>'Email',
			'value' => $key->uEmail
		);
		$txtPhone=array(
			'name' => 'txtPhone' ,
			'id' => 'txtPhone',
			 'class' => 'form-control',
			'required' => 'required',
			'type' => 'number',
			'placeholder'=>'Phone Number',
			'value' => $key->userPhone
		);
		$txtAddress1=array(
			'name' => 'txtAddress1' ,
			'id' => 'txtAddress1',
			 'class' => 'form-control',
			'required' => 'required',
			'placeholder'=>'Address Line 1',
			'value' => $key->add1,
			'cols' => '26',
			'rows' => '2'
		);

		$txtAddress2=array(
			'name' => 'txtAddress2' ,
			'id' => 'txtAddress2',
			 'class' => 'form-control',
			'placeholder'=>'Address Line 2',
			'value' => $key->add2,
			'cols' => '26',
			'rows' => '2'
		);
		$txtAddress3=array(
			'name' => 'txtAddress3' ,
			'id' => 'txtAddress3',
			 'class' => 'form-control',
			'placeholder'=>'Address Line 3',
			'value' => $key->add3,
			'cols' => '26',
			'rows' => '2'
		);

		$txtAddress4=array(
			'name' => 'txtAddress4' ,
			'id' => 'txtAddress4',
			 'class' => 'form-control',
			'placeholder'=>'Address Line 4',
			'value' => $key->add4,
			'cols' => '26',
			'rows' => '2'
		);

		$txtCity=array(
			'name' => 'txtCity',
			'id' => 'txtCity',
			'class' => 'form-control',
			'required' => 'required',
			'type' => 'text',
			'placeholder'=>'City',
			'value' => $key->cty
		);
		$txtPin=array(
			'name' => 'txtPin',
			'id' => 'txtPin',
			'class' => 'form-control',
			'required' => 'required',
			'type' => 'text',
			'placeholder'=>'Pin',
			'value' => $key->pi,
			'maxlength' => '6',
			'onblur' => 'checkcashondelivery(this.value)'
		);
		$txtLandmark=array(
			'name' => 'txtLandmark',
			'id' => 'txtLandmark',
			'class' => 'form-control',
			'type' => 'text',
			'placeholder'=>'Landmark'
		);

		$txtSpecialNote=array(
			'name' => 'txtSpecialNote',
			'id' => 'txtSpecialNote',
			'class' => 'form-control',
			'placeholder'=>'If you Have Any Notes Then Fill Free To Tell Us'
		);
	}
}
	else{
		$txtName=array(
			'name' => 'txtName',
			'id' => 'txtName',
			'class' => 'form-control',
			'required' => 'required',
			'type' => 'text',
			'placeholder'=>'Name'
		);
		$txtEmail=array(
			'name' => 'txtEmail',
			'id' => 'txtEmail',
			'class' => 'form-control',
			'required' => 'required',
			'type' => 'email',
			'placeholder'=>'Email'
		);
		$txtPhone=array(
			'name' => 'txtPhone' ,
			'id' => 'txtPhone',
			 'class' => 'form-control',
			'required' => 'required',
			'type' => 'number',
			'placeholder'=>'Phone Number'
		);
		$txtAddress1=array(
			'name' => 'txtAddress1' ,
			'id' => 'txtAddress1',
			 'class' => 'form-control',
			'required' => 'required',
			'placeholder'=>'Address Line 1',
			'cols' => '26',
			'rows' => '2'
		);

		$txtAddress2=array(
			'name' => 'txtAddress2' ,
			'id' => 'txtAddress2',
			 'class' => 'form-control',
			'placeholder'=>'Address Line 2',
			'cols' => '26',
			'rows' => '2'
		);
		$txtAddress3=array(
			'name' => 'txtAddress3' ,
			'id' => 'txtAddress3',
			 'class' => 'form-control',
			'placeholder'=>'Address Line 3',
			'cols' => '26',
			'rows' => '2'
		);

		$txtAddress4=array(
			'name' => 'txtAddress4' ,
			'id' => 'txtAddress4',
			 'class' => 'form-control',
			'placeholder'=>'Address Line 4',
			'cols' => '26',
			'rows' => '2'
		);

		$txtCity=array(
			'name' => 'txtCity',
			'id' => 'txtCity',
			'class' => 'form-control',
			'required' => 'required',
			'type' => 'text',
			'placeholder'=>'City',
		);
		$txtPin=array(
			'name' => 'txtPin',
			'id' => 'txtPin',
			'class' => 'form-control',
			'required' => 'required',
			'type' => 'number',
			'placeholder'=>'Pin',
			'maxlength' => '6',
			'onblur' => 'checkcashondelivery(this.value)'
		);
		$txtLandmark=array(
			'name' => 'txtLandmark',
			'id' => 'txtLandmark',
			'class' => 'form-control',
			'type' => 'text',
			'placeholder'=>'Landmark'
		);

		$txtSpecialNote=array(
			'name' => 'txtSpecialNote',
			'id' => 'txtSpecialNote',
			'class' => 'form-control',
			'placeholder'=>'If you Have Any Notes Then Fill Free To Tell Us'
		);
	}
?>

<div class="content">
	<!--contact-->
	<div class="mail-w3ls">
		<div class="container">
			<h2 class="tittle">CHECKOUT</h2></br>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<?php IF($this->session->flashdata('validation_errors')): ?>
				<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong align="center">Errors!</strong>
				  <?php echo $this->session->flashdata('validation_errors'); ?>
				</div>
				<?php ENDIF; ?>
				<div class="panel-group" id="accordion">
					<div class="panel panel-default">
						<div class="panel-heading ">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">DELIVERY ADDRESS</a>
							</h4>
						</div>
						<div id="collapse1" class="panel-collapse collapse in">
							<div class="panel-body">
							<?php echo form_open('home/order'); ?>
									<div class="col-md-6">
										<label for="txtName">NAME<sup>*</sup> </label>
										<?php echo form_input($txtName); ?>
									</div>
									<div class="col-md-6">
										<label for="txtPhone">PHONE NUMBER <sup>*</sup></label>
										<?php echo form_input($txtPhone); ?>
									</div>
									<div class="col-md-6">
										<label for="txtAddress1">ADDRESS LINE 1<sup>*</sup> </label>
										<?php echo form_textarea($txtAddress1); ?>
									</div>
									<div class="col-md-6">
										<label for="txtAddress2">ADDRESS LINE 2 </label>
										<?php echo form_textarea($txtAddress2); ?>
									</div>
									<div class="col-md-6">
										<label for="txtAddress3">ADDRESS LINE 3</label>
										<?php echo form_textarea($txtAddress3); ?>
									</div>
									<div class="col-md-6">
										<label for="txtAddress4">ADDRESS LINE 4 </label>
										<?php echo form_textarea($txtAddress4); ?>
									</div>
									<div class="col-md-6">
										<label for="txtCity">CITY <sup>*</sup></label>
										<?php echo form_input($txtCity); ?>
									</div>
									<div class="col-md-6">
										<label for="txtPin">PIN CODE <sup>*</sup>
										</label>
										<?php echo form_input($txtPin); ?>
									</div>



									<div class="col-md-6">
										<label for="txtLandmark">LANDMARK
										</label>
										<?php echo form_input($txtLandmark); ?>
									</div>

									<div class="col-md-6">
										<label for="ddlState">STATE <sup>*</sup> </label>

										<select class="form-control" required
										aria-required="true" id="ddlState"
										name="ddlState">
										<option value="">Choose</option>
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
									<label for="InputName">Country </label>
									<input required type="text" class="form-control" id="" value="India (Service Available In India Only)" disabled="">
								</div>
								<div class="col-md-6">
									<label for="txtEmail">Email Id<sup>*</sup> </label>
									<?php echo form_input($txtEmail); ?>
								</div>
								<div class="col-md-12">
									<label for="txtSpecialNote">Special Note </label>
									<?php echo form_textarea($txtSpecialNote); ?>
								</div>

								<div class="col-md-12">
									<a class="btn btn-success coupon pull-right nxt" role="button" data-toggle="collapse" data-parent="#accordion" href="javascript:void(0);" id="nextStape" onclick="validatefield()
" aria-expanded="false">NEXT</a>
								</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="javascript:void(0);" Id="odersmmry" onclick="validatefield()">ORDER SUMMERY</a>
						</h4>
					</div>
					<div id="collapse2" class="panel-collapse collapse">
						<div class="panel-body">
							<div class="col-md-12">
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th>Order Amount</th>
												<th><?php echo $this->cart->total(); ?>/-</th>
											</tr>
										</thead>
										<tbody>

											<tr>
												<td>Referral Discount</td>
												<td>
												<span id="referraldiscount"><?php if(!$this->session->userdata('referaldiscount')) {echo "0";} else { echo $this->session->userdata('referaldiscount');} ?></span>%
												&nbsp;<sup><span class="glyphicon glyphicon-star" aria-hidden="true"></span></sup></td>
											</tr>
											<tr>
												<td>Coupon Discount</td>
												<td id="coupondiscount">....</td>
											</tr>
											<tr>
												<td>Redeem Discount</td>
												<td id="RedeemDiscount">....</td>
											</tr>
											<tr>
												<td>Shipping Charge</td>
												<td ID="shippingcharhe"></td>
											</tr>
											<tr class="bg-info">
												<td>Total</td>
												<td id="totalamountwithdelivery"></td>
											</tr>
											<tr class="bg-warning">
												<td colspan="2">
													<label class="checkbox-inline"><h5>
														<input type="checkbox" name="chkRedeem" id="chkRedeem" onchange="redeempoints()" /> Redeem Biva Points
													</h5></label>
												</td>
											</tr>
											<tr>
												<td colspan="2">
													<div class="">
														<input class="couponForm" id="txtCouponCode" type="text"
														placeholder="Coupon code" name="txtCouponCode">
														<button class=" btn btn-success coupon" Id="btnApply" onclick="checkcoupon()" type="button">Apply!</button>&nbsp;<button style="display:none;" class="btn btn-danger coupon" onclick="pagereload();" id="btnRemove">Remove Coupon</button>
														<br/>
														<h4 Id="couponmessage" style="font-weight:bold"></h4>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

							<div class="col-md-12 oneb">

								<a class="btn btn-success coupon pull-right  nxt " role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" href="#collapse3">NEXT</a> &nbsp;&nbsp;


								<a class="btn btn-success coupon pull-right  nxt" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" href="#collapse1">BACK</a>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<p><span class="glyphicon glyphicon-star" aria-hidden="true"></span> &nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="javascript:void(0);" id="paymnt">PAYMENT METHOD</a>
						</h4>
					</div>
					<div id="collapse3" class="panel-collapse collapse">
						<div class="panel-body">
							<div class="col-md-12">
								<div class="form-group required">
									<label for="InputState">PAYMENT METHOD <sup>*</sup> </label>
									<select name="ddlPaymentType" id="ddlPaymentType" required class="form-control">
										<option value="">Choose</option>
										<option value="online">ONLINE PAYMENT</option>
										<option id="COD" value="cod">CASH ON DELIVERY</option>
									</select>
									<h4 id="codstatus" style="color:red;font-weight:bold;"></h4>
								</div>
							</div>

							<div class="col-md-12 oneb">
								<button type="submit" name="btnsubmit" class="btn btn-success coupon pull-right nxt">Order &nbsp; <i class="fa fa-arrow-circle-right"></i></button> &nbsp;&nbsp;


								<a class="btn btn-success coupon pull-right  nxt" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" href="#collapse2">BACK</a>
							</div>
						</div>
					</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>

	</div>
</div>
<!--contact-->
</div>
<?php 
	if($this->session->userdata('referaldiscount'))
	{
		$toatlAmount=$this->cart->total()-($this->cart->total()*5/100);
	}
?>
<script>

	//This Function For Validate All Field
	function validatefield(){
		var name=document.getElementById("txtName").value;
		var phone=document.getElementById("txtPhone").value;
		var Address=document.getElementById("txtAddress1").value;
		var city=document.getElementById("txtCity").value;
		var pin=document.getElementById("txtPin").value;
		var email=document.getElementById("txtEmail").value;
		var state=document.getElementById("ddlState").value;

		if(document.getElementById("txtName").value=="" || document.getElementById("txtPhone").value=="" || document.getElementById("txtAddress1").value=="" || document.getElementById("txtCity").value=="" || document.getElementById("txtPin").value=="" || document.getElementById("txtEmail").value=="" || document.getElementById("ddlState").value==""){
			// alert('Please Enter All');
			if(name==""){
				document.getElementById("txtName").style="border-color:red;";
				alert("Name field is required");
			}
			if(phone==""){
				document.getElementById("txtPhone").style="border-color:red;";
				alert("Phone Number field is required");
			}
			if(Address==""){
				document.getElementById("txtAddress1").style="border-color:red;";
				alert("Address field is required");
			}
			if(city==""){
				document.getElementById("txtCity").style="border-color:red;";
				alert("City field is required");
			}
			if(email==""){
				document.getElementById("txtEmail").style="border-color:red;";
				alert("Email field is required");
			}
			if(pin==""){
				document.getElementById("txtPin").style="border-color:red;";
				alert("Pin field is required");
			}
			if(state==""){
				document.getElementById("ddlState").style="border-color:red;";
				alert("State field is required");
			}
		}
		else{
			//alert();
			document.getElementById("nextStape").href="#collapse2";
			document.getElementById("odersmmry").href="#collapse2";
			document.getElementById("paymnt").href="#collapse3";
			calculateShippingcharge();
			checkcashondelivery(document.getElementById("txtPin").value);
		}
	}

	//This function For Calculate Shipping Chatge
	function calculateShippingcharge(){

		var Pin=document.getElementById("txtPin").value;
		var amount="<?php
			if($this->session->userdata('referaldiscount'))
			{
				echo $toatlAmount;
			} 
			else{
				echo $this->cart->total();
			}
		  ?>";
		var total=0;
		var charge=0;
		var firstdig=Pin.substr(0, 3);
		if(firstdig==700 )
	     {
	     	if(amount<200)
	      charge=25;
	  		else
	  	  charge=00;
	     }
	     else
	     {
	     	if(amount<200)
	      charge=50;
	  		else
	  	  charge=00;
	     }
	    total=parseInt(charge)+parseInt(amount);
	    document.getElementById("shippingcharhe").innerHTML=charge;
	    document.getElementById("totalamountwithdelivery").innerHTML=total;
	}

	//This Function For Check Cupone
	function checkcoupon(){
		var phone=document.getElementById("txtPhone").value;
		var email=document.getElementById("txtEmail").value;
		var amount="<?php
			if($this->session->userdata('referaldiscount'))
			{
				echo $toatlAmount;
			} 
			else{
				echo $this->cart->total();
			}
		  ?>";
		var totalamountwithdelivery=document.getElementById("totalamountwithdelivery").innerHTML;
		var coupon=document.getElementById("txtCouponCode").value;
		var data={'coupon':coupon,'amount':amount,'email':email,'phone':phone};
		var urls="<?php echo base_url(); ?>home/checkcoupon/";
		  $.ajax({
			'type':'post',
			'data' : data,
			'url' : urls,
			'beforeSend' : function(){},
			'success' : function(data){
				//alert(data);
				switch(parseInt(data)){
					case 704:
					document.getElementById("couponmessage").innerHTML="Coupon Code Not Valid";
					document.getElementById("couponmessage").style="color:red;";
					break;
					case 904:
					document.getElementById("couponmessage").innerHTML="Coupon Code Has Expired";
					document.getElementById("couponmessage").style="color:red;";
					break;
					case 804:
					document.getElementById("couponmessage").innerHTML="Provided e-mail or phone no does not match";
					document.getElementById("couponmessage").style="color:red;";
					break;
					default:
					document.getElementById("coupondiscount").innerHTML=data;
					document.getElementById("totalamountwithdelivery").innerHTML=parseInt(totalamountwithdelivery)-parseInt(document.getElementById("coupondiscount").innerHTML);
					document.getElementById("couponmessage").innerHTML="Coupon Code Applied Successfully";
					document.getElementById("couponmessage").style="color:green;";
					document.getElementById("txtCouponCode").setAttribute("readonly", "readonly");
					document.getElementById("btnApply").setAttribute("disabled", "disabled");
					document.getElementById("btnRemove").removeAttribute("style");
					break;
				}
			}

		});
	}

	function checkcashondelivery(pincode){
		var pin=pincode;
		var data={'pincode':pin};
		var urls="<?php echo base_url(); ?>home/checkcashondelivery/";
		 $.ajax({
		 	'type':'post',
			'data' : data,
			'url' : urls,
			'beforeSend' : function(){},
			'success' : function(data){
				if(data!="success")
				{
					document.getElementById("COD").setAttribute("disabled", "disabled");
                  	document.getElementById("COD").innerHTML="CASH ON DELIVERY NOT AVAILABLE";
				}
				else{
					document.getElementById("COD").removeAttribute("disabled");
					document.getElementById("COD").innerHTML="CASH ON DELIVERY";
				}
			}
		 });
	}

	function pagereload(){
		window.open("<?php echo base_url();?>home/checkout/","_self");
	}

	//This function for bivapoints redeem
	function redeempoints(){
		var chk = document.getElementById("chkRedeem").checked;
		var olddata=document.getElementById("totalamountwithdelivery").innerHTML;
		 
		if(chk){
			var urls="<?php echo base_url(); ?>home/redeem/";
			$.ajax({
				'type':'post',
				'url': urls,
				'success' : function(data){
					document.getElementById("RedeemDiscount").innerHTML=data;
					document.getElementById("totalamountwithdelivery").innerHTML=parseInt(document.getElementById("totalamountwithdelivery").innerHTML)-parseInt(data);
					document.getElementById("chkRedeem").disabled = true;
				}
			});

		}
		else{
			
			document.getElementById("totalamountwithdelivery").innerHTML=parseInt(olddata)+parseInt(data);
			document.getElementById("RedeemDiscount").innerHTML="....";
		}
	}
</script>
