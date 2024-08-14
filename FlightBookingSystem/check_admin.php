<?php
    include('lib/connect.php');
    $obj=new connect();
?>

<?php
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
    $res=$obj->check_admin($email,$pwd);
    $count=mysqli_num_rows($res);
    echo $count;
    if($count==0)
    {
        header('location:admin_login.php?login=failed');  /* It shows failed when any input is not available in database*/
    }
    else{
        session_start();
        $_SESSION['email']=$email;
        header('Location:dashboard/add_flight.php'); /*It redirect to dashboard page when we get successfully login*/
    }
?>