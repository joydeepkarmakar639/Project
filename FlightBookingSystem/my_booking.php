<?php
include('header.php');
include('lib\connect.php');
$obj = new connect();
$id = "";
$fname = "";
$lname = "";
$fno = "";
$ticket_no = "";
$source = "";
$dest = "";
$date = "";
$fare = "";
if (isset($_SESSION['uname'])) {
    $fname = $_SESSION['uname'];
    $user = $obj->getMyBookingDetails($fname);

    $user1 = $obj->getBookingDetails($fname);
} else {
    header('location:login.php');
}


?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="css\style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="dashboard\plugins\fontawesome-free">


    <title>Your Booking Details</title>

</head>

<body>
    <br><br><br>
    <div align='center'>
        <h1>Your Booking Details</h1>
    </div>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">Ticket No</th>
                <th scope="col">Passanger Name
                <th scope="col">Flight No
                </th>
                <th scope="col">Source</th>
                <th scope="col">Destination</th>
                <th scope="col">Date of Journey</th>
                <th scope="col">Fare</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_SESSION['uname'])) {
                foreach ($user as $a) {
                    if (count($user) > 0) {
                        $source = $a['source'];
                        $dest = $a['dest'];
                        $f = $obj->Myflight_no($source, $dest);
                    }
                    ?>
                    <tr>
                        <th scope="row">
                            <?php echo $a['id'] ?>
                        </th>
                        <td>
                            <?php echo $a['fname'] . ' ' . $a['lname']; ?>
                        </td>
                        <td>
                            <?php echo $f[0]['fno'] ?>
                        </td>
                        <td>
                            <?php echo $a['source']; ?>
                        </td>
                        <td>
                            <?php echo $a['dest']; ?>
                        </td>
                        <td>
                            <?php echo $a['date'] ?>
                        </td>
                        <td>
                            <?php echo $a['fare']; ?>
                        </td>
                        <td> <a href="download_invoice.php?id=<?php echo $a['id']; ?>" target="_blank"
                                class="btn btn-warning">Download Invoice</a>
                        </td>
                    </tr>
                <?php }
            } ?>
        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>