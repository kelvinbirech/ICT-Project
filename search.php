<?php
require_once 'search/database.php'
?>

<!doctype html>
<html lang="en">

<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
      <link href="search/search.css" rel="stylesheet">
      <title>Link Me | Search</title>
      <style>
            .menubar{
                  margin-right: 50px;
            }
            .menubar ul li {
                  list-style-type: none;
            }

            .menubar ul li a {
                  text-decoration: none;
            }

            .submenu-1 {
                  display: none;
            }

            .menubar ul li:hover .submenu-1 {
                  display: block;
                  position: absolute;
                  margin-top: -10px;
                  margin-left: -15px;
            }

            .menubar ul li:hover .submenu-1 ul {
                  display: block;
                  margin: 10px;
                  background-color: whitesmoke;
            }

            .menubar ul li:hover .submenu-1 ul li {
                  max-width: 330px;
                  padding: 5px;
                  border-bottom: 1px dotted gray;
                  background: transparent;
                  text-align: left;

            }

            .menubar ul li:hover .submenu-1 ul li:last-child {
                  border-bottom: none;
            }

            .menubar ul li:hover .submenu-1 ul li a:hover {
                  color: gray;
            }

            .submenu-2 {
                  display: none;
            }

            .hover-me:hover .submenu-2 {
                  display: block;
                  position: absolute;
                  margin-top: -50px;
                  margin-left: 135px;
                  background-color: whitesmoke;
                  z-index: 1;
            }

            .fa-angle-right {
                  float: right;
                  margin-top: 5px;

            }
      </style>
</head>

