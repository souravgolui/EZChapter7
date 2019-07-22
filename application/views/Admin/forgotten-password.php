
<?php 
	$err = '';
	if(isset($_GET['msg'])){
		$err = $_GET['msg'];
	}
?>

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
				
						<form id="myform" action="<?php echo base_url().'A_forpass'?>" method="post">
		
							<div class="form-group text-left">
								<label>Forgot Password</label>
								<input type="text" class="form-control" placeholder="Enter your email" name="email" /> <div class="clearfix"></div>
								<?php echo $err; ?>

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