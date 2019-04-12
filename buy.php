
<html>
<head>
<title>Fill info</title>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
     <link rel="stylesheet" href="style.css">

    


</head>
<body >
	<h3 style="font-size: 30px;"><center>Fill the form..</h3>
	<form action="buyprocess.php" style="margin-top: 15px;" method="POST">
		

  

  <div class="container">
  	<input type="number" placeholder="Quantity" name="quantity" id="quantity" required=""><br><br>
    <input type="text" placeholder="Enter doorno" name="door" id="door" required><br><br>
    <input type="text" placeholder="Enter Street" name="street" id="street" required=""><br><br> 
    <input type="text" placeholder="Enter city" name="city" id="city" required=""  ><br><br>
     <input type="number" placeholder="Enter pincode" name="pin" id="pin" required=""  ><br><br>
     <input type="number" placeholder="Enter alternate mobileno" id="amob" name="amob" required="" ><br><br>

    <button type="submit" onclick="fun()">Proceed to payment</button><br><br>
    
  </div>

</form>