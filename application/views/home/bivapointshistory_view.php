		<!--content-->
			<div class="content">
				<!--contact-->
					<div class="mail-w3ls">
						<div class="container">
							<div class="row" style="margin-bottom:20px;">
								<div class="col-sm-12 col-md-6" style="margin-top:5px;">
									<div class=" statusTop">
										<h3><strong>NAME :</strong> <?php echo $this->session->userdata('firstname')." ".$this->session->userdata('lastname'); ?></h3></br>
										<h3><strong>EMAIL ID :</strong> <?php echo $this->session->userdata('useremail'); ?></h3>
									</div>
								</div>
								<div class="col-sm-12 col-md-6 biva-point" style="margin-top:5px;">
									<div class="total-point text-center">
										<h3>Total Biva Points</h3>
										<h2><?php $this->home_model->calculateBP(); ?></h2>
									</div>
								</div>
								
							</div>
							<div class="row about" style="margin-bottom:20px;">
								<h2 class="tittle">Points History </h2>
								<div style="clear:both"></div>
								<div class="table-responsive">          
									<table class="table">
										<thead>
										<tr class="bg-info">
											<th>Date And Time</th>
											<th>Points</th>
											<th>Notes</th>
										</tr>
										</thead>
										<tbody>
										<?php foreach ($bphistory as $data): ?>
											<tr>
												<td><?php echo $data->TrDate; ?></td>
												<td><?php echo $data->EarnedPotint; ?></td>
												<td><?php echo $data->Note; ?></td>
											</tr>
										<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
							<div class="row about" style="margin-bottom:20px;">
								<h2 class="tittle">Available Coupon</h2></br>
								<!-- <div class="col-sm-12 col-md-6" style="margin-top:5px;">
									<div class="center-block" style="border:3px solid #1565C0; padding:5px; width:80%;">
										<div class="biva-coupon text-center" style="border:3px dashed #403131; padding:10px 0;background-color:#fcf8e3;	width:100%;	padding:20px 0;">
											<h2 style="color:#f19e1f;">BIVA10</h2>
											</br>
											<h4>Use This Coupon Code For Get 10% off !!</h4>
										</div>
									</div>
								</div> -->
								<!-- <div class="col-sm-12 col-md-6" style="margin-top:5px;">
									<div class="center-block" style="border:3px solid #1565C0; padding:5px; width:80%;">
										<div class="biva-coupon text-center" style="border:3px dashed #403131; padding:10px 0;background-color:#fcf8e3;	width:100%;	padding:20px 0;">
											<h2 style="color:#f19e1f;">BIVA20</h2>
											</br>
											<h4>Use This Coupon Code & Get Flat 20% discount !!</h4>
										</div>
									</div>
								</div> -->
							</div>
							<div class="row">
							<?php foreach($couponimage as $image): ?>
								<div class="col-sm-3"> 
									<img src="<?php echo base_url(); ?>assets/coupons/<?php echo $image->Image; ?>" class="img-responsive img-responsive"/>
								</div>
							<?php endforeach; ?>
								<!-- <div class="col-sm-3">
									<img src="<?php //echo// base_url(); ?>assets/images/BAN-COUPON-BING-ADS-100-200-GIA-RE-HOANGBANH.COM_-652x330.png" class="img-responsive img-responsive"/>
								</div>
								<div class="col-sm-3">
									<img src="<?php //echo// base_url(); ?>assets/images/BAN-COUPON-BING-ADS-100-200-GIA-RE-HOANGBANH.COM_-652x330.png" class="img-responsive img-responsive"/>
								</div>
								<div class="col-sm-3">
									<img src="<?php //echo base_url(); ?>assets/images/BAN-COUPON-BING-ADS-100-200-GIA-RE-HOANGBANH.COM_-652x330.png" class="img-responsive img-responsive"/>
								</div> -->
							</div>
						</div>
					</div>
				<!--contact-->
			</div>
		<!--content-->