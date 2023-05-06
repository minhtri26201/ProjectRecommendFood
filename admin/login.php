<?php
session_start();
ob_start();
include "../model/connectdb.php";
include "../model/user.php";
    if((isset($_POST['login']))&&($_POST['login'])) {
    //echo 123; exit;
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $role=checkuser($user,$pass);
    $_SESSION['role'] = $role;
    if($role == 1)
        header('Location: index.php');
    else {
        $txt_erro="User name or password is incorrect";
        // header('Location: login.php');
    } 
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register admin</title>
    <link rel="stylesheet" href="./view/css/login.css">
    <link rel="icon" href="./view/images/Restaurants/download.png" type="image/icon type">
</head>

<body>

    <div class="container">
        <div class="loginbg">
            <div class="box signin">
                <h2>Already Have an Account ?</h2>
                <button class="signinbtn">Sign in</button>
            </div>
            <div class="box signup">
                <h2>Dont Have an Account ?</h2>
                <button class="signupbtn">Sign up</button>
            </div>
        </div>
        <div class="formbx">
            <div class="form signinform">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                    <h2>Foodies</h2>
                    <h3>Sign In</h3>
                    <input type="text" placeholder="username" name="user">
                    <input type="password" placeholder="password" name="pass">
                    <input type="submit" name="login" value="Login">
                    <?php
                        if(isset($txt_erro)&&($txt_erro!="")){
                            echo "<font color = 'red'>".$txt_erro."";
                        } 
                    ?>
                    </a>
                    <a href="#" class="forgot">Forgot password?</a>
                </form>
            </div>
            <div class="form signupform">
                <form>
                    <h3>Sign up</h3>
                    <input type="text" placeholder="Enter Your Name">
                    <input type="text" placeholder="Email">
                    <input type="date" placeholder=" Enter your Date of birth">
                    <input type="password" placeholder="Password">
                    <input type="password" placeholder="Confirm password">
                    <input type="submit" value="Sign Up">
                </form>
            </div>
        </div>
    </div>
    <script>
    const signinbtn = document.querySelector('.signinbtn');
    const signupbtn = document.querySelector('.signupbtn');
    const formbx = document.querySelector('.formbx');
    const body = document.querySelector('body')

    signupbtn.onclick = function() {
        formbx.classList.add('active')
        body.classList.add('active')
    }
    signinbtn.onclick = function() {
        formbx.classList.remove('active')
        body.classList.remove('active')
    }
    </script>

</body>

</html>