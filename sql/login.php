<?php include 'conn.php'; ?>

<?php 
//LOGIN PROCESS
if(isset($_REQUEST["login_form"]))
{
	 $uname=$_REQUEST["uname"];
	 $pw=$_REQUEST["pw"];

	$login_check=0;	
	$sql=" SELECT * FROM user WHERE uname='$uname' AND pw='$pw'";
	$result=$conn->query($sql);
	while($row=$result->fetch_assoc())
	{
	$login_check=1;
	$uid=$row["uid"];
	$email=$row["email"];
	$sql=" SELECT * FROM user WHERE uid='$uid' ";
	$result=$conn->query($sql);
	while($row=$result->fetch_assoc())
	{
		$roll=$row["roll"];
	}
	}
	// $sroll="student";
	// $aroll="admin";

	if($login_check==1 && $roll=="1" )
	{
		$_SESSION["admin"]=$uid;
		$_SESSION["login"]=$uid;
		header('Location: ../admin/dashboard.php'); exit;
	}

		elseif ($login_check==1 && $roll=="2") 
		{
		$_SESSION["police"]=$uid;
		$_SESSION["login"]=$uid;
		header('Location: ../police/dashboard.php'); exit;
		}

		elseif ($login_check==1 && $roll=="5") 
		{
		$_SESSION["driver"]=$uid;
		$_SESSION["login"]=$uid;
		header('Location: ../driver/dashboard.php'); exit;
		}

		elseif ($login_check==1 && $roll=="4") 
		{
		$_SESSION["rda"]=$uid;
		$_SESSION["login"]=$uid;
		header('Location: ../rda/dashboard.php'); exit;
		}

		elseif ($login_check==1 && $roll=="3") 
		{
		$_SESSION["insu"]=$uid;
		$_SESSION["login"]=$uid;
		header('Location: ../insu/dashboard.php'); exit;
		}

	else
	{
		echo "<script>alert('Invalid login Or Your Account Has Not Approved Yet!'); window.location.href='../index.php' ;</script>";
	}
}


?>
