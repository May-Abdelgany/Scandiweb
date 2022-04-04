<?php
$error = '';
if (isset($_POST['add'])) {
	include_once 'connection.php';
	$c = 0;
	$SKU = $_POST['SKU'];
	$Name = $_POST['Name'];
	$Price = $_POST['Price'];
	$select_all = "SELECT SKU FROM products";
	$result_all = $connect->query($select_all);
	if ($result_all->num_rows > 0) {
		// output data of each row
		while ($row = $result_all->fetch_assoc()) {
			$SKU2[$c] = $row["SKU"];
			if ($SKU2[$c] == $SKU) {
				$error = "error";
			} else {
				$c++;
			}
		}
	}
	if ($error == '') {
		if ($_POST['type'] == '1') {
			$Size = $_POST['Size'];
			$Weight = 0;
			$Height = 0;
			$Width = 0;
			$Length = 0;
			$insert_product = "INSERT INTO  products ( SKU ,  Name ,  Price ,  Size ,  Weight ,  Height ,  Width ,  Length ) VALUES ('$SKU','$Name','$Price' ,'$Size' ,'$Weight' ,$Height , $Width,'$Length')";
			$connect->query($insert_product);
			header("Location:../product.php");
		} else if ($_POST['type'] == '2') {
			$Size = 0;
			$Weight = $_POST['Weight'];
			$Height = 0;
			$Width = 0;
			$Length = 0;
			$insert_product = "INSERT INTO  products ( SKU ,  Name ,  Price ,  Size ,  Weight ,  Height ,  Width ,  Length ) VALUES ('$SKU','$Name','$Price' ,'$Size' ,'$Weight' ,$Height , $Width,'$Length')";
			$connect->query($insert_product);
			header("Location:../product.php");
		} else {
			$Size = 0;
			$Weight = 0;
			$Height = $_POST['Height'];
			$Width = $_POST['Width'];
			$Length = $_POST['Length'];
			$insert_product = "INSERT INTO  products ( SKU ,  Name ,  Price ,  Size ,  Weight ,  Height ,  Width ,  Length ) VALUES ('$SKU','$Name','$Price' ,'$Size' ,'$Weight' ,$Height , $Width,'$Length')";
			$connect->query($insert_product);
			header("Location:../product.php");
		}
	} else {
		header("Location:../view/add_product.php? error = $error");
	}
}
