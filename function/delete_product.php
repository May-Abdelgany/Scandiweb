<?php
include_once 'connection.php';
if (isset($_POST['<input id="delete-product-btn" class="btn btn-outline-danger" type="submit" name="MASS DELETE" value="MASS DELETE">'])) {

    if (isset($_POST['check'])) {
        foreach ($_POST['check'] as $deleteid) {

            $delete_product = "DELETE from products WHERE id=" . $deleteid;
            $connect->query($delete_product);
        }
        header("Location:../product.php");
    }
}
