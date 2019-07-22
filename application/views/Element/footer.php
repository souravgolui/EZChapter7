<footer>
		<div class="container">
			<div class="contentlist">
				<div class="list">
				<h5>Organization</h5>
				<ul class="footlist">
					<li><a href="<?php echo base_url(); ?>supporters">Supporters</a></li>
					<!-- <li><a href="<?php echo base_url(); ?>press">Press</a></li> -->
					<li><a href="<?php echo base_url(); ?>fresh">Fresh Starts</a></li>
					<li><a href="#">Legal Definitions</a></li>
					
				</ul>
			</div>			
			<div class="list">
				<h5>Need help?</h5>
				<ul class="footlist">
					<li><a href="#">Support Articles</a></li>
					<li><a href="<?php echo base_url(); ?>learning-center">Learning Center</a></li>
					<li><a href="<?php echo base_url(); ?>team">Team</a></li>
				</ul>
			</div>
			<div class="list">
				<h5>About</h5>
				<ul class="footlist">
					<li><a href="<?php echo base_url(); ?>process">Our Process</a></li>
					<li><a href="<?php echo base_url(); ?>term">Service Terms </a></li>
					<li><a href="<?php echo base_url(); ?>career">Career</a></li>
				</ul>
			</div>
			<div class="list">
				<h5>Get In Touch</h5>
				<ul class="footlist">
					<li><a href="mailto:support@ezchapter7.com">Email:  support@ezchapter7.com</a></li>					
				</ul>
				<ul class="social">
					<li><a href="https://www.facebook.com/Ezchapter7com-1491254217672006/"><i class="fa fa-facebook"></i></a></li>
					<!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
					<li><a href="https://www.tumblr.com/search/ez%20chapter%207"><i class="fa fa-tumblr"></i></a></li>
					<!-- <li><a href=""><i class="fa fa-linkedin"></i></a></li> -->
					<li><a href="https://www.instagram.com/ezchapter7.com1/"><i class="fa fa-instagram"></i></a></li>
				</ul>
			</div>
			<!-- <div class="list">
				<h5>Payment Gateway</h5>
				<img src="<?php echo base_url(); ?>assests/images/footer-payimg.png" alt="" />
			</div> -->

			</div>								
		</div>	
		<div class="clearfix"></div>		
		<div class="footer-bottom">Copyright &copy; 2019 EZChapter7.com | All Rights Reserved </div>
	</footer>
	
<!-- jQuery (JavaScript plugins) -->
<script src="<?php echo base_url(); ?>assests/js/bootstrap.min.js"></script>
<!-- main js-->
<script src="<?php echo base_url(); ?>assests/js/main.js"></script>

<!-- scrollBar js-->

<script>
    $(function(){
        $(".scrollBox").scrollBar();

        $("#btn1").click(function(){
            $("#box1 .contentBox1").height($("#box1 .contentBox1").height()+300);
        });
        $("#btn2").click(function(){
            $("#box1 .contentBox1").height(900);
        });
    })
</script>


<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script> 

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script> -->




</body>
</html>
