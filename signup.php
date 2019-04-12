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
<script src="https://www.gstatic.com/firebasejs/5.3.1/firebase.js"></script>
<script type="text/javascript">
   var config = {
    apiKey: "AIzaSyD6GtsN5DhA_RUGAP6LkJ9uBn4XsA2JuBo",
    authDomain: "firstweb-1fabe.firebaseapp.com",
    databaseURL: "https://firstweb-1fabe.firebaseio.com",
    projectId: "firstweb-1fabe",
    storageBucket: "firstweb-1fabe.appspot.com",
    messagingSenderId: "966938493749"
  };
  firebase.initializeApp(config);
</script>
<script>
  function log(){
  alert("Login function called..");
  var email = document.getElementById("email").value;
  var pass = document.getElementById("password").value;
  if(email==""||pass==""){
    alert("Please fill out all fields");
    return 0;
  }
  firebase.auth().createUserWithEmailAndPassword(email, pass).catch(function(error) {
   console.log(error.message);
    var errorCode = error.code;
  var errorMessage = error.message;
  if (errorCode == 'auth/weak-password') {
    document.getElementById("demo1").innerHTML = "Password is too weak";
    return 0;

  } 
else {
    alert(errorMessage);
    return 0;
  }
  });
}
</script>
</head>
<body>
  <script src="https://www.gstatic.com/firebasejs/5.3.1/firebase.js"></script>
<script type="text/javascript">
   var config = {
    apiKey: "AIzaSyD6GtsN5DhA_RUGAP6LkJ9uBn4XsA2JuBo",
    authDomain: "firstweb-1fabe.firebaseapp.com",
    databaseURL: "https://firstweb-1fabe.firebaseio.com",
    projectId: "firstweb-1fabe",
    storageBucket: "firstweb-1fabe.appspot.com",
    messagingSenderId: "966938493749"
  };
  firebase.initializeApp(config);
</script>
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

            <li class="nav-item">
              <a class="nav-link" href="login.php">Signin</a>
            </li>
            <li class="nav-item active">
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
  <h3 style="font-size: 40px;margin-top: 100px;"><center>Create new account</h3>
  <form action="signupprocess.php" style="margin-top: 50px;" method="POST">
    

  

  <div class="container id="sri">
     <label for="name"><b><center></b></label>
    <input type="text" placeholder="Enter your name" name="name"  required><br><br>
    <label for="mail"><b><center></b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required><br><br>
     <label for="mobile"><b><center></b></label>
    <input type="text" placeholder="Enter mobileno" name="mobno" required><br><br>

    <label for="password"><b></b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required><br><br>        
    <button type="submit" onclick="log()" style="margin-left: 400px;">Login</button><br><br>
    
  </div>

</form>
</body>
</html>