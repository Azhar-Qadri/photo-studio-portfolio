<?php 

include('include/header.php'); 
$ob = new controller();
$res=$ob->career_view();
$check2=mysqli_num_rows($res);

?>

      <!-- body Start -->

<section class="innerpage-titlev3">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="ipt-text">
<h3>Career Opportunity</h3>
</div>
</div>
</div>
</div>
</section>
<br><br>
<?php if($check2>0){ ?>
<h1 class="text-center" style="color: white">Jobs Listing</h1>
<br>
<div class="col-md-10">
<table class="table table-hover table-bordered" style="overflow-y:scroll; margin-left: 117px" >
  <thead>
    <tr>
      <th scope="col">Sr.No</th>
      <th scope="col">Job Title</th>
      <th scope="col">Description</th>
      <th scope="col">Experience</th>
      <th scope="col">Location</th>
      <th scope="col">Date</th>
      <th scope="col">Apply</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $i=1;
    while($row=mysqli_fetch_array($res)){ ?>
    <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row['job_name']; ?></td>
    <td><?php echo $row['description']; ?></td>
    <td><?php echo $row['experience']; ?></td>
    <td><?php echo $row['location']; ?></td>
    <td><?php echo $row['added_on']; ?></td>
    <td><a class="btn btn-success btn-lg" href="applied.php?career_id=<?php echo $row['career_id']; ?>" style="color: white">Click here to Apply</a></td>
    </tr>
    <?php $i++; } ?>
  </tbody>
</table>
</div>
<?php }else{
  ?>  
  <br>
  <h1 class="text-center" style="color: #D11313"> Vacancy is not Available!</h1>
  <a href="index.php"> <h2 class="text-center" style="color: #76C2C2"><i class="fa fa-arrow-left"></i> Click here to Return</h2></a>
  <br>
  <?php  
 } ?>
<br><br>

      <!-- body ends -->



      <!-- footer Start -->
     <?php include('include/footer.php'); ?>
     <!-- footer Ends -->
    
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

   </body>
   <!-- Mirrored from demo.voidcoders.com/htmldemo/potoliaV2/main-files/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 09:38:37 GMT -->
</html>