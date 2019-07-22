   
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EZChapter7 Fresh Start </title>
    <link rel="icon" type="image/ico" href="<?php base_url(); ?>assests/images/login-logo.png" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assests/vendors/bootstrap/dist/css/bootstrap.min.css"/>
   <!--  <link href="admin_assests/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Font Awesome -->
     <link rel="stylesheet" href="<?php echo base_url(); ?>assests/vendors/font-awesome/css/font-awesome.min.css"/>
   <!--  <link href="..admin_assests/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assests/vendors/iCheck/skins/flat/green.css"/>
    <!-- <link href="..admin_assests/vendors/iCheck/skins/flat/green.css" rel="stylesheet"> -->
    <!-- bootstrap-progressbar -->
     <link rel="stylesheet" href="<?php echo base_url(); ?>assests/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"/>
   <!--  <link href="..admin_assests/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet"> -->
    <!-- jVectorMap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assests/css/maps/jquery-jvectormap-2.0.3.css"/>
    <!-- <link href="admin_assests/css/maps/jquery-jvectormap-2.0.3.css" rel="stylesheet"/> -->

    <!-- Custom Theme Style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assests/css/custom.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <!--   <link href="admin_assests/css/custom.css" rel="stylesheet"> -->
  <script src="<?php echo base_url(); ?>assests/vendors/jquery/dist/jquery.min.js"></script>
  </head>
   <body class="nav-md">
    <div class="container body">
      <div class="main_container">
   <!-- top navigation -->
        <div class="top_nav">

          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <b>ADMIN</b>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;">  Profile</a>
                    </li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:;">Help</a>
                    </li>
                    <li><a href="<?php echo base_url(); ?>A_logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </li>
                  </ul>
                </li>

               

              </ul>
            </nav>
          </div>

        </div>
        <!-- /top navigation -->