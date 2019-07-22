<?php $this->load->view('Element/A_header'); ?>
 
     <?php $this->load->view('Element/A_left'); ?>

     

   
<div class="right_col" role="main">

  <div class="x_content">
                    
                   
                     
                     <div class="col-sm-12">
                      <h1>Catagory Management</h1>
                        <table id="myTable" >
                          <a class ='btn btn-primary' href="<?php echo base_url(); ?>catagory_add">ADD</a>
                        <thead>
                          <tr role="row">
                            <th align="center" >Catagory Name</th>                           
                            <th align="status" >Status</th>
                            <th></th> 
                            <th></th>  
                          

                          </tr>                        
                        </thead>

                        <tbody>

                            <?php foreach($catagory as $cata){ ?>
                              <tr>
                          
                                <td width="15%"><strong><?php echo $cata['cata_name'] ?></strong></td>
                                <td><?php 
                                if($cata['status'] == '1'){ 



                                  ?>

                                 <a href="<?php echo base_url().'artical_inactive/'.$cata['id']; ?>" >Make Inactive</a> 


                                 <?php 
                               }else
                                  { ?>
                                  <a href="<?php echo base_url().'artical_active/'.$cata['id']; ?>" >Make Active</a>
                              <?php 
                               }
                                 ?>
                               <?php 
                                  
                                ?></td>
                                <td></td>
                             
                               
                              <td width="15%"><a class ='btn btn-primary' href="<?php echo base_url().'catagory_edit/'.$cata['id'];?>">EDIT</a></td> 
                              <td width="15%"><a class ='btn btn-primary' href="<?php echo base_url().'catagory_delete/'.$cata['id'];?>">DELETE</a></td> 
                                
                              </tr>
                          <?php } ?>

                        </tbody>
                      </table>
  </div>                        
</div>  
                     
<div class="clearfix"></div>
  </div>      

        <?php $this->load->view('Element/A_footer'); ?>
     