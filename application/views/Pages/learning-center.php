	<script type="text/javascript">
		/*$(document).ready(function(){
			$('#search-box').on('keyup keydown', function(){
				var keyword = $('#search-box').val();
				//alert(keyword);
				if(keyword != ''){
					$.ajax({
						url: '<?php echo base_url(); ?>search_artical',
						method: 'POST',
						data: {'keyword': keyword},
						success:function(res){
							if(res.length >0){

								var html = '';

								html += '<ul>';

								for(var i= 0; i<res.length; i++){

									html += '<a href="<?php echo base_url(); ?>learning-center-viewmore/'+res[i].id+'">';
									html += '<li>';
									html += '<div>';
									html += '<h4>'+res[i].artical_title+'</h4>';
									html += '<p>'+res[i].short_description+'</p>';
									html += '</div>';
									html += '</li>';
									html += '</a>';
								}

								html += '</ul>';
								$('#search-result').show();
								$('#search-result').html(html);
							}else{

								$('#search-result').html('');
								$('#search-result').hide();
							}
							console.log(res);
						}
					});
				} else {
					$('#search-result').html('');
					$('#search-result').hide();
				}
			});
		});*/

		function clearText(){
			$('#search-box').val('');
			$('.close-icon').hide();
		}

		function search_article(keyword){
			//alert(keyword);
			if(keyword != ''){
				$('.close-icon').show();
					$.ajax({
						url: '<?php echo base_url(); ?>search_artical',
						method: 'POST',
						data: {'keyword': keyword},
						success:function(res){
							if(res.length >0){

								var html = '';

								html += '<ul>';

								for(var i= 0; i<res.length; i++){

									html += '<li>';
									html += '<a href="<?php echo base_url(); ?>learning-center-viewmore/'+res[i].id+'">';
									//html += '<div>';
									html += '<h4>'+res[i].artical_title+'</h4>';
									html += '<p>'+res[i].short_description+'</p>';
									//html += '</div>';
									html += '</a>';
									html += '</li>';
									
								}

								html += '</ul>';
								$('#search-result').show();
								$('#search-result').html(html);
							}else{

								$('#search-result').html('');
								$('#search-result').hide();
							}
							console.log(res);
						}
					});
				} else {
					$('#search-result').html('');
					$('#search-result').hide();
				}
		}
	</script>
		
		<div class="home-banner terms-header overflow-none">
			<div class="container">
				<img class="img-responsive" src="assests/images/learning-img.png" alt="" />
				<h1>Learning Center</h1>
				<p>Get answers to all of your questions about Chapter 7 bankruptcy.</p>	
				<div class="clearfix"></div>
				<div class="search-part">
					<input id="search-box"  placeholder="Search here..." type="text" onkeyup="search_article(this.value)">
					<!--<input name="" value="Search" type="button"> -->
					<div class="close-icon"><a onclick="clearText()" href="javascript:void(0)"><img src="<?php echo base_url(); ?>assests/images/close-icon.png"/></a> </div>
					<div id="search-result" style="display: none;">					
				</div>
				
				
					
				</div>
			</div>  
        </div>
     
		<div class="clearfix"></div>
	<!-- Home banner end-->
	
	<div class="body-wrap">
		<div class="learning-catagory">			
			<div class="container">
			<?php foreach($artical as $ar){ ?>
				<?php 
						$catagory = $this->CI->getCatagoryName($ar['catagory']);
				?>
				<?php foreach ($catagory as $key => $value) {
				?>
				<a href="<?php echo base_url(); ?>learning-center?cataId=<?php echo $value['id']; ?>"><?php echo $value['cata_name']; ?></a> 
				<?php } ?>
				
				<?php } ?>
			</div>
			
		</div>
		<div class="clearfix"></div>
			<div class="list-wrap">
				<div class="container">

					<?php foreach($artical as $ar){ ?>
					<div class="box-list">

						<?php 
						$catagory = $this->CI->getCatagoryName($ar['catagory']);
						 ?>
						<ul>
							<?php foreach ($catagory as $key => $value) {
							 ?>
							<li><a href="<?php echo base_url(); ?>learning-center?cataId=<?php echo $value['id']; ?>"><?php echo $value['cata_name']; ?></a></li>
							<?php } ?>
						</ul>
						<div class="clearfix"></div>
						<h2><?php echo $ar['artical_title'] ?></h2>
						<p><?php echo word_limiter( $ar['short_description'],20	); ?></p>
						<a class="readmore" href="<?php echo base_url().'learning-center-viewmore/'.$ar['id']; ?>">Read More <i class="fa fa-long-arrow-right"></i></a>
					</div>
					<?php } ?>
					
					
				</div>
			</div>
		
		<div class="clearfix"></div>		
	</div>	
		
	
	<div class="clearfix"></div>
	
	

