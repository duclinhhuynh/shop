<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];
$id = $_SESSION['id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
};

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, image, quantity) VALUES('$user_id', '$product_name', '$product_price', '$product_image', '$product_quantity')") or die('query failed');
      $message[] = 'product added to cart!';
   }

};

if(isset($_POST['update_cart'])){
   $update_quantity = $_POST['cart_quantity'];
   $update_id = $_POST['cart_id'];
   mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_quantity' WHERE id = '$update_id'") or die('query failed');
   $message[] = 'cart quantity updated successfully!';
}

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'") or die('query failed');
   header('location:index.php');
}
  
if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
   header('location:index.php');
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
                <li><a href="index.html">Home</a></li>
                <li><a class ="active" href="shop.html">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
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

    <section id="page-header">
        <h2>#Stay Home</h2>
        <p>Save more width coupon & up to 70% off</p>
    </section>

    <section id="prodetails" class="section-p1">
    <?php
            $select_product = mysqli_query($conn, "SELECT * FROM `products` where `id` = $id") or die('query failed');
            if(mysqli_num_rows($select_product) > 0){
                $fetch_product = mysqli_fetch_assoc($select_product);
            };
        ?>
        <div class="single-pro-image">
            <img src="img/products/<?php echo $fetch_product['image']; ?>" width="100%" alt="">

            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="img/products/<?php echo $fetch_product['image']; ?>" width="100%" class="small-img"alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/<?php echo $fetch_product['image']; ?>" width="100%" class="small-img"alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/<?php echo $fetch_product['image']; ?>" width="100%" class="small-img"alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/<?php echo $fetch_product['image']; ?>" width="100%" class="small-img"alt="">
                </div>
            </div>
        </div>
        <div class="single-pro-details">
            <h6 class="name"><?php echo $fetch_product['name']; ?></h6>
            <h4 class="description"><?php echo $fetch_product['description']; ?></h4>
            <h2 class="price"><?php echo $fetch_product['price']; ?></h2>
            <select name="" id="">
                <option value="">Select Size</option>
                <option value="">M</option>
                <option value="">L</option>
                <option value="">XL</option>
                <option value="">XXL</option>
            </select>
            <input type="number" value="1">
            <button class="number">Add To Cart</button>
            <h4>Product Details</h4>
            <span>ad.csdafah .sdfaheoe heowehfwefwoi</span>
        </div>  
        <?php
        ?>
    </section>

    <section id="product1" class="section-p1">
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='sproduct.html'">
                <div class="des-border">    
                    <img src="img/products/f6.jpg" alt="">
                </div>
                <div class="des">
                        <span>Adias</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>$78</h4>
                </div>
                <a href="#"><i class="fa-regular fa-plus fa-lg cart"></i></a>
            </div>
            <div class="pro">
                <div class="des-border">
                    <img src="img/products/f1.jpg" alt="">
                </div>
                <div class="des">
                        <span>Adias</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>$78</h4>
                </div>
                <a href="#"><i class="fa-regular fa-plus fa-lg cart"></i></a>
            </div>
            <div class="pro">
                <div class="des-border">
                    <img src="img/products/f2.jpg" alt="">
                </div>
                <div class="des">
                        <span>Adias</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>$78</h4>
                </div>
                <a href="#"><i class="fa-regular fa-plus fa-lg cart"></i></a>
            </div>
            <div class="pro">
                <div class="des-border">
                    <img src="img/products/f3.jpg" alt="">
                </div>
                <div class="des">
                        <span>Adias</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>$78</h4>
                </div>
                <a href="#"><i class="fa-regular fa-plus fa-lg cart"></i></a>
            </div>
            <div class="pro">
                <div class="des-border">
                    <img src="img/products/f4.jpg" alt="">
                </div>
                <div class="des">
                        <span>Adias</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>$78</h4>
                </div>
                <a href="#"><i class="fa-regular fa-plus fa-lg cart"></i></a>
            </div>
            <div class="pro">
                <div class="des-border">
                    <img src="img/products/f5.jpg" alt="">
                </div>
                <div class="des">
                        <span>Adias</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>$78</h4>
                </div>
                <a href="#"><i class="fa-regular fa-plus fa-lg cart"></i></a>
            </div>
            <div class="pro">
                <div class="des-border">
                    <img src="img/products/f1.jpg" alt="">
                </div>
                <div class="des">
                        <span>Adias</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>$78</h4>
                </div>
                <a href="#"><i class="fa-regular fa-plus fa-lg cart"></i></a>
            </div>
            <div class="pro">
                <div class="des-border">
                    <img src="img/products/f8.jpg" alt="">
                </div>
                <div class="des">
                        <span>Adias</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>$78</h4>
                </div>
                <a href="#"><i class="fa-regular fa-plus fa-lg cart"></i></a>
            </div>
            <div class="pro">
                <div class="des-border">
                    <img src="img/products/f7.jpg" alt="">
                </div>
                <div class="des">
                        <span>Adias</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>$78</h4>
                </div>
                <a href="#"><i class="fa-regular fa-plus fa-lg cart"></i></a>
            </div>
            <div class="pro">
                <div class="des-border">    
                    <img src="img/products/n1.jpg" alt="">
                </div>
                <div class="des">
                        <span>Adias</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>$78</h4>
                </div>
                <a href="#"><i class="fa-regular fa-plus fa-lg cart"></i></a>
            </div>
            <div class="pro">
                <div class="des-border">
                    <img src="img/products/n2.jpg" alt="">
                </div>
                <div class="des">
                        <span>Adias</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>$78</h4>
                </div>
                <a href="#"><i class="fa-regular fa-plus fa-lg cart"></i></a>
            </div>
            <div class="pro">
                <div class="des-border">
                    <img src="img/products/n3.jpg" alt="">
                </div>
                <div class="des">
                        <span>Adias</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>$78</h4>
                </div>
                <a href="#"><i class="fa-regular fa-plus fa-lg cart"></i></a>
            </div>
            <div class="pro">
                <div class="des-border">
                    <img src="img/products/n4.jpg" alt="">
                </div>
                <div class="des">
                        <span>Adias</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>$78</h4>
                </div>
                <a href="#"><i class="fa-regular fa-plus fa-lg cart"></i></a>
            </div>
            <div class="pro">
                <div class="des-border">
                    <img src="img/products/n5.jpg" alt="">
                </div>
                <div class="des">
                        <span>Adias</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>$78</h4>
                </div>
                <a href="#"><i class="fa-regular fa-plus fa-lg cart"></i></a>
            </div>
            <div class="pro">
                <div class="des-border">
                    <img src="img/products/n6.jpg" alt="">
                </div>
                <div class="des">
                        <span>Adias</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>$78</h4>
                </div>
                <a href="#"><i class="fa-regular fa-plus fa-lg cart"></i></a>
            </div>
            <div class="pro">
                <div class="des-border">
                    <img src="img/products/n7.jpg" alt="">
                </div>
                <div class="des">
                        <span>Adias</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>$78</h4>
                </div>
                <a href="#"><i class="fa-regular fa-plus fa-lg cart"></i></a>
            </div>
            <div class="pro">
                <div class="des-border">
                    <img src="img/products/n8.jpg" alt="">
                </div>
                <div class="des">
                        <span>Adias</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>$78</h4>
                </div>
                <a href="#"><i class="fa-regular fa-plus fa-lg cart"></i></a>
            </div>
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
    <script>
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function(){
            MainImg.src = smallimg[0].src;           
        }
        smallimg[1].onclick = function(){
            MainImg.src = smallimg[1].src;           
        }
        smallimg[2].onclick = function(){
            MainImg.src = smallimg[2].src;           
        }
        smallimg[3].onclick = function(){
            MainImg.src = smallimg[3].src;           
        }
    </script>
    <script src="script.js"></script>
</body>
</html>