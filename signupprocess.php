<?php

$conn = mysqli_connect("localhost","root","","sriram");
if (!$conn) {
	die("connection failed:" .mysqli_connect_error());

}
$name = $_POST['name'];
$mobno = $_POST['mobno'];
$mail = $_POST['email'];
$pass = $_POST['password'];

$sql ="INSERT INTO customer(name,mob,email,password) values('$name','$mobno','$mail','$pass')";
if (mysqli_query($conn, $sql)) {
    echo "You've been registered";
} 

else {
    echo "Cannot create account User email already exists";
}

mysqli_close($conn);
header("refresh:2; url=login.php");
?>


