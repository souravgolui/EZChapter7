	<div class="body-wrap">
			<div class="terms-wrap">
				<div class="container">
					<div class="breadcrumb"><p>Learning Center  /  Bankruptcy Basic</p></div>
					<div class="row">
						<div class="col-md-8 view-detal">
							<h1><?php echo $ar[0]['artical_title'] ?></h1>
							<ul>
								<?php 
								$catagory = $this->CI->getCatagoryName($ar[0]['catagory']);
								foreach ($catagory as $key => $value) {
								?>
								<li><a href="<?php echo base_url(); ?>learning-center?cataId=<?php echo $value['id']; ?>"><?php echo $value['cata_name']; ?></a></li>
							<?php } ?>
							</ul>
							<div class="clearfix"></div>
							<div class="author-wrap">
								<div class="author-img"><img class="img-responsive" src="<?php echo base_url(); ?>assests/images/auther-img.jpg" alt="author" /></div>
								<div class="author-cont">
									<p>Jonathan Petts - Executive Director</p>
									<dt>January 25, 2019</dt>
								</div>								
							</div>
							<a class="looking-text" href="#">Looking for chapter 7 bankruptcy assistance?</a>
						</div>
						<div class="col-md-4 aboutrt">
							<h3>About  EZChapter7</h3>
							<p>EZChapter7 is a important team that has carried out thousands of bankruptcy cases. Our work informs our free self-service tool and the 
information we give to you!</p>
							<h3>What We Offer</h3>
							<p>Want free chapter 7 bankruptcy help? Take our bankruptcy screener to see if you are a fit for  EZChapter7 chapter 7 bankruptcy self-service tool.</p>
						</div>
					</div>					
				</div>
				<div class="container">
				  <div class="table-content">
						<?php echo $ar[0]['first_artical'] ?>
						<div class="clearfix"></div>						
					</div>
				</div>
				
			</div>

			<div class="moredetails">
				<div class="container">	
						<div id="text-txt">	
						<?php echo $ar[0]['secound_artical'] ?>	
						</div>
						<div class="btn-container">
						  <button class="read-morebt" id="toggle">Read More +</button>
						</div>
				</div>
			</div>
		
		<div class="clearfix"></div>		
	</div>	
		
	
	<div class="clearfix"></div>
	
	<!-- <script type="text/javascript">
		function readmore(){
			$('#viewmore').show();

			$('.btn-container').hide();
		}
		
	</script> -->
<!-- more and less js-->
<script>
	$(document).ready(function() {
  $("#toggle").click(function() {
    var elem = $("#toggle").text();
    if (elem == "Read More +") {
      //Stuff to do when btn is in the read more state
      $("#toggle").text("Read Less -");
      $("#text-txt").slideDown();
    } else {
      //Stuff to do when btn is in the read less state
      $("#toggle").text("Read More +");
      $("#text-txt").slideUp();
    }
  });
});
</script>
<!-- scrollBar js-->