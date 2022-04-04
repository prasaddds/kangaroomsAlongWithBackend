<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
<script src="kangarooms-signup.js"></script>
<link rel="stylesheet" href="kangarooms-signup.css">
  </head>
  
  <body>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <h1 align="center" class="id44">
        <img src="room_logo.jpg" alt="" height="50px" width="50px" >
        Welcome To Kangarooms
    </h1>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="kangarooms-Signup">Kangarooms</a>
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
                  <li><a class="dropdown-item" href="kangarooms-Login.php" target="_blank">login</a></li>
                  <li><a class="dropdown-item" href="kangarooms-Signup.php" target="_blank">signup</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <h1 style="text-align:center">Creating account</h1> <br>
    <div id="id101" align="center">
        <form method="POST" action="kangarooms-signup-db.php">
 Fname:-    
 <input type="text" name="firstname"> <br><br>
 Lname:-
 <input type="text" name="lastname"> <br><br>
Email:-
 <input type="text" name="emaill"> <br><br>
 Password:-
 <input type="text" name="passwordd"> <br><br>
 Confirm Password:-
 <input type="text" name="confirm_passwordd"> <br><br>
 <Button type="submit"> SUBMIT</BUTTON> <br><br>
</form>
    <br><br> <br>
</div>
  </body>
</html>