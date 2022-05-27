<?php
// session_start();
// session_destroy();
// header("Location: ../index.php")


session_start();

if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);

}

header("Location: login.php");
die;
?>