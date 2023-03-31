<?php
require __DIR__.'/core/autoload.php';

// if (isset($_POST['login'])) {
//   $username = $_POST['User_name'] ?? '';
//   $password =  $_POST['password'] ?? '';

//   $password = md5($password); //
if (isset($_POST['uname']) && isset($_POST['password'])) {

  function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }
 if (empty($username)) {
    header("Location: login.php?error=User Name is required");
    exit();
}else if(empty($password)){
    header("Location: login.php?error=Password is required");
    exit();
  $q = mysqli_num_rows(mysqli_query($mysql, "SELECT * FROM User WHERE User_name  = '$username' AND User_password = '$password'"));

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) === 1) {
      $row = mysqli_fetch_assoc($result);
      if ($row['User_name'] === $username && $row['password'] === $pass) {
          $_SESSION['User_name'] = $row['User_name'];
          $_SESSION['name'] = $row['name'];
          $_SESSION['id'] = $row['id'];
          header("Location: header.php");
          exit(); }
//   if($q > 0){
//     echo 'Dang nhap thanh cong';
//     $_SESSION['username'] = $username;
//     header('location: /');
//     exit;
  } else {
    header("Location: login.php?error=Incorect User name or password");
    exit;
  }
}
}
// if(isset($_POST['register'])) {
//   $username = $_POST['username'] ?? '';
//   $name =  $_POST['name'] ?? '';
//   $date = $_POST['date'] ?? '';
//   $password = $_POST['password'] ?? '';
//   $password2 = $_POST['password2'] ?? '';
//   $sex = $_POST['sex'] ?? '';
//   $email = $_POST['email'] ?? '';

//   if(mysqli_num_rows(mysqli_query($mysql, "SELECT * FROM User WHERE User_name = '$username'")) > 0){

//    header("Location: /login.php?error= tai khoan da co nguoi tao truoc");
//    exit();
   
//   }

//   if(mysqli_num_rows(mysqli_query($mysql, "SELECT * FROM User WHERE Email = '$email'"))){
//     header("Location: /login.php?error= email da co nguoi tao truoc");
//     exit();
//   }

//   $password = md5($password);
//   mysqli_query($mysql, "INSERT INTO Users
//   (`id`,
//   `User_name`,
//   `User_password`,
//   `Email`,
//   `Fullname`,
//   `Birthday`,
//   `Sex`)
//   VALUES (
//   NULL,
//   '$username',
//   '$password',
//   '$email',
//   '$name',
//   '$date',
//   '$sex'
//   )
//   ");

//   echo 'Dang ky thanh cong'; exit;
// }

// ?>

<!DOCTYPE HTML>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
</head>
<style>
body {
    background-image: url(Images/background.jpg);
    background-size: 100%;
}
</style>

<body>
<form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="username" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
     </form>

    <!-- <div class="container">
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
                <div class="form-back">
                    <a href="/">
                        <button class="btn-back">
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                    </a>
                </div>

                <form action method="post">
                    <h2>Mlem-Mlem</h2>
                    <h3>Sign In</h3>
                    <input name="username" type="text" placeholder="Username">
                    <input name="password" type="password" placeholder="Password">
                    <input name="login" type="submit" value="Login">
                    <a href="#" class="forgot">Forgot password?</a>
                </form>
            </div>
            <div class="form signupform">
                <form action method="POST"><br>
                    <h3>Sign up</h3>
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error'];?></p>
                <?php }
                 ?>
            
                    <input name="name" type="text" placeholder="Enter Your Name">
                    <input name="username" type="text" placeholder="Username">

                    <input name="password" type="password" placeholder="Password">
                    <input name="password2" type="password" placeholder="Confirm password">
                    <input name="email" type="email" placeholder="Email">
               
                    <input name="date" type="date" placeholder=" Enter your Date of birth">
                    <select name="sex" class="input-select">
                        <option value="boy" selected>Boy</option>
                        <option value="girl">Girl</option>
                    </select>
                    <br>

                    <input name="register" type="submit" value="Sign Up">
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
    </script> -->

</body>

</html>