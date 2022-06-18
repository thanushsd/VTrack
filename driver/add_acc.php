<!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
   <!DOCTYPE html>
<html dir="ltr" lang="en">

<body>

<?php include 'driverc/main.php';?>
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
    $uid=$_SESSION["comp"];
    if(isset($_SESSION["comp"])) 
    {
        ?> 
   <body onload="comp()" >
    
        <?php

    }
    unset($_SESSION["comp"])
?>

<script type="text/javascript">
        function comp() {
            Swal.fire({
  icon: 'success',
  title: 'Profile Completion Successfull',
  text: '',
  confirmButtonColor: "#189cfc",
  iconColor: '#189cfc',
  confirmButtonText: "Okay",
})
        }
    </script>

 <?php
    $uid=$_SESSION["driver"];
    // $sql=" SELECT * FROM user WHERE uid='$uid' ";
    // $result=$conn->query($sql);
    // while($row=$result->fetch_assoc())
    // {
    //     $name=$row["name"];
        
    // }
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
                              <li class="breadcrumb-item active" aria-current="page">Add Accident</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Add Accident</h1> 
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
                        <div class="card">
                            <div class="card-body">
                                <center>
                                <img align="center" style=" height: 250px; " src="../assets/images/acc.gif"></center>
                                <form action="../sql/add_acc.php" method="post" enctype="multipart/form-data" class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <select class="form-control" name="vid" >
                                            <option>Select Vehicle</option>
                                        <?php
    $uid=$_SESSION["driver"];
    $sql=" SELECT * FROM vehicles WHERE uid='$uid' ";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc())
    {
        $make=$row["make"];
        $vid=$row["vid"];
        $model=$row["model"];
        

        ?>    
        <option value="<?php echo $vid ?>" ><?php echo $make ?> <?php echo $model ?> | <?php echo $rnum ?></option>

<?php }?>  </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Select Accident Date</label>
                                        <div class="col-md-12">
                                            <input  type="date" 
                                                class="form-control form-control-line" name="accdate"
                                                id="example-email">
                                        </div>
                                    </div>
                                    <input type="hidden" name="uid" value="<?php echo $uid ?>">
                                    
                                    <div class="form-group">
                                       
                                        <select class="form-control" name="cause" >
                                            <option value="1" >Select The Cause Of Accident</option>
                                            <option value="1" >Bad Weather</option>
                                            <option value="2">Distractions</option>
                                            <option value="3">Speeding</option>
                                            <option value="4">Drunk Driving</option>
                                            <option value="5">Other</option>
                                        </select>
                                    </div>

                                    <label for="example-email" class="col-md-12">Add Images</label>
                                    <input name="pic1" class="form-control" accept="image/*" type='file' id="imgInp" />
  <img class="m-2" style=" height: 200px; " id="blah" src="#" alt="Add image" />




<script type="text/javascript">
    imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}
</script>

<input name="pic2" class="form-control" accept="image/*" type='file' id="imgInp1" />
  <img class="m-2" style=" height: 200px; " id="blah1" src="#" alt="Add image" />

  


<script type="text/javascript">
    imgInp1.onchange = evt => {
  const [file] = imgInp1.files
  if (file) {
    blah1.src = URL.createObjectURL(file)
  }
}
</script>

<input name="pic3" class="form-control" accept="image/*" type='file' id="imgInp2" />
  <img class="m-2" style=" height: 200px; " id="blah2" src="#" alt="Add image" />

  


<script type="text/javascript">
    imgInp2.onchange = evt => {
  const [file] = imgInp2.files
  if (file) {
    blah2.src = URL.createObjectURL(file)
  }
}
</script>

<input name="pic4" class="form-control" accept="image/*" type='file' id="imgInp3" />
  <img class="m-2" style=" height: 200px; " id="blah3" src="#" alt="Add image" />

  


<script type="text/javascript">
    imgInp3.onchange = evt => {
  const [file] = imgInp3.files
  if (file) {
    blah3.src = URL.createObjectURL(file)
  }
}
</script>

<input name="pic5" class="form-control" accept="image/*" type='file' id="imgInp4" />
  <img class="m-2" style=" height: 200px; " id="blah4" src="#" alt="Add image" />

  


<script type="text/javascript">
    imgInp4.onchange = evt => {
  const [file] = imgInp4.files
  if (file) {
    blah4.src = URL.createObjectURL(file)
  }
}
</script>
<br>
<br>
<input type="submit" value="Report Accident" class="btn btn-info w-50" style=" color: white; ">
                                    
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

