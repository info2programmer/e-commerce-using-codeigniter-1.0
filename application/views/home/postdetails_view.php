<?php if($this->session->flashdata('log')): ?>
	<script>
		alert('<?php echo $this->session->flashdata('log'); ?>');
	</script>
<?php endif; ?>
 <script src="//cdn.quilljs.com/1.3.0/quill.js"></script>
<script src="//cdn.quilljs.com/1.3.0/quill.min.js"></script>

<!-- Theme included stylesheets -->
<link href="//cdn.quilljs.com/1.3.0/quill.snow.css" rel="stylesheet">
<link href="//cdn.quilljs.com/1.3.0/quill.bubble.css" rel="stylesheet">

<!-- Core build with no theme, formatting, non-essential modules -->
<link href="//cdn.quilljs.com/1.3.0/quill.core.css" rel="stylesheet">
<script src="//cdn.quilljs.com/1.3.0/quill.core.js"></script>
<style type="text/css">
	.alignli li{
		float: left;
		padding: 5px;
	}
</style>
<!--banner-->
<?php foreach($postdetails as $object): ?>
<div class="banner1">
<div class="container">
	<h3  class="text-left"><a href="<?php echo base_url(); ?>">Home</a> / <a href="javascript:history.go(-1)">Author's Corner</a> / <span><a href="javascript:void(0);"><?php echo $object->PostTitle ?></a></span></h3>
</div>
</div>
<!--banner-->
<!--content-->
<div class="content">
	<!--contact-->
		<div class="mail-w3ls">
			<div class="container">
				<div class="row about">
					<div class="col-sm-12 blog-page">
						<a href="javascript:void(0);" style="text-decoration:none;"><h2 style="color:#0d59af"><?php echo $object->PostTitle ?></h2></a>
						</br>
						<ul class="alignli">
							<li><h5><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $object->PostDateAndTime; ?></h5></li>
							<li><h5><i class="fa fa-pencil" aria-hidden="true"></i> <?php echo $object->Gener; ?></h5></li>
							<!--<li><h5><i class="fa fa-comments" aria-hidden="true"></i> 24 Comments</h5></li>
							<li><h5><i class="fa fa-thumbs-up" aria-hidden="true"></i> 67 Likes</h5></li>-->
						</ul>
					</div>
				</div>
				
				<div class="row about">
					<div class="col-sm-7" style="margin-top:15px;">
						<a href="#"><img src="<?php echo base_url(); ?>assets/Post/<?php echo $object->PostImage; ?>" class="img-responsive center-block" style="border:2px solid #1565c0"/></a>
						</br>
					</div>
					
					<div class="col-sm-5" style="margin-top:15px;">
						<div style="font-size: 16px;"><?php echo substr($object->PostDetails,0,1200); ?> - </div>
					</div>
					
					<div class="col-sm-12">
						<div style="font-size: 16px;"><?php echo substr($object->PostDetails,1201); ?></div>
					</div>
				</div>
				
				<div class="row about">
					<div class="col-sm-3" style="margin-top:15px;">
						<a href="#"><img src="<?php echo base_url(); ?>assets/Post/<?php echo $object->AuthorImage; ?>" class="img-responsive img-circle img-thumbnail center-block" style="border:2px solid #1565c0"/></a>
						</br>
					</div>
					<div class="col-sm-9 text-left" style="margin-top:35px;">
						<h3><?php echo $object->AutherName ?></h3>
						<div style="font-size: 16px;"><?php echo substr($object->AuthorDescription,0,1200); ?> </div> 
						
					</div>
					<div class="col-sm-12">
						<div style="font-size: 16px;"><?php echo substr($object->AuthorDescription,1201); ?>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="co-md-12 ">
						<h4 class="" style="margin-top:20px; margin-bottom:5px; font-size:22px; color: orange;"><?php echo $numberComments; ?> Comments</h4>
					</div>
					<?php foreach ($postcomment as $comment): ?>
					<div class="co-md-12 rev">
						<div>
							<h5 class="rev-head" style="font-size:18px;"><?php echo $comment->FirstName." ".$comment->LastName; ?>, &nbsp; <?php echo $comment->CommentDate; ?></h5></br>
							<p class="rev-comm"><?php echo $comment->CommentText; ?>
							<p></p>
						</div>
					</div>
					<?php endforeach; ?>
				<?php if(!$this->session->userdata('userlogin')): ?>
					<div class="co-md-12 rev">
						<div class="col-md-12 rev text-center">
							</br>
							<button class="btn btn-lg btn-warning" name="btnReview" type="submit" style="border-radius:0;" onclick="alert('You may have login first');">Add Your Comment</button>
						</div>
					</div>
				<?php else: ?>
					<div class="col-md-12" style="padding:0px;">
								</br>
								<?php echo form_open('home/CommentinPost'); ?>
									<div class="form-group col-sm-12 review-form" style="padding:0px;">
										<?php 
											//All Attributes
											$txtComment=array(
												'name' => 'txtComment',
												'id' => 'txtComment',
												'class' => 'form-control',
												'required' => 'required',
												'rows' => '3'
											);

											$btnSubmit=array(
												'class' => 'btn btn-warning pull-right',
												'name' => 'btnSubmit',
												'id' => 'btnSubmit',
												'value' => 'Post Your Comment',
												'class' => 'btn btn-warning pull-right'
											);
										?>
										<?php echo form_label('Your Comment', 'txtComment'); ?>
										<?php echo form_hidden('txtPostId',$object->Id); ?>
										<?php echo form_textarea($txtComment); ?>
									</div>
						
									<?php echo form_submit($btnSubmit); ?>
								<?php echo form_close(); ?>
					</div>
				<?php endif; ?>
				</div>
				
			</div>
		</div>
	<!--contact-->
</div>
<!--content-->
<?php endforeach; ?>