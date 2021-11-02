<?php
	$title = "Search Page";
	//include 'header.php';
	require_once('../model/usersModel.php');
	$users = getAllUser();
?>

<head>
	<title>Search Products</title>
</head>

<center>
		<a href="addProduct.php">Add Product</a> |
		<a href="searchProduct.php">Search Product</a> |
		<a href="viewProduct.php">Display Products</a>
	</center>


	<div>
    <form method="post" action="../controller/userController.php">
    <fieldset>    
        <legend>SEARCH</legend>
		<table border="1">
            <tr>
				<td colspan=2><b>Search: <input type="text" name="search"><b></td>
                <td><input type="submit" name="submit-search" value="Search"></td>
            </tr>
            
			<tr>
                
				<td><b>NAME<b></td>
				<td><b>PROFIT<b></td>
				<td><b>ACTION<b></td>
			</tr>

			<?php  for($i=0; $i<count($users); $i++){ ?>
				<tr>
					<td><?=$users[$i]['Name']?></td>
					<td><?=$users[$i]['Selling_Price']-$users[$i]['Buying_Price']?></td>
					<td>
						<a href="edit.php?id=<?=$users[$i]['id']?>&Name=<?=$users[$i]['Name']?>&Buying_Price=<?=$users[$i]['Buying_Price']?>&Selling_Price=<?=$users[$i]['Selling_Price']?>">Edit</a> |
						<a href="delete.php?id=<?=$users[$i]['id']?>&Name=<?=$users[$i]['Name']?>&Buying_Price=<?=$users[$i]['Buying_Price']?>&Selling_Price=<?=$users[$i]['Selling_Price']?>">Delete</a>
					</td>
				</tr>
			<?php } ?>
		</table>
    </fieldset>
	</div>