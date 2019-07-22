<?php $this->load->view('Element/A_header'); ?> 

    <?php $this->load->view('Element/A_left'); ?>   
   
<div class="right_col" role="main">
	<div class="x_content">  
		<div class="col-sm-12">
		<h1>Press Management</h1>
		<table id="myTable" >
		  <a class ='btn btn-primary' href="<?php echo base_url(); ?>pressAdd">ADD</a>
			<thead>
			  <tr role="row">
				<th align="center">Press Title</th>                           
			   <th align="center">Auther</th>
				<th align="center">Link</th>
							
				<th></th> 
			  </tr>                        
			</thead>
			<tbody>
				<?php foreach($press as $ar){ ?>
				  <tr>		  
					<td width="15%"><strong><?php echo $ar['title'] ?></strong></td>
					<td><strong><?php echo $ar['auther'] ?></strong></td>   		
					<td><strong><?php echo $ar['link'] ?></strong></td>
					<td><a class ='btn btn-primary' href="<?php echo base_url().'press_edit/'.$ar['id']; ?>">EDIT</a> 
					<a class ='btn btn-primary' href="<?php echo base_url().'press_delete/'.$ar['id']; ?>">DELETE</a></td> 
				  </tr>
			  <?php } ?>

			</tbody>
		</table>
  </div>                        
</div>  
                     
<div class="clearfix"></div>
  </div>      

        <?php $this->load->view('Element/A_footer'); ?>
