<?php
echo "Received POST data: <br>";
var_dump($_POST);
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $gmail = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($gmail) && !empty($password)) {
      echo "Email from form: $gmail<br>";

        $query = "SELECT * FROM register_acc WHERE email = '$gmail' LIMIT 1";
        $result = mysqli_query($connection, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            $hashed_password = $user_data['pass'];
            echo $hashed_password;

            // Compare the hashed password with the user's input password
            if (password_verify($password, $hashed_password)) {
             
             
                header("location: index.php");
                $_SESSION['logged_in'] = true;

                exit;
            } else {
                // Incorrect password - show error message
                echo "<script type='text/javascript'> alert('Incorrect password. Please try again.') </script>";
            }
        } else {
            // User not found in the database - show error message
            echo "<script type='text/javascript'> alert('User not found. Please try again.') </script>";
        }
    } else {
        // Form fields are empty - show error message
        echo "<script type='text/javascript'> alert('Please enter both email and password.') </script>";
    }

    // Fetch email and password from the database to verify the data
    $query = "SELECT * FROM register_acc WHERE email = '$gmail' LIMIT 1";
    $result = mysqli_query($connection, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);
        $fetched_email = $user_data['email'];
        $fetched_password = $user_data['pass'];
        echo "Fetched Email: $fetched_email<br>";
        echo "Fetched Password (hashed): $fetched_password<br>";
    } else {
        echo "No user found with email: $gmail";
    }
}
?>

 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <title>Log in</title>
  </head>
  <body>

  <div class="login--container">
      <form  method="POST" class="login--form">
        <h1>Log in</h1>

        <div>
          <label for="user--email">Email</label>
          <input type="email" name="email" id="user--email" />
        </div>
        <div>
          <label for="user--password">Password</label>
          <input type="password" name="password" id="user--password" />
        </div>
        <p>Don't have an account?   <a href="signup.php">Sign up here</a> </p>
       <input type="submit" value="Log in" class="login--btn" >
      </form>
    </div>
  </body>
</html>
