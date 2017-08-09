<!--content-->
<div class="content">
	<!--contact-->
		<div class="mail-w3ls">
			<div class="container">
				<h2 class="tittle rev-full">Ratings & Reviews</h2>
				<div class="col-md-5 rev">
					<div>
							<div id="overall" class="col-md-6">
									<button type="button" class="btn btn-default star">
									<?php $this->home_model->getavgstarratebyproductid($ProductId); ?> &nbsp;&#9734;
							</button></br></br><span class="rating_av"><?php $this->home_model->totalreatingandreview($ProductId); ?> Rating & <?php $this->home_model->totalreatingandreview($ProductId); ?> Reviews </span>
							</div>
							<div id="myProgress" class="col-md-6">
								<h5>READER'S RATINGS</h5></br>
								  <!-- <div id="myBar" class="five-star">106&#9734;&#9734;&#9734;&#9734;&#9734;</div>
								  <div id="myBar" class="four-star">476&#9734;&#9734;&#9734;&#9734;</div>
								  <div id="myBar" class="three-star">106&#9734;&#9734;&#9734;</div>
								  <div id="myBar" class="two-star">66&#9734;&#9734;</div>
								  <div id="myBar" class="one-star">25&#9734;</div> -->
								  <?php $this->home_model->viewreatingprogressber($ProductId); ?>
								  <br>
									
							</div>
					</div>
					<div>
						<button class="btn btn-warning btn-lg pull-left" onclick="javascript:window.history.back()" name="btnReview" type="submit"><i class="fa fa-arrow-left"></i> Back To Product</button></br></br>
					</div>
				</div>
				<div class="col-md-7 rev">
				<?php foreach ($review as $list): ?>
					<div>
					<button type="button" class="btn btn-default star"><?php echo $list->Rate; ?> &nbsp;<i class="fa fa-star-o" aria-hidden="true"></i> </button>
					<h5 class="rev-head">"<?php echo $list->Title; ?>"</h5></br></br>
					<p class="rev-comm"><?php echo $list->ReviewComment; ?></p>
					<p><strong><?php echo $list->FirstName." ".$list->LastName; ?>,</strong>&nbsp; <?php echo $list->ReviewDate; ?></p>
					</div>
				<?php endforeach; ?>
				</div>
			</div>
		</div>
	<!--contact-->
</div>
<!--content-->