<body>
      <div class="container">
            <div class="row">
                  <div class="col ">
                        <h1 class="mb-10" style="color:white;">lets find the perfect ICT proffessional for you</h1>
                  </div>
            </div>
            <!--search part-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="container-fluid">
                        <a class="navbar-brand" href="#">Link-Me</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                        </button>
                        <form action="" method="post">
                              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                          <div class="menubar">
                                                <ul>
                                                      <li><a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="">filter</a>
                                                            <div class="submenu-1">
                                                                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                        <li class="hover-me"><a class="dropdown-item" href="">experience<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                                              <div class="submenu-2">
                                                                                    <ul class="dropdown-menu">
                                                                                          <li>
                                                                                                <div class="dropdown-item">
                                                                                                      <div class="form-check">
                                                                                                            
                                                                                                            <input class="form-check-input" type="checkbox" name="experience" value="1" id="flexCheckDefault">
                                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                                  1 or less than 1 year
                                                                                                            </label>
                                                                                                            
                                                                                                      </div>
                                                                                                </div>
                                                                                          </li>
                                                                                          <li><a class="dropdown-item" href="">
                                                                                                      <div class="form-check">
                                                                                                           
                                                                                                            <input class="form-check-input" type="checkbox" name="experience" value="2" id="flexCheckDefault">

                                                                                                            
                                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                                  2 years
                                                                                                            </label>
                                                                                                      </div>
                                                                                                </a></li>
                                                                                          <li><a class="dropdown-item" href="">
                                                                                                      <div class="form-check">
                                                                                                           
                                                                                                            <input class="form-check-input" type="checkbox" name="experience" value="3" id="flexCheckDefault">
                                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                                  3+ years
                                                                                                            </label>
                                                                                                            
                                                                                                      </div>
                                                                                                </a></li>
                                                                                    </ul>
                                                                              </div>
                                                                        </li>
                                                                        <li class="hover-me"><a class="dropdown-item" href="">salary <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                                              <div class="submenu-2">
                                                                                    <ul class="dropdown-menu">
                                                                                          <li><a class=" dropdown-item" href="">
                                                                                                      <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" name="salary" value="10000" id="flexCheckDefault">
                                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                                  ksh10000 or less
                                                                                                            </label>
                                                                                                      </div>
                                                                                                </a>
                                                                                          </li>
                                                                                          <li><a class="dropdown-item" href="">
                                                                                                      <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" name="salary" value="50000" id="flexCheckDefault">
                                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                                  ksh10001 - ksh50000
                                                                                                            </label>
                                                                                                      </div>
                                                                                                </a></li>
                                                                                          <li><a class=" dropdown-item" href="">
                                                                                                      <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" name="salary" value="50001" id="flexCheckDefault">
                                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                                  ksh50001 and above
                                                                                                            </label>
                                                                                                      </div>
                                                                                                </a>
                                                                                          </li>
                                                                                    </ul>
                                                                              </div>
                                                                        </li>

                                                                  </ul>
                                                            </div>
                                                      </li>
                                                </ul>
                                          </div>
                                    </ul>
                                    <div class="d-flex me-auto">

                                          <input class="form-control me-2" type="search" placeholder="job-title" aria-label="Search" name="keyword">
                                          <input class="btn btn-outline-success" type="submit" name="search" placeholder="search">
                                    </div>
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                          <li class="nav-item" style="margin:0 0px 0 200px;">
                                                <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                                          </li>
                                    </ul>
                              </div>
                        </form>
                  </div>
            </nav>
            <!--end of search-->
            <!--profile search cards-->
            <div class="row ">
                  <div class="col-12 col-md-6">

                        <div class="card mb-3" style="max-width: 540px;">
                              <?php
                              error_reporting(0);
                              if (isset($_POST['search'])) {
                                    $keyword = $_POST['keyword'];
                                    $experience = $_POST['experience'];
                                    $salary = $_POST['salary'];
                                    if ($keyword != "" || $experience != "" || $salary != "") {
                                          if ($experience <= 1) {
                                                $query = $db->prepare("SELECT * FROM profiles WHERE expertise = :expertise AND experience <= 1");
                                          } elseif ($experience = 2) {
                                                $query = $db->prepare("SELECT * FROM profiles WHERE expertise = :expertise AND experience = 2");
                                          } elseif ($experience >= 3) {
                                                $query = $db->prepare("SELECT * FROM profiles WHERE expertise = :expertise AND experience >= 3");
                                          }

                                          if ($salary <= 10000) {
                                                $query = $db->prepare("SELECT * FROM profiles WHERE expertise = :expertise AND salary <= 10000");
                                          } elseif ($salary >= 10001 and $salary <= 50000) {
                                                $query = $db->prepare("SELECT * FROM profiles WHERE expertise = :expertise AND salary >= 10001 AND salary <= 50000");
                                          } elseif ($salary >= 50001) {
                                                $query = $db->prepare("SELECT * FROM profiles WHERE expertise = :expertise AND salary >= 50001");
                                          }

                                          $data = array(':expertise' => $keyword);
                                          $query->execute($data);
                                          $cont= $query->rowCount();
                                          $row = $query->fetchAll();
                                          if ($cont != 0){
                                                foreach ($row as $rows) { ?>
                                                      <div class="row g-0" style="width:808px; margin-top:15px;border-radius:20px;">
                                                            <div class="col-md-8">
                                                                  <div class="card-body" style="background:white;">
                                                                        <h5 class="card-title" style="margin-left: 20px;"><?php echo $rows['displayname']; ?></h5>
                                                                        <p class="card-text" style="margin-left: 20px;"><?php echo $rows['expertise']; ?></p>
                                                                        <form action="" method="post">
                                                                              <input type="hidden" value="<?php echo $rows['id']; ?>" name="id">
                                                                              <input class="btn btn-primary" type="submit" value="View Profile " name="get_profile_overview">
                                                                        </form>
                                                                  </div>
                                                            </div>
                                                      </div>
                        </div>
                  <?php
                                                } ?>
            <?php
                                          } else{ echo "no records found at the moment";}
                                          ?>

      <?php
                                    } ?>
<?php
                              } ?>

                  </div>
            </div>
            <!--end of profile search cards-->
            <!--profile overview-->
            <div class="col-12 col-md-6">

                  <div class="card text-center">
                        <?php
                        if (isset($_POST['get_profile_overview'])) {

                              $id = $_POST['id'];
                              $query = $db->prepare("SELECT * FROM profiles WHERE id=?");
                              $query->execute([$id]);
                              $profile = $query->fetch();
                              if ($profile) { ?>
                                    <div class="card-header">
                                          <h5 class="card-title"><?php echo $profile['displayname']; ?></h5>
                                    </div>
                                    <div class="card-body">
                                          <h5 class="card-title">Expertise: &nbsp;<?php echo $profile['expertise']; ?></h5>
                                          <hr>
                                          <p class="card-text" style="float: left; color:crimson; font-size:30px; margin-left:40px;">About</p>
                                          <p class="card-text" style="margin: 80px 0 0 -10px;"><?php echo $profile['about']; ?></p>
                                    </div>
                                    <div class="card-footer text-muted">
                                          <h5 class="card-title">Email : &nbsp; <span style="font-size:1rem; font-weight:400"><?php echo $profile['email']; ?></span>
                                          </h5>
                                          <h5 class="card-title">Contact:&nbsp;<span style="font-size:1rem; font-weight:400"><?php echo $profile['telephone']; ?></span></h5>
                                          <h5 class="card-text"><a href="<?php echo $profile['website']; ?>"><?php echo $profile['website']; ?></a></h5>
                                    </div>
                  </div>
            <?php
                              } ?>
      <?php
                        } ?>
            </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
      </script>
</body>

</html>