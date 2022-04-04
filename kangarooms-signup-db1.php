<?php
$to_email = $_POST["emaill"];
$subject = "Simple Email Test via PHP";
$message = "This is Simple message";
$headers = "From: durgaprasad.78257@gmail.com";


//databse
$servername ="localhost";
$username ="root";
$password ="";
$db_name="project1";
// Create connection
$conn =new mysqli($servername, $username, $password, $db_name);
// Check connection
if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}
$a=$_POST['firstname'];
$b=$_POST['lastname'];
$c=$_POST['emaill'];
$d=$_POST['passwordd'];
$e=$_POST['confirm_passwordd'];

//check if account is aleady there
$sql1="select * from vivek where email='$c' ";

$result = mysqli_query($conn, $sql1);
if (!$result)
{
    echo "Errorrr: " . mysqli_error($conn);
    exit;
}
$row=mysqli_fetch_assoc($result);





if($row)
{
    echo "You already have an account with $c and with user name";
    echo " ". $row['firstname'] . $row['lastname'] . "<br/>";
    echo "Did you forget password??";

    echo "Sending OTP to your registered email</br>";
    $to_email = $_POST["emaill"];
    $subject = "Simple Email Test via PHP";
    $headers = "From: durgaprasad.78257@gmail.com";
    $randomNumber=rand(1000000,10000000);
    $message = "your otp is $randomNumber";
    if (mail($to_email, $subject, $message, $headers)) {
        echo "Email successfully sent to $to_email...";
        

// Checking for a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $otpp=" ";
  $otpp = test_input($_POST["oneTime"]);

  echo $otpp;
}

//Removing the redundant HTML characters if any exist.
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Enter your OTP<input type="number" name="oneTime">
        <input type="submit">
        </form>

        
        <?php 
            echo "<h2>Your Input:</h2>";
            echo $otpp;
            echo "<br>";
        

    } else {
        echo "Email sending failed...";
    }
    exit;
}
else
{
    if (mail($to_email, $subject, $message, $headers)) {
        echo "Email successfully sent to $to_email...";
    } else {
        echo "Email sending failed...";
    }
    $sql ="INSERT INTO vivek (firstname, lastname, email,password,confirm_password) VALUES ('$a', '$b', '$c','$d','$e')";
    if($conn->query($sql) === TRUE)
    {
        echo "Your account created successfully....!!!</br>";
        echo "live happy!!!!stay happy!!!!</br>";
        exit;
    
    }
     else
     {
        echo"Error: ". $sql ."<br>". $conn->error;
     } 
}
$conn->close();
?>