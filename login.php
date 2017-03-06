<?php
    session_start();
    session_unset();
    session_destroy();

    //Session variables to start the session and log it out. This page doubles as a logout page, if you visit it while logged in you will be logged out.
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>AMS Login</title>    
    <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
    <link rel="stylesheet" href="css/login.css">  
  </head>
  <body>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
<div class="login">
  <div class="login-header">
    <h1>AMS Login</h1>
  </div>
  <div class="login-form">
    <?php
    //this PHP will disable warnings and parse errors so they don't display and will also check if the "Error" variable is set VIA A get Request and if so it will display the username or password is wrong.
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
      if(isset($_GET["Error"])){
        echo "<h3 style='color: slategrey;'>Username or Password wrong, please try again!</h3>";
      }
    ?> 
    <form action="Control/Login/login.php" method="POST" id="formLogin">
    <h3>Username:</h3>
    <input type="text" placeholder="Username" name="username"/><br>
    <h3>Password:</h3>
    <input type="password" placeholder="Password" name="password"/>
    <br>
    <input type="button" value="Login" class="login-button"/>
    </form>
    <br>
    <br>
    <h6 class="LoginCreds">If you cannot login to your account please contact a system administrator.</h6>
    <!--<h6 class="no-access">Can't access your account?</h6> -->
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    
  </div>
</div>
<div class="error-page">
  <div class="try-again">Error: Try again?</div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src="js/index.js"></script>
<Script type="text/javascript">
  $("input").keypress(function(event) {
    if (event.which == 13) {
      event.preventDefault();
      $("form").submit();
    }
  });
</Script>
  </body>
</html>
