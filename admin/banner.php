<?php 
include('include/db.php');

if(($_SESSION['ADMIN_LOGIN']!='yes')){

  header('location:login.php?id='.$_SESSION['ADMIN_LOGIN']);
  die();
}
   
   if(isset($_GET['type']) && $_GET['type']!=''){
   
    $type=$_GET['type'];
   
    if($type=='status'){
       $operation=$_GET['operation'];
       $id=$_GET['id'];
   
      if($operation=='active'){
          $status='1';
      }else{
          $status='0';
      }
      $update_status="UPDATE `banner` SET status='$status' WHERE id='$id'";
      mysqli_query($con,$update_status);
       header('location:banner.php');
      die();
    }

    if($type=='delete'){
      $id=$_GET['id'];
      $delete_sql="DELETE FROM `banner` WHERE id='$id'";
      mysqli_query($con,$delete_sql);
      header('location:banner.php');
      die();
    }
}

   
   $sql_client="SELECT * FROM `banner` order by id";
   $run_client=mysqli_query($con,$sql_client);

?>
<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">

<title>:: WebMaster - Admin Dashboard ::</title>
<link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- vendor css files -->
<link rel="stylesheet" href="assets/js/vendor/bootstrap/bootstrap.min.css">    
<link rel="stylesheet" href="assets/css/vendor/animsition.min.css">
<link rel="stylesheet" href="assets/js/vendor/morris/morris.css">    
<!-- project main css files -->
<link rel="stylesheet" href="assets/css/main.css">
</head>
<body id="falcon" class="main_Wrapper">
    <div id="wrap" class="animsition">
       <!-- HEADER START -->
        <?php include('include/header.php'); ?>
       <!-- HEADER ENDS -->
       <!-- SIDE BAR START -->
        <?php include('include/sidebar.php'); ?>
       <!-- SIDE BAR ENDS -->
       
        <!--  CONTENT  -->
        <section id="content">
            <div class="page page-tables-footable">
                <!-- bradcome -->
                <div class="b-b mb-10">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <h1 class="h3 m-0">Banner Table</h1>
                        </div>
                    </div>
                </div>

                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <section class="boxs ">
                           <div style="margin-left: 90%">
                                <h3 class="custom-font hb-cyan">
              <a class="btn btn-raised btn-primary" style="height: 30px;padding:5px" href="banner_manage.php">Add Banner</a></h3>
                            </div>
                                <table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
                                    <thead>
                                        <tr>
                                            <th>Sr.No</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            <th>Title</th>
                                            <th>Sub Title</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>
                                      <tbody>
                              <?php
                                 $i=1;
                                  while($row=mysqli_fetch_array($run_client)){ ?>
                              <tr>
                                 <td><?php echo $i; ?></td>
                                  <td>
                        <?php 
                        if($row['status']==1){
                            echo "<a class='btn btn-success' href='?type=status&operation=deactive&id=".$row['id']."'>Active</a>";
                         }else{
                            echo "<a class='btn btn-danger' href='?type=status&operation=active&id=".$row['id']."'>Deactive</a>";
                         }  
                         ?>
                        
                      </td>
                                 <td>
                                    <?php 
                                       echo "<a href='?type=delete&id=".$row['id']."'>Delete</a> | <a href='banner_manage.php?type=edit&id=".$row['id']."'>Edit</a>";
                                      ?>
                                 </td>
                                 <td><?php echo $row['name']; ?></td>
                                 <td><?php echo $row['sub_name']; ?></td>
                     <td><img width="100px" height="100px" src="media/banner/<?php echo $row['image'];?>"/></td>

                           
                              </tr>
                              <?php $i++; } ?>
                           </tbody>
                                    <tfoot class="hide-if-no-paging">
                                        <tr>
                                            <td colspan="5" class="text-right">
                                                <ul class="pagination">
                                                </ul>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <!--/ CONTENT -->

    </div>
    <!-- Vendor JavaScripts -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <script src="assets/bundles/vendorscripts.bundle.js"></script>

    <!--/ vendor javascripts -->
    <script src="assets/bundles/flotscripts.bundle.js"></script>    
    <script src="assets/bundles/d3cripts.bundle.js"></script>
    <script src="assets/bundles/sparkline.bundle.js"></script>
    <script src="assets/bundles/raphael.bundle.js"></script>
    <script src="assets/bundles/morris.bundle.js"></script>
    <script src="assets/bundles/loadercripts.bundle.js"></script>

    <!-- page Js -->
    <script src="assets/bundles/mainscripts.bundle.js"></script>
    <script src="assets/js/page/index.js"></script>   

<!--  Custom JavaScripts  -->
    <script src="assets/bundles/mainscripts.bundle.js"></script>    <!-- Custom Js -->


    <!--  Page Specific Scripts  -->
    <script >
        $(window).load(function () {
            $('.footable').footable();
        });
    </script>  
</body>

</html>