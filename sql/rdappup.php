<?php

include 'conn.php';
$uid=$_REQUEST["uid"];

//image 1
$file_tmp1 = $_FILES['pic']['tmp_name'];
$file_name1 = "v".$aid."_".rand(1,100)."_".$_FILES['pic']['name'];
$target_file1 = "../assets/uimg/".$file_name1;
if($file_tmp1!="")
{ move_uploaded_file($file_tmp1,$target_file1); }
else { $file_name1=""; }

//INSERT QUERY
	$sql="UPDATE user SET pic='$file_name1' WHERE uid=$uid";

	//Execute command 2
	if ($conn->query($sql) === TRUE) {
	  echo "<script>window.location.href='../rda/profile.php' ;</script>";
	  $_SESSION["pfp"]=$uid;
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}


?>