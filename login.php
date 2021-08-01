<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Login || Registration</title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
          <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
          <link rel="stylesheet" href="assets/css/login.css">
          

</head>
<body>
    <div class="header" id="header">
        <header>
                <div class="logo" id="logo">
                        <img src="assets/img/Link-Me.PNG" alt="">
                </div>
                <nav>
                        <div class="navlinks">
                                 <a href="index.php">Home </a>
                                 <a href="login.html">Login</a>
                                 <a href="register.html">Sign-Up</a>
                        </div>
               </nav>
               <div class="menu"></div>
        </header>       
</div> 
        <div class="container">
                <div class="input-group">
                       <form  method="post"  action="" >
                                 <h1>Login</h1>
                          
                                <h5> <i class="uil uil-user"></i><input type="text"   class="form-control" placeholder="Username" required></h5>
                            
                                <h5><i class="uil uil-padlock"></i><input type="password" name="password" placeholder="Create Password" classs="form-control" required ></h5>

                                <input type="submit" value="Login"  class ="form-control" <?php header("location :index.php")  ?>>

                                <p>Don't Have an Account? &nbsp;<a href="register.php">SIGN-UP HERE</a></p>
                        </form>  
                 </div>
        </div>
          <script src="assets/js/login-reg.js"></script>
</body>
</html>
<?php

session_start();
 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
$db = mysqli_connect("localhost","root","","login") or die();

                $sql = "SELECT username, password FROM users WHERE username = ?";
                $result = $db->query($sql);


?>