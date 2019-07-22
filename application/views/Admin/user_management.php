<?php $this->load->view('Element/A_header'); ?>
 
     <?php $this->load->view('Element/A_left'); ?>

     

   
<div class="right_col" role="main">

  <div class="x_content">
                    
                   
                     
                     <div class="col-sm-12">
                      <h1>User Management</h1>
                        <table id="myTable" >
                        <thead>
                          <tr role="row">
                            <th align="center" >Email</th>                           
                            <th align="center">Password</th> 
                            <th align="center">Firstname</th>
                            <th align="center">Lastname</th>
                          
                            <th align="center">Status</th>
                            <th align="center"></th>
                            <th align="center"></th>
                          </tr>                        
                        </thead>

                        <tbody>

                            <?php foreach($users as $user){ ?>
                              <tr>
                          
                                <td width="15%"><strong><?php echo $user['username'] ?></strong></td>
                                <td><?php echo $user['password'] ?></td>
                                <td><?php echo $user['firstname'] ?></td>
                                <td><?php echo $user['lastname'] ?></td>
                                <td><?php 
                                if($user['status'] == '1'){ 



                                  ?>

                                 <a href="<?php echo base_url().'inactive/'.$user['id']; ?>" >Make Inactive</a> 


                                 <?php 
                               }else
                                  { ?>
                                  <a href="<?php echo base_url().'active/'.$user['id']; ?>" >Make Active</a>
                              <?php 
                               }
                                 ?>
                               <?php 
                                  
                                ?></td>
                              <td width="15%"><a class ='btn btn-primary' href="<?php echo base_url().'user_edit/'.$user['id']; ?>">EDIT</a></td> 
                              <td width="15%"><a class ='btn btn-primary' onclick="return confirm('Are you sure?')" href="<?php echo base_url().'user_delete/'.$user['id']; ?>">DELETE</a></td> 
                                
                              </tr>
                          <?php } ?>

                        </tbody>
                      </table>
  </div>                        
</div>  
                     
<div class="clearfix"></div>
  </div>      

        <?php $this->load->view('Element/A_footer'); ?>
     