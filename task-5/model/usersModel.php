<?php
	require_once('DB_config.php');
	
	function getUserByID($Name){

		$conn = getConnection();
		$sql = "select * from products where Name='{$Name}'";
		$result = mysqli_query($conn, $sql);
		$queryResult=mysqli_num_rows($result);
		//$search=[];
		
		//$user = mysqli_fetch_assoc($result);
		echo "<center><a href='addProduct.php?'>Add Product</a> |
			<a href='searchProduct.php?'>Search Product</a> |
			<a href='viewProduct.php?'>Display Products</a></center>";
		echo "<br>There are ".$queryResult." results!<br>";
		if($queryResult>0){
			while($row=mysqli_fetch_assoc($result))
			{
				//array_push($search, $row);
				echo "<div>
				<p>Name :".$row['Name']."</p>
				<p>Buying Price: ".$row['Buying_Price']."</p>
				<p>Selling Price: ".$row['Selling_Price']."</p>
				</div>";
			}
			//return $search;
		}else{
			echo "There are no result matching your search";
		}
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from products";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($user = mysqli_fetch_assoc($result)){
			array_push($users, $user);
		}

		return $users;
	}


	function deleteUser($id){
		$conn = getConnection();
		$sql = "delete from products where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function updateUser($user, $id){
		$conn = getConnection();
		$sql = "update products set Name='{$user['Name']}',Buying_Price='{$user['Buying_Price']}', Selling_Price='{$user['Selling_Price']}' where id={$user['id']}";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function insertUser($user){
		$conn = getConnection();
		$sql="insert into products values ('{ }','{$user['Name']}','{$user['Buying_Price']}','{$user['Selling_Price']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>