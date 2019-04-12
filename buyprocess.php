<?php
session_start();
$conn = mysqli_connect("localhost","root","","sriram");
if (!$conn) {
	echo "could not connecct";
	die("connection failed:" .mysqli_connect_error());

}
$email = $_SESSION['login_user'];
$brand=$_SESSION['booked'];
$door=$_POST['door'];
$street=$_POST['street'];
$city=$_POST['city'];
$pin=$_POST['pin'];
$amob=$_POST['amob'];
$quantity=$_POST['quantity'];
$date=date("Y-m-d");
$ssql=mysqli_query($conn,"select price from items where brand='$brand'");
$row=mysqli_fetch_assoc($ssql);
$price=$row['price'];
$total=$quantity*$price;
$sql ="INSERT INTO booking(email,brand,door,street,city,pin,amob,quantity,dates,amount) values('$email','$brand','$door','$street','$city','$pin','$amob','$quantity','$date','$total')";
if (mysqli_query($conn, $sql)) {
    echo "You've been registered";
} 

else {
	echo $date;
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("refresh:2; url=mycart.php");
?>
