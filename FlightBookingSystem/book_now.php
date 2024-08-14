<?php
include('lib\connect.php');
$obj = new connect();
?>
<?php


$res = $obj->book_source();
$res1 = $obj->book_destination();

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

    <?php
    include('header.php');
    ?>

    <br><br>

    <div class="py-3 py-md-4">
        <div class="container ">
            <div class="col-md-12 float-center">

                <div class="shadow bg-white p-3">
                    <h4 class="text-warning ">Choose Your Journey</h4>
                    <hr />

                    <form action="book_now_2.php" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Source</label>
                                <!-- <input type="text" list="mylist" class="form-control" name="source" id="source" placeholder="Source"> -->
                                <select id="mylist" class="form-control" name="source" id="source">
                                    <option value="0">- Select Source -</option>
                                    <?php
                                    while ($a = mysqli_fetch_array($res)) {
                                        ?>
                                        <option value="<?php echo $a['source']; ?>"><?php echo $a['source']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Destination</label>
                                <select id="mylist" class="form-control" name="dest" id="dest">
                                    <option value="0">- Select Destination -</option>
                                    <?php
                                    while ($a = mysqli_fetch_array($res1)) {
                                        ?>
                                        <option value="<?php echo $a['dest']; ?>"><?php echo $a['dest']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>


                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <input type="submit" value="Next">
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br>
    <!--=======footer========-->
    <?php
    include('footer.php');
    ?>