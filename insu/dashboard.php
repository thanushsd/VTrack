<!DOCTYPE html>
<html dir="ltr" lang="en">

<body>

<?php include 'policec/main.php';?>
<?php include '../sql/conn.php';?>
    
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <?php include 'main.php'; ?>


        <?php include 'policec/sidebar.php';?>
        <?php include 'policec/header.php';?>

        <?php
    $uid=$_SESSION["insu"];
    $sql=" SELECT * FROM user WHERE uid='$uid' ";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc())
    {
        $name=$row["name"];
        $comp=$row["comp"];
        $pic=$row["pic"];
        $gender=$row["gender"];
        $male="male";
        $female="female";

        if ($gender==$male) {
            $title = "Mr.";
        }
        else {
            $title = "Mrs.";
        }
    }
?>


        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">

<script type="text/javascript">
        function add() {
            Swal.fire({
  icon: 'success',
  title: 'Successfully Logged In',
  text: 'Police Officer <?php echo $title ?> <?php echo $name ?> Logged In ',
  confirmButtonColor: "#189cfc",
  iconColor: '#189cfc',
  confirmButtonText: "Okay",
})
        }
    </script>

<?php 
    $uid=$_SESSION["login"];
    if(isset($_SESSION["login"])) 
    {
        ?> 
   <body onload="add()" >
    
        <?php

    }
    unset($_SESSION["login"])
?>

        
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Welcome <?php echo $name ?> !</h1>
                        <p>Company : <?php echo $comp ?></p> 
                    </div>
                    <div class="col-6">
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Sales Summary</h4>
                                        <h6 class="card-subtitle">Ample admin Vs Pixel admin</h6>
                                    </div>
                                    <div class="ms-auto d-flex no-block align-items-center">
                                        <ul class="list-inline dl d-flex align-items-center m-r-15 m-b-0">
                                            <li class="list-inline-item d-flex align-items-center text-info"><i class="fa fa-circle font-10 me-1"></i> Ample
                                            </li>
                                            <li class="list-inline-item d-flex align-items-center text-primary"><i class="fa fa-circle font-10 me-1"></i> Pixel
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="amp-pxl mt-4" style="height: 350px;">
                                    <div class="chartist-tooltip"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Weekly Stats</h4>
                                <h6 class="card-subtitle">Average sales</h6>
                                <div class="mt-5 pb-3 d-flex align-items-center">
                                    <span class="btn btn-primary btn-circle d-flex align-items-center">
                                        <i class="mdi mdi-cart-outline fs-4" ></i>
                                    </span>
                                    <div class="ms-3">
                                        <h5 class="mb-0 fw-bold">Top Sales</h5>
                                        <span class="text-muted fs-6">Johnathan Doe</span>
                                    </div>
                                    <div class="ms-auto">
                                        <span class="badge bg-light text-muted">+68%</span>
                                    </div>
                                </div>
                                <div class="py-3 d-flex align-items-center">
                                    <span class="btn btn-warning btn-circle d-flex align-items-center">
                                        <i class="mdi mdi-star-circle fs-4" ></i>
                                    </span>
                                    <div class="ms-3">
                                        <h5 class="mb-0 fw-bold">Best Seller</h5>
                                        <span class="text-muted fs-6">MaterialPro Admin</span>
                                    </div>
                                    <div class="ms-auto">
                                        <span class="badge bg-light text-muted">+68%</span>
                                    </div>
                                </div>
                                <div class="py-3 d-flex align-items-center">
                                    <span class="btn btn-success btn-circle d-flex align-items-center">
                                        <i class="mdi mdi-comment-multiple-outline text-white fs-4" ></i>
                                    </span>
                                    <div class="ms-3">
                                        <h5 class="mb-0 fw-bold">Most Commented</h5>
                                        <span class="text-muted fs-6">Ample Admin</span>
                                    </div>
                                    <div class="ms-auto">
                                        <span class="badge bg-light text-muted">+68%</span>
                                    </div>
                                </div>
                                <div class="py-3 d-flex align-items-center">
                                    <span class="btn btn-info btn-circle d-flex align-items-center">
                                        <i class="mdi mdi-diamond fs-4 text-white" ></i>
                                    </span>
                                    <div class="ms-3">
                                        <h5 class="mb-0 fw-bold">Top Budgets</h5>
                                        <span class="text-muted fs-6">Sunil Joshi</span>
                                    </div>
                                    <div class="ms-auto">
                                        <span class="badge bg-light text-muted">+15%</span>
                                    </div>
                                </div>

                                <div class="pt-3 d-flex align-items-center">
                                    <span class="btn btn-danger btn-circle d-flex align-items-center">
                                        <i class="mdi mdi-content-duplicate fs-4 text-white" ></i>
                                    </span>
                                    <div class="ms-3">
                                        <h5 class="mb-0 fw-bold">Best Designer</h5>
                                        <span class="text-muted fs-6">Nirav Joshi</span>
                                    </div>
                                    <div class="ms-auto">
                                        <span class="badge bg-light text-muted">+90%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <h2>Recent Accidents</h2>
                    <a href="accview.php" class="badge bg-info text-light">View All Accidetns</a>
                    <br>
                    <br>
                        <?php
    $sql=" SELECT * FROM acc ORDER BY `acc`.`date` DESC LIMIT 4 ";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc())
    {
        $date=$row["date"];
        $pic1=$row["pic1"];
        $vid=$row["vid"];
        $uid=$row["uid"];
        $cause=$row["cause"];
        
        if ($cause==1) {
            $c="Bad Weather";
        }
        elseif ($cause==2) {
            $c="Distractions";
        }
        elseif ($cause==3) {
            $c="Speeding";
        }
        elseif ($cause==4) {
            $c="Drunk Driving";
        }else{
            $c="Other";
        }

         ?>
    
                        <div class="card">
                            <div class="card-body">
                                <div class="row g-0">
    <div  class="col-md-4">
      <img style="border-radius: 20px;" src="../assets/accimg/<?php echo $pic1 ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Vehicle ID : <?php echo $vid ?></h5>
        <p class="card-text"><?php echo $c ?> Is The Cause Of Accident</p>
        <p class="card-text"><small class="text-muted">Accident Date : <?php echo $date ?></small></p>
        <a style=" color: white; " href="" class="btn btn-info" >View Details</a>
      </div>
    </div>
  </div>
                            </div>
                        </div>

<?php } ?>  

                    </div>

                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                 </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
</body>

</html>