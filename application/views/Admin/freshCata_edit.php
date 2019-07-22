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
     /* errorElement : 'span',*/
      errorClass:'err_txt',
      rules: {
		 CatagoryName:"required"
         
      },
      errorPlacement: function(label, element) {
         // position error label after generated textarea
         label.insertAfter(element.next());
      },
      messages: {
      	CatagoryName: "Please enter Catagory Name"
        
      }
   });
});
 </script> 
     
<div class="right_col" role="main" style="min-height: 700px;">
	<div class="x_content">
  <h2>FRESH CATAGORY EDIT</h2>


<form id="myform" action="<?php echo base_url(); ?>freshCata_update" method="post">
		<input type="hidden" value="<?php echo $cata[0]['id'] ?>" name="id">
		<div class="form-group">
			<label>Catagory Name</label>
			<input type="text" name="CatagoryName" value="<?php echo $cata[0]['cata_name'] ?>">
			<br>
		</div>
		<div class="form-group">
			<input type="submit" value="Save" class="btn-login" >
		</div>
	</form>
 </div>
     </div>               
   <?php $this->load->view('Element/A_footer'); ?>