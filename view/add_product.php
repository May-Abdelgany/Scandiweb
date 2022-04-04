<!DOCTYPE html>
<html>

<head>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/all.min.css" rel="stylesheet">
	<title>add product</title>
</head>

<body>
	<div class="container my-5">
		<h2 class="d-inline">Product Add</h2>
		<h3 class="data"></h3>
		<div class="float-end">
			<form method="post" action="../function/add_product.php" class="form-group">
				<input type="submit" name="add" value="save" class="btn btn-outline-primary save">
				<a href="../product.php" class="btn btn-outline-danger">cancel</a>
		</div>
		<div style="clear: both;"></div>
		<hr>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group row my-3">
						<label for="Sku" class="col-sm-3 col-form-label fw-bold">SKU</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="SKU" name="SKU" required>
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
							<input type="text" class="form-control" id="Name" name="Name" required>
						</div>
					</div>
					<div class="form-group row my-3">
						<label for="Price" class="col-sm-3 col-form-label fw-bold">Price($)</label>
						<div class="col-sm-9">
							<input type="number" class="form-control" id="Price" name="Price" required>
						</div>
					</div>
					<div class="form-group row my-3">
						<label for="type" class="col-sm-3 col-form-label fw-bold">Type Switcher</label>
						<div class="col-sm-9">
							<select class="form-select" name="type" aria-label="Default select example" id="type" onchange="change(this.value)" required>
								<option selected disabled value="">Type Switcher</option>
								<option value="1">DVD-disc</option>
								<option value="2">Book</option>
								<option value="3">Furniture</option>
							</select>
						</div>
						<div class="form-group row my-3  DVD-disc  visually-hidden">
							<label for="Size" class="col-sm-3 col-form-label fw-bold">Size(MB)</label>
							<div class="col-sm-9">
								<input type="number" class="form-control" id="Size" name="Size" required>
							</div>
							<p class="fw-bold mt-3 ">please,provide size with (MB).</p>
						</div>
					</div>
					<div class="form-group row my-3  Book visually-hidden">
						<label for="Weight" class="col-sm-3 col-form-label fw-bold">Weight(KG)</label>
						<div class="col-sm-9">
							<input type="number" class="form-control" id="Weight" name="Weight" required>
						</div>
						<p class="fw-bold mt-3">please,provide weight with (KG).</p>
					</div>
					<div class="Furniture  visually-hidden">
						<div class="form-group row my-3">
							<label for="Height" class="col-sm-3 col-form-label fw-bold">Height</label>
							<div class="col-sm-9">
								<input type="number" class="form-control" id="Height" name="Height" >
							</div>
						</div>
						<div class="form-group row my-3">
							<label for="Width" class="col-sm-3 col-form-label fw-bold">Width</label>
							<div class="col-sm-9">
								<input type="number" class="form-control" id="Width" name="Width" >
							</div>
						</div>
						<div class="form-group row my-3">
							<label for="Length" class="col-sm-3 col-form-label fw-bold">Length</label>
							<div class="col-sm-9">
								<input type="number" class="form-control" id="Length" name="Length" >
							</div>
						</div>
					</div>
				</div>
				</form>
			</div>
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