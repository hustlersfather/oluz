<?php
  ob_start();
  session_start();
  include "includes/config.php";
  date_default_timezone_set('UTC');


  if(isset($_SESSION['sname']) and isset($_SESSION['spass'])){
   header("location: index.html");
   exit();
}
?>
<!doctype html>
<html>
<link rel="stylesheet" type="text/css" href="files/bootstrap/3/css/bootstrap.css" />
<script type="text/javascript" src="files/js/jquery.js"></script>
<script type="text/javascript" src="files/bootstrap/3/js/bootstrap.js"></script>
<link rel="stylesheet" href="files/css/login.css">

<link rel="shortcut icon" href="img/favicon.ico" />
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<title>Felux-Shop Login</title>


</head>
<body>
<div class="container">


    h4>
                
        <div class="row">
 
            <div class="col-lg-5 col-md-12 col-xs-12 col-centered mt-70">
                <div class="login-panel card card-primary page-container">
                    <div class="card-heading text-center">
                        <h4 class="card-title welcome-title">
                            xLeet <i class="fab fa-redhat"></i> <br /> Welcome Back !
                        </h4>
                        <p>We ‘re so excited to see you again !</p>
                    </div>
                    <div class="card-body">
            
            
            <form class="login" method="post" action="loginform.php">
            
            <?php
                if(isset($_GET['error'])) {
                 echo $errorbox = "<div class='alert alert-dismissible alert-info'><button type='button' class='close' data-dismiss='alert'>×</button><p>Login failed! Please try again!</p></div>";
                }

                if (isset($_GET['success']) AND $_GET['success'] == "register") {
                    echo $errorbox = "<div class='alert alert-dismissible alert-success'>
                    
<button type='button' class='close' data-dismiss='alert'>×</button><p>Successfull Registring ! Login Now</div>";
                }
                  ?>
                  
                  
            <input type="text" name="user" placeholder="Username">
            <input type="password" name="pass" placeholder="Password">
            <button type="submit" id="divButton">Login</button> 
            <button type="button" class="register" onclick="window.location.href = 'signup.html'">Registrer</button>
            </form>

        </div>
    </div>                    

</div>


</body>
</html>

 