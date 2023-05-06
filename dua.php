<?php
session_start();
    include "lib/db.php";
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ram Ki Bandi | Restaurant</title>
    <link rel="icon" href="./view/images/Restaurants/download.png" type="image/icon type">
<link rel="stylesheet" href="view/css/dua.css">
<link rel="stylesheet" href="view/css/home.css">
<script src="https://kit.fontawesome.com/7dc4da33e7.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--Header section start-->
    <header>
        <a href="index.php" class="logo"></i>Mlem-Mlem 😋</a>
        <nav class="navbar">
            <a class="active" href="./index.php">Home</a>
            <a href="./dishes.html">dishes</a>
            <a href="#" onclick="openAbout()">about</a>
            <a href="./contact.html" >Contact us</a>
            <a class="feed" id="feedback">feedback</a>
            <a href="#">Orders</a>
        </nav>
        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart" onclick="showCart()"></a>
            <i class="fa fa-user" aria-hidden="true"></i>
            <a href="login.php" class="fas fa-sign-in-alt"></a>
            
        </div>

         <!--search form-->
    <form action="" id="search-form">
        <input type="search" placeholder="search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close1"></i>
    </form>
    <!--Search Form ends-->
    </header>

<!--Rating Form starts-->

<div id="cmodal2">
        <button class="cmodalclose" id="cmodalclose">X</button>
        <div id="cmodal">123</div>
    </div>
    <style>
        .cmodalclose {
            float: right;
           margin-right: 10px;
        }

        #cmodal2 {
            display: none;
            position: fixed;
            top: 20vh;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 50%;
            height: 600px;
            background-color: #FF9966;
            z-index: 10;

            border: outset black;
            border-radius: 5px;

            animation-name: animatetop;
            animation-duration: 0.9s;



            overflow: scroll;
            overflow-x: hidden;
         
        }

        #cmodal {
            padding-left: 30px;
            padding-top: 30px;
        }

            @keyframes animatetop {
            from {top: 0vh; opacity: 0}
            to {top: 20vh; opacity: 1}
            }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        var m =  document.getElementById("cmodal2");
        function showCart(){
            m.style.display="block";
        }

        $("#cmodalclose").click(()=>{
            document.getElementById("cmodal2").style.display="none";;
        });

        $("#cmodal").load('/cart.php');
</script>
<div class="back">
    <div class="container1" id="co1">
        <div class="post">
            <div class="text">Thanks for Rating us!</div>
            <div class="edit">Edit</div>
            <i class="fas fa-times" id="close"></i>
    
        </div>
        <div class="star-widget">
        <input type="radio" name="rate" id="rate-5">
        <label for="rate-5" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-4">
        <label for="rate-4" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-3">
        <label for="rate-3" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-2">
        <label for="rate-2" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-1">
        <label for="rate-1" class="fas fa-star"></label>
        <form action="#">
            <i class="fas fa-times" id="close"></i>
            <h4></h4>
            <div class="textarea">
                <textarea cols="30" placeholder="Describe your experience"></textarea>
    
            </div>
            
            <div class="btn">
                <button type="submit">Post</button>
            </div>
        </form>
        </div>    
    </div>
    </div>
<!--Rating form ends-->
<!--side bar-->

<nav class="sidebar">
    <div class="text">
    <a href="dua.php"><i class="fa fa-home"></i></a>
    <ul>
        
        <li><a href="#fast" onclick="mybreakfast()">Break Fast</a></li>
    </ul>
</div>
</nav>
<!--Side bar ends-->
<section class="home" id="home">
    <div class="barb">
    <h2><img src="view/images/Restaurants/Dua.png" height="150"></h2>
    <div class="cont">
        <iframe width="350" height="315"
src="https://www.youtube.com/embed/watch?autoplay=1&mute=1&loop=1&playlist=i-EmEcuWATE&loop=1">
</iframe>
        </div>
        </div>
</section>
<section class="breakfast" id="fast">
    <h2 class="breakfast1">Chicken rice</h2>
    <hr class="line">
    <h4>Break Fast</h4>
    <div class="box-break-fast">
    <?php
        foreach($DB->get_list("SELECT * FROM tbl_product WHERE categoryID='23'") as $product){
        $product_id = $product['productID'];
        $img = $DB->get_row("SELECT * FROM `tbl_product_image` WHERE `productID` = $product_id")['productImage'];
?>

<div class="box">
    <img src="view/images/Dishes/<?=$img?>">
    <h3><?=$product['productName']?> </h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>

    </div>
    <span><?=number_format($product['productPrice'])?>d</span>
    <br>
    <a href="#" class="btn" onclick="addCart(<?=$product['productID']?>)">Add to cart</a>
    
</div>


<?php
}
      ?>
            
       
    </div>
