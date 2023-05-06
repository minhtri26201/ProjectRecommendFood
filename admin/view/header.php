
<?php
    include_once 'lib/database.php';
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="./images/Restaurants/download.png" type="image/icon type">
<link rel="stylesheet" href="view/css/home.css">
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
            <a href="index.php?act=thoat">Thoát</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
            <i class="fas fa-user" aria-hidden="true"></i>
            <a href="view/login.php" class="fas fa-sign-in-alt"></a>
        </div>
       
        
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