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
$brand=$_SESSION['booked'];
$sql = " DELETE FROM booking where email='$email' and brand='$brand'";
if (mysqli_query($conn, $sql)) {
    echo "Succesfully cancelled the order";
    echo $brand;
    echo $email;
} 
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo $brand;
    echo $email;

}

mysqli_close($conn);
header("refresh:2; url=mycart.php");
?>