</section>
<div id="about" class="about">
    <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="about-overlay">
        <h1>About us</h1>
        <p>Built in mid-2012 in Ho Chi Minh City. In Ho Chi Minh City, Vietnam, Foody is a trusted community for people to search, rate and comment on places to eat: restaurants, eateries, cafes, bars, karaoke, convenience stores, tourist areas.. .in Vietnam - from website or mobile application. All members from North to South, Foody connects diners to large and small dining venues across the country.
            Up to now, Foody with billions of locations and billionaires comments and photos in Vietnam, in most provinces. Foody is the easiest way for you to search and choose the best place for you and your friends. </p>
    </div>
</div>

<!--Footer Section-->
<footer class="footer">
    <div class="container">
        <div class="row">
            
            <div class="footer-col">
                <ul>
                    <i class="fa fa-utensils"></i>
                    <span>Mlem-Mlem</span>
                </ul>
                <div class="map">
                    <ul>
                        <i class="fa fa-map-marker"></i>
                            <span> 
                                475A (số cũ:144/24) Điện Biên Phủ, Phường 25, Quận Bình Thạnh, TP.HCM
                            </span>
                    </ul>
                    </div>
                <div class="mail">
                    <ul>
                        <i class="fas fa-inbox"></i>
                        <span>
                            VũTrí@Mlem-Mlem.com
                        </span>
                    </ul>
                </div>
            </div>
            
            <div class="footer-col">
                <h4>Mlem-Mlem</h4>
                <ul>
                    <li><a href="#">about us</a></li>
                    <li><a href="#">Our services</a></li>
                    <li><a href="#">Privacy policy</a></li>
                    <li><a href="#">Payment policy</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Get help</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Delivery</a></li>
                    <li><a href="#">My orders</a></li>
                    <li><a href="#">Order Status</a></li>
                    <li><a href="#">Payment options</a></li>

                </ul>
                </div>
                <div class="footer-col">
                    <h4>Order Now</h4>
                    <ul>
                        <li><a href="#">Coffee</a></li>
                        <li><a href="#">Restaurants</a></li>
                        <li><a href="#">Starters</a></li>
                        <li><a href="#">Fast food</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>

                    </div>

                </div>

            </div>
            </div>
            

</footer>

<!--Home  ends-->


<!--Java Script-->
    <script>
        let menu = document.querySelector('#menu-bars');
        let navbar = document.querySelector('.navbar');
        
        menu.onclick = () => {
            menu.classList.toggle('fa-times');
            navbar.classList.toggle('active');
        }
        window.onscroll=() => {
            menu.classList.remove('fa-times');
            navbar.classList.remove('active');
        }
        document.querySelector('#search-icon').onclick=() => {
            document.querySelector('#search-form').classList.toggle('active');
        }
        document.querySelector('#close1').onclick=() => {
            document.querySelector('#search-form').classList.toggle('active');
        }
        document.querySelector("#feedback").onclick=() =>{
        document.querySelector("#co1").classList.toggle("active");
    }
        document.querySelector("#close").onclick=() =>{
        document.querySelector("#co1").classList.toggle("active");

    }
    function myfun(){
        document.getElementById("biryani").style.display="block";
    }
    function myfunction(){
        document.getElementById("start").style.display="block";
    }
    function myroti(){
        document.getElementById("roti").style.display="block";
    }
    function mycurry(){
        document.getElementById("curry").style.display="block";
    }
    function mybreakfast(){
        document.getElementById("fast").style.display="block";
    }
        const btn = document.querySelector("button");
        const post = document.querySelector(".post");
        const widget = document.querySelector(".star-widget");
        const editBtn = document.querySelector(".edit");
    
        btn.onclick = () =>{
        widget.style.display = "none";
        post.style.display = "block";
        editBtn.onclick = () =>{
            widget.style.display = "block";
            post.style.display = "none";
        }
        return false;
    }
         function openAbout(){
        document.getElementById("about").style.width = "100%";

    }
    function closeNav(){
        document.getElementById("about").style.width = "0%";
    }
    function addCart(id){
        <?php
            if(!isset($_SESSION['username'])){
                ?>
                    alert('Bạn chưa đăng nhập');
                    window.location = '/index.php?act=dangnhap';
                <?php
            }
        ?>

        let a;

        if(window.localStorage.getItem('cart')){
          a = JSON.parse(window.localStorage.getItem('cart'));
        } else {
            a = [];
        }

        a.push(id);
        a = JSON.stringify(a);

        window.localStorage.setItem('cart', a);

        alert('them gio hang thanh cong');
    }

       
    </script>
    <!--JavaScript ends -->

</body>
</html>