<!DOCTYPE html>
<html>

<head>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/all.min.css" rel="stylesheet">
	<title>add product</title>
</head>

<body>
	<div class="container my-5">
		<form method="post" action="../function/add_product.php" class="form-group" id='product_form'>
			<h2 class="d-inline">Product Add</h2>
			<div class="float-end">
				<button type="submit" name="Save" class="btn btn-outline-primary">Save</button>
				<button tybe="button" onclick="window.location.href='../product.php'" class="btn btn-outline-danger">Cancel</button>
			</div>
			<div style="clear: both;"></div>
			<hr>
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group row my-3">
							<label for="Sku" class="col-sm-3 col-form-label fw-bold">SKU</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="sku" name="SKU" required>
								<?php
								$url = "http://localhost/task/view/add_product.php";
								$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
								if ($url != $actual_link) { ?>
									<p class="alert alert-danger mb-0">please enter unique SKU</p>
								<?php
								} ?>
							</div>
						</div>
						<div class="form-group row my-3">
							<label for="Name" class="col-sm-3 col-form-label fw-bold">Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="name" name="Name" required>
							</div>
						</div>
						<div class="form-group row my-3">
							<label for="Price" class="col-sm-3 col-form-label fw-bold">Price($)</label>
							<div class="col-sm-9">
								<input type="number" class="form-control" id="price" name="Price" required>
							</div>
						</div>
						<div class="form-group row my-3">
							<label for="type" class="col-sm-3 col-form-label fw-bold">Type Switcher</label>
							<div class="col-sm-9">
								<select class="form-select"  aria-label="Default select example" id="productType" onchange="change(this.value)" required>
									<option selected disabled value="">Type Switcher</option>
									<option id="DVD" value="1">DVD</option>
									<option id="Book" value="2">Book</option>
									<option id="Furniture" value="3">Furniture</option>
								</select>
							</div>
						</div>
						<div class="show">

						</div>
					</div>
				</div>
		</form>
	</div>
	</div>
	<div class="mt-5">
		<?php
		include_once '../includes/footer.php'
		?>
	</div>
	<script src="../js/jquery-3.6.0.js"></script>
	<script src="../js/bootstrap.bundle.min.js"></script>
	<script src="../js/index.js"></script>
</body>

</html>