<?php
require_once '/xampp/htdocs/Linkme/search/database.php';
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
      <link rel="stylesheet" type="text/css" href="/search/search.css">
      <title>Link Me | Search</title>
      <style>
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
                  width: 150px;
                  padding: 10px;
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

            }

            .hover-me:hover.submenu-2 ul li {
                  max-width: 400px;
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
                        <h1 class="mb-10">lets find the perfect ICT proffessional for you</h1>
                  </div>
            </div>
            <!--search part-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="container-fluid">
                        <a class="navbar-brand" href="#">Link-Me</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                        </button>
                        <!-- <form action="" method="post"> -->
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
                                                                                                      <form action="" method="post">
                                                                                                            <input class="form-check-input" type="checkbox" name="experience" value="1" id="flexCheckDefault">
                                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                                  1 or less than 1 year
                                                                                                            </label>
                                                                                                      </form>
                                                                                                </div>
                                                                                          </div>
                                                                                    </li>
                                                                                    <li><a class="dropdown-item" href="">
                                                                                                <div class="form-check">
                                                                                                      <form action="" method="post">
                                                                                                            <input class="form-check-input" type="checkbox" name="experience" value="2" id="flexCheckDefault">

                                                                                                      </form>
                                                                                                      <label class="form-check-label" for="flexCheckDefault">
                                                                                                            2 years
                                                                                                      </label>
                                                                                                </div>
                                                                                          </a></li>
                                                                                    <li><a class="dropdown-item" href="">
                                                                                                <div class="form-check">
                                                                                                      <form action="" method="post">
                                                                                                            <input class="form-check-input" type="checkbox" name="experience" value="3" id="flexCheckDefault">
                                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                                  2+ years
                                                                                                            </label>
                                                                                                      </form>
                                                                                                </div>
                                                                                          </a></li>
                                                                              </ul>
                                                                        </div> -->
                                                                        <!-- </li>
                                                                        <li class="hover-me"><a class="dropdown-item" href="">hi 2 <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                                              <div class="submenu-2">
                                                                                    <ul class="dropdown-menu">
                                                                                          <li><a class=" dropdown-item" href="">
                                                                                                      <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                                  checkbox
                                                                                                            </label>
                                                                                                      </div>
                                                                                                </a>
                                                                                          </li>
                                                                                          <li><a class="dropdown-item" href="">
                                                                                                      <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                                  checkbox
                                                                                                            </label>
                                                                                                      </div>
                                                                                                </a></li>
                                                                                    </ul>
                                                                              </div>
                                                                        </li>
                                                                        <li class="hover-me"><a class="dropdown-item" href="">hi 3 <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                                              <div class="submenu-2">
                                                                                    <ul class="dropdown-menu">
                                                                                          <li><a class=" dropdown-item" href="">
                                                                                                      <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                                  checkbox
                                                                                                            </label>
                                                                                                      </div>
                                                                                                </a>
                                                                                          </li>
                                                                                          <li><a class="dropdown-item" href="">
                                                                                                      <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                                  checkbox
                                                                                                            </label>
                                                                                                      </div>
                                                                                                </a></li>
                                                                                    </ul>
                                                                              </div>
                                                                        </li> -->
                                                            <!-- </ul>
                                                      </div>
                                                </li>
                                          </ul>
                                    </div>
                              </ul> -->

                              <form class="d-flex me-auto" action="" method="post">

                                    <input class="form-control me-2" type="search" placeholder="job-title" aria-label="Search" name="keyword">
                                    <input class="btn btn-outline-success" type="submit" name="search" placeholder="search">


                              </form>
                              <form class="d-flex me-auto" action="" method="post">



                              </form>

                              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                          <a class="nav-link active" aria-current="page" href="/index.php">Home</a>
                                    </li>
                              </ul>
                        </div>
                        <!-- </form> -->
                  </div>

            </nav>

            <!--end of search-->

            <!--profile search cards-->
            <div class="row ">
                  <div class="col-12 col-md-6">
                        <div class="services">
                              <div class="card mb-3" style="max-width: 540px;">
                                    <?php
                                    if (isset($_POST['search'])) {
                                          $keyword = $_POST['keyword'];
                                          // $experience = $_POST['experience'];
                                          if ($keyword != "") {
                                                $query = $db->prepare("SELECT * FROM profiles WHERE expertise = :expertise ");
                                                $data = array(':expertise' => $keyword);
                                                $query->execute($data);
                                                $row = $query->fetchAll();

                                                foreach ($row as $rows) { ?>
                                                      <div class="row g-0">
                                                            <div class="col-md-4">
                                                                  <img class="img-fluid rounded-start"> <?php echo $rows['image']; ?>
                                                            </div>
                                                            <div class="col-md-8">
                                                                  <div class="card-body">

                                                                        <h5 class="card-title"><?php echo $rows['displayname']; ?></h5>
                                                                        <p class="card-text"><?php echo $rows['expertise']; ?></p>
                                                                        <form action="" method="post">
                                                                              <input type="hidden" value="<?php echo $keyword; ?>" name="keyword">

                                                                              <input class="btn btn-primary" type="submit" value="View Profile overview" name="get_profile_overview">
                                                                        </form>
                                                                  </div>
                                                            </div>
                                                      </div>
                              </div>
                        <?php
                                                } ?>

                  <?php
                                          } else{
                                                echo "enter a job-title";
                                          } ?>
            <?php
                                    } ?>
                        </div>

                  </div>
            </div>

            <!--end of profile search cards-->
            <!--profile overview-->

            <div class="col-12 col-md-6">
                  <div class="card mt-50px" style="max-width: 38rem;">
                        <?php
                        if (isset($_POST['get_profile_overview'])) {
                              // $one = $row['username'];
                              $keyword = $_POST['keyword'];
                              $query = $db->prepare("SELECT * FROM profiles WHERE expertise LIKE ?");
                              $query->execute([$keyword]);
                              $rows = $query->fetchAll();
                              foreach ($rows as $row) { ?>
                                    <img class="card-img-top"> <?php echo $row['image']; ?>
                                    <div class="card-body">
                                          <h5 class="card-title"><?php echo $row['displayname']; ?></h5>
                                          <p class="card-text"><?php echo $row['about']; ?></p>
                                    </div>
                                    <div class="card-body">
                                          <form action="" method="post" class="card-link">
                                                <input type="hidden" value="<?php echo $keyword; ?>" name="keyword">
                                                <input class="btn btn-primary" type="submit" value="view main profile" name="View_main_profile">
                                          </form>
                                    </div>
                  </div>
            <?php
                              } ?>
      <?php
                        } ?>

            </div>
      </div>

      // <?php
            // if (isset($_POST['View_main_profile'])) {
            //       $keyword = $_POST['keyword'];
            //       $query = $db->prepare('SELECT * FROM profiles WHERE epxertise LIKE ?');
            //       $query->execute($keyword);
            // }
            // 
            ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>