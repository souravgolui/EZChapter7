
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
  <h2>CATAGORY ADD</h2>


<form id="myform" action="<?php echo base_url(); ?>cADD" method="post" accept-charset="utf-8">

      Catagory Name <input type="text" name="CatagoryName" value="">
      <br><br>


<br><br><input type="submit" name="submit" value="SAVE">
</form>
 </div>
     </div>               
   <?php $this->load->view('Element/A_footer'); ?>