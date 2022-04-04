<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Kangarooms-login-page</title>
    <style>
      .error {
  color:red;
  }
      #id1
{
    text-align: center;
    margin-top: 15px;
    font-size: 25px;
}
body{
    padding: 0px;
    margin: 0px;
    background-color: rgb(157, 163, 159);
}
input[type="text"]
{
    color:rgb(214, 32, 144);
}
.id44
{
    text-decoration: underline;
color: rgb(2, 2, 15);
background-color: rgb(53, 107, 133);
padding: 10px;
font-size: 30px;
font-weight: bold;
font-family: cursive;
border-bottom: solid 4px palegoldenrod;
border-left: solid 4px palegreen;
border-right: solid 4px paleturquoise;
border-top: solid 4px palevioletred;
text-align: center;
}
*
{
    padding: 0px;
    margin: 0px;
}

.class6
{
    text-decoration: none;
    color: wheat;
    background-color: #0B5ED7;
    display: inline-block;
}
.class6:hover{
    background-color: #0B5ED7;
}
#im
{
    border-radius: 25px;
    margin-left: 47%;
    margin-top: 1%;
}
    </style>
    <script>
        function validateform()
        {
            let x=document.forms["myform"]["name"].value;
            var password=document.myform.password.value;
            var mail=document.forms["myform"]["email"];
            if(mail.value == "")
            {
				alert("enter ur mail");
				return false;
			}
            else if(password.length<6)
            {  
                alert("Password must be at least 6 characters long.");  
                return false;  
            }
        }
    </script>
  </head>
  <link rel="stylesheet" href="login.css">
  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <h1 align="center" class="id44">
        <img src="room_logo.jpg" alt="kangarooms-Login" height="50px" width="50px" >
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
      <img src="loginimage.jpg" alt="loginimage" height="10%" width="10%" id="im" >
<br><br>
<div align="center">
<form method="POST" action="kangarooms-login-db.php ">
Email:-
 <input type="text" name="emaill" required> <br><br>
 Password:-
 <input type="text" name="passwordd" required> <br><br>
 <Button type="submit"> SUBMIT</BUTTON> <br><br>
</form>
</div>
  </body>
</html>