
<?php 
	$err = '';
	if(isset($_GET['msg'])){
		$err = $_GET['msg'];
	}
?>

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
		 }
         
      },
      errorPlacement: function(label, element) {
         // position error label after generated textarea
         label.insertAfter(element.next());
      },
      messages: {
      	email: {
      		required:"Please enter email",
      		email: "Please enter a valid email address"
      		}

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
		<div>
			<?php echo $err; ?>
		</div>	
	<form id="myform" action="<?php echo base_url().'forpass'?>" method="post">
		
		<div class="form-group">
			<input type="text" class="form-control" placeholder="support@fundyme.com" name="email" required /> 

			<label>Email</label>
		</div>
		
		<div class="form-group">
			<input type="submit" value="continue" class="btn-login" >
		</div>
	</form>
		<span class="login-bottom-row">Don’t have an account? Create one <a href="<?php echo base_url().'signup'?>">here.</a></span>		</div>
	</div>	
		
	
	<div class="clearfix"></div>
	
	

