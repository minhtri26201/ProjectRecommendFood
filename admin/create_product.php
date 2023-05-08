<?php
    include "layouts/head.php";
    include __DIR__.'/../lib/db.php';

    if(isset($_POST['create'])){
        $img = $_POST['img'];

        unset($_POST['create']);
        unset($_POST['img']);

        $DB->insert('tbl_product', $_POST);

        $product_id = $DB->get_row("SELECT * FROM tbl_product ORDER BY productID DESC")['productID'];
        $DB->insert('tbl_product_image', [
            'productID' => $product_id,
            'productImage' => $img
        ]);

        ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
Swal.fire({
    icon: 'success',
    title: 'Thong bao',
    text: 'create product successfully'
})

</script>

<?php
    }
?>

<form action method="post">


<label>Product Name:</label>
<input name="productName" class="form-control">
<br>

<label>Product Price:</label>
<input name="productPrice" class="form-control">
<br>

<label>Product image:</label>
<input name="img" class="form-control">
<br>


<label>Status</label>
<select class="form-control" name="productStatus">
    <option value="checking">Checking</option>
    <option value="delivering">Delivering</option>
    <option value="complete">Complete</option>
    <option value="cancel">Cancel</option>
</select>
<br>

<button class="btn btn-primary btn-block" name="create">Create</button>
</form>

<?php
    include "layouts/footer.php";
?>