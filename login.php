<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
<style>
body {font-family: Arial, Helvetica, sans-serif;
}


input{

    width: 300px;
    padding: 12px 20px;
    margin: 8px 0;
    margin-left: 400px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    margin-left: 420px;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 200px;
}
#sri{
	margin-left: 900px;
	margin-top: 600px;
}


button:hover {
    opacity: 0.8;
}
}
</style>
</head>
<body>
	 <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">SST Companies</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
            
            </li>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="index1.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="login.php">Signin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signup.php">SignUp</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	<h3 style="font-size: 40px;margin-top: 100px;"><center>Login</h3>
	<form action="loginprocess.php" style="margin-top: 40px;" method="POST">
		

  

  <div class="container id="sri">
    <label for="username"><b><center></b></label>
    <input type="text" placeholder="Enter Email" name="mail" required><br><br>

    <label for="password"><b></b></label>
    <input type="password" placeholder="Enter Password" name="password" required><br><br>        
    <button type="submit" style="margin-left: 400px;">Login</button><br><br>
    
  </div>

</form>
</body>
</html>