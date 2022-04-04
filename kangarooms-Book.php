<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <script src="kangarooms-book.js"></script>
    <link rel="stylesheet" href="kangarooms-Book.css">
  </head>
 
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <h1 align="center" class="id44">
        <img src="room_logo.jpg" alt="" height="50px" width="50px" >
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
              <a class="nav-link active" aria-current="page" href="kangarooms-About.php" target="_blank">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="kangarooms-Contact.php" target="_blank">Contact us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" aria-current="page" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Fill me in
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="kangarooms-Login.php" target="_blank">login</a></li>
                <li><a class="dropdown-item" href="kangarooms-Signup.php" target="_blank">signup</a></li>
              </ul>  
            </li>
          </ul>
        </div>
      </div>
    </nav>
      
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        You should signup before booking your room
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <img src="loginimage.jpg" alt="loginimage" height="10%" width="10%" id="im" > <br>

    <div id="id5" align="center">
        <pre>
		<form name="RegForm" action=""
			onsubmit="return a()" method="post">
          <p>   Email             <input type="email"size="20" name="Email" /></p>
          <p>   Password          <input type="password"size="20" name="Password" id="p1" required/></p>
          <p>StartingDate      <input type="date"size="20" name="StartingDate" placeholder="DD-MM-YYYY"/></p>
          <p>EndingDate        <input type="date"size="20" name="EndingDate" placeholder="DD-MM-YYYY"/></p>
    <br />
    <input type="reset" value="Reset" name="Reset" class="btn btn-primary"/>   <input type="submit" value="send" class="btn btn-primary"/>
		</pre>
		</form>
    <br><br> <br>
</div>
  </body>
</html>