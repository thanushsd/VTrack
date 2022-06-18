<?php

include 'conn.php';
$make=$_REQUEST["make"];
$model=$_REQUEST["model"];
$rnum=$_REQUEST["rnum"];
$inscomp=$_REQUEST["inscomp"];
$insnum=$_REQUEST["insnum"];
$uid=$_REQUEST["uid"];

	//INSERT QUERY
	$sql=" INSERT INTO vehicles(uid,make,model,rnum,inscomp,insnum) 
	VALUES('$uid','$make','$model','$rnum','$inscomp','$insnum')";

	//Execute command 2
	if ($conn->query($sql) === TRUE) {
		$_SESSION["addv"]=$model;
	  echo "<script>window.location.href='../driver/veh.php' ;</script>";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}


?>