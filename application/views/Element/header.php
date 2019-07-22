<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <title>EZChapter7 Fresh Start</title>   
    <link rel="icon" type="image/ico" href="<?php base_url(); ?>assests/images/login-logo.png" />
   <!-- custom font -->    
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
   <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assests/css/bootstrap.min.css" rel="stylesheet">
   <!-- custom css -->
  <link href="<?php echo base_url(); ?>assests/css/font-awesome.min.css" rel="stylesheet">
  <!-- scroolbar css -->
  <link href="<?php echo base_url(); ?>assests/css/scrollBar.css" rel="stylesheet" type="text/css" />
   <!-- custom css -->
  <link href="<?php echo base_url(); ?>assests/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
  <script src="<?php echo base_url(); ?>assests/js/jquery-1.11.1.min.js" type="text/javascript"></script>
  </head>
  <?php $url = $this->uri->segment(1);
    $divId = '';
      if ($url == "") {
        $divId = 'home';
      }
   ?>
<body id="<?php echo $divId; ?>">

<!-- The Modal -->
<div class="modal" id="userModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header user-modal-header">
        <h4 class="modal-title">Edit Profile</h4>
        <button type="button" class="close close-modal" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="user-modal-body">
        <div>
        <form id="myform" action="<?php echo base_url().'profile_update'?>" method="post">
            <input type="hidden" value="<?php echo $this->session->userdata['id']; ?>" name="id">
            <div class="form-group">
    			     <input type="firstname" class="form-control" name="firstname" value="<?php echo $this->session->userdata['firstname']; ?>" required="">
    			     <label class="label-field">First Name</label>
        		</div>
        	<div class="form-group">
              
        			<input type="lastname" class="form-control" name="lastname" value="<?php echo $this->session->userdata['lastname']; ?>" required="">
        			<label class="label-field">Last Name</label>
        	</div>
        	<div class="form-group">
        			<input type="email" class="form-control" name="email" value="<?php echo $this->session->userdata['username']; ?>" required="">
        			<label class="label-field">Email</label>
        	</div> 
          <div class="form-group">
              <input type="submit" value="Submit" class="btn-login">
          </div> 
        		
        </form>
      </div>
      </div>	  
	 <!-- Modal body -->
	 
	 
    </div>
  </div>
</div>


<header class="inner-header">
	<div class="container">
		<nav id="navbar" class="navbar navbar-expand-md sticky">
			<a class="navbar-brand" href="<?php echo base_url(); ?>">
				<img class="img-responsive" src="<?php echo base_url(); ?>assests/images/logo.png" alt="International Career Development">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			  	<p>Toggle navigation</p>		  
                <div class="f-right"><span></span>
                <span></span>
                <span></span></div>
              </button>
        	<div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ml-auto nav-item">
                  <li ><a <?php if($this->uri->segment(1)=="process"){echo 'class="active"';}?>  href="<?php echo base_url(); ?>process">Our Process</a></li>
                  <li ><a <?php if($this->uri->segment(1)=="learning-center"){echo 'class="active"';}?> href="<?php echo base_url(); ?>learning-center">Learning Center</a></li>		  
                 
                  <li ><a  <?php if($this->uri->segment(1)=="fresh"){echo 'class="active"';}?> href="<?php echo base_url(); ?>fresh">Fresh Starts</a></li>
                </ul>			
              </div>
			  
			  <div class="header-right">
					
          <?php  
            if(isset($this->session->userdata['firstname']) && !empty($this->session->userdata['firstname']))
            {
            ?>
            <div class="user-wrap">
				<!--  <span class="user-roundimg"><img class="img-responsive" src="<?php echo base_url(); ?>assests/images/no-image.png" alt="user-img"></span> -->
				<a href="JavaScript:Void(0);" data-toggle="modal" data-target="#userModal">Hello <?php echo $this->session->userdata['firstname']; ?></a>
			</div>
             
             <a class="sign-btn" href="<?php echo base_url(); ?>logout"><i class="fa fa-logout"></i> Logout</a> 

            <?php 
             
            }
            else
            {
             ?>
             <a class="login-btn" href="<?php echo base_url(); ?>login"><i class="fa fa-lock"></i> Login</a> 
             <a class="sign-btn" href="<?php echo base_url(); ?>signup"><i class="fa fa-sign-in"></i> Sign Up</a>
            <?php   
            }
          ?>
          

          
			  </div>
			  
        </nav>        
    </div>
    <div class="clearfix"></div>	
</header>
