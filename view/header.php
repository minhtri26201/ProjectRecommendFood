
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="./images/Restaurants/download.png" type="image/icon type">
<link rel="stylesheet" href="view/css/home.css">
<link rel="stylesheet" href="view/css/dangky.css">

<script src="https://kit.fontawesome.com/7dc4da33e7.js" crossorigin="anonymous"></script>
</head>
<body onload="myload()">
<div class="loader-container" id = "loader">
    <img src="./images/loader/loader.gif">
    
</div>


    <!--Header section start-->
    <header>
        <a href="index.php" class="logo">Mlem-Mlem 😋</a>
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
            <a href="/order.php"><i class="fas fa-user" aria-hidden="true"></i></a>
            <a href="./view/logout.php" class="fas fa-sign-in-alt"></a>
        </div>
       <nav class="navbar">
        <?php
            if(isset($_SESSION['username']) && ($_SESSION['username']!="")) {
                // var_dump($_SESSION); exit;
                    echo '<a href="index.php?act=userinfo">'.$_SESSION['username'].'</a>';
                }else{
            ?>
            <a href="index.php?act=dangky">Register</a>
            <a href="index.php?act=dangnhap">Login</a>
            <?php    } ?>

        </nav>
    </header>

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
                        
                        <div>
                            <button class="btn" type="submit">Post</button>
                        </div>
                    </form>
                </div>    
        </div>
    </div>
    <!-- Header section ends-->

    <!--search form-->
    <form action="" id="search-form">
        <input class="search-field" type="text" placeholder="search" placeholder=" Search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close1"></i>
    </form>
    <!--Search Form ends-->

  
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
