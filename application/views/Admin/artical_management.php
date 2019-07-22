<?php $this->load->view('Element/A_header'); ?>
 
     <?php $this->load->view('Element/A_left'); ?>

     

   
<div class="right_col" role="main">

  <div class="x_content">
                    
                   
                     
                     <div class="col-sm-12">
                      <h1>Article Management</h1>
                        <table id="myTable" >
                          <a class ='btn btn-primary' href="<?php echo base_url(); ?>artical_add">ADD</a>
                        <thead>
                          <tr role="row">
                            <th align="center" >Article Title</th>                           
                            <th align="center" >Catagory</th>
                            <th align="center" >Short Description</th>
                            <th align="center" >First Article</th>
                            <th align="center" >Secound Article</th>
                            <th></th> 
                            
                          

                          </tr>                        
                        </thead>

                        <tbody>

                            <?php foreach($artical as $ar){ ?>
                              <tr>
                          
                                <td width="15%"><strong><?php echo $ar['artical_title'] ?></strong></td>
                                <td width="15%"><strong><?php 

                                  echo $this->CI->getCatagoryName($ar['catagory']); 


                                ?></strong></td>
                                <td width="15%"><strong><?php echo $ar['short_description'] ?></strong></td>
                                <td width="15%"><strong><?php echo word_limiter( $ar['first_artical'],50  ); ?></strong></td>
                               <td width="15%"><strong><?php echo word_limiter( $ar['secound_artical'],50); ?></strong></td>

                              <td width="15%"><a class ='btn btn-primary' href="<?php echo base_url().'artical_edit/'.$ar['id']; ?>">EDIT</a></td> 
                              <td width="15%"><a class ='btn btn-primary' href="<?php echo base_url().'artical_delete/'.$ar['id']; ?>">DELETE</a></td> 
                                
                              </tr>
                          <?php } ?>

                        </tbody>
                      </table>
  </div>                        
</div>  
                     
<div class="clearfix"></div>
  </div>      

        <?php $this->load->view('Element/A_footer'); ?>
