<?php 
include('include/header.php'); 
$ob = new controller();
$run_gallery=$ob->gallery_view();
$cat=$ob->view_categories();
$feed=$ob->feedback_view();
$feed_img=$ob->feedback_view();
?>
      <section class="hero-area hero_V2">
         <div class="hero2-ripples">
            <div class="hero2-carousel owl-carousel owl-theme">
            	<!-- Slider Start -->
               <div class="item">
                  <div class="single-hero-carousel">
                     <div class="container">
                        <div class="hero-content">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="hero-text">
                                    <h2 class="wow fadeIn" data-wow-delay=".25s">photography is our passion, it’s always great!</h2>
                                    <div class="hero-btn">
                                       <a href="contact.php" class="btn-style-1 wow fadeIn" data-wow-delay=".75s">Contact Us</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Slider Ends  -->
            </div>
            <div class="hero-social">
               <ul>
                  <li class="wow fadeInUp" data-wow-delay=".75s"><a href="https://www.facebook.com/wiwebmasters" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a></li>
                  <li class="wow fadeInUp" data-wow-delay="1.15s"><a href="https://www.instagram.com/wiwebmasters/" aria-hidden="true" target="_blank"><i class="fa fa-instagram"></i><span>Instagram</span></a></li>
               </ul>
            </div>
         </div>
      </section>
      <!-- header Ends -->
      <!-- body Start -->
      <section class="service2-area">
         <div class="container">
            <div class="row">
               <div class="col-md-12 wow fadeIn" data-wow-delay=".99s">
                  <div class="service2-carousel owl-carousel owl-theme">
                    <?php while($cat_res=mysqli_fetch_array($cat)){ ?>
                     <div class="item">
                        <div class="single-service sspV2">
                              <a href="detial.php?c_id=<?php echo $cat_res['c_id']; ?>"><img style="height: 400px; width: 350px" src="admin/media/categories/<?php echo $cat_res['image']; ?>" alt="thumbnail" /></a>
                              

                           <div class="ss-text">
                           <h4><a href="detial.php?c_id=<?php echo $cat_res['c_id']; ?>"><?php echo $cat_res['c_name']; ?></a></h4>
                              
                              </p>
                              <a href="detial.php?c_id=<?php echo $cat_res['c_id']; ?>">View More</a>
                           </div>
                        </div>
                     </div>
                     <?php } ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      

      <section class="portfolio-area bgDark">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="section-titleV1">
<p class="wow fadeInUp" data-wow-delay=".15s">Our Recent Works</p>
<h3 class="wow fadeInUp" data-wow-delay=".25s">Our Portfolio</h3>
<p class="wow fadeInUp" data-wow-delay=".15s" style="color: #979A9A">
   “Photography is a way of feeling, of touching, of loving. What you have caught on film is captured forever… It remembers little things, long after you have forgotten everything.”
</p>
</div>
</div>
</div>
<div class="shuffle-wrapper">
<div class="row">
<div class="col">
<div class="btn-group btn-group-toggle shuffle-filter-btn wow fadeInUp" data-wow-delay=".35s" data-toggle="buttons">

</div>
</div>
</div>
<div class="row shuffle-box sbox_V1">
    <?php while($gallery=mysqli_fetch_array($run_gallery)){ ?>
<figure class="single-shuffle col-3"  style="padding-right:0px" data-groups='["design"]'>
<div class="aspect">
<div class="aspect__inner ssf-content wow zoomIn" data-wow-delay=".35s">
<img src="admin/<?php echo $gallery['file']; ?>" alt="" />
<div class="ssf-hover">
<a class="fancyGallery" data-fancybox="group-4" href="admin/<?php echo $gallery['file']; ?>">
<i class="fa fa-search-plus" aria-hidden="true"></i>
</a>
</div>
</div>
</div>
</figure>
<?php
}
?>
<!-- <div class="col-1 my-sizer-element"></div> -->
</div>
</div>
</div>
</section>

      <section id="about" class="about-area about-1 bgDark section-padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="about-img a3-img">
                     <img src="assets/img/section-img/about-2-1.jpg" alt="" class="a3img-1 wow fadeInLeft" data-wow-delay=".75s">
                     <img src="assets/img/section-img/about-2-2.jpg" alt="" class="a3img-2 wow fadeInLeft" data-wow-delay=".25s">
                     <img src="assets/img/section-img/about-2-2.jpg" alt="" class="a3img-3 wow fadeInLeft" data-wow-delay=".25s">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="about-text">
                     <div class="section-text">
                        <div class="section-titleV1">
                           <p class="wow fadeInUp" data-wow-delay=".15s">About us</p>
                           <h3 class="wow fadeInUp" data-wow-delay=".25s">Photography Is Great</h3>
                        </div>
                        <p class="wow fadeInUp" data-wow-delay=".35s">Photography is like a moment, an instant. You need a half-second to get the
                           photo. So it's good to capture people when they are themselves.I became
                           passionate about design filmmaking when I graduated from UCLA.
                        </p>
                        <ul>
                           <li class="wow fadeInUp" data-wow-delay=".45s">You're shooting, like, one frame every twenty minutes, so that's</li>
                           <li class="wow fadeInUp" data-wow-delay=".55s">Seconds of a film per day. Photography is a pursuit that allows</li>
                           <li class="wow fadeInUp" data-wow-delay=".65s">Hands-on with what you show people of either yourself or the</li>
                        </ul>
                        <p class="wow fadeInUp" data-wow-delay=".75s">You do have a modicum of creative freedom as an actor, but you're still very
                           much a cipher for other people's art. Photography gives you the opportunity
                           to use your sensibility and everything you are to say something.
                        </p>
                        <a href="contact.php" class="btn-style-1 wow fadeInUp" data-wow-delay=".85s">Contact Us</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="testimonial-area section-padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="section-titleV1">
               <p class="wow fadeInUp" data-wow-delay=".15s">Testimonials</p>
               <h3 class="wow fadeInUp" data-wow-delay=".25s">clients feedbacks</h3>
            </div>
         </div>
      </div>
       <div class="row">
         <div class="col-md-12">
            <div class="testimonial-wrapper">
            <div id="sync1" class="testimonial-carouselV1 owl-carousel owl-theme wow fadeInUp" data-wow-delay=".45s">
            <?php while($feedback=mysqli_fetch_array($feed)){ ?>
                  <div class="item">
                     <div class="chrisSingle-testimonial">
                        <div class="tc-text">
                           <p> <?php echo $feedback['review']; ?> </p>
                        </div>
                        <div class="tc-name">
                           <h4><?php echo $feedback['name']; ?></h4>
                        </div>
                     </div>
                  </div>
            <?php } ?>

               </div>

               <div id="sync2" class="tc-avatar-carousel owl-carousel owl-theme wow fadeInUp" data-wow-delay=".65s">
            <?php while($feedback_img=mysqli_fetch_array($feed_img)){ ?>
                  <div class="item">
                     <div id="chti-1" class="tc-avatar">
                        <img src="admin/media/feedback/<?php echo $feedback_img['image']; ?>" alt="">
                     </div>
                     </div>
                  <?php } ?>
                  </div>
              </div>
         </div>
      </div>

   </div>
</section>
      <!-- Testimonials ends -->
   
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

<script src="assets/js/wow.js"></script>

<script src="assets/js/theme.js"></script>
   </body>
   <!-- Mirrored from demo.voidcoders.com/htmldemo/potoliaV2/main-files/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 09:38:37 GMT -->
</html>