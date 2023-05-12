<?php
    session_start();
    ob_start();
    include "lib/db.php";
    include "view/header.php";
    include "model/category.php";
?>

<style>
table,
td {
    border: 1px solid #333;
}

thead,
tfoot {
    background-color: #333;
    color: #fff;
}
</style>

<?php

  

    if( isset($_GET['id']) ){

        $orders = json_decode( $_GET['id'], true ) ?? [];
        $total = 0;
        $x = -1;
        foreach($orders as $order){
            
            $x++;

            $o = $DB->get_row("SELECT * FROM `tbl_product` WHERE productID = $order");
            $img = $DB->get_row("SELECT * FROM `tbl_product_image` WHERE `productID` = $order")['productImage'];
            // var_dump($o);
            $total += $o['productPrice'];
            ?>
<div style="width:100%;">
    <div>
        <ul>
            <li>Product name: <?=$o['productName']?></li>
            <li>Price: <?=$o['productPrice']?></li>
            <li><img src="/view/images/Dishes/<?=$img?>" style="with: 100px; height: 100px;"></li>
        </ul>
    </div>
    <div>

    </div>

</div>
<?php
            echo '<hr>';
        }

        echo 'Tong don hang: '.$total;
        ?>

<?php
        exit;
    }

    include "layouts/head.php";
?>

<table style="width: 100%; font-size: 30px;" id="example" class="table table-hover table-striped table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Custom ID</th>
            <th>Price</th>
            <th>Status</th>
            <th>payment</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $user = $_SESSION['username'];
        $customerID = $DB->get_row("SELECT * FROM `tbl_customer` WHERE user='$user'")['customerID'];
        
        foreach($DB->get_list("SELECT * FROM `tbl_order` WHERE customerID=$customerID ORDER BY orderID DESC") as $product){
           
        ?>
        <tr>
            <td><?=$product['orderID']?></td>

            <td>
                <?php
$orders2 = json_decode($product['productID'], true) ?? [];

$orders = [];
foreach($orders2 as $o){
    $check = true;

    foreach($orders as $o2){
        if($o == $o2){
            $check = false;
        }
    }

    if($check){
        $orders[] = $o;
    }
}

        $total = 0;
        $x = -1;
        foreach($orders as $order){

            $sl = 0;
            foreach($orders2 as $o){
                if($order == $o){
                    $sl++;
                }
            }

            $x++;

            $o = $DB->get_row("SELECT * FROM `tbl_product` WHERE productID = $order");
            $img = $DB->get_row("SELECT * FROM `tbl_product_image` WHERE `productID` = $order")['productImage'];
            // var_dump($o);
            $total += $o['productPrice'];
            ?>
                <div style="width:100%;">
                    <div>
                        <ul>
                            <li>Product name: <?=$o['productName']?></li>
                            <li>Price: <?=$o['productPrice']?></li>
                            <li>Số lượng: <input type="number" value="<?=$sl?>" readonly></li>
                            <li><img src="/view/images/Dishes/<?=$img?>" style="with: 100px; height: 100px;"></li>
                        </ul>
                    </div>
                    <div>

                    </div>

                </div>
                <?php
            echo '<hr>';
        }
        ?>
            </td>

            <td><?=$product['price']?></td>
            <td><?=$product['status']?></td>
            <td><?=$product['payment']?></td>
            <?php
        }
        ?>

    </tbody>
</table>







<?php
    include "view/footer.php";