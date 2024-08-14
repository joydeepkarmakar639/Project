<?php
include('header.php');
include('lib\connect.php');
$obj = new connect();
$fname = '';
$lname = '';
$email = '';
if (isset($_SESSION['uname'])) {
    $fname = $_SESSION['uname'];
    $user = $obj->getUserDetails($fname);
    $lname = $user['lname'];
    $email = $user['email'];

}



?>
<?php
$source = $_POST['source'];
$dest = $_POST['dest'];
$res = $obj->flight_date($source, $dest);
$res1 = $obj->flight_fare($source, $dest);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css\style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Trip With Us</title>
</head>

<style>
    /* body{
  background-image:url('../img/ayodhya.jpg');
  background-attachment:fixed;
  background-repeat: no-repeat;
  background-size: cover;
} */
</style>

<body>
    <br><br>

    <div class="py-3 py-md-4">
        <div class="container ">
            <div class="col-md-12 float-center">

                <div class="shadow bg-white p-3">
                    <h4 class="text-warning ">Booking Details</h4>
                    <hr />

                    <form action="save_book_now.php" method="POST">
                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label>Date of Travel</label>
                                <select id="mylist" class="form-control" name="date" id="date">
                                    <option value="0">- Select Date -</option>
                                    <?php

                                    while ($arr = mysqli_fetch_array($res)) {
                                        ?>
                                        <option value="<?php echo $arr['f_date']; ?>"><?php echo $arr['f_date']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="fname" class="form-label">First Name</label>
                                <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name"
                                    required value="<?php echo $fname; ?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name"
                                    required value="<?php echo $lname; ?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="source" class="form-label">Source</label>
                                <input type="text" class="form-control" name="source" id="source" placeholder="Source"
                                    readonly value="<?php echo $source; ?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="dest" class="form-label">Destination</label>
                                <input type="text" class="form-control" name="dest" id="dest" placeholder="Destination"
                                    readonly value="<?php echo $dest; ?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email"
                                    readonly value="<?php echo $email; ?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="contact_no" class="form-label">Contact No.</label>
                                <input type="text" class="form-control" name="contact_no" id="contact_no"
                                    placeholder="contact_no" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="fare" class="form-label">Fare of Flight</label>
                                <?php
                                while ($arr = mysqli_fetch_array($res1)) {
                                    ?>
                                    <input type="text" class="form-control" name="fare" id="fare" placeholder="Fare"
                                        readonly value="<?php echo $arr['fare']; ?>">
                                    <?php
                                }
                                ?>
                            </div>


                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-warning btn-lg me-md-3" type="submit">Book Now</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <br>
    <!--=======footer========-->
    <?php
    include('footer.php');
    ?>