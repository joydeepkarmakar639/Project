<?php
    include('lib\connect.php');
    $obj=new connect();
?>
<?php
    $email=$_POST['email'];
    $pwd=md5($_POST['pwd']);  /* md5 is used to encrypt the passward in database*/
    $res=$obj->check_user($email,$pwd);
    $count=mysqli_num_rows($res);
    
    if($count==0)
    {
        header('location:login.php?login=failed');  /* It shows failed when any input is not available in database*/
    }
    else{
        $arr=mysqli_fetch_array($res);
        session_start();
        $_SESSION['uname']=$arr['fname'];
        header('location:home.php'); /*It redirect to home page when we get successfully login*/
    }
?>