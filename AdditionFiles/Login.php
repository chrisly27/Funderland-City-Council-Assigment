<!DOCTYPE html>
<html>
<head>
<link  rel="stylesheet" type="text/css" href="Film_Details.css" />
</head>
<body>
	<?php
		include "../Connection/connection.php";
	session_start();
	if (!empty($_POST))
	{
		$password = $_POST['password'];
		if ($password == 'Domingos')
		{
			$_SESSION['loggedin'] = '1';
			header('Location: ../index.php');
			
			
			
			$surname = $_POST['logname'];
	
		$sql = "INSERT INTO `bg70ng`.`Funderland_Login_Details` 
				(`Login_ID`, `Surname`, `TS`) 
				VALUES (NULL, '$surname', CURRENT_TIMESTAMP)";
				
		//$sql;

	if (!mysql_query($sql,$con))
	{
		die("Error: ".mysql_error());
	}	

	mysql_close($con);
	
	
	
		}
		else
		{
			echo "Sorry, wrong password";
			echo "<hr /> <a href=\"Login.php\">Try Again</a>";
		}
	}
	
	else
	{?>
		<h1>Log-in</h1>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<input name="logname" type="text" placeholder="Enter your Surname" required />
		<br><br>
		<input name="password" type="password" id="password" placeholder="Enter Password" />
		<input type="submit" name="Submit" value="Log-in" />
		</form>
	<?php
	}
	?>

	<form action="../index.php">
	<input  type="submit" value="Back to Homepage">
	</form>
	
<!--This is the footer of the page-->
<?php
	echo "<p></p>";
	include "footer.php";
?>


</body>
</html>