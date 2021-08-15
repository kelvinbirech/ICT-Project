<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link rel="stylesgeet" href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">
    <style>
        html * {
            -webkit-font-smoothing: antialiased;
        }

        .h6,
        h6 {
            font-size: .75rem !important;
            font-weight: 500;
            font-family: Roboto, Helvetica, Arial, sans-serif;
            line-height: 1.5em;
            text-transform: uppercase;
        }





        .main-raised {
            margin: 50px 30px 0;
            border-radius: 6px;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, .14), 0 6px 30px 5px rgba(0, 0, 0, .12), 0 8px 10px -5px rgba(0, 0, 0, .2);
        }

        .main {
            background: #FFF;
            position: relative;
            z-index: 3;
        }
        .profile-page{
            background-image: url(./assets/img/hero-bg.jpg);
            background-size:cover;
        }

        .profile-page .profile {
            text-align: center;
            padding-bottom: 10px;
        }

        form {
            text-align: center;
            padding-bottom: 10px
        }

        .profile-page .profile img {
            max-width: 160px;
            width: 100%;
            margin: 0 auto;
            -webkit-transform: translate3d(0, -50%, 0);
            -moz-transform: translate3d(0, -50%, 0);
            -o-transform: translate3d(0, -50%, 0);
            -ms-transform: translate3d(0, -50%, 0);
            transform: translate3d(0, -50%, 0);
        }



        .title {
            margin-top: 30px;
            margin-bottom: 25px;
            min-height: 32px;
            color: #3C4858;
            font-weight: 700;
            font-family: "Roboto Slab", "Times New Roman", serif;
        }



        p {
            font-size: 14px;
            margin: 0 0 10px;
        }


        input {
            padding: 5px;
            margin: 5px 0;
            outline: none;
            border-color: transparent;
            text-align: center;
        }

        input:focus,
        input:active {
            border-color: transparent;
            border-bottom: 2px solid #1c87c9;
        }




        textarea {
            padding: 50px 5px;
            margin-left: auto;
            margin-right: auto;
            outline: none;
            border-color: transparent;
            text-align: center;
            

        }
       
    </style>


</head>


<?php
require_once './core/database.php'

?>



<?php



//  If user is not logged in redirect to login page
if (!isset($_SESSION['user'])) {
    header("location:./login.php");
    exit();
}

// Check if the user has clicked the submit button
if (isset($_POST['submit'])) {

   // $profileimage = $_FILES['profile_image'];
    $displayname = $_POST['displayname'];
    $expertise = $_POST['expertise'];
    $about = $_POST['about'];
    $website = $_POST['website'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $user = $_SESSION['user'];


 



    try {
        $STH = $DBH->prepare("INSERT INTO profiles(displayname,expertise,about,website,email,telephone,user) values(?,?,?,?,?,?,?)");
        $data = array($displayname, $expertise, $about, $website,$email, $telephone,$user);
        $STH->execute($data);

        $_SESSION['success'] = "Profile Updated Successfully";
    } catch (PDOException $e) {
        $_SESSION['error'] = " An error occured.";
        file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND); # log errors to afile
    }
}
?>


<body class="profile-page">


 

    </div>
    <div class="main main-raised">
        <div class="profile-content">
            <div id="alert">
                <?php require_once "./feedback.php"; ?>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <form action="" method="post">
                        <div class="profile">
                      
                                <div>

                                    <input type="text" name="displayname" value="<?php echo $displayname ?? ""; ?>" placeholder="Your Display Name" required>

                                </div>
                                <div>
                                    <input type="text" name="expertise" value="<?php echo $expertise ?? ""; ?>" placeholder="What is your expertise" required>

                                </div>
                                <div>
                                    <textarea name="about"    value="<?php echo $about ?? ""; ?>" cols="60" rows="6" placeholder="Tell people about you" required></textarea>
                                </div>
                                <div>
                                    <input type="text" name="website" value="<?php echo $website ?? ""; ?>" placeholder="Your website/Portfolio">
                                </div>
                
                                <div>
                                    <input type="text" name="email" value="<?php echo $email ?? ""; ?>" placeholder="Contact Email" required>
                                </div>
                
                                <div>
                                    <input type="text" name="telephone" value="<?php echo $telephone ?? ""; ?>" placeholder="Contact Telephone" required>
                                </div>
                        </div>
                    </div>
                </div>


                <button class="btn btn-primary" > <a  href="logout.php">LOG OUT</a></button>
               <input style="width:200px" type="submit" value="Update Profile" class="btn btn-primary" name="submit">
            </div>
        </form>




        </div>
    </div>


    <script>
        function preview_image(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('output_image');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>




    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>




</body>