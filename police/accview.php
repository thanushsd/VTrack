<!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
   <!DOCTYPE html>
<html dir="ltr" lang="en">

<body>

<?php include 'policec/main.php';?>
<?php include '../sql/conn.php';?>

<?php 
    $uid=$_SESSION["pfp"];
    if(isset($_SESSION["pfp"])) 
    {
        ?> 
   <body onload="add()" >
    
        <?php

    }
    unset($_SESSION["pfp"])
?>

<script type="text/javascript">
        function add() {
            Swal.fire({
  icon: 'success',
  title: 'Profile Picture Updated',
  text: '',
  confirmButtonColor: "#189cfc",
  iconColor: '#189cfc',
  confirmButtonText: "Okay",
})
        }
    </script>

 <?php
    $uid=$_SESSION["police"];
    $sql=" SELECT * FROM user WHERE uid='$uid' ";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc())
    {
        $name=$row["name"];
        $roll=$row["roll"];
        $pos=$row["pos"];
        $gender=$row["gender"];
        $email=$row["email"];
        $nic=$row["nic"];
        $pic=$row["pic"];
        $adress=$row["adress"];
        $tel=$row["tel"];
        $pw=$row["pw"];
        $male="male";
        $female="female";

        if ($gender==$male) {
            $title = "Mr.";
        }
        else {
            $title = "Mrs.";
        }

        if ($pic==0) {
            $pp="user.png";
        } else{
            $pp=$pic;
        }
    }
?>  

    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <?php include 'policec/header.php';?>
        <?php include 'policec/sidebar.php';?>

        <!-- ============================================================== -->
            <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">View Accidents</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">View Accidents</h1> 
                    </div>
                    <div class="col-6">
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    
                    <!-- Column -->
                    <div class="col-lg-12 col-md-12">
                        <?php
    $sql=" SELECT * FROM acc ";
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
<a style=" color: white; " href="accd.php?uid=<?php echo $uid ?>&vid=<?php echo $vid?>&aid=<?php echo $aid ?>" class="btn btn-info" >View Details</a>
            </div>
    </div>
  </div>
                            </div>
                        </div>

<?php } ?>  
                    </div>

                    <style type="text/css">
                        label{
                            font-weight: bold;
                        }
                    </style>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>