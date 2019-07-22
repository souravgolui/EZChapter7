	<script type="text/javascript">
		
		function getFreshArticle(){
			var cata_id = $('#search-part').val();

			$.ajax({
				url: '<?php echo base_url(); ?>search_fresh_artical',
				method: 'POST',
				data: {'id': cata_id},
				success:function(res){
					$('.storybox-row').html(res);
				}
			});
		}

	</script>
	<div class="home-banner terms-header">
		<div class="map-part freshtop">
			<div class="container text-center">
				<ul>
					<li class="tooltip">
						<div class="map-rndimg"><img src="assests/images/round-img1.png" alt="" /></div>
						<span class="tooltiptext">Helped by the BEST...EZChapter7!! THANKS SO MUCH
							<div class="triangle-down"></div>
						</span>
					</li>
					<li class="tooltip">
						<div class="map-rndimg"><img src="assests/images/round-img2.png" alt="" /></div>
						<span class="tooltiptext">Helped by the BEST...EZChapter7!! THANKS SO MUCH
							<div class="triangle-down"></div>
						</span>
					</li>
					<li class="tooltip">
						<div class="map-rndimg"><img src="assests/images/round-img3.png" alt="" /></div>
						<span class="tooltiptext">Helped by the BEST...EZChapter7!! THANKS SO MUCH
							<div class="triangle-down"></div>
						</span>
					</li>
					<li class="tooltip">
						<div class="map-rndimg"><img src="assests/images/round-img4.png" alt="" /></div>
						<span class="tooltiptext">Helped by the BEST...EZChapter7!! THANKS SO MUCH
							<div class="triangle-down"></div>
						</span>
					</li>
										<li class="tooltip"><div class="map-rndimg"><img src="assests/images/round-img5.png" alt="" /></div><span class="tooltiptext">Helped by the BEST...EZChapter7!! 
					THANKS SO MUCH<div class="triangle-down"></div></span></li>
										<li class="tooltip"><div class="map-rndimg"><img src="assests/images/round-img6.png" alt="" /></div><span class="tooltiptext">Helped by the BEST...EZChapter7!! 
					THANKS SO MUCH<div class="triangle-down"></div></span></li>
										<li class="tooltip"><div class="map-rndimg"><img src="assests/images/round-img7.png" alt="" /></div><span class="tooltiptext">Helped by the BEST...EZChapter7!! 
					THANKS SO MUCH<div class="triangle-down"></div></span></li>
										<li class="tooltip"><div class="map-rndimg"><img src="assests/images/round-img8.png" alt="" /></div><span class="tooltiptext">Helped by the BEST...EZChapter7!! 
					THANKS SO MUCH<div class="triangle-down"></div></span></li>
										<li class="tooltip"><div class="map-rndimg"><img src="assests/images/round-img9.png" alt="" /></div><span class="tooltiptext">Helped by the BEST...EZChapter7!! 
					THANKS SO MUCH<div class="triangle-down"></div></span></li>
										<li class="tooltip"><div class="map-rndimg"><img src="assests/images/round-img10.png" alt="" /></div><span class="tooltiptext">Helped by the BEST...EZChapter7!! 
					THANKS SO MUCH<div class="triangle-down"></div></span></li>
										<li class="tooltip"><div class="map-rndimg"><img src="assests/images/round-img11.png" alt="" /></div><span class="tooltiptext">Helped by the BEST...EZChapter7!! 
					THANKS SO MUCH<div class="triangle-down"></div></span></li>
				</ul>													
			</div>
		</div>					
			<div class="freshtopcon">
				<div class="container">	
				<h1>Fresh Start Diaries</h1>
				<p class="padd-bot">Our time working with Americans across the country has shown us so why bankruptcy is so important. We want to share the stories<br />
				of our users so others can feel inspired and hopeful for a new future.</p>	
 					<div class="search-part">
						<select class="diaries-select" id="search-part" onchange="getFreshArticle()">
							<option value="0">All Stories</option>
							<?php foreach($catagory as $ar){ ?>
							
								<option value="<?php echo $ar['id']; ?>"><?php echo $ar['cata_name'] ?></option>
							
							<?php } ?>

						</select>
					</div>
				<div class="clearfix"></div>
				</div>
			</div>			
    </div>
     
	<div class="storywrap">
		<div class="container">
			<div class="storybox-row">

			<?php 
				foreach($fresh as $value){
			?>
				<div class="storybox-col">
					<div class="storybox">
						<h2><?php echo $value['artical_title']; ?></h2>
						<p><?php echo $value['short_description']; ?>
						<small>—<?php echo $value['created']; ?></small>
						</p>
						<a class="readmore" href="<?php echo base_url().'freshViewmore/'.$value['id']; ?>">Read More <i class="fa fa-long-arrow-right"></i></a>
					</div>
				</div>
			<?php } ?>
			
			</div>
		</div>
	</div>





	