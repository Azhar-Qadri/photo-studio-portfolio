<?php 
include('include/header.php'); 
$ob = new controller();
$run_gallery=$ob->gallery_view();

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


<div class="gallery5-area">
<div class="container-fluid">
<div class="g5grid">
<?php while($row=mysqli_fetch_array($run_gallery)){ ?>
<div class="g5grid-item">
<div class="g5g-img">
<a data-fancybox="group-4" class="fancyGallery" href="admin/<?php echo $row['file']; ?>">
<img src="admin/<?php echo $row['file']; ?>" alt="">
</a>
</div>
</div>
<?php } ?>

<!-- <div class="g5grid-item g5grid-item--width2">
<div class="g5g-img">
<a data-fancybox="group-4" class="fancyGallery" href="assets/img/gallery/gallery5-2.jpg">
<img src="assets/img/gallery/gallery5-2.jpg" alt="">
</a>
</div>
</div>
 -->

<!-- <div class="g5grid-item">
<div class="g5g-img">
<a data-fancybox="group-4" class="fancyGallery" href="assets/img/gallery/gallery5-3.jpg">
<img src="assets/img/gallery/gallery5-3.jpg" alt="">
</a>
</div>
</div>
 -->

<!-- <div class="g5grid-item">
<div class="g5g-img">
<a data-fancybox="group-4" class="fancyGallery" href="assets/img/gallery/gallery5-4.jpg">
<img src="assets/img/gallery/gallery5-4.jpg" alt="">
</a>
</div>
</div>
 -->

<!-- <div class="g5grid-item">
<div class="g5g-img">
<a data-fancybox="group-4" class="fancyGallery" href="assets/img/gallery/gallery5-5.jpg">
<img src="assets/img/gallery/gallery5-5.jpg" alt="">
</a>
</div>
</div>
 -->

<!-- <div class="g5grid-item">
<div class="g5g-img">
<a data-fancybox="group-4" class="fancyGallery" href="assets/img/gallery/gallery5-6.jpg">
<img src="assets/img/gallery/gallery5-6.jpg" alt="">
</a>
</div>
</div>
 -->

<!-- <div class="g5grid-item">
<div class="g5g-img">
<a data-fancybox="group-4" class="fancyGallery" href="assets/img/gallery/gallery5-7.jpg">
<img src="assets/img/gallery/gallery5-7.jpg" alt="">
</a>
</div>
</div>
 -->

<!-- <div class="g5grid-item">
<div class="g5g-img">
<a data-fancybox="group-4" class="fancyGallery" href="assets/img/gallery/gallery5-8.jpg">
<img src="assets/img/gallery/gallery5-8.jpg" alt="">
</a>
</div>
</div>
 -->

<!-- <div class="g5grid-item">
<div class="g5g-img">
<a data-fancybox="group-4" class="fancyGallery" href="assets/img/gallery/gallery5-9.jpg">
<img src="assets/img/gallery/gallery5-9.jpg" alt="">
</a>
</div>
</div>
 -->

<!-- <div class="g5grid-item g5grid-item--width2 g5grid-item--height2">
<div class="g5g-img">
<a data-fancybox="group-4" class="fancyGallery" href="assets/img/gallery/gallery5-10.jpg">
<img src="assets/img/gallery/gallery5-10.jpg" alt="">
</a>
</div>
</div>
 -->

<!-- <div class="g5grid-item">
<div class="g5g-img">
<a data-fancybox="group-4" class="fancyGallery" href="assets/img/gallery/gallery5-11.jpg">
<img src="assets/img/gallery/gallery5-11.jpg" alt="">
</a>
</div>
</div>
 -->
<!-- <div class="g5grid-item g5grid-item--width2">
<div class="g5g-img">
<a data-fancybox="group-4" class="fancyGallery" href="assets/img/gallery/gallery5-12.jpg">
<img src="assets/img/gallery/gallery5-12.jpg" alt="">
</a>
</div>
</div>
 -->
