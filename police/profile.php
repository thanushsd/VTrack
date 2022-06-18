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
                              <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Profile</h1> 
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
                                <center class="m-t-30"> <img src="../assets/uimg/<?php echo $pp?>"
                                        class="rounded-circle" width="150" /><br>
<form id="form" action="../sql/ppupdate.php?uid=<?php echo $uid ?>" enctype="multipart/form-data" method="post">
<label class="custom-file-upload">
    <input name="pic" type="file" id="file" >
    Change Image
</label></form>

<script type="text/javascript">
    document.getElementById("file").onchange = function() {
    document.getElementById("form").submit();
}
</script>

<style type="text/css">
    input[type="file"] {
    display: none;
}

.custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 3px ;
    border-radius: 10px;
    cursor: pointer;
    margin-top: 5px;
}
</style>
                                    <h4 class="card-title m-t-10"><?php echo $name ?></h4>
                                    <h6 class="card-subtitle"><?php echo $pos ?></h6>
                                    <div class="row text-center justify-content-md-center">
                                        
                                    </div>
                                </center>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6><?php echo $email ?></h6> <small class="text-muted p-t-30 db">Phone</small>
                                <h6><?php echo $tel ?></h6>
                                <small class="text-muted p-t-30 db">NIC</small>
                                <h6><?php echo $nic ?></h6>
                                 <small class="text-muted p-t-30 db">Address</small>
                                <h6><?php echo $adress ?></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <input disabled type="text" placeholder="<?php echo $name ?>"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input disabled type="email" placeholder="<?php echo $email ?>"
                                                class="form-control form-control-line" name="example-email"
                                                id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input disabled type="password" placeholder="<?php echo $pw ?>" 
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <input disabled type="text" placeholder="<?php echo $tel ?>"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Gender</label>
                                        <div class="col-md-12">
                                            <input disabled type="text" placeholder="<?php echo $gender ?>"
                                                class="form-control form-control-line">
                                         
                                    </div><br>
                                    <div class="form-group">
                                    <label class="col-md-12">Adress</label>
                                        <div class="col-md-12">
                                            <input disabled type="text" placeholder="<?php echo $adress ?>"
                                                class="form-control form-control-line">                                        
                                </div><br>
                                    
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
    </div>