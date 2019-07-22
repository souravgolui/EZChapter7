<?php $this->load->view('Element/A_header'); ?>
 
     <?php $this->load->view('Element/A_left'); ?>

     

   
<div class="right_col" role="main">

  <div class="x_content">
                    
                   
                     
                     <div class="col-sm-12">
                      <h1>Fresh Catagory Management</h1>
                        <table id="myTable" >
                          <a class ='btn btn-primary' href="<?php echo base_url(); ?>freshCata_add">ADD</a>
                        <thead>
                          <tr role="row">
                            <th align="center" >Catagory Name</th>                           
                            
                            <th></th> 
                            <th></th>  
                          

                          </tr>                        
                        </thead>

                        <tbody>

                            <?php foreach($fresh_catagory as $cata){ ?>
                              <tr>
                          
                                <td width="15%"><strong><?php echo $cata['cata_name'] ?></strong></td>
                                
                                <td></td>
                             
                               
                              <td width="15%"><a class ='btn btn-primary' href="<?php echo base_url().'freshCataEdit/'.$cata['id']; ?> ">EDIT</a></td> 
                              <td width="15%"><a class ='btn btn-primary' href="<?php echo base_url().'freshCata_Delete/'.$cata['id']; ?>">DELETE</a></td> 
                                
                              </tr>
                          <?php } ?>

                        </tbody>
                      </table>
  </div>                        
</div>  
                     
<div class="clearfix"></div>
  </div>      

        <?php $this->load->view('Element/A_footer'); ?>
     