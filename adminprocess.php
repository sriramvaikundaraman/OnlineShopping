
<?php
session_start();
$username=$_POST['username'];

if (isset($_POST['password'])){
	if($_POST['password']=='sriram'&&$username=='admin')
	{
		$_SESSION['login_admin']=$username;
		header("refresh:0; url=orderslist.php");	
			exit;
	}
	else{
		echo"Incorrect Password or Username!!    Redirecting you to the login page again!!";
		header("refresh:2; url=adminsign.php");
		exit;
	}
}
?>
