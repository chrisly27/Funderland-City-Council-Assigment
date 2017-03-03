<?php
	session_start();
	if (isset($_SESSION['loggedin']))
	{
		//user is logged in
		echo "Welcome...<br/>";
		
		echo '<a href="../index.php">Log off</a> <hr />';
	}
	else
	{
		//Redirect the user to the login form
		//session_destroy();
		echo 'Click here to <a href="Destroy.php">Log off</a>';
		
		
		header('Location: Login.php');
	}
?>
