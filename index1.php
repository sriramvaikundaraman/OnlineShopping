<?php
include('session.php');
if(!$_SESSION['login_user']){
   header("location:index.php");
   die;
}
?>
<html>
  <head>


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
  <script type="text/javascript">
      function fun() {
    var ask = window.confirm("Do you really want to log out?");
    if (ask) {
        window.alert("Logged out!.");

        window.location.href = "logout.php";

    }
}
    </script>
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
    margin-top: -20px;
}
.typeahead {
    background-color: #FFFFFF;
     margin-top: -20px;

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
<title>Future Tech Welcomes u</title>

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
  
        <input type="text" name="typeahead" style="margin-top: -20px;font-size: 17px;"  class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder="Search here">
        <input type="submit" style="margin-top: 20px" name="Go">
    
     
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

     <div class="container" style="margin-top: 28px;">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Future Tech</h1>
          <div class="list-group">
            <a href="mobiles.php" class="list-group-item">Mobiles</a>
            <a href="laptops.php" class="list-group-item">Laptops</a>
            <a href="accessories.php" class="list-group-item">Accessories</a>


          </div>
          <div>
          <iframe width="240" height="170" src="https://www.youtube.com/embed/h5M0Ko0RR38?autoplay=1">
</iframe>

</div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="images/add2.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="images/add3.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="images/add5.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

     <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="vivov9.php"><img class="card-img-top" src="images/vivo-v9.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="vivov9.php">Vivo v9</a>
                  </h4>
                  <h5>Rs.23,999</h5>
                  <p class="card-text">Perfect Shot and the Perfect View</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="redminote4.php"><img class="card-img-top" src="images/redminote4.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="redminote4.php">Redminote4</a>
                  </h4>
                  <h5>Rs.11,500</h5>
                  <p class="card-text">The speed in a budget mobile. MIUI 9 for smoother experience</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="sandisk-sdcard-64gb.php"><img class="card-img-top" src="images/sandisk-sdcard-64gb.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="sandisk-sdcard-64gb.php">Sandisk sd card</a>
                  </h4>
                  <h5>Rs.1699</h5>
                  <p class="card-text">Enhance the storage of your mobile by using Ultra speed sd card of sandisk</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="samsung-j2.php"><img class="card-img-top" src=" images/samsung-j2.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="samsung-j2.php">Samsung J2</a>
                  </h4>
                  <h5>Rs.7500</h5>
                  <p class="card-text">Super amoled display and Android 7.0 .No Lags at all. Liquid flow experience</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="acer-predater.php"><img class="card-img-top" src="images/acer-predater.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="acer-predater.php">Acer-predator</a>
                  </h4>
                  <h5>Rs.84,000</h5>
                  <p class="card-text">The most powerful laptop designed especially for gaming. NVidea graphics 8gb </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="hp-mouse.php"><img class="card-img-top" src="images/hp-mouse.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="hp-mouse.php">HP-mouse</a>
                  </h4>
                  <h5>Rs.499/-</h5>
                  <p class="card-text">Easier to access.Now with multi colour LED lights for enhanced look</p>
                </div>
                <div class="card-footer" style="margin-top: 10px" >
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; sriramwebsites</p>
      </div>
      <!-- /.container -->
    </footer>


 </body>
 </html>