<!doctype php>
<php lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="kangarooms-Homepage.css">
    <link rel="icon" href="favicon (1).ico">
    <script src="kangarooms-Homepage.js"></script>
    <title>homepage-kangarooms</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <h1 align="center" class="id44">
    <img src="room_logo.jpg" alt="Kangarooms-logo" height="50px" width="50px" id="logo">
      Welcome To Kangarooms
    </h1>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="">Kangarooms</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="kangarooms-Homepage.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="kangarooms-About.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="kangarooms-Contact.php">Contact us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" aria-current="page" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Fill me in
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="kangarooms-Login.php">login</a></li>
                  <li><a class="dropdown-item" href="kangarooms-Signup.php">signup</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
       Login for better experience
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="5_room.jpg" class="d-block w-100" alt="kangarooms" height="500px" width="200px">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="class10">First slide label</h5>
              <p class="class10">The Room Is For Your Convenience.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="16_room.jpg" class="d-block w-100" alt="kangarooms" height="500px" width="200px">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="class10">Second slide label</h5>
              <p class="class10">Your Satisfaction Is Our Priority.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="15_room.jpg" class="d-block w-100" alt="kangarooms" height="500px" width="200px">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="class10">Third slide label</h5>
              <p class="class10">Be Awsome And Clean Your House.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for cities..">

      <ul id="myUL">
                    <li><a href="kangarooms-Agartala.php">Agartala</a></li>
                    <li><a href="kangarooms-Aizawl.php">Aizawl</a></li>
                    <li><a href="kangarooms-Amaravathi.php">Amaravathi</a></li>
                    <li><a href="kangarooms-Bengaluru.php">Bengaluru</a></li>
                    <li><a href="kangarooms-Bhopal.php">Bhopal</a></li>
                    <li><a href="kangarooms-Bhubaneswar.php">Bhubaneswar</a></li>
                    <li><a href="kangarooms-chhattisgarh.php">chhattisgarh</a></li>
                    <li><a href="kangarooms-Chennai.php">Chennai</a></li>
                    <li><a href="kangarooms-Dehradun.php">Dehradun </a></li>
                    <li><a href="kangarooms-Dispur.php">Dispur</a></li>
                    <li><a href="kangarooms-Gandhinagar.php">Gandhinagar</a></li>
                    <li><a href="kangarooms-Gangtok.php">Gangtok</a></li>
                    <li><a href="kangarooms-Hyderabad.php">Hyderabad</a></li>
                    <li><a href="kangarooms-Imphal.php">Imphal</a></li>
                    <li><a href="kangarooms-Itanagar.php">Itanagar</a></li>
                    <li><a href="kangarooms-Jaipur.php">Jaipur</a></li>
                    <li><a href="kangarooms-Kohima.php">Kohima</a></li>
                    <li><a href="kangarooms-Kolkata.php">Kolkata</a></li>
                    <li><a href="kangarooms-Lucknow.php">Lucknow</a></li>
                    <li><a href="kangarooms-Mumbai.php">Mumbai</a></li>
                    <li><a href="kangarooms-Panaji.php">Panaji</a></li>
                    <li><a href="kangarooms-Patna.php">Patna</a></li>
                    <li><a href="kangarooms-Raipur.php">Raipur</a></li>
                    <li><a href="kangarooms-Ranchi.php">Ranchi</a></li>
                    <li><a href="kangarooms-Shillong.php">Shillong</a></li>
                    <li><a href="kangarooms-Shimla.php">Shimla</a></li>
                    <li><a href="kangarooms-Thiruvananthapuram.php">Thiruvananthapuram</a></li>
      </ul>
    </body>
</php>