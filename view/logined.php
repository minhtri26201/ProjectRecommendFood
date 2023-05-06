<?php
    session_start();
    if(isset($_SESSION['objuser'])) {
        echo '<h2>Bạn đã đăng nhập với tài khoản: </h2>';
        echo '<h3>Tên đăng nhập: '.$_SESSION['objuser'][0].' </h3>';
        echo '<h3>Mật khẩu: '.$_SESSION['objuser'][1].' </h3>';
        echo 'bạn muốn thoát? <a href="logout.php">logout</a>';
    }   else {
        echo '<re login.<a href="index.php">click here</a';}
?>