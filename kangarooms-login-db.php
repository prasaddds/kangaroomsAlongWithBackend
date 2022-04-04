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
$b=$_POST['passwordd'];
$c=$_POST['emaill'];

//check if account is aleady there
$sql1="select * from vivek where email='$c' and password='$b' ";

$result = mysqli_query($conn, $sql1);
if (!$result)
{
    echo "Errorrr: " . mysqli_error($conn);
    exit;
}
$row=mysqli_fetch_assoc($result);
if($row)
{
    echo "You successfully logged in.......!!!</br>";
    echo "Hello ". $row['firstname'] . $row['lastname'] . "<br/>";
    echo "Now You Can Walk-through our website </br>";
    ?>
    <a href="kangarooms-Homepage.php">Homepage</a>
    <?php
}
else
{
    echo "You need to reset your details...!!!!";
    ?>
    <a href="kangarooms-Signup.php">create account</a>
    <?php
}
$conn->close();
?>