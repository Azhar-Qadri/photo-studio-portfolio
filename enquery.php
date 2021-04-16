<?php 
include('include/header.php'); 
$ob = new controller();
$ob->enquery_insert();
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




form.cf input {
    height: 40px;
    padding: 0px 15px;
}
form.cf input, form.cf select {
    font-size: 14px;
    letter-spacing: 0px;
    background-color: #101015;
    border-color: #9E9E9E;
    margin-bottom: 20px;
    height: 40px;
    padding: 0px 15px;
}
</style>

<section class="innerpage-titlev3">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="ipt-text">
<h3>Enquery</h3>
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
<h4>Apply Enquery!</h4>
<form class="cf" method="post" id="frm">
<div class="row">


<div class="col-md-6">
<div class="form-group">
<label>Categories*</label>

<select  class="form-control" name="c_id" id="c_id" required>
<?php 
echo $c_id;
?>
<option  value="">Select Categories</option>
<?php 
$con=mysqli_connect('localhost','root','','office_photography');
$sql=mysqli_query($con,"SELECT * FROM categories order by c_name");
while($row=mysqli_fetch_array($sql))
{
	echo "<option value=".$row['c_id'].">".$row['c_name']."</option>";
}
?>
</select>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
<label>Your Name*</label>
<input type="text" id="firstName" name="name" class="form-control" placeholder="Your Name Here">
</div>
</div>

<div class="col-md-4">
<div class="form-group">
<label>Email Address*</label>
<input type="email" id="email" name="email" class="form-control" placeholder="Email Address Here">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Telephone Number*</label>
 <input type="text" id="phone" name="mobile" class="form-control" placeholder="Phone Number">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>City*</label>
 <input type="text" id="city" name="city" class="form-control" placeholder="Enter City">
</div>
</div>

<div class="col-md-12">
<div class="form-group">
<label>Your Message*</label>
<textarea class="form-control" id="msg" name="msg" placeholder="Write Your Message"></textarea>
</div>
<button type="submit" id="submit" name="submit" class="cf-btn">Send Now</button>
<div class="cf-msg" style="display: none;"></d iv>
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
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.2.0.min.js"></script>
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
					c_id:
					{
						required:true,
					},
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
					city:
					{
						required:true,
						lettersonly:true,

					},
					msg:
					{
						required:true,
					},



				},

				messages:
				{
					c_id:
					{
						required:"*Please Select Category",
					},
					name:
					{
						required:"*Please Enter Your Name",
						lettersonly:"Only Letters Allowed",

					},
					email:
					{
						required:"*Please enter Your Email",
						email:"*Please Enter Valid Email Address",
					},

					mobile:
					{
						required:"*Please enter Your Mobile",
						number:"*Please Enter Only Digits",
						minlength:"*Please Enter 10 Digits Mobile No",
						maxlength:"*Please Enter Valid Mobile",
					},
					city:
					{
						required:"*Please Enter Your City",
						lettersonly:"Only Letters Allowed",
						
					},
					msg:
					{
						required:"*Write Message",
					},


				},



			});
		});
	</script>
<?php 
if(isset($_SESSION['STATUS']) && $_SESSION['STATUS'] !='') { ?>

<script type="text/javascript">
  
  swal({
    title: "Your Enquery is Sent Successfully!",
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