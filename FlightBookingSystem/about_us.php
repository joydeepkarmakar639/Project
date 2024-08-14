<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css\style_about_us.css" />
    <link rel="stylesheet" href="css\style.css" />
    <title>Trip With Us</title>
</head>

<body>


<!--===========Nav Bar=================-->
<?php
    include('header.php');
?>
<!--===================================-->

        <!--=========About Us page===========-->

        <div class="about-section">
  <h1>About Us Page</h1>
  <p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

<h2 style="text-align:center" >Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="img\about_us.jpg" alt="Joy" style="width:100%">
      <div class="container">
        <h2>Joydeep Karmakar</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>joydeep@example.com</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img\about_us.jpg" alt="Aman" style="width:100%">
      <div class="container">
        <h2>Aman Paswan</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>aman@example.com</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img\about_us.jpg" alt="Rudra" style="width:100%">
      <div class="container">
        <h2>Rudra Chatterjee</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>rudra@example.com</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="img\about_us.jpg" alt="Souhardya" style="width:100%">
      <div class="container">
        <h2>Souhardya Sen</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>john@example.com</p>
      </div>
    </div>
  </div>
</div>

<!--=======footer========-->
<?php
    include('footer.php');
?>      
   