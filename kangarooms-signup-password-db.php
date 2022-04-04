<?php

$servername ="localhost";
$username ="root";
$password ="";
$db_name="project1";
$c=$_POST['emaill'];
$d=$_POST['tp'];
$conn =new mysqli($servername, $username, $password, $db_name);
// Check connection
if($conn->connect_error){
    echo "Connection failed: ". $conn->connect_error;
    exit;
}

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
            echo "You already have an account</br>";
            if($row['OTP']==$d)
            {
                echo "OTP matched";
            }
            else{
                echo "OTP not matched";
                ?>
                <a href="kangarooms-Signup.php">Try Again</a>
                <?php
                exit;
            }
        }?>
        
        <form action="kangarooms-signup-password-db2.php" method="post">
        Enter Your mail <input type="email" required name="emaill"> 
        Enter your new password <input type="text" required name="sp">
        Confirm your new password <input type="text" required name="cp">
        <input type="submit">
        </form>

 <?php

?>