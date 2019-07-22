<?php $this->load->view('Element/A_header'); ?>
 <!-- <?php include('Element/A_left.php');?> -->
     <?php $this->load->view('Element/A_left'); ?>

     
     <!--  <?php include('Element/A_header.php');?> -->
     
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
      //errorElement : 'span',
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
        password : "Please enter Password ",
        firstname :"Please enter Firstname",
        lastname : "Please enter Lastname"

      }
   });
});
 </script> 
     
<div class="right_col" role="main" style="min-height: 700px;">
	<div class="x_content">
  <h2> USER MANAGEMENT EDIT </h2>


	<form id="myform" action="<?php echo base_url().'user_update'?>" method="post">
		<input type="hidden" value="<?php echo $users[0]['id'] ?>" name="id">
		<div class="form-group">
			<div class="row">
				<div class="col-sm-2">
					<label>Email</label>
				</div>
				<div class="col-sm-4">	
					<input type="text" class="form-control" placeholder="support@fundyme.com" name="email" value="<?php echo $users[0]['username'] ?>" /> 
					<br>
				</div>
			</div>		
		</div>
		<div class="clearfix"></div>
		<div class="form-group">
			<div class="row">
				<div class="col-sm-2">
					<label>Password</label>
				</div>
				<div class="col-sm-4">	
					<input type="password" class="form-control" placeholder="123456" name="password" value="<?php echo $users[0]['password'] ?>" /> 
					<br>
				</div>
			</div>		
		</div>
		<div class="clearfix"></div>
		<div class="form-group">
			<div class="row">
				<div class="col-sm-2">
					<label>Firstname</label>
				</div>
				<div class="col-sm-4">	
					<input type="firstname" class="form-control" placeholder="Sania" name="firstname" value="<?php echo $users[0]['firstname'] ?>" /> 
					<br>
				</div>
			</div>	
		</div>
		<div class="clearfix"></div>
			
		<div class="form-group">
			<div class="row">
				<div class="col-sm-2">
					<label>Lastname</label>
				</div>
				<div class="col-sm-4">		
					<input type="lastname" class="form-control" placeholder="Mishra" name="lastname" value="<?php echo $users[0]['lastname'] ?>" /> 
					<br>
				</div>
			</div>	
		</div>
		<div class="clearfix"></div>

		<div class="form-group">
			<input type="submit" value="Save" class="btn btn-primary" >
		</div>
	</form>
 </div>
     </div>               
   <?php $this->load->view('Element/A_footer'); ?>