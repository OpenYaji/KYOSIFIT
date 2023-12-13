<?php
	include('db.php');
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
            <a href="index.php" class="logo">
                <i class="fas fa-dumbbell"></i>KYOSIFIT
            </a>
            <nav class="navbar">
                <a href="index.php">Home</a>
                <a href="Services.html">Services</a>
                <a href="Contact.html">Contact</a>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Work Out</i></a>
                    <ul class="dropdown-content">
                        <a href="gymworkout.html">Gym</a>
                        <a href="homeworkout.html">Home</a>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn"><i class="fas fa-bars"></i></a>
                    <ul class="dropdown-content">
                        <a href="index.html">Log out</a>
                        <a href="about.html">About</a>
                        <a href="#">Settings</a>
                    </ul>
                </li>
            </nav>
        </header>
        <section class="home">
            <div class="max-width">
                <div class="home-content">
                    <h3>HEY THERE,<br>IT'S TIME</h3>
                    <p>No matter how much it gets abused, the body can restore balance.</p>
                    <button class="btn">LETSGO</button>
                </div>
            </div>
        </section>
    </body>
    </html></span>