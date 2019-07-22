
<script src="<?php echo base_url(); ?>assests/js/jquery.validate.js"></script>
<style type="text/css">
	.err_txt{
		color: #990000;
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

<div class="body-wrap">		
		<div class="login-wrap">			
		
		<div class="login-top-row">
			<img class="img-responsive" src="assests/images/f-logo.png" alt="EZChapter7 Fresh Start" />		</div>
		<h2 class="forgot-t">Request a Password Reset</h2>
		<p>Enter the email used with your EZChapter7 account.</p><br>
		
		<form id="myform" action="<?php echo base_url().'updatepass'?>" method="post">
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
			<input type="submit" value="continue" class="btn-login" >
		</div>
		<span class="login-bottom-row">Don’t have an account? Create one <a href="registration.html">here.</a></span>		</div>
	</div>	
		
	
	<div class="clearfix"></div>