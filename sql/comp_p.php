<?php

include 'conn.php';
$uid=$_REQUEST["uid"];
$name=$_REQUEST["name"];
$nic=$_REQUEST["nic"];
$gen=$_REQUEST["gender"];
$tel=$_REQUEST["tel"];
$add=$_REQUEST["add"];

	$sql="UPDATE user SET name='$name',nic='$nic',gender='$gen',tel='$tel',adress='$add' WHERE uid=$uid";

	//Execute command 2
	if ($conn->query($sql) === TRUE) {
	  echo "<script>window.location.href='../driver/profile.php' ;</script>";
	  $_SESSION["comp"]=$uid;
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}


?>