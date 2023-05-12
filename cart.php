<?php
session_start();
 include "lib/db.php";

    if( isset($_GET['order']) ){

        $orders2 = json_decode( $_GET['order'], true ) ?? [];
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

            // echo $sl; exit;

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
    Số lượng: <input type="number" value="<?=$sl?>" readonly>
        <button onclick="upc(<?=$o['productID']?>)">+</button>
        <button onclick="downc(<?=$o['productID']?>)">-</button>
       
        <br>
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
    if(!window.localStorage.getItem('cart')){
        alert('Gio hang rong');
        return;
    }

    let t = $("#payment_type").val();

    $("#thanhtoan").load('/cart.php?thanhtoan=' + window.localStorage.getItem('cart') + '&t=' +t);
    setTimeout(() => {
        $("#cart").load('/cart.php?order=' + window.localStorage.getItem('cart'));
        alert('Ban da dat hang thanh cong');
    }, 1000);
}


function upc(id) {
    var a = JSON.parse(window.localStorage.getItem('cart'));
    var b = a;
    b.push(id);

    b = JSON.stringify(b);
        window.localStorage.setItem('cart', b);

    $("#cart").load('/cart.php?order=' + window.localStorage.getItem('cart'));
}


function downc(id) {
    var a = JSON.parse(window.localStorage.getItem('cart'));

    var count = 0;
    for(i in a){
        if(a[i] == id){
            count++;
        }
    }
    if(count <= 1){
        return;
    }

    var b = a.reverse();
    for(i in b){
        if(b[i] == id){
            b.splice(i, 1);
            break;
        }
    }
    b = b.reverse();

    b = JSON.stringify(b);
        window.localStorage.setItem('cart', b);

    $("#cart").load('/cart.php?order=' + window.localStorage.getItem('cart'));
}

function deleteCart(id){
    if(confirm("Ban co chac muon xoa khong")){
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
   
}
</script>