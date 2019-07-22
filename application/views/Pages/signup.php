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
		 email:{
		 	required: true,
		 	email: true
		 },	      	
         password  : "required",
         firstname : "required",
         lastname :"required"
         
      },
      errorPlacement: function(label, element) {
         // position error label after generated textarea
         label.insertAfter(element.next());
      },
      messages: {
      	email: {
      		required:"Please enter email",
      		email: "Please enter a valid email address"
      		},
        password : "Please enter password ",
        firstname :"Please enter firstname",
        lastname : "Please enter lastname"

      }
   });
});
 </script> 

	<div class="body-wrap">		
		<div class="login-wrap">			
		
		<div class="login-top-row">
			<img class="img-responsive" src="assests/images/f-logo.png" alt="EZChapter7 Fresh Start" />		</div>
		<h2>Sign Up</h2><br>

		<div class="fb-login">
			<a href="#"><i class="fa-facebook-official1"></i> <font>Continue with Facebook</font></a>		</div>
		

	<form id="myform" action="<?php echo base_url().'sign'?>" method="post">
		<div class="form-group">
			<input type="text" class="form-control" placeholder="support@fundyme.com" name="email" required/> 
			<label>Email</label>
		</div>
		<div class="clearfix"></div>
		<div class="form-group">
			<input type="password" class="form-control" placeholder="123456" name="password" required/> 
			<label>Password</label>
		</div>
		<div class="clearfix"></div>
		<div class="form-group">
			<input type="firstname" class="form-control" placeholder="Sania" name="firstname" required/> 
			<label>First Name</label>
		</div>
		<div class="clearfix"></div>
			
		<div class="form-group">
			<input type="lastname" class="form-control" placeholder="Mishra" name="lastname" required /> 
			<label>Last Name</label>
		</div>
		<div class="clearfix"></div>


		<div class="form-group">
			<input type="submit" value="Sign Up" class="btn-login" >
		</div><br />

	</form>
	
	
				</div>
	</div>	
		
	
	<div class="clearfix"></div>