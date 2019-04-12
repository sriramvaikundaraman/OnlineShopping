<?php
session_start();
$user_check=$_SESSION['login_admin'];
if(!isset($user_check)){
	mysqli_close($conn);
	header('Location:orderslist.php');
}
?>
