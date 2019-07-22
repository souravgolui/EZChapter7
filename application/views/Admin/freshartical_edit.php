

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
		 ArticalTitle:"required",	      	
         Catagory  : "required",
         ShortDescription : "required",
         FirstArtical :"required"
         
      },
      errorPlacement: function(label, element) {
         // position error label after generated textarea
         label.insertAfter(element.next());
      },
      messages: {
      	ArticalTitle: "Please enter Article Title",
        Catagory : "Please select Category ",
        ShortDescription :"Please enter Short Description",
        FirstArtical : "Please enter First Artical"

      }
   });
});
 </script> 
     
<div class="right_col" role="main" style="min-height: 700px;">
	<div class="x_content">
  <h2>FRESH ARTICLE EDIT</h2>


<form id="myform" action="<?php echo base_url().'fresh_update'?>" method="post">
		<input type="hidden" value="<?php echo $id ?>" name="id">
		
		<div class="form-group">
			<div class="row">
				<div class="col-sm-2">
					<label>Article Title</label>
				</div>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="ArticalTitle" value="<?php echo $ar[0]['artical_title'] ?>" />
					<br>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-sm-2">
					<label>Category</label>
				</div>
				<div class="col-sm-4">
				<!-- 	<select name="category_id" class="form-control">
					<option>Select Category</option>
					<?php
					foreach($fresh_catagory as $category)
					{

					?>
					<option value="<?php echo $category['id']?>">
						<?php echo $category['cata_name']?>
					</option>
					<?php 
					}
					?>
					</select> -->
				<select type="text" name="Catagory[]" multiple class="form-control" required/>
     			<option>Select Catagory</option>

     			<?php 

     			$catagoryArr = explode(',', $ar[0]['cata_id']);
     			?>
     			<?php foreach($fresh_catagory as $cata){ ?>
     			<option <?php if(in_array($cata['id'], $catagoryArr)){ echo 'selected="selected"'; } ?> value="<?php echo $cata['id'] ?>"><?php echo $cata['cata_name'] ?></option>
     			<?php } ?>
     		</select>
     		<br>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-sm-2">
					<label>Short Description</label>
				</div>
				<div class="col-sm-4">
					<textarea type="text" class="form-control" name="ShortDescription" /><?php echo $ar[0]['short_description'] ?></textarea>
					<br>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-sm-2">
					<label>First Article</label>
				</div>
				<div class="col-sm-10">
					<textarea name="FirstArtical" /><?php echo $ar[0]['first_artical'] ?></textarea>
					<br>
				</div>
			</div>
		</div>
		
		<div class="form-group">
			<div class="row">
				<div class="col-sm-2">
					<label>&nbsp;</label>
				</div>
				<div class="col-sm-4">
					<input type="submit" value="Save" class="btn btn-primary" >
				</div>
			</div>
		</div>
		
	</form>
 </div>
     </div>               
   <?php $this->load->view('Element/A_footer'); ?>
    <script>
    	CKEDITOR.config.allowedContent = true;
        CKEDITOR.replace( 'FirstArtical');
      
                        
 </script> 


