<?php
include('session.php');
if(!$_SESSION['login_user']){
   header("location:index.php");
   die;
}
?>
<!DOCTYPE html>
<html lang="en">

 <html>
  <head>
  	<title>Moto g4</title>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">        </script>
    <script src="typeahead.min.js"></script>
   

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    </style>
    
     <script>
    $(document).ready(function(){
    $('input.typeahead').typeahead({
        name: 'typeahead',
        remote:'searcher.php?key=%QUERY',
        limit : 10
    });
});
    </script>
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
 <style type="text/css">
.bs-example{
    font-family: sans-serif;
    position: relative;
    margin: 0px;
    font-size: 17px;
}
.typeahead, .tt-query, .tt-hint {
    border: 2px solid #CCCCCC;
    border-radius: 8px;
    font-size: 17px;
    height: 30px;
    line-height: 30px;
    outline: medium none;
    padding: 8px 12px;
    width: 396px;
    margin-top: 0px;
}
.typeahead {
    background-color: #FFFFFF;
     margin-top: 0px;

}
.typeahead:focus {
    border: 2px solid #0097CF;
}
.tt-query {
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
     margin-top: -20px;
}
.tt-hint {
    color: #999999;
}
.tt-dropdown-menu {
    background-color: #FFFFFF;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 8px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    margin-top: 12px;
    padding: 8px 0;
    width: 422px;
}
.tt-suggestion {
    font-size: 17px;
    line-height: 24px;
    padding: 3px 20px;
}
.tt-suggestion.tt-is-under-cursor {
    background-color: #0097CF;
    color: #FFFFFF;
}
.tt-suggestion p {
    margin: 0;
}
</style>

  </head>
 
  <body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container" style="max-height: 35px">
        <a class="navbar-brand" href="#">SST Companies</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
         <li>
          <form action="search.php" method="POST" style="margin-top: -19px;">
  <div class=".col-md-6">
    <div class="panel panel-default">
    <div class="bs-example">
        <input type="text" name="typeahead" style="margin-top: 0px;font-size: 17px;"  class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder="Search here">
        <input type="submit" style="margin-top: 10px" name="Go">
    </div>
  </div>
  </div>
             
          </form>
              
            </li>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index1.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="dropdown" style="margin-top: 8px;">
    <a href="javascript:void(0)" class="dropbtn"><?php echo $login_session; ?></a>
    <div class="dropdown-content">
      <a  onclick="fun()">Logout</a>
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
    <div id="main" style="margin-top: 70px; margin-left: 30px;">
	<img src="images/moto-g4.jpg" style="max-width: 50%" align="left">
  <div id="details" style=" margin-left: 50%">
	<h1 style="font-size: 30px;color: blue">Moto G4</h1>
	<li style="font-size: 24px;">
		<ul><b>RAM:</b>4GB</ul>
		<ul><b>Processor:</b>2.0Ghz Exynos</ul>
		<ul><b>Camera:</b>13mp primary and 5mp secondary</ul>
		<ul><b>SIM:</b>Dual sim and dual standby 4G LTE</ul>
    <ul><b>Storage:</b>64GB</ul>
		<ul><b>Battery:</b>3000mAH</ul>
    <ul><b>Cost:</b>Rs.14999/-</ul>
	</li>
	<form action="buy.php">

		<input type="submit" name="submit" value="Buy Now" style="width: 100px;height: 40px;background-color: blue;color: white">
	</form>
</div>
</div>
	<?php
	$_SESSION['booked']="moto-g4";
	?>
</body>
</html>