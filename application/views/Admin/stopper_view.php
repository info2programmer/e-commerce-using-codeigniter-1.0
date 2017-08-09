<ul class="breadcrumb">
  <li>
    <a href="<?php echo base_url(); ?>admin/welcome">Home</a>
  </li>
  <li>
    <a href="#">Stopper Management</a>
  </li>
</ul>
</div>
<?php

//File Input Attribute
$txtBookName=array(
'name' => 'txtBookName',
'class' => 'form-control',
'id' => 'txtBookName',
'placeholder' => 'Enter Book Name Or Headding'
);

$txtBookDescriptiom= array(
'name' => 'txtBookDescriptiom',
'class' => 'form-control',
'Id' => 'txtBookDescriptiom',
'placeholder' => 'Enter Book Description'
);

$fileImage= array(
'name' => 'fileImage',
'class' => 'form-control',
'Id' => 'fileImage',
'placeholder' => 'Select Image'
);

//Button Submit Attribute
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
      <li class="active"><a href="#info">Biva Stopper</a></li>
      <li><a href="#custom">Stopper List</a></li>
    </ul>

    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active" id="info">
        <h3>Stopper
          <small>Create Stopper</small>
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
        <?php echo form_open_multipart('admin/newstopper'); ?>


            <div class="form-group col-md-6">
              <?php echo form_label('Stopper Book Name:', 'txtBookName'); ?>
              <?php
                echo form_input($txtBookName);
               ?>
            </div>
            <div class="form-group col-md-6">
              <?php echo form_label('Book Image:', 'fileImage'); ?>
              <?php
                echo form_upload($fileImage);
               ?>
            </div>
            <div class="form-group col-md-12">
              <?php echo form_label('Book Description:', 'txtBookDescriptiom'); ?>
              <?php
                echo form_textarea($txtBookDescriptiom);
               ?>
            </div>
            <div class="form-group col-md-12 text-center">
            <?php

              echo form_submit($buttonAttribute);
            ?>
            </div>

            <? echo form_close(); ?>

            <br><br/> <br>

          </div>
          <div class="tab-pane" id="custom">
            <h3>List
              <small>Stopper List</small>
            </h3>
            <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
            <thead>
              <tr>
                <th>Book Name</th>
                <th>Book Description</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($stopperlist as $object):?>
              <tr>
              <td><?php echo $object->StoperBookName; ?></td>
              <td><?php echo $object->StoperBookDescription; ?></td>
              <td><img src="<?php echo base_url(); ?>assets/stopper/<?php echo $object->StoperImage; ?>" style="height:75px;width:75px;" ></td>
              <td><a class="btn btn-danger" href="<?php echo base_url();?>admin/deletestopper/<?php echo $object->StoperId; ?>">Delete</a></td>
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
