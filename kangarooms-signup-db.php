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
$sql1="select * from vivek1 where email='$c' ";

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
    $to_email = $_POST["emaill"];
    $kk=$_POST["emaill"];
    $subject = "OTP";
    $randoo=rand(1000000,10000000);
    $message = "Your OTP is $randoo";
    $headers = "From: durgaprasad.78257@gmail.com";
    if (mail($to_email, $subject, $message, $headers)) {
        echo "OTP successfully sent to $to_email...";
        $sql1="UPDATE vivek1 SET OTP='$randoo' WHERE email='$kk'";
        if($conn->query($sql1) === TRUE)
        {
            echo "OTP set....!!!</br>";
        }
    } else {
        echo "Email sending failed...";
    }
    echo "OTP sent to your mail</br>";
    ?>
    <form action="kangarooms-signup-password-db.php" method="post">
        Enter Your OTP<input type="text" name="tp" required>
        Enter Your mail <input type="email" name="emaill" required>
        <input type="submit">
    </form>
    <?php
    exit;
}
else
{
    if (mail($to_email, $subject, $message, $headers)) {
        echo "Email successfully sent to $to_email...";
    } else {
        echo "Email sending failed...";
    }
    if($d==$e)
    {
        echo "</br> Confirm password and password are matched";
    }
    else
    {
        echo "</br>Sorry to say. Confirm password and pasword are not matching";
        ?>
        <a href="kangarooms-Signup.php">Try Again</a>
        <?php
        exit;
    }
    $sql ="INSERT INTO vivek1 (firstname, lastname, email,password,confirm_password) VALUES ('$a', '$b', '$c','$d','$e')";
    if($conn->query($sql) === TRUE)
    {
        echo "Your account created successfully....!!!</br>";
        echo "live happy!!!!stay happy!!!!</br>";
        
        ?>
        <a href="kangarooms-Homepage.php">Click here</a>
        <?php
    }
    else
    {
        echo"Error: ". $sql ."<br>". $conn->error;
    }
}
$conn->close();
?>