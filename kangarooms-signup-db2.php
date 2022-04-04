<!DOCTYPE html>
<html>
 
<head>
</head>
 
<body>
    <?php
        // Defining variables
        $name ="";
 
        // Checking for a POST request
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $name = test_input($_POST["otp"]);
        }
 
        // Removing the redundant HTML characters if any exist.
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        ?>
 
        <h2>PHP Form Example: GFG Review</h2>
        <form method="post" action=
            "<?php echo $_SERVER['PHP_SELF']; ?>">
            Name:
            <input type="number" name="otp">
            <br>
            <input type="submit" name="submit"
                   value="Submit">
        </form>
 
        <?php
            echo "<h2>Your Input:</h2>";
            echo $name;
            echo "<br>";
            if($name==93475)
            {
                echo "true";
            }
        ?>
</body>
 
</html>