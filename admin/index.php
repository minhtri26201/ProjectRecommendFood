<?php
    include "layouts/head.php";
    include __DIR__.'/../lib/db.php';

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];

        $DB->remove("tbl_product_image", "productID=$id");
        $DB->remove("tbl_product", "productID=$id");
    }
?>

<table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Food Images</th>
            <th>Food Name</th>
            <th>Food Price</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($DB->get_list("SELECT * FROM `tbl_product`") as $product){
            $product_id = $product['productID'];
            $img = $DB->get_row("SELECT * FROM `tbl_product_image` WHERE `productID` = $product_id")['productImage'];
        ?>
        <tr>
            <td><?=$product['productID']?></td>
            <td><img src="/view/images/Dishes/<?=$img?>" style="width: 20px;"></td>
            <td><?=$product['productName']?></td>
            <td><?=$product['productPrice']?></td>
            <td>
            <a href="/admin/update_product.php?id=<?=$product['productID']?>">
                    <button type="button" class="btn btn-danger">Update</button>
                </a>
                <a href="?delete=<?=$product['productID']?>">
                    <button type="button" class="btn btn-primary">Delete</button>
                </a>
            </td>
        </tr>
        <?php
        }
        ?>

    </tbody>
</table>

<?php
    include "layouts/footer.php";
?>