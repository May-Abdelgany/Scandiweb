<?php
include_once 'connection.php';
if (isset($_POST['delete'])) {

    if (isset($_POST['check'])) {
        foreach ($_POST['check'] as $deleteid) {

            $delete_product = "DELETE from products WHERE id=" . $deleteid;
            $connect->query($delete_product);
        }
        header("Location:../product.php");
    }
}
