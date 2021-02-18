<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$role = $_POST['role'];
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$name = $_POST['name'];
		$sql = "INSERT INTO users (`role`, `username`, `password`, `name`) VALUES ('$role', '$username', '$password', '$name')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php');
?>