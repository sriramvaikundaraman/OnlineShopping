<?php
include('session.php');
if(!$_SESSION['login_user']){
   header("location:index.php");
   die;
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <script type="text/javascript">
      function fun(){
        alert("Are you sure?");
      }
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <style type="text/css">
    	li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
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
         <li>
          <form action="search.php" method="POST">
            <input type="text" name="search" id="search" placeholder="search here..">
            <input type="submit" name="Go">
          </form>
              
            </li>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="dropdown" style="margin-top: 8px;">
    <a href="javascript:void(0)" class="dropbtn"><?php echo $login_session; ?></a>
    <div class="dropdown-content">
      <a href="logout.php" onclick="fun()">Logout</a>
      <a href="profile.php">Profile</a>
      <a href="mycart.php">My Orders</a>
    </div>
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
    <div id="main" style="margin-top: 40px; margin-left: 10px;">
	<img src="images/acer-predater.jpg" style="max-width: 50%" align="left">
  <div id="details" style=" margin-left: 50%">
	<h1 style="font-size: 30px;color: blue" align="center">Acer-Predator</h1>
	<li style="font-size: 24px;">
		<ul><b>RAM:</b>16GB</ul>
		<ul><b>Processor:</b>intel i7</ul>
		<ul><b>Display  </b>1080p 15.5" Intel Graphics</ul>
    <ul><b>Storage:</b>64GB</ul>
		<ul><b>3D Fan</b>Easier cooling for Gaming</ul>
    <ul><b>Cost:</b>Rs.84000/-</ul>
	</li>
	<form action="buy.php">

		<input type="submit" align="center" name="submit" value="Buy Now" style="width: 100px;height: 40px;background-color: blue;color: white;margin-left: 40%">
	</form>
</div>
</div>
	<?php
	$_SESSION['booked']="acer-predator";
	?>
</body>
</html>