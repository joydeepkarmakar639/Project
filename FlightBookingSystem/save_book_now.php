<?php
include('lib/connect.php');
$obj = new connect();
?>

<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$contact_no = $_POST['contact_no'];
$source = $_POST['source'];
$dest = $_POST['dest'];
$date = $_POST['date'];
$fare = $_POST['fare'];
$f = $obj->flight_no($source, $dest);
$fno = $f['fno'];
$n = $obj->save_book_now($fname, $lname, $email, $contact_no, $source, $dest, $date, $fare, $fno);

header('location:booking_req.php');
?>