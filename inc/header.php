<!--header section starts -->
<header class="header">


    <a href="#" class="logo"><i class="fa fa-utensils"></i>Mlem-Mlem 😋</a>
    <nav class="navbar">
        <a class="active" href="./home.html">Home</a>
        <a href="./dishes.html">dishes</a>
        <a href="#" onclick="openAbout()">about</a>
        <a href="./contact.html">Contact us</a>

        <a class="feed" id="feedback">feedback</a>
        <a href="#">Orders</a>
    </nav>

    <div class="icons">
        <i class="fas fa-search" id="search-icon"></i>
    </div>

    <div class="profile">
        <?php if(isset($_SESSION['username'])){ ?>
          <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
            <i class="fa fa-user" aria-hidden="true"></i>
            <a href="login.php" class="fas fa-sign-in-alt"></a>
            

        <?php } else { ?>



        <p class="account"><a href="./login.php">login</a> or <a href="/register.php">register</a></p>
        <?php } ?>
    </div>

</header>

<!--search form-->
<form action="" id="search-form">
        <input type="search" placeholder="search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close1"></i>
    </form>