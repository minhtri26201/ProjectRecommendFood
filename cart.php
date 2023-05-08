<?php
session_start();
 include "lib/db.php";

    if( isset($_GET['order']) ){

        $orders = json_decode( $_GET['order'], true ) ?? [];
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
      <button onclick="deleteCart(<?=$x?>)">delete</button>
    </div>

</div>
<?php
            echo '<hr>';
        }

        echo 'TOTAL PRICE:  '.$total;
        ?>


<label>Payment Type:</label>
<select class="form-control" id="payment_type">
    <option value="tienmat">Cash</option>
    <option value="atm">ATM</option>
</select>

<button onclick="thanhtoan()">Oder Now</button>
<?php
        exit;
    }

    if( isset($_GET['thanhtoan']) ){
       
        $orders = json_decode( $_GET['thanhtoan'], true ) ?? [];
        $total = 0;
        foreach($orders as $order){
            $o = $DB->get_row("SELECT * FROM `tbl_product` WHERE productID = $order");
            $total += $o['productPrice'];
        }

        ?>
<script>
localStorage.removeItem("cart");
</script>
<?php
        $u = $_SESSION['username'];
        $t = $_GET['t'];
        $c_id = $DB->get_row("SELECT * FROM `tbl_customer` WHERE user = '$u'")['customerID'];
        // var_dump($c_id); exit;

        //luu database
        $DB->insert('`tbl_order`', [
            'productID' => json_encode($orders),
            'customerID' => $c_id,
            'price' => $total,
            'payment' => $t
        ]);
        ?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
        Swal.fire({
            icon: 'error',
            title: 'Notice',
            text: 'Order Success!'
        })
        
<?php
    }
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<div id="cart"></div>
<div id="thanhtoan"></div>

<script>
$("#cart").load('/cart.php?order=' + window.localStorage.getItem('cart'));

function thanhtoan() {
    let t = $("#payment_type").val();

    $("#thanhtoan").load('/cart.php?thanhtoan=' + window.localStorage.getItem('cart') + '&t=' +t);
    setTimeout(() => {
        $("#cart").load('/cart.php?order=' + window.localStorage.getItem('cart'));
    }, 1000);
}

function deleteCart(id){
    setTimeout(() => {
        var a = JSON.parse(window.localStorage.getItem('cart'));
        let b = [];
        for(i in a){
            if(i != id){
                b.push(a[i]);
            }
        }

        b = JSON.stringify(b);
        window.localStorage.setItem('cart', b);

        $("#cart").load('/cart.php?order=' + window.localStorage.getItem('cart'));
    }, 1000);
}
</script>