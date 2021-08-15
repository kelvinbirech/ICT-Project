<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="./assets/css/profile.css">
          <title>Profile</title>
</head>
<body>
          <div class="cover">
                    <form action="">
                              <input type="file" class="image" id="image" placeholder="image"  enctype="">
                    </form>
          </div>
          <div class="p-image">
                    <form action="" method="POST">
                              <input type="file" class="image" id="image" placeholder="image">
                    </form>
          </div>
          <div class="overview">
                    <h2>Overview</h2>
                    <form action="" method="POST">
                              <label for="location">Location</label>
                              <input type="text" id="location" name="location"> 
                              <label for="url">Website</label>
                              <input type="url" id="url" name="url"> 
                              <label for="services">Services</label>
                              <input type="text" id="services" name="services"> 
                    </form>
          </div>
          <div class="contacts">
                    <h2>Contacts</h2>
                    <form action="" method="POST">
                              <label for="tel">Telephone</label>
                              <input type="tel" id="tel" name="tel"> 
                              <label for="location">email</label>
                              <input type="email" id="email" name="email"> 
                    </form>
          </div>
</body>
</html>