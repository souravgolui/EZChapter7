<style>
  .dataTables_length{
    display:none;
  }
  .dataTables_filter{
    display:none;
  } 
  .x_content h2{
    color:#000;  
    font-size:25px;  
  } 
  .x_content p{
   line-height:25px; 
   font-size:15px; 
   color:#394a5c; 
  } 

</style>
  <?php $this->load->view('Element/A_header'); ?>
 <!-- <?php include('Element/A_left.php');?> -->
     <?php $this->load->view('Element/A_left'); ?>

     
     <!--  <?php include('Element/A_header.php');?> -->

   
<div class="right_col" role="main">

  <div class="x_content">

                     
                     <div class="col-sm-12">
                      <h2>Static Page</h2>
                        <table id="myTable" class="table table-striped">
                        <thead>
                          <tr role="row">
                            <th align="center" >Title</th>                           
                            <th align="center">Description</th> 
                            <th></th> 
                            <th></th>
                          </tr>                        
                        </thead>

                        <tbody>

                            <?php foreach($site_settings as $site){ ?>
                              <tr>
                          
                                <td width="15%"><strong><?php echo $site['title'] ?></strong></td>
                                <td><?php echo word_limiter( $site['value'], 120); ?></td>
                         
                              
                                <td width="5%"><a class ='btn btn-primary' href="<?php echo base_url().'edit/'.$site['id']; ?>">EDIT</a></td> 
                                  <td width="5%"><a class ='btn btn-primary' href="<?php echo base_url().'del/'.$site['id']; ?>">DELETE</a></td>
                              </tr>
                          <?php } ?>

                        </tbody>
                      </table>
  </div>                        
</div>  
               
<div class="clearfix"></div>
       </div>     

        <?php $this->load->view('Element/A_footer'); ?>
     