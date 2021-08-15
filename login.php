<body >


<head>
    <style>
        body {
            background-image: url(assets/img/hero-bg.jpg);
            background-size: cover;
            
        }

        .card-body{
            background-color: whitesmoke;
            width: 400px;
            height: 500px;

        }
    </style>
</head>



    <?php
require_once './template/header.php';
require_once './core/database.php';
?>



<?php 
    if(isset($_POST['submit'])) {
        try{
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            // execute query
            $STH = $DBH->prepare("SELECT * FROM user WHERE email=?");
            $data = array($email);
            $STH->execute($data);
            
            //check if email exists
            $rows_affected = $STH->rowCount();
            if ($rows_affected == 1){
                $row = $STH->fetch();
                $pass = $row['password'];
                
                //Check if password is correct
                if(password_verify($password,$pass))
                {
                    $_SESSION['success'] = "Login Successfull";
                    $_SESSION['user'] = $row['id'];
                    header("location: home.php");
                    
                    unset($email);
                    unset($password);
                    
                }
                else 
                $_SESSION['error'] = "Incorrect Password";
            }
            else 
            $_SESSION['error'] = "Email not registered";            
        }
        
        catch(PDOException $e){
            $_SESSION['error'] = "Can't log in try later or contact admin.";
            file_put_contents('PDOErrors.txt',"\n". date('Y-m-d H:i:s').'] - '.$e->getMessage(), FILE_APPEND); # log errors to PDOErrors.txt file
        }
    }
    ?>
<div class="container" >
    <div class="row" >
        <div class="col-sm-6 m-auto p-3 mt-2">
           
                <div   class="card-body">
                    <h3 class="text-center">Sign In</h3>
                    
                    
                    <div id="alert">
                        <?php require_once "./feedback.php"; ?>
                    </div>
                    <form action="" method="post" >
                        <div class="from-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" value="<?php echo $email ?? ""; ?>" id="email" name="email" class="form-control">
                        </div>
                        <div class="from-group mb-3">
                            <label for="password">Password</label>
                            <input type="password" value="<?php echo $password ?? ""; ?>" id="password" name="password" class="form-control">
                        </div>
                        <input style="width: 100%;" type="submit" value="Sign in" class="btn btn-primary" name="submit">
                    </form>
                </div>
            
        </div>
    </div>
</div>


</body>