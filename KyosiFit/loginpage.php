<?php
    session_start();

    include("db.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!empty($email) && !empty($password)) {
            $query = "SELECT * FROM form WHERE email = '$email' LIMIT 1";
            $result = mysqli_query($con, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] == $password) {
                    header("Location: index.php");
                    exit();
                }
            }

            echo "<script type='text/javascript'> alert('Wrong Username or Password')</script>";
        } else {
            echo "<script type='text/javascript'> alert('Please Enter Valid Username and Password')</script>";
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
            <a href="SignUp.php">Sign Up</a>
        </nav>
    </header>
    <div class="login">
        <form method="POST">
            <section class="home">
                <div class="container">
                    <div class="top-header">
                        <span>You don't have an account?</span>
                        <header>
                            <a href="SignUp.php">Sign In</a>
                        </header>
                    </div>
                    <div class="input-field">
                        <input type="text" class="input" placeholder="email" name="email" required>
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="input" placeholder="password" name="password" required>
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="input-field">
                        <input type="submit" class="submit" value="Login">
                    </div>
                    <div class="bottom">
                        <div class="left">
                            <input type="checkbox" id="check">
                            <label for="check"> Remember Me</label>
                        </div>
                        <div class="right">
                            <label><a href="#">Forgot password?</a></label>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
</body>
</html>
