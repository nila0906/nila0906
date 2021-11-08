<?php
	require_once('DB_config.php');
	
	function getUserByID($Name){

		$conn = getConnection();
		$sql = "select * from products where Name='{$Name}'";
		$result = mysqli_query($conn, $sql);
		$queryResult=mysqli_num_rows($result);
		//$search=[];
		
		//$user = mysqli_fetch_assoc($result);
		echo "<center><a href='addName.php?'>Add Name</a> |
			<a href='searchNmae.php?'>Search Nmae </a> |
			<a href='viewName.php?'>Display Name</a></center>";
		echo "<br>There are ".$queryResult." results!<br>";
		if($queryResult>0){
			while($row=mysqli_fetch_assoc($result))
			{
				//array_push($search, $row);
				echo "<div>
				<p>Name :".$row['Name']."</p>
				<p>Email: ".$row['Email']."</p>
				<p>Username: ".$row['username']."</p>
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
		$sql = "delete from Registrations where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function updateUser($user, $id){
		$conn = getConnection();
		$sql = "update Registrations set Name='{$user['Name']}',Email='{$user['email']}', Username='{$user['Username']}' where id={$user['id']}";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function insertUser($user){
		$conn = getConnection();
		$sql="insert into Registrations values ('{ }','{$user['Name']}','{$user['Email']}','{$user['Username']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>