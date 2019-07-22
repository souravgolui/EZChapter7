<div class="storybox-details">				
	<div class="container">	
		<div class="storybox-inner">
			<div class="storybox-details-header">
				<span class="fresh-label">FRESH START DIARY</span>
				<h2><?php echo $artical_title; ?></h2>
				<p><?php echo $short_description; ?></p>
				<small>— <?php echo date('F, Y',strtotime($created));?></small>
			</div>		
			<div class="storybox-details-content">
				<?php echo $first_artical; ?>
			</div>
		</div>
	<div class="clearfix"></div>	
	</div>  
</div>