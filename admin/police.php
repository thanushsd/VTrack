<!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
   <!DOCTYPE html>
<html dir="ltr" lang="en">

<body>

<?php include 'adminc/main.php';?>
<?php include '../sql/conn.php';?>

<?php 
    $name=$_SESSION["add"];
    if(isset($_SESSION["add"])) 
    {
        ?> 
   <body onload="add()" >
    
        <?php

    }
    unset($_SESSION["add"])
?>

<script type="text/javascript">
        function add() {
            Swal.fire({
  icon: 'success',
  title: 'Account Created',
  text: 'Account Of <?php echo $name ?> Created',
  confirmButtonColor: "#189cfc",
  iconColor: '#189cfc',
  confirmButtonText: "Okay",
})
        }
</script>


 <?php
    $uid=$_SESSION["admin"];
    $sql=" SELECT * FROM user WHERE uid='$uid' ";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc())
    {
        $name=$row["name"];
        $roll=$row["roll"];
        $gender=$row["gender"];
        $email=$row["email"];
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
    }
?>  



    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <?php include 'adminc/header.php';?>
        <?php include 'adminc/sidebar.php';?>

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
                              <li class="breadcrumb-item active" aria-current="page">Police Officer Accounts</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Police Officer Accounts</h1> 
                    </div>
                    <div class="col-6">
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                
                <!-- Table -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex">
                                    <div>
                                        <h4 class="card-title">Police Officer Accounts</h4>
                                        <h5 class="card-subtitle">Added Police Officer Accounts</h5>
                                    </div>
                                    <div class="ms-auto">
                                       
                                    </div>
                                </div>
                                <!-- title -->
                                <div class="table-responsive">
                                    <table class="table mb-0 table-hover align-middle text-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Name</th>
                                                <th class="border-top-0">Position</th>
                                                <th class="border-top-0">NIC</th>
                                                <th class="border-top-0">Phone No</th>
                                                <th class="border-top-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php
    $sql=" SELECT * FROM user WHERE roll=2";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc())
    {
        $name=$row["name"];
        $uid=$row["uid"];
        $roll=$row["roll"];
        $pos=$row["pos"];
        $nic=$row["nic"];
        $gen=$row["gender"];
        $gender=$row["gender"];
        $email=$row["email"];
        $adress=$row["adress"];
        $tel=$row["tel"];
        $pw=$row["pw"];
       
        ?>
   

                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        
                                                        <div class="">
                                                            <h4 class="m-b-0 font-16"><?php echo $name ?></h4>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><?php echo $pos ?></td>
                                                <td><?php echo $nic ?></td>
                                                <td><?php echo $tel ?></td>
                                                <td>
                                                    <a style=" color: white; " href="prof.php?uid=<?php echo $uid ?>" class="btn btn-info">View Profile</a>
                                                </td>
                                            </tr>
                                           <?php } ?> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

         <style type="text/css">
/*Profile Pic Start*/
.picture-container{
    position: relative;
    cursor: pointer;
    text-align: center;
}
.picture{
    width: 150px;
    height: 150px;
    background-color: #999999;
    border: 4px solid #CCCCCC;
    color: #FFFFFF;
    border-radius: 50%;
    overflow: hidden;
    transition: all 0.2s;
    -webkit-transition: all 0.2s;
}
.picture:hover{
    border-color: #2ca8ff;
}
.content.ct-wizard-green .picture:hover{
    border-color: #05ae0e;
}
.content.ct-wizard-blue .picture:hover{
    border-color: #3472f7;
}
.content.ct-wizard-orange .picture:hover{
    border-color: #ff9500;
}
.content.ct-wizard-red .picture:hover{
    border-color: #ff3b30;
}
.picture input[type="file"] {
    cursor: pointer;
    display: block;
    height: 100%;
    left: 0;
    opacity: 0 !important;
    position: absolute;
    top: 0;
    width: 100%;
}

.picture-src{
    width: 100%;
    
}
/*Profile Pic End*/
         </style>

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>