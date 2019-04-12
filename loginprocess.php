<?php
session_start();


$conn = mysqli_connect("localhost","root","","sriram");
if (!$conn) {
	echo "could not connecct";
	die("connection failed:" .mysqli_connect_error());

}


$username = $_POST['mail'];

$password = $_POST['password'];
$rows=0;

$sql =mysqli_query($conn,"select * from customer where email='$username' and password='$password'");
$rows=mysqli_num_rows($sql);
if($rows==1){
	$_SESSION['login_user']=$username;
	header("location:index1.php");
}


else{

	echo "No record";
}

mysqli_close($conn);
?>


