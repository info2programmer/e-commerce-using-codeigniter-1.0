<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hwday? Admin</title>

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
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="welcome"> <img alt="BivaPublication Logo" src="<?php echo base_url(); ?>img/favicon1.ico" class="hidden-xs"/>
                <span>Biva</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="javascript:void(0);">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url(); ?>admin/logout">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container animated tada">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-tint"></i><span
                        class="hidden-sm hidden-xs"> Change Theme / Skin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" id="themes">
                    <li><a data-value="classic" href="#"><i class="whitespace"></i> Classic</a></li>
                    <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Cerulean</a></li>
                    <li><a data-value="cyborg" href="#"><i class="whitespace"></i> Cyborg</a></li>
                    <li><a data-value="simplex" href="#"><i class="whitespace"></i> Simplex</a></li>
                    <li><a data-value="darkly" href="#"><i class="whitespace"></i> Darkly</a></li>
                    <li><a data-value="lumen" href="#"><i class="whitespace"></i> Lumen</a></li>
                    <li><a data-value="slate" href="#"><i class="whitespace"></i> Slate</a></li>
                    <li><a data-value="spacelab" href="#"><i class="whitespace"></i> Spacelab</a></li>
                    <li><a data-value="united" href="#"><i class="whitespace"></i> United</a></li>
                </ul>
            </div>
            <!-- theme selector ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="#"><i class="glyphicon glyphicon-globe"></i> Visit Site</a></li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-star"></i> Order <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li>
                    <form class="navbar-search pull-left">
                        <input placeholder="Search" class="search-query form-control col-md-10" name="query"
                               type="text">
                    </form>
                </li>
            </ul>

        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">

        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>admin/welcome"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        </li>
                        <!-- <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Manage Account</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Child Menu 1</a></li>
                                <li><a href="#">Child Menu 2</a></li>
                            </ul>
                        </li> -->
                        <li><a class="ajax-link" href="<?php echo base_url();?>admin/products"><i class="glyphicon glyphicon-eye-open"></i><span> Product Managment</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>admin/category"><i
                                    class="glyphicon glyphicon-edit"></i><span> Category Managment</span></a></li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>admin/publisher"><i class="glyphicon glyphicon-list-alt"></i><span> Publisher Managment</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>admin/cod"><i class="glyphicon glyphicon-font"></i><span> Cash On Delivery</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>admin/banner"><i class="glyphicon glyphicon-picture"></i><span> Banner</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>admin/coverbooks"><i class="glyphicon glyphicon-bold"></i><span> Cover Books</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>admin/bestselling"><i
                                    class="glyphicon glyphicon-align-justify"></i><span> Best Selling Books</span></a></li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>admin/stopeers"><i
                                    class="glyphicon glyphicon-asterisk"></i><span> Stoppers</span></a></li>
                        <li class="nav-header hidden-md">Orders Section</li>

                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Orders</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="<?php echo base_url(); ?>admin/order/Pending">Pending Orders</a></li>
                                <li><a href="<?php echo base_url(); ?>admin/order/Confirmed">Confirm Orders</a></li>
                                <li><a href="<?php echo base_url(); ?>admin/order/Readytoship">ReadyToShipped Orders</a></li>
                                <li><a href="<?php echo base_url(); ?>admin/order/Shipped">Shipped Orders</a></li>
                                <li><a href="<?php echo base_url(); ?>admin/order/Delivered">Delivered Orders</a></li>
                                <li><a href="<?php echo base_url(); ?>admin/order/Canceled">Cancelled Orders</a></li>
                                <li><a href="<?php echo base_url(); ?>admin/allorders">ViewAll Orders</a></li>
                            </ul>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>admin/managecoupon"><i class="glyphicon glyphicon-barcode"></i><span> Coupon</span></a>
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>admin/authorcorner"><i class="glyphicon glyphicon-user"></i><span> Author's Corner</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>admin/testimonial"><i class="glyphicon glyphicon-fire"></i><span> Testimonial</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>admin/report"><i class="glyphicon glyphicon-file"></i><span> Report</span></a>
                        </li>
                    </ul>
                    <label id="for-is-ajax" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>

<?php $this->load->view($main_view); ?>

    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->
    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://uvcweb.in/" target="_blank">UVC PVT LTD .</a> 2017-2018</p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                href="http://uvcweb.in">Ultra Vision Creative</a></p>
    </footer>

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
