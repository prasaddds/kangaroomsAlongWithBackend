<?php

$servername ="localhost";
$username ="root";
$password ="";
$db_name="project1";
$c=$_POST['emaill'];
$d=$_POST['sp'];
$e=$_POST['cp'];
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
            if($e==$d)
            {
                echo "confirm password and password are matched</br>";
                echo "Updating new password and new create password</br>";
                $sql1="UPDATE vivek1 SET password='$d' WHERE email='$c'";
                if($conn->query($sql1) === TRUE)
                {
                    echo " updated with new password....!!!</br>";
                }
                $sql1="UPDATE vivek1 SET confirm_password='$e' WHERE email='$c'";
                if($conn->query($sql1) === TRUE)
                {
                    echo " updated with new confirm password....!!!</br>";
                }
                ?>
                <a href="kangarooms-Homepage.php">Now you can walk-through our website</a>
                <?php
            }
            else{
                echo "confirm password and password are not matched. Try Again";
                ?>
                <a href="kangarooms-Signup.php">Try Again</a>
                <?php

            }
        }
        else
        {
            echo "Bujji...!!! You need to create account</br>";
            ?>
            <a href="kangarooms-Signup.php">create account</a>
            <?php
        }

?>