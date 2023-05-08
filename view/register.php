

<div class="form">
<form action="/index.php?act=register" method="POST">

<label>Name:</label>
    <input type="text" name="fullname" class="form-control">
    <?=isset($_SESSION['name_error']) ? $_SESSION['name_error'].'<br>' : ''; ?>

    <label>Username:</label>
    <input type="text" name="username" class="form-control">
     <?=isset($_SESSION['username_error']) ? $_SESSION['username_error'].'<br>' : ''; ?> 

    <label>Password:</label>
    <input type="password" name="password" class="form-control">
     <?=isset($_SESSION['password_error']) ? $_SESSION['password_error'].'<br>' : ''; ?>

    <label>Phone:</label>
    <input type="number" name="phone" class="form-control">

    <label>Email:</label>
    <input type="email" name="email" class="form-control">

    <button type="submit" name="register">Register</button>
</form>
</div>

<?php
     unset($_SESSION['name_error']);
     unset($_SESSION['username_error']);
     unset($_SESSION['password_error'])

?>