<?php
	session_start();
	require_once('../model/usersModel.php');
	

	if(isset($_REQUEST['save'])){

		$Name 	= $_POST['Name'];
		$Buying_Price 	= $_POST['Buying_Price'];
		$Selling_Price 	= $_POST['Selling_Price'];

		$user = [
			'Name'	=>$Name, 
			'Buying_Price'=>$Buying_Price, 
			'Selling_Price'=>$Selling_Price,
		];
		$status = insertUser($user);

		if($status){
			header('location: ../view/viewProduct.php');
			}else{
			echo "Db error";
			}
	}

	if(isset($_REQUEST['edit'])){
		
		$Name 	= $_POST['Name'];
		$Buying_Price 	= $_POST['Buying_Price'];
		$Selling_Price 	= $_POST['Selling_Price'];
		$id= $_POST['id'];

		$user = [
			'id'=>$id,
			'Name'	=>$Name, 
			'Buying_Price'=>$Buying_Price, 
			'Selling_Price'=>$Selling_Price,
		];
		$status = updateUser($user, $id);

		if($status){
			header('location: ../view/viewProduct.php');
			}else{
			echo "Db error";
			}
	}

	if(isset($_REQUEST['delete'])){
		
		$Name 	= $_POST['Name'];
		$Buying_Price 	= $_POST['Buying_Price'];
		$Selling_Price 	= $_POST['Selling_Price'];
		$id= $_POST['id'];

		/*$user = [
			'id'=>$id,
			'Name'	=>$Name, 
			'Buying_Price'=>$Buying_Price, 
			'Selling_Price'=>$Selling_Price,
		];*/
		$status = deleteUser($id);

		if($status){
			header('location: ../view/viewProduct.php');
			}else{
			echo "Db error";
			}
	}

	if(isset($_REQUEST['submit-search'])){
		
		$Name 	= $_POST['search'];

		/*$user = [
			'id'=>$id,
			'Name'	=>$Name, 
			'Buying_Price'=>$Buying_Price, 
			'Selling_Price'=>$Selling_Price,
		];*/
		$status = getUserByID($Name);
		/*if($status){
			header('location: ../view/result.php');
			}else{
			echo "Db error";
			}*/
	}
?>