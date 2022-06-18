<?php include 'conn.php'; ?>
<?php

$uname=$_REQUEST["uname"];
$email=$_REQUEST["email"];
$pw=$_REQUEST["pw"];
$roll=5;
$pos="Driver";
$date=date("Y-m-d H:i:s");

	
	//INSERT QUERY
	$sql=" INSERT INTO user(roll,uname,email,pos,pw,date) 
	VALUES('$roll','$uname','$email','$pos','$pw','$date') ";

	//Execute command 2
	if ($conn->query($sql) === TRUE) {
		$_SESSION["dreg"]=$email;
	  echo "<script>window.location.href='../index.php' ;</script>";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	?>

	