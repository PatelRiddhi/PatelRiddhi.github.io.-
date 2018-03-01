<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kappe Admin Panel | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="keywords" content="Admin, Bootstrap 3, Template, Theme, Responsive">
    <!-- bootstrap 3.0.2 -->
    <link href="<?php echo base_url('css/admin/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="<?php echo base_url('css/fonts/admin/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="<?php echo base_url('css/admin/ionicons.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="<?php echo base_url('css/admin/morris/morris.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="<?php echo base_url('css/admin/jvectormap/jquery-jvectormap-1.2.2.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="<?php echo base_url('css/admin/datepicker/datepicker3.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <!-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> -->
    <!-- Daterange picker -->
    <link href="<?php echo base_url('css/admin/daterangepicker/daterangepicker-bs3.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="<?php echo base_url('css/admin/iCheck/all.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <!-- <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> -->
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- Theme style -->
    <link href="<?php echo base_url('css/admin/style.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   <!-- <script type="text/javascript" src="<?php echo base_url('/asset/ckeditor/ckeditor.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('/asset/ckfinder/ckfinder.js'); ?>"></script>-->


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          <![endif]-->

          <style type="text/css">

          </style>
      </head>
      <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                Kappe Admin Panel
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
               
                <div class="navbar-right">
                    <ul class="nav navbar-nav">                                                
                                <li>
                                    <a href="<?php echo base_url('admin/dashboard/logout'); ?>"><i class="fa fa-ban fa-fw pumll-right"></i> Logout</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
        </header>
                <div class="wrapper row-offcanvas row-offcanvas-left">
                    <!-- Left side column. contains the logo and sidebar -->
                    <aside class="left-side sidebar-offcanvas">
                        <!-- sidebar: style can be found in sidebar.less -->
                        
                        <section class="sidebar">
                            <!-- Sidebar user panel -->
                            <div class="user-panel">
                                <div class="pull-left image">
                                    <img src="<?php echo base_url('images/admin/26115.jpg'); ?>" class="img-circle" alt="User Image" />
                                </div>
                                <div class="pull-left info">
                                    <p>Hello, Admin</p>                                
                                </div>
                            </div>
                           
                            <!-- sidebar menu: : style can be found in sidebar.less -->
                            <ul class="sidebar-menu">
                                <li class="active">
                                    <a href="<?php echo base_url('admin/dashboard/dash'); ?>">
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('admin/projects'); ?>">
                                        <span>Projects</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('admin/project_category'); ?>">
                                        <span>Projects Category</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('admin/blogs'); ?>">
                                        <span>Blogs</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('admin/blog_category'); ?>">
                                        <span>Blogs Category</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('admin/about'); ?>">
                                        <span>About Us</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('admin/settings'); ?>">
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('admin/contact'); ?>">
                                        <span>Contact</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('admin/team'); ?>">
                                        <span>Team</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('admin/testmonials'); ?>">
                                        <span>Testmonial</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('admin/skills'); ?>">
                                        <span>Skills</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('admin/services'); ?>">
                                        <span>Services</span>
                                    </a>
                                </li>

                            </ul>
                        </section>
                        <!-- /.sidebar -->
                    </aside>
                    <!-- Main content aside-->
                    <aside class="right-side">

                        <!-- Main content section-->
                        <section class="content">
<?php
        if(!$content =='')
        {
            echo $content;
        }
?>

                        </section>
                    </aside>

            </div><!-- ./wrapper -->
        <!-- add new calendar event modal -->


     
        <script src="<?php echo base_url('basjs/admin/jquery.min.js'); ?>" type="text/javascript"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo base_url('js/admin/jquery-ui-1.10.3.min.js'); ?>" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url('js/admin/bootstrap.min.js'); ?>" type="text/javascript"></script>
        <!-- Director App -->
        <script src="<?php echo base_url('js/admin/Director/app.js'); ?>" type="text/javascript"></script>



    

</body>
</html>