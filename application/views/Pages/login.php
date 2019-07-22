
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
         password  : "required"
         
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
        password : "Please enter password "

      }
   });
});
 </script> 

<!-- <script>
var finished_rendering = function() {
  console.log("finished rendering plugins");
  var spinner = document.getElementById("spinner");
  spinner.removeAttribute("style");
  spinner.removeChild(spinner.childNodes[0]);
}
FB.Event.subscribe('xfbml.render', finished_rendering);
</script>
<div id="spinner"
    style="
        background: #4267b2;
        border-radius: 5px;
        color: white;
        height: 40px;
        text-align: center;
        width: 250px;">
    Loading
    <div
    class="fb-login-button"
    data-max-rows="1"
    data-size="large"
    data-button-type="continue_with"
    data-use-continue-as="true"
    ></div>
</div>
 <div
    class="fb-login-button"
    data-max-rows="1"
    data-size="<medium, large>"
    data-button-type="continue_with"
    data-width="<100% or px>"
    data-scope="<comma separated list of permissions, e.g. public_profile, email>"
></div>
 -->
	
	<div class="body-wrap">		
		<div class="login-wrap">			
		
		<div class="login-top-row">
			<img class="img-responsive" src="assests/images/f-logo.png" alt="EZChapter7 Fresh Start" />		</div>
		<h2>Login</h2><br>

		<div class="fb-login">
			<a href="#"><i class="fa-facebook-official1"></i> <font>Continue with Facebook</font></a>		</div>
		<div class="err-msg">
			<?php echo $err; ?>
		</div>	

	<form id="myform" action="<?php echo base_url().'log'?>" method="post">
		<div class="form-group">
			<input type="text" class="form-control" placeholder="support@fundyme.com" name="email" required /> 
			<label>Email</label>

		</div>
		<div class="clearfix"></div>
		<div class="form-group">
			<input type="password" class="form-control" placeholder="123456" name="password" required /> 
			<label>Password</label>
		</div>
		<div class="clearfix"></div>
		<div class="form-remember-group">
			<span class="label-check">
				<input type="checkbox" id="remember" name="rem">
				<label for="remember">Remember me</label>
			</span>
			<span class="forgot-pass">
				<a href="<?php echo base_url(); ?>forgetpass">Forgotten Password</a>			</span>
		<div class="clearfix"></div>	
		</div>
		<div class="form-group">
			<input type="submit" value="continue" class="btn-login" >
		</div>
	</form>
		<span class="login-bottom-row">Don’t have an account? Create one <a href="<?php echo base_url(); ?>signup">here.</a></span>		</div>
	</div>	
		
	
	<div class="clearfix"></div>
	
	

