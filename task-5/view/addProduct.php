<?php
	if(isset($_GET['msg'])){
		$msg = $_GET['msg'];

		if($msg == 'null'){
			echo "null value found...";
		}		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>ADD Product</title>
</head>
<body>
<div>
<center>
		<a href="addProduct.php">Add Product</a> |
		<a href="searchProduct.php">Search Product</a> |
		<a href="viewProduct.php">Display Products</a>
	</center>
	<form method="post" action="../controller/userController.php">
		<fieldset>
			<legend>ADD PRODUCT</legend>
			<table>
				<tr>
					<td>Name</td>
					<td><input type="text" name="Name"></td>
					<td></td>
				</tr>
				<tr>
					<td>Buying Price</td>
					<td><input type="number" name="Buying_Price"></td>
					<td></td>
				</tr>
				<tr>
					<td>Selling Price</td>
					<td><input type="number" name="Selling_Price"></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="save" value="Save"></td>
					<td></td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>
</body>
</html>