<?php 
include('include/header.php'); 
$ob = new controller();
$ob->applied_insert();
?>


<!-- body Start -->
<style>
		body label.error
		{
			color:red;
		}
		body input.error
		{
			color: red;

			border-color: red;
		}
		body textarea.error
		{
			color: red;
			border-color: red;
		}
		body textarea.valid
		{
			color: green;
			border-color: green;
		}
		body input.valid
		{
			color:green;
			border-color: green;

		}
</style>


	
<section class="innerpage-titlev3">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="ipt-text">
<h3>Apply for Job</h3>
</div>
</div>
</div>
</div>
</section>


<section class="contact-page-wrapper section-padding">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="cp-wrapper">
<h4>Job Application Form!</h4>
<form class="cf" method="post" id="frm" enctype="multipart/form-data">
<div class="row">
<div class="col-md-6">
<div class="form-group" >
<label>Your Name*</label>
<input type="text" id="firstName" name="name" class="form-control" placeholder="Your Name Here">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Email Address*</label>
<input type="email" id="email" name="email" class="form-control" placeholder="Email Address Here">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Telephone Number*</label>
 <input type="text" id="phone" name="mobile" class="form-control" placeholder="Phone Number">
</div>
</div>

<div class="col-md-6">
<div class="form-group">
 <label>Upload your Resume*</label>
 <input type="file" name="image" class="form-control" required>
 

</div>
</div>
<button type="submit" id="submit" name="submit" class="cf-btn">Send Now</button>
<div class="cf-msg" style="display: none;"></div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>

      <!-- body ends -->



      <!-- footer Start -->
     <?php include('include/footer.php'); ?>
     <!-- footer Ends -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/jquery-3.2.0.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/countdown.js"></script>
<script src="assets/js/jquery.scrollUp.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/shuffle.min.js"></script>
<script src="assets/js/jquery.fancybox.min.js"></script>
<script src="assets/js/jquery.ripples.min.js"></script>

<script src="assets/js/jquery.slicknav.min.js"></script>

<script src="assets/js/vmm.menu.js"></script>

<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.js"></script>
<script src="assets/js/masonry.pkgd.js"></script>
<script src="assets/js/theme.js"></script>
<script src="assets/js/jq.js"></script>
<script src="assets/js/jqv.js"></script>
	<script>
		
		$(document).ready(function(){
			jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-z]+$/i.test(value);
}, "Letters only please"); 
			$("#frm").validate({ 
				rules:
				{
					name:
					{
						required:true,
						lettersonly:true,
					},
					email:
					{
						required:true,
						email:true,
					},
					mobile:
					{
						required:true,
						number:true,
						minlength:10,
						maxlength:10,
					},
					image:
					{
						required:true,
					},



				},

				messages:
				{
					name:
					{
						required:"Please Enter Your Name",
						lettersonly:"Only Letters Allowed",

					},
					email:
					{
						required:"Please Enter Your Email",
						email:"Please Enter Valid Email Address",
					},

					mobile:
					{
						required:"Please enter Your Mobile",
						number:"Please Enter Only Digits",
						minlength:"Please Enter 10 Digits Mobile No",
						maxlength:"Please Enter Valid Mobile",
					},
					image:
					{
						required:"Upload Your CV",
					},


				},



			});
		});
	</script>
<?php 
if(isset($_SESSION['STATUS']) && $_SESSION['STATUS'] !='') { ?>

<script type="text/javascript">
  
  swal({
    title: "Your Job Applicatipn is Sent Successfully!",
    icon:  "success",
    button: "Okay!"
}).then(function() {
    window.location = "index.php";
});
</script> 
<!-- <p><?php echo $_SESSION['STATUS']; ?></p> -->
<?php 
unset($_SESSION['STATUS']);
}
 ?>

   </body>
   <!-- Mirrored from demo.voidcoders.com/htmldemo/potoliaV2/main-files/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 09:38:37 GMT -->
</html>