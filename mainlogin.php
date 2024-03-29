<?php

session_start();
require_once("db.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <link rel="icon" href="img/favicon.png" type="image/x-icon"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>
  <body>

  <font face="calibri">
    
  <!-- Navigation Bar Start -->

  <section>
  <div class="container">
  <div class="row">
  <header>
    <nav class="navbar navbar-default" style="margin-bottom: 0; height: 80px; background-color: white; border-color: transparent;">
      <div class="container-fluid">

        <div class="navbar-header">
          <a class="navbar-brand" style="font-size: 24px; color: #053a5a; line-height: 42px;" href="index.php">CAMPUS RECRUITMENT SYSTEM</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">     
          <ul class="nav navbar-nav navbar-right">
          <?php
          if(isset($_SESSION['id_user']) && empty($_SESSION['companyLogged'])) {
            ?>
            <li><a href="user/dashboard.php">Dashboard</a></li>
            <li><a href="logout.php">Logout</a></li>
            <?php 
            } else if(isset($_SESSION['id_user']) && isset($_SESSION['companyLogged'])){
            ?>
            <li><a href="company/dashboard.php">Dashboard</a></li>
            <li><a href="logout.php">Logout</a></li>
            <?php } else { 
            ?>
            <li style="padding-right: 25px;"><a href="search.php" style="font-size: 24px; color: #053a5a; line-height: 42px;">Search for Jobs</a></li>
            <li style="padding-right: 25px;"><a href="mainregister.php" style="font-size: 24px; color: #053a5a; line-height: 42px;">Register</a></li>
            <li style="padding-right: -25px;"><a href="mainlogin.php" style="font-size: 24px; color: #053a5a; line-height: 42px;">Login</a></li>
          <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  </div>
  </div>
  </section>

  <!-- Navigation Bar End -->

  <div style="background-color: #053a5a; height: 80px;">
    <p style="font-size: 34px; color: white; text-align: center; line-height: 73px;">Login</p>
  </div>

  <br>
  <br>

  <div class="container" align="center">
    <div class="row">
      <div style="background-color: aqua; border: 1px solid black; width: 50%; height: 120px; border-radius: 5px;">
        <h1 style="color: black; line-height: 75px;"><a href="login.php" style="color: black;"> Candidate Login </a></h1>
      </div>
      <br>
      <br>
      <div style="background-color: yellow; border: 1px solid black; width: 50%; height: 120px; border-radius: 5px;">
        <h1 style="color: black; line-height: 75px;"><a href="company-login.php" style="color: black;"> Company Login </a></h1>
      </div>
      <br>
      <br>
      <div style="background-color: #00FF00; border: 1px solid black; width: 50%; height: 120px; border-radius: 5px;">
        <h1 style="color: black; line-height: 75px;"><a href="admin/index.php" style="color: black;"> Admin Login </a></h1>
      </div>
    </div>
  </div>

  <br>
  <br>

  <!-- Footer Start -->

<footer id="footer" style="background-color: #053a5a; height: 80px;">

    

  </footer>

  <!-- Footer End -->

  </font>

  </body>
</html>