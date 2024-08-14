<?php session_start();
$uname = "";
?>
<!--===========Nav Bar=================-->
<section class="nav-bar">
    <div class="logo">Trip With Us</div>
    <ul class="menu">
        <li><a href="index.php">home</a></li>
        <li><a href="package.php">package</a></li>
        <li class="dropdown">
            BOOKINGS
            <a href="#" class="dropbtn">

                <div class="dropdown-content">
                </div>
                <div class="dropdown-content">
                    <a href="book_now.php">Book Now</a>
                    <a href="register.php">Cancel Booking</a>
                    <a href="my_booking.php">My Booking</a>
                </div>
        </li>
        <li><a href="about_us.php">about us</a></li>
        <li class="dropdown">
            <a href="#" class="dropbtn">
                <?php if (!empty($_SESSION['uname'])) {
                    echo $_SESSION['uname'];
                } else {
                    echo "My Accounts";
                }
                ?>
            </a>
            <?php

            if (!empty($_SESSION['uname'])) {
                ?>
                <div class="dropdown-content">
                    <a href="logout.php">Logout</a>
                </div>
                <?php
            } else {
                ?>
                <div class="dropdown-content">
                    <a href="login.php">Login</a>
                    <a href="register.php">register</a>
                </div>

                <?php
            }
            ?>
        </li>
    </ul>
    </div>
</section>