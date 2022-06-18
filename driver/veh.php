<!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
   <!DOCTYPE html>
<html dir="ltr" lang="en">

<body>

<?php include 'driverc/main.php';?>
<?php include '../sql/conn.php';?>


<?php 
    $model=$_SESSION["addv"];
    if(isset($_SESSION["addv"])) 
    {
        ?> 
   <body onload="comp()" >
    
        <?php

    }
    unset($_SESSION["addv"])
?>

<script type="text/javascript">
        function comp() {
            Swal.fire({
  icon: 'success',
  title: 'Vehicle <?php echo $model ?> Added Successfully',
  text: '',
  confirmButtonColor: "#189cfc",
  iconColor: '#189cfc',
  confirmButtonText: "Okay",
})
        }
    </script>

 <?php
    $uid=$_SESSION["driver"];
    
?>  

    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <?php include 'driverc/header.php';?>
        <?php include 'driverc/sidebar.php';?>

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
                              <li class="breadcrumb-item active" aria-current="page">Add Vehicle</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Add Vehicle</h1> 
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
                        <div class="card" >
                            <div class="card-body">
                                <h2>Added Vehicles</h2><hr>
                                  <img src="../assets/images/veh1.gif" class="card-img-top" alt="...">

<?php
    $uid=$_SESSION["driver"];
    $sql=" SELECT * FROM vehicles WHERE uid='$uid' ";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc())
    {
        $make=$row["make"];
        $model=$row["model"];
        $inscomp=$row["inscomp"];
        $rnum=$row["rnum"];
        $insnum=$row["insnum"];

        ?>
        
<div class="card mb-3">
  <div class="card-body">
    <h5 class="card-title"> <?php echo $make ?> <?php echo $model ?> </h5>
    <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo $rnum ?></li>
    <li class="list-group-item"><?php echo $inscomp ?></li>
    <li class="list-group-item"><b>INS ID : </b><?php echo $insnum ?></li>
  </ul>
  </div>
</div>

<?php }?>  
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form action="../sql/addv.php" class="form-horizontal form-material mx-2">
                                    <h2>Add Your Vehicle</h2><hr>
                                    <div class="form-group">
                                        <div class="col-md-12">
<select class="form-control" name="make">
    <option  value="0">Select Make</option>
    <option  value="BMW">BMW</option>
    <option  value="Daewoo">Daewoo</option>
    <option  value="Ford">Ford</option>
    <option  value="Holden">Holden</option>
    <option value="Honda">Honda</option>
    <option value="Hyundai">Hyundai</option>
    <option value="Isuzu">Isuzu</option>
    <option value="Kia">Kia</option>
    <option value="Lexus">Lexus</option>
    <option value="Mazda">Mazda</option>
    <option value="Mitsubishi">Mitsubishi</option>
    <option value="Nissan">Nissan</option>
    <option value="Peugeot">Peugeot</option>
    <option value="Subaru">Subaru</option>
    <option value="Suzuki">Suzuki</option>
    <option value="Toyota">Toyota</option>
    <option value="Volkswagen">Volkswagen</option>
</select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Vehicle Model</label>
                                        <div class="col-md-12">
<input name="model" type="text" placeholder="Enter Model Of The Vehicle" class="form-control form-control-line" id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Vehicle Reg Number</label>
                                        <div class="col-md-12">
 <input name="rnum" type="text" placeholder="XX-XXXX" class="form-control form-control-line" id="example-email">
                                        </div>
                                    </div>
<input type="hidden" name="uid"  value="<?php echo $uid ?>">
                                    <div class="form-group">
                                        
                                        <div class="col-md-12">
<select name="inscomp" class="form-control" >
            <option value="" >Select Vehicle Insured Compnany</option>
            <option value="Sri Lankan Insurance" >Sri Lankan Insurance</option>
            <option value="Union Assuarance">Union Assuarance</option>
            <option value="Softlogic">Softlogic</option>
            <option value="Fairfirst">Fairfirst</option>
            <option value="Allianz">Allianz</option>
            <option value="Amano Takaful">Amano Takaful</option>
            <option value="Arpico Insurance">Arpico Insurance</option>
            <option value="COOP Insurance">COOP Insurance</option>
            <option value="Ceylinco Insurance">Ceylinco Insurance</option>
            <option value="Peoples Insurance">Peoples Insurance</option>
            <option value="Continental Insurance">Continental Insurance</option>
</select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Vehicle Insurance Number</label>
                                        <div class="col-md-12">
<input name="insnum" type="text" placeholder="XXXXXXXXXXXX" class="form-control form-control-line"  id="example-email">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input  type="submit" style=" color: white; " 
                                                class=" btn btn-info w-50 form-control form-control-line" value="Add Vehicle">
                                        </div>
                                    </div>
                                    
                                    
                                </form>
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
    </div><!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
   <!DOCTYPE html>
<html dir="ltr" lang="en">

