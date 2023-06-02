<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- webfont -->
    <link rel="stylesheet" href="./font/fontawesome-free-6.0.0-beta2-web/css/all.min.css">
    <title>Document</title> 
</head>
<body>
    <!-- hearder -->
    <section id="header">
        <a href=""><img src="img/j.png" alt=""></a>
        <div>
            <ul id="navbar">
                <!-- mặc định Home -->
                <li><a href="index.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a class ="active" href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <!-- <li><a class="btnlogin-popup" href="#" >Login</a></li> -->
                <li id="lg-bag"><a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <!-- close  nav-->
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
            <i id="bar" class="fa-solid fa-outdent"></i>
        </div>
    </section>  

    <section id="page-header" class="about-header">
        <h2>#Know us</h2>
        <p>Lorem ispum dolor sit amet, consectetur</p>
    </section>

    <section id="about-head" class="section-p1">
        <img src="img/about/a6.jpg" alt="">
        <div>
            <h2>Why We Are?</h2>
            <p>Lorem ispum dolor sit amet, consectetur adispising elit, sed do eiusmod
               tempor incidiunt ut labore et dolore mana aliqua. Ut enim ad minim venium, quis
               nostrud exercitation tempor incidiunt ut labore et dolore mana aliqua. Ut enim ad minim venium, quis
               nostrud exercitation tempor incidiunt ut labore et dolore mana aliqua. Ut enim ad minim venium, quis
               nostrud exercitation 
            </p>
            <abbr title="">Create stunning consectetur adispising elit, sed do eiusmod
                tempor incidiunt ut labore et dolore mana aliqua</abbr>
            <br><br>
            <!-- chữ chạy -->
            <marquee bgcolor ="#ccc" loop ="-1" scrollamount = "5" width = "100%">Create stunning consectetur adispising elit, sed do eiusmod
                tempor incidiunt ut labore et dolore mana aliqua</marquee>
        </div>
    </section>

    <section id="about-app" class="section-p1">
        <h1>Dowload Our <a href="#">App</a></h1>
        <div class="video">
            <video autoplay muted loop src="img/about/john.mp4"></video>
        </div>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f2.png" alt="">
            <h6>Online order</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f3.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f4.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f5.png" alt="">
            <h6>Free Shipping</h6>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up Newsletter</h4>
            <p>Get E-mail updates about our latest shop and <span>special-offer</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="You email address">
            <button class="normal">Sign</button>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address: </strong>562 Welligton Road, Street 32, San Francisco</p>
            <p><strong>Phone: </strong>0962323281</p>
            <p><strong>Hour: </strong>10:00 - 18:00, Mon - Sat</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>

                    <i class="fa-brands fa-youtube"></i>
                </div>
            </div>
        </div>  
        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Term & condition</a>
            <a href="#">Contact us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Term & condition</a>
            <a href="#">Contact us</a>
        </div>
        <div class="col">
            <h4>Install App</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Term & condition</a>
            <a href="#">Contact us</a>
        </div>
        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="img/pay/app.jpg" alt="">
                <img src="img/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="img/pay/pay.png" alt="">
        </div>
        <div class="copyright">
            <p>@2023</p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>