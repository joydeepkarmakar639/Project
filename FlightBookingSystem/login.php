<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css\style_login_register.css" />
    <link rel="stylesheet" href="css\style.css" />
    <title>Trip With Us</title>
</head>
<style>
  .container .mail {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

input[type='text'],
input[type='password'] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
</style>
<body>



<!--===========Nav Bar=================-->
<?php
    include('header.php');
?>
<!--===================================-->

<form action="check_user.php" method="post">
  <div class="imgcontainer">
    <img src="img\travel_with_us_logo.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter email" name="email" class="mail" required>

    <label for="pwd"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required>
        
    <button type="submit">Login</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
  <a href="index.php"><button  type="button" class="cancelbtn">Cancel</button></a>
  </div>

    <span class="psw">If you haven't Register yet please  <a href="register.php">Register?</a></span>
  </div>
</form>

<?php
    if (isset($_GET['login'])=='failed')  /* when there is no entry found in database error! alert occurs*/
    {                 /* we need to register first to login to get entry in database*/
?>
    
<?php
    echo "<script>alert('Login Failed')</script>";
}
?>
<!--=======footer========-->
<?php
    include('footer.php');
?>      
        