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
    $did=$_REQUEST["uid"];
    $sql=" SELECT * FROM user WHERE uid='$did' ";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc())
    {
        $dname=$row["name"];
        $dnic=$row["nic"];
        $demail=$row["email"];
        $dadd=$row["adress"];
        $dtel=$row["tel"];
        $dgen=$row["gender"];
        
        if ($pic==0) {
            $pp="user.png";
        } else{
            $pp=$pic;
        }
    }
?>  

<?php
    $vid=$_REQUEST["vid"];
    $sql=" SELECT * FROM vehicles WHERE uid='$did' ";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc())
    {
        $inscomp=$row["inscomp"];
        $insnum=$row["insnum"];
        $rnum=$row["rnum"];
        $make=$row["make"];
        $model=$row["model"];
        
    }
?>  

<?php
    $aid=$_REQUEST["aid"];
    $sql=" SELECT * FROM acc WHERE aid='$aid' ";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc())
    {
        $date=$row["date"];
        $cause=$row["cause"];
        $pic1=$row["pic1"];
        $pic2=$row["pic2"];
        $pic3=$row["pic3"];
        $pic4=$row["pic4"];
        $pic5=$row["pic5"];    
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
                              <li class="breadcrumb-item active" aria-current="page">Accident Details</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Accident Details</h1> 
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
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <h2>Driver Details</h2><hr>
                                <ol class="list-group list-group-numbered">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Driver Name</div>
      <?php echo $dname ?>
    </div>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Driver NIC</div>
     <?php echo $dnic ?>
    </div>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Driver Gender</div>
      <?php echo $dgen ?>
    </div>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Driver Phone No</div>
      <?php echo $dtel ?>
    </div>
  </li>
</ol>
                        </div>
                    </div>

                    <div class="card">
                            <div class="card-body">
                                <h2>Insurance & Vehicle Details</h2><hr>
                                <ol class="list-group list-group-numbered">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Insurance ID</div>
      <?php echo $insnum ?>
    </div>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Insurance Company</div>
     <?php echo $inscomp ?>
    </div>
  </li>
   <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Vehicle Make</div>
     <?php echo $make ?>
    </div>
  </li>
  
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Vehicle Model</div>
      <?php echo $model ?>
    </div>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Vehicle Reg No</div>
      <?php echo $rnum ?>
    </div>
  </li>
</ol>
                        </div>
                    </div>
                </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">

                            <div class="card-body">
                                <div >
  <div >
    <div >
      <img src="../assets/accimg/<?php echo $pic1 ?> " class="d-block w-100" alt="...">
    </div>
    <div >
      <img src="../assets/accimg/<?php echo $pic2 ?> " class="d-block w-100" alt="...">
    </div>
    <div >
      <img src="../assets/accimg/<?php echo $pic3 ?> " class="d-block w-100" alt="...">
    </div>
    <div >
      <img src="../assets/accimg/<?php echo $pic4 ?> " class="d-block w-100" alt="...">
    </div>
    <div >
      <img src="../assets/accimg/<?php echo $pic5 ?> " class="d-block w-100" alt="...">
    </div>
  </div>
  
</div>
                            </div>
                        </div>
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