<?php

include 'conn.php';
$date=date('Y-m-d', strtotime($_REQUEST['accdate']));
$uid=$_REQUEST["uid"];
$vid=$_REQUEST["vid"];
$cause=$_REQUEST["cause"];

//image 1
$file_tmp1 = $_FILES['pic1']['tmp_name'];
$file_name1 = "v".$vid."_".rand(1,100)."_".$_FILES['pic1']['name'];
$target_file1 = "../assets/accimg/".$file_name1;
if($file_tmp1!="")
{ move_uploaded_file($file_tmp1,$target_file1); }
else { $file_name1=""; }


//image 2 
$file_tmp2 = $_FILES['pic2']['tmp_name'];
$file_name2 = "v".$vid."_".rand(1,100)."_".$_FILES['pic2']['name'];
$target_file2 = "../assets/accimg/".$file_name2;
if($file_tmp2!="")
{ move_uploaded_file($file_tmp2,$target_file2); }
else { $file_name2=""; }


//image 3 
$file_tmp3 = $_FILES['pic3']['tmp_name'];
$file_name3 = "v".$vid."_".rand(1,100)."_".$_FILES['pic3']['name'];
$target_file3 = "../assets/accimg/".$file_name3;
if($file_tmp3!="")
{ move_uploaded_file($file_tmp3,$target_file3); }
else { $file_name3=""; }


//image 4
$file_tmp4 = $_FILES['pic4']['tmp_name'];
$file_name4 = "v".$vid."_".rand(1,100)."_".$_FILES['pic4']['name'];
$target_file4 = "../assets/accimg/".$file_name4;
if($file_tmp4!="")
{ move_uploaded_file($file_tmp4,$target_file4); }
else { $file_name4=""; }


//image 5
$file_tmp5 = $_FILES['pic5']['tmp_name'];
$file_name5 = "v".$vid."_".rand(1,100)."_".$_FILES['pic5']['name'];
$target_file5 = "../assets/accimg/".$file_name5;
if($file_tmp5!="")
{ move_uploaded_file($file_tmp5,$target_file5); }
else { $file_name5=""; }


	//INSERT QUERY
	$sql=" INSERT INTO acc(uid,vid,date,cause,pic1,pic2,pic3,pic4,pic5,status) 
	VALUES('$uid','$vid','$date','$cause','$file_name1','$file_name2','$file_name3','$file_name4','$file_name5',0)";

	//Execute command 2
	if ($conn->query($sql) === TRUE) {
		$_SESSION["addacc"]=$vid;
	  echo "<script>window.location.href='../driver/dashboard.php' ;</script>";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}


?>