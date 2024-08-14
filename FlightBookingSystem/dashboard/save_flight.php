<?php
    include('admin_connect\admin_connect.php');
    $obj=new connect();
?>

<?php
    $fno=$_POST['fno'];
    $source=$_POST['source'];
    $dest=$_POST['dest'];
    $stops=$_POST['stops'];
    $f_date=$_POST['f_date'];
    $time=$_POST['time'];
    $fare=$_POST['fare'];
    echo $f_date;
    $n=$obj->save_flight($fno,$source,$dest,$stops,$f_date,$time,$fare);
    header('location:add_flight.php?result='.$n); 
?>