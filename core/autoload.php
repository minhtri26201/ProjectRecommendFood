<?php
session_start();

$mysql = mysqli_connect('localhost', 'root', 'password', 'database_pjvutri') or exit('Can not connect to mysql');

function getUser(){
    global $mysql; 
    $username = $_SESSION['username'];

    return mysqli_fetch_assoc(mysqli_query($mysql, "SELECT * FROM users WHERE User_name = '$username'"));
}