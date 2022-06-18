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
                              <li class="breadcrumb-item active" aria-current="page">Add Accounts</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Add Accounts</h1> 
                    </div>
                    <div class="col-6">
                    </div>
                </div>
            </div>
            <div class="container-fluid">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="center hideform animate__animated animate__fadeInDown">
    <button class="btn-close" id="close" style="float: right;"></button>
    <form action="../sql/add_st.php">
        <h2>Add New RDA Officer</h2><hr>
        
        <input class="form-control" type="text" name="name" placeholder="Enter name" >
        <br>
        <input class="form-control" type="text" name="nic" placeholder="Enter NIC" >
        <br>
        <select name="gen" class="form-control" >
            <option value="male" >Select Gender</option>
            <option value="male" >Male</option>
            <option value="female">Female</option>
        </select>
<input type="hidden" name="roll" value="4" >
        <br>
        <select class="form-control" name="comp">
        <option value="Central">Select Province</option>
        <option value="Central Province RDA">Central</option>
        <option value="North Central Province RDA">North Central</option>
        <option value="North Eastern Province RDA">North Eastern</option>
        <option value="North Western Province RDA">North Western</option>
        <option value="Sabaragamuwa Province RDA">Sabaragamuwa</option>
        <option value="Southern Province RDA">Southern</option>
        <option value="Uva Province RDA">Uva</option>
        <option value="Western Province RDA">Western</option>
        </select>
                <br>
      <textarea class="form-control" name="add" placeholder="Enter Adress" ></textarea>
        <br>
        <input class="form-control" type="text" name="email" placeholder="Enter Email" >
        <br>
        <input class="form-control" type="text" name="tel" placeholder="Enter Phone No" >
        <br>
        <input class="form-control" type="text" name="uname" placeholder="Enter Username" >
        <br>
        <input class="form-control" type="text" name="pw" placeholder="Enter Password" >
        <br>
        <input class="btn" style="background-color: #189cfc; border-radius: 10px;  color: white;"  type="submit" value="Add RDA Officer">
    </form>
</div>
<br>



<div class="centerd hideform animate__animated animate__fadeInDown">
    <button class="btn-close" id="closed" style="float: right;"></button>
    <form action="../sql/add_st.php">
        <h2>Add New Insurance Member</h2><hr>
        
        <input class="form-control" type="text" name="name" placeholder="Enter name" >
        <br>
        <input class="form-control" type="text" name="nic" placeholder="Enter NIC" >
        <input type="hidden" name="roll" value="3">
        <br>
        <select name="gen" class="form-control" >
            <option value="male" >Select Gender</option>
            <option value="male" >Male</option>
            <option value="female">Female</option>
        </select>
        <br>
        <select name="comp" class="form-control" >
            <option value="male" >Select Company</option>
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
        <br>
<textarea class="form-control" name="add" placeholder="Enter Adress" ></textarea>        <br>
        <input class="form-control" type="text" name="email" placeholder="Enter Email" >
        <br>
        <input class="form-control" type="text" name="tel" placeholder="Enter Phone No" >
        <br>
        <input class="form-control" type="text" name="uname" placeholder="Enter Username" >
        <br>
        <input class="form-control" type="text" name="pw" placeholder="Enter Password" >
        <br>
        <input class="btn" style="background-color: #189cfc; border-radius: 10px;  color: white;"  type="submit" value="Add Insurance Member">
    </form>
</div>
<br>

<div class="centerdd hideform animate__animated animate__fadeInDown">
    <button class="btn-close" id="closedd" style="float: right;"></button>
    <form action="../sql/add_st.php">
        <h2>Add New Police Officer</h2><hr>
        
        <input class="form-control" type="text" name="name" placeholder="Enter name" >
        <br>
        <input class="form-control" type="text" name="nic" placeholder="Enter NIC" >
        <input type="hidden" name="roll" value="2">
        <br>
        <select name="gen" class="form-control" >
            <option value="male" >Select Gender</option>
            <option value="male" >Male</option>
            <option value="female">Female</option>
        </select>
        <br>
        <select class="form-control" name="comp">
        <option value="Central">Select Province</option>
        <option value="Central Province Police">Central</option>
        <option value="North Central Province Police">North Central</option>
        <option value="North Eastern Province Police">North Eastern</option>
        <option value="North Western Province Police">North Western</option>
        <option value="Sabaragamuwa Province Police">Sabaragamuwa</option>
        <option value="Southern Province Police">Southern</option>
        <option value="Uva Province Police">Uva</option>
        <option value="Western Province Police">Western</option>
        </select>
        <br>
<textarea class="form-control" name="add" placeholder="Enter Adress" ></textarea>        <br>
        <input class="form-control" type="text" name="email" placeholder="Enter Email" >
        <br>
        <input class="form-control" type="text" name="tel" placeholder="Enter Phone No" >
        <br>
        <input class="form-control" type="text" name="uname" placeholder="Enter Username" >
        <br>
        <input class="form-control" type="text" name="pw" placeholder="Enter Password" >
        <br>
        <input class="btn" style="background-color: #189cfc; border-radius: 10px;  color: white;"  type="submit" value="Add Police Branch">
    </form>
</div>
<br>

                <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="../assets/police.gif" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">POLICE</h5>
        <p class="card-text">Add New Police Officer</p>
        <a id="poli" class="btn" style="background-color: #189cfc; border-radius: 10px; color: white;" >Add New Officer</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="../assets/ins.gif" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">INSURANCE</h5>
        <p class="card-text">Add New Company Member</p>
        <a id="insu" class="btn" style="background-color: #189cfc; border-radius: 10px;  color: white;" >Add New Member</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="../assets/rda.gif" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">RDA</h5>
        <p class="card-text">Add New RDA Officer</p>
        <a id="show" class="btn" style="background-color: #189cfc; border-radius: 10px;  color: white;" >Add New Officer</a>
      </div>
    </div>
  </div>
</div><br>

<!-- INSURANCE POPUP -->
<script type="text/javascript">
    $('#insu').on('click', function () {
    $('.centerd').show();
    $(this).hide();
})

$('#closed').on('click', function () {
    $('.centerd').hide();
    $('#insu').show();
})
</script>

<!-- RDA POPUP -->
<script type="text/javascript">
    $('#show').on('click', function () {
    $('.center').show();
    $(this).hide();
})

$('#close').on('click', function () {
    $('.center').hide();
    $('#show').show();
})
</script>

<!-- POLICE POPUO -->
<script type="text/javascript">
    $('#poli').on('click', function () {
    $('.centerdd').show();
    $(this).hide();
})

$('#closedd').on('click', function () {
    $('.centerdd').hide();
    $('#poli').show();
})
</script>

<style type="text/css">
    .center {
    margin: auto;
    width: 100%;
    padding: 20px;
    border: solid;
    border-width: 1px;
    border-color: #ecf0f2;
    border-radius: 20px;
}

.centerd {
    margin: auto;
    width: 100%;
    padding: 20px;
    border: solid;
    border-width: 1px;
    border-color: #ecf0f2;
    border-radius: 20px;
}

.hideform {
    display: none;
}
</style>


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
                                        <h4 class="card-title">Recently Added Accounts</h4>
                                        <h5 class="card-subtitle">Added Police , Insuarance & RDA Accounts</h5>
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
    $sql=" SELECT * FROM user ORDER BY uid DESC LIMIT 4";
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