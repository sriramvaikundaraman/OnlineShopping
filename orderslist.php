
<?php
include('session1.php');
if(!$_SESSION['login_admin']){
   header("location:index.php");
   die;
}
$servername="localhost";
 $username="root";
 $password="";
 $dbname="sriram";
 $conn = mysqli_connect($servername, $username, $password, $dbname);
   if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = " SELECT * FROM booking";
$records=mysqli_query($conn,$sql);
?>
<html>
<head>
<title>Orders List</title>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<h1 style="text-align: center;color:violet;font-variant: impact;">DETAILS</h1>
<h3 style="text-align: center;color:brown;">Orders by customers</h3>
<table width="1000" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>Email</th>
<th>Brand</th>
<th>Door no</th>
<th>Street</th>
<th>City</th>
<th>Pincode</th>
<th>Mobile</th>
<th>Quantity</th>
<th>Date</th>
<th>Amount</th>
</tr>
<?php
while($createid1=mysqli_fetch_assoc($records)){
	echo "<tr>";
	echo"<td>".$createid1['email']."</td>";
	echo"<td>".$createid1['brand']."</td>";
	echo"<td>".$createid1['door']."</td>";
	echo"<td>".$createid1['street']."</td>";
	echo"<td>".$createid1['city']."</td>";
	echo"<td>".$createid1['pin']."</td>";
	echo"<td>".$createid1['amob']."</td>";
	echo"<td>".$createid1['quantity']."</td>";
	echo"<td>".$createid1['dates']."</td>";
	echo"<td>".$createid1['amount']."</td>";
	echo "</tr>";
}
?> 
	
</table>
<form action="admin.php">
<input type="submit" name="submit" value="Go Back">
</form>
<form action="index.php">
<input type="submit" name="submit1" value="Home">
</form>
	
</body>