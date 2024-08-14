<?php
    $result=-1; /* By default we assign result=-1*/
    if(isset($_GET['result'])) 
    {
        $result=$_GET['result'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style_login_register.css" />
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

<form action="save_register_user.php" method="post">
  <div class="imgcontainer">
    <img src="img\travel_with_us_logo.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">

    <label for="fname"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="fname" required>

    <label for="lname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lname" required>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter email" name="email" class="mail" required>

    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="pwd"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required>
        
    <button type="submit">Register</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
  <a href="index.php"><button  type="button" class="cancelbtn">Cancel</button></a>
  </div>
</form>

<!--=======footer========-->
<?php
    include('footer.php');
?>      
        