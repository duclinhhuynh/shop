<?php include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
};

if(isset($_POST['submit'])){

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
 
    $select = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');
 
    if(mysqli_num_rows($select) > 0){
       $row = mysqli_fetch_assoc($select);
       $_SESSION['user_id'] = $row['id'];
       header('location:index.php');
    }else{
       $message[] = 'incorrect password or email!';
    }
 
 }
 
?>


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
                <li><a class ="active" href="index.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <?php
                $select_user = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$user_id'") or die('query failed');
                if(mysqli_num_rows($select_user) > 0){
                    $fetch_user = mysqli_fetch_assoc($select_user);
                };
                ?>
                <li><a class="btnlogin-popup" href="#" ><span><?php echo $fetch_user['username']; ?></span></a></li>
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

    <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Supper value deals</h2>
        <h1>On all productst</h1>
        <p>Save more width coupon & up to 70% off</p>
        <button>Shop now</button>
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

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="pro-container">
        <?php
            $select_product = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
            if(mysqli_num_rows($select_product) > 0){
                while($fetch_product = mysqli_fetch_assoc($select_product)){
        ?>
            <div class="pro">
                <div class="des-border">    
                    <img src="img/products/<?php echo $fetch_product['image']; ?>" alt="">
                </div>
                <div class="des">
                        <span class="name"><?php echo $fetch_product['name']; ?></span>
                        <h5 class="description"><?php echo $fetch_product['description']; ?></h5>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4 class="price">$<?php echo $fetch_product['price']; ?></h4>
                </div>
                <a href="sproduct.php"><i class="fa-regular fa-plus fa-lg cart"></i></a>
            </div>
        <?php
            };
        };
        ?>  
        </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up to <span>70% Off</span> All t-shirt & Accessories</h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box-permanent">
            <div class="banner-box">
                <h4>crazy deals</h4>
                <h2>buy 1 get 1 free</h2>
                <span>The best classic dress is on sale at care</span>
                <button class="white">Learn More</button>
            </div>
        </div>
        <div class="banner-box-permanent">
            <div class="banner-box banner-box2">
                    <h4>crazy deals</h4>
                    <h2>buy 1 get 1 free</h2>
                    <span>The best classic dress is on sale at care</span>
                    <button class="white">Learn More</button>
            </div>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
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

    <?php
        if(isset($message)){
        foreach($message as $message){
            echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
        }
        }
    ?>
        <!-- login -->
        
    <section id="modal">
        <div class="modal__overlay"></div>   
            <div class="modal_inner">   
                <div id="wrapper">
                    <span class="icon-close">
                        <a href="#" class="close"><i class="fa-solid fa-xmark"></i></a>
                    </span>
                    <div class="form-box login">
                        <h2>Login</h2>
                        <form action="#">
                            <div class="input-box">
                                <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                                <input type="email" name="email" required>   
                                <label for="">Email</label>
                            </div>
                            <div class="input-box">
                                <span class="icon"><i class="fa-solid fa-lock"></i></span>
                                <input type="password" name="password" required>
                                <label for="">Password</label>
                            </div>
                            <div class="remember-forgot">
                                <label for=""><input type="checkbox">Remember me</label>
                                <a href="#">Forgot Password</a>
                            </div>
                            <button type="submit" class="btn">Login</button>
                            <div class="login-register">
                                <p>Don't have an account <a href="#" class="register-link">
                                Resgister
                                </a></p>
                            </div>
                        </form>
                    </div>
                    <div class="form-box register">
                        <h2>Register</h2>
                        <form action="#">
                            <div class="input-box">
                                <span class="icon"><i class="fa-solid fa-user"></i></span>
                                <input type="UserName" name="UserName" required>   
                                <label for="">UserName</label>
                            </div>
                            <div class="input-box">
                                <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                                <input type="email" name="email" required>   
                                <label for="">Email</label>
                            </div>
                            <div class="input-box">
                                <span class="icon"><i class="fa-solid fa-lock"></i></span>
                                <input type="password" name="password" required>
                                <label for="">Password</label>
                            </div>
                            <div class="remember-forgot">
                                <label for=""><input type="checkbox">Remember me</label>
                                <a href="#">Forgot Password</a>
                            </div>
                            <button type="submit" class="btn">Register</button>
                            <div class="login-register">
                                <p>Don't have an account <a href="#" class="login-link">
                                Resgister
                                </a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>    
        
    </section>

    <script src="script.js"></script>
</body>
</html>