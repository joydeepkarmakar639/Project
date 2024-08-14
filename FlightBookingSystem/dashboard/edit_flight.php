<?php
    include('admin_connect\admin_connect.php');
    $obj=new connect();
?>

<?php
    $fno=$_POST['fno'];
    $source=$_POST['source'];
    $dest=$_POST['dest'];
    $stops=$_POST['stops'];
    $day=$_POST['day'];
    $time=$_POST['time'];
    $fare=$_POST['fare'];
    
    $obj->edit_flight($fno,$source,$dest,$stops,$day,$time,$fare);
    header('location:show_flight.php');
?>