<?php 
session_start();

	include("database.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];

		if(!empty($username) && !empty($password) && !is_numeric($username) && !empty($email) )
		{

			//save to database
			$user_id = random_num(20);

			$query = "insert into usuarios (user_id,username,password,email,rol_id) values ('$user_id','$username','$password','$email',2)";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>