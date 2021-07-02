<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Login || Registration</title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
          <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
         
          <link href="assets/css/style1.css" rel="stylesheet">
          
</head>
<body>
                 <div class="header" id="header">
                         <header>
                             
                                <div id="logo">
        <a href="index.html"><img src="assets/img/Link-Me.PNG" alt=""></a>

      </div>
                                <div class="nav">
                                     <nav>
                                          <div class="navlinks">
                                             <a href="index.php">Home</a>
                                             <a href="register.php">Sign-Up </a>
                                          </div>
                                        </nav>
                                 </div>
                               <div class="menu"></div>
                 </header>       
                 </div> 
          
        <div class="container">
                <div class="input-group">
                       <form  method="post"  action="" >
                                 <h1>Login</h1>
                          
                                <h5> <i class="uil uil-user"></i><input type="text"   class="form-control" placeholder="Username" required></h5>
                            
                                <h5><i class="uil uil-padlock"></i><input type="password" name="password" placeholder="Create Password" classs="form-control" required ></h5>

                                <input type="submit" value="Login"  class ="form-control">

                                <p>Don't Have an Account? &nbsp;<a href="register.php">SIGN-UP HERE</a></p>
                        </form>  
                 </div>
        </div>
        
          <script src="/assets/js/app.js"></script>
</body>
</html>
