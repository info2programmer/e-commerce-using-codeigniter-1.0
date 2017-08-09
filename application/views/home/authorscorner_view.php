		<!--banner-->
		<div class="banner1">
			<div class="container">
				<h3  class="text-left"><a href="<?php echo base_url(); ?>">Home</a> / <span>Author's Corner</span></h3>
			</div>
		</div>
		<style type="text/css">
			.alignli li{
				float: left;
				padding: 5px;
			}
		</style>
	<!--banner-->
		<!--content-->
			<div class="content">
				<!--contact-->
				<?php foreach($postdata as $object): ?>
					<?php 
					$PostId=$this->encrypt->encode($object->Id);
					$PostId=str_replace(array('+', '/', '='), array('-', '_', '~'), $PostId);
					?>
					<div class="mail-w3ls">
						<div class="container">
							<div class="row about">
								<div class="col-sm-12 blog-page">
									<a href="<?php echo base_url(); ?>home/authorpost/<?php echo $PostId; ?>" style="text-decoration:none;"><h2 style="color: #1565c0"><?php echo $object->PostTitle; ?></h2></a>
									</br>
									<ul class="alignli">
										<li><h5><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $object->PostDateAndTime; ?></h5></li>
										<!--<li><h5><i class="fa fa-comments" aria-hidden="true"></i> 24 Comments</h5></li>-->
										<li><h5><i class="fa fa-pencil" aria-hidden="true"></i> <?php echo $object->Gener; ?></h5></li>
									</ul>
								</div>
							</div>
							<div class="row about">
								<div class="col-sm-5" style="margin-top:15px;">
									<a href="<?php echo base_url(); ?>home/authorpost/<?php echo $PostId; ?>"><img src="<?php echo base_url(); ?>/assets/Post/<?php echo $object->PostImage; ?>" class="img-responsive center-block" style="border:2px solid #1565c0" height="200px" width="380px"/></a>
									</br>
								</div>
								
								<div class="col-sm-7 " style="margin-top:15px;">
									<?php echo substr($object->PostDetails,0,800); ?>
									<a href="<?php echo base_url(); ?>home/authorpost/<?php echo $PostId; ?>" class="btn btn-link" style="color:red;">Read More..</a></p>
								</div>
							</div>
							<div class="row about">
								<div class="col-sm-3" style="margin-top:15px;">
									<a href="<?php echo base_url(); ?>home/authorpost/<?php echo $PostId; ?>"><img src="<?php echo base_url(); ?>/assets/Post/<?php echo $object->AuthorImage; ?>" height="162px" width="162px" class="img-responsive img-circle img-thumbnail center-block" style="border:2px solid #1565c0"/></a>
									</br>
								</div>
								<div class="col-sm-9 text-left" style="margin-top:35px;">
								<h3 style="color: #1565c0"><?php echo $object->AutherName; ?></h3>
									<p style="font-size: 16px; margin-top: 5px;"><?php echo substr($object->AuthorDescription,0,476); ?>
									<a href="<?php echo base_url(); ?>home/authorpost/<?php echo $PostId; ?>" class="btn btn-link" style="color:red;">Read More..</a></p>
									</p>
								</div>
								
							</div>
							<div class="row about">
								<div class="col-sm-12" style="border-bottom: 1px dashed #ff0000"></div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
				
				<!--contact-->
			</div>
		<!--content-->
		<center>
		<?php echo $this->pagination->create_links(); ?>
		</center>