<?php
    include('admin_connect\admin_connect.php');
    $obj=new connect();
?>

<?php
    $id=$_GET['id'];
    
    $obj->deleteFlightDetails($id);
    header('location:show_flight.php');
?>