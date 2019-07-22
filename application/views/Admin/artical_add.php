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
         ArticalTitle:"required",           
         Catagory  : "required",
         ShortDescription : "required",
         FirstArtical :"required",
         SecoundArtical :"required"
         
      },
      errorPlacement: function(label, element) {
         // position error label after generated textarea
         label.insertAfter(element.next());
      },
      messages: {
        ArticalTitle: "Please enter Article Title",
        Catagory : "Please select Category ",
        ShortDescription :"Please enter Short Description",
        FirstArtical : "Please enter First Artical",
        SecoundArtical : "Please enter Secound Artical"
      }
   });
});
 </script> 
     
<div class="right_col" role="main" style="min-height: 700px;">
	<div class="x_content">
  <h2>Article ADD</h2>


<form id="myform" action="<?php echo base_url(); ?>aADD" method="post" accept-charset="utf-8">
    <div class="form-group">
        <div class="row">
            <div class="col-sm-2">
               <label> Article Title </label>
            </div>
            <div class="col-sm-4">   
                <input type="text" name="ArticalTitle" value="">
                <br>
            </div>
        </div>
    </div>
     <div class="form-group">
        <div class="row">
            <div class="col-sm-2">
                <label> Catagory </label>
            </div>
            <div class="col-sm-4">     
                <select class="form-control" type="text" name="Catagory[]" multiple required/>
         			<option>Select Catagory</option>
         			<?php foreach($catagory as $cata){ ?>
         			<option value="<?php echo $cata['id'] ?>"><?php echo $cata['cata_name'] ?></option>
         			<?php } ?>
     		    </select>
                <br>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-sm-2">
                <label> Short Description </label>
            </div>
            <div class="col-sm-4">     
                <input type="text" name="ShortDescription" value="">
                <br>
            </div>
        </div>
    </div>      
    <div class="form-group">
        <div class="row">
            <div class="col-sm-2">
                <label> First Article </label>
            </div>
            <div class="col-sm-10">     
                <textarea name="FirstArtical" class="form-control" value=""></textarea>
                <br>
            </div>
        </div>
    </div>    
    <div class="form-group">
        <div class="row">
            <div class="col-sm-2">
                <label> Secound Article </label>
            </div>
            <div class="col-sm-10">      
                <textarea name="SecoundArtical" class="form-control" value=""></textarea>
                <br>
            </div>
        </div>
    </div> 
    <div class="form-group">
        <div class="row">
            <div class="col-sm-2">
                <label>&nbsp;</label>
            </div>
            <div class="col-sm-10">
                <input type="submit" name="submit" value="SAVE" class="btn btn-primary">
            </div>
        </div>
    </div>           

</form>
 </div>
     </div>               
   <?php $this->load->view('Element/A_footer'); ?>
    <script>
                        CKEDITOR.replace( 'FirstArtical');
                        CKEDITOR.replace( 'SecoundArtical');
 </script> 