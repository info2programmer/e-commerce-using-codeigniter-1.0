<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome To Bivapulication Admin Area</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The styles -->
    <link id="bs-css" href="<?php echo base_url(); ?>css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>css/charisma-app.css" rel="stylesheet">
    <link href='<?php echo base_url(); ?>bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='<?php echo base_url(); ?>bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>css/jquery.noty.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>css/noty_theme_default.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>css/elfinder.min.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>css/elfinder.theme.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>css/uploadify.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>css/animate.min.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>css/bootstrap-united.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>img/favicon1.ico">

</head>

<body>
    <div class="ch-container">
        <div class="row">

            <div class="row">
                <div class="col-md-12 center login-header">
                    <h2>Welcome to Bivapublication</h2>
                </div>
                <!--/span-->
            </div><!--/row-->

            <div class="row">
                <div class="well col-md-5 center login-box">
                <?php if($this->session->flashdata('error_log')): ?>
                    <div class="alert alert-danger">
                      <?php echo $this->session->flashdata('error_log'); ?>
                    </div>
                <?php endif; ?>
                <?php if(!$this->session->flashdata('error_log')): ?>
                    <div class="alert alert-info">
                      Enter UserName And Password 
                    </div>
                <?php endif; ?>
                    <?php
                    $data=array(
                        'class' => 'form-horizontal'
                        );
                    echo form_open('admin/login',$data);
                    ?>
                    <fieldset>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                            <?php
                            if(!$this->session->flashdata('error_email'))
                            {
                                $usernameattribute=array(
                                'class' => 'form-control',
                                'placeholder' => 'Username/Email',
                                'name' => 'txtUsername',
                                'autocomplete' => 'off'
                                );
                            }
                            else{
                                $usernameattribute=array(
                                'class' => 'form-control',
                                'placeholder' => 'Username/Email',
                                'name' => 'txtUsername',
                                'autocomplete' => 'off',
                                'value' => $this->session->flashdata('error_email')
                                );
                            }
                           
                            ?>
                                <?php echo form_input($usernameattribute);?>
                            </div>
                            <div class="clearfix"></div><br>

                            <div class="input-group input-group-lg">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                                <?php 
                                    if($this->session->flashdata('error_password'))
                                    {
                                        $passwordattribure=array(
                                        'class' => 'form-control',
                                        'placeholder' => 'Password',
                                        'name' => 'txtPassword',
                                        'value' => $this->session->flashdata('error_password')
                                        );
                                    }
                                    else{
                                        $passwordattribure=array(
                                        'class' => 'form-control',
                                        'placeholder' => 'Password',
                                        'name' => 'txtPassword'
                                        );
                                    }
                                ?>
                                    <?php echo form_password($passwordattribure); ?>
                                </div>
                                <div class="clearfix"></div>
                                <p class="center col-md-5">
                                    <?php
                                    $buttonattribute=array(
                                        'name' => 'btnSubmit',
                                        'class' => 'btn btn-primary',
                                        'value' => 'Login'
                                        );
                                    echo form_submit($buttonattribute);
                                    ?> 
                                </p>
                            </fieldset>
                            <?php echo form_close(); ?>
                        </div>
                        <!--/span-->
                    </div><!--/row-->
                </div><!--/fluid-row-->

            </div><!--/.fluid-container-->

            <!-- external javascript -->

            <script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

            <!-- library for cookie management -->
            <script src="<?php echo base_url(); ?>js/jquery.cookie.js"></script>
            <!-- calender plugin -->
            <script src='<?php echo base_url(); ?>bower_components/moment/min/moment.min.js'></script>
            <script src='<?php echo base_url(); ?>bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
            <!-- data table plugin -->
            <script src='<?php echo base_url(); ?>js/jquery.dataTables.min.js'></script>

            <!-- select or dropdown enhancer -->
            <script src="<?php echo base_url(); ?>bower_components/chosen/chosen.jquery.min.js"></script>
            <!-- plugin for gallery image view -->
            <script src="<?php echo base_url(); ?>bower_components/colorbox/jquery.colorbox-min.js"></script>
            <!-- notification plugin -->
            <script src="<?php echo base_url(); ?>js/jquery.noty.js"></script>
            <!-- library for making tables responsive -->
            <script src="<?php echo base_url(); ?>bower_components/responsive-tables/responsive-tables.js"></script>
            <!-- tour plugin -->
            <script src="<?php echo base_url(); ?>bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
            <!-- star rating plugin -->
            <script src="<?php echo base_url(); ?>js/jquery.raty.min.js"></script>
            <!-- for iOS style toggle switch -->
            <script src="<?php echo base_url(); ?>js/jquery.iphone.toggle.js"></script>
            <!-- autogrowing textarea plugin -->
            <script src="<?php echo base_url(); ?>js/jquery.autogrow-textarea.js"></script>
            <!-- multiple file upload plugin -->
            <script src="<?php echo base_url(); ?>js/jquery.uploadify-3.1.min.js"></script>
            <!-- history.js for cross-browser state change on ajax -->
            <script src="<?php echo base_url(); ?>js/jquery.history.js"></script>
            <!-- application script for Charisma demo -->
            <script src="<?php echo base_url(); ?>js/charisma.js"></script>


        </body>
        </html>