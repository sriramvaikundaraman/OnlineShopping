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
$sql = " SELECT brand,quantity,amount FROM booking where email='$email'";
$records=mysqli_query($conn,$sql);
echo "<html>";
echo "<body>";
echo "<h1> Your cart:</h1>";

while($createid1=mysqli_fetch_assoc($records)){
?>
<html>
<head>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <script type="text/javascript">
      function fun() {
    var ask = window.confirm("Do you really want to cancel this item?");
    if (ask) {
        window.alert("The order has been cancelled.");

        window.location.href = "<?php echo $createid1['brand']; ?>-cancel.php";

    }
}
    </script>
<body style="margin-left: 25%;">

<div class="w3-container" >
  <br>

  <div class="w3-card-4" style="width:50%;">
  	<a href="<?php echo $createid1['brand']; ?>.php">
  	
    <img src="images/<?php echo $createid1['brand']; ?>" alt="Person" style="width:100%">
    <div class="w3-container">

    
      <h4><b><?php echo $createid1['brand']; ?></b></h4>
      <p>Quantity:<?php echo $createid1['quantity']; ?></p>
      <b><p>Total amount:<?php echo $createid1['amount']; ?></p></b>
  </a>
      
      <button style="color: white;background-color: red;margin-left: 150px; width: 150px;height: 50px;" onclick="fun()">Cancel Order</button>
  
    </div>
  </div>
</a>
</div>

</body>
</html>
<?php
}
?>
