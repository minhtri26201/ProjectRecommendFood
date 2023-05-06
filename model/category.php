<?php
function getone_cate() {
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_category WHERE categoryID= ".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
} 
function getall_cate($iddm=0) {
    $conn = connectdb();
    $sql = "SELECT * FROM tbl_product WHERE 1";
    $stmt = $conn->prepare("SELECT * FROM tbl_category");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
} 