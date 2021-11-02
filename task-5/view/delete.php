<?php	
	$title = "Delete Page";
	//echo $_GET['id'];
	//echo $_GET['Name'];
	//echo $_GET['Buying_Price'];
	//echo $_GET['Selling_Price'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete Product</title>
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
			<legend>Delete PRODUCT</legend>
			<table>
				<tr>
					<td>ID</td>
					<td><?=$_GET['id']?></td>
					<td><input type="hidden" name="id" value="<?=$_GET['id']?>"></td>
					<td></td>
				</tr>
				<tr>
					<td>Name</td>
                    <td><?=$_GET['Name']?></td>
					<td><input type="hidden" name="Name" value="<?=$_GET['Name']?>"></td>
					<td></td>
				</tr>
				<tr>
					<td>Buying Price</td>
                    <td><?=$_GET['Buying_Price']?></td>
					<td><input type="hidden" name="Buying_Price" value="<?=$_GET['Buying_Price']?>"></td>
					<td></td>
				</tr>
				<tr>
					<td>Selling Price</td>
                    <td><?=$_GET['Selling_Price']?></td>
					<td><input type="hidden" name="Selling_Price" value="<?=$_GET['Selling_Price']?>"></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="delete" value="Delete"></td>
					<td></td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>
</body>
</html>