<?php
    include "layouts/head.php";
    include __DIR__.'/../lib/db.php';

    $id = $product_id = $_GET['id'];


    // var_dump($f);

    if( isset($_POST['update']) ){
        $img = $_POST['img'];
        unset($_POST['img']);
        unset($_POST['update']);
        // var_dump($_POST);
        $DB->update("tbl_product", $_POST, "`productID` = '$product_id'");
        $DB->update("tbl_product_image", [
            'productImage' => $img
        ], "`productID` = '$product_id'");
    }

    $f = $DB->get_row("SELECT * FROM tbl_product WHERE productID = '$id'");
    $img = $DB->get_row("SELECT * FROM `tbl_product_image` WHERE `productID` = $product_id")['productImage'];
?>

<form action method="post">
<?php
foreach($f as $k => $v){
    if($k == 'productStatus'){
        continue;
    }
?>
<label><?=$k?></label>
<input class="form-control" name="<?=$k?>" value="<?=$v?>">
<br>
<?php
}
?>


<label>Thumbnail</label>
<input name="img" class="form-control" value="<?=$img?>">
<br>

<label>Status</label>
<select class="form-control" name="productStatus">
    <option value="checking" <?=$f['productStatus']=='checking'?'selected':''?>>Checking</option>
    <option value="delivering" <?=$f['productStatus']=='delivering'?'selected':''?>>Delivering</option>
    <option value="complete" <?=$f['productStatus']=='complete'?'selected':''?>>Complete</option>
    <option value="cancel" <?=$f['productStatus']=='cancel'?'selected':''?>>Cancel</option>
</select>
<br>

<button class="btn btn-primary btn-block" name="update">Update</button>
</form>

<?php
    include "layouts/footer.php";
?>