<!-- <div class="g5grid-item g5grid-item--width2 g5grid-item--height2">
<div class="g5g-img">
<a data-fancybox="group-4" class="fancyGallery" href="assets/img/gallery/gallery5-13.jpg">
<img src="assets/img/gallery/gallery5-13.jpg" alt="">
</a>
</div>
</div>

<div class="g5grid-item g5grid-item--width2">
<div class="g5g-img">
<a data-fancybox="group-4" class="fancyGallery" href="assets/img/gallery/gallery5-14.jpg">
<img src="assets/img/gallery/gallery5-14.jpg" alt="">
</a>
</div>
</div>

<div class="g5grid-item">
<div class="g5g-img">
<a data-fancybox="group-4" class="fancyGallery" href="assets/img/gallery/gallery5-15.jpg">
<img src="assets/img/gallery/gallery5-15.jpg" alt="">
</a>
</div>
</div>

<div class="g5grid-item">
<div class="g5g-img">
<a data-fancybox="group-4" class="fancyGallery" href="assets/img/gallery/gallery5-16.jpg">
<img src="assets/img/gallery/gallery5-16.jpg" alt="">
</a>
</div>
</div>

<div class="g5grid-item">
<div class="g5g-img">
<a data-fancybox="group-4" class="fancyGallery" href="assets/img/gallery/gallery5-17.jpg">
<img src="assets/img/gallery/gallery5-17.jpg" alt="">
</a>
</div>
</div>

<div class="g5grid-item">
<div class="g5g-img">
<a data-fancybox="group-4" class="fancyGallery" href="assets/img/gallery/gallery5-18.jpg">
<img src="assets/img/gallery/gallery5-18.jpg" alt="">
</a>
</div>
</div>

<div class="g5grid-item">
<div class="g5g-img">
<a data-fancybox="group-4" class="fancyGallery" href="assets/img/gallery/gallery5-19.jpg">
<img src="assets/img/gallery/gallery5-19.jpg" alt="">
</a>
</div>
</div>

<div class="g5grid-item">
<div class="g5g-img">
<a data-fancybox="group-4" class="fancyGallery" href="assets/img/gallery/gallery5-20.jpg">
<img src="assets/img/gallery/gallery5-20.jpg" alt="">
</a>
</div>
</div>

<div class="g5grid-item">
<div class="g5g-img">
<a data-fancybox="group-4" class="fancyGallery" href="assets/img/gallery/gallery5-21.jpg">
<img src="assets/img/gallery/gallery5-21.jpg" alt="">
</a>
</div>
</div>

<div class="g5grid-item g5grid-item--width2 g5grid-item--height2">
<div class="g5g-img">
<a data-fancybox="group-4" class="fancyGallery" href="assets/img/gallery/gallery5-22.jpg">
<img src="assets/img/gallery/gallery5-22.jpg" alt="">
</a>
</div>
</div>

<div class="g5grid-item">
<div class="g5g-img">
<a data-fancybox="group-4" class="fancyGallery" href="assets/img/gallery/gallery5-23.jpg">
<img src="assets/img/gallery/gallery5-23.jpg" alt="">
</a>
</div>
</div>
<div class="g5grid-item g5grid-item--width2">

<div class="g5g-img">
<a data-fancybox="group-4" class="fancyGallery" href="assets/img/gallery/gallery5-24.jpg">
<img src="assets/img/gallery/gallery5-24.jpg" alt="">
</a>
</div>
</div>
 -->
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
<script>
        // external js: masonry.pkgd.js

        $('.g5grid').masonry({
        itemSelector: '.g5grid-item',
        columnWidth: 240
        });
    </script>
   </body>
   <!-- Mirrored from demo.voidcoders.com/htmldemo/potoliaV2/main-files/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 09:38:37 GMT -->
</html>