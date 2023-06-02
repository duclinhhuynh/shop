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
                <li><a class ="active" href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
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

    <section id="page-header" class="blog-header">
        <h2>#Stay Home</h2>
        <p>Save more width coupon & up to 70% off</p>
    </section>

    <section id="blog">
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b1.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>The cotton-jer Zip up Hoodies</h4>
                <p>Kickstarter man braid </p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13-5</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b2.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>The cotton-jer Zip up Hoodies</h4>
                <p>Kickstarter man braid </p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13-5</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b3.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>The cotton-jer Zip up Hoodies</h4>
                <p>Kickstarter man braid </p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13-5</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b4.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>The cotton-jer Zip up Hoodies</h4>
                <p>Kickstarter man braid </p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13-5</h1>
        </div>
    </section>

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fa-solid fa-right-long"></i></a>
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