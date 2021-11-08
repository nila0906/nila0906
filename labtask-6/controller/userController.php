<?php
	session_start();
	require_once('../model/usersModel.php');
	

	if(isset($_REQUEST['save'])){

		$Name 	= $_POST['Name'];
		$Email 	= $_POST['Email'];
		$Username 	= $_POST['Username'];

		$user = [
			'Name'	=>$Name, 
			'Email'=>$Email, 
			'Username'=>$Username,
		];
		$status = insertUser($user);

		if($status){
			header('location: ../view/viewRegistration.php');
			}else{
			echo "Db error";
			}
	}

	if(isset($_REQUEST['edit'])){
		
		$Name 	= $_POST['Name'];
		$Email	= $_POST['Email'];
		$username 	= $_POST['Username'];
		$id= $_POST['id'];

		$user = [
			'id'=>$id,
			'Name'	=>$Name, 
			'Email'=>$Email, 
			'Username'=>$Username,
		];
		$status = updateUser($user, $id);

		if($status){
			header('location: ../view/viewRegistration.php');
			}else{
			echo "Db error";
			}
	}

	if(isset($_REQUEST['delete'])){
		
		$Name 	= $_POST['Name'];
		$Email	= $_POST['Email'];
		$Username 	= $_POST['Username'];
		$id= $_POST['id'];

		/*$user = [
			'id'=>$id,
			'Name'	=>$Name, 
			'Email'=>$Email, 
			'Username'=>$Username,
		];*/
		$status = deleteUser($id);

		if($status){
			header('location: ../view/viewRegistration.php');
			}else{
			echo "Db error";
			}
	}

	if(isset($_REQUEST['submit-search'])){
		
		$Name 	= $_POST['search'];

		/*$user = [
			'id'=>$id,
			'Name'	=>$Name, 
			'Email'=>Email, 
			'Username'=>$Username,
		];*/
		$status = getUserByID($Name);
		/*if($status){
			header('location: ../view/result.php');
			}else{
			echo "Db error";
			}*/
	}
?>