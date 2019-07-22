
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
             
         title  : "required",
         editor : "required"
         
      },
      errorPlacement: function(label, element) {
         // position error label after generated textarea
         label.insertAfter(element.next());
      },
      messages: {
       
        title : "Please enter title ",
        editor :"Please enter Description"

      }
   });
});
 </script> 
     
<div class="right_col" role="main" style="min-height: 700px;">
	<div class="x_content">
  <h2>EDIT </h2>


<form id="myform" action="<?php echo base_url(); ?>Admin/update" method="post" accept-charset="utf-8">

<input type="hidden" name="id" value="<?php echo $site_settings[0]['id'] ?>">

<br><br><input type="text" name="title" value="<?php echo $site_settings[0]['title'] ?>">
<br><br>
Description<textarea name="editor" id="editor"><?php echo $site_settings[0]['value'] ?></textarea>


<br><br><input type="submit" name="submit" value="SAVE" class="btn btn-primary">
</form>
 </div>
     </div>               
   <?php $this->load->view('Element/A_footer'); ?>
     
  

  <script>
                        CKEDITOR.replace( 'editor' );
                        //editor.allowedContent(true);
                        CKEDITOR.config.allowedContent = true;
                        
                        //alert(CKEDITOR.version);
 </script> 



