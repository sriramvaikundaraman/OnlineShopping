<?php
$conn = mysqli_connect("localhost","root","","sriram");
session_start();
$user_check=$_SESSION['login_user'];
$ssql=mysqli_query($conn,"select name from customer where email='$user_check'");
$row=mysqli_fetch_assoc($ssql);
$login_session=$row['name'];
if(!isset($login_session)){
	mysqli_close($conn);
	header('Location:index1.php');
}
?>
