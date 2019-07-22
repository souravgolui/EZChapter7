<?php $this->load->view('Element/A_header'); ?> 

    <?php $this->load->view('Element/A_left'); ?>   
   
<div class="right_col" role="main">
	<div class="x_content">  
		<div class="col-sm-12">
		<h1>Fresh Article Management</h1>
		<table id="myTable" >
		  <a class ='btn btn-primary' href="<?php echo base_url(); ?>fresh_add">ADD</a>
			<thead>
			  <tr role="row">
				<th align="center">Article Title</th>                           
			   <th align="center">Catagory</th>
				<th align="center">Short Description</th>
				<th align="center">First Article</th>			
				<th></th> 
			  </tr>                        
			</thead>
			<tbody>
				<?php foreach($fresh_artical as $ar){ ?>
				  <tr>		  
					<td width="15%"><strong><?php echo $ar['artical_title'] ?></strong></td>
					<td><strong><?php echo $this->CI->getfreshCatagoryName($ar['cata_id']);?></strong></td>		   		
					<td><strong><?php echo $ar['short_description'] ?></strong></td>
					<td><strong><?php echo word_limiter( $ar['first_artical'],20  ); ?></strong></td>
					<td><a class ='btn btn-primary' href="<?php echo base_url().'fresh_edit/'.$ar['id']; ?>">EDIT</a> 
					<a class ='btn btn-primary' href="<?php echo base_url().'fresh_delete/'.$ar['id']; ?>">DELETE</a></td> 
				  </tr>
			  <?php } ?>

			</tbody>
		</table>
  </div>                        
</div>  
                     
<div class="clearfix"></div>
  </div>      

        <?php $this->load->view('Element/A_footer'); ?>
