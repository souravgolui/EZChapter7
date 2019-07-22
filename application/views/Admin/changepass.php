
<?php $this->load->view('Element/A_header'); ?>
<script src="<?php echo base_url(); ?>assests/js/jquery.validate.js"></script>

<style type="text/css">
	.err_txt{
		color: #990000;
		float: left;
    width: 100%;
    margin-top: 0 !important;
    text-align: left;
	}

</style>
<script>
$(document).ready( function() {
      var validator = $("#myform").submit(function() {
         // update underlying textarea before submit validation
      }).validate({
      errorElement : 'span',
      errorClass:'err_txt',
      rules: {
		 	
         password  : "required",
         confirm_password:"required"
         
      },
      errorPlacement: function(label, element) {
         // position error label after generated textarea
         label.insertAfter(element.next());
      },
      messages: {
      
        password : "Please enter password ",
        confirm_password:"Please enter confirm password"

      }
   });
});
 </script> 

<div class="loginbody">
  		<div class="container mainlanding">
			<div class="landingloginbodypart">
				<div class="loginlandmid">
					<div class="logopart">
						<a href="index.html" class="navbar-brand nav-logo">
						  <img alt="logo" src="<?php base_url(); ?>assests/images/login-logo.png" class="img-responsive">
						</a>
					</div>
					
					<h2></h2>
					
					<div>
			
		</div>	
					<div class="loginmainbodyland">
				
						<form id="myform" action="<?php echo base_url().'A_updatepass'?>" method="post">
		<div class="form-group">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<input type="password" id="password" class="form-control" placeholder="password" name="password" /> 
			<label>Password</label>
		</div>
		<div class="form-group">
			<input type="password" class="form-control" placeholder="confirm_password" name="confirm_password" /> 
			<label>Confirm Password</label>
		</div>
		<div class="form-group">
			<input type="submit" value="continue" class="btn btn-primary" >
		</div>
		</form>
						
					</div>
										
				</div>
			</div>
		</div>
  </div>


<style>
.main_container .top_nav {
    display: none;
	}
</style>