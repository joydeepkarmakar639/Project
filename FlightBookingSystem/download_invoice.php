<?php
include('lib\connect.php');
$obj = new connect();
$id = $_GET['id'];
$invoice = $obj->getMyBookingInvoice($id);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Flight Ticket Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .invoice {
            margin: 20px auto;
            padding: 20px;
            width: 600px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .invoice h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .invoice .header {
            margin-bottom: 20px;
        }

        .invoice .row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .invoice .row span {
            font-weight: bold;
        }

        .invoice .footer {
            text-align: right;
            margin-top: 20px;
        }
    </style>
</head>

<body onload="window.print()">
    <div class="invoice">
        <h2>Trip With Us</h2>
        <?php
        foreach ($invoice as $a) {
            $res1 = $obj->getAllFlightDetails($a['source'], $a['dest']);
            while ($a1 = mysqli_fetch_array($res1)) {
                ?>
                <div class="header">
                    <div class="row">
                        <span>Ticket No:</span>
                        <span>
                            <?php echo $a['id'] ?>
                        </span>
                    </div>
                    <div class="header">
                        <div class="row">
                            <span>Full Name:</span>
                            <span>
                                <?php echo $a['fname'] . ' ' . $a['lname']; ?>
                            </span>
                        </div>
                        <div class="row">
                            <span>Flight Number:</span>
                            <span>
                                <?php echo $a1['fno']; ?>
                            </span>
                        </div>
                        <div class="row">
                            <span>Source:</span>
                            <span>
                                <?php echo $a['source']; ?>
                            </span>
                        </div>
                        <div class="row">
                            <span>Destination:</span>
                            <span>
                                <?php echo $a['dest']; ?>
                            </span>
                        </div>
                        <div class="row">
                            <span>No of Stops:</span>
                            <span>
                                <?php echo $a1['stops']; ?>
                            </span>
                        </div>
                        <div class="row">
                            <span>Date:</span>
                            <span>
                                <?php echo $a1['f_date']; ?>
                            </span>
                        </div>
                        <div class="row">
                            <span>
                                Boarding Time:</span>
                            <span>
                                <?php echo $a1['time']; ?>
                            </span>
                        </div>
                    </div>
                    <div class="footer">
                        <span>
                            <h1> <b>Total Fare:</b>
                        </span>
                        <span>
                            <?php echo '&#8377;' . $a['fare']; ?>
                            </h1>
                        </span>
                        <div>
                            <b>Thank You!</b> <br>
                            <span>
                                <h6>Have A Good Journey</h6>
                            </span>
                        </div>
                    </div>

                </div>
            <?php }
        } ?>
</body>

</html>