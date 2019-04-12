<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Future tech welcomes u</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="typeahead.min.js"></script>
    <script>
    $(document).ready(function(){
    $('input.search').typeahead({
        name: 'typeahead',
        remote:'searcher.php?key=%QUERY',
        limit : 10
    });
});
    </script>

  </head>
  <style type="text/css">
  	
  </style>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index1.php">SST Companies</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
         <li>
         	<form action="search.php" method="POST" style="margin-top: -19px;">
<input type="text" width="40px" name="search" class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder="Search here">
         		<input type="submit" value="Go">
         	</form>
            	
            </li>
            
            </li>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index1.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>

            <li class="nav-item">
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
              <a class="nav-link" href="adminsign.php">Admin</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Future Tech</h1>
          <div class="list-group">
            <a href="mobiles.php" class="list-group-item">Mobiles</a>
            <a href="laptops.php" class="list-group-item">Laptops</a>
            <a href="accessories" class="list-group-item">Accessories</a>
          </div>
          <div>
          <iframe width="240" height="170" src="https://www.youtube.com/embed/WGtf-Sffsd4?autoplay=1"frameborder="0" allowfullscreen>>
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
                <div class="card-footer">
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
        <p class="m-0 text-center text-white">Copyright &copy; sriramwebsites pvt Ltd</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
