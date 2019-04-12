<?php
include('session.php');
if(!$_SESSION['login_user']){
   header("location:login.php");
   die;
}
?>
<?php 
$servername="localhost";
 $username="root";
 $password="";
 $dbname="sriram";
 $conn = mysqli_connect($servername, $username, $password, $dbname);
   if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$email = $_SESSION['login_user'];
$sql = " DELETE from booking where email='$email' and brand='vivo-v9'";
if (mysqli_query($conn, $sql)) {
    echo "Your order is cancelled";
} 

else {
	
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("refresh:0; url=mycart.php");
?>
