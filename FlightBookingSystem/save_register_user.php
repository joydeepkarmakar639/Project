<?php
include('lib/connect.php');
$obj = new connect();
?>

<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pwd = md5($_POST['pwd']);
$uname = $_POST['uname'];
$n = $obj->save_user($fname, $lname, $email, $uname, $pwd);
// header('location:register.php?result='.$n);  /* It directly assigns the value input by the user in register.php to the database*/
?>