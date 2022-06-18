<?php include 'conn.php'; ?>
<?php

$name=$_REQUEST["name"];
$gen=$_REQUEST["gen"];
$nic=$_REQUEST["nic"];
$roll=$_REQUEST["roll"];
$comp=$_REQUEST["comp"];
$add=$_REQUEST["add"];
$email=$_REQUEST["email"];
$tel=$_REQUEST["tel"];
$uname=$_REQUEST["uname"];
$pw=$_REQUEST["pw"];
$date=date("Y-m-d H:i:s");

if ($roll==2) {
	$pos="Police Officer";
} elseif ($roll==3) {
	$pos="Insurance Member";
} elseif ($roll==4) {
	$pos="RDA Officer";
}

	
	//INSERT QUERY
	$sql=" INSERT INTO user(roll,name,nic,gender,adress,email,tel,pos,comp,uname,pw,pic,date) 
	VALUES('$roll','$name','$nic','$gen','$add','$email','$tel','$pos','$comp','$uname','$pw',0,'$date') ";

	//Execute command 2
	if ($conn->query($sql) === TRUE) {
		$_SESSION["add"]=$name;
	  echo "<script>window.location.href='../admin/add_acc.php' ;</script>";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	?>

	