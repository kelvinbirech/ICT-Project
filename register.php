<body>
    
<head>
    <style>
        body {
            background-image: url(assets/img/hero-bg.jpg);
            background-size: cover;
            
        }

        .card-body{
            background-color: whitesmoke;
            width: 400px;
            height:550px;
 

        }
    </style>
</head>

<?php
require_once './template/header.php';
require_once './core/database.php';
?>


<?php
    if(isset($_POST['submit'])) {
        
        
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];
        
        if ($password != $confirmpassword) {
            $_SESSION['error'] = "Passwords do not match";
        }
        
        else {            
            
            try{
                
                //Encrypt password
                $password = password_hash($password,PASSWORD_DEFAULT);
                
                $STH = $DBH->prepare("INSERT INTO user(first_name, last_name, email,password) values(?,?,?,?)");
                $data = array($first_name,$last_name,$email,$password);
                $STH->execute($data); 
                
                $_SESSION['success'] = "Registration Successful Please Proceed To Sign In Page";
                header('location: login.php');
                unset($first_name);
                unset($last_name);
                unset($email);
                unset($password);
                unset($confirmpassword);
            }
            catch(PDOException $e){
                $_SESSION['error'] = "Hey, $first_name. can't register now try later  :(.";
                echo $e->getMessage();
                exit();
                file_put_contents('../PDOErrors.txt',"\n". date('Y-m-d H:i:s').'] - '.$e->getMessage(), FILE_APPEND); # log errors to afile
            }
        }
    }
    ?>
    <div class="container">

        <div class="row">
            <div class="col-sm-6 m-auto p-3 mt-2">
        
                <div class="card-body">
                    <h3 class="text-center">Create Account</h3>
                    <div id="alert">
                        <?php require_once "./feedback.php"; ?>
                    </div>
                    <form action="" method="post">
                        
                        
                            <div class="from-group mb-3">
                                <label for="firstname">First Name</label>
                                <input name="firstname" id="firstname" type="text" value="<?php echo $first_name ?? ""; ?>" class="form-control" required>
                            </div>
                        
                        
                            <div class="from-group mb-3">
                                <label for="lastname">Last Name</label>
                                <input name="lastname" id="lastname" type="text" class="form-control" value="<?php echo $last_name ?? ""; ?>" required>
                            </div>
                            
                        
                        <div class="from-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" value="<?php echo $email ?? ""; ?>"  id="email" name="email" class="form-control" required>
                        </div>
                        <div class="from-group mb-3">
                            <label for="password">Create A Password</label>
                            <input type="password" value="<?php echo $password ?? ""; ?>" id="password" name="password" class="form-control" required>
                        </div>
                        <div class="from-group mb-3">
                            <label for="confirmpassword">Confirm The Password</label>
                            <input type="password" value="<?php echo $confirmpassword ?? ""; ?>"  id="confirmpassword" name="confirmpassword" class="form-control" required>
                </div>
                <input style="width:100%" type="submit" value="Create Account" class="btn btn-primary" name="submit">
            </form>
        </div>
    </div>
</div>
</div>

</body>