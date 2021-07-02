<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Login || Registration</title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
          <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
          <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header" id="header">
                        <header>
                                <div class="logo" id="logo">
                                        <h2>MY CITY</h2>
                                </div>
                                <nav>
                                        <div class="navlinks">
                                                 <a href="index.php">Home </a>
                                                 <a href="login.php">Login</a>
                                                 <a href="register.php">Sign-Up</a>
                                        </div>
                               </nav>
                               <div class="menu"></div>
                        </header>       
</div> 
          
        <div class="container">
                        <div class="input-group">
                                <form method="post"  action="">
              
                                       <h1>Sign Up</h1>
                                            
                                          <h5> <i class="uil uil-user"></i><input type="text"   class="form-control"  name="username" placeholder="Username" required></h5>
                      
                                          <h5> <i class="uil uil-envelope-alt"></i><input type="email" name="email"  class="form-control" placeholder="Email Address" required></h5>
                      
                                          <h5><i class="uil uil-padlock"></i><input type="password" name="password" placeholder="Create Password" classs="form-control" required ></h5>
                      
                                          <input type="submit" value="Sign Up" class="form-control">
                                          <p>Already a Member?&nbsp; <a href="login.php">LOGIN HERE</a></p>
                                </form>
                        </div>
        </div>
          <script src="/assets/js/app.js"></script>
</body>
</html>
<?php
                        $db = mysqli_connect("localhost","root","","login") or die();
                        {
                                if(isset($_POST['register'])){
                                        $username = $_POST['username'];

                                        $email  = $_POST['email'];

                                        $password = md5 ($_POST['password']); //encrypted password

                                        $query =  "INSERT INTO  user_accounts(username ,  email,  password ) VALUES ('$username','$email','$password')";

                                        mysqli_query($db ,$query);

                                        if ($query) {
                                                echo "Registration Successfull";
                                        } else {
                                                echo "Registration not Successfull";
                                        };
                                };

                        }
?>