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
     title:"required",
     auther:"required",
     link:"required"
         
      },
      errorPlacement: function(label, element) {
         // position error label after generated textarea
         label.insertAfter(element.next());
      },
      messages: {
        title: "Please enter Title",
        auther:"Please enter Auther",
        link:"Please enter Link"
      }
   });
});
 </script> 
     
<div class="right_col" role="main" style="min-height: 700px;">
	<div class="x_content">
  <h2>PRESS EDIT</h2>


<form id="myform" action="<?php echo base_url().'press_update'?>" method="post">
		<input type="hidden" value="<?php echo $id ?>" name="id">
		<div class="form-group">
      <div class="row">
          <div class="col-sm-2">
            <label>Press Title</label>
          </div>
          <div class="col-sm-4">
            <input type="text" name="title" value="<?php echo $ar[0]['title'] ?>">
            <br>
          </div>
      </div>
    </div> 
    <div class="form-group">
        <div class="row">
          <div class="col-sm-2">
            <label>Press Auther</label>
          </div>
          <div class="col-sm-4">
            <input type="text" name="auther" value="<?php echo $ar[0]['auther'] ?>">
            <br>
          </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-sm-2">
              <label>Press Link</label>
            </div>
            <div class="col-sm-4">
             <input type="text" name="link" value="<?php echo $ar[0]['link'] ?>">
              <br>
            </div>
        </div>
    </div>
		<div class="form-group">
			<input type="submit" value="Save" class="btn btn-primary" >
		</div>
	</form>
 </div>
     </div>               
   <?php $this->load->view('Element/A_footer'); ?>