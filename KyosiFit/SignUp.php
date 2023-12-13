<?php
    session_start();

    include("db.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!empty($email) && !empty($password) && !is_numeric($email)) {
            $query = "INSERT INTO form (username, email, password) VALUES ('$username', '$email', '$password')";
            $stmt = mysqli_prepare($con, $query);
            mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);
            mysqli_stmt_execute($stmt);

            echo "<script type='text/javascript'> alert('Successfully Register')</script>";
        } else {
            echo "<script type='text/javascript'> alert('Please Enter some Valid Information')</script>";
        }
    }
?>

<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>KyosiFit</title>
        <link rel="stylesheet" href="style.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    </head>

    <body>
        <header class="header">
            <a href="index.html" class="logo">
                <i class="fas fa-dumbbell"></i>KYOSIFIT
            </a>
            <nav class="navbar">
                <a href="index.html">Back</a>
                <a href="loginpage.php">Log In</a>
            </nav>
        </header>
          <div class="home">
            <div class="container">
              <div class="top-header">
                <span>Welcome to our platform</span>
                <header>Sign Up</header>
              </div>
          
              <form method="POST">
                  <div class="input-field">
                      <input type="text" class="input" placeholder="username" name="username" required>
                  </div>
                  <div class="input-field">
                      <input type="email" class="input" placeholder="email" name="email" required>
                  </div>
                  <div class="input-field">
                      <input type="password" class="input" placeholder="password" name="password" required>
                  </div>
                  <button type="submit" class="submit">Sign Up</button>
                </form>
              <div class="bottom">
                <label>Already have an account? <a href="loginpage.php">Log In</a></label>
                <a href="#">Forgot Password?</a>
              </div>
            </div>
         </div>
        
    </body>
</html></span>