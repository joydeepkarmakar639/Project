<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css\style.css" />
    <title>Trip With Us</title>
</head>

<body>

    <!--===========Nav Bar=================-->
<?php
    include('header.php');
?>
<!--===================================-->

        <!--===============Banner================-->
        <section class="banner">
            <img src="img\banner_backgrnd.jpg" width="100%" height="100%">
            <div class="banner-text-item">
                <div class="banner-heading">
                    <h1>Find your Next tour!</h1>
                </div>
                <form class="form">
                    <input type="text" list="mylist" placeholder="Where would you like to go?">
                    <datalist id="mylist">
                        <option>AYODHYA</option>
                        <option>GOA</option>
                        <option>PURI</option>
                        <option>VRINDAVAN</option>
                        <option>MANALI</option>
                        <option>SIKKIM</option>
                    </datalist>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="date" class="date">
                    <a href="#" class="book">book</a>
                </form>
            </div>
        </section>

        <!--=========Services===============-->
        <section class="services">
            <div class="service-item">
                <img src="img\service_briefcase.png">
                <h2>8000+ Our Local Guides</h2>
            </div>
            <div class="service-item">
                <img src="img\service_trust.webp">
                <h2>100% Trusted Tour Agency</h2>
            </div>
            <div class="service-item">
                <img src="img\service_experience.png">
                <h2>28+ Years of Travel Experience</h2>
            </div>
            <div class="service-item">
                <img src="img\service_happy.png">
                <h2>98% Our Travelers are Happy</h2>
            </div>
        </section>
        <!--==============Places===================-->
        <section class="places">
            <div class="places-text">
                <small>FEATURED TOURS PACKAGES</small>
                <h2>Favourite Places</h2>
            </div>

            <div class="cards">
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img
                                src="img\ayodhya.jpg">
                        </div>
                    </div>

                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <h2>AYODHYA</h2>
                        <p class="cost">Rs.4000 / Per Person</p>
                        <div class="card-box">
                            <p class="time">🕓 3 Days</p>
                            <p class="location">✈ Kolkata,Ayodhya</p>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="img\manali.jpg">
                        </div>
                    </div>

                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <h2>MANALI</h2>
                        <p class="cost">Rs.6000 / Per Person</p>
                        <div class="card-box">
                            <p class="time">🕓 3 Days</p>
                            <p class="location">✈ Kolkata, Leh</p>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="img\goa.jpg">
                        </div>
                    </div>

                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <h2>GOA</h2>
                        <p class="cost">Rs.6500 / Per Person</p>
                        <div class="card-box">
                            <p class="time">🕓 3 Days</p>
                            <p class="location">✈ Kolkata, Goa</p>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img
                                src="img\sikkim.jpg">
                        </div>
                    </div>

                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <h2>SIKKIM</h2>
                        <p class="cost">Rs.5000 / Per Person</p>
                        <div class="card-box">
                            <p class="time">🕓 3 Days</p>
                            <p class="location">✈ Kolkata, Sikkim</p>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="img\vrindavan.jpg">
                        </div>
                    </div>

                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <h2>VRINDAVAN</h2>
                        <p class="cost">Rs.4500 / Per Person</p>
                        <div class="card-box">
                            <p class="time">🕓 3 Days</p>
                            <p class="location">✈ Kolkata, Vrindavan</p>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img
                                src="img\puri.webp">
                        </div>
                    </div>

                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <h2>PURI</h2>
                        <p class="cost">Rs.4500 / Per Person</p>
                        <div class="card-box">
                            <p class="time">🕓 3 Days</p>
                            <p class="location">✈ Kolkata, Bhuwneshwar</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--===========About Our Company===============-->
        <section class="about">
            <div class="about-img">
                <img src="img\about_company.jpg">
            </div>
            <div class="about-text">
                <small>ABOUT OUR COMPANY</small>
                <h2>We are Trip With Us Travels Support Company</h2>
                <p>We are the Company where we try to solve thw problems related 
                    to travelling for the passenger and no matter what you want we
                    try to provide,we know the cheapest routes across the globe.
                    
                    Travelling is the best medicine for lots of diseases.

                    Our travel agency is the way to have the best experience at reasonable price 
                </p>

                <label><input type="checkbox" checked> 100% Trusted</label>
                <label><input type="checkbox" checked> Ensures all safety and security for passengers</label>
                <label><input type="checkbox" checked> Provide best hospitality</label>
                <label><input type="checkbox" checked> Travel at reasonable prices</label>
                <a href="about_us.php">ABOUT US</a>
            </div>
        </section>

<!--=======footer========-->
<?php
    include('footer.php');
?>      
        