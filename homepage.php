<?php
session_start();
include("connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      nav {
    background: linear-gradient(45deg, #ff7f50, #6a5acd);
    transition: background 0.4s ease;
  }
  
  nav:hover {
    background: linear-gradient(45deg, #6a5acd, #ff7f50);
  }
  
  .nav-link {
    position: relative;
    color: #fff !important;
    transition: all 0.3s ease-in-out;
  }
  
  .nav-link:hover {
    color: #ff7f50 !important;
    transform: translateY(-5px);
  }
  
  .nav-link::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 0;
    height: 2px;
    background-color: #ff7f50;
    transition: width 0.3s ease-in-out;
  }
  
  .nav-link:hover::after {
    width: 100%;
  }
  
  .navbar-toggler {
    border-color: #fff;
    transition: transform 0.3s ease;
  }
  
  .navbar-toggler:hover {
    transform: rotate(90deg);
  }

  body {
  width: 100%;
  min-height: 100vh;
  background: linear-gradient(#f8f8ff, #c7c6ff);
  font-family: 'Outfit';
  }
  @keyframes shake {
    0%, 100% {
      transform: translateX(0);
    }
    25% {
      transform: translateY(-20px);
    }
    75% {
      transform: translateY(25px);
    }
  }

  /* Apply the animation to the image */
  .shake {
    animation: shake 1.2s infinite; /* duration and repetition */
  }
</style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">𝓑𝔲ᗪᗪⓨ   &nbsp; 𝘽<img src="./vecteezy_illustration-vector-chat-robot-design-kawaii_22032633.svg" style="height: 22px; width: 22px;">𝙩</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
      <div style="text-align:center; padding:15%;">
      <p  style="font-size:50px; font-weight:bold;">
      <img src="./robo.PNG" alt="Shaking Image" class="shake" style="height: 230px; width: 260px; margin-left: -180px; margin-top: -110px;"> Hello  <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       :)
    </p>
      <a href="index.html" > <button type="submit" style="background: linear-gradient(270deg, #ff994f, #fa6d86); color:rgb(249, 246, 247); border-radius: 35px; height: 45px;" alt=""> &nbsp; Chat with Buddy<img src="./arrow_icon.png"></button></a><br><br>
      <a href="index.php" > <button type="submit" style="background: linear-gradient(270deg, #ff994f, #fa6d86); color:rgb(245, 242, 243); border-radius: 35px; height: 45px;" alt=""><img src="./arrow_icon.png" style="transform: rotate(180deg);">  &nbsp;&nbsp; Logout  </button></a>
    </div>
</body>
</html>