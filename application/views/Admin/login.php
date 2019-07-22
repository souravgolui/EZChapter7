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



<div class="loginbody">
  		<div class="container mainlanding">
			<div class="landingloginbodypart">
				<div class="loginlandmid">
					<div class="logopart">
						<a href="index.html" class="navbar-brand nav-logo">
						  <img alt="logo" src="<?php base_url(); ?>assests/images/login-logo.png" class="img-responsive">
						</a>
					</div>
					
					<h2>Sign in</h2>
					
					<div class="loginmainbodyland">
				
						<form id="myform" action="<?php echo base_url(); ?>A_login" method="post" accept-charset="utf-8">
							<div class="loginupperpart">
								
								<span>
									<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username', 'name'=> 'email']); ?><div class="clearfix"></div>
								</span>
								
								
							</div>
							
							<div class="loginupperpart11">
								<label>Password</label>								
								<span>
									<?php echo form_password(['class'=>'form-control','type'=>'password','placeholder'=>'Enter Password', 'name'=> 'password']); ?><div class="clearfix"></div>
								</span>

							</div>
							<div class="clearfix"></div>
							
							<div class="form-remember-group">
							
								<span class="forgot-pass">
									<a href="<?php echo base_url(); ?>A_forgetpass">Forgotten Password</a>			</span>
									
							<div class="clearfix"></div>	
							</div>
							
							<div class="loginsubmitbutton">
								<?php echo form_submit(['class'=>'btn btn-primary','type'=>'submit','value'=>'Submit', 'onclick'=>'return confirm("Login Success")']); ?>
								
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