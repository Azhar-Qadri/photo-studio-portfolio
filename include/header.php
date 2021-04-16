<?php
include('include/controller.php');
$ob = new controller();
$run_cat=$ob->view_categories();
$ob->search();

?>
<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from demo.voidcoders.com/htmldemo/potoliaV2/main-files/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 09:37:38 GMT -->
   <head>
      <meta charset="utf-8">
      <title>Potolia - Multipurpose Photography HTML Template</title>
      <meta name="description" content="">
      <meta name="author" content="">
      <meta name="keywords" content="">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Adamina" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700&amp;display=swap" rel="stylesheet">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/jquery-ui.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/flaticon/flaticon.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
      <link rel="stylesheet" href="assets/css/slicknav.min.css">
      <link rel="stylesheet" href="assets/css/nav-menu.css">
      <link rel="stylesheet" href="assets/css/vmm.menu.css">
      <link rel="stylesheet" href="assets/css/animate.css">
      <link rel="stylesheet" href="assets/css/ripple.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="shortcut icon" type="image/png" href="assets/img/favicon.ico">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dark-bg">
      <div id="preloader"></div>
      <header class="header-area fotolia-header header_2 ">
         <div class="voidmega-header">
            <div class="container">
               <div class="row">
                  <div class="col-12 col-xl-10">
                     <div class="vmm-header header-transparent-on vmm-mega-menu mega-menu-fullwidth">
                        <div class="container">
                           <div class="vmm-header-container">
                              <div class="logo" data-mobile-logo="assets/img/logo-1.png" data-sticky-logo="assets/img/logo-2.png">
                                 <a href="index.php"><img src="assets/img/logo-1.png" alt="logo" /></a>
                              </div>
                              <div class="burger-menu">
                                 <div class="line-menu line-half first-line"></div>
                                 <div class="line-menu"></div>
                                 <div class="line-menu line-half last-line"></div>
                              </div>
                              <nav class="vmm-menu menu-caret submenu-scale">
                                 <ul>
                                    <li class="mega-menu">
                                       <a href="index.php">Home</a>
                                    </li>
                                    <li class="mega-menu">
                                       <a href="about.php">About</a>
                                    </li>
                                    <li class="mega-menu">
                                       <a href="#">PORTFOLIO</a>
                                       <ul>
                                          <li>
                                             <div class="mega-menu-container">
                                                <div class="row">
                                                   <!-- starts -->
                                                   <?php while($display=mysqli_fetch_array($run_cat)){ ?>
                                                      <div class="col-lg-4">
                                                      <div class="mega-menu-box">
                                                         <div class="mega-menu-media">
                                                            <div class="mega-menu-media-img">
                                                               <div class="mega-menu-thumbnail">
                                                                  <a href="detial.php?c_id=<?php echo $display['c_id']; ?>">
                                                                  <img style="height: 150px; width: 150px" src="admin/media/categories/<?php echo $display['image']; ?>" alt="thumbnail" />
                                                                  </a>
                                                               </div>
                                                            </div>
                                                            <div class="mega-menu-media-info">
                                                               <h4 class="mega-menu-heading">
                                                                  <a href="detial.php?c_id=<?php echo $display['c_id']; ?>"><?php echo $display['c_name']; ?></a></h4>
                                                               <div class="mega-menu-desc">
                                                                  <?php echo $display['description']; ?>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                    <?php  } ?>

                                                  
                                                   <!-- ends  -->
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </li>
                                     <li class="mega-menu">
                                       <a href="gallery.php">Gallery</a>
                                    </li>
                                    <li class="mega-menu">
                                       <a href="enquery.php">Enquery for Shoot</a>
                                    </li>
                                    <li class="mega-menu">
                                       <a href="career.php">Career</a>
                                    </li>
                                    <li class="mega-menu">
                                       <a href="contact.php">Contact Us</a>
                                    </li>
                                    <li class="mega-menu">
                                       <a href="feedback_manage.php">Feedback</a>
                                    </li>
                                 </ul>
                              </nav>
                           </div>
                        </div>
                     </div>
                  </div>
                   <div class="d-none col-xl-2 d-xl-block">
                     <div class="search-menu-btn">
                        <!-- <div class="searchV1-btn">
                           <div class="soc-btn search-open">
                              <i class="fa fa-search"></i>
                           </div>
                           <div class="soc-btn search-close">
                              <i class="fa fa-close"></i>
                           </div>
                        </div> -->
                        <span class="menu2nd-btn">
                        <i class="fa fa-bars fa-2x"></i>
                        </span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <div >

      </div>
      <div class="secondMenu_V1">
         <nav class="fotoliaCircular-menu">
            <div class="circle">
               <a href="gallery.php"><i class="flaticon-001-camera"></i></a>
               <a href="gallery.php"><i class="flaticon-030-album"></i></a>
               <a href="#"><i class="flaticon-025-video-camera"></i></a>
               <a href="#"><i class="flaticon-017-len-2"></i></a>
               <a href="#"><i class="flaticon-004-spotlight"></i></a>
            </div>
            <span class="menu2nd-btn">
            <i class="fa fa-times fa-2x"></i>
            </span>
         </nav>
      </div>
      <!-- Header Ends -->
      