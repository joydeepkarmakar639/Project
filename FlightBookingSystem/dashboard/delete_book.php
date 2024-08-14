<?php
include('admin_connect\admin_connect.php');
$obj = new connect();
?>

<?php
$id = $_GET['id'];

$obj->deleteBookDetails($id);
header('location:book_details.php');
?>