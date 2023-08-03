<?php
session_start();

include("db.php"); // Assuming this file establishes the database connection.

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $gender = $_POST['gender'];
    $num = $_POST['cnumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Form validation (check if required fields are not empty)
    if (empty($first_name) || empty($last_name) || empty($email) || empty($password)) {
        echo "<script type='text/javascript'> alert('Please enter all required information') </script> ";
    } else {
        // Sanitize user input to prevent SQL injection (You should use prepared statements instead)
        $first_name = mysqli_real_escape_string($connection, $first_name);
        $last_name = mysqli_real_escape_string($connection, $last_name);
        $gender_res = mysqli_real_escape_string($connection, $gender);
        $num = mysqli_real_escape_string($connection, $num);
        $email = mysqli_real_escape_string($connection, $email);

        // Hash the password before inserting it into the database
        $hashed_password = password_hash($password, PASSWORD_ARGON2I);

        $query = "INSERT INTO register_acc (firstname, lastname, gender, contact_no, email, pass) VALUES ('$first_name', '$last_name', '$gender_res', '$num', '$email', '$hashed_password')";
        mysqli_query($connection, $query);

        echo "<script type='text/javascript'> alert('Successfully registered your account!') </script> ";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Register Account</title>
  </head>
  <body>
    <div class="form--container">
      <form method="POST" class="form">
        <h1>Sign up</h1>
        <div>
  <label for="fname">First name</label>
  <input
    type="text"
    name="fname"
    id="firstname"
    minlength="3"
    maxlength="15"
  />
</div>
<div>
  <label for="lname">Last name</label>
  <input
    type="text"
    name="lname"
    id="lastname"
    minlength="3"
    maxlength="15"
  />
</div>

        <div>
          <label for="email">Email</label>
          <input type="email" name="email" id="email_acc" required/>
        </div>
        <div>
        <fieldset id="user_gender" class="gender">
    <label>Gender</label>
    <input type="radio" name="gender" id="male_gen" value="Male" />
    <label for="male">Male</label>
    <input type="radio" name="gender" id="female_gen" value="Female" />
    <label for="female">Female</label>
</fieldset>

        </div>
        <div>
          <label for="cnumber">Contact no.</label>
          <input type="tel" name="cnumber" id="contact_number" required />
        </div>
        <div>
          <label for="password">Password</label>
          <input type="password" name="password" id="acc_password" minlength="11" required/>
        </div>
        <input type="submit" value="Register" />
        <p>Already have an account? <a href="login.php">Log In here</a></p>
      </form>
    </div>
  </body>
</html>
