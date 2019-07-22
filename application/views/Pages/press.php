	<div class="home-banner terms-header">				
			<div class="container">
				<h1>Press</h1>
			</div>  
        </div>
     





	<div class="body-wrap">			
			<div class="container">
				<div class="howtowork-wrap">

			<?php 
				foreach($press as $value){
			?>
					<div class="learn__listing">
						<div class="epvYRw">

				<div><small>—<?php echo $value['created']; ?></small><h4 class="nNHhI"><a href="<?php echo $value['link']; ?>"><?php echo $value['title']; ?></a></h4><p><?php echo $value['auther']; ?></p><a class="readmore" href="<?php echo $value['link']; ?>">Read more <i class="fa fa-long-arrow-right"></i></a>
							<div class="clearfix"></div>
							</div>
			

							
						</div>
					</div>	
					<?php } ?>												
				</div>
			</div>
		
		<div class="clearfix"></div>		
	</div>	