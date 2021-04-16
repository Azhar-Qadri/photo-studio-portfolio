<?php 
include('include/header.php'); 
$ob = new controller();
$portfolio=$ob->portfolio_view();
$check=mysqli_num_rows($portfolio);

?>
      <!-- body Start -->

<section class="innerpagetop-area">
<div class="pipa-bg">
<img src="assets/img/bg/innertop-bg-1.jpg" alt="">
</div>
<div class="pipa-text">
<h3>Photography is a very important
part of my life. It’s True!</h3>
</div>
</section>

<?php if($check>0){?>
<div class="gallery4-area">
<div class="container">
<div class="row">

<?php while($display=mysqli_fetch_array($portfolio)) {  ?>



<div class="col-md-3">
<div class="singleg4-gallery">
<a data-fancybox="group-4" class="fancyGallery" href="admin/<?php echo $display['file']; ?>">
<img style="height: 245PX" src="admin/<?php echo $display['file']; ?>" alt="">
</a>
</div>
</div>


<?php }?>

 <?php }else{
  ?>  
  <br>
  <h1  class="text-center" style="color: #D11313"> Data Not Available!</h1>
  <a href="index.php"> <h2 class="text-center" style="color: #76C2C2"><i class="fa fa-arrow-left"></i> Click here to Return</h2></a>

  <br>
  <?php  
 } ?>
</div>
</div>
</div>
      <!-- body ends -->
      <!-- footer Start -->
     <?php include('include/footer.php'); ?>
     <!-- footer Ends -->
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

   </body>
   <!-- Mirrored from demo.voidcoders.com/htmldemo/potoliaV2/main-files/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 09:38:37 GMT -->
</html>