<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <title>products</title>
</head>

<body>
    <div class="container my-5">
        <form method="post" action="function/delete_product.php">
            <h2 class="d-inline">product list</h2>
            <div class="float-end">
                <a href="view/add_product.php" class="btn btn-outline-primary">ADD</a>
                <input id="delete-product-btn" class="btn btn-outline-danger" type="submit" name="delete" value="MASS DELETE">
            </div>
            <div class="clear"></div>
            <hr>
    </div>
    <?php
    include_once 'function/connection.php';
    // select all products
    $select_all = "SELECT * FROM products";
    $result_all = $connect->query($select_all);
    $id = $SKU = $Name = $Price = $Size = $Weight = $Dimensions = [];
    $c = 0;
    if ($result_all->num_rows > 0) {
        // output data of each row
        while ($row = $result_all->fetch_assoc()) {
            $id[$c] = $row["id"];
            $SKU[$c] = $row["SKU"];
            $Name[$c] = $row["Name"];
            $Price[$c] = $row["Price"];
            $Size[$c] = $row["Size"];
            $Weight[$c] = $row["Weight"];
            $Height[$c] = $row["Height"];
            $Width[$c] = $row["Width"];
            $Length[$c] = $row["Length"];
            $c++;
        }
    }
    ?>
    <div class='container'>
        <div class="row">
            <?php
            for ($i = 0; $i < $c; $i++) {
            ?>
                <div class="col-lg-3 col-md-6 mb-5">
                    <div class="p-2 text-center fw-bold border border-2">
                        <div class="form-check">
                            <input id="check[]" class="form-check-input delete-checkbox" type="checkbox" name='check[]' value="<?php echo $id[$i]; ?>">
                        </div>
                        <p class="mb-1"> <?php echo $SKU[$i]; ?></p>
                        <p class="my-1"> <?php echo $Name[$i]; ?></p>
                        <p class="my-1"> <?php echo sprintf("%.2f", $Price[$i]) . "$"; ?></p>
                        <?php
                        if ($Size[$i] != 0) { ?>
                            <p class="my-1">size: <?php echo $Size[$i] . "MB"; ?></p>
                        <?php
                        }
                        if ($Weight[$i] != 0) { ?>
                            <p class="my-1">weight: <?php echo $Weight[$i] . "MB"; ?></p>
                        <?php
                        } else  if ($Height[$i] != 0 || $Width[$i] != 0 || $Length[$i] != 0) { ?>
                            <p class="my-1">dimensions: <?php echo $Height[$i] . "<small>x</small>" . $Width[$i] . "<small>x</small>" . $Length[$i]; ?></p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        </form>
    </div>

    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/index.js"></script>
</body>

</html>
<?php
// includes Files
include_once 'includes/footer.php';
?>