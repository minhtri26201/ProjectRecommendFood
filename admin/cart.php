<?php

    include __DIR__.'/../lib/db.php';

    if( isset($_POST['update']) ){
        $id = $_POST['id'];
        $status = $_POST['status'];

        $DB->update('tbl_order', [
            'status' => $status,
        ], "orderID=$id");
    }

    if( isset($_GET['id']) ){
        // echo 123; exit;
        $orders2 = json_decode( $_GET['id'], true ) ?? [];
        $total = 0;
        $x = -1;


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

        echo 'Tong don hang: '.$total;
        ?>

<?php
        exit;
    }

    include "layouts/head.php";
?>

<table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Custom ID</th>
            <th>Price</th>
            <th>Status</th>
            <th>Payment type:</th>

            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($DB->get_list("SELECT * FROM `tbl_order`") as $product){
           
        ?>
        <tr>
            <td><?=$product['orderID']?></td>
            <td><?=$product['customerID']?></td>
            <td><?=$product['price']?></td>
            <td><?=$product['status']?></td>

            <td><?=$product['payment']?></td>



            <td>

                <a onclick="viewOrder(<?=json_encode(json_decode($product['productID']))?>)">
                    <button type="button" class="btn btn-primary">Show list</button>
                </a>

                <hr>

                <form action method="POST">
                    <input type="hidden" name="id" value="<?=$product['orderID']?>">
                    <label>Status</label>
                    <select class="form-control" name="status">
                        <option value="checking" <?=$product['status']=='checking'?'selected':''?>>Checking</option>
                        <option value="delivering" <?=$product['status']=='delivering'?'selected':''?>>Delivering</option>
                        <option value="complete" <?=$product['status']=='complete'?'selected':''?>>Complete</option>
                        <option value="cancel" <?=$product['status']=='cancel'?'selected':''?>>Cancel</option>
                    </select><br>
                    <button name="update" class="btn btn-warning">Update</button>
                </form>
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



<button style="display: none;" type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal"
    data-target="#exampleModal" id="exampleModa3">
    Orders
</button>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
function viewOrder(i) {
    // $("#dx").load("/admin/cart.php?id="+i);
    document.getElementById('exampleModa3').click();
    i = JSON.stringify(i);
    $("#dx").load("/admin/cart.php?id=" + i);
}

$(document).ready(function(){
    setTimeout(() => {
        $(".sorting_asc").click();
    }, 2500);
});
</script>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">List orders</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="dx">

            </div>

        </div>
    </div>
</div>